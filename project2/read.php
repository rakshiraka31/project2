<?php
include_once("config.php");
$result = mysqli_query($mysqli,"SELECT * FROM info ORDER BY id DESC"); 
if (!$result) die ("Database fetch failed: " . mysqli_error($mysqli));
?>

<html>
<head>	
	<title>Homepage</title>
</head>
<body>
	<a href="page.html">New Registration</a>
	<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Gender</td>
		<td>Age</td>
		<td>Blood Group</td>
		<td>TemporaryAddress</td>
		<td>Ward</td>
		<td>Contact</td>
        <td>Main Problem</td>
	
	</tr>
	<?php 
		while ($row = mysqli_fetch_array($result)) {  
			echo "<tr>";
			echo "<td>".$row['fname']."</td>";
			echo "<td>".$row['lname']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td>".$row['age']."</td>";
			echo "<td>".$row['blood']."</td>";
			echo "<td>".$row['taddress']."</td>";
			echo "<td>".$row['ward']."</td>";	
			echo "<td>".$row['contact']."</td>";
            echo "<td>".$row['msg']."</td>";		
		}
	?>
	</table>
</body>
</html>
