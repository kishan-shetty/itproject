<html>
	<head>
		<title>Vote</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
	
	<?php include('session.php'); ?>
	
		<form class="formlist" action="success.php" method="POST">
			
			<?php
			
				$theuser = $_SESSION['theuser'];
				
				$sql2 = "select voted from login where name = '$theuser'";
				$result2 = mysqli_query($conn, $sql2) or die ("Error");
				$row2 = mysqli_fetch_assoc($result2);
				
				$sql3 = "select section from login where name = '$theuser'";
				$result3 = mysqli_query($conn, $sql3) or die ("Error");
				$row3 = mysqli_fetch_assoc($result3);
				
				$section = $row3['section'];
				
				if($row2['voted']==0)
				{
					$sql = "select name from candidate where section = '$section'";
					$result = mysqli_query($conn, $sql) or die ("Error");
				
					while($row = mysqli_fetch_assoc($result))
					{
						echo "<input type='radio' name='cr' value='".$row['name']."'> &nbsp;".$row['name']."<br>";
					}
					
					echo "<input class='btn' type='submit' value='Vote'>";
				}
				
				else
				{
					echo "You have already voted";
				}
				
				mysqli_close($conn);
				
			?>
			
			<br>
		</form>
	
	</body>
</html>






