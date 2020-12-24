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
        <a href="editpassword_student.php" class="nav-link">
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
                    <h5 ><b>ข้อมูลทั่วไป<b></h5>
                </div>
                <form action="checkquestion.php" id="checkquestion.php" method="POST">  
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="university">ท่านสำเร็จการศึกษาจาก</label>
                                        <input type="text" class="form-control" name="university"required  maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facuity">คณะ</label>
                                        <input type="text" class="form-control" name="facuity" required  maxlength = "35"> 
                                    </div>
                            
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">โปรแกรมวิชา/สาขาวิชา</label>
                                        <input type="text" class="form-control" name="branch" required maxlength = "35">
                                    </div>
                                    
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course">หลักสูตร</label>
                                        <input type="text"  class="form-control" name="course" required  maxlength = "35">
                                    </div>
                                    
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="prefix">คำนำหน้า</label>
                                         <select class="form-control" name="prefix" <!--onclick="disablecheckbox()"-->> 
                                        <option >เลือก 
                                        <option value="นาย">นาย                 
                                        <option  value="นางสาว" >นางสาว
                                        <option  value="นาง" >นาง
                                        </select>
                                    </div>
                                </div>
                           
                                <script type="text/javascript">
                                    function disablecheckbox(){

                                        document.getElementById('Enlist1').disabled=true;
                                        document.getElementById('Enlist2').disabled=true;
                                        
                                        document.getElementById('priest1').disabled=true;
                                        document.getElementById('priest2').disabled=true;
                                        document.getElementById('priest3').disabled=true;
                                        document.getElementById('priest4').disabled=true;
                                        document.getElementById('priest5').disabled=true;
                                        document.getElementById('priest6').disabled=true;
                                    }
                                  
                                </script>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="first_name">ชื่อ</label>
                                        <input type="text"  class="form-control" name="first_name" required  size="35" maxlength = "35">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="sur_name">นามสกุล</label>
                                        <input type="text" class="form-control" name="sur_name" required  size="35" maxlength = "35">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="id_card">รหัสบัตรประชาชน</label>
                                        <input type="text" class="form-control" name="id_card" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="id_student">รหัสนักศึกษา</label>
                                        <input type="text" class="form-control" name="id_student" required  size="35" maxlength = "35">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sur_name">วัน/เดือน/ปีเกิด</label>
                                        <input type="date"class="form-control" name="datex" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="gpa">เกรดเฉลี่ยสะสม</label>
                                        <input type="text" class="form-control" name="gpa" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="name_address">ชื่อที่อยู่</label>
                                        <input type="text"  class="form-control" name="name_address" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="id_house">รหัสประจำบ้าน</label>
                                        <input type="text"  class="form-control" name="id_house" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="id_house">บ้านเลขที่</label>
                                        <input type="text"  class="form-control" name="house_number" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="village_number">หมู่</label>
                                        <input type="text"  class="form-control" name="village_number" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="alley">ตรอก/ซอย</label>
                                        <input type="text" class="form-control"  name="alley" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="road">ถนน</label>
                                        <input type="text" class="form-control"  name="road" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="sub_district">ตำบล</label>
                                        <input type="text" class="form-control"  name="sub_district" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="district">อำเภอ</label>
                                        <input type="text" class="form-control"  name="district" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="province">จังหวัด</label>
                                        <input type="text" class="form-control"  name="province" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="postal_code">รหัสไปรษณีย์</label>
                                        <input type="text" class="form-control"  name="postal_code" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="telephone_number">เบอร์โทรศัพท์</label>
                                        <input type="text" class="form-control"  name="telephone_number" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">อีเมล์</label>
                                        <input type="email" class="form-control"  name="email" required  size="35" maxlength = "35">
                                    </div>
                                </div>
                             
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">ที่อยู่ที่สามารถติดต่อได้</label>
                                        <textarea  class="form-control" name="address" rows="5" cols="35" style="resize:none"></textarea>
                                    </div>
                                </div>
                           

                              <div class = "row">  
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label >สถานะการเกณฑ์ทหารปัจจุบัน (เฉพาะเพศชาย)</label>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="Enlist1" name="Enlist" value="อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว">
                                        <label for="Enlist1" class="custom-control-label">1.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="Enlist2" name="Enlist" value="อยู่ในระหว่างการเป็นทหารเกณฑ์">
                                        <label for="Enlist2" class="custom-control-label">2.อยู่ในระหว่างการเป็นทหารเกณฑ์</label>
                                      </div>
                                      </div>
                                </div>
                              </div>
                            
                              <div class = "row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label>สถานะการเป็นนักบวชปัจจุบัน</label>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="priest1" name="priest" value="ไม่ได้เป็นนักบวช">
                                        <label for="priest1" class="custom-control-label">1.ไม่ได้เป็นนักบวช</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="priest2" name="priest" value="อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา น้อยกว่า 3 เดือน">
                                        <label for="priest2" class="custom-control-label">2.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา น้อยกว่า 3 เดือน</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="priest3" name="priest" value="อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา 4 เดือน - 1ปี">
                                        <label for="priest3" class="custom-control-label">3.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา 4 เดือน - 1ปี</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="priest4" name="priest" value="อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา มากกว่า 1 ปี">
                                        <label for="priest4" class="custom-control-label">4.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา มากกว่า 1 ปี</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="priest5" name="priest" value="อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา น้อยกว่า 3 เดือน">
                                        <label for="priest5" class="custom-control-label">5.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา น้อยกว่า 3 เดือน</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="priest6" name="priest" value="อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา ไม่มีกำหนด">
                                        <label for="priest6" class="custom-control-label">6.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา ไม่มีกำหนด</label>
                                      </div>
                                 
                                </div>
                              </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label>สถานะภาพการทำงานปัจจุบัน</label>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="work_present1" name="work_present" value="ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษา<">
                                        <label for="work_present1" class="custom-control-label">1.ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษา</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="work_present2" name="work_present" value="ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษาและกำลังศึกษาต่อ">
                                        <label for="work_present2" class="custom-control-label">2.ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษาและกำลังศึกษาต่อ</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="work_present3" name="work_present" value="ยังไม่มีงานทำ">
                                        <label for="work_present3" class="custom-control-label">3.ยังไม่มีงานทำ</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="work_present4" name="work_present" value="ยังไม่มีงานทำ และกำลังศึกษาต่อ">
                                        <label for="work_present4" class="custom-control-label">4.ยังไม่มีงานทำ และกำลังศึกษาต่อ</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="work_present5" name="work_present" value="มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจบการศึกษา">
                                        <label for="work_present5" class="custom-control-label">5.มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจบการศึกษา</label>
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="work_present6" name="work_present" value="มีงานทำก่อนการศึกษา เปลี่ยนสายงานหลังจบการศึกษา">
                                        <label for="work_present6" class="custom-control-label">6.มีงานทำก่อนการศึกษา เปลี่ยนสายงานหลังจบการศึกษา</label>
                                        
                                      </div>
                                      <div class="custom-control custom-radio">
                                        <input class="custom-control-input" type="radio" id="work_present7" name="work_present" value="มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจากจบการศึกษา เลื่อนระดับ">
                                        <label for="work_present7" class="custom-control-label">7.มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจากจบการศึกษา เลื่อนระดับ</label>
                                        
                                      </div>
                                      
                                    </div>
                                  </div>
                                </div>
                              
                    
                            
               
                            </div>    <!--  กหฟกฟ -->

                                   <button type="submit"name="question" class="btn btn-primary">ถัดไป</button>
                                
                        </div>
                    </div>
                 </form>   
            </div>      
        </div>
    </section>    








</div>
<!-- Main content -->











<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>Copyright &copy;saranyoo</strong>
All rights reserved.
<div class="float-right d-none d-sm-inline-block">
  <b>Version</b> 3.0.5
</div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
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

