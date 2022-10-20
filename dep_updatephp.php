<?php
    include('configall.php');
   

   $name=$_POST["depname"];
$depid=$_POST["depid"];

$sqlll="UPDATE `department` SET `Depart_name` = '$name', `Depart_id` = '$depid' WHERE `department`.`Depart_id` = $depid";
    $ff=mysqli_query($connection,$sqlll);


if($ff)
{
    echo "successfully updated info into database";
    
    header('location: department.php');
}
else{
    echo "somthing is wrong";
}


?>