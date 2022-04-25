<?php
include("db.php");
$form_name = $_POST['form_name'];
if($form_name == 'sequence_no'){
    $select_id = $_POST['select_id'];
    if($select_id == "1"){
        $string = "STU";
    }else{
        $string = "MED";
    }
    $year = date('Y') ;
    $nextyear = date('Y') + 1;
    $query = mysqli_query($conn,"select *from application_no where id='$select_id'");
    $res = mysqli_fetch_assoc($query);
    $id = $res['application_number'];
    $seq_id = sprintf('%05d', $id);
    $application_id = $string."/".$year."-".$nextyear."/".$seq_id;
    echo $application_id;
}

if($form_name == 'application_status'){
    $output = '';
    $id = $_POST['id'];
    $query = mysqli_query($conn,"select *from scholarship_table where created_by='$id' ");
    $res_query = mysqli_fetch_assoc($query);
    $application_id = $res_query['application_id'];
    if($res_query['approved_status'] == '' ||  $res_query['approved_status'] == '1' ){
        $status = 'Pending';
        $color = 'text-info';
    }elseif($res_query['approved_status'] == '2'){
        $status = 'Approved';
        $color = 'text-success';
    }else{
        $status = 'Rejected';
        $color = 'text-danger';

    }   
    $output .=' <p>Application Id : '.$application_id.'</p>
    <p >Application Status:<span class='.$color.'>  '.$status.'</span></p>';

    echo $output;
}


?>