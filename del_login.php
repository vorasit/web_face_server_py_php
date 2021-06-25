<?php
    require_once('conn.php');
    $id = $_GET["id"];
    $sql = "DELETE FROM login
            WHERE id = '".$id."' ";

    if ($conn->query($sql) === TRUE) {
    echo "<script>";
        echo "alert(\" ลบสำเร็จ \");"; 
        echo 'window.location= "main_admin.php"';
    echo "</script>";
    } else {
        echo "<script>";
                echo "alert(\" ลบไม่สำเร็จ\");"; 
                echo "window.history.back()";
        echo "</script>";
    }