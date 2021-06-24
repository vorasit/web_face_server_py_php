<?php
require_once('conn.php');
$id = $_GET[""];
$user_name = $_GET[""];
$pwd = $_GET["pwd"];
$sql = "UPDATE person SET 
        user_name='".$."',
        pwd='".$pwd."' 
        WHERE id = '".$id."' ";

if ($conn->query($sql) === TRUE) {
  echo "<script>";
      echo "alert(\" แก้ไขสำเร็จ \");"; 
      echo 'window.location= "main_admin.php"';
  echo "</script>";
  } else {
    echo "<script>";
            echo "alert(\" แก้ไขไม่สำเร็จ\");"; 
            echo "window.history.back()";
    echo "</script>";
  }

?>