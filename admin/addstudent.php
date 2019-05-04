<?php

   include('header.php');
   include('titlehead.php');
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border="1"style="width:70%; margin-top:40px;">

<tr>
<th>Roll NO</th>

<td><input type="number" name="rollno" placeholder="Enter Rollno" required></td>

</tr>


<tr>
<th>Name</th>

<td><input type="text" name="name" placeholder="Enter Name" required></td>

</tr>


<tr>
<th>City</th>

<td><input type="text" name="city" placeholder="City" required></td>

</tr>



<tr>
<th>Phone Number</th>

<td><input type="number" name="pcon" placeholder="Enter Phone Number" required></td>

</tr>


<tr>
<th>Stander</th>

<td><input type="number" name="std" placeholder="Enter Stander" required></td>

</tr>



<tr>
<th>Image</th>

<td><input type="file" name="simg" ></td>

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
		
		$ROLLNO = $_POST['rollno'];
		$NAME= $_POST['name'];
		$CITY= $_POST['city'];
		$PHONE = $_POST['pcon'];
		$STANDERD = $_POST['std'];
		
		
		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES["simg"]["tmp_name"];
		
		
		move_uploaded_file($tempname ,"../dataimg/$imagename");
		

       
		
		
		
		
		$query = "INSERT INTO    student_info(ROLLNO,NAME,CITY,PHONE,STANDERD,	IMAGE) 
									   
									   
									   
			                   VALUES ('".$ROLLNO."', '".$NAME. "', '".$CITY ."' , 
							           '".$PHONE."' , '".$STANDERD."'  , '".$imagename."' )";

	
		if ($conn->query($query) === TRUE) 
		{
		{
			?>
			<script>
			       alert('new record submited !!');
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




