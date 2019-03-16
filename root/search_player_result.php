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

$fname_kw = $_GET["fname"];
$lname_kw = $_GET["lname"];

$sql = "SELECT *
		FROM PLAYED_FOR
            JOIN PLAYER USING (PlayerId)
        WHERE Fname LIKE '%" . $fname_kw . "%' AND Lname LIKE '%" . $lname_kw . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h2>Name</h2>";
        //echo "Fname " . $row["Fname"]. " - lname: " . $row["Lname"]. " " . "<br>";
        echo $row["Fname"] . " " . $row["Lname"] . "<br>";
        echo "<h2>Statistics</h2><br>";
        echo "PPG: " . $row["PPG"] . "<br>";
        echo "APG: " . $row["APG"] . "<br>";
        echo "RPG: " . $row["RPG"] . "<br>";
        echo "BPG: " . $row["BPG"] . "<br>";
        echo "SPG: " . $row["SPG"] . "<br>";
        echo "FG%: " . $row["FG"] . "<br>";
        echo "3FG%: " . $row["FG3"] . "<br>";
        echo "FT%: " . $row["FT"] . "<br>";

    }
} 
else {
    echo "0 results";
}

$sql = "SELECT *
		FROM AWARD_WINNER
            JOIN PLAYER USING (PlayerId)
            JOIN AWARD USING (AwardId)
        WHERE Fname LIKE '%" . $fname_kw . "%' AND Lname LIKE '%" . $lname_kw . "%'";
$result = $mysqli->query($sql);

echo "<h2>Awards</h2>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Name"] . ": "  . $row["YearWon"] . "<br>";

    }
} else {
    echo "0 results";
}


?>