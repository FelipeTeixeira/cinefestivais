<?php 
	include 'templates/nav-bar.php';
?>

<header class="post-header full bg-img bg-quemsomos">
</header>

<article class="">
    <section class="content content-card">
        <h3 class="content-card--title">Contato</h3>

        <form action="" class="form">

            <div class="form-group w45">
                <label for="name" class="form-group--label">Nome</label>
                <input class="form-group--input" type="text" name="name" id="name">
            </div>

            <div class="form-group w45">
                <label for="email" class="form-group--label">E-mail</label>
                <input class="form-group--input" type="email" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="assunto" class="form-group--label">Assunto</label>
                <input class="form-group--input" type="text" name="assunto" id="assunto">
            </div>

            <div class="form-group">
                <label for="mensagem" class="form-group--label">Mensagem</label>
                <textarea class="form-group--input" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-small">Enviar</button>
                <button type="reset" class="btn btn-secondary btn-small">Assinar</button>
            </div>

        </form>
    </section>

    <?php 
        include 'templates/newsletter.php';
    ?>

    <section class="content">
        <h2 class="content-title">Siga no cine festivais</h2>

        <div class="cards">
            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text">Entrevistas</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>
            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text">Entrevistas</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>
            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text">Entrevistas</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>

            <div class="card">
                <img src="https://picsum.photos/id/3/300/200" alt="" class="card-picture">
                <div class="card-label">
                    <span class="card-label__text">Entrevistas</span>
                </div>
                <p class="card-text">"Na Paraíba Anoitece": Uma conversa com Ramon Porto Mota</p>
            </div>
        </div>

        <div class="is-center">
            <button type="button" class="btn btn-primary btn-small">Ver Mais</button>
        </div>

    </section>
</article>

<?php 
	include 'templates/footer.php';
?>
