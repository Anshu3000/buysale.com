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
                <li class="log1"><a href="index.html"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a></li>
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


        <!-- code  inside the sidemar-->
        <div class="sidemar">

           <section class="reviewform">
     <div style="font-size:30px; padding-top:20px; text-decoration: underline; font-weight: 900; padding-bottom: 20px;">
         Give your feedback
     </div>
    <div class="reviewformblo">
        <form action="review123.php" method="GET">
            <label for="useremail">Enter your mail :</label>
            <input type="email" name="emailsu" id="useremail" placeholder="enter your mail" required>
          <label for="revi">Enter your review :</label> 
          <textarea rows="50" cols="50" 
          placeholder="enter your review and help ourself to impprove user experience ..." name="reviewsu" id="revi" required></textarea>

            
          <input type="submit" name="submitre" value=" submit " id="subrev">  
        </form>
    </div>
</section>
             
        </div>


    </section>



    <script src="rentjs21.js">
    </script>
</body>

</html>