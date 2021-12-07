<?php
 
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/Hinh.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <center> <p class="login-card-description">Sign up</p>
              <form action="" method="POST">
                <div class="form-group">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>

                <div class="form-group ">               
                    <label for="fname" class="sr-only">Firstname</label>
                    <input type="text" name="fname"  class="form-control" placeholder="Your first name">
                </div>

                <div class="form-group ">
                    <label for="lname" class="sr-only">Lastname</label>
                    <input type="text" name="lname"  class="form-control" placeholder="Your last name">
                </div>
                
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email address">
                  </div>

                  <div class="form-group ">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password"  class="form-control" placeholder="***********">
                  </div>

                  <div class="form-group ">
                    <label for="password" class="sr-only">Confirm Password</label>
                    <input type="password" name="password2"  class="form-control" placeholder="confirm password">
                   </div>

                   <div class="form-group">
                    <label for="phone" class="sr-only">Phone</label>
                    <input type="text" name="phone"  class="form-control" placeholder="Your number phone">
                  </div>

                  <div class="form-group ">
                    <label for="address" class="sr-only">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter your address">
                  </div>

                   <!-- Button -->
                  <button type="submit" name="btn" class="btn btn-block login-btn mb-4">Submit</button>
                 
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>                
            </div>
          </div>
        </div>
      </div>
    </center>
    </main>

    <?php
                  if(isset($_POST['btn'])){
                    if(empty($_POST['username']) ||  empty($_POST['password']) || empty($_POST['email']) || empty($_POST['password2'])|| empty($_POST['phone'])|| empty($_POST['address'])|| empty($_POST['fname'])|| empty($_POST['lname']) ){
                      echo " <script>     
                                   alert('Không được để trống');               
                           </script>
                      ";
                    }
                    else if (strlen($_POST['password']) < 5){
                      echo " <script>     
                            alert('Mật khẩu phải lớn hơn 5 kí tự');               
                          </script>
                      ";
                    }
                    else if ($_POST['password'] != $_POST['password2']){
                      echo " <script>     
                            alert('Mật khẩu không trùng khớp');               
                          </script>
                      ";
                    }
                    else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                      echo " <script>     
                      alert('Cú pháp mail không đúng');               
                    </script>
                   ";}
                   else if(strlen($_POST['phone'])<9 || !preg_match ("/^[0-9]*$/", $_POST['phone']) ){
                    echo " <script>     
                    alert('Số điện thoại không hợp lệ');               
                  </script>
                  ";
                   }
                  else{                   
                    require_once "sendEmail.php";
                    }                 
                   } ?>
</body>
</html>
