<nav id="js-progressbar" class="progress-container is-hidden">
    <div class="progress-container--content">
        <img src="./assets/img/icone-cine-festivais.svg" alt="">
        <span id="js-pagetitle">Título da página</span>
        <svg id="js-showMenu" class="icon icon-dots" onClick="showMenuOptions()">
            <use xlink:href="#icon-dots"></use>
        </svg>
        <svg id="js-closeMenu" class="icon icon-close is-hidden" onClick="hideMenuOptions()">
            <use xlink:href="#icon-close"></use>
        </svg>
    </div>

    <div class="progress-bar" id="myBar"></div>

    <div id="js-shareOptions" class="menu-reader-options is-hidden">

        <div class="reader-option">
            <svg class="icon icon-bubble">
                <use xlink:href="#icon-bubble"></use>
            </svg>
            <span class="text-uppercase">Comentários</span>
        </div>

        <span></span>

        <div class="reader-option">
            <svg class="icon icon-share-alt">
                <use xlink:href="#icon-share-alt"></use>
            </svg>
            <span class="text-uppercase">Compartilhe</span>
        </div>

    </div>
</nav>