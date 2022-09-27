<?php include 'header.html'?>

    <h1>Formulário de cadastro</h1>
    <form action="register.php" method="post">
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="email" placeholder="e-mail"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <select name="admin">
            <option value="0">User</option>
            <option value="1">Admin</option>
        </select>
        <button>Enviar</button>
    </form>
    <br>
<?php include 'footer.html'?>
