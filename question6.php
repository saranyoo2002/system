<?php 
session_start(); 
include('condb.php');
  $level = $_SESSION['level'];
 	if($level!='student'){
    Header("Location:logout.php");  
  }  
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>RMUTI Questionnair</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-primary">
<!-- Left navbar links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="index3.html" class="nav-link">Home</a>
  </li>
  <li class="nav-item d-none d-sm-inline-block">
    <a href="" class="nav-link">Contact</a>
  </li> 
    
</ul>

<!-- SEARCH FORM -->


<!-- Right navbar links -->

  
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
  <img src="dist/img/rmuti_logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
       style="opacity: .8">
  <span class="brand-text font-weight-light">RMUTI QUESTIONNAIR</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="dist/img/user-logo.jpg" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Saranyoo Prangchaikul</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


      <li class="nav-item">
        <a href="student.php" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            หน้าแรก
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="question1.php" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            ทำแบบสอบถาม
          </p>
        </a>
      </li>


      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            แก้ไขรหัสผ่าน
          </p>
        </a>
      </li>

      <li class="nav-item">
        <a href="index.php" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            ออกจากระบบ
          </p>
        </a>
      </li>
      
      
       
      
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="card card-default">
            <div class="card-header">
                    <h6><b>ตอนที่ 6 ความพึงพอใจที่ได้รับจากสาขาวิชาที่ท่านสำเร็จการศึก<b></h6>
             </div>
             <form action="checkquestion.php" id="checkquestion.php" method="POST">  
             <div class="card-body">
                <div class = "row">   
                    <label>1) ด้านวิชาการ</label>
                    <div class="col-sm-2"> 
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="academic1" name="academic" value="มากที่สุด">
                                &nbsp;&nbsp;&nbsp;&nbsp;<label for="academic1" class="custom-control-label">5. มากที่สุด</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="academic2" name="academic" value="มาก">
                                &nbsp; &nbsp;<label for="academic2" class="custom-control-label">4. มาก</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="academic3" name="academic" value="ปานกลาง">
                                &nbsp; &nbsp; <label for="academic3" class="custom-control-label">3. ปานกลาง</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="academic4" name="academic" value="น้อย">
                                  &nbsp;&nbsp;&nbsp;<label for="academic4" class="custom-control-label">2. น้อย</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="academic5" name="academic" value="น้อยที่สุด">
                                &nbsp; &nbsp;<label for="academic5" class="custom-control-label">1. น้อยที่สุด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">   
                    <label>2) การปฎิบัติ</label>
                    <div class="col-sm-2"> 
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice1" name="practice" value="มากที่สุด">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="practice1" class="custom-control-label">5. มากที่สุด</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice2" name="practice" value="มาก">
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="practice2" class="custom-control-label">4. มาก</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice3" name="practice" value="ปานกลาง">
                                &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<label for="practice3" class="custom-control-label">3. ปานกลาง</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice4" name="practice" value="น้อย">
                                &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;<label for="practice4" class="custom-control-label">2. น้อย</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice5" name="practice" value="น้อยที่สุด">
                                &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;<label for="practice5" class="custom-control-label">1. น้อยที่สุด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">   
                    <label>3) ด้านคุณธรรม</label>
                    <div class="col-sm-2"> 
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice1" name="practice" value="มากที่สุด">
                                &nbsp;<label for="practice1" class="custom-control-label">5. มากที่สุด</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice2" name="practice" value="มาก">
                              <label for="practice2" class="custom-control-label">4. มาก</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice3" name="practice" value="ปานกลาง">
                               &nbsp;<label for="practice3" class="custom-control-label">3. ปานกลาง</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice4" name="practice" value="น้อย">
                                &nbsp;<label for="practice4" class="custom-control-label">2. น้อย</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="practice5" name="practice" value="น้อยที่สุด">
                                &nbsp;<label for="practice5" class="custom-control-label">1. น้อยที่สุด</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="card-header">
                    <h6 ><b>ตอนที่ 7 ความภาคภูมิใจในองค์กร<b></h6>
             </div>
             <div class="card-body">
                <div class = "row">   
                    <label>1) ความภาคภูมิใจในมหาวิทยาลัยฯ</label>
                   </div> 
                    <div class = "row"> 
                    <div class="col-sm-2"> 
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_11" name="pride_1" value="มากที่สุด">
                                <label for="pride_11" class="custom-control-label">5. มากที่สุด</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_12" name="pride_1" value="มาก">
                               <label for="pride_12" class="custom-control-label">4. มาก</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_13" name="pride_1" value="ปานกลาง">
                               <label for="pride_13" class="custom-control-label">3. ปานกลาง</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_14" name="pride_1" value="น้อย">
                                 <label for="pride_14" class="custom-control-label">2. น้อย</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_15" name="pride_1" value="น้อยที่สุด">
                               <label for="pride_15" class="custom-control-label">1. น้อยที่สุด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">   
                    <label>2) ความภาคภูมิใจในวิทยาลัยเขตที่ท่านสำเร็จการศึกษา</label>
                </div>    
                <div class = "row">
                    <div class="col-sm-2"> 
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_21" name="pride_2" value="มากที่สุด">
                               <label for="pride_21" class="custom-control-label">5. มากที่สุด</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_22" name="pride_2" value="มาก">
                               <label for="pride_22" class="custom-control-label">4. มาก</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_23" name="pride_2" value="ปานกลาง">
                                <label for="pride_23" class="custom-control-label">3. ปานกลาง</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_24" name="pride_2" value="น้อย">
                                <label for="pride_24" class="custom-control-label">2. น้อย</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_25" name="pride_2" value="น้อยที่สุด">
                                <label for="pride_25" class="custom-control-label">1. น้อยที่สุด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">   
                    <label>3) ความภาคภูมิใจในคณะที่ท่านสำเร็จการศึกษา</label>
                </div> 
                <div class = "row"> 
                    <div class="col-sm-2"> 
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_31" name="pride_3" value="มากที่สุด">
                                <label for="pride_31" class="custom-control-label">5. มากที่สุด</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_32" name="pride_3" value="มาก">
                                <label for="pride_32" class="custom-control-label">4. มาก</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_33" name="pride_3" value="ปานกลาง">
                               <label for="pride_33" class="custom-control-label">3. ปานกลาง</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_34" name="pride_3" value="น้อย">
                                <label for="pride_34" class="custom-control-label">2. น้อย</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_35" name="pride_3" value="น้อยที่สุด">
                                <label for="pride_35" class="custom-control-label">1. น้อยที่สุด</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">   
                    <label>4) ความภาคภูมิใจในคณะที่ท่านสำเร็จการศึกษา</label>
                </div> 
                <div class = "row"> 
                    <div class="col-sm-2"> 
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_41" name="pride_4" value="มากที่สุด">
                                <label for="pride_41" class="custom-control-label">5. มากที่สุด</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_42" name="pride_4" value="มาก">
                                <label for="pride_42" class="custom-control-label">4. มาก</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_43" name="pride_4" value="ปานกลาง">
                               <label for="pride_43" class="custom-control-label">3. ปานกลาง</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_44" name="pride_4" value="น้อย">
                                <label for="pride_44" class="custom-control-label">2. น้อย</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="pride_45" name="pride_4" value="น้อยที่สุด">
                                <label for="pride_45" class="custom-control-label">1. น้อยที่สุด</label>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <div class="card-header">
                    <h6 ><b>ตอนที่ 8 ข้อมูลคุณความดีและรางวัลเกียรติยศต่างๆ<b></h6>
            </div>
                <div class="card-body">
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="name_award">ชื่อประกาศเกียรติคุณ/รางวัลที่ได้รับในรอบ 3 ปี ที่ผ่านมา</label>
                            <input type="text" class="form-control"  name="name_award" required >
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="agency_award">หน่วยงานที่ได้มอบรางวัลประกาศเกียรติคุณ/รางวัล</label>
                            <input type="text" class="form-control"  name="agency_award" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="date_award">วัน/เดือน/ปี ที่ได้รับประกาศเกียรติคุณ/รางวัล</label>
                            <input type="date" class="form-control"  name="date_award" required>
                        </div>
                    </div>
                </div>   
                    <lable>ประเภทของประกาศเกียรติคุณ/รางวัล</label>
                    <div class ="row">
                        <div class="col-sm-12"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_award1" name="type_award" value="ด้านสิ่งแวดล้อม">
                                <label for="type_award1" class="custom-control-label">1.ด้านสิ่งแวดล้อม</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_award2" name="type_award" value="ด้านศิลปะและวัฒนธรรม">
                                <label for="type_award2" class="custom-control-label">2.ด้านศิลปะและวัฒนธรรม</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_award3" name="type_award" value="ด้านกีฬา สุขภาพ">
                                <label for="type_award3" class="custom-control-label">3.ด้านกีฬา สุขภาพ</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_award4" name="type_award" value="ด้านคุณธรรม">
                                <label for="type_award4" class="custom-control-label">4.ด้านคุณธรรม</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_award5" name="type_award" value="ด้านวิชาการ วิชาชีพ">
                                <label for="type_award5" class="custom-control-label">5.ด้านวิชาการ วิชาชีพ</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_award6" name="type_award" value="อื่นๆ (ระบุ)">
                                <label for="type_award6" class="custom-control-label">6.อื่นๆ (ระบุ)</label>
                            </div>
                        </div>

                    </div>   
                    <lable>ระดับของประกาศเกียรติคุณ/รางวัล</label>
                    <div class ="row">
                        <div class="col-sm-12"> 
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level_award1" name="level_award" value="ระดับท้องถิ่น">
                                <label for="level_award1" class="custom-control-label">1.ระดับท้องถิ่น</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level_award2" name="level_award" value="ระดับองค์กร">
                                <label for="level_award2" class="custom-control-label">2.ระดับองค์กร</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level_award3" name="level_award" value="ระดับชาติ">
                                <label for="level_award3" class="custom-control-label">3.ระดับชาติ</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level_award4" name="level_award" value="ระดับนานาชาติ">
                                <label for="level_award4" class="custom-control-label">4.ระดับนานาชาติ</label>
                            </div>
                        </div>
                    </div>   

                </div> <!-- ปิดบอดี้ -->

                <div class="card-header">
                    <h6 ><b>ตอนที่ 9 ข้อเสนอแนะ<b></h6>
                </div>
                <div class="card-body">
                <label>1.หลักสูตรของมหาวิทยาลัย ควรเพิ่มรายวิชาหรือความรู้เรื่องใดที่จะเอื้อประโยชน์ต่อการประกอบอาชีพของท่านได้มากยิ่งขึ้น(ตอบได้มากกว่า 1 ข้อ)
                <div class ="row">
                <div class="col-sm-4">
                        <div class="form-group">         
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve1" name="improve" value="ภาษาอังกฤษ">
                                <label for="improve1" class="custom-control-label">1.ภาษาอังกฤษ</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve2" name="improve" value="ขาดประกอบการในการทำงาน" >
                                <label for="improve2" class="custom-control-label">4.ขาดประกอบการในการทำงาน</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve3" name="improve" value="ขาดทักษะด้านคอมพิวเตอร์">
                                <label for="improve3" class="custom-control-label">7.ขาดทักษะด้านคอมพิวเตอร์</label>
                            </div>
                         </div>
                       </div>     

                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve4" name="improve" value="คอมพิวเตอร์" >
                                <label for="improve4" class="custom-control-label">2.คอมพิวเตอร์</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve5" name="improve" value="การฝึกปฎิบัติงานจริง" >
                                <label for="improve5" class="custom-control-label">5.การฝึกปฎิบัติงานจริง</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve6" name="improve" value="ภาษาอาเซียน" >
                                <label for="improve7" class="custom-control-label">8.ภาษาอาเซียน</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve7" name="improve" value="บัญชี" >
                                <label for="improve7" class="custom-control-label">3.บัญชี</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve8" name="improve" value="เทคนิคการวิจัย" >
                                <label for="improve8" class="custom-control-label">6.เทคนิคการวิจัย</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="improve9" name="improve" value="อื่นๆ (ระบุ)" >
                                <label for="improve9" class="custom-control-label">9.อื่นๆ (ระบุ)</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
                <div class = "row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">2.ข้อเสนอแนะเกี่ยวกับหลักสูตรและสาขาวิชาที่เรียน</label>
                            <textarea  class="form-control" name="suggestion_course" rows="4"  style="resize:none"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">2.ข้อเสนอแนะเกี่ยวกับการเรียนการสอน</label>
                            <textarea  class="form-control" name="suggestion_study" rows="4"  style="resize:none"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">3.ข้อเสนอแนะเกี่ยวกับกิจกรรมพัฒนานักศึกษา</label>
                            <textarea  class="form-control" name="suggestion_activity" rows="4" style="resize:none"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit"name="questions_6" class="btn btn-primary" value="ถัดไป"></input>
                </div>
               </div>
            </form>
           </div>
        </div>
    </section>

</div>


<footer class="main-footer">
<strong>Copyright &copy;saranyoo</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
  <b>Version</b> 3.0.5
</div>
</footer>


<aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

