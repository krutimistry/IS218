<?php
//---------------- [CONNECTING TO DATABASE] ----------------
$hostname = "sql2.njit.edu";
$username = "km487";
$password = "------";
$conn = km487;
try{
	$conn = new PDO("mysql:host=$hostname;dbname=km487",
	$username, $password);
	// echo "SUCCESSFULLY connected to database $username <br><br>";
}//END TRY BLOCK
catch(PDOException $e){
    	// echo "Connection failed: " . $e->getMessage();
		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
}//END CATCH BLOCK
// Runs SQL query and returns results (if valid)
function runQuery($query){
	global $conn;
    try {
		$q = $conn->prepare($query);
		$q->execute();
		$results = $q->fetchAll();
		$q->closeCursor();
		return $results;
	} catch (PDOException $e) {
		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
	}
}
function http_error($message){
	header("Content-type: text/plain");
	die($message);
}
?>
