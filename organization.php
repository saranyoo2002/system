<?php session_start();  
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='company'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
  <title>สถานประกอบการ</title>
  <link rel="stylesheet" href="st.css">
</head>
<body bgcolor="pink">
    <h3> ผู้ใช้ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
    
    <a href="../system/regis.html">กรอกแบบสอบถามแบบสอบถาม </a><br>






	<form action="logout.php">
	<input type="submit" value="ออกจากระบบ">
    </form>
    <br><br><br><br>
    
 




</body>
</html>