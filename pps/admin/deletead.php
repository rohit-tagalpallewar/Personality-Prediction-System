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
		.button {
		  background-color: #4CAF50;
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin-left: 30px;
		}
		
		p{
			margin-left: 30px;
		}	
		</style>
		</head>
		<body>
		<div class="topnav">
		  
		  <a href="logout.php">Logout</a>
		  <a class="active" href="welcome.php">Home</a>
		  
		
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
			
			<div class='container'>
			<label for='adid'><b>admin id(admin to be deleted)</b></label>
			<input type='number' placeholder='enter valid id of admin' name='adid' id='adid'>
			<hr>
			<input type='submit' name='submit'>
		</form>
		
		<?php 

			if(isset($_POST['submit']))
			{
				$aid=$_POST['adid'];
				$sql="DELETE FROM admin where adid='$aid'";
				
				if($conn->query($sql)==true)
				{
					
					echo "<b>records deleted</b>";
					
				}
				else
				{
					echo $conn->error;
				}	
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


