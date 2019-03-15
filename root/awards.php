<html><body>

    <h1>TEAM AVATAR</h1>
    <h2>NBA Database</h2>
    <h3>Jeremy Tandjung, Nathan Phan, Aaron Handjojo, and Brandon Posey</h3>
       
    <a href = "index.php">Home</a>
    <a href = "search_player.html">Players</a>
    <a href = "index.php">Teams</a>
    <a href = "index.php">Coaches</a>
    <a href = "index.php">Awards</a>
    <a href = "index.php">Arena</a>
    <br><br>


    <?php
    include "db_connect.php";

    echo "<h2>Below is the list of active players that have won an NBA award in the past</h2>";
    
    include "mvp.php";
    include "dpoy.php";
    include "mip.php";
    include "roy.php";
    include "smoy.php";

    ?>





</body></html>