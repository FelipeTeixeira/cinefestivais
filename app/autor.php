<?php 
	include 'templates/nav-bar.php';
?>

<main class="author">

    <section class="author-info">
        <img src="https://randomuser.me/api/portraits/men/12.jpg" alt="" class="profile-photo">
        <div class="author-info--column">
            <h1 class="author-title">Adriano Garrett</h1>
            <p class="author-text">Idealizador Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis,
                facilis?
                Neque esse velit placeat impedit suscipit quae beatae accusamus minima voluptas, ipsum
                aliquam quibusdam iusto voluptatem consectetur nesciunt, nobis ea.
                Reiciendis, facilis?
                Neque esse velit placeat impedit suscipit quae beatae accusamus minima voluptas, ipsum
                aliquam quibusdam iusto voluptatem consectetur nesciunt, nobis ea.</p>

            <div class="author-contact">
                <span>
                    <svg class="icon icon-envelope">
                        <use xlink:href="#icon-envelope"></use>
                    </svg>
                    adriano@cinefestivais.com.br
                </span>
                <span>
                    <svg class="icon icon-facebook">
                        <use xlink:href="#icon-facebook"></use>
                    </svg>
                    /adrianogarrett
                </span>
            </div>
        </div>
    </section>

    <section class="content">
        <h2 class="content-title">Textos do autor</h2>

        <div class="cards">
            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text white">50º festival de Brasília</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text white">50º festival de Brasília</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text white">50º festival de Brasília</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>
            
            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text white">50º festival de Brasília</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>
        </div>

        <div class="is-center">
            <button type="button" class="btn btn-primary btn-small">Ver Mais</button>
        </div>

    </section>
</main>

<?php 
    include 'templates/newsletter.php';
?>

<?php 
    include 'templates/footer.php';
?>