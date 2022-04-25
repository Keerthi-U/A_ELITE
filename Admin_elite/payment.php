<?php
include_once('header.php');
include_once('sidebar.php');
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<?php  
include_once('db.php');
$query = "SELECT c.application_id,c.id,c.ratings,c.fullname,c.form_type,c.fathername,c.gender  ,c.contactnumber,c.created_by,c.approved_status, COUNT(p.student_id) AS number_of_student FROM scholarship_table c LEFT JOIN family_information 
p ON  c.id  = p.student_id WHERE c.approved_status ='1'  or  c.approved_status IS NULL  GROUP BY c.id 
ORDER BY c.ratings DESC;";
$records = mysqli_query($conn,$query);
// while($data = mysqli_fetch_array($records)) 
// { 
?> 
<style>
.form-control {
   display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-weight: 400;
    line-height: 1.5;
    border: 1px solid #b06adb!important;
    color: #495057;
    font-size: 13px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    box-shadow: -4px 3px 10px -5px rgb(0 0 0 / 50%);
}
#ref,#neft{
    display:none;

}
.table_main {
    margin-top: 31px;
    /* padding: 25px; */
    margin: 20px;
    padding: 17px;
    background: white;
}
.pay_label{
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 600;
    color: #775799;
}
button.btn.btn-primary.btn-block1 {
  width: 140px;
  height: 45px;
  font-family: 'Roboto', sans-serif;
  font-size: 13px;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  font-weight: 600;
  color: white;
  background-color: #7262b0;
  border: none;
  border-radius: 45px;
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease 0s;
  cursor: pointer;
  outline: none;
}
.btn-block1:hover{
    background-color: transparent!important;
    color: #675bb3!important;
    font-weight: 600;
    border: 1px solid!important;
}
.swal-modal {
    width: 478px;
    height: 237px;
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
            <div class="payment">
            <form  action="" method="post" id="payment_data">
            <div class="col-md-offset-1 col-lg-10 ">
            <div class="form-group row" >
               
                   <!-- <div class="form-group col-sm-4">
                   <label for="inputPassword" >Aadhar Number</label>
                   <input type="hidden" class="form-control" id="inputPassword" placeholder="Aadhar Number">
                   </div> -->
                <div class="form-group col-sm-4" >
                   <label for="inputPassword" class=" pay_label">Date</label>
                   <input type="date" class="form-control" placeholder="date" name="date">
                </div>
                 
                <div class="form-group col-sm-8">
                   <label for="staticEmail"  class="pay_label">Select Applicant</label>
                    <select class="form-control" id="application_select" name="approved_select">
                       <?php
                        while($data=mysqli_fetch_array($records))
                        {
                            $application_name= $data['fullname']. " - " .$data['application_id'];
                        ?>
                        <option value=" <?php echo $data['id']; ?>"><?php echo $application_name; ?></option>
                        <?php
                        }
                        ?>
                     </select>
                    </div>
             </div>
                <!-- <h3 class="payment-heading">Bank AccountDetails:-</h3> -->
                <div class="form-group row mll" >
                   <div class="form-group col-sm-4">
                   <label for="inputPassword" class=" pay_label" >Account Number</label>
                   <input type="text" class="form-control" id="account_number" value="" name="account_number" placeholder="Account Number">
                   </div>
                   <div class="form-group col-sm-4">
                   <label for="inputPassword" class=" pay_label">Name Of Bank</label>
                   <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Name Of Bank">
                   </div>
                   <div class="form-group col-sm-4">
                   <label for="inputPassword" class=" pay_label">IFSC Code</label>
                   <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="IFSC Code">
                   </div>
               </div>
               <!-- <div class="form-group row mll">
                   <div class="form-group col-sm-4">
                   <label for="inputPassword" >Aadhar Number</label>
                   <input type="text" class="form-control" id="inputPassword" placeholder="Aadhar Number">
                   </div>
                   <div class="form-group col-sm-4">
                   <label for="inputPassword" >Attachement</label>
                   <input type="text" class="form-control" id="inputPassword" placeholder="Attachement">
                   </div>
               </div> -->
                <div class="form-group row" >
                   <div class="form-group col-sm-4" >
                   <label for="inputPassword" class=" pay_label">Amount</label>
                   <input type="text" class="form-control"  placeholder="Amount" name="amount">
                   </div>
                    <div class="form-group col-sm-4" >
                    <label for="staticEmail" class=" pay_label">Payment Mode</label>
                    <select class="form-control"  id="sel_pay" name="payment_mode">
                       <option  value="">Select Payment mode</option>
                       <option  value="1">NEFT/RTGS</option>
                       <option  value="2">Netbanking</option>
                       <option  value="3">Mobile payments</option>
                       <option  value="4">Debit cards</option>
                       <option  value="5">Credit cards</option>
                       <option  value="6">Checks</option>
                     </select>
                     </div>
                     <div class="form-group col-sm-4" id="neft">
                     <label for="inputPassword" class=" pay_label">Cheque Number</label>
                     <input type="text" class="form-control" placeholder="Cheque Number" name="cheque_number">
                     </div>
                     <div class="form-group col-sm-4" id="ref" >
                     <label for="inputPassword" class=" pay_label">Reference Number</label>
                     <input type="text" class="form-control" placeholder="Reference Number" name="reference_number">
                     </div>
                     <div class="form-group col-sm-4" >
                     <label for="inputPassword" class=" pay_label">Recommended By</label>
                     <input type="text" class="form-control" placeholder="Recommended By" name="recommended_by">
                     </div>
                     <!-- <div class="form-group col-sm-4" >
                     <label for="inputPassword" class=" col-form-label">Comments</label>
                     <input type="text" class="form-control" placeholder="Recommended By">
                     </div> -->
                     <div class="col-lg-4" >
                     <label for="inputPassword" class=" pay_label">Comments</label>
                     <textarea class="h-100 form-control " rows="3" placeholder="Small textarea" name="comments"></textarea>
                     </div>
               </div>
                <div class="pay_btn-bl">
                 <button type="submit" class="btn btn-primary btn-block1" id="pay_submit">Submit</button>
                </div>
            </div>
           
             </form>

            </div>
        </div>
     </div>
<?php
include_once('footer.php');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js" integrity="sha512-XVz1P4Cymt04puwm5OITPm5gylyyj5vkahvf64T8xlt/ybeTpz4oHqJVIeDtDoF5kSrXMOUmdYewE4JS/4RWAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$('#sel_pay').change(function(){
    // alert('yes');
    var value=$(this).val();
    // alert(value);
    if(value == '1'){
        $('#neft').show();
        $('#ref').hide();
    }else   if(value == '2'){
        $('#ref').show();
        $('#neft').hide();

    }else{
        $('#neft').hide();
        $('#ref').hide();
    }
});
$('#application_select').change(function(e){
    e.preventDefault();
    var payment_id=$(this).val();
    alert(payment_id);
    $.ajax({
        type:'POST',
        url:'status.php',
        data:{payment_id:payment_id},
        success:function(response){
            alert(response);
            var obj=$.parseJSON(response);
            $('#account_number').val(obj.account_no);
            $('#bank_name').val(obj.bank_name);
            $('#ifsc_code').val(obj.ifsc_code);
            
        }
    });
});

$('#pay_submit').click(function(e){
    e.preventDefault();
    alert('hi');
     var paymentdetail =new FormData(document.getElementById('payment_data'));
    //  var paymentdatas =new FormData(document.getElementById('payment_data'));
     alert(paymentdetail);
     $.ajax({
         type: 'Post',
         url: 'status.php',
         processData: false,
         contentType: false,
         data: paymentdetail,
         success:function(data){
            swal({title:data,
                  button:false,
                  icon: "success",
                  timer: 2000
                });
         }

     });
});
</script>