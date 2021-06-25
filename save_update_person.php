<?php
require_once('conn.php');
$p_id = $_GET["p_id"];
$first_name = $_GET["first_name"];
$last_name = $_GET["last_name"];
$age = $_GET["age"];
$job = $_GET["job"];
$img = $_GET["img"];
if($img != NULL)
{
    $sql = "UPDATE person SET 
            first_name='".$first_name."',
            last_name='".$last_name."' ,
            age='".$age."' ,
            job='".$job."' ,
            img='img/".$img."'
            WHERE p_id = '".$p_id."' ";

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
}
else
{
    $sql = "UPDATE person SET 
            first_name='".$first_name."',
            last_name='".$last_name."' ,
            age='".$age."' ,
            job='".$job."' 
            WHERE p_id = '".$p_id."' ";

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
}
?>
