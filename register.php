<?php
session_start();
//Setup the variables used by the page
  $inFirstName = "";
  $inLastName = "";
  $inEmail = "";
  $inDOB = "";
  $inComments= "";
 $inUser="";
 $contactDate="";
 $contactTime="";
  //error messages
  $firstNameErrMsg= "";
  $lastNameErrMsg= "";
  $emailErrMsg = "";
  $dobErrMsg = "";
  $commentsErrMsg = "";
  $userErrMsg="";
  $validForm = false;

  if(isset($_POST["submit"]))
  {
  //The form has been submitted and needs to be processed

  //Get the name value pairs from the $_POST variable into PHP variables
  $inFirstName = $_POST['inFirstName'];
  $inLastName = $_POST['inLastName'];
  $inEmail = $_POST['inEmail'];
  $inDOB = $_POST['inDOB'];
  $inComments = $_POST['inComments'];
  //$inUser=$_POST['g-recaptcha-response'];
  $contactDate= date('Y-m-d');
  $contactTime=date('H:i:s');
  /*	FORM VALIDATION PLAN

  The page will validate the form fields according to the following validation tests.
  Name Field:  Required, Check HTML special characters
  Email Field: Required, Must be a valid email format.
  Comments: Required.
  Make sure to SANITIZE all inputs.
  */
  //VALIDATION FUNCTIONS
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
    $inEmail = filter_var($inEmail, FILTER_SANITIZE_EMAIL);
    if($inEmail=="")
  	{
  		$validForm = false;
  		$emailErrMsg = "E-mail is required";
  	}
    elseif (!filter_var($inEmail, FILTER_VALIDATE_EMAIL) === true)
    {
      $validForm = false;
      $emailErrMsg = "Email is invalid";
    }

    elseif(!preg_match('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', $inEmail))
    {
      $validForm = false;
      $emailErrMsg = "Email is invalid";
    }
  }//end validateEmail()


  function validateComments($inComments)
  {
    global $validForm, $commentstErrMsg;
    $commentsErrMsg = "";
    $inComments = filter_var($inComments, FILTER_SANITIZE_STRING);
    if($inComments=="")
    {
      $validForm = false;
      $commentsErrMsg = "Comments is required";
    }
  }
//end validateComments()


function validateUser($inUser){
  global $validForm, $usertErrMsg;
  $userErrMsg = "";
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $privatekey = '6LelqTQUAAAAAMpcK_8arjKNwvWeq7ursy-A4o3K';
  //$response = file_get_contents($url."?secret=". $privatekey."&response=". $_POST['g-recaptcha-response'].
  //"&remoteip".$_SERVER['REMOTE_ADDR']);
  //$data = json_decode($response);
if(empty($inUser)){
  $validForm = false;
  $userErrMsg= "You must fill out the recaptcha.";
}
else{
}
}//end validtade USER

  $validForm = true;		//switch for keeping track of any form validation errors
  // Call Validate Functions
  validateFirstName($inFirstName);
  validateLastName($inLastName);
  validateEmail($inEmail);
  validateComments($inComments);
  //validateUser($inUser);

  //Check if Valid Form

  if($validForm)
  {
    $recipient =  $_POST["inEmail"] ;
    $message =   strip_tags("<html><body> \r\n");
    $message .=  strip_tags("<h2>This Email was sent on  " . date("l Y/m/d") . "</h2> \r\n");
    $message .=  strip_tags("<h2>Hello there  " . $_POST["inFirstName"] . ",</h2> \r\n");
    $message .=  strip_tags("<h2>Your email address is:  " .  $_POST["inEmail"]."</h2> \r\n" );
    $message .=  strip_tags("<h2>Your DOB is:  " .  $_POST["inDOB"]."</h2> \r\n" );
    $message .=  strip_tags( "<h2>Comments:  ".   $_POST["inComments"]."</h2> \r\n" );
    $message .=   strip_tags("<h1>Thank You for contacting us! </h1></body></html>");

      include '../inc/emailClass.php';
      $contactEmail = new Email("");  //instantuate contactEmail
      $contactEmail -> setRecipient($recipient);
      $contactEmail -> setSender("amlogan2@dmacc.edu");
      $contactEmail -> setSubject("Contact Form");
      $contactEmail -> setMessage(" The Message that you sent us follows.    " .  $message);
      $emailStatus = $contactEmail-> sendMail(); //Sends the mail

      $businessEmail = new Email("");// instatuate businessEmail
      $businessEmail-> setRecipient("amlogan2@dmacc.edu");
      $businessEmail -> setSender("Me");
      $businessEmail -> setSubject("Contact Form");
      $businessEmail -> setMessage(" The Message that you sent us follows.    " . $message);
      $emailStatus = $businessEmail-> sendMail(); //Sends the mail
  }
  else
  {
    $message = "Something went wrong";
  }

  if ($validForm == true)
   {
    $serverName = "localhost";
    $username = "adamloga_adam";
    $password = "baller12";
    $database = "adamloga_wdv441";

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
  		$sql = "INSERT INTO contactform (";
  		$sql .= "first_name, ";
      $sql .= "last_name, ";
  		$sql .= "email, ";
      $sql .= "DOB, ";
  		$sql .= "comments, ";
      $sql .= "date, ";
      $sql .= "time ";	  //Last column does NOT have a comma after it.
  		$sql .= ") VALUES (?,?,?,?,?,?,?)";	//? Are placeholders for variables

  		//Display the SQL command to see if it correctly formatted.
  		//echo "<p>$sql</p>";

  		$query = $conn->prepare($sql);	//Prepares the query statement
  		//Binds the parameters to the query.
      $query->bindParam(2, $inFirstName, PDO::PARAM_STR, 100);
      $query->bindParam(2, $inLastName, PDO::PARAM_STR, 100);
      $query->bindParam(3, $inEmail, PDO::PARAM_STR, 100);
      $query->bindParam(3, $inDOB, PDO::PARAM_STR, 100);
      $query->bindParam(4, $inComments, PDO::PARAM_STR, 100);
      $query->bindParam(6, $contact_date, PDO::PARAM_STR, 100);
      $query->bindParam(6, $contact_time, PDO::PARAM_STR, 100);
  		//Run the SQL prepared statements
  		if ( $query->execute(array($inFirstName, $inLastName, $inEmail,$inDOB, $inComments, $contactDate, $contactTime) ))
  		{
  		$message = "<h1>Your record has been successfully added to the database.</h1>";
  		}
  		else
  		{
  		$message = "<h1>You have encountered a problem.</h1>";
  		}
  $query=null;
  $conn=null;	//closes the connection to the database once this page is complete.
}
}// ends if submit
else
{
  //Form has not been seen by the user.  display the form

}
//}//end Valid User True
//else
//{
//Invalid User attempting to access this page. Send person to Login Page
//	header('Location: presentersLogin.php');
//}

 ?>
 <!DOCTYPE html>
 <html>
<head>
</head>
<body>


  <?php
  if($validForm)
  {

    if ($emailStatus)
     {

      ?>
      	<form id="form1" name="form1" method="" action="">
            <p>
              <h2>Hello there <?php echo $_POST["inFirstName"];?>,</h2>
            </p>
            <p>
                <h2>Your email address is:  <?php echo $_POST["inEmail"] ; ?></h2>
            </p>
            <p>
                <h2>Your DOB is:  <?php echo $_POST["inDOB"] ; ?></h2>
            </p>
            <p>
              <h2>Comments:  <?php echo $_POST["inComments"] ; ?></h2>
            </p>
            <p>
              <h2>This email was sent on: <?php  echo date("l Y/m/d");?> </h2>
            </p>
            <h1>Thank You for contacting us!</h1>
          </form>

      <?php

      }		//ends the true branch

      else
      {
      ?>
          <h3>Dear <?php echo $_POST["inFirstName"] ?>,</h3>

          <p>Thank you for contacting us, although we regret to inform you. YOUR MESSAGE WAS NOT SENT.</p>
          <p> Email: <?php echo $_POST["inEmail"]  ?></p>
          <p>Comments: <?php echo $_POST["inComments"]  ?></p>
          <h4>This message was generated on: <?php  echo date("l Y/m/d");?> </h4>
          <h1>YOUR MESSAGE HAS NOT BEEN SENT!</h1>
          <a href="index.php"><h3>Link back to Contact form</h3></a>
      <?php
      }//ends else branch and the if statement
      ?>


  <?php

  }
  else	//display form
  {
  	?>

  <form name="form1" method="post" action="index.php">
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
      <input type="text" name="inEmail" id="textfield3" value="<?php echo $inEmail; ?>" required/>
    <span>  <?php echo $emailErrMsg; ?></span>
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
      <div name="g-recaptcha-response" class="g-recaptcha" data-sitekey="6LelqTQUAAAAAMvfVre67Et76fWW4iLJLrOXTB19" required>
      </div>
        <span><?php echo $userErrMsg; ?></span>
    </p>
    <p>

      <br>
      <input type="submit" name="submit" id="button" value="Submit"/>
      <input type="reset" name="reset" id="button2" value="Reset"/>
    </p>
  </fieldset>
  </form>

  <?php
  }//end else
  ?>
  <p>&nbsp;</p>
</body>
 </html>
