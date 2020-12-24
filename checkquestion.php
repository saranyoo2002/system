<?php
    include('condb.php');
    session_start();  
?>
<?php


    //  $university = mysqli_real_escape_string($conn, $_POST['university']);
    if(isset($_POST['question'])){


        $_SESSION['university']=$_POST['university'];
        $university=$_SESSION['university'];

        $_SESSION['branch']=$_POST['branch'];
        $branch=$_SESSION['branch'];

        $_SESSION['facuity']=$_POST['facuity'];
        $facuity=$_SESSION['facuity'];

        $_SESSION['course']=$_POST['course'];
        $course=$_SESSION['course'];

        $_SESSION['prefix']=$_POST['prefix'];
        $prefix=$_SESSION['prefix'];

        $_SESSION['first_name']=$_POST['first_name'];
         $first_name=$_SESSION['first_name'];

        $_SESSION['sur_name']=$_POST['sur_name'];
        $sur_name=$_SESSION['sur_name'];

        $_SESSION['id_card']=$_POST['id_card'];
        $id_card=$_SESSION['id_card'];

        $_SESSION['id_student']=$_POST['id_student'];
        $id_student=$_SESSION['id_student'];

        $_SESSION['datex']=$_POST['datex'];
        $datex=$_SESSION['datex'];

        $_SESSION['gpa']=$_POST['gpa'];
        $gpa=$_SESSION['gpa'];

        $_SESSION['name_address']=$_POST['name_address'];
        $name_address=$_SESSION['name_address'];

        $_SESSION['id_house']=$_POST['id_house'];
        $id_house=$_SESSION['id_house'];

        $_SESSION['house_number']=$_POST['house_number'];
        $house_number=$_SESSION['house_number'];

        $_SESSION['village_number']=$_POST['village_number'];
        $village_number=$_SESSION['village_number'];

        $_SESSION['alley']=$_POST['alley'];
        $alley=$_SESSION['alley'];

        $_SESSION['road']=$_POST['road'];
        $road=$_SESSION['road'];

        $_SESSION['sub_district']=$_POST['sub_district'];
        $sub_district=$_SESSION['sub_district'];

        $_SESSION['district']=$_POST['district'];
        $district=$_SESSION['district'];

        $_SESSION['province']=$_POST['province'];
        $province=$_SESSION['province'];

        $_SESSION['postal_code']=$_POST['postal_code'];
        $postal_code=$_SESSION['postal_code'];

        $_SESSION['telephone_number']=$_POST['telephone_number'];
        $telephone_number=$_SESSION['telephone_number'];

        $_SESSION['email']=$_POST['email'];
        $email=$_SESSION['email'];

        $_SESSION['address']=$_POST['address'];
        $address=$_SESSION['address'];

        if($_POST['prefix']=="นาง"||$_POST['prefix']=="นางสาว"){

          $_SESSION['Enlist']=null;
          $Enlist=null;

          $_SESSION['priest']=null;
          $priest=null;

        }else{
        
          $Enlist=$_POST['Enlist'];
          $_SESSION['Enlist']=$_POST['Enlist'];

          $priest=$_POST['priest'];
          $_SESSION['priest']=$_POST['priest'];
        }
       
        $_SESSION['work_present']=$_POST['work_present']; 
        $work_present=$_SESSION['work_present'];

        $id_login= $_SESSION['id_login'];

        mysqli_query($conn,"INSERT INTO `member`(`id_member`, `id_login`, `facuity`, `course`, `branch`, `university`, `prefix`, `first_name`, `sur_name`, `id_student`, `id_card`, `datex`, `gpa`, `name_address`, `id_house`, `house_number`, `village_number`, `alley`, `road`, `sub_district`, `district`, `province`, `postal_code`, `telephone_number`, `email`, `address`, `enlist`, `priest`, `work_present`) VALUES 
                                                    (NULL,'$id_login', '$facuity', '$course', '$branch', '$university', '$prefix', '$first_name', '$sur_name', '$id_student', '$id_card', '$datex', '$gpa', '$name_address', '$id_house','$house_number', '$village_number', '$alley', '$road', '$sub_district', '$district','$province', '$postal_code', '$telephone_number', '$email', '$address', '$Enlist', '$priest', '$work_present')");

       
            if(mysqli_affected_rows($conn)>0){
            echo "<script>";
             echo "alert(\"บันทึกข้อมูลเรียบร้อย\");"; 
            echo "window.history.back()";
            echo "</script>";
            }else{
                echo "<script>";
                echo "alert(\"บันทึกข้อมูลไม่สำเร็จ\");"; 
                echo "window.history.back()";
                echo "</script>";
                echo mysqli_error($conn);
            } 

        if($_SESSION['work_present']=="ยังไม่มีงานทำ"){
            Header("Location:question3.php");

        }
        else if($_SESSION['work_present']=="ยังไม่มีงานทำ และกำลังศึกษาต่อ"){
            Header("Location:question4.php");
        }

        else{
            Header("Location:question2.php");
        }
      }
    

     if(isset($_POST['questions'])){

        $_SESSION['type_work_have'] = $_POST['type_work_have'];
        $type_work_have=$_SESSION['type_work_have'];

        $_SESSION['work_done_have']=$_POST['work_done_have'];
        $work_done_have=$_SESSION['work_done_have'];

        $_SESSION['work_done_cause_have']=$_POST['work_done_cause_have'];
        $work_done_cause_have=$_SESSION['work_done_cause_have'];

        $_SESSION['charisma_have']=$_POST['charisma_have'];
        $charisma_have=$_SESSION['charisma_have'];
        
        $_SESSION['name_work_position_have']=$_POST['name_work_position_have'];
        $name_work_position_have=$_SESSION['name_work_position_have'];

        $_SESSION['name_organization_have']=$_POST['name_organization_have'];
        $name_organization_have=$_SESSION['name_organization_have'];

        $_SESSION['type_of_business_have']=$_POST['type_of_business_have'];
        $type_of_business_have=$_SESSION['type_of_business_have'];

        $_SESSION['country_have']=$_POST['country_have'];
        $country_have=$_SESSION['country_have'];

        $_SESSION['network_country_have']=$_POST['network_country_have'];
        $network_country_have= $_SESSION['network_country_have'];

        $_SESSION['building_have']=$_POST['building_have'];
        $building_have=$_SESSION['building_have'];

        $_SESSION['location_number_have']=$_POST['location_number_have'];
        $location_number_have=$_SESSION['location_number_have'];

        $_SESSION['village_number_have']=$_POST['village_number_have'];
        $village_number_have=$_SESSION['village_number_have'];

        $_SESSION['alley_have']=$_POST['alley_have'];
        $alley_have=$_SESSION['alley_have'];

        $_SESSION['road_have']=$_POST['road_have'];
        $road_have=$_SESSION['road_have'];

        $_SESSION['sub_district_have']=$_POST['sub_district_have'];
        $sub_district_have=$_SESSION['sub_district_have'];

        $_SESSION['district_have']=$_POST['district_have'];
        $district_have=$_SESSION['district_have'];

        $_SESSION['province_have']=$_POST['province_have'];
        $province_have=$_SESSION['province_have'];

        $_SESSION['postal_code_have']=$_POST['postal_code_have'];
        $postal_code_have=$_SESSION['postal_code_have'];

        $_SESSION['telephone_number_have']=$_POST['telephone_number_have'];
        $telephone_number_have=$_SESSION['telephone_number_have'];

        $_SESSION['fax_have']=$_POST['fax_have'];
        $fax_have=$_SESSION['fax_have'];

        $_SESSION['email_have']=$_POST['email_have'];
        $email_have=$_SESSION['email_have'];

        $_SESSION['line_manager_have']=$_POST['line_manager_have'];
        $line_manager_have= $_SESSION['line_manager_have'];

        $_SESSION['telephone_manager_have']=$_POST['telephone_manager_have'];
        $telephone_manager_have=$_SESSION['telephone_manager_have'];

        $_SESSION['email_manager_have']=$_POST['email_manager_have'];
        $email_manager_have=$_SESSION['email_manager_have'];

        $_SESSION['salaly_have']=$_POST['salaly_have'];
        $salaly_have= $_SESSION['salaly_have'];


        if(isset($_POST['satisfaction_have'])){
          $_SESSION['satisfaction_have']=$_POST['satisfaction_have'];
          $satisfaction_have=$_SESSION['satisfaction_have'];

        }else{
          $_SESSION['satisfaction_have']=null;
          $satisfaction_have=null;

        }

        if(isset($_POST['cause_satisfaction_have'])){
          $_SESSION['cause_satisfaction_have']=$_POST['cause_satisfaction_have'];
          $cause_satisfaction_have=$_SESSION['cause_satisfaction_have'];

        }else{
          $_SESSION['cause_satisfaction_have']=null;
          $cause_satisfaction_have=null;
        }
        
        $_SESSION['working_period_have']=$_POST['working_period_have'];
        $working_period_have=$_SESSION['working_period_have'];
    
        $_SESSION['job_description_have']=$_POST['job_description_have'];
        $job_description_have=$_SESSION['job_description_have'];

        $_SESSION['apply_knowledge_have']=$_POST['apply_knowledge_have'];
        $apply_knowledge_have=$_SESSION['apply_knowledge_have'];

        $_SESSION['continueing_education_have']=$_POST['continueing_education_have'];
        $continueing_education_have= $_SESSION['continueing_education_have'];


        mysqli_query($conn,"INSERT INTO `have_job` (`id_have_job`, `id_member`, `type_work`, `work_done`, `charisma`) VALUES 
                                                       (NULL, NULL,'$type_work_have','$work_done_have','$charisma_have')");


        mysqli_query($conn,"INSERT INTO `work_done_cause` (`id_cause`, `id_have_job`, `id_member`, `work_done_cause`) VALUES 
                                                          (NULL, NULL, NULL, '$work_done_cause_have')");


        mysqli_query($conn,"INSERT INTO `location_work` (`name_work_position`, `name_organization`,`type_of_business`,`country`, `network_country`, `building`, `location_number`, `village_number`, `alley`, `road`, `sub_district`, `district`, `province`, `postal_code`, `telephone_number`, `fax`, `email`, `line_manager`, `telephone_manager`, `email_manager`, `salaly`, `satisfaction`, `working_period`, `job_description`, `apply_knowladge`, `continueting_education`) VALUES 
                                                            ('$name_work_position_have','$name_organization_have','$type_of_business_have','$country_have','$network_country_have','$building_have','$location_number_have','$village_number_have','$alley_have','$road_have','$sub_district_have','$district_have','$province_have','$postal_code_have','$telephone_number_have','$fax_have','$email_have','$line_manager_have','$telephone_manager_have','$email_manager_have','$salaly_have','$satisfaction_have','$working_period_have','$job_description_have','$apply_knowledge_have','$continueing_education_have')");

        if(mysqli_affected_rows($conn)>0){
          echo "<script>";
          echo "alert(\"บันทึกข้อมูลเรียบร้อย\");"; 
          echo "window.history.back()";
          echo "</script>";
        }else{
          echo "<script>";
          echo "alert(\"บันทึกข้อมูลไม่สำเร็จ\");"; 
          echo "window.history.back()";
          echo "</script>";
          echo mysqli_error($conn);
        } 

        if($_SESSION['continueing_education']=="ต้องการศึกษาต่อ"){

            Header("Location:question_4.php");
        }else{

            Header("Location:question_5.php");
        }


     }
      //ตอน 3 
     if(isset($_POST['questions_3'])){
        $_SESSION['cause_not_work']=$_POST['cause_not_work'];
        if(isset($_POST['not_cause'])){
          $_SESSION['not_cause']=$_POST['not_cause'];
          $_SESSION['gpa_is_not_due']=null;
          $_SESSION['lack_of_experience']=null;
          $_SESSION['lack_of_computer_skill']=null;
          $_SESSION['lack_of_foreign_language_skill']=null;
          $_SESSION['health_problem']=null;
          $_SESSION['the_entrance_exam_connot_work']=null;
          $_SESSION['low_salary']=null;
          $_SESSION['agency_does_not_want']=null;
          $_SESSION['lack_of_people_or_money']=null;
          $_SESSION['lack_of_support']=null;
          $_SESSION['have_to_exam']=null;
          $_SESSION['i_cant_fine_myjob']=null;
          $_SESSION['source_of_work_unknow']=null;
          $_SESSION['other']=null;
        }else{
          $_SESSION['not_cause']=null;
        }
        if(isset($_POST['gpa_is_not_due'])){
          $_SESSION['gpa_is_not_due']=$_POST['gpa_is_not_due'];
        }
        else{
          $_SESSION['gpa_is_not_due']=null;   
        }
        if(isset($_POST['lack_of_experience'])){
          $_SESSION['lack_of_experience']=$_POST['lack_of_experience'];
        }
        else{
          $_SESSION['lack_of_experience']=null;
        }
        if(isset($_POST['lack_of_computer_skill'])){
          $_SESSION['lack_of_computer_skill']=$_POST['lack_of_computer_skill'];
        }
        else{
          $_SESSION['lack_of_computer_skill']=null;
        }
        if(isset($_POST['lack_of_foreign_language_skill'])){
          $_SESSION['lack_of_foreign_language_skill']=$_POST['lack_of_foreign_language_skill'];
        }
        else{
          $_SESSION['lack_of_foreign_language_skill']=null;
        }

        if(isset($_POST['health_problem'])){
          $_SESSION['health_problem']=$_POST['health_problem'];
          
        }
        else{
          $_SESSION['health_problem']=null;
        }

        if(isset($_POST['the_entrance_exam_connot_work'])){
          $_SESSION['the_entrance_exam_connot_work']=$_POST['the_entrance_exam_connot_work'];
        }
        else{
          $_SESSION['the_entrance_exam_connot_work']=null;
        }
      
        if(isset($_POST['low_salary'])){
          $_SESSION['low_salary']=$_POST['low_salary'];
        }
        else{
          $_SESSION['low_salary']=null;
        }
     
        if(isset($_POST['agency_does_not_want'])){
          $_SESSION['agency_does_not_want']=$_POST['agency_does_not_want'];
        }
        else{
          $_SESSION['agency_does_not_want']=null;
        }

        if(isset($_POST['lack_of_people_or_money'])){

          $_SESSION['lack_of_people_or_money']=$_POST['lack_of_people_or_money'];
        }
        else{
          $_SESSION['lack_of_people_or_money']=null;
        }
  
        if(isset($_POST['lack_of_support'])){
          $_SESSION['lack_of_support']=$_POST['lack_of_support'];

        }else{
          $_SESSION['lack_of_support']=null;
        }

        if(isset($_POST['have_to_exam'])){
          $_SESSION['have_to_exam']=$_POST['have_to_exam'];

        }else{
          $_SESSION['have_to_exam']=null;
        }

        if(isset($_POST['i_cant_fine_myjob'])){
          $_SESSION['i_cant_fine_myjob']=$_POST['i_cant_fine_myjob'];

        }else{
          $_SESSION['i_cant_fine_myjob']=null;
        }
        
        if(isset($_POST['source_of_work_unknow'])){
          $_SESSION['source_of_work_unknow']=$_POST['source_of_work_unknow'];

        }else{
          $_SESSION['source_of_work_unknow']=null;
        }

        if(isset($_POST['other'])){
          $_SESSION['other']=$_POST['other'];

        }else{
          $_SESSION['other']=null;
        }

        $_SESSION['work_requirement']=$_POST['work_requirement'];
        $_SESSION['country_want_work']=$_POST['country_want_work'];
        $_SESSION['position_want_work']=$_POST['position_want_work'];
        $_SESSION['need_develop_skill']=$_POST['need_develop_skill'];
        $_SESSION['agree']=$_POST['agree'];
        $_SESSION['continuing_education']=$_POST['continuing_education'];

        if($_SESSION['continuing_education']=="ต้องการศึกษาต่อ"){
           Header("Location:question_4.php");
        }
        if($_SESSION['continuing_education']=="ไม่ต้องการศึกษาต่อ"){
           Header("Location:question_5.php");
        }
      }






     if(isset($_POST['questtions_4'])){
        $_SESSION['level']=$_POST['level'];
        $_SESSION['house_number_con']=$_POST['house_number_con'];
        $_SESSION['village_number_con']=$_POST['village_number_con'];
        $_SESSION['building_con']=$_POST['building_con'];
        $_SESSION['alley_con']=$_POST['alley_con'];
        $_SESSION['road_con']=$_POST['road_con'];
        $_SESSION['sub_district_con']=$_POST['sub_district_con'];
        $_SESSION['district_con']=$_POST['district_con'];
        $_SESSION['province_con']=$_POST['province_con'];
        $_SESSION['country_con']=$_POST['country_con'];
        $_SESSION['postal_code_con']=$_POST['postal_code_con'];
        $_SESSION['telephone_number_con']=$_POST['telephone_number_con'];
        $_SESSION['road_con']=$_POST['road_con'];
        $_SESSION['fax_con']=$_POST['fax_con'];
        $_SESSION['email_con']=$_POST['email_con'];
        $_SESSION['branch_con']=$_POST['branch_con'];
        $_SESSION['type_con']=$_POST['type_con'];
        $_SESSION['reason_con']=$_POST['reason_con'];
        $_SESSION['not_cause_con']=$_POST['not_cause_con'];
        $_SESSION['cause_con1']=$_POST['cause_con1'];
        $_SESSION['cause_con2']=$_POST['cause_con2'];
        $_SESSION['cause_con3']=$_POST['cause_con3'];
        $_SESSION['cause_con4']=$_POST['cause_con4'];
        
          heaer('location:question_5.php');
      }

     if(isset($_POST['questions_5'])){
        $_SESSION['q1']=$_POST['q1'];
        $_SESSION['q2']=$_POST['q2'];
        $_SESSION['q3']=$_POST['q3'];
        $_SESSION['q4']=$_POST['q4'];
        $_SESSION['q5']=$_POST['q5'];
        $_SESSION['q6']=$_POST['q6'];
        $_SESSION['q7']=$_POST['q7'];
        $_SESSION['q8']=$_POST['q7'];
        $_SESSION['q9']=$_POST['q9'];
        $_SESSION['q10']=$_POST['q10'];
        $_SESSION['q11']=$_POST['q11'];
        $_SESSION['q12']=$_POST['q12'];
        $_SESSION['q13']=$_POST['q13'];
        $_SESSION['q14']=$_POST['q14'];
        $_SESSION['q15']=$_POST['q15'];
        $_SESSION['q16']=$_POST['q16'];
        $_SESSION['q17']=$_POST['q17'];
        $_SESSION['q18']=$_POST['q18'];
        $_SESSION['q19']=$_POST['q19'];
        $_SESSION['q20']=$_POST['q20'];
        $_SESSION['q21']=$_POST['q21'];
        $_SESSION['q22']=$_POST['q22'];
        $_SESSION['q23']=$_POST['q23'];
        $_SESSION['q24']=$_POST['q24'];
        $_SESSION['q25']=$_POST['q25'];
        header('location:question_6.php');

    }

    if(isset($_POST['questions_6'])){
      $_SESSION['academic']=$_POST['academic'];
      $_SESSION['practice']=$_POST['practice'];
      $_SESSION['moral']=$_POST['moral'];
      $_SESSION['pride_1']=$_POST['pride_1'];
      $_SESSION['pride_2']=$_POST['pride_2'];
      $_SESSION['pride_3']=$_POST['pride_3'];
      $_SESSION['pride_4']=$_POST['pride_4'];
      $_SESSION['name_award']=$_POST['name_award'];
      $_SESSION['agency_award']=$_POST['agency_award'];
      $_SESSION['date_award']=$_POST['date_award'];
      $_SESSION['type_award']=$_POST['type_award'];
      $_SESSION['level_award']=$_POST['level_award'];
      $_SESSION['improve']=$_POST['improve'];
      $_SESSION['suggestion_course']=$_POST['suggestion_course'];
      $_SESSION['suggestion_study']=$_POST['suggestion_study'];
      $_SESSION['suggestion_activity']=$_POST['suggestion_activity'];
      header('location:showdetailquestion.php');
    }


        // mysqli_query($conn,"INSERT INTO member(university,facuity,branch,course,prefix,first_name,sur_name,
        // id_card,id_student,datex,gpa,name_address,id_house,house_number,village_number,road,
        // sub_district,district,province,postal_code,telephone_number,address,Enlist,priest,work_present,alley,email)
        // VALUES ('$university','$facuity','$branch','$course','$prefix','$first_name',' $sur_name','$id_card',
        // '$id_student',' $datex',' $gpa','$name_address','$id_house','$house_number','$village_number',
        // '$road','$sub_district','$district','$province','$postal_code','$telephone_number',
        // '$address',' $Enlist','$priest','$work_present',$alley,$email)");

        // if(mysqli_affected_rows($conn)>0){
        //     echo "<script>";
        //     echo "alert(\"บันทึกข้อมูลเรียบร้อย\");"; 
        //     echo "window.history.back()";
        //     echo "</script>";
        //  }else{
        //     echo "<script>";
        //     echo "alert(\"บันทึกข้อมูลไม่สำเร็จ\");"; 
        //     echo "window.history.back()";
        //     echo "</script>";
        //     echo mysqli_error($conn);
        // } 

    

    

    
?>
