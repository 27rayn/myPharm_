<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- CSS Saya -->
  <link rel="stylesheet" href="<?= base_url('assets'); ?>/style.css" />

  <title>MyPharm</title>
  <link rel="icon" type="image/png" href="<?= base_url('assets'); ?>/img/Frame 32.png" />

  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="<?= base_url('assets'); ?>/img/Logo Navbar.png" alt="" width="115" height="50" /> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-primary" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('after_shop'); ?>">Shop</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item" href="#">Pharmacy</a></li>
              <li><a class="dropdown-item" href="#">Personal Care</a></li>
              <li><a class="dropdown-item" href="#">Family Care</a></li>
              <li><a class="dropdown-item" href="#">Accessories</a></li>
              <li><a class="dropdown-item" href="#">Fitness</a></li>
              <li><a class="dropdown-item" href="#">Health Devices</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <div class="d-flex flex-wrap align-items-center justify-content-start">
          <form class="me-3" action="#" method="POST">
            <input class="form-control" type="text" name="search-home" placeholder="Search" aria-label="Search" />
          </form>
          <?php if ($this->session->has_userdata('email')) { ?>
            <div class="flex-shrink-0 dropdown">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url('assets/upload/') . $this->session->userdata('foto'); ?> " alt="profile pic" width="32" height="32" class="rounded-circle" />
              </a>
              <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Daftar Transaksi</a></li>
                <li><a class="dropdown-item" href="#">Order History</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Sign out</a></li>
              </ul>
            </div>
          <?php } else { ?>
            <a class="btn btn-primary mx-2" href="<?= base_url('auth/register'); ?>">Sign Up</a>
            <a class="btn btn-outline-primary" href="<?= base_url('auth'); ?>">Login</a>
          <?php } ?>
          <a class="btn btn-labeled btn-primary mx-2" href="<?= base_url('after_cart'); ?>">
          <i class="bi bi-cart3" style="font-size: 17px; margin-right:4px;"></i>
            Cart
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->