// obtain cookieconsent plugin
var cc = initCookieConsent();

// microsoft logo
var logo = '<img style="padding: 10px 0 10px 0; display: block; max-height: 75px;" src="images/cookie.png" class="aheto-logo__image logo-blue" alt="Logo Kentia">';
var cookie = '🍪';

// run plugin with config object
cc.run({
    current_lang : 'es',
    autoclear_cookies : true,                   // default: false
    cookie_name: 'cc_cookie_demo1',             // default: 'cc_cookie'
    cookie_expiration : 365,                    // default: 182
    page_scripts: true,                         // default: false

    // auto_language: null,                     // default: null; could also be 'browser' or 'document'
    // autorun: true,                           // default: true
    // delay: 0,                                // default: 0
    // force_consent: false,
    // hide_from_bots: false,                   // default: false
    remove_cookie_tables: true,              // default: false
    // cookie_domain: location.hostname,        // default: current domain
    // cookie_path: "/",                        // default: root
    // cookie_same_site: "Lax",
    // use_rfc_cookie: false,                   // default: false
    // revision: 0,                             // default: 0

    gui_options: {
        consent_modal: {
            layout: 'cloud',                      // box,cloud,bar
            position: 'bottom center',           // bottom,middle,top + left,right,center
            transition: 'slide'                 // zoom,slide
        },
        settings_modal: {
            layout: 'box',                      // box,bar
            // position: 'left',                // right,left (available only if bar layout selected)
            transition: 'slide'                 // zoom,slide
        }
    },

    onFirstAction: function(){
        console.log('onFirstAction fired');
    },

    onAccept: function (cookie) {
        console.log('onAccept fired ...');
    },

    onChange: function (cookie, changed_preferences) {
        console.log('onChange fired ...');
    },

    languages: {
        'en': {
            consent_modal: {
                title: cookie + ' Utilizamos cookies ',
                description: 'Hola, este sitio web utiliza cookies esenciales para garantizar su correcto funcionamiento y cookies de seguimiento para entender cómo interactúas con él. Estas últimas solo se instalarán previo consentimiento. <button type="button" data-cc="c-settings" class="cc-link">Configurar cookies</button>',
                primary_btn: {
                    text: 'Aceptar todo',
                    role: 'accept_all'              // 'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: 'Rechazar',
                    role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                }
            },
            settings_modal: {
                title: logo,
                save_settings_btn: 'Guardar configuración',
                accept_all_btn: 'Aceptar todo',
                reject_all_btn: 'Rechazar todo',
                close_btn_label: 'Cerrar',
                cookie_table_headers: [
                    {col1: 'Name'},
                    {col2: 'Domain'},
                    {col3: 'Expiration'},
                    {col4: 'Description'}
                ],
                blocks: [
                    {
                        title: 'Uso de cookies 📢',
                        description: 'Utilizamos cookies para garantizar las funcionalidades básicas del sitio web y para mejorar su experiencia en línea. Puede elegir para cada categoría la opción de aceptar/descartar cuando lo desee. Para obtener más detalles sobre las cookies y otros datos sensibles, lea el documento completo <a href="/politica-de-cookies.php" class="cc-link">Política de cookies</a>.'
                    }, {
                        title: 'Cookies estrictamente necesarias',
                        description: 'Estas cookies son esenciales para el correcto funcionamiento de mi sitio web. Sin estas cookies, el sitio web no funcionaría correctamente',
                        toggle: {
                            value: 'necessary',
                            enabled: true,
                            readonly: true          // cookie categories with readonly=true are all treated as "necessary cookies"
                        }
                    }, {
                        title: 'Cookies de rendimiento y analíticas',
                        description: 'Estas cookies permiten que el sitio web recuerde las elecciones que ha hecho en el pasado.',
                        toggle: {
                            value: 'analytics',     // there are no default categories => you specify them
                            enabled: false,
                            readonly: false
                        },
                        cookie_table: [
                            {
                                col1: '^_ga',
                                col2: 'google.com',
                                col3: '2 years',
                                col4: 'description ...',
                                is_regex: true
                            },
                            {
                                col1: '_gid',
                                col2: 'google.com',
                                col3: '1 day',
                                col4: 'description ...',
                            }
                        ]
                    }, {
                        title: 'Cookies de publicidad y segmentación',
                        description: 'Estas cookies recogen información sobre cómo utiliza el sitio web, qué páginas ha visitado y en qué enlaces ha hecho click. Todos los datos son anónimos y no pueden utilizarse para identificarle.',
                        toggle: {
                            value: 'targeting',
                            enabled: false,
                            readonly: false
                        }
                    }, {
                        title: 'Más información',
                        description: 'Para cualquier consulta en relación con mi política de cookies y sus opciones, por favor <a class="cc-link" href="contacto.php">contacta con nosotros</a>.',
                    }
                ]
            }
        }
    }

});
