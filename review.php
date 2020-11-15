
<?php 
    require 'conn1.php';
   
   $sql4=" SELECT * FROM  review1 "; 
   $RES2=mysqli_query($conn1,$sql4);
    $p1=array();
     $i=0;

   if(mysqli_num_rows($RES2)>0)
   { 
      while($row2=mysqli_fetch_assoc($RES2)){
        $p1[$i]=array($row2['id'],$row2['userrev'],$row2['useremail']);
         $i++;
      }
    //  print_r($p1);
   }

  ?>
   
   <script>
  var p2= <?php echo json_encode($p1); ?> ;
     console.log(p2.length);
  var j=-1;

//    for(var i=0;i<p2.length ;i++)
//    {document.write(p2[i]); }
    
// alert(p2[0][1]);

 var righ = document.getElementById("rightarrow");
 var lef=document.getElementById("leftarrow");

righ.addEventListener('click', function () {  
    var x1 = document.getElementById("o3p");
    var x2 = document.getElementById("o2p"); 
    var x3 = document.getElementById("o1p");
    
    var x11 = document.getElementById("op3use");
    var x22 = document.getElementById("op2use");
    var x33 = document.getElementById("op1use");

     j++;

    //  alert(p2[j][1]);
     //console.log(x1.textContent);
 // x1.textContent=p2[0][1];

       if(j<p2.length){
           x1.textContent=p2[j][1];
           x11.textContent=p2[j][2];
       }

        if (j + 1 < p2.length) {
             x2.textContent=p2[j+1][1];
             x22.textContent=p2[j+1][2];
         }
        
       if(j+2<p2.length){
           x3.textContent=p2[j+2][1];
           x33.textContent=p2[j+2][2];
          j+=2; 
       }  
    
});


 lef.addEventListener('click', function (){
       var x1 = document.getElementById("o3p");
    var x2 = document.getElementById("o2p");
    var x3 = document.getElementById("o1p");

     var x11 = document.getElementById("op3use");
    var x22 = document.getElementById("op2use");
    var x33 = document.getElementById("op1use");
    
     j--;

        if(j>=0){
           x1.textContent=p2[j][1];
            x11.textContent=p2[j][2];
       }

        if (j - 1 >=0) {
             x2.textContent=p2[j-1][1];
              x22.textContent=p2[j-1][2];
         }
        
       if(j-2>=0){
           x3.textContent=p2[j-2][1];
            x33.textContent=p2[j-2][2];
          j-=2; 
       }  
    
});

    </script>

  <?php

?>