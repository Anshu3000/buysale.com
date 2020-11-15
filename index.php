<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./rentcss.css"> 
    <title>Rent.com</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
   <?php include'header1.php'; ?>
   
    <!-- head section over -->
   
    <section id="newsta">
        <div id="newsta1">
           <div class="form1">
               <div class="btnsha">
                   
                  <button class="togglebtn in">sign in</button>
                  <button class="togglebtn up">sign up</button>
               </div>
           
  <form action="loginsignin.php"  autocomplete="on" 
   name="formin"
  method="POST">       
    <div class="input-group" id="signin">
      <span style="border:3px solid ;border-radius: 50%; padding: 10px; margin: 10px;">  <i class="fa fa-user fa-4x"  aria-hidden="true"></i></span>
     <input type="email"placeholder="enter user email" class="input-field" required name="emailin">
     <input type="password" placeholder="enter password" class="input-field" required name="passin">
      <input type="submit" value=" Submit " class="input-field" name="signlog12">
     <input type="button" value=" Cancel " class="input-field">
     </div>
  </form>

 
    <form action="loginsignup.php" name="sign1log" onsubmit="return validf() " autocomplete="on" method="POST">
     <div class="input-group" id="signup">
        <span style="border:3px solid ;border-radius: 50%; padding: 10px; margin: 10px;"> <i class="fa fa-sign-in fa-4x"
                aria-hidden="true"></i></span>
        <input type="email" placeholder="enter user email" 
         name="useremail1"
        class="input-field" required>
        <input type="password" placeholder="enter your password" name="enpassw"
        class="input-field">
        <input type="password" placeholder="retype password" 
        name="repassw"
        class="input-field">
   <input type="submit" value="Submit" name="signlog3" class="input-field">
        <input type="button"  value=" Cancel " class="input-field">
        </div>
    </form>
       </div>
      
    <section class="search-bar">
       <div class="box1">
       <!-- <form> -->
        <input type="search" name="search" placeholder="Search by location"
                 id="sea123" onchange="sear1(this.value)">
                <i  class="fa fa-search" aria-hidden="true"></i> 
          <!-- </form>         -->
       </div>     
         <div class="box23">
           <p>Enjoy Living in your  Dream Home</p>
         </div>
    </section>

           </div>
        <!-- //</div> -->
    </section> 

    <!-- discover -->

     <section class="dis1">
        <div class="revie">
           <p> What about our customer thoutght</p>
        </div>

         <div class="revwidth23">
     <i class="fa fa-arrow-left"
    id="leftarrow" aria-hidden="true"></i>
             <div class="revwidth" id="o1">
          
                <img src="House2.webp" width="100px" height="100px" alt="admin face">

                 <p id="o1p">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus reiciendis asperiores tempora harum commodi iusto nisi. Sequi
                 </p>
                 
                 <p class="user1">User :<span id="op1use">gmail.com</span></p>

             </div>

            <div class="revwidth"
            id="o2">
            
                <img src="House2.webp" width="100px" height="100px" alt="admin face">
            
                <p id="o2p">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus reiciendis asperiores tempora
                    harum commodi iusto nisi. Sequi 
                </p>
                <p class="user1">User :<span id="op2use">gmail.com</span></p>
            </div>
            <div class="revwidth"
            id="o3">
            
                <img src="House2.webp" width="100px" height="100px" alt="admin face">
            
                <p id="o3p">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus reiciendis asperiores tempora
                    harum commodi iusto nisi. Sequi e
                </p>
              
              <p class="user1">User :<span id="op3use">gmail.com</span></p>
            </div>
            <i  class="fa fa-arrow-right" aria-hidden="true" id="rightarrow"></i>
         </div>

    </section>
     
     <?php require'review.php';?>

    <script>

    </script>

    <!-- about section -->

    
    <section class="abo">
        <div class="abo1">
            <h1>What we do</h1>
              <p> Our site helps you find the best property available in your budget and and fulfilling all your needs in almost no time and that too without any brokerage if you are one of our top customers. We believe in building a strong relationship with our customers and expect full cooperation and trust on us.</p>
        </div>
          
    </section>

    <!-- about us -->
      <section class="aboti12">
         <div class="about234">
            <h1> About us</h1> 
              <p>This site is create by Dipankur Lawaria and Anshu Jaiswal. We are currently pursuing bachelors in Computer Engineering from Delhi Technological University. Our intent behind this site is to help people get acquainted much more with the internet and technological stuff in terms of property dealing to save them their hard earned money to going to manipulative brokers and let them choose from a wide variety of choices.
            
               </p>
            <p style="padding-top:30px">
               rights reserved to anshu And deepankar
                   &copy; 2010-<?php echo date("Y");?>
            </p>    
         </div>
    </section>

    <script>
      function sear1(val) {
        //   alert("value you want to send "+val);
         window.location.href ="http://localhost/college_project/searc123.php?sea="+val;  
      }
   </script>

    <script src="./rentjs.js">
    </script>
</body>
</html>