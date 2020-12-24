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
                    <h5 ><b>ตอนที่ 2 การสมัครงานและการทํางาน (สําหรับผู้มีงานทําแล้ว)<b></h5>
             </div>
             <form action="checkquestion.php" id="checkquestion.php" method="POST">  
                <div class="card-body">
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>8.ประเภทงานที่ทำ</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_work1" name="type_work_have" value="ข้าราชการ/เจ้าหน้าที่หน่วยงานของรัฐ">
                                <label for="type_work1" class="custom-control-label">1.ข้าราชการ/เจ้าหน้าที่หน่วยงานของรัฐ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_work2" name="type_work_have" value="ดำเนินธุรกิจอิสระ/เจ้าของกิจการ">
                                <label for="type_work2" class="custom-control-label">2.ดำเนินธุรกิจอิสระ/เจ้าของกิจการ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_work3" name="type_work_have" value="พนักงานบริษัท/องค์กรธุรกิจเอกชน">
                                <label for="type_work3" class="custom-control-label">3.พนักงานบริษัท/องค์กรธุรกิจเอกชน</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_work4" name="type_work_have" value="พนักงานองค์การต่างประเทศ/ระหว่างประเทศ">
                                <label for="type_work4" class="custom-control-label">4.พนักงานองค์การต่างประเทศ/ระหว่างประเทศ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_work5" name="type_work_have" value="รัฐวิสาหกิจ">
                                <label for="type_work5" class="custom-control-label">5.รัฐวิสาหกิจ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="type_work6" name="type_work_have" value="อื่นๆ(ระบุ)">
                                <label for="type_work6" class="custom-control-label">6.อื่นๆ(ระบุ)</label>
                            </div>
                                 
                        </div>
                    </div>

                </div>
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>9.งานที่ทำอยู่ตามข้อ 7 เป็น</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="work_done1" name="work_done_have" value="งานเดิม(งานที่ทำก่อนเข้าเรียนหรือระหว่างเรียน)">
                                <label for="work_done1" class="custom-control-label">1.งานเดิม(งานที่ทำก่อนเข้าเรียนหรือระหว่างเรียน)</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="work_done2" name="work_done_have" value="ดำเนินธุรกิจอิสระ/เจ้าของกิจการ">
                                <label for="work_done2" class="custom-control-label">2.ดำเนินธุรกิจอิสระ/เจ้าของกิจการ</label>
                            </div>
                             สาเหตุที่ได้งานทำ ระบุสาเหตุที่สำคัญ 1 ข้อต่อไปนี้
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="work_done3" name="work_done_cause_have" value="ประชาสัมพันธ์ของมหาวิทยาลัย">
                                <label for="work_done3" class="custom-control-label">1.ประชาสัมพันธ์ของมหาวิทยาลัย</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="work_done4" name="work_done_cause_have" value="มีผู้แนะนําให้">
                                <label for="work_done4" class="custom-control-label">2.มีผู้แนะนําให้</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="work_done5" name="work_done_cause_have" value="สหกิจศึกษา">
                                <label for="work_done5" class="custom-control-label">3.สหกิจศึกษา</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="work_done6" name="work_done_cause_have" value="อื่นๆ">
                                <label for="work_done6" class="custom-control-label">4.อื่นๆ(ระบุ)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>10.ท่านคิดว่า ความรู้ความสามารถพิเศษด้านใด ที่ช่วยให้ท่านได้ทำงาน</label>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="charisma1" name="charisma_have" value="การใช้คอมพิวเตอร์">
                                <label for="charisma1" class="custom-control-label">1.การใช้คอมพิวเตอร์</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="charisma2" name="charisma_have" value="กิจกรรมสันทนาการ">
                                <label for="charisma2" class="custom-control-label">2.กิจกรรมสันทนาการ</label>
                            </div>  
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="charisma3" name="charisma_have" value="กีฬา">
                                <label for="charisma3" class="custom-control-label">3.กีฬา</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="charisma4" name="charisma_have" value="นาฎศิลป์">
                                <label for="charisma4" class="custom-control-label">4.นาฎศิลป์</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="charisma5" name="charisma_have" value="ภาษาต่างประเทศ">
                                <label for="charisma5" class="custom-control-label">5.ภาษาต่างประเทศ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="charisma6" name="charisma_have" value="ศิลปะ">
                                <label for="charisma6" class="custom-control-label">6.ศิลปะ</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="charisma7" name="charisma_have" value="ศิลปะ">
                                <label for="charisma7" class="custom-control-label">7.อื่นๆ(ระบุ)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name_work_position">ชื่อตำแหน่งที่ทำงาน</label>
                            <input type="text" class="form-control"  name="name_work_position_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name_organization">สถ่านที่ทำงานปัจจุบัน</label>
                            <input type="text" class="form-control"  name="name_organization_have" required>
                        </div>
                    </div>
                </div>   

                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="type_of_business">ประเภทกิจการ</label>
                            <input type="text" class="form-control"  name="type_of_business_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="country">ประเทศ</label>
                            <input type="text" class="form-control"  name="country_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="network_country">เครือข่ายประเทศ</label>
                            <input type="text" class="form-control"  name="network_country_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="building">อาคาร/ตึก</label>
                            <input type="text" class="form-control"  name="building_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="location_number">ที่ตั้งเลขที่</label>
                            <input type="text" class="form-control"  name="location_number_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="village_number">หมู่ที่</label>
                            <input type="text" class="form-control"  name="village_number_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="alley">ตรอก/ซอย</label>
                            <input type="text" class="form-control"  name="alley_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="road">ถนน</label>
                            <input type="text" class="form-control"  name="road_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="sub_district">ตำบล</label>
                            <input type="text" class="form-control"  name="sub_district_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="sub_district">อำเภอ</label>
                            <input type="text" class="form-control"  name="district_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="province">จังหวัด</label>
                            <input type="text" class="form-control"  name="province_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="postal_code">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control"  name="postal_code_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="telephone_number">โทรศัพท์</label>
                            <input type="text" class="form-control"  name="telephone_number_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="fax">โทรสาร</label>
                            <input type="text" class="form-control"  name="fax_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">อีเมล์</label>
                            <input type="text" class="form-control"  name="email_have" required >
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="line_manager">ไลน์ผู้จัดการ</label>
                            <input type="text" class="form-control"  name="line_manager_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="telephone_manager">เบอร์ผู้จัดการ</label>
                            <input type="text" class="form-control"  name="telephone_manager_have" required >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="email_manager">อีเมล์ผู้จัดการ</label>
                            <input type="text" class="form-control"  name="email_manager_have" required>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="salaly">เงินเดือน</label>
                            <input type="text" class="form-control"  name="salaly_have" required>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label >ความพึงพอใจต่องานที่ทำ</label>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="satisfaction1" name="satisfaction_have" value="พอใจ" onfocus="disablecheckbox();">
                            <label for="satisfaction1" class="custom-control-label">1.พอใจ</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="satisfaction2" name="satisfaction_have" value="ไม่พอใจ"onfocus="disablecheckbox2();">
                            <label for="satisfaction2" class="custom-control-label">2.ไม่พอใจ</label>
                            </div>
                            ถ้าไม่พอใจ
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cause_satisfaction1" name="cause_satisfaction_have" value="ขาดความก้าวหน้า"onfocus="disablecheckbox1();">
                            <label for="cause_satisfaction1" class="custom-control-label">1.ขาดความก้าวหน้า</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cause_satisfaction2" name="cause_satisfaction_have" value="ขาดความมั่นคง"onfocus="disablecheckbox1();">
                            <label for="cause_satisfaction2" class="custom-control-label">2.ขาดความมั่นคง</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cause_satisfaction3" name="cause_satisfaction_have" value="ค่าตอบแทนต่ำ"onfocus="disablecheckbox1();">
                            <label for="cause_satisfaction3" class="custom-control-label">3.ค่าตอบแทนต่ำ</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cause_satisfaction4" name="cause_satisfaction_have" value="ไม่ได้ใช้ความรู้ที่เรียนมา"onfocus="disablecheckbox1();">
                            <label for="cause_satisfaction4" class="custom-control-label">4.ไม่ได้ใช้ความรู้ที่เรียนมา</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cause_satisfaction5" name="cause_satisfaction_have" value="ผู้ร่วมงานไม่ดี"onfocus="disablecheckbox1();">
                            <label for="cause_satisfaction5" class="custom-control-label">5.ผู้ร่วมงานไม่ดี</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cause_satisfaction6" name="cause_satisfaction_have" value="ระบบงานไม่ดี"onfocus="disablecheckbox1();">
                            <label for="cause_satisfaction6" class="custom-control-label">6.ระบบงานไม่ดี</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="cause_satisfaction7" name="cause_satisfaction_have" value="อื่นๆ"onfocus="disablecheckbox1();">
                            <label for="cause_satisfaction7" class="custom-control-label">7.อื่นๆให้ระบุ</label>
                            </div>
                         </div>
                    </div>
                </div>




            <script type="text/javascript">
                function disablecheckbox(){
                    document.getElementById('cause_satisfaction1').disabled=true;
                    document.getElementById('cause_satisfaction2').disabled=true;
                    document.getElementById('cause_satisfaction3').disabled=true;
                    document.getElementById('cause_satisfaction4').disabled=true;
                    document.getElementById('cause_satisfaction5').disabled=true;
                    document.getElementById('cause_satisfaction6').disabled=true;
                    document.getElementById('cause_satisfaction7').disabled=true;
        
                }
                function disablecheckbox1(){
                    document.getElementById('satisfaction1').disabled=true;
                }
                function disablecheckbox2(){
                  //  document.getElementById('satisfaction1').disabled=true;
                    document.getElementById('cause_satisfaction1').disabled=false;
                    document.getElementById('cause_satisfaction2').disabled=false;
                    document.getElementById('cause_satisfaction3').disabled=false;
                    document.getElementById('cause_satisfaction4').disabled=false;
                    document.getElementById('cause_satisfaction5').disabled=false;
                    document.getElementById('cause_satisfaction6').disabled=false;
                    document.getElementById('cause_satisfaction7').disabled=false;
        


                }

            </script>

                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label >หลังจากสำเร็จการศึกษาแล้ว ท่านได้งานทำในระยะเวลาเท่าไหร่</label>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="working_period1" name="working_period_have" value="เป็นงานเดิมก่อนมาศึกษาหรือได้งานทำระหว่างศึกษา">
                            <label for="working_period1" class="custom-control-label">1. เป็นงานเดิมก่อนมาศึกษาหรือได้งานทำระหว่างศึกษา</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="working_period2" name="working_period_have" value="มากกว่า 1 ปี">
                            <label for="working_period2" class="custom-control-label">2. มากกว่า 1 ปี</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="working_period3" name="working_period_have" value="10 - 12 เดือน">
                            <label for="working_period3" class="custom-control-label">3. 10 - 12 เดือน</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="working_period4" name="working_period_have" value="7 - 9 เดือน">
                            <label for="working_period4" class="custom-control-label">4. 7 - 9 เดือน</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="working_period5" name="working_period_have" value="3 - 6 เดือน">
                            <label for="working_period5" class="custom-control-label">5. 3 - 6 เดือน</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="working_period6" name="working_period_have" value="1 - 2 เดือน">
                            <label for="working_period6" class="custom-control-label">6. 1 - 2 เดือน</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="working_period7" name="working_period_have" value="หางานได้ก่อนจบการศึกษา หรือได้งานทันที่หลังจากสำเร็จการศึกษา">
                            <label for="working_period7" class="custom-control-label">7. หางานได้ก่อนจบการศึกษา หรือได้งานทันที่หลังจากสำเร็จการศึกษา</label>
                            </div>
                         </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label >หลังจากสำเร็จการศึกษาแล้ว ท่านได้งานทำในระยะเวลาเท่าไหร่</label>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="job_description1" name="job_description_have" value="ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ">
                            <label for="job_description1" class="custom-control-label">1.ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="job_description2" name="job_description_have" value="ไม่ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ">
                            <label for="job_description2" class="custom-control-label">2.ไม่ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ</label>
                            </div>
                         </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label >หลังจากสำเร็จการศึกษาแล้ว ท่านได้งานทำในระยะเวลาเท่าไหร่</label>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="apply_knowledge1" name="apply_knowledge_have" value="มากที่สุด (100 %)">
                            <label for="apply_knowledge1" class="custom-control-label">1.มากที่สุด (100 %)</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="apply_knowledge2" name="apply_knowledge_have" value="มาก (75 - 90 %)">
                            <label for="apply_knowledge2" class="custom-control-label">2.มาก (75 - 90 %)</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="apply_knowledge3" name="apply_knowledge_have" value="ปานกลาง (50 - 74 %)">
                            <label for="apply_knowledge3" class="custom-control-label">3.ปานกลาง (50 - 74 %)</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="apply_knowledge4" name="apply_knowledge_have" value="น้อย (25 - 49 %)">
                            <label for="apply_knowledge4" class="custom-control-label">4.น้อย (25 - 49 %)</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="apply_knowledge5" name="apply_knowledge_have" value="น้อยที่สุด (0 - 24 %)">
                            <label for="apply_knowledge5" class="custom-control-label">5.น้อยที่สุด (0 - 24 %)</label>
                            </div>                
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label >การศึกษาต่อ</label>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="continueing_education1" name="continueing_education_have" value="ต้องการศึกษาต่อ">
                            <label for="continueing_education1" class="custom-control-label">1.ต้องการศึกษาต่อ</label>
                            </div>
                            <div class="custom-control custom-radio">
                            <input class="custom-control-input" type="radio" id="continueing_education2" name="continueing_education_have" value="ไม่ต้องการศึกษาต่อ">
                            <label for="continueing_education2" class="custom-control-label">2.ไม่ต้องการศึกษาต่อ</label>
                            
                        </div>
                    </div>
                </div>

                <button type="submit"name="questions" class="btn btn-primary">ถัดไป</button>
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

