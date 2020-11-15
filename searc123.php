<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./rentcss21.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <style>

.header {
  padding: 60px;
  text-align: center;
  background: #fad5ad;
  color: white;
  
  font-size: 30px;
}

 

  </style>

</head>

<body>

    <section class="sec1">
        <div class="container1">
            <!-- <ul class="navul">
                <li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li>
                <li><a href="#">sale</a></li>
            </ul> -->
        </div>
        <div class="container2">
            <h1>buysale.com</h1>
        </div>
        <div class="container3">
            <ul class="navul">
                <!-- <li><a href="#">Buy</a></li>
                <li><a href="#">Rent</a></li> -->
                <li class="log1"><a href="index.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
            </ul>

        </div>
        <!-- visible when screen width less then630 using media  -->
        <div class="min-630">
            <div class="dropdown">
                <!-- <p id="butmen">Menu</p> -->
                <!-- <div class="dropdown-content">
                    <ul>
                        <li><a href="">Menu</a></li>
                        <li><a href="">Buy</a></li>
                        <li><a href="">sell</a></li>
                        <li><a href="">Rent</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </section>

    <!-- head section over  -->

    <section class="bloc">
        <!-- <div class="side1">
            <ul>
                <li class="icon1"><i class=" icon1 fa fa-user" aria-hidden="true"></i></li>
                <li id="upda"><a href="">update</a></li>
                <li id="sale1"><a href="">sale</a></li>
                <li id="buy1"><a href="">buy</a></li>
            </ul>
        </div> -->
        <br><br>


<!-- code  inside the sidemar-->
        <div class="sidemar">
           
             <div class="imgpag">

             </div>
         
        </div>
 
      

    </section>



    <script src="rentjs21.js">
    </script>
</body>

</html>


<?php
    include('conn1.php');
    ?>

 <?php
   $s12 = $_GET['sea'];
    $sqlsal="SELECT * FROM buy WHERE loca LiKE '%$s12%' OR stat LIKE '%$s12%' ";

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
    
  if(mysqli_num_rows($ressal)==0){
     echo '<div class="header">
          <h1>Sorry</h1>
  <p>No such location found</p>
  <p>Go back search another keyword</p>
  <p style="font-size: 100px;">&#128532</p>
</div>';

  }

    }else{
        echo '<script>alert("error in query : searc123");</script>';
        echo mysqli_error($conn1);
    }
    
?>


