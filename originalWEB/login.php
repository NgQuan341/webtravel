<!doctype html>
<html lang="en">

<head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/login.css">

</head>

<body class="img js-fullheight" style="background-color: #fff ;background-image: url(img/bg_login.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">

                        <h3 class="mb-4 text-center">Have an account?</h3>
                        <form action="" class="signin-form" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                                <p id="error_name" class=""></p>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
                                <p id="error_pass" class=""></p>
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="btn_login" class="form-control btn btn-primary submit px-3">Sign In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <!-- <div class="w-100 row">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <div class="w-100 text-md-center">
                                    <a href="#" style="color: #fff"></a>
                                        <?php
                                        include '../process/connectDB.php';
                                        include '../process/login_process.php';
                                        $objAcc = new Accounts();
                                        $objLog = new Login();
                                        $check = false;
                                       

                                        $result = $objAcc->action->display($objAcc->tablename);
                                        if (isset($_POST['btn_login'])) {
                                            $username=test_input($_POST['username']);
                                            $password=$_POST['password'];
                                            while ($row = $result->fetch_assoc()) {
                                                if ($row['username'] == $username && $row['password'] == $password) {                                                    
                                                        $objLog->setData($row['id_acc']);
                                                        $objLog->action->insert($objLog->tablename, $objLog->getDataToInsert());
                                                        
                                                        header('location: ../index.php');
                                                    }
                                            }
                                            if(!$check)
                                            
                                                ?>

                                                <div class="alert alert-danger" role="alert"> Username or Password is wrong</div>

                                                <?php
                                                
                                        }

                                        ?>
                                    
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a href="../Logup/signup.php" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                sigh up</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>