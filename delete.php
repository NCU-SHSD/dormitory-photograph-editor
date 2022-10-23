<?php
require_once 'db.php';

// 接收前端傳來的 DataURL 字串

$pid=$_GET['pid'];

echo $pid;

$sql = "DELETE FROM `OSDS_SERVICE_photos` WHERE `uuid`= $pid";
// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($conn,$sql);

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