<?php
include('dbconfig.php');
$sql = "select * from students";
$result = mysqli_query($con,$sql);
$students_data = array();
while($row=mysqli_fetch_assoc($result))
{
	
	 $students_data[] = $row;


}
$json = json_encode($students_data);

//append data in json file 
$fp = fopen('results.json', 'w');
fwrite($fp, json_encode($json));
fclose($fp);
 
?>