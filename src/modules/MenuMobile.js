class MenuMobile {
    constructor() {
        this.menu = document.querySelector(".menu-dialog");
        this.menuTrigger = document.querySelector(".menu-trigger");
        this.backdropModal = document.querySelector(".backdrop-modal");
        this.closeMenuButton = document.querySelector(".close-menu");
        this.events();
    }

    events() {
        this.menuTrigger.addEventListener("click", () => this.openMenu())
        this.closeMenuButton.addEventListener("click", () => this.closeMenu())
    }

    openMenu() {
        this.menu.classList.add("open");
        this.backdropModal.classList.add("modal-opened");
        console.log("oi")
    }

    closeMenu() {
        this.menu.classList.remove("open");
        this.backdropModal.classList.remove("modal-opened");
    }
}

export default MenuMobile