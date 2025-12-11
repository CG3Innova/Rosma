<?php
// Definir acceso seguro y cargar configuración
define('SECURE_ACCESS', true);
$config = require '../../config_forms.php';

// Configuración de PHP
ini_set('display_errors', 0);
ini_set('allow_url_fopen', true);
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));
header('Content-type: application/json');
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");

// Incluir PHPMailer
require 'php-mailer/src/PHPMailer.php';
require 'php-mailer/src/SMTP.php';
require 'php-mailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configuración para subida de archivos
const ALLOWED_EXTENSIONS = ['pdf', 'doc', 'docx', 'jpg', 'png'];
const MAX_FILE_SIZE = 5242880; // 5MB

// Mapeo de nombres de campos
const FIELD_NAMES = [
    'phone' => 'Teléfono',
    'message' => 'Mensaje',
    'para_quien_es_el_regalo' => '¿Para quién es el regalo?',
    'quien_lo_encarga' => '¿Quién lo encarga?',
    'fecha_de_recogida' => 'Fecha de recogida',
    'dedicatoria' => 'Dedicatoria',
    'con buena cara' => 'Con buena cara',
    'dame tu mano' => 'Dame tu mano',
    'pisa fuerte' => 'Pisa fuerte',
    'piel de seda' => 'Piel de seda',
    'fotodepilacion' => 'Fotodepilación',
    'para que estes mas guapa' => 'Para que estés más guapa',
    'formando curvas' => 'Formando curvas',
    'a toda velocidad' => 'A toda velocidad',
    'para tu mirada' => 'Para tu mirada',
    'escote provocador' => 'Escote provocador',
    'para mama' => 'Para mamá',
    'para que te mimes' => 'Para que te mimes',
    'para tu bienestar' => 'Para tu bienestar',
    'servicios medicos' => 'Servicios médicos',
    'antiacne' => 'Antiacné',
    'manicura spa' => 'Manicura SPA',
    'pedicura spa' => 'Pedicura SPA',
    'ibx manicura' => 'IBX Manicura',
    'ibx pedicura' => 'IBX Pedicura',
    'electrica' => 'Eléctrica',
    'cera fria' => 'Cera fría',
    'lifting de pestanas' => 'Lifting de pestañas',
    'tinte de pestanas y cejas' => 'Tinte de pestañas y cejas',
    'anticelulitico' => 'Anticelulítico',
    'drenaje linfatico' => 'Drenaje linfático',
    'drenaje energetico' => 'Drenaje energético',
    'cavitacion' => 'Cavitación',
    'indiba' => 'INDIBA',
    'presoterapia termopresoterapia' => 'Presoterapia / Termopresoterapia',
    'la capsula del tiempo' => 'La cápsula del tiempo',
    'tratamiento cuello doble menton escote' => 'Tratamiento cuello, doble mentón y escote',
    'antiestrias' => 'Antiestrías',
    'preparto postparto' => 'Preparto / Postparto',
    'ritual islas del pacifico' => 'Ritual Islas del Pacífico',
    'ritual maravilals del artico' => 'Ritual Maravillas del Ártico',
    'nutricion' => 'Nutrición',
    'acido hialuronico reticulado' => 'Ácido hialurónico reticulado',
    'peeling quimicos' => 'Peelings químicos',
    'verrugas puntos rubi' => 'Verrugas puntos rubí',
];

class FormHandler {
    private $config;
    private $uploadedFiles = [];

    public function __construct($config) {
        $this->config = $config;
    }

    public function process() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->respondWithError('Método no permitido');
        }

        if (!isset($_POST['form_type'])) {
            $this->respondWithError('Tipo de formulario no especificado');
        }

        $this->validateRequest();
        $this->handleFileUploads();
        $this->sendEmail();
    }

    private function validateRequest() {
        // Validar reCAPTCHA
        $recaptchaResponse = $_POST['g-recaptcha-response'] ?? '';
        if (empty($recaptchaResponse)) {
            $this->respondWithError('Error de reCAPTCHA: No se ha proporcionado respuesta');
        }

        $responseData = $this->validateRecaptcha($this->config['recaptcha_secret_key'], $recaptchaResponse);
        if (!$responseData->success) {
            $this->respondWithError('Error de reCAPTCHA: Verificación fallida');
        }

        // Validar email si existe
        if (isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->respondWithError('Email inválido');
        }

        // Verificar spam
        if ($this->isSpam()) {
            $this->respondWithError('Detectado como spam');
        }
    }

    private function handleFileUploads() {
        if (!isset($_FILES['adjunto'])) {
            return;
        }

        $files = $this->reorderFiles($_FILES['adjunto']);
        foreach ($files as $file) {
            $this->validateAndProcessFile($file);
        }
    }

    private function validateAndProcessFile($file) {
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return;
        }

        $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($extension, ALLOWED_EXTENSIONS)) {
            $this->respondWithError('Tipo de archivo no permitido');
        }

        if ($file['size'] > MAX_FILE_SIZE) {
            $this->respondWithError('El archivo excede el tamaño máximo permitido');
        }

        $tempName = tempnam(sys_get_temp_dir(), 'FORM_');
        if (move_uploaded_file($file['tmp_name'], $tempName)) {
            $this->uploadedFiles[] = [
                'path' => $tempName,
                'name' => $file['name']
            ];
        }

        $sanitizedFileName = preg_replace("/[^a-zA-Z0-9._-]/", "_", $file['name']);
        return ['success' => true, 'sanitizedFileName' => $sanitizedFileName];
    }

    private function sendEmail() {
        $mail = new PHPMailer(true);

        try {
            $this->configureMailer($mail);
            $this->setEmailContent($mail);
            $this->attachFiles($mail);

            $mail->send();
            $this->cleanup();
            
            echo json_encode(['success' => true]);
            exit;
        } catch (Exception $e) {
            $this->cleanup();
            $this->respondWithError('Error al enviar el email: ' . $e->getMessage());
        }
    }

    private function configureMailer($mail) {
        $mail->isSMTP();
        $mail->Host = $this->config['smtp_host'];
        $mail->SMTPAuth = true;
        $mail->Username = $this->config['smtp_user'];
        $mail->Password = $this->config['smtp_password'];
        $mail->SMTPSecure = $this->config['smtp_secure'];
        $mail->Port = $this->config['smtp_port'];
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);

        $mail->setFrom($this->config['smtp_user']);
        $mail->addAddress($this->config['recipient_email']);
        $mail->AddBCC('webmaster@cg3innova.es');
        
        if (isset($_POST['email'])) {
            $mail->addReplyTo($this->sanitizeInput($_POST['email']));
        }
    }

    private function setEmailContent($mail) {
        $formType = $this->sanitizeInput($_POST['form_type']);
        $mail->Subject = 'Formulario de contacto - Rosma Belleza';
        $mail->Body = $this->buildEmailBody($formType);
    }

    private function buildEmailBody($formType) {
        $fields = "";
        
        // Procesar campos normales (excluyendo categorías)
        foreach ($_POST as $key => $value) {
            if (!in_array($key, ['g-recaptcha-response', 'form_time', 'website', 'adjunto', 'form_type', 'terms']) 
                && !empty($value)) { 
                
                if (is_array($value)) {
                    $value = implode(', ', array_map([$this, 'sanitizeInput'], $value));
                } else {
                    $value = $this->sanitizeInput($value);
                }

                $fieldName = FIELD_NAMES[$key] ?? ucwords(str_replace('_', ' ', $key));
                $fields .= "<h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'><strong>{$fieldName}:</strong> {$value}</h2>";
            }
        }

        // Información de archivos adjuntos
        if (!empty($this->uploadedFiles)) {
            $fields .= "<h2 style='font-weight: 200; font-size: 16px; margin: 20px 0; color: #333333;'><strong>Archivos adjuntos:</strong> ";
            $fileNames = array_map(function($file) {
                return $this->sanitizeInput($file['name']);
            }, $this->uploadedFiles);
            $fields .= implode(', ', $fileNames) . "</h2>";
        }

        return <<<EOD
        <html>
            <head>
                <meta name="viewport" content="width=device-width" />
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            </head>
            <body>
                <table bgcolor="#fafafa" style="width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-size: 100%; line-height: 1.6;">
                    <tr>
                        <td></td>
                        <td bgcolor="#FFFFFF" style="border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;">
                            <div style="padding:20px; max-width:600px; margin:0 auto; display:block;">
                                <table style="width: 100%;">
                                    <tr>
                                        <td>
                                            <h1 style="font-weight: 200; font-size: 36px; margin: 20px 0 30px 0; color: #333333;">Formulario de contacto</h1>
                                            <div style="margin-bottom: 10px; font-weight: normal; font-size:16px; color: #333333;">{$fields}</div>
                                            <p style="text-align: center; display: block; padding-top:20px; font-weight: bold; margin-top:30px; color: #666666; border-top:1px solid #dddddd;">ROSMA BELLEZA</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </body>
        </html>
        EOD;
    }

    private function attachFiles($mail) {
        foreach ($this->uploadedFiles as $file) {
            $mail->addAttachment($file['path'], $file['name']);
        }
    }

    private function cleanup() {
        foreach ($this->uploadedFiles as $file) {
            if (file_exists($file['path'])) {
                unlink($file['path']);
            }
        }
    }

    private function validateRecaptcha($secret, $response) {
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $secret,
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            ]
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        return json_decode($result);
    }

    private function isSpam() {
        if (!empty($_POST['website'])) {
            return true;
        }

        $formTime = intval($_POST['form_time'] ?? 0);
        return (time() - $formTime < 5);
    }

    private function sanitizeInput($data) {
        return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
    }

    private function reorderFiles($files) {
        $reordered = [];
        foreach ($files as $key => $all) {
            foreach ($all as $i => $val) {
                $reordered[$i][$key] = $val;
            }
        }
        return $reordered;
    }

    private function respondWithError($message) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'error' => $this->sanitizeInput($message)
        ]);
        exit;
    }
}

// Iniciar el procesamiento del formulario
try {
    $handler = new FormHandler($config);
    $handler->process();
} catch (Exception $e) {
    header('Content-Type: application/json');
    echo json_encode([
        'success' => false,
        'error' => 'Error interno del servidor'
    ]);
}