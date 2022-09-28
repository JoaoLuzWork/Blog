<?php
    include 'header.php';

    include 'conexao.php';
    $db = getConexao();
    $sql = "SELECT * FROM texts ORDER BY text_id";
    $statement = $db->prepare($sql);
    $statement->execute();    
    if ($_SESSION['admin_cond'] != 1){
        
        header('Location: home.php?msg=noPermission');
    }
    ?>
    
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