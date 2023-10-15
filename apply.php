<?php
include "connect_to_mysqli.php"; 

if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $email = $_POST['email'];
    $discord = $_POST['discord'];
    $twitter = $_POST['twitter'];


  $extract_user = mysqli_query($con,"SELECT * FROM ophir WHERE twitter='$twitter' AND email='$email' AND discord='$discord'");
  $count = mysqli_num_rows($extract_user);     
 if ($count >= 1 )  { 
    echo '<script type="text/javascript">
    $(document).ready(function(){
        $("#modalsuccess").modal("show");
    });
  </script>';  
  header("refresh:2;url=index.php");   }
     
     else{


    //current date
    $dete=date('d-m-y');


//submit to tweet table
$submit = mysqli_query($con,"insert into ophir (name, discord, twitter, email, status,date) 
values ('$email','$discord','$twitter','$email','Yes','$dete')") or die ('Could not connect: ' .mysqli_error($con));


echo '<script type="text/javascript">
        $(document).ready(function(){
            $("#modalsuccess").modal("show");
        });
      </script>';
      header("refresh:2;url=index.php"); 



                       
}

session_start();
$_SESSION['ecode']=$name;

}

?>