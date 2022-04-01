<?php
include_once("db.php");
$id =$_POST['id'];
echo $id;
mysqli_query($conn,"DELETE FROM doc_attachment WHERE id IN ($id)");
echo "Image Deleted";


?>