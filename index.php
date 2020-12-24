<?php 
	session_start();
	include('condb.php');
?>
<head>
      <meta charset="UTF-8">
      <title>เข้าสู่ระบบ</title>
      <link rel="stylesheet" href="st.css">
</head>

<body >
 
      <div class ="blurred-box">
            <div class = "user-login-box">
            <span class ="user-icon"></span>
            <div class = "user-name">เข้าสู่ระบบ</div>

      
            <form  name="formlogin" action="checklogin.php" method="POST" id="login" >
            <input type="text"  class ="user-username"    placeholder = "username" name="username"  required  /><br>
            <input type="password" class ="user-password" placeholder = "password" name="password"  required  /><br>
            <button type="submit" name="login">Login </button><br>
            <a href="register.php"> <font color ="black">สมัครสมาชิก</font></a>

      </div>
            </form>


            
	
</body>