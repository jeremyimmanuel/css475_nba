<?php
include "db_connect.php";

$sql = "SELECT 	TeamName,
                MAX(PPG) AS HighestPPG,
                Wins
        FROM TEAM
            JOIN PLAYED_FOR USING (TeamId)
            JOIN PLAYER USING (PlayerId)
        GROUP BY (TeamName)
        ORDER BY Wins DESC";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    /**
     * Insert roster table here
     */
    echo "<h3>Does having the best scorer translate to more wins?</h3>";

	echo "<table><tr><th>Team</th><th>Highest PPG</th><th>Wins</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{        
        echo "<tr><td>" . $row["TeamName"] . "</td><td>" . $row["HighestPPG"] . "</td><td>" . $row["Wins"] . "</td></tr>";
	}
    echo "</table>";
    
    echo "<p>As you may see, the Houston Rockets has the player that is scoring the highest points per game in the league with 36.6 points per game.</p>";
    echo "<p>However, the Rockets do not have the most wins in the NBA.</p>";
    echo "<p>Therefore, having the best scorer in the NBA doesn't always translate to more wins.</p>";    
} else {
    echo "Facts are boring.";
}
?>