<?php include 'header.html'?>

    <h1>Formulário de cadastro</h1>
    <form action="register.php" method="post">
        <input type="text" name="nome" placeholder="nome"><br><br>
        <input type="text" name="email" placeholder="e-mail"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <button>Enviar</button>
    </form>
    <br>
    <?php 
        include './links.php';
        include 'footer.html'
    ?>
