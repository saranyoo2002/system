<?php 
session_start();  
include("condb.php");

        if(isset($_POST['login'])){
         $username = mysqli_real_escape_string($conn, $_POST['username']);
         $password = mysqli_real_escape_string($conn, $_POST['password']);

    
                  $sql="SELECT * FROM login  WHERE  username='".$username."' AND  password='".$password."' ";

              

                  $result = mysqli_query($conn,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                       $_SESSION["id_login"] = $row["id_login"];
                       $_SESSION["username"] = $row["username"];
                       $_SESSION["level"] = $row["level"];
                 
                      if($_SESSION["level"]=="admin"){ 

                        Header("Location:admin.php");
                      }
                      if ($_SESSION["level"]=="student"){ 

                        Header("Location:student.php");
                      }
                      if ($_SESSION["level"]=="company"){ 

                        Header("Location: organization.php");
                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: index.php"); 
 
        }

        
?>