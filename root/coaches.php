<h1>TEAM AVATAR</h1>
<h2>NBA Database</h2>
<h3>Jeremy Tandjung, Nathan Phan, Aaron Handjojo, and Brandon Posey</h3>

<a href = "index.php">Home</a>;
<a href = "search_player.html">Players</a>;
<a href = "search_player.html.php">Teams</a>;
<a href = "coaches.php">Coaches</a>;
<a href = "awards.php">Awards</a>;
<a href = "arena.php">Arena</a>;
<br><br>

<?php

include "db_connect.php";

echo "<h2>List NBA head coaches</h2><br>";


$sql = "SELECT *
		FROM HEAD_COACH
            JOIN TEAM USING (CoachId)";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<table><tr><th>Team</th><th>Head Coach</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["TeamName"] . "</td><td>" . $row["Name"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


?>