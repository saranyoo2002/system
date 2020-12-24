<?php 
    session_start();
    include('condb.php');

		$username = $_SESSION["username"];
        $password_1 = mysqli_real_escape_string($conn, $_POST['password']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['conpassword']);


	
		if($password_1!=$password_2){

			echo "<script type='text/javascript'>";
			echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
			echo "window.location = 'admin.php'; ";
			echo "</script>";

		}else{

			$sql = "UPDATE login SET 
			password ='$password_1'
			WHERE username='$username'
			";
			$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
			}
			mysqli_close($conn);
			if($result){
			echo "<script type='text/javascript'>";
			echo "alert('แก้ไข password สำเร็จ');";
			echo "window.location = 'admin.php'; ";
			echo "</script>";
			}else{
			echo "<script type='text/javascript'>";
			echo "window.location = 'admin.php'; ";
			echo "</script>";

			
		}
	
		


?>
