    <?php

 {
		include("../dbcon.php");
		
		$ID=$_REQUEST['sid'];
		
		$query =mysqli_query($conn, "DELETE FROM `student_info` WHERE `ID`='$ID';");
		
	
		
	
		if ($query == TRUE) 
		{
		{
			?>
			<script>
			       alert('Data Delete Succesfully !!');
				   window.open('deletestudent.php','_self');
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