
<?php
include("condb.php");
session_start();  
$sql1="SELECT * FROM comment";
$result1 = mysqli_query($conn,$sql1);


$num=0;



while($row = mysqli_fetch_array($result1)){
  array_push($_SESSION['name_question'],$row['question']);
  $num++;

}

echo $_SESSION['name_question'][1];



?>