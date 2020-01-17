<?php
    define('HOSTNAME', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'docbooking');

    $db = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>