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

echo "<h2>Search result</h2><br>";

$team_kw = $_GET["team"];

$sql = "SELECT *
		FROM TEAM
            JOIN ARENA USING (TeamId)
            JOIN HEAD_COACH USING (CoachId)
        WHERE TName = $team_kw";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $team_col = $result->fetch_assoc());
    echo "<h2>$team_col["TeamName"]</h2> <br>";
    echo "2018-19 record: " . $team_col["Wins"] . " - " . $team_col["Losses"] . "<br>";
    echo "Head Coach: " . $team_col["Name"] "<br>";

} else {
    echo "No such team as $team_kw";
}

echo "<h2>Roster</h2>";

$sql = "SELECT *
		FROM PLAYER
            JOIN TEAM ON (TeamId)
        WHERE TName = $team_kw";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        /**
         * Insert roster table here
         */

    }
} else {
    echo "No such team as $team_kw";
}

?>