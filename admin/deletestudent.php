<?php

   include('header.php');
   include('titlehead.php');
?>





<table align="center">
<form action="deletestudent.php" method="post">

      <tr>
          <th>Enter Standerd</th>
	      <td><input type="number" name="standerd" placeholder="Enter Standerd" required="required"/></td>
		  
          <th>Enter Student Name</th> 
	      <td><input type="text" name="name" placeholder="Enter Student Name" required="required"/></td>
	
	      <td colspan="2"><input type="submit" name="submit" value="Search"/></td>

	  </tr>

</form>
</table>









<table align="center" width="80%" border="2" style="margin-top:10px ">

         <tr > 
              <th>SERIAL NO</th>
		      <th>IMG</th>
		      <th>NAME</th>
		      <th>ROLL</th>
		      <th>DELETE</th>
         </tr>

		 
		 
		 
		 
		 
		 
		 
<?php

     if(isset($_POST['submit']))
		 
   {
	 
	    include('../dbcon.php');
	 

	 
	    $STANDERD = $_POST['standerd'];
	    $NAME  =  $_POST['name'];
	  
	    $query = mysqli_query($conn,"SELECT * FROM `student_info` WHERE `STANDERD`='$STANDERD' AND `NAME` LIKE '%$NAME%'"); 

	  
	    $count = mysqli_num_rows($query);
	    if($count == "0")
	                   {
		                  $output = '<h2>No result found!</h2>';
						  ?>
			              <script>
			              alert(' not match !!');
				          </script>
			              <?php
						  
						  
						  
						   
	                   }
	    else
	                   {
		                  $count=0;
		                  while($data = mysqli_fetch_array($query))
		            
					   {
			              $count++;
						

						  
						  
?>			
           <tr> 
               <td><?php echo $count; ?></td>
		       <td><img src="../dataimg/<?php echo $data['IMAGE']; ?>"style="max-width:100px;" /></td>
		       <td><?php echo $data['NAME'];?></td>
		       <td><?php echo $data['ROLLNO'];?></td>
		       <td><a href="delete_form.php?sid=<?php echo $data['ID'] ?>">Delete</td>
          </tr>
					
<?php
			
		                }
		
	                    }

		  
	 
    }


   

?>



</table>