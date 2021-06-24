<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once('conn.php');
$p_id = $_POST["p_id"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$age = $_POST["age"];
$job = $_POST["job"];
$file_name = $_FILES['image']['name'];

if(isset($_FILES['image'])){
  $errors= array();
  $file_name = $_FILES['image']['name'];
  $file_size =$_FILES['image']['size'];
  $file_tmp =$_FILES['image']['tmp_name'];
  $file_type=$_FILES['image']['type'];
  $file_exp = explode('.',$file_name);
  $file_ext=end($file_exp);
  
  $extensions= array("jpeg","jpg","png");
  
  if(in_array($file_ext,$extensions)=== false){
     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
  }
  
  if($file_size > 2097152){
     $errors[]='File size must be excately 2 MB';
  }
  
  if(empty($errors)==true){
     move_uploaded_file($file_tmp,"img/".$file_name);
     print_r($file_name);
     echo "Success";
  }else{
     print_r($errors);
  }
}
$sql = "INSERT INTO person(p_id,first_name ,last_name,age, job, img)
values('{$p_id}','{$first_name}','{$last_name}','{$age}','{$job}','img/{$file_name}')";
$query = $conn->query($sql);
if ($query) {
  echo "<script>";
      echo "alert(\" การเพิ่มเสร็จสมบูรณ์ \");"; 
      echo 'window.location= "login.php"';
  echo "</script>";
}
else {
  echo "ไม่สมบูรณ์".$conn->error;
}

?>
</body>
</html>