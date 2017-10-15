
<html>
<head>
<title> Bob's Auto Parts</title>
</head>

<body>
<form  action="Welcome.php" method="post">
FirstName: <input type="text" name="firstname" value="<?php echo $fname;?>"><br/><br/>
LastName:  <input type="text" name="lastname" value="<?php echo $lname;?>"><br/><br/>
Number of Tyres: <input type="number" name="tyres" value="<?php echo $tyre;?>"><br/><br/>
<input type="submit" name="Calculate" ><br/>
    
    <?php 
	{
		try {
			$conn = new PDO("mysql:host=localhost;dbname=SDEAss1Database", "SDEAss1", "SDEM+CAss1");
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			print("Error connecting to SQL Server.");
			die(print_r($e));
		}
		print "Connected successfully";
		
		$conn->close();
	}
    ?>
	
</form>
</body>
</html>
