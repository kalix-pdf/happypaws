<?php

    $connections = mysqli_connect("localhost", "smesoftc_ocart3x0x3x9", "c8#cE3$e0H2n", "smesoftc_ocart3x0x3x9");
    
    if ($connections == false) {
        die("Connection Error: " . mysqli_connect_error());
    }

?>