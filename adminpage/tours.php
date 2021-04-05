<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
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
              <a class="nav-link d-block" href="login.php">
                Admin, <b>Logout</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
          <?php
                  include '../process/connectDB.php';
                  $obj=new Tours();
                  $cate = new Categories();
                  if(isset($_GET['id_cate'])){
                  $find_one_cate=$cate->action->displayOne($cate->tablename,$cate->col_id,$_GET['id_cate']);
                  if($assoc= $find_one_cate->fetch_assoc()){
                  ?>
                  <h2 class="tm-block-title"><?php echo $assoc['category_name']?> Tours</h2>
                  <?php
                  }
                  }
                  else{?>
                  <h2 class="tm-block-title">ALL Tours</h2>
                  <?php
                  }
                  ?>
                  
            <div class="tm-product-table-container">
            
              <table class="table table-hover tm-table-small tm-product-table">
              
                <thead class="">
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">TOUR NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">PEOPLE</th>
                    <th scope="col">SALE</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php                
                  $ketqua=$obj->action->display($obj->tablename);
                  while($row=$ketqua->fetch_assoc()){
                  if(isset($_GET['id_cate'])){
                    if($row['id_cate']==$_GET['id_cate']){              
                  ?>
                 
                  <tr onclick="chooseTour(<?php echo $row['id_tour']?>)">
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name"><?php echo $row['name_tour']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['people']?></td>
                    <td><?php echo $row['sale']?></td>
                    <td>
                      <a href="edit-tour.php?id=<?php echo $row['id_tour']?>" class="tm-product-update-link">
                        <i class="far fa-edit tm-product-delete-icon"></i>
                      </a>
                      <a href="../process/tour_process.php?id_tour_delete=<?php echo $row['id_tour']?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>

                  <?php
                    }
                   }
                   else {?>
                   <tr onclick="chooseTour(<?php echo $row['id_tour']?>)">
                      <th scope="row"><input type="checkbox" /></th>
                      <td class="tm-product-name"><?php echo $row['name_tour']?></td>
                      <td><?php echo $row['price']?></td>
                      <td><?php echo $row['people']?></td>
                      <td><?php echo $row['sale']?></td>
                      <td>
                      <a href="edit-tour.php?id=<?php echo $row['id_tour']?>" class="tm-product-update-link">
                        <i class="far fa-edit tm-product-delete-icon"></i>
                      </a>
                      <a href="../process/tour_process.php?id_tour_delete=<?php echo $row['id_tour']?>" class="tm-product-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>

                   <?php
                   }
                  }
                  ?>
                   <!-- ======================================= -->

                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a href="add-tour.php" class="btn btn-primary btn-block text-uppercase mb-3">Add new tour</a>
            <a href="tours.php" class="btn btn-primary btn-block text-uppercase mb-3">See All tours</a>
          </div>
        </div>


        
        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
            <h2 class="tm-block-title">Tour Categories</h2>
            <div class="tm-product-table-container">
              <table class="table tm-table-small table-hover table-focus tm-product-table">
                <tbody>
                <?php 
                    $find_all_cate=$cate->action->display($cate->tablename);                   
                    while($r=$find_all_cate->fetch_assoc()){
                    ?>
                    <tr>
                      <td class="tm-category-name" onclick="chooseCategory(<?php echo $r['id_category']?>)"><?php echo $r['category_name']?></td>
                      <td class="text-center">
                        <a href="tours.php?id_cate=<?php echo $r['id_category']?>" class="tm-category-link">
                          <i class="far fa-trash-alt tm-product-delete-icon"></i>
                        </a>
                      </td>
                    </tr>
                <?php } ?>
                  
                     <!-- ======================================= -->

                </tbody>
              </table>
            </div>
            <!-- table container -->
            <button class="btn btn-primary btn-block text-uppercase mb-3">
              Add new category
            </button>
          </div>
        </div>
      </div>
    </div>



    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        
      </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      function chooseCategory($id){
        window.location.href = "tours.php?id_cate="+$id;
      }
      function chooseTour($id){
        window.location.href = "edit-tour.php?id="+$id;
      }
    </script>
  </body>
</html>
