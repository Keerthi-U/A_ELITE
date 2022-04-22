<?php
include("db.php");
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

?>