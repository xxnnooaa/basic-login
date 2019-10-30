<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">PigPower</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="animal.php">Animal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="travel.php">Travel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aurora.php">Aurora</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nature.php">Nature</a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['id'])) {?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Welcome <?php echo $_SESSION['name']; ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
      <?php } else {?>
      <li class="nav-item">
      <a class="btn btn-warning " href="register.php">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary " href="login.php">Login</a>
      </li>
      <?php }?>
    </ul>
  </div>
  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1504567961542-e24d9439a724?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1288&h=400&q=80" class="d-block w-100" alt="First Slide">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1500349812227-3264f5f54181?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1288&h=400&q=80" class="d-block w-100" alt="Second Slide">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1558979158-65a1eaa08691?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1288&h=400&q=80" class="d-block w-100" alt="Third Slide">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1531366936337-7c912a4589a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1288&h=400&q=80" class="d-block w-100" alt="Fourth Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="jumbotron">
<div class="container text-center">
  <h1 class="display-4">Welcome to page</h1>
  <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic dolorum placeat laboriosam magnam necessitatibus voluptates dolorem sint mollitia harum eius est cupiditate voluptas optio, ipsa recusandae, et tenetur. Magni, necessitatibus.</p>
</div>
</div>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>