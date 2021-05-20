<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "", "zsk");
    $query = "DELETE FROM clients WHERE client_id = $_GET[oid];";
    mysqli_query($link, $query);
    header('location: ../szmyt_oskar.php');
?>