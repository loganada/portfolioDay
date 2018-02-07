<?php
session_start();
$inEmail=$_SESSION["inEmail"];
$inID=$_SESSION["inID"];

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

$serverName = "localhost";
$username = "root";
$password = "";
$dbname =  "portfolio_day";

$connection = mysqli_connect($serverName,$username,$password, $dbname);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

		//The form has been submitted and needs to be processed

		//Get the name value pairs from the $_POST variable into PHP variables
		//The example uses variables with the same name as the name atribute from the form

    if(isset($_POST["submit"]))
    {
      $inFirstName = $_POST['inFirstName'];
      $inLastName = $_POST['inLastName'];
      $inEmail= $_POST['inEmail'];
      $inProgram = $_POST['inProgram'];
      $inWebsite = $_POST['inWebsite'];
      $inHometown = $_POST['inHometown'];
      $inCareer = $_POST['inCareer'];
      $inWords = $_POST['inWords'];
      $inRepo = $_POST['inRepo'];
		//Create the SQL UPDATE query or command
		$sql = "UPDATE students SET " ;
    $sql .= "email=?, ";
		$sql .= "first_name=?, ";
    $sql .= "last_name=?, ";
    $sql .= "program=?, ";
		$sql .= "website=?, ";
    $sql .= "hometown=?, ";
    $sql .= "career=?, ";
    $sql .= "three_words=?, ";
		$sql .= "repo=? ";	//NOTE last one does NOT have a comma after it
		$sql .= " WHERE (ID='$inID')"; //VERY IMPORTANT

		//echo "<h3>$sql</h3>";			//testing

		$query = $connection->prepare($sql);	//Prepare SQL query

		$query->bind_param('sssssssss', $inEmail, $inFirstName, $inLastName, $inProgram, $inWebsite, $inHometown, $inCareer, $inWords, $inRepo);
		if ( $query->execute() )
		{
			$message = "<h1>Your record has been successfully UPDATED the database.</h1>";
			$message .= "<p>Please <a href='index.php'>BACK</a> enter more.</p>";
		}
		else
		{
			$message = "<h1>You have encountered a problem.</h1>";
			$message .= "<h2 style='color:red'>" . mysqli_error($link) . "</h2>";
		}

	}//end if submitted
	else
	{

		//The form needs to display the fields of the record to the user for changes
    $stmt = "SELECT ID, email, first_name, last_name, program, website, hometown, career, three_words, repo FROM students WHERE email = '$inEmail'";
  // Reading and setting variables from the DB, to be inserted to form.
    foreach ($connection->query($stmt) as $row)
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


	}//end else submitted
//end Valid User True

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
<link rel="stylesheet" type="text/css" href="css/formStyle.css">
</head>

<body>



<?php
//If the user submitted the form the changes have been made
if(isset($_POST["submit"]))
{
	echo $message;	//contains a Success or Failure output content
}//end if submitted

else
{	//The page needs to display the form and associated data to the user for changes
?>
<div class="form-container">
<form name="form1" method="post" action="update.php">
<fieldset>
  <p class="mix-logo-container">
    <img class="mix-logo" src="img/dmaccPortfolioDayLogo.svg">


  <label class="form-label" for="textfield">First Name:</label>
    <input  type="text" name="inFirstName" id="textfield" value="<?php echo $inFirstName;  ?>"/>
  <br>  <span class = "errorText"><?php echo $firstNameErrMsg; ?></span>

</p>
<p>
  <label class="form-label" for="textfield2">Last Name:</label>
    <input type="text" name="inLastName" id="textfield2" value="<?php echo $inLastName;  ?>" />
    <br><span class = "errorText"><?php echo $lastNameErrMsg; ?></span>
</p>
<p>
  <label class="form-label" for="textfield3">Your Email:</label>
  <input  size="40"  type="text" name="inEmail" id="textfield3" value="<?php echo $inEmail; ?>"/>
<span class="email-note"> Personal email is recommended</span>
<br><span class = "errorText">  <?php echo $emailErrMsg; ?></span>

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
  <input size="40" type="text" name="inWebsite" id="textfield4" value="<?php echo $inWebsite; ?>"/>
<br><span  class="errorText">  <?php echo $websiteErrMsg; ?></span><br>
</p>
<p>
  <label for="textfield5" class="form-label">Hometown:</label>
  <input size="40" type="text" name="inHometown" id="textfield5" value="<?php echo $inHometown; ?>"/>
<br>  <span class = "errorText">  <?php echo $hometownErrMsg; ?></span><br>
</p>
<p>
  <label for="textarea2" class="form-label">Career Goals:</label>
  <textarea rows="3" cols="20" name="inCareer" id="textarea2">
    <?php echo $inCareer; ?></textarea>
<br>  <span class = "errorText">  <?php echo $careerErrMsg; ?></span><br>
</p>
<p>
  <label for="textarea3" class="form-label">Three Words That Describe You:</label>
  <textarea rows="3" cols="20" name="inWords" id="textarea3">
    <?php echo $inWords; ?></textarea>
 <br><span class = "errorText">  <?php echo $wordsErrMsg; ?></span><br>
</p>
<p>
  <label for="textfield8" class="form-label">Repository Address:</label>
  <input size="40" type="text" name="inRepo" id="textfield8" value="<?php echo $inRepo; ?>"/>
<br><span class = "errorText">  <?php echo $repoErrMsg; ?></span><br>
</p>
<p class="form-buttons"> <br>
  <input type="submit" name="submit" id="button" value="Update"/>
</p>
</fieldset>
</form>
</div>

<?php
}//end else submitted
//$query->close();
$connection->close();
?>
</body>
</html>
