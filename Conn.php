<?php
    $servername = "localhost";
    $username = "root";
    $schema="onepiece";
    $connection = mysqli_connect($servername, $username, "", $schema);
    if(!$connection)
    {
        die('could not connect!');
    }
?>

