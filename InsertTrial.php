<?php
    global $colour;
    $con=mysqli_connect("localhost","root"," ","sanswebsite");
    if(!$con)
    {
        echo "not onnected to server";
    }
    if(!mysqli_select_db($con,'colour'));
    {
        echo "database not selected";
    }
    if(isset($_POST['colour']))
    {
    $colour=$_POST['colour'];
    }
    $sql="INSERT INTO mood (colour)
            VALUES ('$colour')";
    if(!mysqli_query($con,$sql))
    {
        echo "not inserted";
    } 
    else
    {
        echo "inserted";
    } 
    header("refresh:1; url=index.html");
?>
        
    
    