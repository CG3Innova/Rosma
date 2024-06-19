class FooterComponent extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });
    }

    connectedCallback() {
        fetch('includes/footer.html')
            .then(response => response.text())
            .then(data => {
                this.shadowRoot.innerHTML = `
                    <style>
                        /* Añade aquí los estilos específicos del pie de página si es necesario */
                        @import url('css/bootstrap.css');
                        @import url('css/style.css');
                        @import url('css/responsive.css');
                    </style>
                    ${data}
                `;
            })
            .catch(error => console.error('Error loading footer:', error));
    }
}

customElements.define('footer-component', FooterComponent);
