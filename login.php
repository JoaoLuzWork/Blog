<?php
    if (isset($_POST['email'], $_POST['password']) && $_POST['email'] != "" && $_POST['password'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "SELECT * from users WHERE email = :email AND pass = :pass";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['password']);
        $values = array(
            'email'=>$_POST['email'],
            'pass'=>$password_md5
        );
        $statement->execute($values);
        if ($statement->rowCount() > 0){
            $row = $statement->fetch();
            session_start();
            $_SESSION['id'] = $row['id'];
            header('Location: home.php');
        } else {
            header('Location: form_login.php');
        }
        
    } else {
        echo '<p>Dados incompletos!</p>';
    }
?>