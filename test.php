<?php
$mysqli = new mysqli("localhost", "smesoftc_smesoftc", "HappyPaws24", "smesoftc_ocart3x0x3x9");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Connected successfully!";
}
?>
