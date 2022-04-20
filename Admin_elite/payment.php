<?php
include_once('header.php');
include_once('sidebar.php');
?>
<style>
.form-control {
    display: block;
    width: 100%;
    height: 38px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    border: 0px;
    border: 1px solid #ccc;
    background-color: white;
    background-image: none;
    /* border: 1px solid #ccc; */
    /* border:unset; */
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
}
#ref,#neft{
    display:none;

}
.table_main {
    margin-top: 31px;
    /* padding: 25px; */
    margin: 20px;
    padding: 17px;
    background: #f1f1f1;
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
            <form>
            <div class="col-md-offset-1 col-lg-10 ">
            <div class="form-group row" >
               
               <div class="form-group col-sm-4" >
                   <label for="inputPassword" class=" ">Date</label>
                   <input type="date" class="form-control" placeholder="date">
                   </div>
                   <div class="form-group col-sm-8">
                   <label for="staticEmail"  class="">Select</label>
                    <select class="form-control"  >
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                    </select>
                    </div>
                </div>
                <!-- <h3 class="payment-heading">Bank AccountDetails:-</h3> -->
                <div class="form-group row mll" >
                   <div class="form-group col-sm-4">
                   <label for="inputPassword" >Account Number</label>
                   <input type="text" class="form-control" id="inputPassword" placeholder="Account Number">
                   </div>
                   <div class="form-group col-sm-4">
                   <label for="inputPassword" >Name Of Bank</label>
                   <input type="text" class="form-control" id="inputPassword" placeholder="Name Of Bank">
                   </div>
                   <div class="form-group col-sm-4">
                   <label for="inputPassword">IFSC Code</label>
                   <input type="text" class="form-control" id="inputPassword" placeholder="IFSC Code">
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
                   <label for="inputPassword" class="">Amount</label>
                   <input type="text" class="form-control"  placeholder="Amount">
                   </div>
                    <div class="form-group col-sm-4" >
                    <label for="staticEmail" class="col-form-label">Payment Mode</label>
                    <select class="form-control"  id="sel_pay">
                       <option  value="0">Select Payment mode</option>
                       <option  value="1">NEFT/RTGS</option>
                       <option  value="2">Netbanking</option>
                       <option  value="3">Mobile payments</option>
                       <option  value="4">Debit cards</option>
                       <option  value="5">Credit cards</option>
                       <option  value="6">Checks</option>
                     </select>
                     </div>
                     <div class="form-group col-sm-4" id="neft">
                     <label for="inputPassword" class=" col-form-label">Check Number</label>
                     <input type="text" class="form-control" placeholder="Recommended By">
                     </div>
                     <div class="form-group col-sm-4" id="ref" >
                     <label for="inputPassword" class=" col-form-label">Reference Number</label>
                     <input type="text" class="form-control" placeholder="Recommended By">
                     </div>
                     <div class="form-group col-sm-4" >
                     <label for="inputPassword" class=" col-form-label">Recommended By</label>
                     <input type="text" class="form-control" placeholder="Recommended By">
                     </div>
                     <!-- <div class="form-group col-sm-4" >
                     <label for="inputPassword" class=" col-form-label">Comments</label>
                     <input type="text" class="form-control" placeholder="Recommended By">
                     </div> -->
                     <div class="col-lg-4" >
                     <label for="inputPassword" class=" col-form-label">Comments</label>
                     <textarea class="h-100 form-control " rows="3" placeholder="Small textarea"></textarea>
                     </div>
               </div>
                <div class="pay_btn-bl">
                 <button type="submit" class="btn btn-primary btn-block1">Submit</button>
                </div>
            </div>
           
             </form>

            </div>
        </div>
     </div>
<?php
include_once('footer.php');
?>
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
})
</script>