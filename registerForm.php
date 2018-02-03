<?php
//Variables
$validForm = "";
$inFirstName="";
$inLastName="";
$inProgram="";
$inWebsite="";
$inHometown="";
$inCareer="";
$inWords="";
$inRepo="";

//  Error messages
$firstNameErrMsg="";
$lastNameErrMsg="";
$emailErrMsg="";
$programErrMsg="";
$websiteErrMsg="";
$hometownErrMsg="";
$careerErrMsg="";
$wordsErrMsg="";
$repoErrMsg="";

// Checking if Submited
  if(isset($_POST["submitEmail"]))
  {
    //get the email they entered on register.php
    $inEmail = $_POST['inEmail'];

    //Connect to DB
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
//  Count how many results we got back, if it is more than one-- read the DB,
//  else-- print the email and display empty form.
      $stmt = "SELECT COUNT(*) FROM students WHERE email = '$inEmail'";
      if ($res = $conn->query($stmt)) {

    /* Check the number of rows that match the SELECT statement */
      if ($res->fetchColumn() > 0) {

     /* Issue the real SELECT statement and work with the results */
        $stmt = "SELECT ID, email, first_name, last_name, program, website, hometown, career, three_words, repo FROM students WHERE email = '$inEmail'";
// Reading and setting variables from the DB, to be inserted to form.
        foreach ($conn->query($stmt) as $row)
        {
          $inID = $row['ID'];
          $inFirstName = $row['first_name'];
          $inLastName = $row['last_name'];
          $inProgram=$row['program'];
          $inWebsite=$row['website'];
          $inHometown=$row['hometown'];
          $inCareer=$row['career'];
          $inWords=$row['three_words'];
          $inRepo=$row['repo'];
        }

      }
      else
      {
        // if they do not already have an entry
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
    <label for="textfield3">Your Email:</label>
    <input size="40"  type="text" name="inEmail" id="textfield3" value="<?php echo $inEmail; ?>" required/>
  <span>  <?php echo $emailErrMsg; ?></span><br>
  <span style = "color: green;"> This should be the email you will use after graduation, or use most often.</span>
  </p>
  <p>
    <label>Your Program:</label>
      <select  name="inProgram" id="program" required>     
        <option selected><?php if($inProgram === "Web Development" || $inProgram === "Photography" ||$inProgram === "Graphic Design" || $inProgram === "Animation"|| $inProgram === "Other"){ echo $inProgram;} else{echo "Please select and option";}?></option>
        <!-- <option >Please Select a Program</option> -->
        <option  value="Web Development">Web Development</option>
        <option  value="Photography">Photography</option>
        <option  value="Graphic Design">Graphic Design</option>
        <option  value="Animation">Animation</option>
        <option value="Other">Other</option>

      </select>
      <p id = "programErrMsg"></p>
      <span><?php echo $programErrMsg; ?></span>
  </p>
  <p>
    <label for="textfield4">Web Address:</label>
    <input size="40" type="text" name="$inWebsite" id="textfield4" value="<?php echo $inWebsite; ?>"/>
  <span>  <?php echo $websiteErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textfield5">Hometown:</label>
    <input size="40" type="text" name="$inHometown" id="textfield5" value="<?php echo $inHometown; ?>"/>
  <span>  <?php echo $hometownErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textarea2">Career Goals:</label>
    <textarea rows="3" cols="20" name="$inCareer" id="textarea2">
      <?php echo $inCareer; ?></textarea>
  <span>  <?php echo $careerErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textarea3">Three Words that Describe you:</label>
    <textarea rows="3" cols="20" name="$inWords" id="textarea3">
      <?php echo $inWords; ?></textarea>
   <span>  <?php echo $wordsErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textfield8">Repository Address:</label>
    <input size="40" type="text" name="$inRepo" id="textfield8" value="<?php echo $inRepo; ?>"/>
  <span>  <?php echo $repoErrMsg; ?></span><br>
  </p>
  <p> <br>
    <input type="submit" name="submit" id="button" value="Submit"/>
    <input type="reset" name="reset" id="button2" value="Reset"/>
  </p>
</fieldset>
</form>

</body>
</html>
