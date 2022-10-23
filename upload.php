<?php
session_start();
require_once 'db.php';

// 接收前端傳來的 DataURL 字串

$imagestring = trim($_REQUEST["imagestring"]);
$img = str_replace('data:image/png;base64,','', $imagestring);
$data = base64_decode($img);
$file = './picture/'. uniqid().'.png';
file_put_contents($file, $data);

$pid=$_SESSION['pid'];

if($pid==='-1'){
    mysqli_query($conn,"SET NAMES 'utf8'");
    $note=$_SESSION['note'];
    $id=$_SESSION['id'];
    $sql = "INSERT INTO `OSDS_SERVICE_photos` (`note`,`id`,`src`) VALUE ('$note',$id,'$file') ";
    $result = mysqli_query($conn,$sql);
}
else {
    $sql = "UPDATE  `OSDS_SERVICE_photos` SET `src` = '$file' WHERE `uuid`= $pid";
    $result = mysqli_query($conn,$sql);
}
// 用mysqli_query方法執行(sql語法)將結果存在變數中


// 如果有異動到資料庫數量(更新資料庫)
if (mysqli_affected_rows($conn)>0) {
echo "資料已更新";
}
elseif(mysqli_affected_rows($conn)==0) {
    echo "無資料更新";
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($conn);
}
 mysqli_close($conn); 
header('location:dm-photo-preview.php');
exit;
?>