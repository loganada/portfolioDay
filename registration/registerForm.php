<?php
session_start();
// testing branch merge
//Variables
$validForm = "";
$inFirstName="";
$inLastName="";
$inProgram="";
$inEmail="";
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
    $validForm=False;
    //get the email they entered on register.php
    $inEmail = $_POST['inEmail'];
    $_SESSION["inEmail"] = $_POST['inEmail'];
    function validateEmail($inEmail)
    {
      global $validForm, $emailErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
      $emailErrMsg = "";
      if($inEmail=="")
      {
        $validForm = false;
        $emailErrMsg = "E-mail is required";


      }
    elseif(!preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $inEmail))
      {

        $validForm = false;
        $emailErrMsg = "Email is invalid";


      }
    }//end validateEmail()

  $validForm = true;

    validateEmail($inEmail);

if ($validForm)
{

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
        $_SESSION["inID"] = $inID;

        header('Location: update.php');

      }
      else
      {
        // if they do not already have an entry
        //echo "Please Enter Your INFO";
      }

      }
    }
  }
  else {

  }

  // Checking if Submited
    if(isset($_POST["submit"]))
    {
  // Get values from the form
  $inFirstName = $_POST['inFirstName'];
  $inLastName = $_POST['inLastName'];
  $inEmail = $_POST['inEmail'];
  $inProgram = $_POST['inProgram'];
  $inWebsite = $_POST['$inWebsite'];
  $inCareer = $_POST['$inCareer'];
  $inHometown = $_POST['$inHometown'];
  $inWords = $_POST['$inWords'];
  $inRepo = $_POST['$inRepo'];
  $validForm=false;
  $programBlank=true;
  /*	FORM VALIDATION PLAN

  The page will validate the form fields according to the following validation tests.
  First and Last Name Field:  Required, Check HTML special characters
  Email Field: Required, Must be a valid email format.  Use a Regular Expression to validate the format.
Web Address: Not required, check for valid web address formatted
hometown: required.
program: required,
career goals: required:
three words: Required
repo: not required
  */

  //VALIDATION FUNCTIONS		Use functions to contain the code for the field validations.

  function validateFirstName($inFirstName)
  {
    global $validForm, $firstNameErrMsg;		// GLOBAL Version
    $firstNameErrMsg = "";
$inFirstName = filter_var($inFirstName, FILTER_SANITIZE_STRING);
      if(!preg_match('/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/', $inFirstName))
      {
        $validForm = false;
        $firstNameErrMsg = "First Name is Invalid.";
      }
      elseif($inFirstName=="")
      {
      $validForm = false;
      $firstNameErrMsg = "Your First Name is required";
      }
      else
      {
  		$inFirstName = ltrim($inFirstName);
  	  }
  }//end validateFirstName()

  function validateLastName($inLastName)
  {
    global $validForm, $lastNameErrMsg;		// GLOBAL Version
    $lastNameErrMsg = "";
    $inLastName = filter_var($inLastName, FILTER_SANITIZE_STRING);
    if(!preg_match('/^[a-zA-Z]+(([\'\,\.\-][a-zA-Z])?[a-zA-Z]*)*$/', $inLastName))
    {
      $validForm = false;
      $lastNameErrMsg = "Last Name is Invalid.";
    }
    elseif($inLastName=="")
    {
      $validForm = false;
      $lastNameErrMsg = "Your Last Name is required";
    }
    else {
  		$inLastName = ltrim($inLastName);
  	}
  }//end validateLastName()


  function validateEmail($inEmail)
  {
    global $validForm, $emailErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
    $emailErrMsg = "";
    if($inEmail=="")
  	{
  		$validForm = false;
  		$emailErrMsg = "E-mail is required";
  	}
  elseif(!preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $inEmail))
    {
      $validForm = false;
      $emailErrMsg = "Email is invalid";
    }
  }//end validateEmail()


  function validateWebsite($inWebsite)
  {
    global $validForm, $websiteErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
    $websiteErrMsg = "";
    if(!preg_match('/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/', $inWebsite))
    {
      $validForm = false;
      $websiteErrMsg = "Web Address is invalid";
    }
  }//end validateWebsite()

  function validateProgram($inProgram)
  {
    global $validForm, $programErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
    $programErrMsg = "";
      if($inProgram="")
    {
      $validForm = false;
      $programErrMsg = "Enter your Program.";
    }
  }//end validateProgram()
$programBlank=false;
  function validateHometown($inHometown)
  {
    global $validForm, $hometownErrMsg;		//Use the GLOBAL Version of these variables instead of making them local

    $inHometown = filter_var($inHometown, FILTER_SANITIZE_STRING);
    $hometownErrMsg = "";
      if($inHometown=="")
    {
      $validForm = false;
      $hometownErrMsg = "Enter your Hometown.";
    }
  }//end validateHometown()

  function validateCareer($inCareer)
  {
    global $validForm, $careerErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
    $inCareer = filter_var($inCareer, FILTER_SANITIZE_STRING);

    $careerErrMsg = "";
      if($inCareer=="")
    {
      $validForm = false;
      $careerErrMsg = "Enter your Career Goals.";
    }
  }//end validateCareer()

  function validateWords($inWords)
  {
    global $validForm, $wordsErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
    $wordsErrMsg = "";
    $inWords = filter_var($inWords, FILTER_SANITIZE_STRING);

      if($inWords=="")
    {
      $validForm = false;
      $wordsErrMsg = "Enter your Three Words.";
    }
  }//end validateWords()

  function validateRepo($inRepo)
  {
    global $validForm, $repoErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
    $repoErrMsg = "";
    if(!preg_match('/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[-;:&=\+\$,\w]+@)?[A-Za-z0-9.-]+|(?:www.|[-;:&=\+\$,\w]+@)[A-Za-z0-9.-]+)((?:\/[\+~%\/.\w-_]*)?\??(?:[-\+=&;%@.\w_]*)#?(?:[\w]*))?)/', $inRepo))
    {
      $validForm = false;
      $repoErrMsg = "Repo Address is invalid";
    }
  }//end validateRepo()


  //VALIDATE FORM DATA  using functions defined above
  $validForm = true;		//switch for keeping track of any form validation errors

  validateFirstName($inFirstName);
  validateLastName($inLastName);
  validateEmail($inEmail);
  validateWebsite($inWebsite);
  validateProgram($inProgram);
  validateHometown($inHometown);
  validateCareer($inCareer);
  validateWords($inWords);
  validateRepo($inRepo);
if($validForm)
{

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
  //Create the SQL command string
  $sql = "INSERT INTO students (";
  $sql .= "first_name, ";
  $sql .= "last_name, ";
  $sql .= "email, ";
  $sql .= "program, ";
  $sql .= "website, ";
  $sql .= "hometown, ";
  $sql .= "career, ";
  $sql .= "three_words, ";
  $sql .= "repo";	  //Last column does NOT have a comma after it.
  $sql .= ") VALUES (?,?,?,?,?,?,?,?,?)";	//? Are placeholders for variables

  //Display the SQL command to see if it correctly formatted.
  //echo "<p>$sql</p>";

  $query = $conn->prepare($sql);	//Prepares the query statement

  //Binds the parameters to the query.
  //The ssssis are the data types of the variables in order.


  $query->bindParam(2, $inFirstName, PDO::PARAM_STR, 100);
  $query->bindParam(3, $inLastName, PDO::PARAM_STR, 100);
  $query->bindParam(4, $inProgram, PDO::PARAM_STR, 100);
  $query->bindParam(4, $inEmail, PDO::PARAM_STR, 100);
  $query->bindParam(5, $inWebsite, PDO::PARAM_STR, 100);
  $query->bindParam(6, $inCareer, PDO::PARAM_STR, 100);
  $query->bindParam(6, $inHometown, PDO::PARAM_STR, 100);
  $query->bindParam(6, $inWords, PDO::PARAM_STR, 100);
  $query->bindParam(6, $inRepo, PDO::PARAM_STR, 100);
  //Run the SQL prepared statements
  if ( $query->execute(array($inFirstName, $inLastName, $inEmail, $inProgram, $inWebsite, $inCareer, $inHometown, $inWords, $inRepo) ))
  {
  $message = "<h1>Your record has been successfully added to the database.</h1>";

  }
  else
  {
  $message = "<h1>You have encountered a problem.</h1>";

  }
$query=null;
$conn=null;	//closes the connection to the database once this page is complete
header('Location: confirm.php');
}
}
else
{
  //Form has not been seen by the user.  display the form
}
 ?>
<!DOCTYPE html>
<html>
<head>

  <title>Register Form</title>
  <link rel="stylesheet" type="text/css" href="css/formStyle.css">

<script
        src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>
<body>
  <div class="form-container">
<form name="form1" method="post" action="registerForm.php">
  <fieldset>
    <p class="mix-logo-container">
      <img class="mix-logo" src="img/dmaccPortfolioDayLogo.svg">
    </p>
    <legend><h1 class="form-header">Register </h1></legend>
  <p>

    <label class="form-label" for="textfield">First Name:</label>
      <input  type="text" name="inFirstName" id="firstName" value="<?php echo $inFirstName;  ?>"/>
    <br>  <span id="firstNameErrMsg" class="errorText"><?php echo $firstNameErrMsg; ?></span>

  </p>
  <p>
    <label class="form-label" for="textfield2">Last Name:</label>
      <input type="text" name="inLastName" id="lastName" value="<?php echo $inLastName;  ?>" />
      <br><span id="lastNameErrMsg" class = "errorText"><?php echo $lastNameErrMsg; ?></span>
  </p>
  <p>
    <label class="form-label" for="textfield3">Your Email:</label>
    <input  size="40"  type="text" name="inEmail" id="emailAddress" placeholder="yourName@email.com" value="<?php echo $inEmail; ?>"/>
  <span class="email-note"> Personal email is recommended</span>
  <br><span id="emailErrMsg" class = "errorText">  <?php echo $emailErrMsg; ?></span>

  </p>
  <p>
    <label class="form-label">Your Program:</label>
      <select name="inProgram" id="program" >
        <option selected><?php if($inProgram === "Web Development" || $inProgram === "Photography" ||$inProgram === "Graphic Design" || $inProgram === "Animation"|| $inProgram === "Other"){ echo $inProgram;} else{echo "Please Select a Program"; $programBlank = true;}?></option>


        <!-- <option >Please Select a Program</option> -->
        <option  value="Web Development">Web Development</option>
        <option  value="Photography">Photography</option>
        <option  value="Graphic Design">Graphic Design</option>
        <option  value="Animation">Animation</option>
        <option value="Other">Other</option>

      </select>

      <span id="programErrMsg"><?php echo $programErrMsg; ?></span>
  </p>
  <p>
    <label for="textfield4" class="form-label">Web Address:</label>
    <input size="40" type="text" name="$inWebsite" id="inWebsite" value="<?php echo $inWebsite; ?>" placeholder="www.google.com"/>
  <br><span  id="websiteErrMsg" class="errorText">  <?php echo $websiteErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textfield5" class="form-label">Hometown:</label>
    <input size="40" type="text" name="$inHometown" id="hometown" value="<?php echo $inHometown; ?>"/>
<br>  <span id="hometownErrMsg" class="errorText">  <?php echo $hometownErrMsg; ?></span><br>
  </p>
  <p>

    <label for="careerGoals" class="form-label">Career Goals:</label>
    <input size="40" type="text" name="inCareer" id="careerGoals" value="<?php echo $inCareer; ?>"/>
  <br>  <span id="careerGoals" class = "errorText">  <?php echo $careerErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textfield7" class="form-label">Three Words That Describe You:</label>
    <input size="40" type="text" name="inWords" id="threeWordsDescribeYou" value="<?php echo $inWords; ?>"/>
  <br>  <span  id="threeWordsDescribeYou" class="errorText">  <?php echo $wordsErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textfield8" class="form-label">Repository Address:</label>
    <input size="40" type="text" name="$inRepo" id="studentSideWork" value="<?php echo $inRepo; ?>" placeholder="www.github.com"/>
  <br><span class = "errorText">  <?php echo $repoErrMsg; ?></span><br>
  </p>
  <p class="form-buttons"> <br>
    <input type="submit" name="submit" id="submit" value="Submit" />
    <input type="reset" name="reset" id="reset" value="Reset"/>
  </p>
</fieldset>
</form>
</div>
<script src="validation.js"></script>
</body>
</html>
