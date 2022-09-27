<?php
    include 'header.html'
?>
    <header class="admin_header">
        <h1 class="">GameBloog</h1>
        <a class="button_voltar" href="home.php">
           <img src="svg/house-door-fill.svg" alt="home">
        </a>
    </header>
    <main class="home-wrapper">
        <?php
        if(isset($_GET['id']) and !empty($_GET['id']) ){
            include './conexao.php';
            $db = getConexao();
            $sql = "SELECT * FROM texts WHERE text_id =". $_GET['id'];
            $statement = $db->prepare($sql);
            $statement->execute();
            $row = $statement->fetch();

            echo '
            <div class="blog_container">
                <div class="text_container">
                    <h4>
                        '.$row['date'].'
                    </h4>
                    <div>
                        <div>
                            <h2> '.$row['tittle'].' </h2>
                            <p class="p"> '.$row['textt'].' </p>
                        </div>
                        <div class="image_container">
                            <img class="img_container" src="images/'.$row['image_name'].'" alt="'.$row['image_name'].'">
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            ';

        }  
        ?>
    </main>

<?php
    include 'footer.html'
?>