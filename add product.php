 
  <?php
 // session_start();
  
  //if (!isset($_SESSION['email']) || $_SESSION['role'] != 'farmer') {
    //  header('Location: login.php');
  //}
  
  include  'db.php';
  if (isset($_POST['add_products'] )){
      $name = $_POST['name'];
      $description = $_POST['description'];
      $prize = $_POST['prize'];
      $category= $_POST['category'];
      //$sql="INSERT INTO `products`(`id`, `name`, `description`, `prize`, `category`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]')";
      $query = "INSERT INTO products (name, description, prize, category) VALUES ('$name', '$description', '$prize', '$category')";
      $result = mysqli_query($conn,$query);
  
      if ($result) {
          echo 'Product added successfully!';
      } else {
          echo 'Failed to add product!';
      }
  } 
  ?>  