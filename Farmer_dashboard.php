<?php
//session_start();
//if (!isset($_SESSION['role']) || $_SESSION['role'] != 'farmer') {
   // header("Location: login.php");
  //  exit();
//}
?>

<!DOCTYPE html>
<html>
<head>
<title>Farmer Dashboard</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
     
     <style>
     .container-fluid0{
  margin-top:75px;
 }
 </style>
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
         crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
   integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
   crossorigin="anonymous"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

  
</head>

<body>
      <!--Start Navabar-->
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
    <h1>Farmer Dashboard </h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Farmer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
            <a class="nav-link" href="Farmer_dashboard.php">Farmer_dashboard</a>
          <li class="nav-item">
            <a class="nav-link" href="add_product.php">add_product</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="view_product.php">view_product</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="delete_product.php">delete_product_product</a>
          </li>
            <div>
    <a href="logout.php"class="btn btn-primary">logout</a>
  </div>
          </div>
    </div>
  </div> 
  

 </nav>
    <!--End Navbar-->
  <div class="container-fluid0">
    <!--START YIELD-->
    <mark>TRAKE,MANAGE AND GROW YOUR FARM </mark>
    <p>Crop yield is the amount of agricultural production harvested per unit of land area. 
        It's a standard measurement that's often used for cereal, grain, or legumes. In the
         United States, crop yield is typically measured in bushels, tons, or pounds per acre.
          <a href="https://www.investopedia.com//terms/c/crop-yield.asp"><i class="fa-solid fa-link"></i>
        </a> </p>
  </div>
  <!--start card-->
 <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
          <h5 class="card-title">crop yield</h5>
        <img src="picture/yield1.jpeg" class="card-img-top"  style="heigt:650px;width:650px">
        
        <div class="card-body">
           <a href="https://jaihokisan.in/8-important-techniques-to-improve-crop-productivity-in-agriculture.html" class="btn btn-primary"><i clss="fa-brands fa-google"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
                <h5 class="card-title">crop management</h5>
        <img src="picture/yield2.jpg" class="card-img-top"  style="heigt:650px;width:650px">
        <div class="card-body">
          <a href="https://www.researchgate.net/figure/Different-factors-effecting-crop-production-and-resource-use-efficiency_fig1_374696124" class="btn btn-primary"><i clss="fa-brands fa-google"></i></a>
  .      </div>
      </div>
    </div>
    </div>
    <!--END CARD-->
     <!--END YIELD-->
      
      <!--start weather-->
      <div >
        <p>Weather forecasts are <mark>important for agriculture because they help farmers make informed decisions that can improve crop production and reduce losses:</mark>
  Planning
  Farmers can use weather forecasts to plan planting, irrigation, harvesting,
   and other farm operations.<a href="https://www.jiva.ag/blog/role-of-weather-forecasting-in-farming#:~:text=For%20example%2C%20weather%20forecasting%20enables,climatic%20changes%20before%20they%20occur!&text=Previously%2C%20farmers%20relied%20on%20their,weather%20updates%20on%20their%20smartphones.">
    <i class="fa-brands fa-link"></i></a></p>
      </div>
      
      <!--start card-->
       <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
          <h5 class="card-title">Weathering the Storm: Revolutionising Indian Agriculture 
            through Advanced Weather Forecasting</h5>
        <img src="picture/weather1.jpeg" class="card-img-top" style="heigt:650px;width:650px" >
        
        <div class="card-body">
           <a href="https://www.linkedin.com/pulse/weathering-storm-revolutionising-indian-agriculture-through-kansal-55qzf?utm_source=share&utm_medium=member_android&utm_campaign=share_via"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
                <h5 class="card-title">Weather information</h5>
        <img src="picture/weather2.jpeg" class="card-img-top" style="heigt:650px;width:650px">
        <div class="card-body">
          <a href="https://www.fao.org/e-agriculture/news/agro-weather-tool-climate-smart-agriculture"
           class="btn btn-primary"><i class="fa-solid fa-google"></i></a>
  .      </div>
      </div>
    </div>
    </div>
      
      <!--end card-->
      <!--END WWATHER-->
       </body>
  
  </html>
  
      
     

