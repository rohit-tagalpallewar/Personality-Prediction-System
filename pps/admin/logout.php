<?php
	include 'C:\xampp\htdocs\pps\connection.php';
	session_start();
    if(isset($_SESSION['User']))
	{	?>
		<html>
		<head>
			<link rel="stylesheet" type="text/css" href="mystyle2.css">
			<link rel="stylesheet" type="text/css" href="mystyle.css">

			<h1 align='center'>Administrator Interface</h1>
		<style>
		p{
			margin-left: 30px;
		}
		.button{
			margin-left: 30px;
		}	
		</style>	
		</head>
		<body>
		<div class="topnav">
		  
		  <a href="logout.php" class='active' name='logout'>Logout</a>
		  <a href="welcome.php">Home</a>
		  
		
			<div id="mySidebar" class="sidebar">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			  <a href="show.php">show records of user</a>
			  <a href="delete.php">delete records</a>
			  <a href="createad.php">create admin</a>
			  <a href="managead.php">manage admins</a>
			  <a href="showad.php">show all admins</a>
			  <a href="question.php">add questions</a>
			  <a href="showque.php">show questions</a>
			  <a href="manageque.php">manage questions</a>
			</div>

			<div id="main">
			  <button class="openbtn" onclick="openNav()">☰</button>  
			  
			</div>
			
			
		</div>
		<hr>
		
		<form method='post'>
		
			<div>
			<p><b>Are you sure you want to log out? if yes, click on 'Yes'. If no then click on 'No'.</b></p>
			
			<button class='button' type='submit' name='logo'>Yes</button>
	
			<button class='button' type='submit' name='logi'>No</button>
			</div>
		</form>
		<?php
		
			if(isset($_POST['logo']))
			{
				session_destroy();
				header("location:alogin.php");
			}
			if(isset($_POST['logi']))
			{
				header("location:welcome.php");
			}
		?>	
			
			
		
		
			
		<script>
		function openNav() {
		  document.getElementById("mySidebar").style.width = "250px";
		  document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidebar").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		}
		</script>

		
		
		</body>
		</html>
		

<?php

	}
	else
	{
		header("location:alogin.php?error=please login again ");
	}
?>	
