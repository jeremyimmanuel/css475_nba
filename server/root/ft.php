<?php
$sql = "SELECT  CONCAT(Fname, ' ', Lname) AS PlayerName,
                FT
        FROM PLAYED_FOR
            JOIN PLAYER USING (PlayerId)
        WHERE FT < 0.904
        ORDER BY FT DESC
        LIMIT 10";

echo "<h2>FREE THROW PERCENTAGE</h2>";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>No.</th><th>Player</th><th>FT</th></tr>";
    // output data of each row
    $count = 1;
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $count . "." . "</td><td>". $row["PlayerName"] . "</td><td>" . $row["FT"] . "</td></tr>";
        $count += 1;
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<br>"

?>