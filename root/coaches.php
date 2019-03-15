<h1>TEAM AVATAR</h1>
<h2>NBA Database</h2>
<h3>Jeremy Tandjung, Nathan Phan, Aaron Handjojo, and Brandon Posey</h3>

<a href = "index.php">Home</a>;
<a href = "search_player.html">Players</a>;
<a href = "index.php">Teams</a>;
<a href = "index.php">Coaches</a>;
<a href = "index.php">Awards</a>;
<a href = "index.php">Arena</a>;
<br><br>

<?php

include "db_connect.php";

echo "<h2>List NBA head coaches</h2><br>";

$fname_kw = $_GET["fname"];
$lname_kw = $_GET["lname"];

$sql = "SELECT *
		FROM HEAD_COACH
            JOIN TEAM USING (CoachId)";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["TeamName"] . ": " . $row["Name"];
    }
} else {
    echo "0 results";
}


?>