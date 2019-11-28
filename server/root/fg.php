<?php
$sql = "SELECT  CONCAT(Fname, ' ', Lname) AS PlayerName,
                FG
        FROM PLAYED_FOR
            JOIN PLAYER USING (PlayerId)
        WHERE FG < 0.66
        ORDER BY FG DESC
        LIMIT 10";

echo "<h2>FIELD GOAL PERCENTAGE</h2>";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>No.</th><th>Player</th><th>FG</th></tr>";
    // output data of each row
    $count = 1;
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $count . "." . "</td><td>". $row["PlayerName"] . "</td><td>" . $row["FG"] . "</td></tr>";
        $count += 1;
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<br>"

?>