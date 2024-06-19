class MenuComponent extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });
    }

    connectedCallback() {
        fetch('includes/menu.html')
            .then(response => response.text())
            .then(data => {
                this.shadowRoot.innerHTML = `
                    <style>
                        /* Añade aquí los estilos específicos del menú si es necesario */
                        @import url('css/bootstrap.css');
                        @import url('css/style.css');
                        @import url('css/responsive.css');
                    </style>
                    ${data}
                `;
            })
            .catch(error => console.error('Error loading menu:', error));
    }
}

customElements.define('menu-component', MenuComponent);
