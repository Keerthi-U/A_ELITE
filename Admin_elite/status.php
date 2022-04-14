<?php
include_once("db.php");
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

?>