<?php include 'header.php'?>
    <center>
        <div class="container">
            <h1>Register:</h1>
            <form class="form_b" action="admin_register.php" method="post">
                <div class="divCont">
                    <input type="text" name="name" placeholder="name" size="50">
                </div>
                <div class="divCont">
                    <input type="text" name="email" placeholder="e-mail" size="50">
                </div>
                <div class="divCont">
                    <input type="password" name="password" placeholder="password" size="50">
                </div>
                <div class="divCont">
                    <select name="admin">
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
                <button>Enviar</button>
            </form>
        </div>
    </center>
<?php include 'footer.html'?>
