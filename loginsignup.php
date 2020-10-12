 
  <?php  require'conn1.php';
     
    // print_r($_POST);

    if(isset($_POST['signlog3'])){
        $use1=$_POST['useremail1'];
        $pass1=$_POST['enpassw'];
         $sqli=" INSERT INTO userlogin (email1 ,	pass1 ) VALUES ( '$use1' , '$pass1') " ;
     // echo $use1.$pass1; 
     if(mysqli_query($conn1,$sqli)){
          echo  '<script>alert("insertion successful");
           
          </script>';
        //  echo 'new login successfull';
     }else{
          echo  '<script>alert("insertion unsuccessful");</script>';
        //   echo 'new login unsuccessfull';
     } 

    }
    // else{
    //      echo  '<script>alert("isset problem successful");</script>';
    //  $use1=$_POST['useremail1'];
    //     $pass1=$_POST['enpassw'];   
         
    //    echo $use1.$pass1; 
    // }
  ?>