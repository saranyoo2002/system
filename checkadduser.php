<?php

    session_start();
    include('condb.php');

    

    if(isset($_POST['add_user'])){

        $username = mysqli_real_escape_string($conn, $_POST['username']); 
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $level = mysqli_real_escape_string($conn, $_POST['level']);

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
        }else{
                $sql ="INSERT INTO login(username,password,level) 
                VALUES ('$username','$password','$level')";
                mysqli_query($conn, $sql);
                echo "<script>";
                echo "alert(\"เพิ่มสมาชิกสำเร็จ\");"; 
                echo "window.history.back()";
                echo "</script>";
             }

    }


?>

