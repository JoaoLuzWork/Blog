<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <script src="script.js" async defer></script>
    </head>
    <body>
        <header class="header_container">
            <h1 class="">GameBloog</h1>
            <button class="button_menu" onclick="menuChange()">
            <img id="menu_Img" src="svg/menuBar.svg" alt="">
                <div class="menuBox" id="menuBox">
                    <a href="home.php"><h2>Home</h2></a>
                    <?php 
                     if (isset($_SESSION['admin_cond']) && $_SESSION['admin_cond'] == 1) {
                            echo "
                            <a  href='admin.php'><h2>Admin</h2></a>
                            <a  href='form_admin_register.php'><h2>Add user admin</h2></a>";
                        }
                    ?>
                    <a href="logout.php"><h2>Logout</h2></a>
                </div>
            </button>
        </header>
        <?php
        if(isset($_GET['msg'])){
                    switch ($_GET['msg']){
                        case "registered":
                            echo '<h2>Text registered successfully!</h2>';
                            break;
                        case "deleted":
                            echo '<h2>Text successfully deleted!</h2>';
                            break;
                        case "updated":
                            echo '<h2>Text successfully updated!</h2>';
                            break;
                        case "need":
                            echo '<h2>Missing informations!</h2>';
                            break;
                        case "user":
                            echo '<h2>User or email wrong!</h2>';
                            break;
                        case "noPermission":
                            echo '<h2>You cannot access to admin page!</h2>';
                            break;
                        case "successful":
                            echo '<h2>Registred!</h2>';
                            break;  
                        case "login":
                            echo '<h2>Need to login!</h2>';
                            break;  
                        default:
                            echo '<h2>Erro!</h2>';
                            break;
                    }
                }
                ?>
 