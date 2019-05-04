<?php
session_start();
if(isset($_SESSION['uid']))
{
	
	  header('location:admin/admindash.php');
	
}
?>


<html>
<head>
<title>Admin Login</title>
</head>
<body>

    <h1 align="center">Admin Login</h1>
	<form action="login.php" method="post">
	
	<table align="center">
	
	    <tr>
		    <td>Username</td>
			<td><input type="text" name="uname" required></td>
		</tr>
		
		<tr>
		    <td>Password</td>
			<td><input type="password" name="pass" required></td>
		</tr>
		
		<tr>
		    <td colspan="2" align="center"><input type="submit" name="login" value="Login" required></td>
		</tr>
	</table>
	</form>
	
</body>
</html>	

<?php
include('dbcon.php');
if(isset($_POST['login']))
	{
		$USERNAME = $_POST['uname'];
		$PASSWORD = $_POST['pass'];
		
		
		
		
		$query = mysqli_query($conn,"SELECT * FROM `admin` WHERE `username`='$USERNAME' AND `password`='$PASSWORD '"); 

	  
	    $count = mysqli_num_rows($query);
		
		if($count <1)
		{
			?>
			<script>
			       alert('Username or Password not match !!');
				   window.open('login.php','_self');
			</script>
			<?php
		}
		else
		{
			
			$data=mysql_fetch_assoc($count);
			$ID=$data['ID'];
			$_SESSION['uid']=$ID;
			header('location:admin/admindash.php');		
		}
				
	}

?>


