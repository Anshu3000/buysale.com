
<?php 
     require 'conn1.php';

     if(isset($_POST['sum1'])){
       
        $fol1="imag1/".$_FILES['fileim']['name']  ;
        $temn=$_FILES["fileim"]["tmp_name"];
          move_uploaded_file($temn,$fol1);

         $despr=$_POST['comm'];
         $loc1=$_POST['locat'];
         $stat1=$_POST['state1'];
         $telno=$_POST['telno'];
         $email1=$_POST['emal1'];
         $pricenu=$_POST['price2'];

        // echo $despr;
        // echo $loc1;
        // echo $stat1;
        // echo $telno;
        // echo $email1;
        // echo $pricenu;
        // echo $fol1;
         
       $sql31="INSERT INTO buy (descript,loca,stat,telno,email2,price1,image1) VALUES ('$despr','$loc1','$stat1','$telno','$email1','$pricenu','$fol1')"; 
         
        
        if(mysqli_query($conn1,$sql31)){
     echo '<script> alert("insertion succesfull") ;
            window.location="index2.php";
       </script>';  
        }else{
           echo '<script> alert("insertion unsuccesfull") ;
                   window.location="index2.php";
              </script>';   
        }
         
     } else{
         echo  '<script>alert("isset problem successful");</script>';
    
    }




?>