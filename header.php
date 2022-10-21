<?php session_start(); ?>

<!-- Image header -->
<div class="heading">
  <div class="container-fluid py-5 text-center">
      <h1 class="title">Beach House</h1>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if ($currentPage == "index") {echo "active";} ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item <?php if (isset($_SESSION["username"])) {echo "collapse";}?>">
          <a class="nav-link <?php if ($currentPage == "login") {echo "active";} ?>" href="login.php">Log In</a>
        </li>
        <li class="nav-item <?php if (isset($_SESSION["username"])) {echo "collapse";}?>">
          <a class="nav-link <?php if ($currentPage == "register") {echo "active";} ?>" href="register.php">Register</a>
        </li>
        <li class="nav-item <?php if (!isset($_SESSION["username"])) {echo "collapse";}?>">
          <a class="nav-link <?php if ($currentPage == "profile") {echo "active";} ?>" href="profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($currentPage == "policies") {echo "active";} ?>" href="policies.php">Privacy Policy</a>
        </li>
      </ul>
      <!--Login -->
      <div class="<?php if (isset($_SESSION["username"])) {echo "collapse";}?>">
        <form class="d-flex" action="db/login.php" method="post">
          <input class="form-control me-2" type="text" placeholder="Username" name="username" required>
          <input class="form-control me-2" type="password" placeholder="Password" name="password" required>
          <button class="btn btn-outline-light" type="submit">Login</button>
        </form>
      </div>
      <!--Logout -->
      <a href="db/logout.php" class="<?php if (!isset($_SESSION["username"])) {echo "collapse";}?> btn btn-outline-light">Logout</a>
    </div>
  </div>
</nav>

<div class="modal fade in" id="cookie">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <p>By using this website you agree to our <a href="policies.php">Privacy Policy</a>.</p>
        <button class="btn btn-dark btn-sm" data-bs-dismiss="modal" data-target="#cookie" id="cookieClose">Hide</button>
      </div>
    </div>
  </div>  
</div>