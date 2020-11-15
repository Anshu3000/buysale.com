<?php 
 $dbnm="buysale";
 $servernam="localhost:3309";
 $use1="root";
 $pass="";

 $conn1=mysqli_connect($servernam,$use1,$pass,$dbnm);
 
 
  if(!$conn1){
    echo  '<script>alert("connection unsuccessful");</script>';
   die("connection Failed ". mysqli_error());
  }else{
      // echo  '<script>alert("connection  successful");</script>';
  }
//    $sqli=" INSERT INTO userlogin (email1 ,	pass1 ) VALUES ( ) " 

    
  ?>




