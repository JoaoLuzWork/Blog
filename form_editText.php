<?php
    include 'header.html'
?>

<?php
    include './conexao.php';
    $db = getConexao();
    $sql = "SELECT * FROM texts WHERE text_id = :id";
    $statement = $db->prepare($sql);
    $values = array(
        'id'=>$_GET['id']
    );
    $statement->execute($values);
    $edit = $statement->fetch();
?>
    <header class="admin_header">
        <h1>GameBloog</h1>
        <a href="admin.php">
           <img src="svg/arrow-left-square-fill.svg" alt="home">
        </a>
    </header>
    <center>
        
        <div class="container">
            <h1>Text Edit</h1>
                <?php echo "<form class='form_b' action='textEdit.php?id=" . $_GET['id'] ."' method='POST'>" ?>
                <div class="divCont">
                    <label for="tittle">Tittle: </label>
                    <?php echo "<input id='tittle' type='text' name='tittle' size='50' value='". $edit['tittle'] ."'>" ?>
                </div>
                <div class="divCont">
                    <label for="textt">Text: </label>
                    <?php echo "<input id='textt' type='text' name='textt' size='50' value='". $edit['textt'] ."'>" ?>
                </div>
                <?php echo "<input type='submit' value='To Alter' name='submit'>" ?>
            </form>
        </div>
    </center>
<?php
    include 'footer.html'
?>