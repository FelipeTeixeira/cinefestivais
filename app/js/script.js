_toggleLogo = () => {
    const imgNavbar = document.getElementById('js-navbar-logo');

    if (window.pageYOffset > 100) {
        imgNavbar.src = './assets/img/icone-cine-festivais.svg';
        imgNavbar.classList.add('scroll');
    } else {
        imgNavbar.src = './assets/img/logo-cine-festivais.svg';
        imgNavbar.classList.remove('scroll');
    }
}

toggleMenu = () => {
    if (window.innerWidth <= 768) {
        document.getElementById('js-navbar-menu').classList.toggle('navbar-menu-is-active')
    } else {
        document.getElementById('js-navbar-lg').classList.toggle('navbar-menu-lg-is-active')
        document.getElementById('btn-toggle').classList.toggle('is-active');
    }
};

toggleSearch = () => {
    document.getElementById('js-searchBar').classList.toggle('search-bar-is-active');
    document.getElementById('btn-toggleSearch').classList.toggle('is-active-search');
}

_showProgressBar = () => {
    const postHeaderHeight = document.getElementById('js-postheader').offsetHeight;
    const progressBar = document.getElementById('js-progressbar');
    const post = document.getElementById('js-postpage');

    window.pageYOffset > postHeaderHeight - 200 ? progressBar.classList.add('progress-container-is-active') : progressBar.classList.remove('progress-container-is-active');

    const winScroll = (document.body.scrollTop || document.documentElement.scrollTop) - postHeaderHeight;
    const height = post.clientHeight - postHeaderHeight;
    const scrolled = (winScroll / height) * 100;

    document.getElementById('myBar').style.width = `${scrolled}%`;
}

showMenuOptions = () => {
    document.getElementById('js-showMenu').classList.add('is-hidden');
    document.getElementById('js-closeMenu').classList.remove('is-hidden');
    document.getElementById('js-shareOptions').classList.remove('is-hidden');
}

hideMenuOptions = () => {
    document.getElementById('js-showMenu').classList.remove('is-hidden');
    document.getElementById('js-closeMenu').classList.add('is-hidden');
    document.getElementById('js-shareOptions').classList.add('is-hidden');
}

window.onscroll = () => {
    _toggleLogo();
    _showProgressBar();
};