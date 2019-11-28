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

echo "<h2>NBA Arenas</h2><br>";

$sql = "SELECT  TeamName, ArenaName, Arena.Address AS Arena_Address, City, Arena.State AS Arena_State, Capacity, BuiltIn
		FROM TEAM
            JOIN ARENA USING (ArenaId)
        WHERE Team.ArenaId = Arena.ArenaId;";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    /**
     * Insert roster table here
     */
	echo "<table><tr><th>Team</th><th>Arena</th><th>Address</th><th>City</th><th>State</th><th>Capacity</th><th>BuiltIn</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{        
        echo "<tr><td>" . $row["TeamName"] . "</td><td>" . $row["ArenaName"] . "</td><td>". $row["Arena_Address"] . "</td><td>". $row["City"] . "</td><td>". $row["Arena_State"] . "</td><td>". $row["Capacity"] . "</td><td>". $row["BuiltIn"] . "</td><td><img src = \"images/". $row["ArenaName"] .".jpg\" width=\"100\" height=\"30\" ></td></tr>";
	}
	echo "</table>";
    
} else {
    echo "No arenas found.";
}

?>

<?php
$mysqli->close();
?>


</body>
</html>