<?php
    if (isset($_POST['nome'], $_POST['email'], $_POST['password']) && $_POST['nome'] != "" && $_POST['email'] != "" && $_POST['password'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "INSERT INTO usuarios (nome, email, pass) VALUES (:nome, :email, :pass)";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['password']);
        $valores = array(
            'nome'=>$_POST['nome'],
            'email'=>$_POST['email'],
            'pass'=>$password_md5
        );
        $statement->execute($valores);
        header('Location: form_login.php');
    } else {
        echo '<p>Dados incompletos! Usuário não foi cadastrado.</p>';
    }
?>