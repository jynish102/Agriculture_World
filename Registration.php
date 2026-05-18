<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>RAGESTRATION FORM</title>
<link rel="stylesheet" href="css/Style2.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>
  
  <body style="background:url(picture/B.ullock.jpg) no-repeat;background-size: cover;
   
    background-position:center; 
    background-attachment:fixed;font-size:30px">
    
<!--Start Navbar-->    
    <?php
   include'nav.php';
   ?>
    <!--End Navbar-->
    
    <!--Start form-->
    <div class="container">
   <header class="form-header">
        <h1 style ="color:purple;border-bottom: 4px solid palegreen;">Register to Agriculture Marketplace</h1>
    </header>


    <div class="form-box">
      <form action="register.php" method="post">
      <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username" required>
         <label for="email">email:</label>
        <input type="email" name="email" placeholder="Email" required>
         <label for="password">password:</label>
        <input type="password" name="password" placeholder="Password" required>
        <label for="role">role:</label>
        <select id="role" name="role">
                <option value="farmer">Farmer</option>
                <option value="consumer">Consumer</option>
            </select>
        <button type="submit">Register</button>
      </form>
    </div>
  </div>
<!--end Form-->
</body>
</html>