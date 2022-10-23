<?php
  session_start();
  $pid=$_GET['pid'];
  $_SESSION['pid']=$pid;
  $_styleSheet = "stylesheet/dm-photo-editor.html";
  $_pageContent = 'pagecontent/dm-photo-editor.php';

  include_once("template/main.php");  
?>