<?php
    include('conn1.php');
   
    $sqlsal="SELECT * FROM buy";

    $ressal=mysqli_query($conn1,$sqlsal);

    if($ressal){
        
     while($ro=mysqli_fetch_array($ressal,MYSQLI_ASSOC)){
         ?>

 <script>
var img23 = document.getElementsByClassName("imgpag");

<!-- for (let i = 0; i < 3; i++){ -->
  let div1 = document.createElement("div");
  div1.setAttribute("class", "blocimgsl");

  let imdiv = document.createElement("img");
  imdiv.setAttribute("src", <?php echo json_encode($ro['image1']); ?> );
  
  let desc = document.createElement("p");
let desctex = document.createTextNode(<?php echo json_encode('descript'); ?>);
 
  let sta = document.createElement("p");
  let stattex = document.createTextNode(<?php echo json_encode($ro['loca']); ?>);
  
   let st = document.createElement("p");
  let sttex = document.createTextNode(<?php echo json_encode($ro['stat']) ;?>);
  

   let min1 = document.createElement("p");
   let mintex = document.createTextNode("PRICE(RS) : ");
   let minspan = document.createElement("span");
   let minspantex = document.createTextNode(<?php echo json_encode($ro['price1']); ?>);
  minspan.appendChild(minspantex);
  min1.appendChild(mintex);
  min1.appendChild(minspan);

  let con1 = document.createElement("p");
  let contex = document.createTextNode("Contact (seller) :");
  let conspan = document.createElement("span");
  let conspantex = document.createTextNode(<?php echo json_encode($ro['telno']) ;?>);
  conspan.appendChild(conspantex);
  con1.appendChild(contex);
  con1.appendChild(conspan);

  
  desc.appendChild(desctex);
  sta.appendChild(stattex);
  st.appendChild(sttex);
  div1.appendChild(imdiv);
  div1.appendChild(desc);
  div1.appendChild(sta);
  div1.appendChild(st);
  div1.appendChild(min1);
  div1.appendChild(con1);

  img23[0].appendChild(div1);

  </script>
<!-- } -->

     <?php
    }


    }else{
        echo '<script>alert("error in query :sale12");</script>';
    }
    
?>