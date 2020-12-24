<?php 
	session_start();
    include('condb.php');
    
     if(isset($_POST['reg_user'])){

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        $user_check_query = "SELECT * FROM login WHERE username = '$username' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);
        if ($result) { 
            if ($result['username'] == $username) {
                echo "<script>";
                echo "alert(\" Usernameนี้มีผู้ใช้แล้ว\");"; 
                echo "window.history.back()";
                echo "</script>";
            }       
        }
        if($password_1==$password_2){
           $password = $password_1;
           $level= "student";
           $sql ="INSERT INTO login(username,password,level) 
           VALUES ('$username','$password','$level')";
           mysqli_query($conn, $sql);

           echo "<script>";
           echo "alert(\"สมัครสมาชิกสำเร็จ\");"; 
           echo "window.history.back()";
           echo "</script>";

        }else{
            echo "<script>";
            echo "alert(\"รหัสผ่านไม่่ตรงกัน\");"; 
            echo "window.history.back()";
            echo "</script>";
        }
    }else{
        header("location: index.php"); 
                  }



    

















    















?>



