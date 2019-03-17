<html>
<head>
</head>

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
echo "<h2>Fun Facts</h2>";

include "ff1.php";

include "ff2.php";


$mysqli->close();
?>

</body>
</html>