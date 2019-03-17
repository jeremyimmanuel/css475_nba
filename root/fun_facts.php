<html>
<head>
</head>

<body>
	
<h1>TEAM AVATAR</h1>
    <h2>NBA Database</h2>
    <h3>Jeremy Tandjung, Nathan Phan, Aaron Handjojo, and Brandon Posey</h3>
    
    <a href = "index.php">Home</a>
    <a href = "search_player.html">Players</a>
    <a href = "search_team.html">Teams</a>
    <a href = "coaches.php">Coaches</a>
    <a href = "awards.php">Awards</a>
    <a href = "arenas.php">Arena</a>
	<a href = "league_leaders.php">League Leaders</a>
	<a href = "fun_facts.php">Fun Facts</a>
    <br><br>

<?php
include "db_connect.php";

echo "<h2>Fun Facts</h2>";

$sql = "SELECT 	CONCAT(Height_ft, '\'', Height_inch, '\"') AS Height,
        AVG(PPG) AS AveragePPG
        FROM PLAYER
        JOIN PLAYED_FOR USING (PlayerId)
        GROUP BY Height
        ORDER BY Height_ft DESC, Height_inch DESC;";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    /**
     * Insert roster table here
     */
    echo "<h3>Do taller people perform score more than shorter people?</h3>";

	echo "<table><tr><th>Height</th><th>AveragePPG</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{        
        echo "<tr><td>" . $row["Height"] . "</td><td>" . $row["AveragePPG"] . "</td></tr>";
	}
    echo "</table>";
    
    echo "<p>This shows that the players who score the most in the NBA tend to be around 6'1\" with 11.24 points per game on average.</p>";
    echo "<p>Therefore, being taller doesn't necessarily make you a better scorer in the NBA.</p>";
    
} else {
    echo "Facts are boring.";
}
?>

<?php
include "db_connect.php";

$sql = "SELECT 	CONCAT(Height_ft, '\'', Height_inch, '\"') AS Height,
        AVG(PPG) AS AveragePPG
        FROM PLAYER
        JOIN PLAYED_FOR USING (PlayerId)
        GROUP BY Height
        ORDER BY Height_ft DESC, Height_inch DESC;";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    /**
     * Insert roster table here
     */
    echo "<h3>Does having a higher scoring individual mean more wins?</h3>";

	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th><th>Highest Scoring Player</th><th>Points Scored by Highest Scoring Player</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{        
        echo "<tr><td>" . $row["Height"] . "</td><td>" . $row["AveragePPG"] . "</td></tr>";
	}
    echo "</table>";
    
    echo "<p>This shows that the players who score the most in the NBA tend to be around 6'1\" with 11.24 points per game on average.</p>";
    echo "<p>Therefore, being taller doesn't necessarily make you a better scorer in the NBA.</p>";
    
} else {
    echo "Facts are boring.";
}
?>

<?php
$mysqli->close();
?>

</body>
</html>