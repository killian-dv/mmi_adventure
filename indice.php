<?php require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Indice</title>
    <section class="background">
    <?php require('inc/header.php'); ?>
    <?php $_GET['id']=$indice_id;
    recup_id_indice($indice_id)
    ?>
    
    <h1 class="title_numero_indice">Indice n°<?php $numero_indice ?></h1>

    <div class="paragraphe">
    <h1>Anecdote</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse dolores ab eaque aut accusantium optio, laudantium nostrum similique minima possimus.</p>
    </div>
    <p class="total_indice">Total des indices trouvés : XX sur XX</p>
    </section>
    <?php require('inc/footer.php'); ?>
</body>
</html>