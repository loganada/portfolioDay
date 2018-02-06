<?php
session_start();
echo $_SESSION['student_id'];

// testing branch merge
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


try {
 //Connect to DB
 $serverName = "localhost";
 $username = "root";
 $password = "";
 $database = "portfolio_day";


   $conn = new PDO("mysql:host=$serverName;dbname=$database", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully";

   }
catch(PDOException $e)
   {
   echo "Connection failed: " . $e->getMessage();
   }
//    grab the student id and place it in a variable
   $studentID = $_SESSION['student_id'];
	//fill in the form with the customers information
    $queryStudentInfo = 'SELECT * FROM students WHERE ID = :student_id';
    $stmt1 = $conn->prepare($queryStudentInfo);
    $stmt1->bindValue(':student_id',$studentID );
    $stmt1->execute();
    $student_info = $stmt1->fetch();
    $student_name = $student_info['first_name'];
    $stmt1->closeCursor();


  // Checking if Submitted
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


  //Create the SQL command string
  $sql = "UPDATE students SET first_name = '$inFirstName', last_name = '$inLastName', program = '$inProgram',website = '$inWebsite', hometown = '$inHometown', career = '$inCareer', three_words = '$inWords', repo = '$inRepo' WHERE ID = '$studentID'";

  $query = $conn->prepare($sql);	//Prepares the query statement
  $query->execute();
 
  //Run the SQL prepared statements
  if ($query->execute())
  {
    header("Location: confirm.php");

  }
  else
  {
  echo "<h1>There has been a problem please try again later</h1>";

  }
$query=null;
$conn=null;	//closes the connection to the database once this page is complete
}

}
 ?>
<!DOCTYPE html>
<html>
<head>
  <style>
  .errorText{
    color:red;
  }

  </style>
</head>
<body>
<form name="form1" method="post" action="update.php">
  <fieldset>
    <legend><h1>Update Info.</h1></legend>
  <p>&nbsp;</p>
  <p>
    <label for="textfield">First Name:</label>
      <input  type="text" name="inFirstName" id="textfield" value="<?php echo $student_info['first_name'];  ?>"/>
    <br>  <span class = "errorText"><?php echo $firstNameErrMsg; ?></span>

  </p>
  <p>
    <label for="textfield2">Last Name:</label>
      <input type="text" name="inLastName" id="textfield2" value="<?php echo $student_info['last_name'];  ?>" />
      <br><span class = "errorText"><?php echo $lastNameErrMsg; ?></span>
  </p>
  <p>
    <label for="textfield3">Your Email:</label>
    <input  size="40"  type="text" name="inEmail" id="textfield3" value="<?php echo $student_info['email']; ?>"/>
  <br><span class = "errorText">  <?php echo $emailErrMsg; ?></span><br>
  <span style = "color: green;"> This should be the email you will use after graduation, or use most often.</span>
  </p>
  <p>
    <label>Your Program:</label>
      <select name="inProgram" id="program" >
        <option selected><?php echo $student_info['program']?></option>
        <!-- <option >Please Select a Program</option> -->
        <option  value="Web Development">Web Development</option>
        <option  value="Photography">Photography</option>
        <option  value="Graphic Design">Graphic Design</option>
        <option  value="Animation">Animation</option>
        <option value="Other">Other</option>

      </select>
      <p id = "programErrMsg"></p>
      <span class = "errorText"><?php echo $programErrMsg; ?></span>
  </p>
  <p>
    <label for="textfield4">Web Address:</label>
    <input size="40" type="text" name="$inWebsite" id="textfield4" value="<?php echo $student_info['website']; ?>"/>
  <br><span  class="errorText">  <?php echo $websiteErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textfield5">Hometown:</label>
    <input size="40" type="text" name="$inHometown" id="textfield5" value="<?php echo $student_info['hometown']; ?>"/>
<br>  <span class = "errorText">  <?php echo $hometownErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textarea2">Career Goals:</label>
    <textarea rows="3" cols="20" name="$inCareer" id="textarea2">
      <?php echo $student_info['career']; ?></textarea>
<br>  <span class = "errorText">  <?php echo $careerErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textarea3">Three Words that Describe you:</label>
    <textarea rows="3" cols="20" name="$inWords" id="textarea3">
      <?php echo $student_info['three_words']; ?></textarea>
   <br><span class = "errorText">  <?php echo $wordsErrMsg; ?></span><br>
  </p>
  <p>
    <label for="textfield8">Repository Address:</label>
    <input size="40" type="text" name="$inRepo" id="textfield8" value="<?php echo $student_info['repo']; ?>"/>
  <br><span class = "errorText">  <?php echo $repoErrMsg; ?></span><br>
  </p>
  <p> <br>
    <input type="submit" name="submit" id="button" value="Submit"/>
    <input type="reset" name="reset" id="button2" value="Reset"/>
  </p>
</fieldset>
</form>

</body>
</html>
