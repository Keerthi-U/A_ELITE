<?php
include("form_header.php");
?>
<?php
include("db.php");
// error_reporting(0);
$id=$_GET['id'];
$sql="select * from scholarship_table  where id = '$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$form_type = $row['form_type'];
?>
<style>
   .ed {
        position: absolute;
        top: 44px;
        left: 95px;
    }
    .edit_image {
        padding: 10px;
        position: relative;
    }
    .update_image {
        display: flex;
        flex-wrap: wrap;
     }
    .edit_image>img {
        width: 137px;
        height: 132px;
    }
    img.pre_img {
        width: 157px;
        height: 152px;
        padding: 10px;
    }
    button.remove_btnnn {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 14px;
        right: 14px;
        text-align: center;
        line-height: 24px;
        z-index: 1;
        cursor: pointer;
      }
    button.remove_btnnn:after {
        /* content: "✖"; */
        color: white;
        content: "x";
        font-size: 16px;
        position: absolute;
        color: white;
        top: -3px;
        left: 6px;
        font-weight: 500;
        }
        .edit_image1 {
        position: relative;
         }
         .orh{
            padding-top: 30px;
       padding-left: 16px;
         }
</style>
  <div class="container">
     <div class="main">
      <h1 class="text-center sc-heading">Scholarship Form</h1>
          <form class="form" action="" name="myform" method="post" id="myform" onsubmit="return medical()" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" class="txtField" value="<?php echo $row['id']; ?>";?>
              <div class="form-group row choose-frm">
                        <label for="inputEmail3" class=" choose_form  col-sm-4 col-form-label">Choose form Type</label>
                        <div class="col-sm-8">
                        <select id="flip" name="form_type" value="<?php echo $row['form_type']; ?>" class="form-control">
                             <option selected = 'selected' value="<?php echo $row['form_type']; ?>"><?php echo $row['form_type']; ?></option>  
                            <option value="1">Student Form</option>
                            <option value="2">Medical Form</option>
                            <option value="3">Third Form</option>
                            <option value="4">Fourth Form</option>
                            </select>
                        </div>
                    </div>
                    <div class="wrapper wrapperhide " id="wrapper" >
                    <div class="heading1" id="t1">
                        <div class="heading1_1 text-light">A.Generals Information</div>
                        <div class="heading1_2"><i class="fa-solid fa-chevron-down first text-light"></i></div>
                    </div>
                    <div id="toggle1">
                        <div class="row">
                         <div class="fullname col-lg-4">
                            <input id="id" type="hidden" class="form-control" name="">
                                <label for="fullname" class="text-dark">Full Name</label>
                                <input id="fullname" type="text" class="form-control" name="fullname" value="<?php echo $row['fullname']; ?>">
                            </div>  
                            <div class="dob col-md-12 col-lg-4 col-xl-4">
                                <label for="d_o_admission">Date Of Birth</label>
                                <input id="d_o_admission" type="date" class="form-control date" name="dob" value="<?php echo $row['dob']; ?>"  placeholder="Select date...">
                             </div>
                            <div class="gender col-lg-4">
                                <label for="gender">Gender</label>
                                <div class="row">
                                <div class="custom-control custom-radio" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio1" name="gender" value="Male"
                                    <?php if($row['gender'] =='Male')
                                        {
                                            echo 'checked';
                                        }
                                        ?>
                                        >
                                    <label class="custom-control-label lab" for="stu_customRadio1">Male</label>
                                </div>
                                <div class="custom-control custom-radio female" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio2" name="gender" value="Female" 
                                    <?php if($row['gender'] =='Female')
                                        {
                                            echo 'checked';
                                        }

                                    ?>
                                    >
                                    <label class="custom-control-label lab" for="stu_customRadio2">Female</label>
                                </div>
                                </div>
                            </div>  
                        </div>
                         <div class="row">
                         <div class="gender col-lg-4">
                                <label for="gender">Disability</label>
                                <div class="row">
                                <div class="custom-control custom-radio" id="disablity">
                                    <input type="radio" class="custom-control-input" id="disablity_yes" name="disablity" value="yes"
                                    <?php if($row['disablity'] =='yes')
                                        {
                                            echo 'checked';
                                        }
                                    ?>
                                     >
                                    <label class="custom-control-label lab" for="disablity_yes">Yes</label>
                                </div>
                                <div class="custom-control custom-radio female" id="disablity">
                                    <input type="radio" class="custom-control-input" id="disablity_no" name="disablity" value="no"
                                    <?php if($row['disablity'] =='no')
                                        {
                                            echo 'checked';
                                        }
                                    ?>
                                    >
                                    <label class="custom-control-label lab" for="disablity_no">No</label>
                                </div>
                                </div>
                            </div>  
                            <div class="fathername col-lg-4" id="disablit">
                                <label for="fathername">Type of disability</label>
                                <input id="fathername" type="text" class="form-control input-sm" name="type_of_disability" value="<?php echo $row['type_of_disability']; ?>" >
                            </div> 
                            <div class="fathername col-lg-4">
                                <label for="fathername">Father Name</label>
                                <input id="fathername" type="text" class="form-control input-sm" name="fathername" value="<?php echo $row['fathername']; ?>">
                            </div> 
                            <div class="mothername col-lg-4">
                                <label for="mothername">Mother Name</label>
                                <input id="mothername" type="text" class="form-control input-sm" name="mothername" value="<?php echo $row['mothername']; ?>">
                            </div>  
                             <div class="contact col-lg-4">
                                <label for="contact">Contact Number</label>
                                <input id="contact" type="number" class="form-control input-sm" name="contactnumber" value="<?php echo $row['contactnumber']; ?>">
                             </div>
                            <div class="email col-lg-4">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="form-control input-sm" name="email" value="<?php echo $row['email']; ?>">
                            </div> 
                            <div class="col-lg-4">
                            <div class="address">
                                <label for="address">Address/Correspondance</label>
                                <textarea class="form-control input-sm" id="address" name="address" rows="2" value=""><?php echo $row['address']; ?> </textarea>
                            </div>  
                            </div>
                            <div class="state col-lg-4">
                                <label for="state">State</label>
                                <input id="state" type="text" class="form-control input-sm" name="state" value="<?php echo $row['state']; ?>">
                            </div>
                            <div class="district col-lg-4">
                                    <label for="district">District</label>
                                    <input id="district" type="text" class="form-control input-sm" name="district" value="<?php echo $row['district']; ?>">
                            </div>
                           <div class="City col-lg-4">
                                <label for="City">City</label>
                                <input id="City" type="text" class="form-control input-sm" name="city" value="<?php echo $row['city']; ?>">
                            </div>
                            <div class="state col-lg-4">
                                    <label for="state">Pincode</label>
                                    <input id="state" type="text" class="form-control input-sm" name="pincode" value="<?php echo $row['pincode']; ?>">
                            </div> 
                         </div>
                     </div>
                    <div class="stu_toggle2" id="stu_toggle2">
                    <div class="heading2" id="t2">
                        <div class="heading2_2 text-light">B.Student Details</div>
                        <div class="heading2_3"><i class="fa-solid fa-chevron-down second text-light"></i></div>
                    </div>
                    <div id="toggle2">
                      <div class="row">
                        <div class="h_admitted col-lg-4">
                            <label for="h_admitted">Name of School/ College</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="school_name" value="<?php echo $row['school_name']; ?>">
                        </div> 
                        <div class="h_admitted col-lg-4">
                            <label for="h_admitted">Enrollment/Register Number</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="reg_no" value="<?php echo $row['reg_no']; ?>">
                        </div>  
                    
                        <div class="h_admitted col-lg-4">
                            <label for="h_admitted">Class/Department</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="department" value="<?php echo $row['department']; ?>">
                        </div>  
                        <div class="h_admitted col-lg-4">
                            <label for="h_admitted">School/College Address</label>
                            <textarea class="form-control input-sm" id="s_c_address" name="school_address"rows="5" value=""><?php echo $row['school_address']; ?></textarea>
                        </div> 
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="h_admitted col-lg-6">
                                    <label for="h_admitted">Marks/Percentage</label>
                                    <input id="h_admitted" type="text" class="form-control input-sm" name="mark_percentage" value="<?php echo $row['mark_percentage']; ?>">
                                </div> 
                                <div class="h_admitted col-lg-6">
                                    <label for="h_admitted">Term/Semester</label>
                                    <input id="h_admitted" type="text" class="form-control input-sm" name="term_semester"  value="<?php echo $row['term_semester']; ?>">
                                </div> 
                                <div class="h_admitted col-lg-6">
                                    <label for="h_admitted"  >Acadamic Year</label>
                                    <input id="h_admitted" type="text" class="form-control input-sm" name="academic_year"  value="<?php echo $row['academic_year']; ?>">
                                </div> 
                                <div class="t_o_disease col-lg-6">
                                    <label for="t_o_disease">Scholarship category</label>
                                    <select class="custom-select" id="t_o_disease" name="scholarship_select" value="<?php echo $row['scholarship_select'];?>"> 
                                    <option value="<?php echo $row['scholarship_select'];?>"><?php echo $row['scholarship_select'];?></option>
                                    <option value="Premetric">Premetric</option>
                                    <option value="Post metric">Post metric</option>
                                    </select>
                                </div> 
                            </div>
                        </div>
                      
                         <div class="h_admitted col-lg-4">
                            <label for="h_admitted"> Phone Number</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="phone_no"  value="<?php echo $row['phone_no']; ?>">
                         </div>
                          <div class="h_admitted col-lg-4">
                                <label for="h_admitted"> Email</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="student_email"  value="<?php echo $row['student_email']; ?>">
                          </div>
                       </div>
                     <div class="row">
                     <div class="form-group col-lg-12">
                        <label for="exampleFormControlFile1">Pervious Marksheet</label>
                       
                        <div class="d-flexx">
                        <input id="file-upload" class="file-up"  name="previous_marksheet[]"  type="file" multiple >
                        <input type="text" id="file-name" name="previous_marksheet" class="choose-txt form-control ed" >
                       
                                   <div class="update_image">
                                   <?php
                                    $id=$_GET['id'];
                                    $sql1 ="select attach_images, id from doc_attachment where img_id ='$id'";
                                    $result1=mysqli_query($conn,$sql1);
                                    // $img=array();
                                    // $img_id=array();
                                    while($result=mysqli_fetch_assoc($result1)){
                                        $img[] = array("id" => $result['id'], "attach_images"=> $result['attach_images']);
                                    }
                               
                                        asort($img);
                                        $i=0;    
                                        foreach($img as $item) {

                                        $image_id1 = $item['id'];
                                        //  print_r($image_id);
                                        $image = $item['attach_images'];
                                       
                                        if (file_exists("../previous_marksheet/".$image)) {
                                        echo "
                                        <div class='edit_image'>
                                        <img src='../previous_marksheet/". $image."' >
                                        <button class='remove_btnnn' data-id=$image_id1></button> 
                                        </div>";
                                        //plus up the variable for each loop item
                                        }
                                        $i++;
                                        }
                                    ?>
                                   </div>

                        </div>
                     </div>
                     </div>
                 
                      <div class="heading2_1 mt-5">Bank AccountDetails:-</div>
                         <div class="account_details"  id="student_bank">
                            <div class="row">
                               <div class="a_number col-lg-4">
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="number" class="form-control" name="account_no1" value="<?php echo $row['account_no']; ?>">
                                </div>
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="bank_name1" value="<?php echo $row['bank_name']; ?>">
                                </div>   
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code1" value="<?php echo $row['ifsc_code']; ?>">
                                </div>  
                            </div>
                             <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="number" class="form-control" name="aadhar_number1" value="<?php echo $row['aadhar_number']; ?>">
                                 </div>  
                                 <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <div class="d-flex">
                                    <input type="text" name="bank_attachment" id="file-name1" class=" choose-txt form-control" >
                                    <input id="file-upload1" class="file-up" name="bank_attachment1[]" type="file" multiple>

                                    
                                    </div>


                                  </div>
                                  <div class="update_image">
                                    <?php
                                    $id=$_GET['id'];
                                    $sql1 ="select attach_images, id from doc_attachment where img_id ='$id'";
                                    $resultB=mysqli_query($conn,$sql1);
                                    // $img=array();
                                    // $img_id=array();
                                    while($resultA=mysqli_fetch_assoc($resultB)){
                                        $img2[] = array("id" => $resultA['id'], "attach_images"=> $resultA['attach_images']);
                                    }
                                       asort($img2);
                                        $i1=0;    
                                        foreach($img2 as $item1) {

                                        $image_id2 = $item1['id'];
                                        //  print_r($image_id);
                                        $image1 = $item1['attach_images'];
                                       
                                        if (file_exists("../bank_attachment/".$image1)) {
                                        echo "
                                        <div class='edit_image'>
                                        <img src='../bank_attachment/". $image1."' id='removee'>
                                        <button class='remove_btnnn' data-id=$image_id2></button> 
                                        </div>";
                                       
                                        }
                                        $i1++;
                                        }
                                    ?>
                                    </div>
                                </div>
                              </div>
                            </div>
                       </div>
             
                     
                   <div id="md_toggle5">
                      <div class="heading2 mt-4" id="t5">
                        <div class="heading2_2">B.Medical Details</div>
                        <div class="heading2_3"><i class="fa-solid fa-chevron-down fith"></i></div>
                      </div>
                  <div id="toggle5">
                      <div class="row">
                         <div class="h_admitted col-lg-4">
                            <label for="h_admitted">Name Of Hospital Admitted</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="hospital_name" value="<?php echo $row['hospital_name']; ?>">
                         </div>  
                        <div class="t_o_disease col-lg-4">
                            <label for="t_o_disease">Type Of Disease</label>
                            <select class="custom-select" id="t_o_disease" name="disease_select" value="<?php echo $row['disease_select']; ?>">
                                <option value=" <?php echo $row['disease_select']; ?>"><?php echo $row['disease_select']; ?>Affected by...</option>
                                <option value="Injury">Injury</option>
                                <option value="Maternity">Maternity</option>
                                <option value="Illness">Illness</option>
                            </select>
                        </div> 
                        <div class="n_o_disease col-lg-4">
                            <label for="n_o_disease">Name Of Disease</label>
                            <input id="n_o_disease" type="text" class="form-control input-sm" name="disease_name" value="<?php echo $row['disease_name']; ?>">
                        </div>  
                        <div class="t_o_disease col-lg-4">
                            <label for="t_o_disease">Severity Of Disease</label>
                            <select class="custom-select form-control" id="t_o_disease" name="severity_disease" value="<?php echo $row['severity_disease']; ?>">
                                <option value="<?php echo $row['severity_disease']; ?>"><?php echo $row['severity_disease']; ?></option>
                                <option value="Minor">Minor</option>
                                <option value="Moderate">Moderate</option>
                                <option value="Major">Major</option>
                                <option value="Extreme">Extreme</option>
                            </select>
                        </div> 
                         <div class="d_o_admission col-lg-4">
                                <label for="d_o_admission">Date Of Admission</label>
                                <input type="date" id="d_o_admission" class="form-control date" name="admission_date" value="<?php echo $row['admission_date']; ?>">
                         </div>  
                         <div class="a_expense col-lg-4">
                                <label for="a_expense">Approximate Expenses</label>
                                <input id="a_expense" type="text" class="form-control" name="approximate_expense" value="<?php echo $row['approximate_expense']; ?>">
                        </div>  
                         <div class="r_amount col-lg-4">
                                <label for="r_amount">Requested Amount</label>
                                <input id="r_amount" type="text" class="form-control" name="request_amount" value="<?php echo $row['request_amount']; ?>">
                         </div> 
                         <div class="orphan col-lg-8">
                              <div class="row orphan_1 orh">
                                <label for="orphan" class="orphan1">Do you have Insurance scheme?</label>
                                   <div class="custom-control custom-radio" id="in_orphan">
                                   <input type="radio" class="custom-control-input" id="customRadio5" name="insurance_scheme" value="yes" 
                                   <?php if($row['insurance_scheme'] =='yes')
                                        {
                                            echo 'checked';
                                        }
                                    ?>
                                >
                                     <label class="custom-control-label" for="customRadio5">Yes</label>
                                   </div>
                                 <div class="custom-control custom-radio" id="in_orphan">
                                <input type="radio" class="custom-control-input" id="customRadio6" name="insurance_scheme" value="no"
                                <?php if($row['insurance_scheme'] =='no')
                                        {
                                            echo 'checked';
                                        }
                                    ?>
                              >
                                 <label class="custom-control-label" for="customRadio6">No</label>
                            </div> 
                            </div>
                            <div class="gov" id="in_yes">
                             <div class="row orphan_1">
                                <div class="a_expense col-lg-4">
                                    <label for="a_expense">Goverment</label>
                                    <input id="a_expense" type="text" class="form-control" name="government" placeholder=" Enter Insurance Id" value="<?php echo $row['government']; ?>">
                                </div> 
                                <div class="a_expense col-lg-4">
                                    <label for="a_expense">Private</label>
                                    <input id="a_expense" type="text" class="form-control" name="private" placeholder=" Enter Insurance Id" value="<?php echo $row['private']; ?>">
                                </div> 
                                </div>
                            </div> 
                            
                    </div> 
                        </div>
                           
                      <div class="row">
                      <div class="form-group col-lg-12">
                                <label for="exampleFormControlFile1"> Hospital Report/LOR </label>
                             <div class="d-flexx">
                               <input id="file-upload3" class="file-up" name="hospital_report[]" type="file" multiple>
                                <input type="text" name="hospital_report" id="file-name3" class=" choose-txt form-control ed" >
                                 <div class="update_image">
                                   <?php
                                    $id=$_GET['id'];
                                    $sql5 ="select attach_images, id from doc_attachment where img_id ='$id'";
                                    $result7=mysqli_query($conn,$sql5);
                                  
                                    while($result6=mysqli_fetch_assoc($result7)){
                                        $imgR[] = array("id" => $result6['id'], "attach_images"=> $result6['attach_images']);
                                    }
                               
                                        asort($imgR);
                                        $i2=0;    
                                        foreach($imgR as $item) {

                                        $image_id1 = $item['id'];
                                        //  print_r($image_id);
                                        $image = $item['attach_images'];
                                        
                                    //    echo  $image;
                                        if (file_exists("../hospital_report/".$image)) {
                                               $hospital_image = $image;

                                        echo "
                                        <div class='edit_image'>
                                        <img src='../hospital_report/".$hospital_image."' >
                                        <button class='remove_btnnn' data-id=$image_id1></button> 
                                        </div>";
                                        //plus up the variable for each loop item
                                        }
                                        $i2++;
                                    }
                                   
                                    ?>
                                   </div>
                             </div>
                        </div> 
                         <div class="form-group col-lg-12">
                                <label for="exampleFormControlFile1">Pervious Medical Report</label>
                                <div class="d-flexx">
                                 <input id="file-upload4" class="file-up" name="previous_medical_report[]" type="file" multiple>
                                 <input type="text" name="previous_medical_report" id="file-name4" class=" choose-txt form-control ed" >
                                 <div class="update_image">
                                   <?php
                                    $id=$_GET['id'];
                                    $sql5 ="select attach_images, id from doc_attachment where img_id ='$id'";
                                    $result8=mysqli_query($conn,$sql5);
                                  
                                    while($result9=mysqli_fetch_assoc($result8)){
                                        $imgRp[] = array("id" => $result9['id'], "attach_images"=> $result9['attach_images']);
                                    }
                               
                                        // asort($imgRp);
                                        
                                        foreach($imgRp as $itemp) {

                                        $image_id1 = $itemp['id'];
                                        //  print_r($image_id);
                                        $image = $itemp['attach_images'];
                                        
                                    //    echo  $image;
                                        if (file_exists("../previous_medical_report/".$image)) {
                                               $hospital_image = $image;

                                        echo "
                                        <div class='edit_image'>
                                        <img src='../previous_medical_report/".$hospital_image."' >
                                        <button class='remove_btnnn' data-id=$image_id1></button> 
                                        </div>";
                                       
                                        }
                                
                                    }
                                   
                                    ?>
                                   </div>
                                </div>
                        </div>
                      </div>

                        <div class="heading2_1">Bank AccountDetails:-</div>
                        <div class="account_details" id="medical_bank">
                            <div class="row">
                                <div class="a_number col-lg-4">
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="text" class="form-control" name="account_no" value="<?php echo $row['account_no']; ?>">
                                </div> 
                           
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="bank_name" value="<?php echo $row['bank_name']; ?>">
                                </div>  
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code" value="<?php echo $row['ifsc_code']; ?>">
                                </div> 
                            </div>

                            <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="text" class="form-control" name="aadhar_number" value="<?php echo $row['aadhar_number']; ?>">
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <div class="d-flexx">
                                        <input id="file-upload2" class="file-up" name='bank_attachment[]' type="file"  multiple >
                                        <input type="text" name="bank_attachment" id="file-name2" class="choose-txt form-control ed" >
                                     </div>
                               </div>
                               <div class="update_image">
                                        <?php
                                            $id=$_GET['id'];
                                            $sqlb ="select attach_images, id from doc_attachment where img_id ='$id'";
                                            $resultb=mysqli_query($conn,$sqlb);
                                            // $img=array();
                                            // $img_id=array();
                                            while($resultAb=mysqli_fetch_assoc($resultb)){
                                                $imgb[] = array("id" => $resultAb['id'], "attach_images"=> $resultAb['attach_images']);
                                            }
                                                asort($imgb);
                                                $ib=0;    
                                                foreach($imgb as $itemb) {

                                                $image_idb= $itemb['id'];
                                                //  print_r($image_id);
                                                $imageb = $itemb['attach_images'];
                                            
                                                if (file_exists("../bank_attachment/".$imageb)) {
                                                echo "
                                                <div class='edit_image'>
                                                <img src='../bank_attachment/". $imageb."' id='removee'>
                                                <button class='remove_btnnn' data-id=$image_idb></button> 
                                                </div>";
                                            
                                                }
                                                $ib++;
                                                }
                                            ?>
                                       </div>
                             </div>
                         </div>
                    </div>
                </div>
              
                   <div class="heading3" id="t3">
                        <div class="heading3_1 text-light">C.Family Information</div>
                        <div class="heading3_2"><i class="fa-solid fa-chevron-down third text-light"></i></div>
                    </div>
                    <div id="toggle3">
                       <div class="Graduate col-lg-12">
                            <div class="row Graduate">
                                <label for="Graduate" class="Graduate"> First Graduate</label>
                            <div class="custom-control custom-radio" id="Graduates">
                                <input type="radio" class="custom-control-input" id="Graduate1" name="graduate" value="yes"
                                <?php if($row['graduate'] =='yes')
                                        {
                                            echo 'checked';
                                        }
                                    ?>>
                                <label class="custom-control-label" for="Graduate1">Yes</label>
                            </div>
                           <div class="custom-control custom-radio" id="Graduates">
                                <input type="radio" class="custom-control-input" id="Graduate2" name="graduate" value="no"
                                <?php if($row['graduate'] =='no')
                                        {
                                            echo 'checked';
                                        }
                                    ?>
                                 >
                                <label class="custom-control-label" for="Graduate2">No</label>
                            </div>
                            </div>
                        </div>
                        <div class="orphan col-lg-12">
                            
                            <div class="row orphan_1">
                                <label for="orphan" class="orphan">Orphan</label>
                            <div class="custom-control custom-radio" id="orphan">
                                <input type="radio" class="custom-control-input" id="stu_customRadio3" name="orphan" value="yes"
                                <?php if($row['orphan'] =='yes')
                                        {
                                            echo 'checked';
                                        }
                                    ?>
                                >
                                <label class="custom-control-label" for="stu_customRadio3">Yes</label>
                            </div>
                
                            <div class="custom-control custom-radio" id="orphan">
                                <input type="radio" class="custom-control-input" id="stu_customRadio4" name="orphan" value="no"
                                <?php if($row['orphan'] =='no')
                                        {
                                            echo 'checked';
                                        }
                                    ?>
                                >
                                <label class="custom-control-label" for="stu_customRadio4">No</label>
                            </div>
                            </div>
                        </div> 
                        <div class="orpahan_yes col-lg-4" id="o_yes">
                            <label for="aa_number">Guardian Name</label>
                            <input id="" type="text" class="form-control input-sm" name="guardian_nae">
                        </div>
                       <div class="row10" id="o_no"> 
                            <div class="f_members" >
                                <label for="f_members">Number Of Family Members:-</label>
                                <div class="f_members2">
                                   
                                    <table id="myTable" class="table table-bordered">
                                        <th width="26%">Name</th>
                                        <th  width="7%">Age</th>
                                        <th  width="12%">Gender</th>
                                        <th  width="14%">Relation</th>
                                        <th  width="12%">Marital Status</th>
                                        <th  width="6%">Qualification</th>
                                        <th  width="11%">Occupation</th>
                                        <th width="12%">Annual Income</th>
                                        <th>Add</th> 
                                        <?php
                                        include_once('db.php');
                                        $id=$_GET['id'];
                                        $sqll="select * from family_information  where student_id = '$id'";
                                        $result1=mysqli_query($conn,$sqll);
                                        while($rows = mysqli_fetch_assoc($result1)){
                                        ?>
                                        <tr id='row_0'>
                                    
                                            <input type="hidden" id="txtfirst" name="student_id[]"  value="<?php echo $rows['s_id'];?>" class="form-control input-sm ">
                                            <td><input type="text" id="txtfirst" name="name[]" class="form-control input-sm " value="<?php echo $rows['name'];?>" /></td>
                                            <td><input type="text" id="txtsecond" name="age[]" class="form-control input-sm "value="<?php echo $rows['age'];?>" /></td>
                                            <td><select id="txtthird" name="genders[]" value="<?php echo $rows['genders']  ?>" class="form-control input-sm " >
                                                <option value="">
                                                <?php  if($rows['genders'] == '1'){
                                                echo "Male";
                                                }else{
                                                echo "Female";
                                              } ?></option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                </select>
                                            </td>
                                            <td><select id="txtfourth" name="relation[]" class="form-control input-sm "  value="<?php echo $rows['relation']  ?>">
                                                <option value=""
                                                ><?php 
                                                    $rows['relation']; 
                                                    if($rows['relation'] == '1'){
                                                        echo "Father";
                                                    }elseif($rows['relation'] == '2'){
                                                        echo "Mother";
                                                    }elseif($rows['relation'] == '3'){
                                                        echo "Sister";
                                                    }else{
                                                        echo "Brother";
                                                    }
                                                ?></option>
                                                <option value="1">Father</option>
                                                    <option value="2">Mother</option>
                                                    <option value="3">Sister</option>
                                                    <option value="4">Brother</option>
                                                </select>
                                            </td>
                                                    <td><select id="txtfifth"  name="martial_status[]" class="form-control input-sm m" >
                                                        <option value=""><?php  $rows['martial_status'];
                                                    if($rows['martial_status'] == '1'){
                                                        echo "Married";
                                                    }elseif($rows['martial_status'] == '2'){
                                                        echo "Unmarried";
                                                    }elseif($rows['martial_status'] == '3'){
                                                        echo "Widow/Widowar";
                                                    }else{
                                                        echo "Single Parent";
                                                    }
                                               ?></option>
                                                <option value="1">Married</option>
                                                <option value="2">Unmarried</option>
                                                <option value="3">Widow/Widowar</option>
                                                <option value="4">Single Parent</option>
                                            </select></td>
                                            <td><input type="text" id="txtsix" class="form-control t" name="qualification[]" value="<?php echo $rows['qualification']  ?>" /></td>
                                            <td><input type="text" id="txtseven" class="form-control "  name="occupation[]" value="<?php echo $rows['occupation']  ?>" oninput="calculate('row_0')"/></td>
                                            <td><input type="text" id="txteight" class="form-control t" name="annual_income[]" value="<?php echo $rows['annual_income']  ?>" /></td>
                                            <td><i class="fa fa-plus" onClick="insertRow()"></i></td>
                                         </tr>
                                         <?php
                                          }
                                          ?>
                                      </table>
                                  
                                    </div>
                                </div>
                          </div>
                         <div class="row">
                         <label class="form-check-label" for="gridCheck1">
                            Declaration:
                          </label>
                         <div class="col-lg-12" id="gridcheck1">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                I hereby declare that the above information is true.
                            </label>
                          </div>
                        </div>
                        </div>
                       <div class="submit">
                            <button type="update" name="upadte"  class="btn btn-primary" id="update">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
           </div>
       </div>
   <?php
    include("footer.php");
    ?>
    
  <script>


$(".remove_btnnn").click(function(e){
  
    e.preventDefault();
    $('#removee').hide();
    var id= $(this).data('id');
    alert(id);
    $.ajax({
    url:"update.php",
    type:"post",
    data:{id:id},
    success:function(data){
        alert(data);
      
    },
})
});

$("#update").click(function(e){
alert("hi");
e.preventDefault();

var form_data = new FormData(document.getElementById('myform'));

alert(form_data);
$.ajax({
    url:"update1.php",
    data:form_data,
    type:'POST',
    processData: false,
    contentType: false,
    success:function(data){
        alert(data);
        window.location.href= "pending.php";
    }



});

});




</script>
