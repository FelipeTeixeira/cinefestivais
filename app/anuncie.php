<?php 
	include 'templates/nav-bar.php';
?>

<header class="post-header full bg-img bg-quemsomos">
</header>

<article class="">
    <section class="content content-card">
        <h3 class="content-card--title">Anuncie</h3>

        <div class="is-center">
            <button type="button" class="btn btn-primary blue m-32 lg-50">Ver Mais</button>
        </div>

        <p class="content-card--text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Vel minima sit asperiores quaerat omnis perferendis distinctio
            tempore a eveniet eligendi. Debitis consequuntur reiciendis nihil
            enim quod earum numquam nesciunt fugit?</p>

        <p class="content-card--text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Vel minima sit asperiores quaerat omnis perferendis distinctio
            tempore a eveniet eligendi. Debitis consequuntur reiciendis nihil
            enim quod earum numquam nesciunt fugit?</p>

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

            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-large">Quero anunciar</button>
            </div>

        </form>

    </section>

    <?php 
        include 'templates/newsletter.php';
    ?>

    <?php 
        include 'templates/sigacine.php';
    ?>
</article>

<?php 
	include 'templates/footer.php';
?>