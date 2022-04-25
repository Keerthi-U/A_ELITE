<?php
session_start();
include_once("db.php");
$user_id = $_SESSION['user_id'];
if(isset($_POST['valueSelected'])){
$select_id = $_POST['valueSelected'];
$row_id = $_POST['rowid'];
// echo $select_id;
// echo $row_id;

     $sql="UPDATE  `scholarship_table` set approved_status='$select_id' WHERE id ='$row_id'";
     $total = mysqli_query($conn,$sql);
     //echo "Status Approved";
     if($select_id == '1'){
          echo "Pending";
    }elseif($select_id =='2'){
          echo "Approved";
    }else{
         echo "Rejected";
    }
}
if(isset($_POST['payment_id'])){
    $payment_id = $_POST['payment_id'];
//     echo $payment_id;
  $pay_sql="select account_no,bank_name,ifsc_code from scholarship_table where id =".$payment_id;
   $pay_result=mysqli_query($conn,$pay_sql);
   $bank_details=array();
   while($data=mysqli_fetch_array($pay_result)){

          $bank_details['account_no'] = $data['account_no'];
          $bank_details['bank_name'] = $data['bank_name'];
          $bank_details['ifsc_code']= $data['ifsc_code'];
  }
  echo json_encode($bank_details);
}

if(isset($_POST["date"])){
     $date = $_POST['date'];
  
     $approved_select = $_POST['applicant_id'];
     $account_number = $_POST['account_number'];
     $bank_name = $_POST['bank_name'];
     $ifsc_code = $_POST['ifsc_code'];
     $payment_mode = $_POST['payment_mode'];
     $amount = $_POST['amount'];
     $cheque_number = $_POST['cheque_number'];
     $reference_number = $_POST['reference_number'];
     $recommended_by = $_POST['recommended_by'];
     $comments = $_POST['comments'];
     $created_at   = date('Y-m-d H:i:s');
     $updated_at=  $created_on   = date('Y-m-d H:i:s');
      $query = "INSERT into `payment`(`date`,`applicant_id`,`account_number`,`bank_name`,`ifsc_code`,`amount`,`payment_mode`,`cheque_number`,`reference_number`,`recommended_by`,`comments`,`created_at`,`created_by`,`updated_at`) VALUES ('$date','$approved_select','$account_number','$bank_name','$ifsc_code','$amount','$payment_mode','$cheque_number','$reference_number','$recommended_by','$comments','$created_at','$user_id','$updated_at')";
     $result = mysqli_query($conn,$query);
      echo "Payment Successful";
 
 }
?>