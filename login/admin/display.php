<?php 
  include('../functions.php');

  if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>display</title>
</head>
<body>
	<table>
		<tr>
			
			<th>ID</th>
			<th>Name</th>
			<th>Type</th>
			<th>date</th>
			<th>Time</th>
		</tr>
		<?php 
			$conn = mysqli_connect("localhost","root","","multi_login");
			if($conn-> connect_error){
				die("connection failed:"."$conn-> connect_error");
			}
		    $sql = "SELECT * FROM login_record";
		    $result = $conn-> query($sql);

		    if($result-> num_rows > 0){
		    	while($row = $result-> fetch_assoc()){
		    		echo "<tr><td>".$row["id"]."</td><td>".$row["username"] . "</td><td>".$row["user_type"] ."</td><td>".$row["date"]."</td><td>".$row["time"] . "</td></tr>";		    		
		    	}
		    	echo "</table>";
		    }
		    else
		    {
		    	echo " 0 result";
		    }
		    ?>
	</table>

</body>
</html>