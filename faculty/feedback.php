<?php
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>Programme</th>";
	echo "<th>Semester</th>";
	echo "<th>PRN_NO</th>";
	echo "<th>update</th>";
  echo "<th>Add</th>";
	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from user");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['programme']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['PRN_NO']."</td>";
    
    echo "<th><a href='add.php' > <button>add</button></a></th>";
    echo "<th><a href='add.php' > <button>add</button></a></th>";
		
	 
		
		echo "</tr>";
		$i++;
	}
	
?>