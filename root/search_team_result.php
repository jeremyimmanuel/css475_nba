<h1>TEAM AVATAR</h1>
<h2>NBA Database</h2>
<h3>Jeremy Tandjung, Nathan Phan, Aaron Handjojo, and Brandon Posey</h3>

<a href = "index.php">Home</a>;
<a href = "search_player.html">Players</a>;
<a href = "search_team.html">Teams</a>;
<a href = "index.php">Coaches</a>;
<a href = "index.php">Awards</a>;
<a href = "arenas.php">Arena</a>;
<br><br>

<?php

include "db_connect.php";

echo "<h2>Search result</h2><br>";

$team_kw = $_GET["team"];

$sql = "SELECT  TeamName,
                TEAM.Wins AS teamWins,
                TEAM.Losses AS teamLosses,
                ArenaName,
                HEAD_COACH.Name AS coachName
		FROM TEAM
            JOIN ARENA USING (ArenaId)
            JOIN HEAD_COACH USING (CoachId)
        WHERE TeamName LIKE '%" . $team_kw . "%'";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $team_col = $result->fetch_assoc();
	echo "<h2>" . $team_col["TeamName"] . "</h2><br>";
    echo "2018-19 record: " . $team_col["teamWins"] . " - " . $team_col["teamLosses"] . "<br>";
    echo "Home Stadium: " . $team_col["ArenaName"] . "<br>";
    echo "Head Coach: " . $team_col["coachName"] . "<br>";
} else {
    echo "No such team as $team_kw";
}

echo "<h2>Roster</h2>";

$sql = "SELECT CONCAT(Fname, ' ', Lname) AS PlayerName,
        DOB, CONCAT(Height_ft, '\'', Height_inch, '\"') AS Height,
        Player.Weight, DraftYear
		FROM PLAYER
            JOIN TEAM USING (TeamId)
        WHERE TeamName LIKE '%" . $team_kw . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    /**
     * Insert roster table here
     */
	echo "<table><tr><th>PlayerName</th><th>DOB</th><th>Height</th><th>Weight</th><th>DraftYear</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
        if($row["DraftYear"] == NULL)
            echo "<tr><td>" . $row["PlayerName"] . "</td><td>" . $row["DOB"] . "</td><td>". $row["Height"] . "</td><td>". $row["Weight"] . "</td><td>Undrafted</td></tr>";
        else    
            echo "<tr><td>" . $row["PlayerName"] . "</td><td>" . $row["DOB"] . "</td><td>". $row["Height"] . "</td><td>". $row["Weight"] . "</td><td>". $row["DraftYear"] . "</td></tr>";
	}
	echo "</table>";
    
} else {
    echo "No such team as $dteam_kw";
}

?>