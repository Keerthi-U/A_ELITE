<?php
include_once("db.php");
$id =$_POST['id'];
$form_type = $_POST['form_type'];
// General form
$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$disablity = $_POST['disablity'];
$type_of_disability = $_POST['type_of_disability'];
$fathername = $_POST['fathername'];
$mothername= $_POST['mothername'];
$contactnumber= $_POST['contactnumber'];
$address= $_POST['address'];
$email= $_POST['email'];
$city= $_POST['city'];
$district= $_POST['district'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
// Student  form
$school_name=$_POST['school_name'];
$reg_no=$_POST['reg_no'];
$department=$_POST['department'];
$school_address=$_POST['school_address'];
$mark_percentage=$_POST['mark_percentage'];
$term_semester=$_POST['term_semester'];
$academic_year=$_POST['academic_year'];
$scholarship_category=$_POST['scholarship_category'];
$phone_no=$_POST['phone_no'];
$student_email=$_POST['student_email'];
if($form_type == '1'){
  $account_no=$_POST['account_no1'];
  $bank_name=$_POST['bank_name1'];
  $ifsc_code=$_POST['ifsc_code1'];
  $aadhar_number=$_POST['aadhar_number1'];
}else{
  $account_no=$_POST['account_no'];
  $bank_name=$_POST['bank_name'];
  $ifsc_code=$_POST['ifsc_code'];
  $aadhar_number=$_POST['aadhar_number'];
}
// medical form
$hospital_name=$_POST['hospital_name'];
$disease_select=$_POST['disease_select'];
$disease_name=$_POST['disease_name'];
$severity_disease=$_POST['severity_disease'];
$admission_date=$_POST['admission_date'];
$approximate_expense=$_POST['approximate_expense'];
$request_amount=$_POST['request_amount'];
$insurance_scheme=$_POST['insurance_scheme'];
$government=$_POST['government'];
$private=$_POST['private'];
$graduate =  $_POST['graduate'];
$orphan =$_POST['orphan'];
$guardian_name =$_POST['guardian_name'];
$updated_at=  $created_on   = date('Y-m-d H:i:s');
$images_names = array();
echo $update_sql="UPDATE scholarship_table SET 
 `fullname`='$fullname',
 `dob`='$dob',
 `gender`='$gender',
 `disablity`='$disablity',
 `type_of_disability`='$type_of_disability',
 `fathername`='$fathername',
 `mothername`='$mothername',
 `contactnumber`='$contactnumber',
 `address`='$address',
 `email`='$email',
 `city`='$city',
 `district`='$district',
 `state`='$state',
 `pincode`='$pincode',
 `school_name`='$school_name',
 `reg_no`='$reg_no',
 `department`='$department',
 `school_address`='$school_address',
 `mark_percentage`='$mark_percentage',
 `term_semester`='$term_semester',
 `academic_year`='$academic_year',
 `scholarship_category`='$scholarship_category',
 `phone_no`='$phone_no',
 `student_email`='$student_email',
 `account_no`='$account_no',
 `bank_name`='$bank_name',
 `ifsc_code`='$ifsc_code',
 `aadhar_number`='$aadhar_number',
 `hospital_name`='$hospital_name',
 `disease_select`='$disease_select',
 `severity_disease`='$severity_disease',
 `admission_date`='$admission_date',
 `approximate_expense`='$approximate_expense',
 `request_amount`='$request_amount',
 `insurance_scheme`='$insurance_scheme',
 `government`='$government',
 `private`='$private',
 `graduate`='$graduate',
 `orphan`='$orphan',
 `guardian_name`='$guardian_name',
 `updated_at`='$updated_at'
 WHERE id=$id";
$result = mysqli_query($conn,$update_sql);
// $lastid = mysqli_insert_id($conn); 
// $last_row = mysqli_insert_id($conn);
// echo "last id : ".$last_row; 
if($id > 0){

       if($form_type == '1'){
        $uploadFolder = '../previous_marksheet/';
        foreach ($_FILES['previous_marksheet']['tmp_name'] as $key => $image) {
        $imageTmpName = $_FILES['previous_marksheet']['tmp_name'][$key];
        $imageName = $_FILES['previous_marksheet']['name'][$key];
        $extension=end(explode(".", $imageName));
        $newimage=time().uniqid(rand()).".".$extension;
        $result = move_uploaded_file($imageTmpName,$uploadFolder.$newimage);
     
        if($newimage != ''){
          $images_names[] = $newimage;
        }
        }
        $uploadFolder1 = '../bank_attachment/';
        foreach ($_FILES['bank_attachment1']['tmp_name'] as $key => $image) {
        $imageTmpName1 = $_FILES['bank_attachment1']['tmp_name'][$key];
        $imageName1 = $_FILES['bank_attachment1']['name'][$key];
        $extension1=end(explode(".", $imageName1));
        $newimage1=time().uniqid(rand()).".".$extension1;
        $result1 = move_uploaded_file($imageTmpName1,$uploadFolder1.$newimage1);
        if($newimage1 != ''){
          array_push($images_names,$newimage1);
        }
       
      
        print_r($images_names);
        }
        }else{
        $uploadFolder2 = '../hospital_report/';
        foreach ($_FILES['hospital_report']['tmp_name'] as $key => $image) {
        $imageTmpName2 = $_FILES['hospital_report']['tmp_name'][$key];
        $imageName2 = $_FILES['hospital_report']['name'][$key];
        $extension2=end(explode(".", $imageName2));
        $newimage2=time().uniqid(rand()).".".$extension2;
        $result2 = move_uploaded_file($imageTmpName2,$uploadFolder2.$newimage2);
        if($newimage2 != ''){
          $images_names[] = $newimage2;
        }
        //$images_names[] = $imageName2;
        // array_push($images_names,$imageName2);
        }
        $uploadFolder3 = '../previous_medical_report/';
        foreach ($_FILES['previous_medical_report']['tmp_name'] as $key => $image) {
        $imageTmpName3 = $_FILES['previous_medical_report']['tmp_name'][$key];
        $imageName3 = $_FILES['previous_medical_report']['name'][$key];
        $extension3=end(explode(".", $imageName3));
        $newimage3=time().uniqid(rand()).".".$extension3;
        $result3 = move_uploaded_file($imageTmpName3,$uploadFolder3.$newimage3);
        if($newimage3 != ''){
          array_push($images_names,$newimage3);
        }
       // $images_names[] = $imageName3;
        }
        $uploadFolder4 = '../bank_attachment/';
        foreach ($_FILES['bank_attachment']['tmp_name'] as $key => $image) {
        $imageTmpName4 = $_FILES['bank_attachment']['tmp_name'][$key];
        $imageName4 = $_FILES['bank_attachment']['name'][$key];
        $extension4=end(explode(".", $imageName4));
        $newimage4=time().uniqid(rand()).".".$extension4;
        $result4 = move_uploaded_file($imageTmpName4,$uploadFolder4.$newimage4);
        if($newimage4 != ''){
          array_push($images_names,$newimage4);
        }
        }
      }
     
      for($i=0; $i<count($images_names);$i++){
  
        echo $query1 = "INSERT into `doc_attachment`(`img_id`,`attach_images`,`created_at`, `updated_at`) VALUES ('$id','$images_names[$i]','$created_at','$updated_at')";
        $resultin= mysqli_query($conn,$query1);
     
         }
  
        echo $orphan;
        if($orphan == "no")
        {
        for($i=0; $i<count($_POST['name']);$i++){
          $s_id = $_POST['student_id'][$i];
          $name =  $_POST['name'][$i];
          $age=$_POST['age'][$i];
          $genders=$_POST['genders'][$i];
          $relation=$_POST['relation'][$i];
          $martial_status=$_POST['martial_status'][$i];
          $qualification=$_POST['qualification'][$i];
          $occupation=$_POST['occupation'][$i];
          $annual_income=$_POST['annual_income'][$i];
            
          echo $sql="UPDATE family_information SET 
          `name`='$name',
          `age`='$age',
          `genders`='$genders',
          `relation`='$relation',
          `martial_status`='$martial_status',
          `qualification`='$qualification',
          `occupation`='$occupation',
          `annual_income`='$annual_income',
           `updated_at`='$updated_at' WHERE `student_id`='$id' and `s_id` = '$s_id'";
          $total = mysqli_query($conn,$sql);
          $income="500";
           // relation
          if($_POST['relation'][$i] == '1'){
            echo 'match';
            if ($annual_income < 1000) {
                $ra ="1";
                echo "Match Found";
                }else{
                    echo "Not Found";
                      }
              }else{
                  echo "Not Match";
              }
             // single parent
              if($_POST['martial_status'][$i] == '4'){
                $s="1";
              }
             }
          }
            // orphan
          if($orphan == "yes"){
            $or="1";
          }
            //  disability
            if($disablity == "yes"){
                $a = "1";
            }
            // insurance 
            if($insurance_scheme == "no"){
              $b = "1";
            }
            // mark_percentage
            if($mark_percentage > 70){
              $m = "1";
            }
            // first_graduate
            if($graduate == "yes"){
              $g="1";
            }
             // severity_disease
            if($severity_disease == '4'){
               $sd= "1";
            }
         
        
        echo  $a;
        echo  $b;
        echo $ra;
        echo $s;
        echo $m;
        echo $g;
        echo $c = $a+$b+$ra+$s+$m+$g+$sd+$or;
        
            echo $sql="UPDATE  `scholarship_table` set ratings='$c' WHERE id ='$id'";
            $total = mysqli_query($conn,$sql);
             } 


?>