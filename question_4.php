<?php
    include('condb.php');
    session_start();  
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
    
    <legend><h3>ตอนที่ 4 การศึกษาต่อ</h3></legend>

    

    27.ระดับการศึกษาที่ท่านต้องการศึกษาต่อ / กำลังศึกษา<br>
    <dd>
        <input name="level" value="1.ประกาศนีย์บัตรวิชาชีพขั้นสูง"type="radio">1.ประกาศนีย์บัตรวิชาชีพขั้นสูง<br>
        <input name="level" value="2.อนุปริญญา"type="radio">2.อนุปริญญา<br>
        <input name="level" value="3.ปริญญาตรี"type="radio">3.ปริญญาตรี<br>
        <input name="level" value="4.ประกาศนีย์บัตรบัณฑิต"type="radio">4.ประกาศนีย์บัตรบัณฑิต<br>
        <input name="level" value="5.ปริญญาโท"type="radio">5.ปริญญาโท<br>
        <input name="level" value="6.ประกาศนีย์บัตรบัณฑิต"type="radio">6.ประกาศนีย์บัตรบัณฑิต<br>
        <input name="level" value="7.ปริญญาเอก"type="radio">7.ปริญญาเอก<br>
        <input name="level" value="8.ประกาศนีย์บัตรหรือหลักสูตรเฉพาะ(ที่บรรจุในอัตราเงินเดือนสูงกว่าปริญญาเอก)"type="radio">6.ประกาศนีย์บัตรบัณฑิต<br>
    </dd>
    28.สถานศึกษาที่ท่านต้องการศึกษาต่อ/กำลังศึกษาต่อ
        <table border= "0">
        <tr>
            <td><div align ='right'>ที่ตั้งเลขที่ :</div></td>
            <td><input type="text" name="house_number_con" required  size="35" maxlength = "35"></td>
        </tr>
        <tr>
            <td><div align ='right'>หมู่ที่ :</div></td>
            <td><input type="text" name="village_number_con" required  size="35" maxlength = "35"></td>
        </tr>
        <tr>
            <td><div align ='right'>อาคาร/ตึก :</div></td>
            <td><input type="text" name="building_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>ตรอก/ซอย :</div></td>
            <td><input type="text" name="alley_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>ถนน :</div></td>
            <td><input type="text" name="road_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>ตำบล :</div></td>
            <td><input type="text" name="sub_district_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>อำเภอ/เขต :</div></td>
            <td><input type="text" name="district_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>จังหวัด :</div></td>
            <td><input type="text" name="province_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>ประเทศ :</div></td>
            <td><input type="text" name="country_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>รหัสไปรษณีย์ :</div></td>
            <td><input type="text" name="postal_code_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>โทรศัพท์ :</div></td>
            <td><input type="text" name="telephone_number_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>โทรสาร :</div></td>
            <td><input type="text" name="fax_con" required  size="35" maxlength = "35"> </td>
        </tr>
        <tr>
            <td><div align ='right'>อีเมล์ :</div></td>
            <td><input type="text" name="email_con" required  size="35" maxlength = "35"> </td>
        </tr>
        </table>
        29.สาขาวิชาที่ท่านต้องการศึกษาต่อ/กำลังศึกษาต่อ<br>
     <dd>
        <input name="branch_con" value="1.สาขาวิชาเดิม"type="radio">1.สาขาวิชาเดิม<br>
        <input name="branch_con" value="2.สาขาวิชาใหม่"type="radio">2.สาขาวิชาใหม่<br>
    </dd>
        30.ประเภทของสถานบันการศึกษา/มหาวิทยาลัยที่ท่านต้องการศึกษา/กำลังศึกษา<br>
    
    <dd>
        <input name="type_con" value="1.สาขาวิชาเดิม"type="radio">1.สาขาวิชาเดิม<br>
        <input name="type_con" value="2.สาขาวิชาใหม่"type="radio">2.สาขาวิชาใหม่<br>
    </dd>
        31.เหตุผลที่ทำให้ท่านตัดสินใจต่อ<br>
    <dd>
        <input name="reason_con" value="1.เป็นความต้องการของตนเอง"type="radio">1.เป็นความต้องการของตนเอง<br>
        <input name="reason_con" value="2.ได้รับทุนศึกษาต่อ"type="radio">2.ได้รับทุนศึกษาต่อ<br>
        <input name="reason_con" value="3.งานที่ต้องการต้องใช้วุฒิสูงกว่า ปริญญาตรี"type="radio">3.งานที่ต้องการต้องใช้วุฒิสูงกว่า ปริญญาตรี<br>
        <input name="reason_con" value="4.เป็นความต้องการของบิดา/มารดา หรือผู้ปกครอง"type="radio">4.เป็นความต้องการของบิดา/มารดา หรือผู้ปกครอง<br>
        <input name="reason_con" value="5.อื่นๆให้ระบุ"type="radio">5.อื่นๆให้ระบุ<br>
    </dd>
        32.ท่านมีปัญหาในการศึกษาต่อหรือไม่ <br>
    <input name="not_cause_con" value="1.ไม่มีปัญหา"type="radio">1.ไม่มีปัญหา<br>
    &nbsp ถ้า<b>มีปัญหา</b>โปรดระบุปัญหาที่สำคัญที่สุดดังต่อไปนี้โดยสามารถเลือกคำตอบได้หลายข้อ 
    <dd>
        <input name="cause_con1" value="1.ขาดแคลนเงินทุน"type="checkbox">1.ขาดแคลนเงินทุน<br>
        <input name="cause_con2" value="2.ขาดความรู้พื้นฐานในการศึกษาต่อ" type="checkbox">2.ขาดความรู้พื้นฐานในการศึกษาต่อ<br>
        <input name="cause_con3" value="3.คุณสมบัติในการสมัครเรียน" type="checkbox">3.คุณสมบัติในการสมัครเรียน<br>
        <input name="cause_con4" value="4.ข้อมูลสถานที่ศึกษาต่อไม่เพียงพอ" type="checkbox">4.ข้อมูลสถานที่ศึกษาต่อไม่เพียงพอ<br>
        <input name="cause_con5" value="5.อื่นๆให้ระบุ" type="checkbox">5.อื่นๆให้ระบุ<br>
        <div align = "right"><input type="submit" name="questions_4" value="ถัดไป"></div>
 </form> 
 </fieldset>
 </body>