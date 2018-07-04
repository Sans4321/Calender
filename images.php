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
  <link type="text/css" rel="stylesheet" href="style3.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</body>
  <div id="content">
    <form method="post" action=images.php enctype="multipart/form-data">
      <input type ="hidden" name="size" value="10000000">
      <div>
        <input type="file" name="image">
      </div>
      <div id="abc">
        <textarea name="text" cols="25" rows="17" placeholder="How was your day">
        </textarea>
      </div>
      <div>
        <button class="imgbtn" name="upload"><i class="fa fa-image" style="font-size:24px"></i></button>
      </div>
    </form>
  </div>
</head>
</html>
