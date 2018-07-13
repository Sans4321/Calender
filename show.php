<?php
//include 'images.php';

$db = mysqli_connect("localhost","root","","photos");




$sql= "SELECT * FROM images";

$result = mysqli_query($db, $sql);
echo "FEED!";
while ($row = mysqli_fetch_assoc($result))
  {
    //  echo "<img src = 'uploads/".$row['image']."' >";
    //  echo "<img src = '".$row['image']."' >";
   echo "<div id='img_div'>";
      echo "<img src = 'uploads/".$row['image']."'width = 200 height = 200/ >";
      echo "<p>".$row['text']."</p>";
      echo "<p>".$row['colour']."</p>";
      echo "  <style>
        body {
          background-color: <?php <p>".$row['colour']."</p> ?>;
        }
        </style> ";
      echo "<th colspan=\"8\"><hr width\"100%\"></th>";
    echo "</div>";
  }










?>
