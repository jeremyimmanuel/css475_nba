<h1>TEAM AVATAR</h1>
<h2>NBA Database</h2>
<h3>Jeremy Tandjung, Nathan Phan, Aaron Handjojo, and Brandon Posey</h3>

<a href = "index.php">Home</a>
<a href = "search_player.html">Players</a>
<a href = "search_team.html">Teams</a>
<a href = "coaches.php">Coaches</a>
<a href = "awards.php">Awards</a>
<a href = "index.php">Arena</a>
<a href = "league_leaders.php">League Leaders</a>
<br><br>

<?php

include "db_connect.php";

echo "<h2>League Leaders</h2><br>";

include "ppg.php";
echo "<br><br>";
include "apg.php";
echo "<br><br>";
include "rpg.php";
echo "<br><br>";
include "bpg.php";
echo "<br><br>";
include "spg.php";
echo "<br><br>";
include "fg.php";
echo "<br><br>";
include "fg3.php";
echo "<br><br>";
include "ft.php";
echo "<br><br>";
?>