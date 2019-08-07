window.onscroll = function() {
    console.log(window.pageYOffset);
    const imgNavbar = document.getElementById('js-navbar-logo');
    if ( window.pageYOffset > 100 ) {
        imgNavbar.src = "./assets/img/icone-cine-festivais.svg";
        imgNavbar.classList.add('scroll');
    } else {
        imgNavbar.src = "./assets/img/logo-cine-festivais.svg";
        imgNavbar.classList.remove('scroll');
    }
}


function toggleMenu() {
    document.querySelector('#js-navbar-menu').classList.toggle('navbar-menu-is-active')
}