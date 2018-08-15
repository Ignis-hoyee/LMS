<?php
/**
 * Created by PhpStorm.
 * User: 24521
 * Date: 2018/3/28
 * Time: 16:33
 */
$dbhost = "localhost";
$dbuser= "root";
$dbpswd = "lhr19960813";
$dbname = "lms";
$userid = $_POST['userid'];
$passwd = $_POST['passwd'];

$conn = mysqli_connect($dbhost, $dbuser, $dbpswd, $dbname);

if (!$conn){
    die("connection failed:" . mysqli_connect_error());
}
if ($userid && $passwd){
    $sql = "SELECT * FROM user WHERE userid = '$userid' AND passwd = '$passwd';";
    $result = mysqli_query($sql);
    $rows = mysqli_num_rows($result);
    if($row = 1){
        header("refresh:0; url=management.html");
        exit;
    }else {
        echo "用户或密码错误";
        echo "
            <script>
                setTimeout(function(){window.location.href='login.html';},1000);
            </script>
            ";
    }
}else{
    echo "用户名或密码不可为空";
    echo "
    <script>
        setTimeout(function(){window.location.href='login.html';},1000);
    </script>";
}
mysqli_close();
?>
