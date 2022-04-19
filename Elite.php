
<?php
if(session_id() == ''){
    require_once('authentication.php');
}
include("header.php");
?>
<?php
include("db.php");
?>
<style>
    .swal-modal {
    width: 478px;
    height: 247px;
    }
</style>
  <div class="container">
     <div class="main">
      <h1 class="text-center sc-heading">Scholarship Form</h1>
      <?php echo $_SESSION['first_name']; ?> <a href="logout.php" >logout</a>
          <form class="form" action="" name="myform" method="post" id="myform" onsubmit="return medical()" enctype="multipart/form-data">

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
                                <input id="fullname" type="text" class="form-control" name="fullname">
                            </div>  
                            <div class="dob col-md-12 col-lg-4 col-xl-4">
                                <label for="d_o_admission">Date Of Birth</label>
                                <input id="d_o_admission" type="date" class="form-control date" name="dob"  placeholder="Select date...">
                             </div>
                            <div class="gender col-lg-4">
                                <label for="gender">Gender</label>
                                <div class="row">
                                <div class="custom-control custom-radio" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio1" name="gender" value="Male">
                                    <label class="custom-control-label lab" for="stu_customRadio1">Male</label>
                                </div>
                                <div class="custom-control custom-radio female" id="gender">
                                    <input type="radio" class="custom-control-input" id="stu_customRadio2" name="gender" value="Female">
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
                                    <input type="radio" class="custom-control-input" id="disablity_yes" name="disablity" value="yes">
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
                                <input id="fathername" type="text" class="form-control input-sm" name="fathername">
                            </div> 
                            <div class="mothername col-lg-4">
                                <label for="mothername">Mother Name</label>
                                <input id="mothername" type="text" class="form-control input-sm" name="mothername">
                            </div>  
                             <div class="contact col-lg-4">
                                <label for="contact">Contact Number</label>
                                <input id="contact" type="text" class="form-control input-sm" name="contactnumber">
                             </div>
                            <div class="email col-lg-4">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="form-control input-sm" name="email">
                            </div> 
                            <div class="col-lg-4">
                            <div class="address">
                                <label for="address">Address/Correspondance</label>
                                <textarea class="form-control input-sm" id="address" name="address" rows="2"></textarea>
                            </div>  
                            </div>
                            <div class="state col-lg-4">
                                <label for="state">State</label>
                                <input id="state" type="text" class="form-control input-sm" name="state">
                            </div>
                            <div class="district col-lg-4">
                                    <label for="district">District</label>
                                    <input id="district" type="text" class="form-control input-sm" name="district">
                            </div>
                           <div class="City col-lg-4">
                                <label for="City">City</label>
                                <input id="City" type="text" class="form-control input-sm" name="city">
                            </div>
                            <div class="state col-lg-4">
                                    <label for="state">Pincode</label>
                                    <input id="state" type="text" class="form-control input-sm" name="pincode">
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
                            <input id="h_admitted" type="text" class="form-control input-sm" name="school_name">
                        </div> 
                        <div class="h_admitted col-lg-4">
                            <label for="h_admitted">Enrollment/Register Number</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="reg_no">
                        </div>  
                    
                        <div class="h_admitted col-lg-4">
                            <label for="h_admitted">Class/Department</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="department">
                        </div>  
                        <div class="h_admitted col-lg-4">
                            <label for="h_admitted">School/College Address</label>
                            <textarea class="form-control input-sm" id="s_c_address" name="school_address"rows="5"></textarea>
                        </div> 
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="h_admitted col-lg-6">
                                    <label for="h_admitted">Marks/Percentage</label>
                                    <input id="h_admitted" type="text" class="form-control input-sm" name="mark_percentage" >
                                </div> 
                                <div class="form-group col-lg-6">
                                    <label for="exampleFormControlFile1">Pervious Marksheet</label>
                                    <div class="d-flex">
                                    <input type="text" id="file-name" name="previous_marksheet" class="choose-txt form-control">
                                    <input id="file-upload" class="file-up"  name="previous_marksheet[]"  type="file" multiple >
                                </div>
                                </div>
                                <div class="h_admitted col-lg-6">
                                    <label for="h_admitted" class="lab">Term/Semester</label>
                                    <input id="h_admitted" type="text" class="form-control input-sm" name="term_semester">
                                </div> 
                                <div class="h_admitted col-lg-6">
                                    <label for="h_admitted"  class="lab">Acadamic Year</label>
                                    <input id="h_admitted" type="text" class="form-control input-sm" name="academic_year">
                                </div> 
                            </div>
                         </div>
                         <div class="t_o_disease col-lg-4">
                            <label for="t_o_disease">Scholarship category</label>
                            <select class="custom-select" id="t_o_disease" name="scholarship_select"> 
                                <option value="expert">Scholarship...</option>
                                <option value="1">Premetric</option>
                                <option value="2">Post metric</option>
                            </select>
                         </div> 
                         <div class="h_admitted col-lg-4">
                            <label for="h_admitted"> Phone Number</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="phone_no">
                         </div>
                         <div class="h_admitted col-lg-4">
                                <label for="h_admitted"> Email</label>
                                <input id="h_admitted" type="text" class="form-control input-sm" name="student_email">
                         </div>
                       </div>
                      <div class="heading2_1 mt-5">Bank AccountDetails:-</div>
                         <div class="account_details"  id="student_bank">
                            <div class="row">
                               <div class="a_number col-lg-4">
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="text" class="form-control" name="account_no1">
                                </div>
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="bank_name1">
                                </div>   
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code1">
                                </div>  
                            </div>
                          <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="text" class="form-control" name="aadhar_number1">
                                 </div>  
                                 <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <div class="d-flex">
                                    <input type="text" name="bank_attachment" id="file-name1" class=" choose-txt form-control" >
                                    <input id="file-upload1" class="file-up" name="bank_attachment1[]" type="file" multiple>
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
                            <label for="h_admitted">Name Of Hospital Admitted</label>
                            <input id="h_admitted" type="text" class="form-control input-sm" name="hospital_name">
                         </div>  
                        <div class="t_o_disease col-lg-4">
                            <label for="t_o_disease">Type Of Disease</label>
                            <select class="custom-select" id="t_o_disease" name="disease_select">
                                <option value="expert">Affected by...</option>
                                <option value="1">Injury</option>
                                <option value="2">Maternity</option>
                                <option value="3">Illness</option>
                            </select>
                        </div> 
                        <div class="n_o_disease col-lg-4">
                            <label for="n_o_disease">Name Of Disease</label>
                            <input id="n_o_disease" type="text" class="form-control input-sm" name="disease_name">
                        </div>  
                        <div class="t_o_disease col-lg-4">
                            <label for="t_o_disease">Severity Of Disease</label>
                            <select class="custom-select form-control" id="t_o_disease" name="severity_disease">
                                <option value="expert">Please select ...</option>
                                <option value="1">Minor</option>
                                <option value="2">Moderate</option>
                                <option value="3">Major</option>
                                <option value="4">Extreme</option>
                            </select>
                        </div> 
                         <div class="d_o_admission col-lg-4">
                                <label for="d_o_admission">Date Of Admission</label>
                                <input type="date"  class="form-control date" name="admission_date" >
                         </div>  
                         <div class="a_expense col-lg-4">
                                <label for="a_expense">Approximate Expenses</label>
                                <input id="a_expense" type="text" class="form-control" name="approximate_expense">
                        </div>  
                         <div class="r_amount col-lg-4">
                                <label for="r_amount">Requested Amount</label>
                                <input id="r_amount" type="text" class="form-control" name="request_amount">
                         </div> 
                         <div class="form-group col-lg-4">
                                <label for="exampleFormControlFile1"> Hospital Report/LOR </label>
                             <div class="d-flex">
                                <input type="text" name="hospital_report" id="file-name3" class=" choose-txt form-control" >
                                <input id="file-upload3" class="file-up" name="hospital_report[]" type="file" multiple>
                             </div>
                        </div> 
                         <div class="form-group col-lg-4">
                                <label for="exampleFormControlFile1">Pervious Medical Report</label>
                                <div class="d-flex">
                               <input type="text" name="previous_medical_report" id="file-name4" class=" choose-txt form-control" >
                                <input id="file-upload4" class="file-up" name="previous_medical_report[]" type="file" multiple>
                                </div>
                             </div> 
                        </div>
                         <div class="orphan col-lg-12">
                            <div class="row orphan_1">
                                <label for="orphan" class="orphan1">Do you have Insurance scheme?</label>
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
                                    <label for="a_number">Account Number</label>
                                    <input id="a_number" type="text" class="form-control" name="account_no">
                                </div> 
                           
                                <div class="n_o_bank col-lg-4">
                                    <label for="n_o_bank">Name Of Bank</label>
                                    <input id="n_o_bank" type="text" class="form-control" name="bank_name">
                                </div>  
                                <div class="ifsc_code col-lg-4">
                                    <label for="ifsc_code">IFSC Code</label>
                                    <input id="ifsc_code" type="text" class="form-control" name="ifsc_code">
                                </div> 
                            </div>

                            <div class="row">
                                <div class="aa_number col-lg-4">
                                    <label for="aa_number">Aadhar Number</label>
                                    <input id="aa_number" type="text" class="form-control" name="aadhar_number">
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="exampleFormControlFile1">Attachement</label>
                                    <div class="d-flex">
                                        <input type="text" name="bank_attachment" id="file-name2" class="choose-txt form-control" >
                                        <input id="file-upload2" class="file-up" name='bank_attachment[]' type="file"  multiple >
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
                                <input type="radio" class="custom-control-input" id="Graduate1" name="graduate" value="yes">
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
                                <input type="radio" class="custom-control-input" id="stu_customRadio3" name="orphan" value="yes">
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
                            <button type="submit" name="submit"  class="btn btn-primary" id="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
           </div>
       </div>
   <?php
    include("footer.php");
    ?>
       
  
