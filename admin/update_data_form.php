<?php

 {
		include("../dbcon.php");
		
		$ROLLNO = $_POST['rollno'];
		$NAME= $_POST['name'];
		$CITY= $_POST['city'];
		$PHONE = $_POST['pcon'];
		$STANDERD = $_POST['std'];
		$ID=$_POST['sid'];
		
		
		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES["simg"]["tmp_name"];
		move_uploaded_file($tempname ,"../dataimg/$imagename");
		

       
		
		$query =mysqli_query($conn, "UPDATE `student_info` SET `ROLLNO` = '$ROLLNO', 
		                    `NAME` = '$NAME', `CITY` = '$CITY', `PHONE`='$PHONE', `STANDERD`='$STANDERD', 
							`IMAGE` = '$imagename' WHERE `ID` = $ID");
		
	
		
	
		if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Update Succesfully !!');
				   window.open('update_form.php?sid=<?php echo $ID; ?>','_self');
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