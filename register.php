<?php
$inEmail = "";
$emailErrMsg="";

?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

  <form name="form2" method="post" action="registerForm.php">
    <fieldset>
      <legend><h1>Contact Us.</h1></legend>
    <p>
      <label for="textfield3">Your Email:</label>
      <input type="text" name="inEmail" id="textfield3" value="<?php echo $inEmail; ?>"/>
    <span>  <?php echo $emailErrMsg; ?></span>
    <input type="submit" name="submitEmail" value="Submit"/>
    </p>
  </fieldset>
  </form>

</body>
  <p>&nbsp;</p>
</body>
 </html>
