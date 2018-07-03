<?php
//connecting database to backend code index
$conn = mysqli_connect("localhost", "root", "", "sanswebsite");
//for displaying error message
//.mysqli_connect_error() inbuilt function to display error
if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
    echo "fail";
}
echo "all okay";


 ?>
