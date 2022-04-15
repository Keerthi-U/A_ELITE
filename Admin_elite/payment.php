<?php
include_once('header.php');
include_once('sidebar.php');
?>
<style>
.form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #e7e7e7;
    background-image: none;
    /* border: 1px solid #ccc; */
    border:unset;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
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
            <div class="form-group row" >
                <label for="staticEmail" class="col-sm-3 col-form-label">Select</label>
                <div class="col-sm-9">
                <!-- <label for="sel1">Select list:</label> -->
                <select class="form-control" id="sel_width" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                 </select>
                 </div>
            </div>
            <div class="form-group row" >
                <label for="inputPassword" class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
                <input type="date" class="form-control"id="sel_width"  placeholder="date">
                </div>
            </div>
            <div class="form-group row" >
                <label for="inputPassword" class="col-sm-3 col-form-label">Amount</label>
                <div class="col-sm-9">
                <input type="text" class="form-control"id="sel_width"  placeholder="Amount">
                </div>
            </div>
            <div class="form-group row" >
                <label for="staticEmail" class="col-sm-3 col-form-label">Payment Mode</label>
                <div class="col-sm-9">
                <!-- <label for="sel1">Select list:</label> -->
                <select class="form-control" id="sel_width" >
                    <option>Select Payment mode</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                 </select>
                 </div>
            </div>
            <div class="form-group row" >
                <label for="inputPassword" class="col-sm-3 col-form-label">Recommended By</label>
                <div class="col-sm-9">
                <input type="text" class="form-control"id="sel_width"  placeholder="Recommended By">
                </div>
            </div>
            <div class="form-group1 row" >
                <label for="inputPassword" class="col-sm-3 ">Discription</label>
                <div class="col-sm-9">
                <textarea class="form-control " rows="3" id="sel_width" placeholder="Small textarea"></textarea>
                </div>
            </div>
            <h3 class="payment-heading">Bank AccountDetails:-</h3>
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
            <div class="form-group row mll">
                <div class="form-group col-sm-4">
                <label for="inputPassword" >Aadhar Number</label>
                <input type="text" class="form-control" id="inputPassword" placeholder="Aadhar Number">
                </div>
                <div class="form-group col-sm-4">
                <label for="inputPassword" >Attachement</label>
                <input type="text" class="form-control" id="inputPassword" placeholder="Attachement">
                </div>
             </div>
        
             <div class="pay_btn-bl">
              <button type="submit" class="btn btn-primary btn-block1">Submit</button>
             </div>
             </form>

            </div>
        </div>
     </div>
<?php
include_once('footer.php');
?>