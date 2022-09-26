<?php

    //do some tests to confirm if the attributes are correct
    if (isset($_GET['id']) && $_GET['id'] != ""){
        include './conexao.php';
        
        
        $db = getConexao();
        $sql = "DELETE FROM texts WHERE text_id = :id";
        $statement = $db->prepare($sql);
        $valores = array(
            'id'=>$_GET['id']
        );
        $statement->execute($valores);
        echo 'Deleted.';
        header('Location: admin.php?msg=deleted');
    } else {
        echo '<p>User not deleted.</p>';
    }

