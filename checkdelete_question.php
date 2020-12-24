
<meta charset="UTF-8">
<?php

include('condb.php');  

$type_id = $_REQUEST["delete_id"];



$sql = "DELETE FROM  topic WHERE id_topic='$type_id' ";
$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

  
if($result){
    echo "<script type='text/javascript'>";
    echo "alert('ลบข้อมูลสำเร็จ');";
    echo "refresh:1;window.location = 'admin_addquestion.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('ลบข้อมูลไม่สำเร็จ');";
    echo "</script>";
    }

?>

