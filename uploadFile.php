<?php
    include 'conexao.php';
    $db = getConexao();
    $sql = "SELECT * FROM texts";
    $statement = $db->prepare($sql);
    $statement->execute();

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    
    // if everything is ok, try to upload file
    } else {
      //To insert all new informations in DB
      $statement = $db->prepare("INSERT INTO texts (tittle, textt, date, image_name)" . "VALUES (:tittle, :textt, CURRENT_DATE(), :image_name)");
      $statement->execute(array(
        'tittle' => $_POST['tittle'],
        'textt' => $_POST['textt'],
        'image_name' => $_FILES["fileToUpload"]["name"]  
        )
        );

      //Send the image to the folder /images
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        //redirect to admin page 
        header('Location: admin.php?msg=registered');

        //if something get worng this message is show on the screen
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  ?>