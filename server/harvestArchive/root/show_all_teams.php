<?php

echo "<h2>Show all teams in the NBA</h2>";
// SQL Statements
$sql = "SELECT * 
		FROM TEAM";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "TeamId " . $row["TeamId"]. " - Name: " . $row["Name"]. " " . "<br>";
    }
} else {
    echo "0 results";
}

?>