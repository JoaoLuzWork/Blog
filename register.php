<?php
    if (isset($_POST['name'], $_POST['email'], $_POST['password']) && $_POST['name'] != "" && $_POST['email'] != "" && $_POST['password'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "INSERT INTO users (user_name, user_email, user_pass) VALUES (:user_name, :user_email, :user_pass)";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['password']);
        $values = array(
            'user_name'=>$_POST['name'],
            'user_email'=>$_POST['email'],
            'user_pass'=>$password_md5,
        );
        $statement->execute($values);
        header('Location: index.php?msg=successful');
    } else {
        header('Location: form_register.php?msg=need');
    }
?>