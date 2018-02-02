<?php
$validForm = "";
$inFirstName="";
$inLastName="";
$firstNameErrMsg="";
$lastNameErrMsg="";
$emailErrMsg="";

  if(isset($_POST["submitEmail"]))
  {
$inEmail = $_POST['inEmail'];

  $serverName = "localhost";
  $username = "root";
  $password = "";
  $database = "portfolio_day";

  try {
      $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";

      }
  catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }

      $stmt = "SELECT COUNT(*) FROM students WHERE email = '$inEmail'";
      if ($res = $conn->query($stmt)) {

    /* Check the number of rows that match the SELECT statement */
      if ($res->fetchColumn() > 0) {

     /* Issue the real SELECT statement and work with the results */
        $stmt = "SELECT ID, email, first_name, last_name FROM students WHERE email = '$inEmail'";

        foreach ($conn->query($stmt) as $row)
        {
          $inID = $row['ID'];
          $inFirstName = $row['first_name'];
          $inLastName = $row['last_name'];

        }

      }
      else
      {
        echo "Please Enter Your INFO";
      }

      }

  }

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
    <label for="textfield3">Your Email:</label>
    <input type="text" name="inEmail" id="textfield3" value="<?php echo $inEmail; ?>" required/>
  <span>  <?php echo $emailErrMsg; ?></span>
  </p>
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
  <p> <br>
    <input type="submit" name="submit" id="button" value="Submit"/>
    <input type="reset" name="reset" id="button2" value="Reset"/>
  </p>
</fieldset>
</form>

</body>
</html>
