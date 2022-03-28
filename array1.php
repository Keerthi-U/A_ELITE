<?php
include_once('db.php');
include_once('header.php');

if(isset($_POST['submit'])){

    for($i=0; $i<count($_POST['name']);$i++){
    
        $name =  $_POST['name'][$i];
        $age=$_POST['age'][$i];
        $genders=$_POST['genders'][$i];
        $relation=$_POST['relation'][$i];
      
        $martial_status=$_POST['martial_status'][$i];
        $qualification=$_POST['qualification'][$i];
        $occupation=$_POST['occupation'][$i];
        $annual_income =$_POST['annual_income'][$i];
          //print_r($annual_income);
          echo $sql="INSERT INTO `family_information`(`name`,`age`,`genders`,`relation`,`martial_status`,`qualification`,`occupation`,`annual_income`) VALUES ('$name','$age','$genders','$relation','$martial_status','$qualification','$occupation','$annual_income')";
          $total = mysqli_query($conn,$sql);


    


            if($_POST['relation'][$i] == '1'){
                echo 'match';
                if ($annual_income < 1000) {
                    $ra ="1";
                    echo "Match Found";
                    }else{
                        echo "Not Found";
                    }
            }else{
                echo "Not Match";
            }

    }
// if (in_array("1", $_POST['relation'][$i]))
// {

// if ($annual_income < 1000) {
// $r ="1";
// }else{
// echo "not found";
// }

// }else{
// echo "not match";
// }
    


echo $r;
    echo $sql1="INSERT INTO `rating`(`rating`) VALUES ('$r')";
     $total1 = mysqli_query($conn,$sql1); 


// $name = $_POST['name'];
// $email = $_POST['age'];
// foreach( $name as $key => $n ) {
//     print "The name is " . $n . " <br> and age is <br> " . $email[$key] . ", \n";
//   }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form class="form" action="" name="myform" method="post" id="myform"  enctype="multipart/form-data">


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
  <input type="submit" name="submit">

</td>
</form>
<?php
include_once('footer.php');
?>
</body>
</html>