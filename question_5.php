<?php
   include("condb.php");
   session_start();  

         $count=0;
         $num=0;

         $sql="SELECT * FROM topic";
         $result = mysqli_query($conn,$sql);
         $sql1="SELECT * FROM comment";
         $result1 = mysqli_query($conn,$sql1);
         $_SESSION['name_topic']=array();

         while($record = mysqli_fetch_array($result)){
            array_push($_SESSION['name_topic'],$record['name_topic']);
            $count++;
         }

         $_SESSION['name_question']=array();
         while($row = mysqli_fetch_array($result1)){
           array_push($_SESSION['name_question'],$row['question']);
           $num++;
         }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <title>RMUTI Questionnair</title>
   <link rel="stylesheet" href="style1.css">
   <style type="text/css">table {border-collapse: collapse; border: 1; width: 1280px; }</style>
</head>
<body>
<fieldset>
   <legend><h3> ตอนที่ 5 ความคิดเห็นต่อการให้บริการของมหาวิทยาลัย </h3></legend> 
   <form action="checkquestion.php" id="checkquestion.php" method="POST">  
      <div align = "center">
      <table width="1280" border="1">
      <tbody>
         <tr>
            <th width="589" >หัวข้อ</th>
            <th width="67" >5<br>เห็นด้วย/<br>
            เหมาะสม<br>
            มากที่สุด</th>
            <th width="63" >4<br>เห็นด้วย/<br>
            เหมาะสม<br>
            มาก</th>
            <th width="66" >3<br>เห็นด้วย/<br>
            เหมาะสม<br>
            ปานกลาง</th>
            <th width="63" >2<br>เห็นด้วย/<br>
            เหมาะสม<br>
            น้อย</th>
            <th width="72" >1<br>เห็นด้วย/<br>
            เหมาะสม<br>
            น้อยที่สุด</th>
         </tr>
         <tr>
           <td height="39"  colspan="6"><b> <?php  echo $_SESSION['name_topic'][0];?></b></td>
         </tr>
         <tr>
            <td>&nbsp;<?php  echo $_SESSION['name_question'][0]?></td>
            <td><div align="center"><input name="q1" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q1" value="4"type="radio"></td>
            <td><div align="center"><input name="q1" value="3"type="radio"></td>
            <td><div align="center"><input name="q1" value="2"type="radio"></td>
            <td><div align="center"><input name="q1" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php  echo $_SESSION['name_question'][1]?></td>
            <td><div align="center"><input name="q2" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q2" value="4"type="radio"></td>
            <td><div align="center"><input name="q2" value="3"type="radio"></td>
            <td><div align="center"><input name="q2" value="2"type="radio"></td>
            <td><div align="center"><input name="q2" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php  echo $_SESSION['name_question'][2]?></td>
            <td><div align="center"><input name="q3" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q3" value="4"type="radio"></td>
            <td><div align="center"><input name="q3" value="3"type="radio"></td>
            <td><div align="center"><input name="q3" value="2"type="radio"></td>
            <td><div align="center"><input name="q3" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][3]?></td>
            <td><div align="center"><input name="q4" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q4" value="4"type="radio"></td>
            <td><div align="center"><input name="q4" value="3"type="radio"></td>
            <td><div align="center"><input name="q4" value="2"type="radio"></td>
            <td><div align="center"><input name="q4" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][4]?></td>
            <td><div align="center"><input name="q5" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q5" value="4"type="radio"></td>
            <td><div align="center"><input name="q5" value="3"type="radio"></td>
            <td><div align="center"><input name="q5" value="2"type="radio"></td>
            <td><div align="center"><input name="q5" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][5]?></td>
            <td><div align="center"><input name="q6" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q6" value="4"type="radio"></td>
            <td><div align="center"><input name="q6" value="3"type="radio"></td>
            <td><div align="center"><input name="q6" value="2"type="radio"></td>
            <td><div align="center"><input name="q6" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][6]?></td>
            <td><div align="center"><input name="q7" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q7" value="4"type="radio"></td>
            <td><div align="center"><input name="q7" value="3"type="radio"></td>
            <td><div align="center"><input name="q7" value="2"type="radio"></td>
            <td><div align="center"><input name="q7" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][7]?></td>
            <td><div align="center"><input name="q8" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q8" value="4"type="radio"></td>
            <td><div align="center"><input name="q8" value="3"type="radio"></td>
            <td><div align="center"><input name="q8" value="2"type="radio"></td>
            <td><div align="center"><input name="q8" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][8]?></td>
            <td><div align="center"><input name="q9" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q9" value="4"type="radio"></td>
            <td><div align="center"><input name="q9" value="3"type="radio"></td>
            <td><div align="center"><input name="q9" value="2"type="radio"></td>
            <td><div align="center"><input name="q9" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][9]?></td>
            <td><div align="center"><input name="q10" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q10" value="4"type="radio"></td>
            <td><div align="center"><input name="q10" value="3"type="radio"></td>
            <td><div align="center"><input name="q10" value="2"type="radio"></td>
            <td><div align="center"><input name="q10" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][10]?></td>
            <td><div align="center"><input name="q11" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q11" value="4"type="radio"></td>
            <td><div align="center"><input name="q11" value="3"type="radio"></td>
            <td><div align="center"><input name="q11" value="2"type="radio"></td>
            <td><div align="center"><input name="q11" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][11]?></td>
            <td><div align="center"><input name="q12" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q12" value="4"type="radio"></td>
            <td><div align="center"><input name="q12" value="3"type="radio"></td>
            <td><div align="center"><input name="q12" value="2"type="radio"></td>
            <td><div align="center"><input name="q12" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][12]?></td>
            <td><div align="center"><input name="q13" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q13" value="4"type="radio"></td>
            <td><div align="center"><input name="q13" value="3"type="radio"></td>
            <td><div align="center"><input name="q13" value="2"type="radio"></td>
            <td><div align="center"><input name="q13" value="1"type="radio"></td>
         </tr>
        
      
         <tr>
         <td height="39"  colspan="6"><b> <?php   echo $_SESSION['name_topic'][1];?></b></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][13]?></td>
            <td><div align="center"><input name="q14" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q14" value="4"type="radio"></td>
            <td><div align="center"><input name="q14" value="3"type="radio"></td>
            <td><div align="center"><input name="q14" value="2"type="radio"></td>
            <td><div align="center"><input name="q14" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][14] ?></td>
            <td><div align="center"><input name="q15" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q15" value="4"type="radio"></td>
            <td><div align="center"><input name="q15" value="3"type="radio"></td>
            <td><div align="center"><input name="q15" value="2"type="radio"></td>
            <td><div align="center"><input name="q15" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][15]?></td>
            <td><div align="center"><input name="q16" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q16" value="4"type="radio"></td>
            <td><div align="center"><input name="q16" value="3"type="radio"></td>
            <td><div align="center"><input name="q16" value="2"type="radio"></td>
            <td><div align="center"><input name="q16" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][16]?></td>
            <td><div align="center"><input name="q17" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q17" value="4"type="radio"></td>
            <td><div align="center"><input name="q17" value="3"type="radio"></td>
            <td><div align="center"><input name="q17" value="2"type="radio"></td>
            <td><div align="center"><input name="q17" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][17]?></td>
            <td><div align="center"><input name="q18" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q18" value="4"type="radio"></td>
            <td><div align="center"><input name="q18" value="3"type="radio"></td>
            <td><div align="center"><input name="q18" value="2"type="radio"></td>
            <td><div align="center"><input name="q18" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][18]?></td>
            <td><div align="center"><input name="q19" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q19" value="4"type="radio"></td>
            <td><div align="center"><input name="q19" value="3"type="radio"></td>
            <td><div align="center"><input name="q19" value="2"type="radio"></td>
            <td><div align="center"><input name="q19" value="1"type="radio"></td>
         </tr>
         <tr>
           <td height="39"  colspan="6"><b> <?php   echo $_SESSION['name_topic'][2];?></b></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][19]?></td>
            <td><div align="center"><input name="q20" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q20" value="4"type="radio"></td>
            <td><div align="center"><input name="q20" value="3"type="radio"></td>
            <td><div align="center"><input name="q20" value="2"type="radio"></td>
            <td><div align="center"><input name="q20" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][20]?></td>
            <td><div align="center"><input name="q21" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q21" value="4"type="radio"></td>
            <td><div align="center"><input name="q21" value="3"type="radio"></td>
            <td><div align="center"><input name="q21" value="2"type="radio"></td>
            <td><div align="center"><input name="q21" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][21]?></td>
            <td><div align="center"><input name="q22" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q22" value="4"type="radio"></td>
            <td><div align="center"><input name="q22" value="3"type="radio"></td>
            <td><div align="center"><input name="q22" value="2"type="radio"></td>
            <td><div align="center"><input name="q22" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][22]?></td>
            <td><div align="center"><input name="q23" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q23" value="4"type="radio"></td>
            <td><div align="center"><input name="q23" value="3"type="radio"></td>
            <td><div align="center"><input name="q23" value="2"type="radio"></td>
            <td><div align="center"><input name="q23" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][23]?></td>
            <td><div align="center"><input name="q24" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q24" value="4"type="radio"></td>
            <td><div align="center"><input name="q24" value="3"type="radio"></td>
            <td><div align="center"><input name="q24" value="2"type="radio"></td>
            <td><div align="center"><input name="q24" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][24]?></td>
            <td><div align="center"><input name="q25" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q25" value="4"type="radio"></td>
            <td><div align="center"><input name="q25" value="3"type="radio"></td>
            <td><div align="center"><input name="q25" value="2"type="radio"></td>
            <td><div align="center"><input name="q25" value="1"type="radio"></td>
         </tr>
         <tr>
         <td height="39"  colspan="6"><b> <?php   echo $_SESSION['name_topic'][3];?></b></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][25]?></td>
            <td><div align="center"><input name="q26" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q26" value="4"type="radio"></td>
            <td><div align="center"><input name="q26" value="3"type="radio"></td>
            <td><div align="center"><input name="q26" value="2"type="radio"></td>
            <td><div align="center"><input name="q26" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][26]?></td>
            <td><div align="center"><input name="q27" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q27" value="4"type="radio"></td>
            <td><div align="center"><input name="q27" value="3"type="radio"></td>
            <td><div align="center"><input name="q27" value="2"type="radio"></td>
            <td><div align="center"><input name="q27" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][27]?></td>
            <td><div align="center"><input name="q28" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q28" value="4"type="radio"></td>
            <td><div align="center"><input name="q28" value="3"type="radio"></td>
            <td><div align="center"><input name="q28" value="2"type="radio"></td>
            <td><div align="center"><input name="q28" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][28]?></td>
            <td><div align="center"><input name="q29" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q29" value="4"type="radio"></td>
            <td><div align="center"><input name="q29" value="3"type="radio"></td>
            <td><div align="center"><input name="q29" value="2"type="radio"></td>
            <td><div align="center"><input name="q29" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][29]?></td>
            <td><div align="center"><input name="q30" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q30" value="4"type="radio"></td>
            <td><div align="center"><input name="q30" value="3"type="radio"></td>
            <td><div align="center"><input name="q30" value="2"type="radio"></td>
            <td><div align="center"><input name="q30" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][30]?></td>
            <td><div align="center"><input name="q31" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q31" value="4"type="radio"></td>
            <td><div align="center"><input name="q31" value="3"type="radio"></td>
            <td><div align="center"><input name="q31" value="2"type="radio"></td>
            <td><div align="center"><input name="q31" value="1"type="radio"></td>
         </tr>
         <tr>
            <td>&nbsp;<?php echo $_SESSION['name_question'][31]?></td>
            <td><div align="center"><input name="q32" value="5"type="radio"></div></td>
            <td><div align="center"><input name="q32" value="4"type="radio"></td>
            <td><div align="center"><input name="q32" value="3"type="radio"></td>
            <td><div align="center"><input name="q32" value="2"type="radio"></td>
            <td><div align="center"><input name="q32" value="1"type="radio"></td>
         </tr>
      </tbody>
      </table><br>

      <div align = "right"><input type="submit" name="questions_5" value="ถัดไป"></div>
   </form>
</body>
</html>