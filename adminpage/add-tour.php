<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <!-- <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" /> -->
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body>
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
              <a class="nav-link active" href="tours.php">
                <i class="fas fa-shopping-cart"></i> Tours
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="accounts.php">
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
              <a class="nav-link d-block" href="../originalWEB/login.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
</nav>

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Add Tour</h2>
                        </div>
                    </div>

                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                          
                        <form action="../process/tour_process.php" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                                
                        <div class="form-group mb-3">
                          <input id="id_tour" name="id_tour" type="hidden" style="color: grey"  value="" class="form-control validate required/>
                        </div>

                        <div class="form-group mb-3">
                          <label for="name_tour">Tour name
                          </label>
                          <input id="name_tour" name="name_tour" type="text" value="" class="form-control validate" required/>
                        </div>
                        <div class="form-group mb-3">
                          <label for="from_place">from place
                          </label>
                          <input id="from_place" name="from_place" type="text" value="" class="form-control validate" required/>
                        </div>
                        <div class="form-group mb-3">
                          <label for="description">Description</label>
                          <textarea class="form-control validate tm-small" rows="5" id="description" name="description"></textarea>
                        </div>
                        <div class="row">
                        <div class="form-group mb-3 col-6">
                                <label for="category">Category</label>
                                <select class="custom-select tm-select-accounts" id="category" name="id_cate">
                                    <?php
                                      include '../process/connectDB.php';
                                      $cate = new Categories();
                                      $result=$cate->action->display($cate->tablename);
                                      while($r=$result->fetch_assoc()){
                                    ?>
                                    <option value=<?php echo $r['id_category']?> ><?php echo $r['category_name']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group mb-3 col-6">
                  
                    <label for="sale">Sale</label>
                    <select class="custom-select tm-select-accounts" id="sale" name="sale">
      
                      <option value="true">TRUE</option>
                      <option value="false">FALSE</option>
                    </select>
                  </div>

                        </div>
                            

                            <div class="row">
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label for="date_start">Date Start
                      </label>
                      <input id="date_start" name="date_start" type="date" value="" class="form-control validate" required />
                    </div>

                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label for="date_end">Date End
                      </label>
                      <input id="date_end" name="date_end" type="date" value="" class="form-control validate" required/>
                    </div>

                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label for="price">Price
                      </label>
                      <input id="price" name="price" type="text" value="" class="form-control validate" data-large-mode="true" required/>
                    </div>

                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label for="people">People
                      </label>
                      <input id="people" name="people" type="text" value="" class="form-control validate" data-large-mode="true" required/>
                    </div>                       
                    </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    
                    <div class="tm-product-img-edit mx-auto">
                      <label style="color:white" for="">Image</label>
                      <img src="../img/<?php echo $row['img'] ?>" alt="Tour image" class="img-fluid d-block mx-auto">
                      <!-- <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i> -->
                    </div>
                    <div class="custom-file mt-3 mb-3">
                    <label for="file" 
                      class="btn btn-primary btn-block text-uppercase">Upload New Photo</label>
                      <input class="btn btn-primary btn-block text-uppercase" id="file" name="img"
                      style="width: 0.1px;
                            height: 0.1px;
                            opacity: 0;
                            overflow: hidden;
                            position: absolute;
                            z-index: -1;"
                      type="file" required> 
                        </div>
                  </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit_insert_tour">Add Product Now</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">
                Copyright &copy; <b>2018</b> All rights reserved. Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
            </p>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function() {
            $("#expire_date").datepicker();
        });
    </script>
</body>

</html>