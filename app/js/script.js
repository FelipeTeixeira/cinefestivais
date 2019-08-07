window.onscroll = function() {
    const imgNavbar = document.getElementById('js-navbar-logo');
    if ( window.pageYOffset > 100 ) {
        imgNavbar.src = "./assets/img/icone-cine-festivais.svg";
            progressBar.classList.remove('is-hidden')
    
        var currY = $(this).scrollTop();
        var postHeight = $(this).height();
        var scrollHeight = $('main').height();
        // Current percentual position
        var scrollPercent = (currY / (scrollHeight - postHeight)) * 100;
        console.log(scrollPercent);
    
        $('.reader-bar').css('width', scrollPercent +"%"  );
    } else {
        imgNavbar.src = "./assets/img/logo-cine-festivais.svg";
        imgNavbar.classList.remove('scroll');
        progressBar.classList.add('is-hidden')
    }
}


function toggleMenu() {
    document.querySelector('#js-navbar-menu').classList.toggle('navbar-menu-is-active')
}
$( document ).ready(function() {
    const progressBar = document.getElementById('js-progressbar');
    
    $('body').scroll(function() {


    });
});

