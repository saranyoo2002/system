<?php
  
  



  
   
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>RMUTI Questionnair</title>
    
    <link rel="stylesheet" href="style1.css">
 
 </head>
 <body>
  
 <fieldset>
 <form action="checkquestion.php" id="checkquestion.php" method="POST"> 
    <legend><h3>ตอนที่ 6 ความพึงพอใจที่ได้รับจากสาขาวิชาที่ท่านสำเร็จการศึก</h3></legend>

    <table  border="0">
    <tr>
      <td>1) ด้านวิชาการ</div></td>
      <td><input name="academic" value="5.มากที่สุด"type="radio">1.มากที่สุด
          <input name="academic" value="4.มาก"type="radio">2.มาก
          <input name="academic" value="3.ปานกลาง"type="radio">3.ปานกลาง
          <input name="academic" value="2.น้อย"type="radio">4.น้อย
          <input name="academic" value="1.น้อยที่สุด"type="radio">5.น้อยที่สุด 
      </td>
    </tr>
    <tr>
      <td>2) การปฎิบัติ</div></td>   
      <td><input name="practice" value="5.มากที่สุด"type="radio">1.มากที่สุด
          <input name="practice" value="4.มาก"type="radio">2.มาก
          <input name="practice" value="3.ปานกลาง"type="radio">3.ปานกลาง
          <input name="practice" value="2.น้อย"type="radio">4.น้อย
          <input name="practice" value="1.น้อยที่สุด"type="radio">5.น้อยที่สุด 
      </td>
    </tr>

    <tr>
      <td>3) ด้านคุณธรรม</div></td>   
      <td><input name="moral" value="5.มากที่สุด"type="radio">1.มากที่สุด
          <input name="moral" value="4.มาก"type="radio">2.มาก
          <input name="moral" value="3.ปานกลาง"type="radio">3.ปานกลาง
          <input name="moral" value="2.น้อย"type="radio">4.น้อย
          <input name="moral" value="1.น้อยที่สุด"type="radio">5.น้อยที่สุด 
      </td>
    </tr>
 
   </table>
        <hr> </hr>
      

    <legend><h3>ตอนที่ 7 ความภาคภูมิใจในองค์กร</h3></legend>

    <table  border="0">
    <tr>
      <td>1) ความภาคภูมิใจในมหาวิทยาลัยฯ</div></td>
      <td><input name="pride_1" value="5.มากที่สุด"type="radio">1.มากที่สุด
          <input name="pride_1" value="4.มาก"type="radio">2.มาก
          <input name="pride_1" value="3.ปานกลาง"type="radio">3.ปานกลาง
          <input name="pride_1" value="2.น้อย"type="radio">4.น้อย
          <input name="pride_1" value="1.น้อยที่สุด"type="radio">5.น้อยที่สุด 
      </td>
    </tr>

    <tr>
      <td>2) ความภาคภูมิใจในวิทยาลัยเขตที่ท่านสำเร็จการศึกษา</div></td>
      <td><input name="pride_2" value="5.มากที่สุด"type="radio">1.มากที่สุด
          <input name="pride_2" value="4.มาก"type="radio">2.มาก
          <input name="pride_2" value="3.ปานกลาง"type="radio">3.ปานกลาง
          <input name="pride_2" value="2.น้อย"type="radio">4.น้อย
          <input name="pride_2" value="1.น้อยที่สุด"type="radio">5.น้อยที่สุด 
      </td>
    </tr>

    <tr>
      <td>3) ความภาคภูมิใจในคณะที่ท่านสำเร็จการศึกษา</div></td>
      <td><input name="pride_3" value="5.มากที่สุด"type="radio">1.มากที่สุด
          <input name="pride_3" value="4.มาก"type="radio">2.มาก
          <input name="pride_3" value="3.ปานกลาง"type="radio">3.ปานกลาง
          <input name="pride_3" value="2.น้อย"type="radio">4.น้อย
          <input name="pride_3" value="1.น้อยที่สุด"type="radio">5.น้อยที่สุด 
      </td>
    </tr>

    <tr>
      <td> 4) ความภาคภูมิใจในคณะที่ท่านสำเร็จการศึกษา</div></td>
      <td><input name="pride_4" value="5.มากที่สุด"type="radio">1.มากที่สุด
          <input name="pride_4" value="4.มาก"type="radio">2.มาก
          <input name="pride_4" value="3.ปานกลาง"type="radio">3.ปานกลาง
          <input name="pride_4" value="2.น้อย"type="radio">4.น้อย
          <input name="pride_4" value="1.น้อยที่สุด"type="radio">5.น้อยที่สุด 
      </td>
    </tr>
  </table>

    <hr> </hr>
    <legend><h3>ตอนที่ 8 ข้อมูลคุณความดีและรางวัลเกียรติยศต่างๆ</h3></legend> 
    <table  border="0">
    <tr>
      <td><div align ='right'>1. ชื่อประกาศเกียรติคุณ/รางวัลที่ได้รับในรอบ 3 ปี ที่ผ่านมา :</div></td>
      <td><input type="text" name="name_award"required  size="35" maxlength = "35"> </td>
    </tr>
    <tr>
      <td><div align ='right'>หน่วยงานที่ได้มอบรางวัลประกาศเกียรติคุณ/รางวัล :</div></td>
      <td><input type="text" name="agency_award"required  size="35" maxlength = "35"></td> 
    </tr>
    <tr>
      <td><div align ='right'>วัน/เดือน/ปี ที่ได้รับประกาศเกียรติคุณ/รางวัล :</div></td>
      <td><input type="text" name="date_award"required  size="35" maxlength = "35"></td> 
    </tr>
    <tr>
      <td><div align ='right'>ประเภทของประกาศเกียรติคุณ/รางวัล</div></td>
      <td><input name="type_award" value="1.ด้านสิ่งแวดล้อม"type="radio">1.ด้านสิ่งแวดล้อม
          <input name="type_award" value="2.มาก"type="radio">2.ด้านศิลปะและวัฒนธรรม
          <input name="type_award" value="2.มาก"type="radio">3.ด้านกีฬา สุขภาพ</td>
    <tr>
    <td><div align ='right'></div></td>
      <td><input name="type_award" value="4.ด้านคุณธรร"type="radio">4.ด้านคุณธรรม
          <input name="type_award" value="5.ด้านวิชาการ วิชาชีพ"type="radio">5.ด้านวิชาการ วิชาชีพ
          <input name="type_award" value="6.อื่นๆ (ระบุ)"type="radio">6.อื่นๆ (ระบุ)</td>

    </tr>
    <tr>
      <td><div align ='right'>ระดับของประกาศเกียรติคุณ/รางวัล</div></td>
      <td><input name="level_award" value="1.ระดับท้องถิ่น"type="radio">1.ระดับท้องถิ่น
          <input name="level_award" value="2.ระดับองค์กร"type="radio">2.ระดับองค์กร
          <input name="level_award" value="3.ระดับชาติ"type="radio">3.ระดับชาติ
          <input name="level_award" value="4.ระดับนานาชาติ"type="radio">4.ระดับนานาชาติ
      </td>
    </tr>
    </table>
     <hr > </hr>
     <h3>ตอนที่ 9 ข้อเสนอแนะ</h3>
      1.หลักสูตรของมหาวิทยาลัย ควรเพิ่มรายวิชาหรือความรู้เรื่องใด <br>
        <dd>
          <input name="improve" value="ภาษาอังกฤษ"type="radio">1.ภาษาอังกฤษ &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <input name="improve" value="คอมพิวเตอร์"type="radio">2.คอมพิวเตอร์&emsp;&emsp;&ensp;&nbsp;&emsp;&emsp;&ensp;&nbsp;
          <input name="improve" value="บัญชี"type="radio">3.บัญชี <br>
          <input name="improve" value="การใช้งานอินเทอร์เน็ต"type="radio">4.การใช้งานอินเทอร์เน็ต&emsp;&emsp;&ensp;&nbsp;
          <input name="improve" value="การฝึกปฎิบัติงานจริง"type="radio">5.การฝึกปฎิบัติงานจริง&emsp;&emsp;
          <input name="improve" value="เทคนิคการวิจัย"type="radio">6.เทคนิคการวิจัย<br>
          <input name="improve" value="ภาษาจีน"type="radio">7.ภาษาจีน&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
          <input name="improve" value="ภาษาอาเซียน"type="radio">8.ภาษาอาเซียน&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
          <input name="improve" value="อื่นๆ (ระบุ)"type="radio">9.อื่นๆ (ระบุ)</dd> <br>
      2.ข้อเสนอแนะเกี่ยวกับหลักสูตรและสาขาวิชาที่เรียน <br>
       <dd> <textarea name="suggestion_course" rows="5" cols="45" style="resize:none"></textarea></dd> <br>
      3.ข้อเสนอแนะเกี่ยวกับการเรียรสอนการ <br>
       <dd> <textarea name="suggestion_study" rows="5" cols="45" style="resize:none"></textarea></dd> <br>
      4.ข้อเสนอแนะเกี่ยวกับกิจกรรมพัฒนานักศึกษา<br>
       <dd> <textarea name="suggestion_activity" rows="5" cols="45" style="resize:none"></textarea></dd>

       <div align = "right">
       <input  type="submit" name="questions_6" value="Next"></div>
       </form>

       </fieldset>
  </body>
</html>
      

  

   
