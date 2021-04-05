<!DOCTYPE html>
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
             
              <form action="#!">
                <div class="form-group">
                  <label for="username" class="sr-only">Username</label>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Confirm Password</label>
                    <input type="password" name="password2" id="password" class="form-control" placeholder="confirm password">
                   </div>
                  <!-- <button type="submit" onclick="sendEmail()" class="btn btn-block login-btn mb-4" data-toggle="modal" data-target="#exampleModal">SIGN UP</button> -->
                  <button type="button" onclick="sendEmail()" class="btn btn-block login-btn mb-4" data-toggle="modal" data-target="#exampleModal">Submit</button>
                </form>
                <!--  -->
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
                
            </div>
          </div>
        </div>
      </div>
    </center>
    <!-- Modal nhập mã -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">XÁC NHẬN MÃ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method = "POST">
                <div class="modal-body">                  
                       Hãy nhập mã xác nhận được gửi từ email bạn vừa đăng kí: 
                       <input type="text" name="ma">                   
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal">CLOSE</button>                    
                  <input name="login" type="submit" value="SIGN UP">
                </div>
                </form>
                </div>
            </div>
            </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript">
    function sendEmail() {
        var email = $("#email");
        if ( isNotEmpty(email)) {
            $.ajax({
               url: 'sendEmail.php',
               method: 'POST',
               dataType: 'json',
               data: {                  
                   email: email.val(),               
               }, success: function (response) {
                    $('#exampleModal')[0].reset();
               }
            });
        }
    }
    function isNotEmpty(caller) {
        if (caller.val() == "") {
            caller.css('border', '1px solid red');
            return false;
        } else
            caller.css('border', '');

        return true;
    }
</script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <?php
  $so = $_SESSION['so'];
  if(isset($_POST['login'])){
    $ma= $_POST['ma'];
    if($ma==$so){
      echo ("Mã các nhận chính xác");  
    }
    else{
      echo("Mã không trùng khớp");
    }
         
  }
  ?>
</body>
</html>
