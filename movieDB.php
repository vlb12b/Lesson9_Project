<?php  
$title = $_REQUEST['q'];

//Define the database server name, username, password and database name
$hostname = "localhost";
$username = "lis2360";
$password = "lis2360";
$dname = "MovieDB.";

//Create Connection to the database and be authenticated
$conn = new mysqli($hostname, $username, $password, $dname);

//Check Connection
if ($conn -> connect_error) {
	die("Connection failed:  " . $conn ->connect_error);
}

//The query that will be sent to the database
//Query is asking the database for all the movie information for the specified movie
$sql = "SELECT * FROM movieTable where movieID= '".$title."'";

//Send the query to the database and retrieve the result
$result = $conn->query($sql);

//If the query returned a result, put the result in a JSON structured format
//and send to onreadystatechange() and the "responseText" property in movie.js file 
//This is done using echo.
if($result->num_rows > 0) {
	//output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo json_encode($row);
	}
} else {
	echo "0 results";
}

$conn ->close(); 


?> 