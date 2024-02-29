<?php
// first of all, we need to connect to the database
require_once('DBconnect.php');
$conn=mysqli_connect("localhost","root","","blood");
// we need to check if the input in the form textfields are not empty
if(isset($_POST['submit']))
{
	// write the query to check if this username and password exists in our database

	$bloodgroup = $_POST['bloodgroup'];
	$date= date('Y-m-d',strtotime($_POST['date']));
	$location = $_POST['location'];
	
	$query = " INSERT INTO booking VALUES( '$location ','$bloodgroup', '$date' , 'Pending') ";
		
	//Execute the query 
	$query_run = mysqli_query($conn, $query);
		
		//check if this insertion is happening in the database
	if($query_run){
			echo "done";
	}
	else{
			echo "not done";
	}	
}
?>