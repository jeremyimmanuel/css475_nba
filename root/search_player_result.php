<?php

include "db_connect.php";

echo "<h2>Search result";

$fname_kw = $_GET["fname"];
$lname_kw = $_GET["lname"];

echo $fname_kw;

$sql = "SELECT * 
		FROM PLAYER
        WHERE   Fname LIKE '%James%'";
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