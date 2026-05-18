<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style2.css">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
   
</head>

<body style="background:url(picture/B.ullock.jpg) no-repeat;background-size: cover;
   
    background-position:center; 
    background-attachment:fixed;">
  <background-img :url="picture/burg.jpg"></background-img>
    
    <div class="container">
    <header class="form-header">
        <h1 style="color:green;border-bottom: 4px solid palegreen;">Login to Agriculture Marketplace</h1>
    </header>

    <div class="form-box">

      <form action="login_check.php" method="post">    
        <label for="email">email:</label>
        <input type="text" name="email" placeholder="email" required>
             <label for="password">password:</label>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
