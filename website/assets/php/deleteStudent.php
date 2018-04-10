<?php
$serverName = "localhost";
$database = "portfolio_day";
$username = "root";
$password = "";


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



	$bio_login_email = filter_input(INPUT_POST, 'bio_login_email',FILTER_VALIDATE_EMAIL);

	//delete the student from the database
	if($bio_login_email != false){
		$query = 'DELETE FROM local_dpd_bio WHERE bio_login_email = :bio_login_email';
		$stmt = $conn->prepare($query);
		$stmt->bindValue(':bio_login_email',$bio_login_email);
		$success = $stmt->execute();
		$stmt->closeCursor();

		header('location: student-view.php');
	}
?>
