<?php
    include 'header.html'
?>

<?php

    //do the conection with de BD in this page
    include './conexao.php';
    $db = getConexao();
    $sql = "SELECT * FROM texts";
    $statement = $db->prepare($sql);
    $statement->execute();

    
    //select and show informations about BD
    while($row = $statement->fetch()){
        echo '
            <div class="blog_container">
                <div class="text_container">
                    <div class="tittle">
                    <h4>
                        '.$row['date'].'
                    </h4>
                    <a href="bigText.php?id='.$row['text_id'].'">
                        <h2 class="titulo">
                            '.$row['tittle'].'
                        </h2>
                    </a>   
                    </div> 
                    <div>
                
                        <div>
                            <p class="p">
                                &nbsp &nbsp'.substr($row['textt'], 0, 175).'...
                            </p>
                        </div>
                        <a class="read" href="bigText.php?id='.$row['text_id'].'">
                            <div class="image_container">
                                <img class="img_container" src="images/'.$row['image_name'].'" alt="' .$row['image_name'].'">
                            </div>
                        </a>  
                        <hr>
                    </div>
                </div>
            </div>
        ';
    }
?>

<?php
    include 'footer.html'
?>