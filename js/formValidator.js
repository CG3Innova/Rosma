// Configuración del formulario
const CONFIG = {
    recaptchaSiteKey: '6LcynhorAAAAAH8ahGLYaTHg53YSSnhV8tQXB6Iv',
    errorMessages: {
        required: 'Este campo es obligatorio',
        email: 'Por favor, escribe una dirección de correo válida',
        phone: 'Por favor, escribe un número de teléfono válido',
        terms: 'Debes aceptar los términos y condiciones',
    },
    messageTimeout: 5000 // 5 segundos para los mensajes
};

function initializeForm(form) {
    if (!form) return;

    const elements = {
        submitButton: form.querySelector('button[type="submit"]'),
        fileInput: document.getElementById('uploadFile1'),
        termsCheckbox: document.getElementById('morning'),
        successMessage: form.querySelector('.contact-form-success'),
        errorMessage: form.querySelector('.contact-form-error')
    };

    // Crear y añadir el loader
    const loader = document.createElement('div');
    loader.className = 'form-loader d-none';
    loader.innerHTML = `
        <div class="loader-overlay"></div>
        <div class="loader-content">
            <div class="loader-spinner"></div>
            <p>Enviando mensaje...</p>
        </div>
    `;
    form.appendChild(loader);

    // Añadir estilos para el loader
    const style = document.createElement('style');
    style.textContent = `
        .contact-form-contact {
            position: relative !important;
        }
        .form-loader {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .loader-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.8);
        }
        .loader-content {
            position: relative;
            z-index: 1001;
            text-align: center;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .loader-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #f15a22;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 10px;
        }
        .loader-content p {
            margin: 0;
            color: #333;
            font-size: 16px;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .d-none {
            display: none !important;
        }
    `;
    document.head.appendChild(style);

    let messageTimeout;

    function showLoader() {
        loader.classList.remove('d-none');
        elements.submitButton.disabled = true;
    }

    function hideLoader() {
        loader.classList.add('d-none');
        elements.submitButton.disabled = false;
    }

    function hideMessages() {
        if (elements.successMessage) {
            elements.successMessage.classList.add('d-none');
        }
        if (elements.errorMessage) {
            elements.errorMessage.classList.add('d-none');
        }
    }

    function showMessage(element, duration = CONFIG.messageTimeout) {
        if (messageTimeout) {
            clearTimeout(messageTimeout);
        }
        hideMessages();
        element.classList.remove('d-none');
        element.style.opacity = '1';
        messageTimeout = setTimeout(() => {
            element.style.opacity = '0';
            setTimeout(() => {
                element.classList.add('d-none');
                element.style.opacity = '1';
            }, 300);
        }, duration);
    }

    function showSuccessMessage(form) {
        const successMessage = form.querySelector('.contact-form-success');
        showMessage(successMessage);
        scrollToMessage(successMessage);
    }

    function showErrorMessage(form, message) {
        const errorContainer = form.querySelector('.contact-form-error');
        const errorMessageSpan = errorContainer.querySelector('.mail-error-message');
        errorMessageSpan.textContent = message;
        showMessage(errorContainer);
        scrollToMessage(errorContainer);
    }

    function scrollToMessage(element) {
        const yOffset = -100;
        const y = element.getBoundingClientRect().top + window.scrollY + yOffset;
        window.scrollTo({top: y, behavior: 'smooth'});
    }

    function scrollToError() {
        const firstError = form.querySelector('.error-message');
        if (firstError) {
            const yOffset = -100;
            const y = firstError.getBoundingClientRect().top + window.pageYOffset + yOffset;
            window.scrollTo({ top: y, behavior: 'smooth' });
        }
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function isValidPhone(phone) {
        return /^[679]{1}[0-9]{8}$/.test(phone);
    }

    function showError(input, message) {
        clearError(input);
        const error = document.createElement('div');
        error.className = 'error-message';
        error.style.color = 'red';
        error.style.fontSize = '1.25rem';
        error.style.marginTop = '0.3rem';
        error.textContent = message;
        input.parentNode.insertBefore(error, input.nextSibling);
        input.classList.add('input-error');
    }

    function clearError(input) {
        const error = input.nextElementSibling;
        if (error?.classList.contains('error-message')) {
            error.remove();
        }
        input.classList.remove('input-error');
    }

    function validateField(input) {
        clearError(input);

        if (input.hasAttribute('data-required') && !input.value.trim()) {
            showError(input, CONFIG.errorMessages.required);
            return false;
        }

        if (input.type === 'email' && !isValidEmail(input.value)) {
            showError(input, CONFIG.errorMessages.email);
            return false;
        }

        if (input.name === 'phone' && !isValidPhone(input.value)) {
            showError(input, CONFIG.errorMessages.phone);
            return false;
        }

        return true;
    }

    function validateTerms() {
        const container = elements.termsCheckbox.closest('.checkbox-wrapper-4');
        if (!elements.termsCheckbox.checked) {
            const existingError = container.querySelector('.error-message');
            if (!existingError) {
                const error = document.createElement('div');
                error.className = 'error-message';
                error.style.color = 'red';
                error.style.fontSize = '1.3rem';
                error.style.marginTop = '0.25rem';
                error.textContent = CONFIG.errorMessages.terms;
                container.appendChild(error);
            }
            return false;
        }
        
        const existingError = container.querySelector('.error-message');
        if (existingError) {
            existingError.remove();
        }
        return true;
    }

    form.querySelectorAll('input[type="text"], input[type="email"]').forEach(input => {
        ['input', 'blur'].forEach(event => {
            input.addEventListener(event, () => {
                validateField(input);
            });
        });
    });

    if (elements.fileInput) {
        const uploadInfo = elements.fileInput.parentElement.querySelector('.upload-info');
        elements.fileInput.addEventListener('change', function() {
            const files = Array.from(this.files || []);
            uploadInfo.textContent = files.length > 0 
                ? `Archivos seleccionados: ${files.map(f => f.name).join(', ')}`
                : 'Formatos PDF, DOCX, PNG y JPG permitidos.';
        });
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        form.querySelectorAll('input[data-required="true"]').forEach(input => {
            if (!validateField(input)) {
                isValid = false;
            }
        });
        if (!validateTerms()) isValid = false;

        if (!isValid) {
            scrollToError();
            return;
        }

        showLoader();

        try {
            const token = await grecaptcha.execute(CONFIG.recaptchaSiteKey, {action: 'submit'});
            document.getElementById('recaptcha_token').value = token;
            
            const formData = new FormData(form);
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData
            });

            const data = await response.json();
            
            if (data.success) {
                showSuccessMessage(form);
                form.reset();
                if (elements.fileInput) {
                    const uploadInfo = elements.fileInput.parentElement.querySelector('.upload-info');
                    uploadInfo.textContent = 'Formatos PDF, DOCX, PNG y JPG permitidos.';
                }
            } else {
                showErrorMessage(form, data.error || 'Hubo un problema con el envío.');
            }
        } catch (error) {
            showErrorMessage(form, 'Hubo un error al enviar el formulario. Por favor, inténtalo de nuevo.');
        } finally {
            hideLoader();
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.contact-form-contact');
    if (form) {
        initializeForm(form);
    } else {
        const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
                mutation.addedNodes.forEach((node) => {
                    if (node.classList?.contains('contact-form-contact')) {
                        initializeForm(node);
                        observer.disconnect();
                    }
                });
            });
        });
        
        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    }
});