<?php 
include_once 'config.php';
$startdate = "2020-01-09";
$sql = "SELECT Name , userid from employee order by userid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Name:- " . $row["Name"]. "<br>UserID:- " . $row["userid"]. "<br>";
	}
} else {
	echo "0 results";
}
echo "<pre>";
print_r($email_exists); 


/*$name = array("Neeraj","Manish","Sunil","Rahul");
$fees = array("Rahul"=>500,"Sonam"=>300,"sunil"=>400,"Manish"=>200);
unset($name[2]);

echo "Manish Fees :   ", $fees["Manish"]. "<br />";
echo $name[2]. "<br />";
$name[2] ="PHP";
echo $name[2];
echo count($fees);*/

/*$fees = array("Rahul"=>500, "Sonam"=>600, "Manish"=>700);

$keys= array_keys($fees);

echo $keys[4]. "<br />";
echo "LOG ERROR";
*/
/*
$day= Wednesday;			
$date= 30;
$year= 2011;


echo "The date is $day $date $year";
*/

?>