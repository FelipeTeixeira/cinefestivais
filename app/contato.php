<?php 
	include 'templates/nav-bar.php';
?>

<header class="post-header full bg-img bg-contato">
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

</article>

<?php 
        include 'templates/newsletter.php';
    ?>

<?php 
        include 'templates/sigacine.php';
    ?>

<?php 
	include 'templates/footer.php';
?>
