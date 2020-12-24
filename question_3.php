<?php
    include('condb.php');
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>RMUTI Questionnair</title>
    <link rel="stylesheet" href="style1.css">
 </head>
 <body>
 <form action="checkquestion.php" id="checkquestion.php" method="POST">  
    <fieldset>
    <legend><h3>ตอนที่ 3 การสมัครงานและการทํางาน (สําหรับผู้มีงานทําแล้ว)</h3></legend>

    19.สาเหตุที่ยังไม่มีงานทำ
    <dd>
        <input name="cause_not_work" value="1.ต้องการประกอบอาชีพอิสระ"type="radio">1.ต้องการประกอบอาชีพอิสระ<br>
        <input name="cause_not_work" value="2.หางานทำไม่ได้" type="radio">2.หางานทำไม่ได้<br>
        <input name="cause_not_work" value="3.รอฟังคำตอบจากหน่วยงาน" type="radio">3.รอฟังคำตอบจากหน่วยงาน<br>
        <input name="cause_not_work" value="4.ยังไม่ประสงค์ทำงาน" type="radio">4.ยังไม่ประสงค์ทำงาน<br>
        <input name="cause_not_work" value="5.อื่นๆให้(ระบุ)" type="radio" onclick="createinput();">5.อื่นๆให้(ระบุ)
    </dd>
    <script type="text/javascript">
        function createinput(){
           
        
        }
        function disablecheckbox(){
            document.getElementById('c1').disabled=true;
            document.getElementById('c2').disabled=true;
            document.getElementById('c3').disabled=true;
            document.getElementById('c4').disabled=true;
            document.getElementById('c5').disabled=true;
            document.getElementById('c6').disabled=true;
            document.getElementById('c7').disabled=true;
            document.getElementById('c8').disabled=true;
            document.getElementById('c9').disabled=true;
            document.getElementById('c10').disabled=true;
            document.getElementById('c11').disabled=true;
            document.getElementById('c12').disabled=true;
            document.getElementById('c13').disabled=true;
            document.getElementById('c14').disabled=true;
           
        }
         function disablecheckbox1(){
             document.getElementById('c0').disabled=true;
         }
    </script>
    20.ท่านมีปัญหาในการหางานทำหลังจากสำเร็จการศึกษาหรือไม่ <br>
    <input id="c0" type="radio" name="not_cause" value="1.ไม่มีปัญหา"  onfocus="disablecheckbox();">1.ไม่มีปัญหา<br>
     &nbsp;ถ้า<b>มีปัญหา</b>โปรดระบุปัญหาที่สำคัญที่สุดดังต่อไปนี้โดยสามารถเลือกคำตอบได้หลายข้อ<dd>
        <input id="c1" name="gpa_is_not_due"  value="1.เกรดเฉลี่ยไม่ถึงเกณฑ์ที่กำหนด" type="checkbox" onfocus="disablecheckbox1();" >1.เกรดเฉลี่ยไม่ถึงเกณฑ์ที่กำหนด<br>
        <input id="c2" name="lack_of_experience" value="2.ขาดประกอบการในการทำงาน" type="checkbox" onfocus="disablecheckbox1();" >2.ขาดประกอบการในการทำงาน<br>
        <input id="c3"name="lack_of_computer_skill" value="3.ขาดทักษะด้านคอมพิวเตอร์" type="checkbox" onfocus="disablecheckbox1();">3.ขาดทักษะด้านคอมพิวเตอร์<br>
        <input id="c4"name="lack_of_foreign_language_skill" value="4.ขาดทักษะภาษาต่างประเทศ" type="checkbox" onfocus="disablecheckbox1();">4.ขาดทักษะภาษาต่างประเทศ<br>
        <input id="c5"name="health_problem" value="5.ปัญหาด้านสุขภาพ" type="checkbox" onfocus="disablecheckbox1();">5.ปัญหาด้านสุขภาพ<br>
        <input id="c6"name="the_entrance_exam_connot_work" value="6.สอบเข้าทำงานไม่ได้" type="checkbox" onfocus="disablecheckbox1();">6.สอบเข้าทำงานไม่ได้<br>
        <input id="c7"name="low_salary" value="7.เงินเดือนน้อย" type="checkbox" onfocus="disablecheckbox1();">7.เงินเดือนน้อย<br>
        <input id="c8"name="agency_does_not_want" value="8.หน่วยงานไม่ต้องการ" type="checkbox" onfocus="disablecheckbox1();">8.หน่วยงานไม่ต้องการ<br>
        <input id="c9"name="lack_of_people_or_money" value="9.ขาดคนหรือเงินค้ำประกัน" type="checkbox" onfocus="disablecheckbox1();">9.ขาดคนหรือเงินค้ำประกัน<br>
        <input id="c10"name="lack_of_support" value="10.ขาดคนสนับสนุน" type="checkbox" onfocus="disablecheckbox1();">10.ขาดคนสนับสนุน<br>
        <input id="c11"name="have_to_exam" value="11.ต้องสอบจึงไม่อยากสมัคร" type="checkbox" onfocus="disablecheckbox1();">11.ต้องสอบจึงไม่อยากสมัคร<br>
        <input id="c12"name="i_cant_fine_myjob" value="12.หางานที่ถูกใจไม่ได้" type="checkbox" onfocus="disablecheckbox1();">12.หางานที่ถูกใจไม่ได้<br>
        <input id="c13"name="source_of_work_unknow" value="13.ไม่ทราบแหล่งงาน" type="checkbox" onfocus="disablecheckbox1();">13.ไม่ทราบแหล่งงาน<br>
        <input id="c14"name="other" value="14.อื่นๆให้ระบุ" type="checkbox" onfocus="disablecheckbox1();">14.อื่นๆให้ระบุ<br>
    </dd>
    21.ความต้องการทำงาน <br>
    <dd><input name="work_requirement" value="1.ทำงานต่างประเทศ"type="radio">1.ทำงานต่างประเทศ<br>
        <input name="work_requirement" value="2.ทำงานในประเทศ"type="radio">2.ทำงานในประเทศ<br>

    </dd>

    <table  border="0">
        <tr>
            <td><div align ='left'>22.ประเทศที่ต้องการทำงาน :</div></td>
            <td><input type="text" name="country_want_work"required  size="35" maxlength = "35"></td>
        </tr>
        <tr>
            <td><div align ='left'>23.ตำแหน่งที่ต้องการทำงาน :</div></td>
            <td><input type="text" name="position_want_work"required  size="35" maxlength = "35"></td>
        </tr>
        <tr>
            <td><div align ='left'>24.ความต้องการพัฒนาทักษะ หลักสูตร:</div></td>
            <td><input type="text" name="need_develop_skill"required  size="35" maxlength = "35"></td>
        </tr>

    </table>
    
    25.ความพึงประสงค์ในการเปิดเผยข้อมูลแก่นายจ้าง/สถานประกอบการ เพื่อพิจารณาบรรจุงาน<br>
    <dd><input name="agree" value="0.ไม่ยินยอมเปิดเผยข้อมูล"type="radio">0.ไม่ยินยอมเปิดเผยข้อมูล<br>
        <input name="agree" value="1.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน และประเภทขายประกัน/ขายตรง"type="radio">1.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน และประเภทขายประกัน/ขายตรง<br>
        <input name="agree" value="2.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทขายประกัน/ขายตรง" type="radio">2.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทขายประกัน/ขายตรง<br>
        <input name="agree" value="3.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน" type="radio">3.ยินยอมเปิดเผยข้อมูลยกเว้นนายจ้างประเภทจ้างเหมาแรงงาน<br>
        <input name="agree" value="4.ยินยอมเปิดเผยข้อมูลต่อนายจ้างทุกประเภท" type="radio">4.ยินยอมเปิดเผยข้อมูลต่อนายจ้างทุกประเภท<br>
    </dd>
    26.การศึกษาต่อ
    <dd><input name="continuing_education" value="1.ต้องการศึกษาต่อ" type="radio">1.ต้องการศึกษาต่อ (ข้ามไปตอนที่ 4)<br>
        <input name="continuing_education" value="2.ไม่ต้องการศึกษาต่อ" type="radio">2.ไม่ต้องการศึกษาต่อ (ข้ามไปตอนที่ 5)<br>

     </dd> <br><br><br>
     <div align = "right"><input type="submit" name="questions_3" value="ถัดไป"></div>
 </fieldset>
 </form>
 </body>






















</html>