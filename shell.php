<?php
/**
 * Created by PhpStorm.
 * User: 24521
 * Date: 2018/4/5
 * Time: 12:32
 */

function database()
{
    $dblink = "localhost";
    $dbuser = "root";
    $dbpawd = "Liang19960813";

    $conn = mysqli_connect($dblink, $dbuser, $dbpawd);

    if (!$conn){
        die("connection failed" . mysqli_connect_error());
    }
    echo "Connection completed.";
}

?>