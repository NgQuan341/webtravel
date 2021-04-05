<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Accounts - Product Admin Template</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css">
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
  <div class="" id="home">
  <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.php">
          <h1 class="tm-site-title mb-0">Travel Admin</h1>
        </a>
        
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <!-- <span class="sr-only">(current)</span> -->
              </a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="far fa-file-alt"></i>
                <span> Reports <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Daily Report</a>
                <a class="dropdown-item" href="#">Weekly Report</a>
                <a class="dropdown-item" href="#">Yearly Report</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="tours.php">
                <i class="fas fa-shopping-cart"></i> Tours
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="accounts.php">
                <i class="far fa-user"></i> Accounts
              </a>
            </li>

            <!-- <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fas fa-cog"></i>
                <span> Settings <i class="fas fa-angle-down"></i> </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Billing</a>
                <a class="dropdown-item" href="#">Customize</a>
              </div>
            </li> -->
            
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link d-block" href="login.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      
      <!-- row -->
      <?php
      include '../process/connectDB.php';
      $objAcc = new Accounts();

      $ketqua = $objAcc->action->displayOne($objAcc->tablename, $objAcc->col_id, $_GET['id']);
      while ($row = $ketqua->fetch_assoc()) {

      ?>

        <div class="row tm-content-row">
          <div class="tm-block-col tm-col-avatar">

            <div class="tm-bg-primary-dark tm-block tm-block-avatar">
              <h2 class="tm-block-title">Change Avatar</h2>
              <div class="tm-avatar-container">
                <img src="img/avatar.png" alt="Avatar" class="tm-avatar img-fluid mb-4" />
                <a href="#" class="tm-avatar-delete-link">
                  <i class="far fa-trash-alt tm-product-delete-icon"></i>
                </a>
              </div>
              <button class="btn btn-primary btn-block text-uppercase">
                Upload New Photo
              </button>
            </div>

          </div>
          <div class="tm-block-col tm-col-account-settings">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Account Settings</h2>
              <?php
              //
              ?>
              <form action="../process/account_process.php" method="post" class="tm-signup-form row">

                <div class="form-group col-lg-6">
                  <label for="id">Id</label>
                  <input id="id" name="id_acc" type="number" class="form-control validate" value="<?php echo $row['id_acc'] ?>" />
                </div>

                <div class="form-group col-lg-6">
                  <label for="name">Account Name</label>
                  <input id="name" name="username" type="text" class="form-control validate" value="<?php echo $row['username'] ?>" />
                </div>

                <div class="form-group col-lg-6">
                  <label for="fname">First Name</label>
                  <input id="fname" name="fname" type="text" class="form-control validate" value="<?php echo $row['fname'] ?>" />
                </div>

                <div class="form-group col-lg-6">
                  <label for="lname">Last Name</label>
                  <input id="lname" name="lname" type="text" class="form-control validate" value="<?php echo $row['lname'] ?>" />
                </div>

                <div class="form-group col-lg-6">
                  <label for="email">Account Email</label>
                  <input id="email" name="email" type="email" class="form-control validate" value="<?php echo $row['email'] ?>" />
                </div>

                <div class="form-group col-lg-6">
                  <label for="password">Password</label>
                  <input id="password" name="password" type="text" class="form-control validate" value="<?php echo $row['password'] ?>" />
                </div>

                <div class="form-group col-lg-6">
                  <label for="address">Address</label>
                  <input id="address" name="address" type="text" class="form-control validate" value="<?php echo $row['address'] ?>"/>
                </div>
                
                <div class="form-group col-lg-6">
                  <label for="phone">Phone</label>
                  <input id="phone" name="phone" type="tel" class="form-control validate" value="<?php echo $row['phone'] ?>" />
                </div>
                <div class="form-group col-12">
                <label for="role">Role</label>
                <select class="custom-select" id="role" name="role">
                  <option value="admin">Admin</option>
                  <option value="customer">Customer</option>
                </select>
                </div>

                <div class="col-12">
                  <button type="submit" name="submit_account" class="btn btn-primary btn-block text-uppercase">
                  Update Your Profile
                  </button>
                </div>

                <div class="form-group col-12">
                  <label class="tm-hide-sm">&nbsp;</label>
                  <a href="process/account_process.php?id_acc_delete=<?php echo $row['id_acc'] ?>" class="btn btn-primary btn-block text-uppercase">
                    Delete your account
                  </a>
                </div>
                

              </form>

            </div>

          </div>
        </div>
      <?php
        echo '<hr>';
      }
      ?>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved.

          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
</body>

</html>