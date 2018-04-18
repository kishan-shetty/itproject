<?php include('config.php');
	
	session_start();
	
	if(!isset($_SESSION['theuser']))
	{
  	header("location:index.php");
  }

?>

<div class="top-bar">
	<div class="title">
		C R Election
	</div>
	<div class="menu">
		<a href="list.php">Voting list</a>
		<a href="logout.php">Logout</a>
	</div>
</div>

