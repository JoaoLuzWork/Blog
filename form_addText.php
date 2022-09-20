<?php
    include 'header.html'
?>

  <header class="admin_header">
    <h1>GameBloog</h1>
    <a href="admin.php">
       <img src="svg/arrow-left-square-fill.svg" alt="home">
    </a>
  </header>
  <center>
    <div class="container">
      <h1>Write something</h1>
      <form class="form_b" enctype="multipart/form-data" action="uploadFile.php" method="POST" class="form">
        <div class="divCont">
          <label for="tittle">Tittle: </label>
          <input id="tittle" type="text" name="tittle" size="50">
        </div >
        <div class="divCont">
          <label for="textt">Text: </label>
          <input id="textt" type="text" name="textt" size="50">
        </div>
        <div class="divCont">
          Select image to upload:
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Cadastrar" name="submit">
        </div>
      </form>
    </div>
  </center>
  
  <?php
    include 'footer.html'
?>
