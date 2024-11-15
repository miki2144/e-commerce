<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css"> <!-- External CSS file -->
    
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MENU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Catalogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Payment</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> -->

<div class="sidebar">
<h3 class="text-center">Menu</h3>
    <a href="#" class="d-flex align-items-center mb-2">
        <i class="fas fa-home me-2"></i> Home
    </a>
    <a href="customer/index.php" class="d-flex align-items-center mb-2">
        <i class="fas fa-user-circle me-2"></i> Profile
    </a>
    <a href="#" class="d-flex align-items-center mb-2">
        <i class="fas fa-cog me-2"></i> Settings
    </a>
    <a href="product/index.php" class="d-flex align-items-center mb-2">
        <i class="fas fa-plus-circle me-2"></i>  catalog
    </a>
    <a href="#" class="d-flex align-items-center mb-2">
        <i class="fas fa-shopping-cart me-2"></i> My Orders
    </a>
    <a href="#" class="d-flex align-items-center mb-2 logout">
        <i class="fas fa-sign-out-alt me-2"></i> Logout
    </a>
</div>

<div class="content">
    <!-- <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Card Title 1</h5>
            <p class="card-text">Some quick example text to build on the card title.</p>
            <a href="#" class="btn btn-primary">see more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Card Title 2</h5>
            <p class="card-text">Some quick example text to build on the card title.</p>
            <a href="#" class="btn btn-primary">see more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Card Title 3</h5>
            <p class="card-text">Some quick example text to build on the card title.</p>
            <a href="#" class="btn btn-primary">see more</a>
        </div>
    </div>
    <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Card Title 3</h5>
            <p class="card-text">Some quick example text to build on the card title.</p>
            <a href="#" class="btn btn-primary">see more</a>
        </div> -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="imags/j.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/k.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/papa.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/pop.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="imags/d.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/ban.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/f.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/d.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="imags/j.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/pop.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/ban.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <button type="button" class="btn btn-success" < a href="#" >Success</button></a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="imags/d.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button type="button" class="btn btn-success" < a href="#" >add cart</button></a>

      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>