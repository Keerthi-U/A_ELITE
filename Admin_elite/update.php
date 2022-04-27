<?php
include_once("db.php");

$form_name = $_POST["form_name"];
// $eye_id = $_POST['eye_id'];
// echo $eye_id;
if (isset($_POST['d_id'])) {
    $d_id =$_POST['d_id'];
    $but_val=$_POST['but_val'];

    echo $id;
   echo  $but_val;
   //  echo $query = "DELETE FROM doc_attachment WHERE id IN ($d_id)";
   //  mysqli_query($conn,$query);
   //  echo "Image Deleted";
   if($d_id != "") {
    echo  $query = "SELECT * FROM doc_attachment WHERE id='".$d_id."'";
      $result = mysqli_query($conn,$query);

      while ($delete = mysqli_fetch_array($result)) {
          $image = $delete['attach_images'];

          if($but_val == '1')
          {
          $file1= "../previous_marksheet/".$image;
          unlink($file1);
          }
          else if($but_val == '2'){
          $file2= "../bank_attachment/".$image;
          unlink($file2);
          }
          else if($but_val == '3'){
          $file3= "../hospital_report/".$image;
          unlink($file3);
          }
          else if($but_val == '4'){
          $file4= "../previous_medical_report/".$image;
          unlink($file4);
          }
          else if($but_val == '5'){
          $file5= "../bank_attachment/".$image;
          unlink($file5);
          }else{
            echo "no image";
          }
         

          // $path1 ="../previous_marksheet/".$image;
          // $path2="../bank_attachment/".$image;
          // $path = 
          // if (file_exists($path1) && file_exists($path2)) {
          //   unlink($path1);
          //   unlink($path2);
            
          //  }
          // else {
          //   echo 'FILE NOT FOUND';
          // }
      }

      $query1 = "DELETE FROM doc_attachment WHERE id IN ($d_id)";
      $result1 = mysqli_query($conn,$query1);
  }
    
}
if (isset($_POST['del_id'])) {
    $del_id =$_POST['del_id'];
    // echo $del_id;
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
          }else if($eye_click_id == "3"){
            for($ik=0; $ik<count($img); $ik++){
               if (file_exists("../hospital_report/".$img[$ik])) {
                   $output.= "<img src='../hospital_report/".$img[$ik]."'  >";
                }
                }
         }else if($eye_click_id == "4"){
            for($ik=0; $ik<count($img); $ik++){
               if (file_exists("../previous_medical_report/".$img[$ik])) {
                   $output.= "<img src='../previous_medical_report/".$img[$ik]."'  >";
                }
                }
         }else if($eye_click_id == "5"){
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
    

?>