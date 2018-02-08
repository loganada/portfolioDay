<?php
if(isset($_POST["confirm"]))
{
  header('Location: index.php');
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/main.css">
 </head>
 <body>
   <form method ="post" action="confirm.php">
 <h1>Thank You, Your form is submitted!</h1>
<input type = "submit" name = "confirm" value="Click to add another entry"/>
</form>
 </body>
</html>
