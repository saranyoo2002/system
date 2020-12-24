<html>
 <head> 
		<META HTTP-EQUIV = "CONTENT-TYPE" CONTENT ="TEXT/HTML; CHARSET = UTF-8">
          <meta charset="UTF-8">
     
          <title>RMUTI Questionnair</title>
          <link rel="stylesheet" href="style1.css">
       
         
  </head>

    
  
 </head>
 <body >

  <fieldset>
  <legend><h3>ตอนที่ 1 ข้อมูลทั่วไป</h3></legend>
  <b>คำชี้แจง</b> โปรดกรอกข้อความลงในช่องว่าง และ/หรือทำเครื่อยหมาย / ลงในช่อง  หน้าข้อความที่ตรงกับความคิดเห็นหรือสภาพจริงของท่านมากที่สุด<br>
  <form action="checkquestion.php" id="checkquestion.php" method="POST">  
    <table  border="0">
    <tr>
      <td><div align ='right'> 1. ท่านสำเร็จการศึกษาจาก: </div></td>
      <td><input type="text" name="university"required  size="35" maxlength = "35"> 
      </td>
    </tr>
    <tr>
      <td><div align ='right'> คณะ: </div></td>
      <td><input type="text" name="facuity" required  size="35" maxlength = "35"> 
      </td>
    </tr>
    <tr>
      <td><div align ='right'>โปรแกรมวิชา/สาขาวิชา :</div></td>
      <td><input type="text" name="branch" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>หลักสูตร :</div></td>
      <td><input type="text" name="course" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>คำนำหน้า:</div></td>
      <td><select name="prefix">
        <option value="0">เลือก
        <option value="นาย">นาย                 
        <option value="นางสาว">นางสาว
        <option value="นาง">นาง
        </select>
      </td>
    </tr>
    <tr>
      <td><div align ='right'>ชื่อ :</div></td>
      <td><input type="text" name="first_name" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>นามสกุล :</div></td>
      <td><input type="text" name="sur_name" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>รหัสบัตรประชาชน:</div></td>
      <td><input type="text" name="id_card" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>เลขประจำตัวนักศึกษา :</div></td>
      <td><input type="text" name="id_student" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>วัน/เดือน/ปีเกิด :</div></td>
      <td><input type="text" name="datex" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>เกรดเฉลี่ยสะสม :</div></td>
      <td><input type="text" name="gpa" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>ชื่อที่อยู่ :</div></td>
      <td><input type="text" name="name_address" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>รหัสประจำบ้าน :</div></td>
      <td><input type="text" name="id_house" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>บ้านเลขที่ :</div></td>
      <td><input type="text" name="house_number" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>หมู่ :</div></td>
      <td><input type="text" name="village_number" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>ตรอก/ซอย :</div></td>
      <td><input type="text" name="alley" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>ถนน :</div></td>
      <td><input type="text" name="road" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>ตำบล :</div></td>
      <td><input type="text" name="sub_district" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>อำเภอ :</div></td>
      <td><input type="text" name="district" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>จังหวัด :</div></td>
      <td><input type="text" name="province" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>รหัสไปรษณีย์ :</div></td>
      <td><input type="text" name="postal_code" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>เบอร์โทรศัพท์ :</div></td>
      <td><input type="text" name="telephone_number" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>อีเมล์ :</div></td>
      <td><input type="email" name="email" required  size="35" maxlength = "35">
      </td>
    </tr>
    <tr>
      <td><div align ='right'>ที่อยู่ที่สามารถติดต่อได้ :</div></td>
      <td><textarea name="address" rows="5" cols="35" style="resize:none"></textarea></td>
    </tr>
    <tr>
  </table>
  5. สถานะการเกณฑ์ทหารปัจจุบัน (เฉพาะเพศชาย)<br>
  <dd><input name="Enlist" value="1.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว"type="radio">1.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว<br>
  <input name="Enlist" value="2.อยู่ในระหว่างการเป็นทหารเกณฑ์" type="radio">2.อยู่ในระหว่างการเป็นทหารเกณฑ์</dd><br>

  6. สถานะการเป็นนักบวชปัจจุบัน<br>
  <dd><input name="priest" value="1.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว"type="radio">1.ไม่ได้เป็นนักบวช<br>
    <input name="priest" value="2.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว"type="radio">2.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา น้อยกว่า 3 เดือน<br>
    <input name="priest" value="3.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว"type="radio">3.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา 4 เดือน - 1ปี<br>
    <input name="priest" value="4.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว"type="radio">4.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา มากกว่า 1 ปี<br>
    <input name="priest" value="5.อยู่ในช่วงผ่อนผันเกณฑ์ทหาร หรือได้รับการยกเว้น หรือผ่านการเกณฑ์ทหารแล้ว"type="radio">5.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา น้อยกว่า 3 เดือน<br>
    <input name="priest" value="6.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา น้อยกว่า 3 เดือน" type="radio">6.อยู่ในระหว่างการเป็นนักบวช ระยะเวลาถึงกำหนดลาสิกขา ไม่มีกำหนด</dd><br>

  7. สถานะภาพการทำงานปัจจุบัน<br>
  <dd><input name="work_present"value="1.ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษา" type="radio">1.ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษา<br>
    <input name="work_present" value="2.ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษาและกำลังศึกษาต่อ" type="radio">2.ไม่มีงานทำก่อนการศึกษา มีงานทำหลังจบการศึกษาและกำลังศึกษาต่อ<br>
    <input name="work_present" value="3.ยังไม่มีงานทำ (ข้ามไปตอบตอนที่3)" type="radio">3.ยังไม่มีงานทำ (ข้ามไปตอบตอนที่3)<br>
    <input name="work_present" value="4.ยังไม่มีงานทำ และกำลังศึกษาต่อ (ข้ามไปตอนที่4)"type="radio">4.ยังไม่มีงานทำ และกำลังศึกษาต่อ (ข้ามไปตอนที่4)<br>
    <input name="work_present" value="5.มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจบการศึกษา" type="radio">5.มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจบการศึกษา<br>
    <input name="work_present" value="6.มีงานทำก่อนการศึกษา เปลี่ยนสายงานหลังจบการศึกษา" type="radio">6.มีงานทำก่อนการศึกษา เปลี่ยนสายงานหลังจบการศึกษา<br>
    <input name="work_present" value="7.มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจากจบการศึกษา เลื่อนระดับ" type="radio">7.มีงานทำก่อนการศึกษา อยู่ในสายงานเดิมหลังจากจบการศึกษา เลื่อนระดับ<br>
  </dd><br>
    <div align = "right"><input type="submit" name="question" value="ถัดไป"><div>



    </form>
  </fieldset>
 </body>
</html>









