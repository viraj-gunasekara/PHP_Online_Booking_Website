<!-- admin header -->
<div class="contanier-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
  <h3 class="mb-0 h-font">RoomieBooking</h3>
  <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
</div>

<!-- admin sidebar -->
<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2 text-light fs-5">ADMIN DASHBOARD</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
      <!-- nav tabs -->
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link text-white" href="/admin/dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Settings</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>