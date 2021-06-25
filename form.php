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

<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="วิทยาลัยสารพัดช่างลำปาง หลักสูตรออนไลน์,http://www.lampangpoly.ac.th,lampangpoly,ลำปาง" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/lvc.png" type="image/icon type">
    <title>วิทยาลัยสารพัดช่างลำปาง ลงทะเบียนสแกนใบหน้า</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        .center {
          margin: auto;
          width: 60%;
          
          padding: 10px;
        }

        .center1 {
          margin: auto;
          width: 80%;
          
          padding: 10px;
        }

    </style>
    <style>
        body {
        font-family: "Lato", sans-serif;
        }
        
        .sidenav {
        height: 100%;
        width: 20%;
        position: fixed;
        z-index: 1;
        top: 5;
        left: 0;
        background-color: rgb(0, 0, 0, 0.05);
        overflow-x: hidden;
        padding-top: 20px;
        }
        
        .sidenav a {
        padding: 6px 6px 6px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        }
        
        .sidenav a:hover {
        color: #f1f1f1;
        }
        
        .main {
        margin-left: 200px; /* Same as the width of the sidenav */
        }
        
        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand" href="index.php"><img src="img/lvc.png" alt="วิทยาลัยสารพัดช่างลำปาง" width="50%" height="50%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html" style="color:rgb(226, 226, 240)">หน้าแรก <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=230&Itemid=292" style="color:rgb(226, 226, 240)">ประวัติวิทยาลัย</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:rgb(226, 226, 240)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ระบบลงทะเบียนทั้งหมด
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login.php">เข้าสู่ระบบ</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="form.php">ลงทะเบียนรายบุคคล</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">คนที่ลงทะเบียนทั้งหมด</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">ค้นหาผู้ลงทะเบียน</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="dance.html">แก้ไขผู้ลงทะเบียน</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">ลบผู้ลงทะเบียน</a>

              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:rgb(226, 226, 240)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  เกี่ยวกับ
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=230&Itemid=292">ประวัติการจัดตั้ง</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=231&Itemid=192">วิสัยทัศน์</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=232&Itemid=293">ปรัชญา</a>
                </div>
              </li>

            <!--
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            -->
          </ul>
        </div>
      </nav>
    </header>
<div class="center">
    <h2>ลงทะเบียนรายบุคคล</h2>

    <form action="add.php" method="post" enctype="multipart/form-data">
      <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">รหัสชื่อเล่น(ตัวพพิมพ์ใหญ่) : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="p_id" name="p_id" value="">
        </div>
      </div>
      <div class="mb-3 row">
          <label for="name" class="col-sm-2 col-form-label">ชื่อจริง : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="first_name" name="first_name" value="">
        </div>
      </div>
      <div class="mb-3 row">
          <label for="lname" class="col-sm-2 col-form-label">นามสกุล : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="last_name" name="last_name" value="">
        </div>
      </div>
      <div class="mb-3 row">
          <label for="age" class="col-sm-2 col-form-label">อายุ : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="age" name="age" value="">
        </div>
      </div>  
      <div class="mb-3 row">
          <label for="job" class="col-sm-2 col-form-label">อาชีพ : </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="job" name="job" value="">
        </div>
      </div>
      <div class="mb-3 row">
          <label for="job" class="col-sm-2 col-form-label">ภาพผู้ลงทะเบียน : </label>
        <div class="col-sm-10">
        <input type="file" class="form-control form-control-sm" name="image" id="image" onchange="preview_image(event)" value="">
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Add</button>
      <button type="reset" class="btn btn-danger">Cancle</button>
      
    </form>

</div>
    <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span> </span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>วิทยาลัยสารพัดช่างลำปาง 
            </h6>
            <p>
                551  หมู่  1  ต.พระบาท  อ.เมือง  จ.ลำปาง  52000
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
            <b> ข้อมูลบุคคลากร</b>
            </h6>
            <p>
              <a href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=234&Itemid=296" class="text-reset">คณะผู้บริหาร</a>
            </p>
            <p>
              <a href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=475&Itemid=342" class="text-reset">ทำเนียบผู้บริหารวิทยาลัยสารพัดช่างลำปาง</a>
            </p>
            <p>
              <a href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=524&Itemid=271" class="text-reset">จำนวนบุคลากร </a>
            </p>
          
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              <b> ข้อมูลของวิทยาลัย</b>
            </h6>
            <p>
              <a href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=230&Itemid=292!" class="text-reset">ประวัติการจัดตั้ง</a>
            </p>
            <p>
              <a href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=231&Itemid=192" class="text-reset">วิสัยทัศน์</a>
            </p>
            <p>
              <a href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=232&Itemid=293" class="text-reset">ปรัชญา</a>
            </p>
            <p>
              <a href="http://www.lampangpoly.ac.th/main/index.php?option=com_content&view=article&id=241:2015-02-25-16-43-49&catid=47:2015-02-24-05-54-25&Itemid=278" class="text-reset">แผนที่ตั้ง วิทยาลัย</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              <b> ช่องทางการติดต่อ</b>
            </h6>
            <p><i class="fas fa-home me-3"></i> 551 หมู่ 1 ต.พระบาท อ.เมือง จ.ลำปาง 52000</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              http://www.lampangpoly.ac.th/
            </p>
            <p><i class="fas fa-phone me-3"></i> โทร. 054-821567</p>
            <p><i class="fas fa-print me-3"></i> Fax. 054-821568</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        วิทยาลัยสารพัดช่างลำปาง |
      <a class="text-reset fw-bold" href="http://www.lampangpoly.ac.th/">lampangpoly © 2011</a>
    </div>
    <!-- Copyright -->
  </footer>


  
</body>
</html>