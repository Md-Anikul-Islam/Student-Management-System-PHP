<?php

  function showdetails($STANDERD,$ROLLNO)
  {
	  
	 include('dbcon.php');  
	 
	 
	    $query = mysqli_query($conn,"SELECT * FROM `student_info` WHERE `ROLLNO`='$ROLLNO' AND `STANDERD`='$STANDERD' "); 
        $count = mysqli_num_rows($query);
		
	    if($count >0)
		{
			$data = mysqli_fetch_assoc($query);
			?>
			<table border="10" style="width:40%;" align="center">
			
			<h1 align="center" > STUDENT PERSONAL INFORMATION</h1>
			<tr>
			   <td rowspan="5"> <img src="dataimg/<?php echo $data['IMAGE']; ?>" style ="max-height:150px; max- width:120px;  "/> </td>
			   <th>Roll No</th>
			   <td><?php echo $data['ROLLNO']; ?></td>
			</tr>

            <tr>
               <th>Name</th>
			   <td><?php echo $data['NAME']; ?></td>
			</tr>   			
			
			<tr>
               <th>Standerd</th>
			   <td><?php echo $data['STANDERD']; ?></td>
			</tr>
			
			<tr>
               <th>Contuct</th>
			   <td><?php echo $data['PHONE']; ?></td>
			</tr>
			
			<tr>
               <th>City</th>
			   <td><?php echo $data['CITY']; ?></td>
			</tr>
			<?php
			
			
		}
		else
		{
		 
		    ?>
			<script>
			       alert('no student info !!');
			</script>
			<?php
				
	    }
  }













?>