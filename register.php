    <?php require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Inscription</title>
    <section class="background">
    <?php require('inc/header.php'); ?>


    <h1 class="m17">Inscription</h1>
    <div id="register">
        <label for="ekip_name">Renseignez le nom de votre équipe si dessous&nbsp;:</label></br>
        <input type="text" id="ekip_name" name="ekip_name" minlength="3" size="10">
    </div>

    <form action="register.php" method="POST">
        <input type="submit" value="Submit">
    </form> 

    </section>
    <?php require('inc/footer.php'); ?>
</body>
</html>