<?php
if(isset($_POST["confirm"]))
{
  header('Location: register.php');
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 </head>
 <body>
   <form method ="post" action="confirm.php">
 <h1>Thank You, Your form is submitted!</h1>
<input type = "submit" name = "confirm" value="Click to add another entry"/>
</form>
 </body>
</html>
