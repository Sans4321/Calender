<!DOCTYPE html>
<html>
<head>
 <style>
 body {
   background-image: url( "todo.jpg");
 }
  .amazing {
    background-color: #FF0000;
    border : none
    color: white;
    padding : 64px 64px;
    text-align: center;
    text-decoration: Arial;
    display : inline-block;
    font-size: 16px;
    margin : 4px 2px;
    cursor: pointer;

  }
  .happy             {  background-color: #FFDAB9;   padding : 64px 64px; }
  .sad              {  background-color:#BDB76B;   padding : 64px 64px;}
  .satisfactory     {  background-color: #7CFC00;   padding : 64px 64px;}
  .normal            {  background-color: #87CEFA;   padding : 64px 64px;}
  .productive        {  background-color: #A52A2A;   padding : 64px 64px;}
  .fantastic         {  background-color: #FF00FF;   padding : 64px 64px;}

  p{
        font-family: 'Rouge Script', cursive;
         color:#800000;
         text-shadow: 1px 1px 2px #082b34 ;
         font-size: 70px;
          text-decoration: underline;
     }
  </style>
</head>
<body>
  <p>Paint your calendar with your moods:

  </p>

<form action= "images.php" method="post" class="mood">
  <button name="colour" class="amazing" type="submit" value=" #FF0000">AMAZING</button>
  <button name="colour" class="happy" type="submit" value="#FFDAB9">HAPPY</button>
  <button name="colour" class="sad" type="submit" value="#BDB76B">SAD</button>
  <button name="colour" class="satisfactory" type="submit" value="#7CFC00">SATISFACTORY</button>
  <button name="colour" class="normal" type="submit" value="#87CEFA">NORMAL</button>
  <button name="colour" class="productive" type="submit" value="#A52A2A">PRODUCTIVE</button>
  <button name="colour" class="fantastic" type="submit" value="#FF00FF">FANTASTIC</button>

</form> <?php //header("Location: colour1.php");?>



</body>
</html>
