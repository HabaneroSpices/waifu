<?php
    $sql = "SELECT * FROM torrents;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck >= 0) {
        while ($row = mysqli_fetch_assoc($result)) {
	    if ($row['torrent_disabled']) {} else {
            echo "<div class='torrent-item'>";
            echo "<span id='title'><a href='/dl.php?t=" . $row['torrent_id'] . "'>" . $row['torrent_name'] . "</a></span>";
            echo "<span id='stats'";
            if ($row['torrent_seed'] == 0){
              echo "value='low'";
            } else {
              echo "value='high'";
            }
            echo "> - Seed: " . $row['torrent_seed'] . " | Leech: " . $row['torrent_leech'] . "</span><br>";
            if (strlen($row['torrent_desc']) > 256) {
              echo "<p id='desc'>" . substr($row['torrent_desc'], 0, 256) . "...</p><br>";
            } else {
              echo "<p id='desc'>" . $row['torrent_desc'] . "</p><br>";
            }
            echo "</div>";
            }
	}
    }
    else {
      echo "<span id='db_err_empty'>Database error or empty</span>";
    }
