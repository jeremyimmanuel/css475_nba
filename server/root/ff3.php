<?php
include "db_connect.php";

$sql = "SELECT  TeamName,
                Championships
        FROM TEAM
        ORDER BY Championships DESC";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
    echo "<h3>NBA Teams with the most championships</h3>";

	echo "<table><tr><th>Team</th><th>Championships</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{        
        echo "<tr><td>" . $row["TeamName"] . "</td><td>";
        if($row["Championships"] == NULL)
            echo "None</td><tr>";
        else
            echo $row["Championships"] . "</td></tr>";
	}
    echo "</table>";
    
} else {
    echo "Facts are boring.";
}
?>