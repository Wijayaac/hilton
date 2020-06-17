<?php

function open_connection()
{
    $host = "localhost";
    $username = "root";
    $password = "";

    $databasename = "hotel";

    $connect = mysqli_connect($host, $username, $password, $databasename);
    return $connect;
}