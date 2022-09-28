<?php include 'header.html'?>
    
<center>
    <div class="container">
        <h1>Faça seu login:</h1>
        <form class="form_b" action="login.php" method="post">
            <div class="divCont">
                <input type="text" name="email" placeholder="e-mail" size="50">
            </div>
            <div class="divCont">
                <input type="password" name="password" placeholder="password" size="50">
            </div>
            <button>Login</button>
        </form>
        <a class="login_link" href="form_register.php">Create acount new acount</a>
    </div>
</center>
   
<?php include 'footer.html'?>