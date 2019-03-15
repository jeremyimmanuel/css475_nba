<?php
$sql = "SELECT *
        FROM AWARD
            JOIN AWARD_WINNER USING (AwardId)
            JOIN PLAYER USING (PlayerId)
        WHERE Name = 'Defensive Player of the Year'";
$result = $mysqli->query($sql);
echo "<h2>Defensive Player of the Year</h2>";
$row = $result->fetch_assoc();
echo $row["Description"] . "<br><br>";
echo $row["YearWon"] . ": " . $row["Fname"] . " " . $row["Lname"]. "<br>";

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo $row["YearWon"] . ": " . $row["Fname"] . " " . $row["Lname"]. "<br>";

}
} else {
echo "0 results";
}

echo "<br>"

?>