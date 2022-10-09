<?php 
  include("vendor/autoload.php");
    
  use Helpers\Auth;

  $auth = Auth::check();

?>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand mt-2" href="dashboard.php" style="margin-left: 75px;">
        <h5><img src="img/5146077.png" width="40" alt="User Role"> <strong><span class="text-info">User</span> Role </strong> </h5>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php if($auth->role_id == 4 || $auth->role_id == 5) : ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="users.php">User Management</a>
          </li>
        <?php endif; ?>
        <?php if($auth == false) : ?>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Login</a>
          </li>
        <?php else : ?>
          <li class="nav-item dropdown" style="margin-right: 75px;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if($auth->photo) : ?>
                <img src="_actions/photos/<?= $auth->photo ?>" style="border-radius: 50%;" width="30" alt="Profile Image">
              <?php else : ?>
                <img src="img/150-1503945_transparent-user-png-default-user-image-png-png.png" style="border-radius: 50%;" width="30" alt="Profile Image">
              <?php endif; ?><?= $auth->name ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php"><i class="fa fa-address-card"></i> Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="_actions/logout.php" onclick="return confirm('Are you sure Logout?')"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>