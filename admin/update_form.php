<?php

   include('header.php');
   include('titlehead.php');
   include('../dbcon.php');
   
   
   $ID = $_GET['sid'];
   
   $query = mysqli_query($conn,"SELECT * FROM `student_info` WHERE ID='$ID'"); 
   $data = mysqli_fetch_array($query);
?>


<form method="post" action="update_data_form.php" enctype="multipart/form-data">
<table align="center" border="1"style="width:70%; margin-top:40px;">

<tr>
<th>Roll NO</th>

<td><input type="number" name="rollno" value=<?php echo $data['ROLLNO']; ?> required></td>

</tr>


<tr>
<th>Name</th>

<td><input type="text" name="name" value=<?php echo $data['NAME']; ?> required></td>

</tr>


<tr>
<th>City</th>

<td><input type="text" name="city" value=<?php echo $data['CITY']; ?> required></td>

</tr>



<tr>
<th>Phone Number</th>

<td><input type="number" name="pcon" value=<?php echo $data['PHONE']; ?> required></td>

</tr>


<tr>
<th>Stander</th>

<td><input type="number" name="std" value=<?php echo $data['STANDERD']; ?> required></td>

</tr>



<tr>
<th>Image</th>

<td><input type="file" name="simg" ></td>

</tr>

<tr>

<td colspan="2" align="center">
<input type="hidden" name="sid" value="<?php echo $data['ID'];?>" />
<input type="submit" name="submit"  value="Submit"></td>

</tr>





</table>
</form>