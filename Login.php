<?php
/**
 * Created by PhpStorm.
 * User: 24521
 * Date: 2018/3/28
 * Time: 16:33
 */
$address = "localhost";
$userid = "root";
$passwd = "lhr19960813";
$dbname = "user";

$conn = mysqli_connect($address, $userid, $passwd, $dbname);

if (!$conn){
    die("connection failed:" . mysqli_connect_error());
}

$sql = "SELECT number, user, password FROM user";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

}
?>
