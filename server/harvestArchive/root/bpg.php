<?php
$sql = "SELECT  CONCAT(Fname, ' ', Lname) AS PlayerName,
                BPG
        FROM PLAYED_FOR
            JOIN PLAYER USING (PlayerId)
        ORDER BY BPG DESC
        LIMIT 10";

echo "<h2>BLOCKS PER GAME</h2>";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>No.</th><th>Player</th><th>BPG</th></tr>";
    // output data of each row
    $count = 1;
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr><td>" . $count . "." . "</td><td>". $row["PlayerName"] . "</td><td>" . $row["BPG"] . "</td></tr>";
        $count += 1;
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<br>"

?>