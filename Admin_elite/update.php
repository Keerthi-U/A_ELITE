<?php
include_once("db.php");

$form_name = $_POST["form_name"];
// $eye_id = $_POST['eye_id'];
// echo $eye_id;
if (isset($_POST['id'])) {
    $id =$_POST['id'];
    echo $id;
    mysqli_query($conn,"DELETE FROM doc_attachment WHERE id IN ($id)");
    echo "Image Deleted";
    
}
if (isset($_POST['del_id'])) {
    $del_id =$_POST['del_id'];
    echo $del_id;
    mysqli_query($conn,"DELETE FROM scholarship_table WHERE id IN ($del_id)");
    mysqli_query($conn,"DELETE FROM family_information WHERE student_id IN ($del_id)");
    mysqli_query($conn,"DELETE FROM doc_attachment WHERE img_id IN ($del_id)");
    echo "DATA Deleted";

}

// previous_attachment
  if($form_name == 'all_attachment'){
    if (isset($_POST['eye_id'])) {
        $output = '';
        $eye_id=$_POST['eye_id'];
        $eye_click_id=$_POST['eye_click_id'];
        // echo $id;
        $query = mysqli_query($conn,"select *from doc_attachment where img_id = '$eye_id' ");
        $img=array();
          while($result=mysqli_fetch_assoc($query)){
             $img[] = $result['attach_images'];
          }
          $output .='<div class="view_imag">';
          if($eye_click_id == "1"){
            for($ik=0; $ik<count($img); $ik++){
                if (file_exists("../previous_marksheet/".$img[$ik])) {
                $output.= "<img src='../previous_marksheet/".$img[$ik]."'  >";
                }
                }
          }else if($eye_click_id == "2"){
              
            for($ik=0; $ik<count($img); $ik++){
                if (file_exists("../bank_attachment/".$img[$ik])) {
                    $output.= "<img src='../bank_attachment/".$img[$ik]."'  >";
                 }
                 }
          }
         
        $output .= '</div>';
        echo $output;
        }
    }
    // bank_attachment
     if($form_name == 'bank_attachment'){
     if (isset($_POST['eye_id'])) {
        $output = '';
        $eye_id=$_POST['eye_id'];
        // echo $id;
        $query = mysqli_query($conn,"select *from doc_attachment where img_id = '$eye_id' ");
        
        $img=array();
         while($result=mysqli_fetch_assoc($query)){
             $img[] = $result['attach_images'];
            }
        
        $output .='<div class="view_imag">';
       
        for($ik=0; $ik<count($img); $ik++){
        if (file_exists("../bank_attachment/".$img[$ik])) {
            $output.= "<img src='../bank_attachment/".$img[$ik]."'  >";
         }
         }
         $output .= '</div>';
         echo $output;
         }
         }
        //  hospital_attachment
     if($form_name == 'hospital_attachment'){
     if (isset($_POST['eye_id'])) {
        $output = '';
        $eye_id=$_POST['eye_id'];
        // echo $id;
        $query = mysqli_query($conn,"select *from doc_attachment where img_id = '$eye_id' ");
        $img=array();
         while($result=mysqli_fetch_assoc($query)){
             $img[] = $result['attach_images'];
            }
        $output .='<div class="view_imag">';
        for($ik=0; $ik<count($img); $ik++){
        if (file_exists("../hospital_report/".$img[$ik])) {
            $output.= "<img src='../hospital_report/".$img[$ik]."'  >";
    
        }
        }
        $output .= '</div>';
        echo $output;
        }
        }
        // previous_medical_report
        if($form_name == 'previous_medical_report'){
        if (isset($_POST['eye_id'])) {
        $output = '';
        $eye_id=$_POST['eye_id'];
        // echo $id;
        $query = mysqli_query($conn,"select *from doc_attachment where img_id = '$eye_id' ");
        $img=array();
        while($result=mysqli_fetch_assoc($query)){
            $img[] = $result['attach_images'];
            }
        $output .='<div class="view_imag">';
        for($ik=0; $ik<count($img); $ik++){
        if (file_exists("../previous_medical_report/".$img[$ik])) {
            $output.= "<img src='../previous_medical_report/".$img[$ik]."'  >";
    
        }
        }
        $output .= '</div>';
        echo $output;
        }
        }
        // medical_bank_attachment
        if($form_name == 'medical_bank_attachment'){
        if (isset($_POST['eye_id'])) {
        $output = '';
        $eye_id=$_POST['eye_id'];
        // echo $id;
        $query = mysqli_query($conn,"select *from doc_attachment where img_id = '$eye_id' ");
        $img=array();
        while($result=mysqli_fetch_assoc($query)){
            $img[] = $result['attach_images'];
            }
        $output .='<div class="view_imag">';
        for($ik=0; $ik<count($img); $ik++){
        if (file_exists("../bank_attachment/".$img[$ik])) {
            $output.= "<img src='../bank_attachment/".$img[$ik]."'  >";
    
        }
        }
        $output .= '</div>';
        echo $output;
        }
        }

?>