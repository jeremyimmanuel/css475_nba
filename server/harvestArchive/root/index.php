<html>
<head>
<link rel="icon" href="https://www.nba.com/favicon.ico">
</head>
<title>Team Avatar NBA Database</title>
<body>
	
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
/**
 * INSERT Eastern Conference table
 * 
 * INSERT Western Conference table
 * 
 * 
 */

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Conference = 'East'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Eastern Conference Overall Standings</h2>";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}

?>

<?php
include "db_connect.php";

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Conference = 'West'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Western Conference Overall Standings</h2>";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}

?>

<?php
include "db_connect.php";

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Division = 'Atlantic'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Atlantic Division Standings</h2>";
		
$result = $mysqli->query($sql);


if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}
echo "<br><br>";
?>

<?php
include "db_connect.php";

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Division = 'Central'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Central Division Standings</h2>";
		
$result = $mysqli->query($sql);


if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}
echo "<br><br>";
?>

<?php
include "db_connect.php";

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Division = 'Southeast'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Southeast Division Standings</h2>";
		
$result = $mysqli->query($sql);


if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}
echo "<br><br>";
?>

<?php
include "db_connect.php";

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Division = 'Northwest'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Northwest Division Standings</h2>";
		
$result = $mysqli->query($sql);


if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}
echo "<br><br>";
?>

<?php
include "db_connect.php";

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Division = 'Pacific'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Pacific Division Standings</h2>";
		
$result = $mysqli->query($sql);


if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}
echo "<br><br>";
?>

<?php
include "db_connect.php";

$sql = "SELECT TeamName AS Team, Wins, Losses
		FROM TEAM
		WHERE TEAM.Division = 'Southwest'
		ORDER BY TEAM.Wins DESC;";

echo "<h2>Southwest Division Standings</h2>";
		
$result = $mysqli->query($sql);

if ($result->num_rows > 0) 
{
	echo "<table><tr><th>Team</th><th>Wins</th><th>Losses</th></tr>";
	//	output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Team"] . "</td><td>". $row["Wins"] . "</td><td>" . $row["Losses"] . "</td></tr>";
	}
	echo "</table>";
}	
else
{
	echo "0 results";
}
echo "<br>";
?>

<?php
$mysqli->close();
?>


</body>
</html>