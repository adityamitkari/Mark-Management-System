<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_student.php?id='+id;
     }
}
</script>	


<?php
	
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr class='success'>";
	
	echo "<th>S.No</th>";
	echo "<th>Name</th>";
	echo "<th>PRN_NO</th>";
	echo "<th>Semester</th>";
	echo "<th>CA1</th>";
	echo "<th>MIDSEM</th>";
	echo "<th>CA2</th>";

	echo "</tr>";
	
	$i=1;
	$que=mysqli_query($conn,"select * from user");
	
	while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['PRN_NO']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['semester']."</td>";
		
		
		
		
		
		
		echo "</tr>";
		$i++;
	}
	
?>