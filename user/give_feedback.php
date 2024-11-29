<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback to this faculty</h2>";
}
else
{
$query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14',now())";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}


?>
<form method="post">
<fieldset>
<center><u>Student Mark System</u></center><br>
 
<fieldset>


<?php
$conn = mysqli_connect("localhost:3308", "root", "","feedback_system");
// Retrieve data from the database
$sql = "SELECT CA1, CA2, MIDSEM, subject FROM add_mark" ;
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    // Output data in a table
    echo "<table border='1'>
            <tr>
                <th>CA1</th>
                <th>CA2</th>
                <th>MIDSEM</th>
                <th>Subject</th>
            </tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["CA1"] . "</td>
                <td>" . $row["CA2"] . "</td>
                <td>" . $row["MIDSEM"] . "</td>
                <td>" . $row["subject"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}
  ?>






<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>