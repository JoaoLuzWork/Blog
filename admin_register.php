<?php
    if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['admin']) && $_POST['name'] != "" && $_POST['email'] != "" && $_POST['password'] != "" && $_POST['admin'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "INSERT INTO users (user_name, user_email, user_pass, admin_cond) VALUES (:user_name, :user_email, :user_pass, :admin_cond)";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['password']);
        $values = array(
            'user_name'=>$_POST['name'],
            'user_email'=>$_POST['email'],
            'user_pass'=>$password_md5,
            'admin_cond'=>$_POST['admin']
        );
        $statement->execute($values);
        header('Location: index.php');
    } else {
        echo '<p>Dados incompletos! Usuário não foi cadastrado.</p>';
    }
?>