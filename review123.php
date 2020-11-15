<?php
 include('conn1.php');

 if(isset($_GET['submitre'])){
     $use=$_GET['emailsu'];
     $revi1=$_GET['reviewsu'];
    
   $sqlre="INSERT INTO review1(userrev,useremail) VALUES ('$revi1','$use')";  
   
   $resre=mysqli_query($conn1,$sqlre);

   if($revi1){
       echo '<script>alert("feedback successful recorde");
       window.location.assign("http://localhost/college_project");
         </script>';
         
   }else{
       echo '<script>alert("error in quiry of review form ");</script>';
   }

 }else{
     echo '<script>alert("please fill the form first");</script>';
 }

?>