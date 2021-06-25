<?php
    require_once('conn.php');
    $p_id = $_GET["p_id"];
    $sql = "DELETE FROM person
            WHERE p_id = '".$p_id."' ";

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