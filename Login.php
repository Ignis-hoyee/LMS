<?php
/**
 * Created by PhpStorm.
 * User: 24521
 * Date: 2018/3/28
 * Time: 16:33
 */
$user = $_POST["user"];
$password = $_POST["password"];


$db_host = "localhost";
$db_usr = "root";
$db_pwd = "P@ssw0rd";

$conn = new mysqli($db_host, $db_usr, $db_pwd);
if($conn -> connect_error){
    die("Database Login failed." . $conn->connect_error);
}
//数据库的登陆判断



?>

