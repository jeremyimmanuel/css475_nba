<?php

echo "<h2>Players with the first name James</h2>";

$sql = "SELECT * 
		FROM PLAYER
		WHERE Fname LIKE '%James%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Fname " . $row["Fname"]. " - lname: " . $row["Lname"]. " " . "<br>";
    }
} else {
    echo "0 results";
}

?>