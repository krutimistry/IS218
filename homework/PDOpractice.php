<?php
echo "<h1>PDO Practice</h1>";
$dsn = 'mysql:host=sql2.njit.edu;dbname="databasename"';
$username = 'username';
$password = 'password';
try {
	    $conn = new PDO($dsn, $username, $password);
	    echo "Connected successfully<br>";
	    $sql = "SELECT * FROM test WHERE id < 6";
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll();
	    if($q->rowCount() > 0){
	    	echo 'Results: '. $q->rowCount() . '<br>';
	    	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th></tr>";
	    	foreach ($results as $row) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td></tr>";
    		}
	    }else{
	    	echo '0 results';
	    }
	    $q->closeCursor();
    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;
?>
