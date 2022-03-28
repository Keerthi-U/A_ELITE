<?php
include_once('header.php');
include_once('sidebar.php');
include_once('db.php');

$id=$_GET['id'];


$sql="select * from scholarship_table  where id = '$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$form_type = $row['form_type'];
echo $form_type;



?>
<?php




?>
<style>
.table_main {
    margin-top: 31px;
    /* padding: 25px; */
    margin: 20px;
    padding: 17px;
    background: white;
}
table>tbody>tr>th{
    text-align: left;
    padding: 6px;
}
.th_heading >h2{
    font-size: 19px;
}
.th_heading >h3{
    font-size: 15px;
    color: #5e5e58;
    padding-top: 19px;
    
}

</style>
<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="table_main">
            <div class="row">
             <div class="col-lg-12">
              
               <div class="table_content">
               <div class="th_heading"><h2>A.Generals Information</h2></div>
                <table  style="width:100%">
                 <tr>
                 <th>Full Name</th>
                 <td><?php echo $row['fullname']; ?></td>
                </tr>
                 <tr>
                 <th style="width:50%">DOB</th>
                 <td><?php echo $row['dob']; ?></td>
                </tr>
                 <tr>
                 <th >Gender</th>
                 <td><?php echo $row['gender']; ?></td>
                </tr>
                <tr>
                 <th>Father Name</th>
                 <td><?php echo $row['fathername']; ?></td>
                </tr>
                 <tr>
                 <th style="width:50%">Mother Name</th>
                 <td><?php echo $row['mothername']; ?></td>
                </tr>
                 <tr>
                 <th>Contact Number</th>
                 <td><?php echo $row['contactnumber']; ?></td>
                </tr>
                <tr>
                 <th>Address</th>
                 <td><?php echo $row['address']; ?></td>
                </tr>
                 <tr>
                 <th>Email</th>
                 <td><?php echo $row['email']; ?></td>
                </tr>
                 <tr>
                 <th >City</th>
                 <td><?php echo $row['city']; ?></td>
                </tr>
                <tr>
                <th >State</th>
                <td><?php echo $row['state']; ?></td>
                </tr>
                <tr>
                <th >District</th>
                <td><?php echo $row['district']; ?></td>
                </tr>
              </table>
             </div>
         </div>
      </div>
 </div>
        
<?php if($form_type == '1') { ?>     
<!-- 
 B.Student Details -->
        <div class="table_main">
            <div class="row">
             <div class="col-lg-12">
              
               <div class="table_content">
               <div class="th_heading"><h2>B.Student Details</h2></div>
                <table  style="width:100%">
                 <tr>
                 <th>Name of School/ College</th>
                 <td><?php echo $row['school_name']; ?></td>
                </tr>
                 <tr>
                 <th style="width:50%">Enrollment/Register Number</th>
                 <td><?php echo $row['reg_no']; ?></td>
                </tr>
                 <tr>
                 <th >Class/Department</th>
                 <td><?php echo $row['department']; ?></td>
                </tr>
                <tr>
                 <th>School/College Address</th>
                 <td><?php echo $row['school_address']; ?></td>
                </tr>
               
                 <tr>
                 <th>Marks/Percentage</th>
                 <td><?php echo $row['mark_percentage']; ?></td>
                </tr>
                <tr>
                 <th>Pervious Marksheet</th>
                 <td><?php echo $row['previous_marksheet']; ?></td>
                </tr>
                 <tr>
                 <th>Term/Semester</th>
                 <td><?php echo $row['term_semester']; ?></td>
                </tr>
                 <tr>
                 <th>Acadamic Year</th>
                 <td><?php echo $row['academic_year']; ?></td>
                </tr>
                <tr>
                <th>Scholarship category</th>
                <td><?php echo $row['scholarship_select']; ?></td>
                </tr>
          
                 <th>Phone Number</th>
                 <td><?php echo $row['phone_no']; ?></td>
                </tr>
                 <tr>
                 <th>Email</th>
                 <td><?php echo $row['student_email']; ?></td>
                </tr>
               
              
                <tr>
                <th class="th_heading"><h3>Bank AccountDetails:-</h3></th>
                </tr >
                <tr>
                <th>Account Number</th>
                <td><?php echo $row['account_no']; ?></td>
                </tr>
                <tr>
                 <th>Name Of Bank</th>
                 <td><?php echo $row['bank_name']; ?></td>
                </tr>
                <tr>
                 <th>IFSC Code</th>
                 <td><?php echo $row['ifsc_code']; ?></td>
                </tr>
                 <tr>
                 <th>Aadhar Number</th>
                 <td><?php echo $row['aadhar_number']; ?></td>
                </tr>
                 <tr>
                 <th>Attachement</th>
                 <td><?php echo $row['bank_attachment']; ?></td>
                </tr>
               
              
              </table>
             </div>
         </div>
      </div>
 </div>

<?php }else{
    
    ?>

 <div class="table_main">
            <div class="row">
             <div class="col-lg-12">
              
               <div class="table_content">
               <div class="th_heading"><h2>B.Medical Details</h2></div>
                <table  style="width:100%">
                 <tr>
                 <th>Name Of Hospital Admitted</th>
                 <td><?php echo $row['hospital_name']; ?></td>
                </tr>
                 <tr>
                 <th style="width:50%">Type Of Disease</th>
                 <td><?php echo $row['disease_select']; ?></td>
                </tr>
                 <tr>
                 <th >Name Of Disease</th>
                 <td><?php echo $row['disease_name']; ?></td>
                </tr>
                <tr>
                 <th>Severity Of Disease</th>
                 <td><?php echo $row['severity_disease']; ?></td>
                </tr>
                 <tr>
                 <th style="width:50%">Date Of Admission</th>
                 <td><?php echo $row['admission_date']; ?></td>
                </tr>
                 <tr>
                 <th>Approximate Expenses</th>
                 <td><?php echo $row['approximate_expense']; ?></td>
                </tr>
                <tr>
                <tr>
                 <th>Requested Amount</th>
                 <td><?php echo $row['request_amount']; ?></td>
                </tr>
                <tr>
                 <th>Hospital Report/LOR</th>
                 <td><?php echo $row['hospital_report']; ?></td>
                </tr>
                 <tr>
                 <th>Pervious Medical Report</th>
                 <td><?php echo $row['previous_medical_report']; ?></td>
                </tr>
                 <tr>
                 <th>Do you have Insurance scheme?</th>
                 <td><?php echo $row['insurance_scheme']; 
                        $insurance =$row['insurance_scheme'];
                 ?></td>
                </tr>
                <?php if($insurance == "yes") { ?>
                <tr>
                <th>Government</th>
                 <td><?php echo $row['government']; ?></td>
                </tr>
                 <tr>
                 <th>Private</th>
                 <td><?php echo $row['private']; ?></td>
                </tr>
              <?php } else {} ?>
                <tr>
                <th class="th_heading"><h3>Bank AccountDetails:-</h3></th>
                </tr >
             
                <tr>
                <th>Account Number</th>
                <td><?php echo $row['account_no']; ?></td>
                </tr>
                <tr>
                 <th>Name Of Bank</th>
                 <td><?php echo $row['bank_name']; ?></td>
                </tr>
                <tr>
                 <th>IFSC Code</th>
                 <td><?php echo $row['ifsc_code']; ?></td>
                </tr>
                 <tr>
                 <th>Aadhar Number</th>
                 <td><?php echo $row['aadhar_number']; ?></td>
                </tr>
                 <tr>
                 <th>Attachement</th>
                 <td><?php echo $row['bank_attachment']; ?></td>
                </tr>
               
              
              </table>
             </div>
         </div>
      </div>
 </div>
<?php  }
?>

<div class="table_main">
            <div class="row">
             <div class="col-lg-12">
              
               <div class="table_content">
               <div class="th_heading"><h2>C.Family Information</h2></div>
                <table  style="width:100%">
                 <tr>
                 <th>Orphan</th>
                 <td><?php echo $row['orphan'];   ?></td>
                </tr>
                <?php if( $row['orphan'] == "yes") { ?>
                 <tr>
                 <th>Guardian Name</th>
                 <td><?php echo $row['guardian_name']; ?></td>
                </tr>
                <?php } else
                
                {
                    ?>
 <table id="myTable" class="table table-bordered">
                                        <th width="26%">Name</th>
                                        <th  width="7%">Age</th>
                                        <th  width="12%">Gender</th>
                                        <th  width="14%">  Relation</th>
                                        <th  width="12%">Marital Status</th>
                                        <th  width="6%">Qualification</th>
                                        <th  width="11%"> Occupation</th>
                                        <th width="12%">Annual Income</th>
                    <?php


                 include_once('db.php');
                 $id=$_GET['id'];
                 $sqll="select * from family_information  where student_id = '$id'";
                 $result1=mysqli_query($conn,$sqll);
                 while($rows = mysqli_fetch_assoc($result1)){
               ?>
               
                                      
                                      
                                        <tr id='row_0'>
                                     
                                        <td><?php echo $rows['name']; ?></td>
                                        <td><?php echo $rows['age']; ?></td>
                                        <td><?php echo $rows['genders']; ?></td>
                                        <td><?php echo $rows['relation']; ?></td>
                                        <td><?php echo $rows['martial_status']; ?></td>
                                        <td><?php echo $rows['qualification']; ?></td>
                                        <td><?php echo $rows['occupation']; ?></td>
                                        <td><?php echo $rows['annual_income']; ?></td>

                                        </tr>
                                    
                                   

                          
                     <?php }
                    } ?>
                 

                
                
              </table>
             </div>
         </div>
      </div>
 </div>
        




</div>

<?php
include_once('footer.php');
?>