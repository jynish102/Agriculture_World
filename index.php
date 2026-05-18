<html>
<head>
   <title>AGRICULTURE WORLD</title>
   <link rel="stylesheet" href ="css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
 </head>
 <body>
    
   <!--Start Navbar-->
     <?php
     include 'nav.php';
     ?>

    <!--End Navbar-->

   <!--Start Vedio-->
    <div class="container-fluid remove-vid-marg">
       <div class="vid-parent">
         <video autoplay playsinline loop muted >
             <source src="video/farming.mp4" type="video/mp4"></source>
         </video>
       </div>
       <div class ="vid-content">
         <h1 class="my-content">Welcome to Agrotech</h1>
         <small>Your Partner in Sustainable Farming</small>
       </div>
   </div>
   <!--end video-->
  <!--start bottom part-->
    <div class="container-fluid2">
     <img src="picture/farmer.jpg" class="rounded-circle" >
      <h1 style ="text-align:center;">AGRICULTURE </h1>
     <p>Agriculture is the<mark> backbone of our country's economy.</mark> It is the main traditional occupation of our country. India produces both Kharif and Rabi crops. The main crops produced in India are rice, wheat, maize, jute, sugarcane, other cereals, pulses, spices, cotton, tea, coffee, etc.Agriculture is the<mark style="background-color:green;"> cultivation of land and raising of animals to produce food, fiber, medicinal plants, and other products. It also includes aquaculture and forestry.</mark>Agriculture is a key factor in the rise of human civilization, as farming domesticated species created food surpluses that allowed people to live in cities. It is the world's most important enterprise.</p>
     <p> This section provides the information on agriculture produces; grain,fruit,flower etc. Also this page includes information about types of agriculture, history.
     </p>
   </div>
   <!--end bottom part-->
   <!--star card img -->
   <div class="row">
     <div class="col-sm-6 mb-3 mb-sm-0">
       <div class="card">
         <div class="card-body">
           <img src="picture/bullock.jpg" style="heigt:850px;width:850px">
         <br><br> <a href="https://youtu.be/NEPPxJGk96o?si=rRkh1nbIrNfAiicB"><i class="fa-brands fa-youtube"></i></a>
          </div>
       </div>
      </div>
      <div class="col-sm-6">
         <div class="card">
           <div class="card-body">
             
<img src="picture/comercial.jpg" style="heigt:850px;width:850px"> 
                <br><br><a href="https://youtu.be/GFuM0_kvBcE?si=xrPvwb2axULfOnq0"><i class="fa-brands fa-youtube"></i></a>
           </div>
         </div>
     </div>
   </div>
   <!--end img-->
   <!--start footer-->
   <?php
   include 'footer.php' ?>
 <!--end footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>