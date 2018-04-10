<?php
 $serverName = "localhost";
 $database = "gullydsm_dmacc";
 $username = "gullydsm_dmacc";
 $password = "wdv341";
 
 
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
 
     $sql = "SELECT * FROM local_dpd_bio";

     $query = $conn->prepare($sql) or die("<h1>Prepare Error</h1>");
     $query->execute();
     $students = $query->fetchAll();
     $query->closeCursor();
     $message = "<h1>The following students have been found: " .$query->RowCount() . " " . "rows</h1>";
     


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student-view</title>
    <style>
        .container {
            width: 100%;
            overflow-x:auto;
        }
    table {
        border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    }

    td {
        border: 2px solid black;
        padding: 5px;
    }
    
    tr:nth-child(even){
        background-color: #f2f2f2;
        }
    
    
    </style>
</head>
<body>
<div class='container'>
    <section id='content'>
    <?php echo $message  ?>
    <table>
    <th>Bio login email ID</th><th>First Name</th><th>Last name</th><th>Program/Major</th><th>Program/Minor</th><th>Website Address</th><th>LinkedIn</th><th>Contact Email</th><th>Hometown</th><th>Career goals</th><th>Three Words</th><th>Delete</th>

    <?php foreach ($students as $student) {?>
<tr>

<td><?php echo $student['bio_login_email']; ?></td>
<td><?php echo $student['bio_first_name']; ?></td>
<td><?php echo $student['bio_last_name']; ?></td>
<td><?php echo $student['bio_program']; ?></td>
<td><?php echo $student['bio_second_program'];?></td>
<td><?php echo $student['bio_website_address']; ?></td>
<td><?php echo $student['bio_linkedIn']; ?></td>
<td><?php echo $student['bio_email']; ?></td>
<td><?php echo $student['bio_hometown']; ?></td>
<td><?php echo $student['bio_career_goals']; ?></td>
<td><?php echo $student['bio_three_words'];?></td>
<td><form action="deleteStudent.php" method="post">
<input type="hidden" name="bio_login_email" value="<?php echo $student['bio_login_email'];?>">
<input type="submit" value="DELETE">
</form></td>
</tr>


    <?php } ?>
</table>
    </section>
    </div>

</body>
</html>