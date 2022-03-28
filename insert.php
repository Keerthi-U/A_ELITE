<?php
// session_start();
include('db.php');

   
// general information

  //  $selected=$_POST['select']; 
  //     var_dump($selected);
// $id=$_POST['id'];
 $form_type = $_POST['form_type'];
 $fullname = $_POST['fullname'];
//  echo"$fullname";
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$disablity = $_POST['disablity'];
$type_of_disability = $_POST['type_of_disability'];


// echo $gender;
 $fathername = $_POST['fathername'];
 $mothername= $_POST['mothername'];
 $contactnumber= $_POST['contactnumber'];
 $address= $_POST['address'];
 $email= $_POST['email'];
 $city= $_POST['city'];
 $district= $_POST['district'];
 $state=$_POST['state'];
 $pincode=$_POST['pincode'];

// student information 
// $image=$_FILES['user_imag']['tmp_name'];
$school_name=$_POST['school_name'];
$reg_no=$_POST['reg_no'];
$department=$_POST['department'];
$school_address=$_POST['school_address'];
$mark_percentage=$_POST['mark_percentage'];
print_r($mark_percentage);
// exit();

$previous_marksheet = $_FILES["previous_marksheet"]["name"];
$pm_tempname = $_FILES["previous_marksheet"]["tmp_name"];	
$pm_folder = "previous_marksheet/".$previous_marksheet;

$term_semester=$_POST['term_semester'];
$academic_year=$_POST['academic_year'];
$scholarship_select=$_POST['scholarship_select'];
$phone_no=$_POST['phone_no'];
$student_email=$_POST['student_email'];


if($form_type == '1'){
  $account_no=$_POST['account_no1'];
  $bank_name=$_POST['bank_name1'];
  $ifsc_code=$_POST['ifsc_code1'];
  $aadhar_number=$_POST['aadhar_number1'];

  $bank_attachment = $_FILES["bank_attachment1"]["name"];
  $tempname = $_FILES["bank_attachment1"]["tmp_name"];	
  $folder = "bank_attachment/".$bank_attachment;
  echo $bank_attachment;



}else{
  $account_no=$_POST['account_no'];
  $bank_name=$_POST['bank_name'];
  $ifsc_code=$_POST['ifsc_code'];
  $aadhar_number=$_POST['aadhar_number'];

  $bank_attachment = $_FILES["bank_attachment"]["name"];
  $tempname = $_FILES["bank_attachment"]["tmp_name"];	
  $folder = "bank_attachment/".$bank_attachment;
  echo $bank_attachment;
}




// Medical form  

$hospital_name=$_POST['hospital_name'];
$disease_select=$_POST['disease_select'];
$disease_name=$_POST['disease_name'];
$severity_disease=$_POST['severity_disease'];
// print_r($severity_disease);

$admission_date=$_POST['admission_date'];
$approximate_expense=$_POST['approximate_expense'];
$request_amount=$_POST['request_amount'];
$hospital_report=$_FILES['hospital_report']['name'];

$hospital_report = $_FILES["hospital_report"]["name"];
$hr_tempname = $_FILES["hospital_report"]["tmp_name"];	
$hr_folder = "hospital_report/".$hospital_report;

$previous_medical_report = $_FILES["previous_medical_report"]["name"];
$mr_tempname = $_FILES["previous_medical_report"]["tmp_name"];	
$mr_folder = "previous_medical_report/".$previous_medical_report;

$insurance_scheme=$_POST['insurance_scheme'];

$government=$_POST['government'];
$private=$_POST['private'];
$graduate =  $_POST['graduate'];
$orphan =$_POST['orphan'];
$guardian_name =$_POST['guardian_name'];


$created_at   = date('Y-m-d H:i:s');
$updated_at=  $created_on   = date('Y-m-d H:i:s');
// $created_by = $_SESSION["logged_user"];

echo $query = "INSERT into `scholarship_table`( `form_type`, `fullname`, `dob`,`gender`,`disablity`,`type_of_disability`,`fathername`, `mothername`, `contactnumber`, `address`, `email`, `city`, `district`, `state`,`pincode`,`school_name`, `reg_no`, `department`, `school_address`, `mark_percentage`, `previous_marksheet`, `term_semester`, `academic_year`, `scholarship_select`, `phone_no`, `student_email`, `account_no`, `bank_name`, `ifsc_code`, `aadhar_number`, `bank_attachment`, `hospital_name`, `disease_select`, `disease_name`, `severity_disease`, `admission_date`, `approximate_expense`, `request_amount`, `hospital_report`, `previous_medical_report`,`insurance_scheme`,`government`,`private`,`graduate`,`orphan`, `guardian_name`, `created_at`, `updated_at`) VALUES ('$form_type','$fullname','$dob','$gender','$disablity','$type_of_disability','$fathername','$mothername','$contactnumber','$address','$email','$city','$district','$state','$pincode','$school_name','$reg_no','$department','$school_address','$mark_percentage','$previous_marksheet','$term_semester','$academic_year','$scholarship_select','$phone_no','$student_email','$account_no','$bank_name','$ifsc_code','$aadhar_number','$bank_attachment',
'$hospital_name','$disease_select','$disease_name','$severity_disease','$admission_date','$approximate_expense','$request_amount','$hospital_report','$previous_medical_report','$insurance_scheme','$government','$private','$graduate','$orphan','$guardian_name','$created_at','$updated_at')";
$result = mysqli_query($conn,$query);
var_dump($result);
 echo 'Files has uploaded'; 
 if (move_uploaded_file($tempname, $folder)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}
if (move_uploaded_file($pm_tempname, $pm_folder)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}
if (move_uploaded_file($mr_tempname, $mr_folder)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}
if (move_uploaded_file($hr_tempname, $hr_folder)) {
  $msg = "Image uploaded successfully";
}else{
  $msg = "Failed to upload image";
}

$lastid = mysqli_insert_id($conn); 
echo "last id : ".$lastid; 
if($lastid > 0){
echo $orphan;

if($orphan == "yes"){
  $or="1";
}

if($orphan == "no")
{
for($i=0; $i<count($_POST['name']);$i++){
 
  $name =  $_POST['name'][$i];
  $age=$_POST['age'][$i];
  $genders=$_POST['genders'][$i];
  $relation=$_POST['relation'][$i];
  $martial_status=$_POST['martial_status'][$i];
  $qualification=$_POST['qualification'][$i];
  $occupation=$_POST['occupation'][$i];
  $annual_income=$_POST['annual_income'][$i];
    
  echo $sql="INSERT INTO `family_information`(`student_id`,`name`,`age`,`genders`,`relation`,`martial_status`,`qualification`,`occupation`,`annual_income`) VALUES ('$lastid','$name','$age','$genders','$relation','$martial_status','$qualification','$occupation','$annual_income')";
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
echo   $b;
echo $ra;
echo $s;
echo $m;
echo $g;
echo $c = $a+$b+$ra+$s+$m+$g+$sd+$or;

    // echo $sql="INSERT INTO `rating`(`rating`) VALUES ('$c')";
    echo $sql="UPDATE  `scholarship_table` set ratings='$c' WHERE id ='$lastid'";
    
    $total = mysqli_query($conn,$sql);
  

}
?>