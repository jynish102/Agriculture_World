<?php
include 'db.php'
//session_start();

//if (!isset($_SESSION['email']) || $_SESSION['role'] != 'farmer') {
  //  header('Location: login.php');
//}

//require_once 'db.php';

//$query = "SELECT * FROM products";
//$result = mysqli_query($conn, $query);
$sql="SELECT * FROM products";
$result=+mysqli_query($conn,$sql);
?>
<html>
  <head>
    <title>View product</title>
    <style>
      .table_th{
        padding: 100px;
        font-size:20px;
        margin:100px;
      }
      .table_td{

      }
      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
          </li>
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
 

<table border="1px;">
    <tr>
        <th class="table-th">Product ID</th>
        <th class="table-th">name</th>
        <th class="table-th">description</th>
        <th class="table-th">prize</th>
        <th class="table-th">categoty</th>
    </tr>
    <?php while ($row =$result->fetch_assoc()) { ?>
    <tr>
        <td class="table_td"><?php// echo $row['id']; ?></td>
        <td><?php// echo $row['name']; ?></td>
        <td><?php// echo $row['description']; ?></td>
        <td><?php //echo $row['price']; ?></td>
        <td><?php //echo $row['quantity']; ?></td>
        <td><a href="edit_product.php?id=<?php //echo $row['id']; ?>">Edit</a> | <a href="delete_product.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php  ?>
</table>
</body>
</html>
