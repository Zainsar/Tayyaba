<?php
require('Includes/config.php');

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $sql = "SELECT `pid` , `ptitle` FROM `addproduct` WHERE `ptitle` LIKE '%$query%'";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<li class="suggestion" data-hospital-id="' . $row['pid'] . '" style="margin-left: 30px; margin-top:20px; color: black; list-style-type: none; text-decoration: none;" 
            onmouseover="this.style.color=\'blue\';" onmouseout="this.style.color=\'black\';">' . $row['ptitle'] . '</li>';

        }
    } else {
        echo "No results found";
    }
}
$connection->close();

?>