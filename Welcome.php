
<html>
<head>
<title> Bob's Auto Parts: Order result</title>
</head>
<body>
    <?php
	
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$tyres = $_POST["tyres"];
		$amount = $tyres * 110;

		echo $firstname." ".$lastname.'<br/>';
		echo "total amount due is: ".$amount.'<br/>';

		try {
			$conn = new PDO("sqlsrv:server = tcp:sdeass1.database.windows.net,1433; Database = SDEAss1Database", "SDEAss1", "SDEM+CAss1");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			print("Error connecting to SQL Server.");
			die(print_r($e));
		}

		$sql = "INSERT INTO Orders (firstname, lastname, noOftyres, amount) VALUES ('$firstname', '$lastname', '$tyres', $amount)";

		if ($conn->query($sql) == TRUE) {
		echo "New record created successfully";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	
	?>
</body>
</html>