<?php

    if ($inEmail=="")
     {
      $validForm=false;
    }
    else{


 ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form name="form1" method="post" action="registerForm.php">
  <fieldset>
    <legend><h1>Contact Us.</h1></legend>
  <p>&nbsp;</p>
  <p>
    <label for="textfield">First Name:</label>
      <input type="text" name="inFirstName" id="textfield" value="<?php echo $inFirstName;  ?>" required/>
      <span><?php echo $firstNameErrMsg; ?></span>

  </p>
  <p>
    <label for="textfield2">Last Name:</label>
      <input type="text" name="inLastName" id="textfield2" value="<?php echo $inLastName;  ?>" required/>
      <span><?php echo $lastNameErrMsg; ?></span>
  </p>
  <p>
    <label for="DOB">Your Date of Birth:</label>
    <input type="date" name="inDOB" id="DOB" value="<?php echo $inDOB; ?>" required/>
  <span>  <?php echo $dobErrMsg; ?></span>
  </p>
  <p>
    <label for="textarea">Comments:</label>
      <textarea name="inComments" id="textarea" cols="45" rows="5" required><?php echo $inComments; ?></textarea>
      <span><?php echo $commentsErrMsg; ?></span>
  </p>

  <p>
    <input type="hidden" name="hiddenField" id="hiddenField" value="application-id:US447"/>

      <span><?php echo $userErrMsg; ?></span>
  </p>
  <p>

    <br>
    <input type="submit" name="submit" id="button" value="Submit"/>
    <input type="reset" name="reset" id="button2" value="Reset"/>
  </p>
</fieldset>
</form>
<?php }//end Else
 ?>
</body>
</html>
