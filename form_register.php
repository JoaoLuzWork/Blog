<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    ?>
</body>
</html>