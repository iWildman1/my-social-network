function initNavigationMenu() {
    const navToggle = document.querySelector('.nav-button');
    const body = document.querySelector('body');
    const nav = document.querySelector('nav');
    const menuLinks = document.querySelectorAll('.nav-links a');
    let menuState = false;

    navToggle.addEventListener('click', function() {
        if (!menuState) {
            body.classList.add('body-menu-open');
            nav.classList.add('nav-menu-open');
            nav.classList.remove('nav-menu-closed');
            menuState = true;
        } else {
            body.classList.remove('body-menu-open');
            nav.classList.remove('nav-menu-open');
            nav.classList.add('nav-menu-closed');
            menuState = false;
        }
    })

    for (let i = 0; i < menuLinks.length; i++) {
        menuLinks[i].addEventListener('click', function() {
            body.classList.remove('body-menu-open');
            nav.classList.remove('nav-menu-open');
            nav.classList.add('nav-menu-closed');
            menuState = false;
        })
    }
}

module.exports = {
    initNavigationMenu: initNavigationMenu
}