<?php
    require("Conn.php");
    $user_id=$_GET['id'];
    $sql="DELETE FROM registration WHERE user_id = $user_id";
    $results=mysqli_query($connection, $sql);
    //Forwards users to a page
    header("Location: view_users.php");
?>