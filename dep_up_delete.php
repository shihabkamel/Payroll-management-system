<?php
  include('configall.php');
       
       $sql="SELECT Depart_id,Depart_name FROM `department`;";
       $result=mysqli_query($connection,$sql);


 

if (isset($_GET['del'])) {
	$id = $_GET['del'];
    $sqll="DELETE FROM department WHERE Depart_id=$id;";
	$check=mysqli_query($connection, $sqll);
	if($check)
    {echo"Done dana Done";}
    else{
        echo"Failed";
    }
    header('location: department.php');
	
}

  


?>