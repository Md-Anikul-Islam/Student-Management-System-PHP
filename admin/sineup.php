<?php

   include('header.php');
   include('titlehead.php');
?>

<form method="post" action="sineup.php" enctype="multipart/form-data">
<table align="center" border="1"style="width:70%; margin-top:40px;">
<h1 align="center"> SINE UP FROM</h1>

<tr>
<th>User Name</th>

<td><input type="text" name="name" placeholder="enter User Name" required></td>

</tr>


<tr>
<th>Gmail</th>

<td><input type="text" name="gmail" placeholder="enter email" required></td>

</tr>



<tr>
<th>Password</th>

<td><input type="twxt" name="pass" placeholder="Enter a password" required></td>

</tr>



<tr>

<td colspan="2" align="center"><input type="submit" name="submit"  value="Submit"></td>

</tr>





</table>
</form>
</body>
</html>


<?php

if (isset($_POST['submit'])) {
		include_once "../dbcon.php";
		
		$USERNAME = $_POST['name'];
		$GMAIL= $_POST['gmail'];
		$PASSWORD= $_POST['pass'];
		
		
		$query = "INSERT INTO    admin(USERNAME,GMAIL,PASSWORD) 
									   
									   
									   
			      VALUES ('".$USERNAME."', '".$GMAIL. "', '".$PASSWORD ."')";

	
		if ($conn->query($query) === TRUE) 
		{
		{
			?>
			<script>
			       alert('new account created !!');
			</script>
			<?php
		}
		} else 
		{
			echo "   Error: ";
		}
		$conn->close();
			
			
	}

?>

