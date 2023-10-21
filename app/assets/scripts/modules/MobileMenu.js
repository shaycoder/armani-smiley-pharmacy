class MobileMenu {
    constructor() {
        this.menuIcon = document.querySelector('.site-header__menu-icon')
        this.menuHeader = document.querySelector('.site-header')
        this.menuElement = document.querySelectorAll('.menu-element')
        this.events()
    }

    events() {
        this.menuIcon.addEventListener("click", () => this.toggleTheMenu())
        this.menuElement.forEach(el => {
            el.addEventListener('click', () => {
              this.removeTheMenu()
            });
        });
    }

    removeTheMenu() {
        this.menuHeader.classList.remove('site-header--hide')
        this.menuHeader.classList.remove('site-header--is-visible')
        this.menuIcon.classList.remove('site-header__menu-icon--close-x')
    }

    toggleTheMenu() {
        this.menuHeader.classList.toggle('site-header--is-visible')
        this.menuIcon.classList.toggle('site-header__menu-icon--close-x')
    }
    
}

export default MobileMenu;