<?php
//including the database connection file
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM info ORDER BY id DESC"); 
if (!$result) die ("Database fetch failed: " . mysqli_error($mysqli));
?>
<html>
<head>	
	<title>Homepage</title>
	
	
</head>
<body>
<a href="page.html">New Registration Form ?</a>
	<br/><br/>
	<table width='80%' border=1>
	<tr bgcolor='#CCCCCC'>
		
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		
		<td>Contact</td>
		
		<td>Temporary Address</td>
		<td>Age</td>
		<td>Blood Group</td>
        <td>Main Problem</td>
		<td>Hospital ward</td>
        
	</tr>
	<?php 
	while ($row = mysqli_fetch_array($result)) {  
		echo "<tr>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
        echo "<td>".$row['gender']."</td>";
        
		echo "<td>".$row['contact']."</td>";
		echo "<td>".$row['taddress']."</td>";
		
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['blood']."</td>";
        echo "<td>".$row['msg']."</td>";
		echo "<td>".$row['ward']."</td>";	
		
			
	}
	?>
	</table>
	<br>
	<br>
	<a href='read.php'>Go Back to View Page</a>
	<br>
	<br>
	
</body>
</html>
