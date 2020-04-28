<?php 
	include 'C:\xampp\htdocs\pps\connection.php';
	session_start();
    if(isset($_POST['login']))
    {
            $sql="select username,pass from admin where username='".$_POST['usr']."' and pass='".$_POST['passw']."'";
            $result=$conn->query($sql);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['usr'];
                header("location:welcome.php");
				
            }
            else
            {
				
                header("location:alogin.php?Invalid= P lease Enter Correct User Name and Password ");
            }
       
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>
	