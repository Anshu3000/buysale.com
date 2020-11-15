<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="./rentcss21.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
                <!-- <p id="butmen">Menu</p>
                <div class="dropdown-content">
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
          <div class="side1">
              <ul>
                  <li class="icon1"><i  class=" icon1 fa fa-user" aria-hidden="true"></i></li>
                  <li id="upda"><a href="index.php">Home</a></li>
                <li id="sale1"><a href="index2.php">sale</a></li>
                  <li id="buy1"><a href="sale1.php">buy</a></li>
                  <li id="search1"><a href="searchbysale.php">search</a></li>
                   <li id="feedbac"><a href="feedback12.php">Feedback</a></li>
              </ul>
          </div>
         <br><br>
         
         <div class="sidemar">
            
            <div id="form3">
                <form action="imageinsertion1.php" method="POST"enctype="multipart/form-data">
                <fieldset>
                    <legend>SALE POST FORM</legend>
                   <label for="upl">upload a property image :</label>  
                 <input type="file"  id="upl" name="fileim" accept=".jpg, .jpeg, .png" required > 

                <label for="des">describe the property :</label>
                <textarea name="comm" id="des" row="10" cols="30" placeholder="describe the property.." required>
                </textarea>
                 <label for="loc">Enter the location :</label>
                 <input type="text" name="locat" id="loc" class="classinput" placeholder="Enter the full address" required>
                 
                <label for="sta">Enter the State:</label>
                <input type="text" name="state1" id="sta" class="classinput" placeholder="Enter the state" required>
                
                <label for="tel">Enter the telephone number :</label>
                <input type="number" name="telno" id="tel" class="classinput"  placeholder="Enter the telephone number" required> 
              
                <label for="ema">Enter the email :</label>
                <input type="email" name="emal1" id="ema" class="classinput" placeholder="Enter the email" required>
                
                <label for="pri1">Enter the price number :</label>
         <input type="text"   name="price2" id="pri1" class="classinput" placeholder="Enter the price" required>
                 
               <input type="submit" class="classinput" name="sum1" value="submit">
                </fieldset>
             </form>
            </div>
 <!-- <?php print_r($_FILES['fileim']); 
       print_r( $_FILES['fileim']['name']);
    
    print($_FILES["fileim"]["tmp_name"]);

   $fol1="imag1/".$_FILES['fileim']['name']  ;
   $temn=$_FILES["fileim"]["tmp_name"];
   move_uploaded_file($temn,$fol1);
     ?> -->
         </div>

     </section>

  

    <script src="rentjs21.js">
    </script>
</body>
</html>