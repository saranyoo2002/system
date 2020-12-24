<?php
    // include('condb.php');
    // session_start();  

    
?>
<!DOCTYPE html>
<html lang="en">
 <head> 
		<META HTTP-EQUIV = "CONTENT-TYPE" CONTENT ="TEXT/HTML; CHARSET = UTF-8">
        <META NAME "AUTHOR" = CONTENT = "ศรัณยู ปรางค์ชัยกุล">
        <META NAME "KEYWORDS" = CONTENT = <"ระบบศิษย์เก่า">
          <meta charset="UTF-8">

          <title>RMUTI Questionnair</title>
       <link rel="stylesheet" href="style1.css">
    
  </head>
   
 
 <body >
    <form action="checkquestion.php" method="POST">

    <fieldset>
  <legend><h3>ตอนที่ 2 การสมัครงานและการทํางาน (สําหรับผู้มีงานทําแล้ว)</h3></legend>
        8.ประเภทงานที่ทำ<br>
        <dd> 
        <input name="type_work" value="1.ข้าราชการ/เจ้าหน้าที่หน่วยงานของรัฐ"type="radio">1.ข้าราชการ/เจ้าหน้าที่หน่วยงานของรัฐ<br>
        <input name="type_work" value="2.ดำเนินธุรกิจอิสระ/เจ้าของกิจการ" type="radio">2.ดำเนินธุรกิจอิสระ/เจ้าของกิจการ<br>
        <input name="type_work" value="3.พนักงานบริษัท/องค์กรธุรกิจเอกชน" type="radio">3.พนักงานบริษัท/องค์กรธุรกิจเอกชน<br>
        <input name="type_work" value="4.พนักงานองค์การต่างประเทศ/ระหว่างประเทศ " type="radio">4.พนักงานองค์การต่างประเทศ/ระหว่างประเทศ<br>
        <input name="type_work" value="5.รัฐวิสาหกิจ" type="radio">5.รัฐวิสาหกิจ<br>
        <input name="type_work" value="6.อื่นๆ(ระบุ)" type="radio">6.อื่นๆ(ระบุ)</dd><br>

        9.งานที่ทำอยู่ตามข้อ 7 เป็น<br>
        <dd><input name="work_done" value="1.งานเดิม(งานที่ทำก่อนเข้าเรียนหรือระหว่างเรียน)"type="radio">1.งานเดิม(งานที่ทำก่อนเข้าเรียนหรือระหว่างเรียน) <br>
        <input name="work_done" value="2.ดำเนินธุรกิจอิสระ/เจ้าของกิจการ" type="radio">2.ดำเนินธุรกิจอิสระ/เจ้าของกิจการ<br>
        สาเหตุที่ได้งานทำ ระบุสาเหตุที่สำคัญ 1 ข้อต่อไปนี้ <br>
        <input name="work_done" value="1.ประชาสัมพันธ์ของมหาวิทยาลัย" type="radio">1.ประชาสัมพันธ์ของมหาวิทยาลัย<br>
        <input name="work_done" value="2.มีผู้แนะนําให้ " type="radio">2.มีผู้แนะนําให้<br>
        <input name="work_done" value="3.สหกิจศึกษา " type="radio">3.สหกิจศึกษา<br>
        <input name="work_done" value="4.อื่นๆ(โปรดระบุ) " type="radio">4.อื่นๆ(โปรดระบุ)<br>
        </dd><br>

        10.ท่านคิดว่า ความรู้ความสามารถพิเศษด้านใด ที่ช่วยให้ท่านได้ทำงาน<br>
        <dd><input name="" value="1.การใช้คอมพิวเตอร์"type="radio">1.การใช้คอมพิวเตอร์<br>
        <input name="charisma" value="2.กิจกรรมสันทนาการ" type="radio">2.กิจกรรมสันทนาการ<br>
        <input name="charisma" value="3.กีฬา" type="radio">3.กีฬา<br>
        <input name="charisma" value="4.นาฎศิลป์" type="radio">4.นาฎศิลป์<br>
        <input name="charisma" value="5.ภาษาต่างประเทศ" type="radio">5.ภาษาต่างประเทศ<br>
        <input name="charisma" value="6.ศิลปะ" type="radio">6.ศิลปะ<br>
        <input name="charisma" value="7.อื่นๆ (ระบุ)" type="radio">7.อื่นๆ (ระบุ)  </dd>


    <table  border="0">
      <tr>
        <td><div align ='left'>11.ชื่อตำแหน่งที่ทำงาน :</div></td>
        <td><input type="text" name="name_work_position"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='left'>12.สถ่านที่ทำงานปัจจุบัน :</div></td>
        <td><input type="text" name="name_organization"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>ประเภทกิจการ :</div></td>
        <td><input type="text" name="type_of_business"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>ประเทศกิจการ :</div></td>
        <td><input type="text" name="country"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>เครือข่ายประเทศ :</div></td>
        <td><input type="text" name="network_country"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>อาคาร/ตึก :</div></td>
        <td><input type="text" name="building"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>ที่ตั้งเลขที่ :</div></td>
        <td><input type="text" name="location_number"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
      <td><div align ='right'>หมู่ที่ :</div></td>
        <td><input type="text" name="village_number"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>ตรอก/ซอย :</div></td>
        <td><input type="text" name="alley"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>ถนน :</div></td>
        <td><input type="text" name="road"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>ตำบล :</div></td>
        <td><input type="text" name="sub_district"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>อำเภอ :</div></td>
        <td><input type="text" name="district"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>จังหวัด :</div></td>
        <td><input type="text" name="province"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>รหัสไปรษณีย์ :</div></td>
        <td><input type="text" name="postal_code"required  size="35" maxlength = "35"></td>
      </tr>
      
      <tr>
        <td><div align ='right'>โทรศัพท์ :</div></td>
        <td><input type="text" name="telephone_number"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>โทรสาร :</div></td>
        <td><input type="text" name="fax"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>อีเมล์ :</div></td>
        <td><input type="text" name="email"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>ไลน์ผู้จัดการ :</div></td>
        <td><input type="text" name="line_manager"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>เบอร์ผู้จัดการ :</div></td>
        <td><input type="text" name="telephone_manager"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='right'>อีเมล์ผู้จัดการ :</div></td>
        <td><input type="text" name="email_manager"required  size="35" maxlength = "35"></td>
      </tr>
      <tr>
        <td><div align ='left'>13.เงินเดือน :</div></td>
        <td><input type="text" name="salaly"required  size="35" maxlength = "35"></td>
      </tr>
    </table>

    14.ความพึงพอใจต่องานที่ทำ<br>
    <dd><input name="satisfaction" value="1.พอใจ"type="radio">1.พอใจ<br>
        <input name="satisfaction" value="2.ไม่พอใจ" type="radio">2.ไม่พอใจ<br>
        ถ้า<b>ไม่พอใจ</b><br>
        <input name="cause_satisfaction" value="1.ขาดความก้าวหน้า" type="radio">1.ขาดความก้าวหน้า<br>
        <input name="cause_satisfaction" value="2.ขาดความมั่นคง" type="radio">2.ขาดความมั่นคง<br>
        <input name="cause_satisfaction" value="3.ค่าตอบแทนต่ำ" type="radio">3.ค่าตอบแทนต่ำ<br>
        <input name="cause_satisfaction" value="4.ไม่ได้ใช้ความรู้ที่เรียนมา" type="radio">4.ไม่ได้ใช้ความรู้ที่เรียนมา<br>
        <input name="cause_satisfaction" value="5.ผู้ร่วมงานไม่ดี" type="radio">5.ผู้ร่วมงานไม่ดี<br>
        <input name="cause_satisfaction" value="6.ระบบงานไม่ดี" type="radio">6.ระบบงานไม่ดี<br>
        <input name="cause_satisfaction" value="7.อื่นๆให้ระบุ" type="radio">7.อื่นๆให้ระบุ<br>
      </dd>

    15.หลังจากสำเร็จการศึกษาแล้ว ท่านได้งานทำในระยะเวลาเท่าไหร่
    <dd><input name="working_period" value="1.เป็นงานเดิมก่อนมาศึกษาหรือได้งานทำระหว่างศึกษา" type="radio">1.เป็นงานเดิมก่อนมาศึกษาหรือได้งานทำระหว่างศึกษา<br>
        <input name="working_period" value="2.มากกว่า 1 ปี" type="radio">2.มากกว่า 1 ปี<br>
        <input name="working_period" value="3. 10 - 12 เดือน" type="radio">3. 10 - 12 เดือน<br>
        <input name="working_period" value="4. 7 - 9 เดือน" type="radio">4. 7 - 9 เดือน<br>
        <input name="working_period" value="5. 3 - 6 เดือน" type="radio">5. 3 - 6 เดือน<br>
        <input name="working_period" value="6. 1 - 2 เดือน" type="radio">6. 1 - 2 เดือน<br>
        <input name="working_period" value="7.หางานได้ก่อนจบการศึกษา หรือได้งานทันที่หลังจากสำเร็จการศึกษา" type="radio">7.หางานได้ก่อนจบการศึกษา หรือได้งานทันที่หลังจากสำเร็จการศึกษา<br>
      </dd>
    
    16.ลักษณะงานที่ทำตรงกับสาขาที่ท่านได้สำเร็จการศึกษาหรือไม่
    <dd><input name="job_description" value="1.ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ" type="radio">1.ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ<br>
        <input name="job_description" value="2.ไม่ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ" type="radio">2.ไม่ตรงหรือสอดคล้องกับสาขาวิชาที่สำเร็จ<br>
    </dd>

    17.ท่านสามารถนำความรู้จากวิชาที่ท่านเรียนมาประยุกต์ใช้กับหน้าที่การงานที่ทำอยู่ขณะนี้เพียงใด
    <dd><input name="apply_knowledge" value="1.มากที่สุด (100 %)" type="radio">1.มากที่สุด (100 %)<br>
        <input name="apply_knowledge" value="2.มาก (75 - 90 %)" type="radio">2.มาก (75 - 90 %)<br>
        <input name="apply_knowledge" value="3.ปานกลาง (50 - 74 %)" type="radio">3.ปานกลาง (50 - 75 %)<br>
        <input name="apply_knowledge" value="4.น้อย (25 - 49 %)" type="radio">4.น้อย (25 - 49 %)<br>
        <input name="apply_knowledge" value="5.น้อยที่สุด (0 - 24 %)" type="radio">5.น้อยที่สุด (0 - 24 %)<br>
      </dd>
    
    18.การศึกษาต่อ 
    <dd><input name="continueing_education" value="1.ต้องการศึกษาต่อ" type="radio">1.ต้องการศึกษาต่อ (ข้ามไปตอนที่ 4)<br>
        <input name="continueing_education" value="2.ไม่ต้องการศึกษาต่อ " type="radio">2.ไม่ต้องการศึกษาต่อ (ข้ามไปตอนที่ 5)<br>

     </dd> <br><br><br>
       
     <div align = "right"><input type="submit" name="questions" value="ถัดไป">ถัดไป</div>
</fieldset>
    </form>
    </body>
</html>