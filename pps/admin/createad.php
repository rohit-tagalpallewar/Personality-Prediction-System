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
			
		
		</head>
		<body>
		<div class="topnav">
		  
		  <a href="logout.php">Logout</a>
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
		
			<div class='container'>
			<label for='adid'><b>Id</b></label>
			<input type='number' placeholder='enter a new Id for admin' name='adid' id='adid' required>
			<hr>
			<label for='adname'><b>admin name</b></lable>
			<input type='text' placeholder='enter name of admin' name='adname' id='adname' required> 
			<hr>
			<label for='age'><b>age</b></label>
			<input type='number' placeholder='enter age of admin' name='age' id='age' required> 
			<hr>
			<label for='contact'><b>contact</b></label>
			<input type='number' placeholder='enter valid contact ' min=7777777777 max=9999999999 name='contact' id='contact' required>
			<hr>
			<label for='usern'><b>username</b></lable>
			<input type='text' placeholder='enter username' name='usern' id='usern' required>
			<hr>
			<label for='passw'><b>password</b></lable>
			<input type='password' placeholder='enter correct password' name='passw' id='passw' required>
			<hr>
			<input type='submit' name='submit'>
			</div>
			
			
			
			
		</form>
		
		<?php 

			if(isset($_POST['submit']))
			{
				
					$aid =$_POST['adid'];
					$admin_name =$_POST['adname'];
					$admin_age =$_POST['age'];
					$ad_con =$_POST['contact'];
					$username =$_POST['usern'];
					$password =$_POST['passw'];
					$sql="insert into admin values('$aid','$admin_name','$admin_age','$ad_con','$username','$password')";
					
					if($conn->query($sql)==true)
					{
						echo "<b> admin creted succefully</b>";
					}	
					else
					{
						echo"  couldnt insert    "."  ".$conn->error;
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