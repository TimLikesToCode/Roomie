<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<style type="text/css">
				table {
					border-collapse:  collapse;
					width:  100%;
					color:  #eb4034;
					font-family:  monospace;
					font-size: 25px;
					text-align: left;
				}

				th {
					background-color: #eb4034;
					color:  white;
				}

				tr:nth-child(even) {background-color: #ededed;}
			</style>

			<link rel="stylesheet" href="css/style.css">

		</head>
	<body>
		<table>
		<tr>
			<th>UserID</th>
			<th>Name</th>
			<th>Email</th>
			<th>User Type</th>
		</tr>

		<?php
		$conn = mysqli_connect("localhost", "root", "", "user_db");
		$sql = "SELECT * FROM user_form";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["user_type"] . "</td></tr>";
			}
		}
		else {
			echo "No Results";
		}

		$conn-> close();
		?>

		</table>

	<div class="container">

		<div class="content">
      	<a href="admin_manage_db.php" class="btn">Manage Database</a>
      	<a href="logout.php" class="btn">Logout</a>
  		</div>

  	</div> 

	</body>
</html>