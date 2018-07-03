<!DOCTYPE html>
<html>
<head>
<title>Example</title>

<!-- Styles -->	
<style>
        
h2 { 
  font-family: fantasy,cursive,serif;
  color:maroon;
   text-shadow: 3px 3px 3px GOLD, 5px 5px 5px GOLD;
 font-size: 5vw;
    text-align:center;
    text-decoration: underline;
  }
body {
  background-image: url("https://www.bing.com/th?id=OIP.C9ZbatW1hO26x1shSyLEhQHaFY&w=274&h=199&c=7&o=5&dpr=1.25&pid=1.7");
  background-position: 50% 50%;
  background-repeat:repeat;
  background-size:cover;
}
     p{
       font-family: fantasy,cursive,serif;
        color:maroon;
        text-shadow: 3px 3px 3px , 5px 5px 5px GOLD ;
        font-size: 4vw; 
         text-decoration: underline;
    }
.button {
    align:center;
    background-color: HOTPINK; /* Green */
    border: gold;
    border-width:2px;
    border-style:solid;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    .button2 {background-color: MEDIUMVIOLETRED;} /* Blue */
.button3 {background-color: SALMON;} /* Red */ 
.button4 {background-color: aqua; } /* Gray */ 
.button5 {background-color: DIMGRAY;} /* Black */
    .button6 {background-color: lawngreen;} /* Black */
</style>
</head>

<body>

<!-- HTML -->
<h2 style="text-align:center;">DIARY</h2>
<p>Paint your calendar with your moods:
    
</p>

    <button class="button" ; ><i><b>HAPPY</b></i></button><br>
<button class="button button2"><i><b>AMAZING</b></i></button><br>
    <button class="button button3"><i><b>FRUSTRATED</b></i></button><br>
    <button class="button button4"><i><b>NORMAL</b></i></button><br>
    <button class="button button5"><i><b>SAD</b></i></button><br>
    <button class="button button6"><i><b>SATISFACTORY</b></i></button><br>
    <p>What made your TODAY different from your TOMORROW?</p>
  
<form action="/html/tags/html_form_tag_action.cfm" method="post">
<textarea name="comments" id="comments" style="width:96%;height:90px;background-color:gold;color:olive;border:none;padding:2%;font:22px/30px sans-serif;">
    Share your day with us
</textarea>
<input type="submit" value="Submit" style="background-color:yellowgreen;color:white;padding:5px;font-size:18px;border:none;padding:8px;">
</form>
  
</body>
</html>