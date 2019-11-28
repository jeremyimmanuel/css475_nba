<?php
$sql = "SELECT  CONCAT(Fname, ' ', Lname) AS PlayerName,
                FG3
        FROM PLAYED_FOR
            JOIN PLAYER USING (PlayerId)
        WHERE FG3 < 0.47
        ORDER BY FG3 DESC
        LIMIT 10";

echo "<h2>THREE-POINT FIELD GOAL PERCENTAGE</h2>";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>No.</th><th>Player</th><th>FG3</th></tr>";
    // output data of each row
    $count = 1;
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $count . "." . "</td><td>". $row["PlayerName"] . "</td><td>" . $row["FG3"] . "</td></tr>";
        $count += 1;
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<br>"

?>