<html>
	<head>
		<title>Voted</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
	
		<?php include('session.php');
		
			$theuser = $_SESSION['theuser'];

			$cr = $_POST['cr'];
			
			$sql = "UPDATE candidate SET votecount = votecount + 1 WHERE name = '$cr'";
			$result = mysqli_query($conn, $sql) or die ("Error");
			
			$sql3 = "UPDATE login SET voted = 1 WHERE name = '$theuser'";
			$result3 = mysqli_query($conn, $sql3) or die ("Error");
		?>

		<div class="voted">You have successfully voted for <b><?php echo $cr; ?></b></div>


	</body>
</html>






