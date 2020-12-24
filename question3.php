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
        <a href="แก้ไขรหัสผ่าน.html" class="nav-link">
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
                    <h5 ><b>ตอนที่ 3 การสมัครงานและการทํางาน (สําหรับผู้มีงานทําแล้ว)<b></h5>
             </div>
             <form action="checkquestion.php" id="checkquestion.php" method="POST">  
                <div class="card-body">
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>19.สาเหตุที่ยังไม่มีงานทำ</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="cause_not_work1" name="cause_not_work" value="ต้องการประกอบอาชีพอิสระ">
                                <label for="cause_not_work1" class="custom-control-label">1.ต้องการประกอบอาชีพอิสระ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="cause_not_work2" name="cause_not_work" value="หางานทำไม่ได้">
                                <label for="cause_not_work2" class="custom-control-label">2.หางานทำไม่ได้</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="cause_not_work3" name="cause_not_work" value="รอฟังคำตอบจากหน่วยงาน">
                                <label for="cause_not_work3" class="custom-control-label">3.รอฟังคำตอบจากหน่วยงาน</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="cause_not_work4" name="cause_not_work" value="ยังไม่ประสงค์ทำงาน">
                                <label for="cause_not_work4" class="custom-control-label">4.ยังไม่ประสงค์ทำงาน</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="cause_not_work5" name="cause_not_work" value="อื่นๆให้(ระบุ)" onclick="createinput()">
                                <label for="cause_not_work5" class="custom-control-label">5.อื่นๆให้(ระบุ)</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
        <script type="text/javascript">
            function disablecheckbox(){
                document.getElementById('gpa_is_not_due').disabled=true;
                document.getElementById('lack_of_experience').disabled=true;
                document.getElementById('lack_of_computer_skill').disabled=true;
                document.getElementById('lack_of_foreign_language_skill').disabled=true;
                document.getElementById('health_problem').disabled=true;
                document.getElementById('the_entrance_exam_connot_work').disabled=true;
                document.getElementById('low_salary').disabled=true;
                document.getElementById('agency_does_not_want').disabled=true;
                document.getElementById('lack_of_people_or_money').disabled=true;
                document.getElementById('lack_of_support').disabled=true;
                document.getElementById('have_to_exam').disabled=true;
                document.getElementById('i_cant_fine_myjob').disabled=true;
                document.getElementById('source_of_work_unknow').disabled=true;
                document.getElementById('other').disabled=true;
            }
            function disablecheckbox1(){
                document.getElementById('not_cause').disabled=true;
            }
        </script>
                   <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>20.ท่านมีปัญหาในการหางานทำหลังจากสำเร็จการศึกษาหรือไม่</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="not_cause" name="not_cause" value="ไม่มีปัญหา" onfocus="disablecheckbox();">
                                <label for="not_cause" class="custom-control-label">1.ไม่มีปัญหา</label>
                            </div>
                           
                        </div> ถ้ามีปัญหาโปรดระบุปัญหาที่สำคัญที่สุดดังต่อไปนี้โดยสามารถเลือกคำตอบได้หลายข้อ
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">         
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="gpa_is_not_due" name="gpa_is_not_due" value="เกรดเฉลี่ยไม่ถึงเกณฑ์ที่กำหนด" onfocus="disablecheckbox1();">
                                <label for="gpa_is_not_due" class="custom-control-label">1.เกรดเฉลี่ยไม่ถึงเกณฑ์ที่กำหนด</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="lack_of_experience" name="lack_of_experience" value="ขาดประกอบการในการทำงาน" onfocus="disablecheckbox1();">
                                <label for="lack_of_experience" class="custom-control-label">2.ขาดประกอบการในการทำงาน</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="lack_of_computer_skill" name="lack_of_computer_skill" value="ขาดทักษะด้านคอมพิวเตอร์" onfocus="disablecheckbox1();">
                                <label for="lack_of_computer_skill" class="custom-control-label">3.ขาดทักษะด้านคอมพิวเตอร์</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="lack_of_foreign_language_skill" name="lack_of_foreign_language_skill" value="4.ขาดทักษะภาษาต่างประเทศ" onfocus="disablecheckbox1();">
                                <label for="lack_of_foreign_language_skill" class="custom-control-label">4.ขาดทักษะภาษาต่างประเทศ</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="health_problem" name="health_problem" value="ปัญหาด้านสุขภาพ" onfocus="disablecheckbox1();">
                                <label for="health_problem" class="custom-control-label">5.ปัญหาด้านสุขภาพ</label onfocus="disablecheckbox1();">
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="the_entrance_exam_connot_work" name="the_entrance_exam_connot_work" value="สอบเข้าทำงานไม่ได้" onfocus="disablecheckbox1();">
                                <label for="the_entrance_exam_connot_work" class="custom-control-label">6.สอบเข้าทำงานไม่ได้</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="low_salary" name="low_salary" value="เงินเดือนน้อย" onfocus="disablecheckbox1();">
                                <label for="low_salary" class="custom-control-label">7.เงินเดือนน้อย</label>
                            </div>
                         </div>
                       </div>     

                    <div class="col-sm-6">
                        <div class="form-group">

                            
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="agency_does_not_want" name="agency_does_not_want" value="หน่วยงานไม่ต้องการ" onfocus="disablecheckbox1();">
                                <label for="agency_does_not_want" class="custom-control-label">8.หน่วยงานไม่ต้องการ</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="lack_of_people_or_money" name="lack_of_people_or_money" value="ขาดคนหรือเงินค้ำประกัน" onfocus="disablecheckbox1();">
                                <label for="lack_of_people_or_money" class="custom-control-label">9.ขาดคนหรือเงินค้ำประกัน</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="lack_of_support" name="lack_of_support" value="ขาดคนสนับสนุน" onfocus="disablecheckbox1();">
                                <label for="lack_of_support" class="custom-control-label">10.ขาดคนสนับสนุน</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="have_to_exam" name="have_to_exam" value="ต้องสอบจึงไม่อยากสมัคร" onfocus="disablecheckbox1();">
                                <label for="have_to_exam" class="custom-control-label">11.ต้องสอบจึงไม่อยากสมัคร</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="i_cant_fine_myjob" name="i_cant_fine_myjob" value="หางานที่ถูกใจไม่ได้" onfocus="disablecheckbox1();">
                                <label for="i_cant_fine_myjob" class="custom-control-label">12.หางานที่ถูกใจไม่ได้</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="source_of_work_unknow" name="source_of_work_unknow" value="ไม่ทราบแหล่งงาน" onfocus="disablecheckbox1();">
                                <label for="source_of_work_unknow" class="custom-control-label">13.ไม่ทราบแหล่งงาน</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="other" name="other" value="อื่นๆให้ระบุ" onfocus="disablecheckbox1();">
                                <label for="other" class="custom-control-label">14.อื่นๆให้ระบุ</label>
                            </div>
                            
                        </div>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-sm-12">
                                <div class="form-group">
                                <label>21.ความต้องการทำงาน</label>      
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="work_requirement1" name="work_requirement" value="ทำงานต่างประเทศ">
                                    <label for="work_requirement1" class="custom-control-label">1.ทำงานต่างประเทศ</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="work_requirement2" name="work_requirement" value="ทำงานในประเทศ">
                                    <label for="work_requirement2" class="custom-control-label">2.ทำงานในประเทศ</label>
                                </div>
                             </div>
                        </div>
                    </div>

                    <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="country_want_work">22.ประเทศที่ต้องการทำงาน</label>
                            <input type="text" class="form-control"  name="country_want_work" required >
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="position_want_work">23.ตำแหน่งที่ต้องการทำงาน</label>
                            <input type="text" class="form-control"  name="position_want_work" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="need_develop_skill">24.ความต้องการพัฒนาทักษะ หลักสูตร</label>
                            <input type="text" class="form-control"  name="need_develop_skill" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                                <label>25.ความต้องการทำงาน</label>      
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="agree1" name="agree" value="ไม่ยินยอมเปิดเผยข้อมูล">
                                    <label for="agree1" class="custom-control-label">0.ไม่ยินยอมเปิดเผยข้อมูล</label>
                                </div>
                                    หากยินยอมเปิดเผยข้อมูลโปรดระบุ 1 ข้อ
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="agree2" name="agree" value="ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน และประเภทขายประกัน/ขายตรง">
                                    <label for="agree2" class="custom-control-label">1.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน และประเภทขายประกัน/ขายตรง</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="agree3" name="agree" value="ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทขายประกัน/ขายตรง">
                                    <label for="agree3" class="custom-control-label">2.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทขายประกัน/ขายตรง</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="agree4" name="agree" value="ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน">
                                    <label for="agree4" class="custom-control-label">3.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="agree5" name="agree" value="ยินยอมเปิดเผยข้อมูลต่อนายจ้างทุกประเภท">
                                    <label for="agree5" class="custom-control-label">4.ยินยอมเปิดเผยข้อมูลต่อนายจ้างทุกประเภท</label>
                                </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function disablecheckbox(){

                    document.getElementById('Enlist1').disabled=true;
                    document.getElementById('Enlist2').disabled=true;   
                    document.getElementById('priest1').disabled=true;
                    document.getElementById('priest2').disabled=true;
                                       
                                        
                    }
                                  
                </script>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                                <label>26.การศึกษาต่อ</label>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="continuing_education1" name="continuing_education" value="ต้องการศึกษาต่อ">
                                    <label for="continuing_education1" class="custom-control-label">1.ต้องการศึกษาต่อ</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="continuing_education2" name="continuing_education" value="ไม่ต้องการศึกษาต่อ">
                                    <label for="continuing_education2" class="custom-control-label">2.ไม่ต้องการศึกษาต่อ</label>
                                </div>
                        </div>
                    </div>
                </div>


                <button type="submit"name="questions_3" class="btn btn-primary">ถัดไป</button>
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

