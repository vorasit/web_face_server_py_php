<?php
require_once("conn.php");
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
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
    function preview_image(event){
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('output_image');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    รหัสชื่อเล่น : <input type="text" name="p_id" id="p_id" value=""><br>

    ภาพผู้ลงทะเบียน : <input type="file" name="image" id="image" onchange="preview_image(event)" value=""><br>
    <input type="file" accept="image/*" name="image" id="image" capture="camera">
    <div align="center">
      <input type="submit" name="submit" value="add">
      <input type="reset" value="clear">
    </div>
    </form>
</body>
</html>