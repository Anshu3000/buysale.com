
<?php  require 'conn1.php' ;
  
    if(isset($_POST['signlog12'])){
        $us1=$_POST['emailin'];
        $pas=$_POST['passin'];
      
        $sql2="SElECT * FROM userlogin WHERE email1 ='$us1' AND pass1='$pas' "; 
      
        $res1=mysqli_query($conn1, $sql2);
    
        if(mysqli_num_rows($res1)>0){
            echo '<script>alert("login succesfull");
            window.location="index2.php";
            
            </script>';
        
        }else{
            echo  '<script>alert("please enter right password ");</script>';
        }

     }
     
     //else{
    //      echo  '<script>alert("isset problem successful");</script>';
    //  $use1=$_POST['emailin'];
    //     $pass1=$_POST['passin'];   
         
    //    echo $use1.$pass1; 
    // }

?>