<?php
    if (isset($_POST['tittle'], $_POST['textt']) && $_POST['tittle'] != "" && $_POST['textt'] != "" && $_GET['id'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "UPDATE texts SET tittle = :tittle, textt = :textt WHERE text_id = :id";
        $statement = $db->prepare($sql);
        $values = array(
            'tittle'=>$_POST['tittle'],
            'textt'=>$_POST['textt'],
            'id'=>$_GET['id']
        );
        $statement->execute($values);
        header('Location: admin.php?msg=updated');
    } else {
        echo '<p>Incomplete data! User has not been changed.</p>';
    }
?>