<?php
    include 'header.html';

    include 'conexao.php';
    $db = getConexao();
    $sql = "SELECT * FROM texts ORDER BY text_id";
    $statement = $db->prepare($sql);
    $statement->execute();        
?>
    <header class="admin_header">
        <h1 class="">GameBloog</h1>
        <a class="button_voltar" href="home.php">
           <img src="svg/house-door-fill.svg" alt="home">
        </a>
    </header>
    
    <main class="blog_container">

        
        
        <table>
            <tr class="table_header">
                <th> Id </th>
                <th> Titulo </th>
                <th> Data </th>
                <th> Editar </th>
                <th> Excluir </th>
            </tr>

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
                        default:
                            echo '<h2>Erro!</h2>';
                            break;
                    }
                }
                while($row = $statement->fetch()){
                    echo '
                        <tr>
                            <td>
                                '.$row['text_id'].'
                            </td>
                            <td>
                                '.$row['tittle'].'
                            </td>
                            <td>
                                '.$row['date'].'
                            </td>
                            <td>
                                <a href="form_editText.php?id='.$row['text_id'].'">
                                    <img class="cross" src="svg/settings.svg" alt="engine">
                                </a>
                            </td>
                            <td>
                                <a href="textDelete.php?id='.$row['text_id'].'">
                                    <img class="cross" src="svg/cross.svg" alt="cross">
                                </a>
                            </td>
                        </tr> 
                    ';
                }
            ?>
        </table>
    <a href="form_addText.php">
        <button>Write new article</button>
    </a>
        
    </main>

    <?php
        include 'footer.html';
    ?>