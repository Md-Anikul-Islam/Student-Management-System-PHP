<!DOCTYPE html>
<html>
<head>
	
<title>Student_from</title>
	<style>
		   table, th, td
		{
           background-color:#9BF04F;
		   border: 3px solid black; 
		   border-collapse: collapse;
		   margin-left:355px;
		   margin-top:50px;

		   
		}
	</style>
</head>


<body>

	<h1 align="center">Student Information</h1>

    
	
	

<?php




$link = mysqli_connect("localhost", "root", "", "school");
 

    if($link === false)
	{
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
 

    $sql = "SELECT * FROM student_info";
    if($result = mysqli_query($link, $sql))
	{
       if(mysqli_num_rows($result) > 0)
	   {
                echo "<table>";
                echo "<tr>";
				echo "<th>ID</th>";
                echo "<th>ROLLNO</th>";
                echo "<th>NAME</th>";
                echo "<th>CITY</th>";
				echo "<th>PHONE</th>";
				echo "<th>STANDERD</th>"; 
				echo "</tr>";
				
        while($row = mysqli_fetch_array($result))
		{
            echo "<tr>";
			    echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['ROLLNO'] . "</td>";
                echo "<td>" . $row['NAME'] . "</td>";
                echo "<td>" . $row['CITY'] . "</td>";
				echo "<td>" . $row['PHONE'] . "</td>";
                echo "<td>" . $row['STANDERD'] . "</td>";
		
            echo "</tr>";
        }
            echo "</table>";
       
           mysqli_free_result($result);
        } 
	  else
	      {
           echo "No records matching your query were found.";
          }

    }
		  else
		  {
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          }
 

         mysqli_close($link);
?>





</body>
</html>