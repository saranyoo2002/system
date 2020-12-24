<?php 
	session_start();
	include('condb.php');
?>
<head>
      <meta charset="UTF-8">
      <title>สมัครสมาชิก</title>
      <link rel="stylesheet" href="st.css">
</head>


    <div class ="blurred-box">
        <div class = "user-login-box">
        <div class = "user-name">สมัครสมาชิก</div>


        <form action="register_db.php" method="post">
    
                <label for="username">Username</label> 
                <input type="text" name="username"  require>
       
           
                <label for="password_1">Password</label>
                <input type="password" name="password_1" require>
           

           
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2" require>
            
          
        
            <button type="submit" name="reg_user">Register</button>
       
 
        <p><a href="index.php"><font color ="white">เข้าสู่ระบบ</font></a></p>

</div>
    </form>