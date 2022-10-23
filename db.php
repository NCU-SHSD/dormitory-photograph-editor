<?php
$db_host = "localhost";
$db_user = "root";
$db_passwd = "";
$db_name = "ncu7221";
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
if($conn){
    mysqli_query($conn,'SET NAMES utf8');
    // echo "正確連接資料庫";
}
else {
    echo "不正確連接資料庫</br>" . mysqli_connect_error();
}
?>