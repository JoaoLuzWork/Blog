<?php include 'header.html'?>
    
<h1>Login</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="e-mail"><br><br>
        <input type="password" name="password" placeholder="password"><br><br>
        <button>Login</button>
    </form>
    <br>

    <?php 
            include './links.php';
            include 'footer.html'
    ?>