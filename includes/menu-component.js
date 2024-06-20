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
                        @import url('css/bootstrap.css');
                        @import url('css/style.css');
                        @import url('css/responsive.css');
                        .sticky-header {
                            display: none;
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            z-index: 1000;
                            background: #fff;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                            transition: opacity 0.3s ease, visibility 0.3s ease;
                            opacity: 0;
                            visibility: hidden;
                            pointer-events: none; /* Prevent interaction when hidden */
                        }
                        .sticky-header.visible {
                            display: flex;
                            justify-content: center; /* Center the content horizontally */
                            opacity: 1;
                            visibility: visible;
                            pointer-events: all; /* Allow interaction when visible */
                        }
                        .sticky-header .auto-container {
                            display: flex;
                            justify-content: center;
                            align-items: center; /* Center the content vertically if needed */
                            width: 100%;
                        }
                    </style>
                    ${data}
                `;
                this.initCollapsibleMenu();
                this.initStickyHeader();
                this.setCurrentMenuItem();
            })
            .catch(error => console.error('Error loading menu:', error));
    }

    initCollapsibleMenu() {
        const navToggle = this.shadowRoot.querySelector('.navbar-toggle');
        const navCollapse = this.shadowRoot.querySelector('.navbar-collapse');
        
        navToggle.addEventListener('click', () => {
            navCollapse.classList.toggle('collapse');
            navCollapse.classList.toggle('in');
        });
        
        this.shadowRoot.addEventListener('click', (event) => {
            if (!event.target.matches('.navbar-toggle')) {
                if (navCollapse.classList.contains('in')) {
                    navCollapse.classList.remove('in');
                    navCollapse.classList.add('collapse');
                }
            }
        });
    }

    initStickyHeader() {
        const headerLower = this.shadowRoot.querySelector('.header-lower');
        const stickyHeader = this.shadowRoot.querySelector('.sticky-header');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 100) {
                stickyHeader.classList.add('visible');
                headerLower.style.opacity = '0';
            } else {
                stickyHeader.classList.remove('visible');
                headerLower.style.opacity = '1';
            }
        });
    }

    setCurrentMenuItem() {
        const path = window.location.pathname.split("/").pop();
        const page = path === "" ? "index.html" : path;
        const menuItem = this.shadowRoot.querySelector(`#menu-${page.replace('.html', '')}`);
        const stickyMenuItem = this.shadowRoot.querySelector(`#sticky-menu-${page.replace('.html', '')}`);
        
        if (menuItem) {
            menuItem.classList.add('current');
        }
        
        if (stickyMenuItem) {
            stickyMenuItem.classList.add('current');
        }
    }
    
}

customElements.define('menu-component', MenuComponent);
