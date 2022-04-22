<?php
if(session_id() == ''){
    require_once('authentication.php');
}
include("header.php");
include("form_header.php");
?>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<style>
    label.error {
    color: red;
    margin-bottom: 0;
}
label#file-upload-error, label#file-upload1-error,label#file-upload2-error,label#file-upload3-error,label#file-upload4-error{
    display: inline-block;
    position: absolute;
    bottom: -20px;
}
label#gender-error,label#disablity-error {
    display: inline-block;
    position: absolute;
    bottom: -44px;
    left: 3px;
}
label#graduate-error,label#orphan-error{
    display: inline-block;
    position: absolute;
    /* bottom: -16px; */
    left: 148px;
}
label#insurance_scheme-error {
    position: absolute;
    left: 17px;
    bottom: -22px;
}
    </style>
<nav class="navbar navbar-expand-sm bg-light elite_heade fixed-top" >
  <ul class="navbar-nav elite_in">
    <li class="nav-item el">
         <a class="nav-link" href="#"><img src="Images/Elite_logo.svg"></a>
    </li>
  <li class="nav-item el">
    <div class="single-review-st-text">
           <button type="button" class="btn btn-primary appli_color" data-toggle="modal" data-target="#myModal">
           Application Staus
           </button>
            <div class="bell">
            <i class="item fa fa-bell"></i>
            </div>
            <img src="Images/1.jpg" alt="">
            <div class="review-ctn-hf">
                <p><?php echo $_SESSION['first_name']; ?></p>
            </div>
            <div class="dropdown open">
            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
            <span class="caret"></span></button>
            <ul class="dropdown-menu dp-menu">
            <li class="log"><i class="fas fa-sign-out-alt" id="logclr"></i><a href="logout.php">Logout</a></li>
            <li class="log"><i class="fa fa-lock" id="logclr"></i><a href="#">Change Password</a></li>
            </ul>
        </div>
        </div>
      
    </li>

 </ul>
</nav>

  <div class="container">
     <div class="main">
      <h1 class="text-center sc-heading">Scholarship Form</h1>
                    
 <form action="#" name="myform" id="myform" enctype="multipart/form-data">
                     

<div class="form-group row choose-frm">
          <label for="inputEmail3" class=" choose_form  col-sm-4 col-form-label">Choose form Type</label>
          <div class="col-sm-8">
          <select id="flip" name="form_type" class="form-control">
               <option value="">Select</option>  
              <option value="1">Student Form</option>
              <option value="2">Medical Form</option>
              <option value="3">Third Form</option>
              <option value="4">Fourth Form</option>
              </select>
              <!-- <div class="error"></div> -->
          </div>
      </div>
      <div class="wrapper wrapperhide " id="wrapper" >
      <div class="heading1" id="t1">
          <div class="heading1_1 text-light">A.Generals Information</div>
          <div class="heading1_2"><i class="fa-solid fa-chevron-down first text-light"></i></div>
          <div class="error"></div>
      </div>
      <div id="toggle1">
          <div class="row">
            <div class="fullname col-lg-4">
            <label for="fullname" class="text-dark">Application id</label>
            <input id="application_id" type="text" class="form-control" name="application_id" value="" readonly>
           </div>  
           <div class="fullname col-lg-4">
              <input id="id" type="hidden" class="form-control" name="">
                  <label for="fullname" class="text-dark">Full Name</label>
                  <input id="fullname" type="text" class="form-control" name="fullname">
                  <div class="error"></div>
              </div>  
              <div class="dob col-md-12 col-lg-4 col-xl-4">
                  <label for="d_o_admission">Date Of Birth</label>
                  <input id="d_o_admission" type="date" class="form-control date" name="dob"  placeholder="Select date...">
               </div>
              <div class="gender col-lg-4">
                  <label for="gender">Gender</label>
                  <div class="row">
                  <div class="custom-control custom-radio" id="gender">
                      <input type="radio" class="custom-control-input" id="stu_customRadio1" name="gender" value="Male" required>
                      <label class="custom-control-label lab" for="stu_customRadio1">Male</label>
                  </div>
                  <div class="custom-control custom-radio female" id="gender">
                      <input type="radio" class="custom-control-input" id="stu_customRadio2" name="gender" value="Female">
                      <label class="custom-control-label lab" for="stu_customRadio2">Female</label>
                  </div>
                  </div>
              </div>  
          
          
           <div class="gender col-lg-4">
                  <label for="gender">Disability</label>
                  <div class="row">
                  <div class="custom-control custom-radio" id="disablity">
                      <input type="radio" class="custom-control-input" id="disablity_yes" name="disablity" value="yes" >
                      <label class="custom-control-label lab" for="disablity_yes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio female" id="disablity">
                      <input type="radio" class="custom-control-input" id="disablity_no" name="disablity" value="no">
                      <label class="custom-control-label lab" for="disablity_no">No</label>
                  </div>
                  </div>
              </div>  
              <div class="fathername col-lg-4" id="disablit">
                  <label for="fathername">Type of disability</label>
                  <input id="fathername" type="text" class="form-control input-sm" name="type_of_disability">
              </div> 
              <div class="fathername col-lg-4">
                  <label for="fathername">Father Name</label>
                  <input id="fathername" type="text" class="form-control input-sm" name="fathername" required>
              </div> 
              <div class="mothername col-lg-4">
                  <label for="mothername">Mother Name</label>
                  <input id="mothername" type="text" class="form-control input-sm" name="mothername" required>
              </div>  
               <div class="contact col-lg-4">
                  <label for="contactnumber">Contact Number</label>
                  <input id="contactnumber" type="text" class="form-control input-sm" name="contactnumber" required>
               </div>
              <div class="email col-lg-4">
                  <label for="email">Email</label>
                  <input id="email" type="text" class="form-control input-sm" name="email" required>
              </div> 
              <div class="col-lg-4">
              <div class="address">
                  <label for="address">Address/Correspondance</label>
                  <textarea class="form-control input-sm" id="address" name="address" rows="2" required></textarea>
              </div>  
              </div>
              <div class="state col-lg-4">
                  <label for="state">State</label>
                  <input id="state" type="text" class="form-control input-sm" name="state" required>
              </div>
              <div class="district col-lg-4">
                      <label for="district">District</label>
                      <input id="district" type="text" class="form-control input-sm" name="district" required>
              </div>
             <div class="City col-lg-4">
                  <label for="City">City</label>
                  <input id="City" type="text" class="form-control input-sm" name="city" required>
              </div>
              <div class="state col-lg-4">
                      <label for="pincode">Pincode</label>
                      <input id="pincode" type="text" class="form-control input-sm" name="pincode" required>
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
              <label for="school_name">Name of School/ College</label>
              <input id="school_name" type="text" class="form-control input-sm" name="school_name" required>
          </div> 
          <div class="h_admitted col-lg-4">
              <label for="reg_no">Enrollment/Register Number</label>
              <input id="reg_no" type="text" class="form-control input-sm" name="reg_no" required>
          </div>  
      
          <div class="h_admitted col-lg-4">
              <label for="department">Class/Department</label>
              <input id="department" type="text" class="form-control input-sm" name="department" required>
          </div>  
          <div class="h_admitted col-lg-4">
              <label for="school_address">School/College Address</label>
              <textarea class="form-control input-sm" id="s_c_address" name="school_address"rows="5" required></textarea>
          </div> 
          <div class="col-lg-8">
              <div class="row">
                  <div class="h_admitted col-lg-6">
                      <label for="h_admitted">Marks/Percentage</label>
                      <input id="mark_percentage" type="text" class="form-control input-sm" name="mark_percentage" required>
                  </div> 
                  <div class="form-group col-lg-6">
                      <label for="exampleFormControlFile1">Pervious Marksheet</label>
                      <div class="d-flex">
                      <input type="text" id="file-name" name="previous_marksheet" class="choose-txt form-control">
                      <input id="file-upload" class="file-up"  name="previous_marksheet[]"  type="file" multiple  required>
                  </div>
                  </div>
                  <div class="h_admitted col-lg-6">
                      <label for="h_admitted" class="lab">Term/Semester</label>
                      <input id="h_admitted" type="text" class="form-control input-sm" name="term_semester" required>
                  </div> 
                  <div class="h_admitted col-lg-6">
                      <label for="academic_year"  class="lab">Acadamic Year</label>
                      <input id="academic_year" type="text" class="form-control input-sm" name="academic_year" required>
                  </div> 
              </div>
           </div>
           <div class="t_o_disease col-lg-4">
              <label for="scholarship_select">Scholarship category</label>
             
              <select id="scholarship" name="scholarship_select" class="form-control">
              <option value="">Scholarship...</option>  
              <option value="1">Premetric</option>
              <option value="2">Post metric</option>
              </select>
           </div> 
           <div class="h_admitted col-lg-4">
              <label for="phone_no"> Phone Number</label>
              <input id="phone_no" type="text" class="form-control input-sm" name="phone_no" required>
           </div>
           <div class="h_admitted col-lg-4">
                  <label for="student_email"> Email</label>
                  <input id="student_email" type="text" class="form-control input-sm" name="student_email" required>
           </div>
         </div>
        <div class="heading2_1 mt-5">Bank AccountDetails:-</div>
           <div class="account_details"  id="student_bank">
              <div class="row">
                 <div class="a_number col-lg-4">
                      <label for="a_number">Account Number</label>
                      <input id="a_number" type="text" class="form-control" name="account_no1" required>
                  </div>
                  <div class="n_o_bank col-lg-4">
                      <label for="n_o_bank">Name Of Bank</label>
                      <input id="n_o_bank" type="text" class="form-control" name="bank_name1" required>
                  </div>   
                  <div class="ifsc_code col-lg-4">
                      <label for="ifsc_code">IFSC Code</label>
                      <input id="ifsc_code" type="text" class="form-control" name="ifsc_code1" required>
                  </div>  
              </div>
            <div class="row">
                  <div class="aa_number col-lg-4">
                      <label for="aa_number">Aadhar Number</label>
                      <input id="aa_number" type="text" class="form-control" name="aadhar_number1" required>
                   </div>  
                   <div class="form-group col-lg-4">
                      <label for="exampleFormControlFile1">Attachement</label>
                      <div class="d-flex">
                      <input type="text" name="bank_attachment" id="file-name1" class=" choose-txt form-control" >
                      <input id="file-upload1" class="file-up" name="bank_attachment1[]" type="file" multiple required>
                      </div>
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
              <label for="hospital_name">Name Of Hospital Admitted</label>
              <input id="hospital_name" type="text" class="form-control input-sm" name="hospital_name" required>
           </div>  
          <div class="t_o_disease col-lg-4">
              <label for="disease_select">Type Of Disease</label>
              <select id="disease_select" name="disease_select" class="form-control">
              <option value="">Affected by...</option>
                  <option value="1">Injury</option>
                  <option value="2">Maternity</option>
                  <option value="3">Illness</option>
              </select>
          </div> 
          <div class="n_o_disease col-lg-4">
              <label for="disease_name">Name Of Disease</label>
              <input id="disease_name" type="text" class="form-control input-sm" name="disease_name" required>
          </div>  
          <div class="t_o_disease col-lg-4">
              <label for="severity_disease">Severity Of Disease</label>
              <select class="form-control" id="severity_disease" name="severity_disease" required>
                  <option value="">Please select ...</option>
                  <option value="1">Minor</option>
                  <option value="2">Moderate</option>
                  <option value="3">Major</option>
                  <option value="4">Extreme</option>
              </select>
          </div> 
           <div class="d_o_admission col-lg-4">
                  <label for="severity_disease">Date Of Admission</label>
                  <input type="date"  class="form-control date" name="admission_date" required>
           </div>  
           <div class="a_expense col-lg-4">
                  <label for="approximate_expense">Approximate Expenses</label>
                  <input id="a_expense" type="text" class="form-control" name="approximate_expense" required>
          </div>  
           <div class="r_amount col-lg-4">
                  <label for="r_amount">Requested Amount</label>
                  <input id="r_amount" type="text" class="form-control" name="request_amount" required>
           </div> 
           <div class="form-group col-lg-4">
                  <label for="exampleFormControlFile1"> Hospital Report/LOR </label>
               <div class="d-flex">
                  <input type="text" name="hospital_report" id="file-name3" class=" choose-txt form-control" >
                  <input id="file-upload3" class="file-up" name="hospital_report[]" type="file" multiple required>
               </div>
          </div> 
           <div class="form-group col-lg-4">
                  <label for="exampleFormControlFile1">Pervious Medical Report</label>
                  <div class="d-flex">
                 <input type="text" name="previous_medical_report" id="file-name4" class=" choose-txt form-control" >
                  <input id="file-upload4" class="file-up" name="previous_medical_report[]" type="file" multiple required>
                  </div>
               </div> 
          </div>
           <div class="orphan col-lg-12">
              <div class="row orphan_1">
                  <label for="insurance_scheme" class="orphan1">Do you have Insurance scheme?</label>
              <div class="custom-control custom-radio" id="in_orphan">
                  <input type="radio" class="custom-control-input" id="customRadio5" name="insurance_scheme" value="yes">
                  <label class="custom-control-label" for="customRadio5">Yes</label>
              </div>
              <div class="custom-control custom-radio" id="in_orphan">
                  <input type="radio" class="custom-control-input" id="customRadio6" name="insurance_scheme" value="no">
                  <label class="custom-control-label" for="customRadio6">No</label>
              </div> 
              </div>
              <div class="gov" id="in_yes">
               <div class="row orphan_1">
                  <div class="a_expense col-lg-4">
                      <label for="a_expense">Goverment</label>
                      <input id="a_expense" type="text" class="form-control" name="government" placeholder=" Enter Insurance Id">
                  </div> 
                  <div class="a_expense col-lg-4">
                      <label for="a_expense">Private</label>
                      <input id="a_expense" type="text" class="form-control" name="private" placeholder=" Enter Insurance Id">
                  </div> 
                  </div>
              </div> 
      </div> 


          <div class="heading2_1">Bank AccountDetails:-</div>
          <div class="account_details" id="medical_bank">
              <div class="row">
                  <div class="a_number col-lg-4">
                      <label for="account_no">Account Number</label>
                      <input id="account_no" type="text" class="form-control" name="account_no" required>
                  </div> 
             
                  <div class="n_o_bank col-lg-4">
                      <label for="bank_name">Name Of Bank</label>
                      <input id="bank_name" type="text" class="form-control" name="bank_name" required>
                  </div>  
                  <div class="ifsc_code col-lg-4">
                      <label for="ifsc_code">IFSC Code</label>
                      <input id="ifsc_code" type="text" class="form-control" name="ifsc_code" required>
                  </div> 
              </div>

              <div class="row">
                  <div class="aa_number col-lg-4">
                      <label for="aadhar_number">Aadhar Number</label>
                      <input id="aadhar_number" type="text" class="form-control" name="aadhar_number" required>
                  </div>  
                  <div class="form-group col-lg-4">
                      <label for="exampleFormControlFile1">Attachement</label>
                      <div class="d-flex">
                          <input type="text" name="bank_attachment" id="file-name2" class="choose-txt form-control" >
                          <input id="file-upload2" class="file-up" name='bank_attachment[]' type="file"  multiple required>
                      </div>
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
         <div class="Graduate col-lg-12" id="first_graduate">
              <div class="row Graduate">
                  <label for="Graduate" class="Graduate"> First Graduate</label>
              <div class="custom-control custom-radio" id="Graduates">
                  <input type="radio" class="custom-control-input" id="Graduate1" name="graduate" value="yes" >
                  <label class="custom-control-label" for="Graduate1">Yes</label>
              </div>
             <div class="custom-control custom-radio" id="Graduates">
                  <input type="radio" class="custom-control-input" id="Graduate2" name="graduate" value="no">
                  <label class="custom-control-label" for="Graduate2">No</label>
              </div>
              </div>
          </div>
          <div class="orphan col-lg-12">
              
              <div class="row orphan_1">
                  <label for="orphan" class="orphan " id="orph">Orphan</label>
              <div class="custom-control custom-radio" id="orphan">
                  <input type="radio" class="custom-control-input" id="stu_customRadio3" name="orphan" value="yes" >
                  <label class="custom-control-label" for="stu_customRadio3">Yes</label>
              </div>
  
              <div class="custom-control custom-radio" id="orphan">
                  <input type="radio" class="custom-control-input" id="stu_customRadio4" name="orphan" value="no">
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
                          <tr id='row_0'>
                         <!-- <input type="hidden" name="cntr" value="'.$_POST['counters'].'" /> -->
                         <input type="hidden" id="txtfirst" name="student_id" class="form-control input-sm ">
                              <td><input type="text" id="txtfirst" name="name[]" class="form-control input-sm " /></td>
                              <td><input type="text" id="txtsecond" name="age[]" class="form-control input-sm " /></td>
                              <td><select id="txtthird" name="genders[]"  class="form-control input-sm " >
                                  <option value="1">Male</option>
                                  <option value="2">Female</option>
                                  </select>
                              </td>
                              <td><select id="txtfourth" name="relation[]" class="form-control input-sm " >
                                  <option value="1">Father</option>
                                  <option value="2">Mother</option>
                                  <option value="3">Sister</option>
                                  <option value="4">Brother</option>
                                 </select>
                             </td>
                              <td><select id="txtfifth"  name="martial_status[]" class="form-control input-sm m" >
                                  <option value="1">Married</option>
                                  <option value="2">Unmarried</option>
                                  <option value="3">Widow/Widowar</option>
                                  <option value="4">Single Parent</option>
                              </select></td>
                              <td><input type="text" id="txtsix" class="form-control t" name="qualification[]" /></td>
                              <td><input type="text" id="txtseven" class="form-control "  name="occupation[]" oninput="calculate('row_0')"/></td>
                              <td><input type="text" id="txteight" class="form-control t" name="annual_income[]" /></td>
                              <td><i class="fa fa-plus" onClick="insertRow()"></i></td>
                           </tr>
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
              <button type="submit" name="submit"  class="btn btn-primary" id="submit1">Submit</button>
          </div>
      </div>
  </div>
</form>
</div>
</div>
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title eliemodal-title"> Application Status </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <p>Application Id :</p>
          <p>Application Status:</p>
        </div>
        
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->
        
      </div>
    </div>
  </div>
<script src="asset/js/student application.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha512-XVz1P4Cymt04puwm5OITPm5gylyyj5vkahvf64T8xlt/ybeTpz4oHqJVIeDtDoF5kSrXMOUmdYewE4JS/4RWAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
    $("#myform").validate({  // initialize plugin on the form
     rules: {
      fullname:{
        required: true,
       },
      form_type:{
        required: true,
      },
      dob: "required",
    
      type_of_disability:{
        required: true,
     },
     scholarship_select:{
        required: true,
     },
     disablity:{
        required: true,
     },
     gender:{
        required: true,
     },
     insurance_scheme:{
        required: true,
     },
     graduate:{
        required: true,
     },
     orphan:{
        required: true,
     },
     disease_select:{
        required: true,
     },
     severity_disease:{
        required: true,
     }
    },
    messages: {
      fullname: {
      required: "full first name",
     },      
     password: {
      required: "Enter password name",
     }, 
     
     scholarship_select: {
        required: "Please Select Form Type",
     },
     form_type:{
        required: "Please Select Form Type",
     },
     type_of_disability:{
        required: "Enter type_of_disability",
     },
     disablity:{
        required:"required",
     },
     gender:{
        required:"required",
     },
     insurance_scheme:{
        required:"required",
     },
     graduate:{
        required:"required",
     },
     orphan:{
        required:"required",
     },
     disease_select:{
        required:"Please Select type of disease",
     },
     severity_disease:{
        required:"Please Select severity_disease",
     },
    },
         
    });

    $("#submit1").click(function(e){

        e.preventDefault();
        alert('hi');  // capture the click
        if($("#myform").valid()){   // test for validity
           alert('yes');
           var formdata = new FormData(document.getElementById('myform'));
           alert(formdata);
           $.ajax({
          url: 'insert.php',
          data: formdata,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
                  swal({ title:"loading",
                  button:false,
                  icon: "https://www.boasnotas.com/img/loading2.gif",
                  timer: 2000}).then(function(){
                    // alert("test");
                    swal({ title:"Registration successfull",
                      icon: "success",
                      button:false,
                      timer: 2000

                    });
                  });
          }
        });

        } else {
            // do stuff if form is not valid
        }
    });
});
          </script>