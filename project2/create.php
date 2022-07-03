
<html>
<head>
    <title>submit Data</title>
	
</head>
<bod>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {    
    $fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
    $lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$ward = mysqli_real_escape_string($mysqli, $_POST['ward']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);  
	$taddress = mysqli_real_escape_string($mysqli, $_POST['taddress']);
    $paddress = mysqli_real_escape_string($mysqli, $_POST['paddress']);
	$msg = mysqli_real_escape_string($mysqli, $_POST['msg']);
	$contact = mysqli_real_escape_string($mysqli, $_POST['contact']);
    $blood = mysqli_real_escape_string($mysqli, $_POST['blood']);
	
	     
    // checking empty fields
    if(empty($fname) || empty($lname) || empty($age) || empty($gender) || empty($ward) || empty($email) || empty($taddress) || empty($paddress) || empty($blood) || empty($contact) || empty($msg)) {
        if(empty($fname)) {
            echo "<font color='red'> First Name field is empty.</font><br/>";
        }
		if(empty($lname)) {
            echo "<font color='red'>Last Name filed is empty.</font><br/>";
        }
		if(empty($age)) {
            echo "<font color='red'>Age is not Filled.</font><br/>";
        }
        if(empty($gender)) {
            echo "<font color='red'>Gender field is empty.</font><br/>";
        }     
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
         if(empty($taddress)) {
            echo "<font color='red'>Temporary address field is empty.</font><br/>";
        } 
		if(empty($paddress)) {
            echo "<font color='red'>Permanet address field is empty.</font><br/>";
        } 
		if(empty($msg)) {
            echo "<font color='red'>Main Problem field is empty.</font><br/>";
        } 
		if(empty($contact)) {
            echo "<font color='red'>Contact Number field is empty.</font><br/>";
        }
        if(empty($blood)) {
            echo "<font color='red'>Blood  field is empty.</font><br/>";
        }
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
		    
    }else {             
        $result = mysqli_query($mysqli, "INSERT INTO info (fname,lname,age,gender,ward,email,taddress,paddress,msg,contact,blood)
                               VALUES ('$fname','$lname','$age','$gender','$ward','$email','$taddress','$paddress','$msg','$contact,'$blood')");
        if (!$result) die ("Insertion failed: " . mysqli_error($mysqli));
        echo"<font color='green'> Data added successfully.";
        echo"<a href='index.php'> View Result </a>";
    }
}
?>
</table>
	<br>
	<br>
	<a href='index.php'>Go Back to View Page</a>
	<br>
	<br>
</body>
</html>