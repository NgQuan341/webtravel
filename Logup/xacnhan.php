<?php
session_start();
require_once '../process/connectDB.php';
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
              <center> <p class="login-card-description">NHẬP MÃ XÁC NHẬN</p>
             
              <form action=" " method="POST">
                <div class="form-group">
                  
                  <input type="text" name="code" id="code" class="form-control">
                </div>                
                  <button type="submit" name="xacnhan" class="btn btn-block login-btn mb-4">COMFIRM</button>
                </form>                          
            </div>
          </div>
        </div>
      </div>
    </center>
    </main>
    <?php
    if(isset($_POST['xacnhan'])){
      $ma=$_POST['code'];
      if($ma == $_SESSION['code']){
          $name =  $_SESSION['name']; 
          $email = $_SESSION['email'];
          $pass = $_SESSION['password']; 
          $phone = $_SESSION['phone']; 
          $lastname = $_SESSION['lastname']; 
          $firstname = $_SESSION['firstname']; 
          $address = $_SESSION['address'];                      
          $ac = new Accounts();
          $ac->setData('',$name,$email,$pass,$lastname,$firstname,$phone,$address,'null','customer');
          $data = $ac->getDataToInsert();
          $ac->action->insert($ac->tablename,$data);
          header("location:../originalWEB/login.php"); 
    }
    else{
      echo " <script>     
        alert('Mã xác nhận không đúng vui lòng nhập lại');               
        </script> ";
      }
   
  }
    ?>
</body>
</html>
