<?php

  session_start();
  echo $_SESSION['back'];
  $colour = $_SESSION['back'];

  $msg ="";
  //pressing upload button
  if (isset($_POST['upload'])) {

    $target = "uploads/".basename($_FILES['image']['name']);

    //db connection
    $db = mysqli_connect("localhost","root","","photos");


    //getting submitted datanfrom form
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    $Date = $_POST['Date'];


    $sql = "INSERT INTO images (Date, image, text, colour) VALUES ('$Date','$image','$text','$colour' )";
    mysqli_query($db, $sql);//stores submitted data into database

    //saving in folder
    if (move_uploaded_file($_FILES['image']['tmp_name'],$target )) {
        $msg="Image uploaded successfully";

    }else{
      $msg="There was a problem uploading this image";
    }
    echo $colour;
  }
 //header("Location: colour.php");
?>
