<?php
session_start();
require "../process/connectDB.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/logup.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
</head>
<body>
<header class="header-area header-sticky mb-5">
        <div class="container col-11">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="../index.php" class="logo">
                           OverTravel
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            
                            <?php
                                
                                if($_SESSION['login_status']){
                                   echo '<li class="scroll-to-section" id="section-login"><a href="../process/login_process.php?logout" class="menu-item">'.$_SESSION['login_status'].' ,logout</a></li>';
                                }
                                else{
                                   echo '<li class="scroll-to-section" id="section-login"><a href="login.php" class="menu-item">login</a></li>';
                                   echo '<li class="scroll-to-section" id="section-login"><a href="signup.php" class="menu-item">sign up</a></li>';
                                }
                            ?>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <?php
                        if($_SESSION['login_status']){                        

                        echo '<a href="../process/login_process.php?logout" id="section-before-login" class="logo1">'.$_SESSION['login_status'].' ,logout</a>';
                        }
                        else{
                            echo '<a href="../Logup/signup.php" id="section-before-login" class="logo1">sign up</a>';

                            echo '<a href="login.php" id="section-before-login" class="logo1">login</a>'; 

                        }
                            
                        
                                      
                        ?>
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>

</header>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0 mt-5">
<div class="container">
  <div class="card login-card">
    <div class="row no-gutters">
      <!-- <div class="col-md-5">
        <img src="assets/images/Hinh.jpg" alt="login" class="login-card-img">
      </div> -->
      <div class=" col-md-12">
          
        <div class="col-lg-12 card-body">
          <center> <p class="login-card-description">ENTER THE INFORMATION FOR CHECKING OUT</p>
          <hr>
          <form action="" method="POST">

          <p class="login-card-description">Information of customer</p>
          <?php
          if($_SESSION['id_acc']!=false){
            $ac = new Accounts();

            $ketqua = $ac->action->displayOne($ac->tablename, $ac->col_id, $_SESSION['id_acc']);
            while ($row = $ketqua->fetch_assoc()) {
                       
          ?>
            <div class="form-group row">
              <label for="lname" class="col-2">Last name</label>
              <input type="text" name="lname" id="lname" class="form-control col-4" placeholder="Email" value="<?php echo $row['lname']?>">
              <label for="fname" class="col-2">First name</label>
              <input type="text" name="fname" id="fname" class="form-control col-4" placeholder="Email" value="<?php echo $row['fname']?>">
            </div>
            <div class="form-group row">
              <label for="email" class="col-2">email</label>
              <input type="email" name="email" id="email" class="form-control col-10" placeholder="Email" value="<?php echo $row['email']?>">
            </div>
              <div class="form-group row">
                <label for="address" class="col-2">address</label>
                <input type="text" name="address" id="address" class="form-control col-10" placeholder="Address" value="<?php echo $row['address']?>">
              </div>
              <div class="form-group row mb-4">
                <label for="phone" class="col-2">phone</label>
                <input type="text" name="phone" id="phone" class="form-control col-10" placeholder="Phone" value="<?php echo $row['phone']?>">
              </div>
               <?php
                  }
                 }
                 else if($_SESSION['id_acc']==false){?>
                 <div class="form-group row">
              <label for="lname" class="col-2">Last name</label>
              <input type="text" name="lname" id="lname" class="form-control col-4" placeholder="Last name" value="">
              <label for="fname" class="col-2">First name</label>
              <input type="text" name="fname" id="fname" class="form-control col-4" placeholder="First name" value="">
            </div>
            <div class="form-group row">
              <label for="email" class="col-2">email</label>
              <input type="email" name="email" id="email" class="form-control col-10" placeholder="Email" value="">
            </div>
              <div class="form-group row">
                <label for="address" class="col-2">address</label>
                <input type="text" name="address" id="address" class="form-control col-10" placeholder="Address" value="">
              </div>
              <div class="form-group row mb-4">
                <label for="phone" class="col-2">phone</label>
                <input type="text" name="phone" id="phone" class="form-control col-10" placeholder="Phone" value="">
              </div>
                 
                 <?php

                 }
               ?>
              
            <p class="login-card-description">Information of tour</p>
            <?php
            $tour = new Tours();
          
            $ketqua = $tour->action->displayOne($tour->tablename, $tour->col_id, $_GET['id']);
            while ($row = $ketqua->fetch_assoc()) {
            ?>
            <div class="form-group row">
              <label for="name_tour" class="col-2">Name Tour</label>
              <input type="text" name="name_tour" id="name_tour" class="form-control col-10" placeholder="Name Tour" value="<?php echo $row['name_tour']?>">
            </div>
            <div class="form-group row">
              <label for="price" class="col-2">Price</label>
              <input type="text" name="price" id="price" class="form-control col-10" placeholder="Price" value="<?php echo $row['price']?>">
            </div>
            <div class="form-group row">
              <label for="date-start" class="col-2">start</label>
              <input type="text" name="date-start" id="date-start" class="form-control col-4" placeholder="Email" value="<?php echo $row['date_start']?>">
              <label for="date-end" class="col-2">end</label>
              <input type="text" name="date-end" id="date-end" class="form-control col-4" placeholder="Email" value="<?php echo $row['date_end']?>">
            </div>
            <?php
            }
            ?>
              
              <div class="form-group row">
              <button type="submit" name="checkout" class="btn btn-block row login-btn ml-4 col-12">Submit</button>
              </div>
             
            </form>
                  
        </div>
        
      </div>
    </div>
  </div>
</center>
</main>

<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['checkout'])){
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    // Xuất thông tin gửi mail
    // $tour = new Tours();
    $ketqua = $tour->action->displayOne($tour->tablename, $tour->col_id, $_GET['id']);
    while ($row = $ketqua->fetch_assoc()) {
        $data =  'Name Customer:'.$lname." ".$fname.'<br>
                  Name Tour: ' .$row['name_tour'].' <br>
                  Price: '.$row['price'].'<br>
                  Place: '.$row['from_place'].'<br>
                  People: '.$row['people'].'<br>
                  Strart-Time: '.$row['date_start'].'<br>
                  End-Time: '.$row['date_end'].'<br>
                  Note: Nice to welcome you and We will bring you an unforgettable experience';
                  $id_tour = $row['id_tour'];
    }
    // Lấy id trong account
   
    $ketqua = $ac->action->displayOne($ac->tablename, $ac->col_id, $_SESSION['id_acc']);
    while ($row = $ketqua->fetch_assoc()) {
        $id_acc = $row['id_acc'];                 
    }

    // Insert vào database trong Booktour
    $book  = new BookTours();
    $book->setData($id_acc,$id_tour);
    $getdata = $book->getDataToInsert();
    $book->action->insert($book->tablename,$getdata);

        $subject ="THÔNG TIN ĐƠN HÀNG";
        
        require "PHPMailer/PHPMailer.php";
        require "PHPMailer/SMTP.php";
        require "PHPMailer/Exception.php"; 

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->CharSet = "UTF-8";
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "dinhkhakl01@gmail.com"; //enter you email address
        $mail->Password = 'Luly041101'; //enter you email password

        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email,"OVERTRAVEL");
        $mail->addAddress($email); //enter you email address
        $mail->Subject = ($subject);
        $mail->Body = $data;

        if ($mail->send()) {?>
        <script>
        alert("Book Tour successfull !!!");
       
        window.location.href = "../index.php";
      </script>
                <?php
           
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
</body>
</html>