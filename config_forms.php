<?php
// Previene el acceso directo al archivo config.php
if (!defined('SECURE_ACCESS')) {
    http_response_code(403);
    exit('Acceso no permitido.');
}

// Devuelve un array asociativo con las configuraciones SMTP y de reCAPTCHA
return [
    'smtp_host' => 'mail.rosmabelleza.com',
    'smtp_user' => 'rosma@rosmabelleza.com',
    'smtp_password' => 'AccesoRosma25',
    'smtp_secure' => 'ssl',
    'smtp_port' => 465,
    'recipient_email' => 'rosma@rosmabelleza.com',
    'recaptcha_secret_key' => '6LcO39cpAAAAAATGPJlshGGrYYtQn6Jbvx0jJsyb'
];