<?php
require_once('conn.php');
    session_start();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM login WHERE user_name = '{$username}' AND pwd = '{$password}'";
        $result = $conn->query($sql);
        if(mysqli_num_rows($result)==1){

          $row = mysqli_fetch_array($result);

          $_SESSION["username"] = $row["user_name"];
          $_SESSION["password"] = $row["pwd"];
          $_SESSION["Userlevel"] = $row["Userlevel"];

          if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

            Header("Location: main_admin.php");

          }
          if($_SESSION["Userlevel"]=="B"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

            Header("Location: main.php");

          }

          

      }else{
        echo "<script>";
            echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
            echo "window.history.back()";
        echo "</script>";
      }
?>
