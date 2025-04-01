<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'commonfiles.php' ?>
  <title>TechShop</title>
</head>

<body>
  <header class="">
  <nav class="bg-dark d-flex text-light p-2">
  <div class="d-flex align-items-center me-auto">
    <p class="mb-0"><i class="fa-solid fa-truck"></i> Free Delivery Above ₹500</p>
  </div>
  
  <div class="me-3">
    <ul class="navbar-nav d-flex flex-row gap-3">
      <li class="nav-item">
        <a class="nav-link active text-light" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Services</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-light" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="?home=true">TechShop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 gap-2">
          <?php if (isset($_SESSION['username'])): ?>
        <li class="nav-item">
          <a class="nav-link text-light fw-bold" href="#"> <i class="fa-regular fa-user"></i>  <?php echo strtoupper($_SESSION['username']); ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </li>
      <?php else: ?>
            <li class="nav-item">
              <a class="nav-link active" href="?login=true"><i class="fa-regular fa-user"></i> Login</a>
            </li>
      <?php endif; ?>
            <li class="nav-item">
              <a class="nav-link active" href="?wishlist=true"><i class="fa-regular fa-heart"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active me-5 position-relative" href="?cart=true"><i class="fa-solid fa-cart-shopping"></i><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-secondary">+99 <span class="visually-hidden">unread messages</span></span></a>
              
            </li>
          </ul>

          <!-- Search Form -->
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light bg-white text-dark" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>