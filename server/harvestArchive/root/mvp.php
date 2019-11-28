<?php
$sql = "SELECT *
        FROM AWARD
            JOIN AWARD_WINNER USING (AwardId)
            JOIN PLAYER USING (PlayerId)
        WHERE Name = 'Most Valuable Player'";
$result = $mysqli->query($sql);
echo "<h2>Most Valuable Player</h2>";
$row = $result->fetch_assoc();
echo $row["Description"] . "<br><br>";
echo $row["YearWon"] . ": " . $row["Fname"] . " " . $row["Lname"]. "<br>";


if ($result->num_rows > 0) {
// output data of each row
    //echo $result->fetch_assoc()["Descrition"];
    while($row = $result->fetch_assoc()) {
        echo $row["YearWon"] . ": " . $row["Fname"] . " " . $row["Lname"]. "<br>";

    }
    } else {
    echo "0 results";
    }

echo "<br>"

?>