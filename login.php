<?php
    if (isset($_POST['email'], $_POST['password']) && $_POST['email'] != "" && $_POST['password'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "SELECT * from users WHERE user_email = :user_email AND user_pass = :user_pass";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['password']);
        $values = array(
            'user_email'=>$_POST['email'],
            'user_pass'=>$password_md5
        );
        $statement->execute($values);
        if ($statement->rowCount() > 0){
            $row = $statement->fetch();
            session_start();
            $_SESSION['admin_cond'] = $row['admin_cond'];
            header('Location: home.php');
        } 
    } else {
        header('Location: index.php?msg=user');
    }
?>