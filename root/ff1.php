<?php
include "db_connect.php";

$sql = "SELECT  CONCAT(Height_ft, '\'', Height_inch, '\"') AS Height,
                AVG(PPG) AS AveragePPG
        FROM PLAYER
            JOIN PLAYED_FOR USING (PlayerId)
        GROUP BY Height
        ORDER BY Height_ft DESC, Height_inch DESC";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    echo "<h3>Does having the best scorer translate to more wins?</h3>";

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