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

<style>
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
.view_imag >img {
    width: 126px;
    height: 126px;
    padding: 6px;
}
.eye {
    width: 20px;
    height: 20px;
    background-color: white;
    position: relative;
    top: 50%;
    left: 4%;
    transform: translate(-50%, -50%) rotate(45deg);
    border: 1px solid black;
    border-radius: 82% 0;
    overflow: hidden;
}

.pupil {
    width: 37px;
    height: 37px;
    background-color: black;
    border-radius: 50%;
    border: 15px solid #589167;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.eyelid {
    width: 102px;
    height: 48px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-45deg);
    z-index: 1;
}
.eyelid span {
  width: 100%;
  height: 15%;
  display: block;
  background-color: #f2a365;
  border-bottom: 2px solid black;
  border-radius: 0 0 60% 60%;
  animation: blink 2s ease infinite;
}

@keyframes blink {
  0% {
    height: 15%;
  }
  30% {
    height: 15%;
  }
  40% {
    height: 100%;
  }
  50% {
    height: 15%;
  }
  60% {
    height: 15%;
  }
  70% {
    height: 100%;
  }
  80% {
    height: 15%;
  }
  100% {
    height: 15%;
  }
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
                <tr>
                <th>Pincode</th>
                <td><?php echo $row['pincode']; ?></td>
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
                 <td>
                 <i class="fa fa-eye btn0" id="previouss" data-id= <?php echo $row['id'];?> aria-hidden="true"> 
                 <span id="span" style="display:none;">1</span> 
                </td>
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
                <td><?php  $row['scholarship_select'];
                 if( $row['scholarship_select'] = '1'){
                     echo "Premetric";
                 }else{
                    echo "Post metric";
                 }
                ?></td>
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
                 <td>

                 <i class="fa fa-eye btn1"  id="bank_att" data-id= <?php echo $row['id'];?> aria-hidden="true">
                 <span id="span" style="display:none;">2</span>
                 </i>
                
                </td>
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
                 <td>
                 <i class="fa fa-eye btn2" id="hos_att" data-id= <?php echo $row['id'];?> aria-hidden="true">  
                 <span id="span" style="display:none;">3</span>
                </td>
                </tr>
                 <tr>
                 <th>Pervious Medical Report</th>
                 <td> 
                 <i class="fa fa-eye btn3" id="medical_report_att" data-id= <?php echo $row['id'];?> aria-hidden="true">  
                 <span id="span" style="display:none;">4</span>
                </td>
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
                 <td>
                 <i class="fa fa-eye btn4" id="mbank_attachment" data-id= <?php echo $row['id'];?> aria-hidden="true">  
                 <span id="span" style="display:none;">5</span>
                 <!-- <div class="eye">
                <div class="eyelid" id="mbank_attachment" data-id= <?php echo $row['id'];?>>
                    <span></span>
                </div> -->
                <!-- <div class="pupil"></div> -->
                </div>    
                 <!-- <i class="fa fa-eye btn"  aria-hidden="true">     -->
               </td>
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
                 <th>First Graduate</th>
                 <td width="50%"><?php echo $row['graduate']; ?></td>
                </tr>
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
                                        <td><?php  $rows['genders'];
                                        if($rows['genders'] == '1'){
                                            echo "Male";
                                        }else{
                                            echo "Female";
                                        }
                                        ?></td>
                                        <td><?php  $rows['relation']; 
                                        if($rows['relation'] == '1'){
                                            echo "Father";
                                        }elseif($rows['relation'] == '2'){
                                            echo "Mother";
                                        }elseif($rows['relation'] == '3'){
                                            echo "Sister";
                                        }else{
                                            echo "Brother";
                                        }
                                        ?></td>
                                        <td><?php  $rows['martial_status'];
                                            if($rows['martial_status'] == '1'){
                                                echo "Married";
                                            }elseif($rows['martial_status'] == '2'){
                                                echo "Unmarried";
                                            }elseif($rows['martial_status'] == '3'){
                                                echo "Widow/Widowar";
                                            }else{
                                                echo "Single Parent";
                                            }
                                        ?></td>
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
                  <div id="myModal" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal Title</h5>
                                <button type="button" id="modalclose" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                          

                            </div>
                          </div>
                    </div>
  </div>
<?php
include_once('footer.php');
?>
<script>
$(document).ready(function(){
   
    $('#modalclose').click(function(){
    $("#bank_att,#previouss,#hos_att,#medical_report_att,#mbank_attachment").removeClass('active');
    });
    $('.btn0').click(function(){
    $("#previouss").addClass('active');
   });
    $('.btn1').click(function(){
    $("#bank_att").addClass('active');
    });
    $('.btn2').click(function(){
    $("#hos_att").addClass('active');
    });
    $('.btn3').click(function(){
    $("#medical_report_att").addClass('active');
    });
    $('.btn4').click(function(){
    $("#mbank_attachment").addClass('active');
    });
    $(".fa-eye").click(function(){
        if($("#previouss").hasClass('active')){
            var eye_click_id = $("#previouss #span").text();
            }else if($("#bank_att").hasClass('active')){
            var eye_click_id = $("#bank_att #span").text();
            //alert("faeye"+eye_click_id);
            }else if($("#hos_att").hasClass('active')){
            var eye_click_id = $("#hos_att #span").text();
            //alert("faeye"+eye_click_id);
            }else if($("#medical_report_att").hasClass('active')){
            var eye_click_id = $("#medical_report_att #span").text();
            // alert("faeye"+eye_click_id);
            }else if($("#mbank_attachment").hasClass('active')){
            var eye_click_id = $("#mbank_attachment #span").text();
            // alert("faeye"+eye_click_id);
            }
        var eye_id =$(this).data('id');
        var form_name = "all_attachment";
        // alert(eye_id);
        $.ajax({
            url:"update.php",
            type:"post",
            data:{eye_id:eye_id,form_name:form_name,eye_click_id:eye_click_id},
            success:function(data){
                console.log(data);
                $(".modal-body").html(data);
                $("#myModal").modal('show');                    // window.location = 'new.php' + data;
            },
        })
        });


}); 
  
       

</script>
