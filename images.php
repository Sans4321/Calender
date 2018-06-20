<?php
  $msg ="";
  //pressing upload button
  if (isset($_POST['upload'])) {

    $target = "uploads/".basename($_FILES['image']['name']);

    //db connection
    $db = mysqli_connect("localhost","root","","photos");

    //getting submitted datanfrom form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];

    $sql = "INSERT INTO images (image, text) VALUES ('$image','$text' )";
    mysqli_query($db, $sql);//stores submitted data into database

    //saving in folder
    if (move_uploaded_file($_FILES['image']['tmp_name'],$target )) {
        $msg="Image uploaded successfully";
      # code...
    }else{
      $msg="There was a problem uploading this image";
    }
  }

?>




<!DOCTYPE html>
<html>
<head>
  <title>IMAGE UPLOAD</title>
</head>
</body>
  <div id="content">
    <form method="post" action=images.php enctype="multipart/form-data">
      <input type ="hidden" name="size" value="10000000">
      <div>
        <input type="file" name="image">
      </div>
      <div>
        <textarea name="text" cols="40" rows="4" placeholder="How was your day">
        </textarea>
      </div>
      <div>
        <input type="submit" name="upload" value= "upload image">
      </div>
    </form>
  </div>
</head>
</html>
