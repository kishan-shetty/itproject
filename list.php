<html>
	<head>
		<title>Voted</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
	
		<?php include('session.php'); ?>

		<div class="sechead">
		
		<b>Section 1 Candidates:</b><br><br>
	
		<table class="tbl">
			<?php
				
				$sql2 = "select * from candidate where section = '1' order by votecount desc";
				$result2 = mysqli_query($conn, $sql2) or die ("Error");
			
				while($row2 = mysqli_fetch_assoc($result2))
				{
					echo "<tr><td>".$row2['name']."</td><td>".$row2['votecount']."</td></tr>";	
				}	
				
			?>	
		</table>
		
		<br><br>
		
		<b>Section 2 Candidates:</b><br><br>
	
		<table class="tbl">
			<?php
				
				$sql3 = "select * from candidate where section = '2' order by votecount desc";
				$result3 = mysqli_query($conn, $sql3) or die ("Error");
			
				while($row3 = mysqli_fetch_assoc($result3))
				{
					echo "<tr><td>".$row3['name']."</td><td>".$row3['votecount']."</td></tr>";	
				}	
				
			?>	
		</table>

	</div>	
	</body>
</html>






