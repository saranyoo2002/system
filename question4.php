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
                    <h5 ><b>ตอนที่ 4 การศึกษาต่อ<b></h5>
             </div>
             <form action="checkquestion.php" id="checkquestion.php" method="POST">  
                <div class="card-body">
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>27.ระดับการศึกษาที่ท่านต้องการศึกษาต่อ / กำลังศึกษา</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level1" name="level" value="ประกาศนีย์บัตรวิชาชีพขั้นสูง">
                                <label for="level1" class="custom-control-label">1.ประกาศนีย์บัตรวิชาชีพขั้นสูง</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level2" name="level" value="อนุปริญญา">
                                <label for="level2" class="custom-control-label">2.อนุปริญญา</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level3" name="level" value="ปริญญาตรี">
                                <label for="level3" class="custom-control-label">3.ปริญญาตรี</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level4" name="level" value="ประกาศนีย์บัตรบัณฑิต">
                                <label for="level4" class="custom-control-label">4.ประกาศนีย์บัตรบัณฑิต</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level5" name="level" value="ปริญญาโท">
                                <label for="level5" class="custom-control-label">5.ปริญญาโท</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level6" name="level" value="ประกาศนีย์บัตรบัณฑิตขั้นสูง">
                                <label for="level6" class="custom-control-label">6.ประกาศนีย์บัตรบัณฑิตขั้นสูง</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level7" name="level" value="ปริญญาเอก">
                                <label for="level7" class="custom-control-label">7.ปริญญาเอก</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="level8" name="level" value="ประกาศนีย์บัตรหรือหลักสูตรเฉพาะ(ที่บรรจุในอัตราเงินเดือนสูงกว่าปริญญาเอก)">
                                <label for="level8" class="custom-control-label">8.ประกาศนีย์บัตรหรือหลักสูตรเฉพาะ(ที่บรรจุในอัตราเงินเดือนสูงกว่าปริญญาเอก)</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <label>สถานศึกษาที่ท่านต้องการศึกษาต่อ/กำลังศึกษา</label>
                <div class = "row">
                    <div class="col-sm-12">
                       
                        <div class="form-group"> 
                            <label for="house_number_con">ที่ตั้งเลขที่</label>
                            <input type="text" class="form-control"  name="house_number_con" required >
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="village_number_con">หมู่ที่</label>
                            <input type="text" class="form-control"  name="village_number_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="building_con">อาคาร/ตึก</label>
                            <input type="text" class="form-control"  name="building_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="alley_con">ตรอก/ซอย</label>
                            <input type="text" class="form-control"  name="alley_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="road_con">ถนน</label>
                            <input type="text" class="form-control"  name="road_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="sub_district_con">ตำบล</label>
                            <input type="text" class="form-control"  name="sub_district_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="district_con">อำเภอ/เขต</label>
                            <input type="text" class="form-control"  name="district_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="province_con">จังหวัด</label>
                            <input type="text" class="form-control"  name="province_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="country_con">ประเทศ</label>
                            <input type="text" class="form-control"  name="country_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="postal_code_con">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control"  name="postal_code_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="telephone_number_con">โทรศัพท์</label>
                            <input type="text" class="form-control"  name="telephone_number_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="fax_con">โทรสาร</label>
                            <input type="text" class="form-control"  name="fax_con" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email_con">อีเมล์</label>
                            <input type="text" class="form-control"  name="email_con" required>
                        </div>
                    </div>




                </div>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                                <label>29.สาขาวิชาที่ท่านต้องการศึกษาต่อ/กำลังศึกษาต่อ</label>      
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="branch_con1" name="branch_con" value="สาขาวิชาเดิม">
                                    <label for="branch_con1" class="custom-control-label">1.สาขาวิชาเดิม</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="branch_con2" name="branch_con" value="สาขาวิชาใหม่">
                                    <label for="branch_con2" class="custom-control-label">2.สาขาวิชาใหม่</label>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                                <label>30.ประเภทของสถานบันการศึกษา/มหาวิทยาลัยที่ท่านต้องการศึกษา/กำลังศึกษา</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="type_con1" name="type_con" value="รัฐบาล">
                                    <label for="type_con1" class="custom-control-label">1.รัฐบาล</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="type_con2" name="type_con" value="เอกชน">
                                    <label for="type_con2" class="custom-control-label">2.เอกชน</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="type_con3" name="type_con" value="ต่างประเทศ">
                                    <label for="type_con3" class="custom-control-label">3.ต่างประเทศ</label>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                                <label>31.เหตุผลที่ทำให้ท่านตัดสินใจต่อ</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="reason_con1" name="reason_con" value="เป็นความต้องการของตนเอง">
                                    <label for="reason_con1" class="custom-control-label">1.เป็นความต้องการของตนเอง</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="reason_con2" name="reason_con" value="ได้รับทุนศึกษาต่อ">
                                    <label for="reason_con2" class="custom-control-label">2.ได้รับทุนศึกษาต่อ</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="reason_con3" name="reason_con" value="งานที่ต้องการต้องใช้วุฒิสูงกว่า ปริญญาตรี">
                                    <label for="reason_con3" class="custom-control-label">3.งานที่ต้องการต้องใช้วุฒิสูงกว่า ปริญญาตรี</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="reason_con4" name="reason_con" value="เป็นความต้องการของบิดา/มารดา หรือผู้ปกครอง">
                                    <label for="reason_con4" class="custom-control-label">4.เป็นความต้องการของบิดา/มารดา หรือผู้ปกครอง</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="reason_con5" name="reason_con" value="อื่นๆให้ระบุ">
                                    <label for="reason_con5" class="custom-control-label">5.อื่นๆให้ระบุ</label>
                                </div>
                        </div>
                    </div>
                </div>
            <script type="text/javascript">
            function disablecheckbox(){
                document.getElementById('cause_con11').disabled=true;
                document.getElementById('cause_con12').disabled=true;
                document.getElementById('cause_con13').disabled=true;
                document.getElementById('cause_con14').disabled=true;
                document.getElementById('cause_con15').disabled=true;
            }
            function disablecheckbox1(){
                document.getElementById('not_cause_con').disabled=true;
            }
        </script>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                                <label>32.ท่านมีปัญหาในการศึกษาต่อหรือไม่</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="not_cause_con" name="not_cause_con" value="ไม่มีปัญหา"onfocus="disablecheckbox();">
                                    <label for="not_cause_con" class="custom-control-label">1.ไม่มีปัญหา</label>
                                </div>
                                 ถ้ามีปัญหาโปรดระบุปัญหาที่สำคัญที่สุดดังต่อไปนี้โดยสามารถเลือกคำตอบได้หลายข้อ
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="cause_con11" name="cause_con1" value="ขาดแคลนเงินทุน"onfocus="disablecheckbox1();">
                                    <label for="cause_con11" class="custom-control-label">1.ขาดแคลนเงินทุน</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="cause_con12" name="cause_con1" value="ขาดความรู้พื้นฐานในการศึกษาต่อ"onfocus="disablecheckbox1();">
                                    <label for="cause_con12" class="custom-control-label">2.ขาดความรู้พื้นฐานในการศึกษาต่อ</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="cause_con13" name="cause_con1" value="คุณสมบัติในการสมัครเรียน"onfocus="disablecheckbox1();">
                                    <label for="cause_con13" class="custom-control-label">3.คุณสมบัติในการสมัครเรียน</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="cause_con14" name="cause_con1" value="ข้อมูลสถานที่ศึกษาต่อไม่เพียงพอ"onfocus="disablecheckbox1();">
                                    <label for="cause_con14" class="custom-control-label">4.ข้อมูลสถานที่ศึกษาต่อไม่เพียงพอ</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="cause_con15" name="cause_con1" value="อื่นๆให้ระบุ"onfocus="disablecheckbox1();">
                                    <label for="cause_con15" class="custom-control-label">5.อื่นๆให้ระบุ</label>
                                </div>
                        </div>
                    </div>
                </div>


                <input type="submit"name="questions_4" class="btn btn-primary" value="ถัดไป"></input>
                </div>
               </div>
            </form>
           </div>
        </div>
    </section>




    


</div>




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

