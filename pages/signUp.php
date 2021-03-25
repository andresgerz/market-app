<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="container-fluid navbar-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand mr-5" href="#">Market App</a>
          <ul class="navbar-nav mr-auto mt-2 ml-5 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="https://market-app.lndo.site">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.html">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
          </ul>
        </div>
        <div>
          <p>
            <strong class="counter"></strong> 
            <a href="./cart.html">
              <span class="icon-shopping-cart"></span>
            </a>
          </p> 
        </div>
      </nav>
    </div>
  </header>
  <main>
    <h1>
      Sign Up
    </h1>
    <div>
      <?php 
        include('./backend/actions/register.php');
        
        if (!empty($message)): 
      ?>
      <h3><?= $message ?></h3>
        <?php endif; ?>
    </div>
    <form action="https://market-app.lndo.site/backend/actions/register.php" method="post">
      <div>
        <label for="name-name">Name</label>
        <input type="text" name="name-name" id="name-id">
      </div>
      <div>
        <label for="surname-name">Surname</label>
        <input type="text" name="surname-name" id="surname-id">
      </div>
      <div>
        <label for="email-name">Email</label>
        <input type="email" name="email-name" id="email-id">
      </div>
      <div>
        <label for="country-name">Country</label>
        <input type="text" name="country-name" id="country-id">
      </div>
      <div>
        <label for="state-name">State</label>
        <input type="text" name="state-name" id="state-id">
      </div>
      <div>
        <label for="city-name">City</label>
        <input type="text" name="city-name" id="city-id">
      </div>
      <div>
        <label for="address-name">Address</label>
        <input type="text" name="address-name" id="address-id">
      </div>
      <div>
        <label for="floor-name">Floor</label>
        <input type="number" name="floor-name" id="floor-id">
      </div>
      <div>
        <label for="dept-name">Dept</label>
        <input type="text" name="dept-name" id="dept-id">
      </div>
      <div>
        <label for="card-name">Card</label>
        <input type="text" name="card-name" id="card-id">
      </div>
      <div>
        <label for="nro-card-name">Number of card</label>
        <input type="number" name="nro-card-name" id="nro-card-id">
      </div>
      <div>
        <label for="password-name">Password</label>
        <input type="password" name="password-name" id="password-id">
      </div>
      <div>
        <label for="password-repeat-name">Repeat Password</label>
        <input type="password" name="password-repeat-name" id="password-repeat-id">
      </div>
      <div>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </main>
  <!-- jQuery JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <!-- Boostrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>