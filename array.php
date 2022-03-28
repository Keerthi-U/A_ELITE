<?php
if(isset($_POST['submit'])){

    $max_number = max(count($_POST["name"]), count($_POST["age"]));
    for($i=0; $i < $max_number; $i++)
    {
echo $_POST['name'][$i];
echo '<br>';
echo $_POST['age'][$i];
    }
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
   name: <input type="text" name="name[]">
   <br>
  age:  <input type="text" name="age[]">
  <br>
  name:  <input type="text"  name="name[]">
  <br>
  age:  <input type="text" name="age[]">
  <br>
  <input type="submit" name="submit">
</form>
</body>
</html>