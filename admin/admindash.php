
<?php
 
    //session_start();
 
    // if(isset($_SESSION['uid']))
	// {
	//	 echo "";
	// }
	// else
	// {
	//	 header('location:../login.php');
	//}
	 
?>
<?php
  
  include('header.php');

?>


<div class="adm1" align="center">
<h4><a href="logout.php" > Log out </a></h4>
<h4><a href="sineup.php" > sine up </a></h4>
<h1 align="center">Welcome to admin Dashboard </h1>

</div>


<div class="adm2">

   <table border="1" style ="width:50%;" align="center">
    
	<td><a href="addstudent.php">Insert Student Details</a></td>
	
	<td><a href="updatestudent.php">Update Student Details</a></td>
	
	<td><a href="deletestudent.php">Delete Student Details</a></td>
   
   </table>
   
</div>

</body>
</html>








