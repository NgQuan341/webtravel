<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Details Page</title>

    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->


</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
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
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#details" class="menu-item">Detail</a></li>
                            <li class="scroll-to-section"><a href="#categories" class="menu-item">Categories</a></li>
                            <li class="scroll-to-section"><a href="#promotion" class="menu-item">Promotion</a></li>
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li>
                            <?php
                                if($_SESSION['login_role']=='admin'){
                                    echo '<li class="scroll-to-section" id=""><a href="../adminpage/index.php" class="menu-item">Admin Page</a></li>';
                                }
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
                            echo '<a href="signup.php" id="section-before-login" class="logo1">sign up</a>';

                            echo '<a href="login.php" id="section-before-login" class="logo1">login</a>'; 

                        }
                            
                        
                                      
                        ?>
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" id="welcome">
        <!-- <div class="welcome-area-hidden" >hello</div> -->

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Let's travel <em>ANYWHERE</em></h1>
                        <p>Travel website gives you great experiences. Let's explore, experience one
                            Traveling with relatives and friends, come with us. Our teams
                            will not let you down.</p>
                        <a href="#about" class="main-button-slider">BOOK NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>

    <!-- ***** Welcome Area End ***** -->

    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section mt-5" id="details">
        <div class="right-image-decor"></div>
        <div class="container">
            <?php
            include '../process/connectDB.php';
            $tour = new Tours();
            $result = $tour->action->displayOne($tour->tablename,$tour->col_id,$_GET['id']);
            if($row = $result->fetch_assoc()){
                ?>
                
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" data-scroll-reveal-id="29"
                    data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <img src="../img/<?php echo $row['img']?>" width="500px" height="250px"  class="rounded img-fluid d-block mx-auto" alt="App">
                </div>

                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix" id="inforofTour">
                    <div class="tour-infomation" style="font-size: 30px;">
                        <h2 id="displaynameTour" style="font-size: 40px; font-weight:600">
                            <?php echo $row['name_tour']?>
                        </h2>

                        <p class="mt-2">
                        <p style="font-size:18px"><i class="fa fa-usd mr-4 " style="color: #f4813f;" aria-hidden="true">
                        </i><?php echo $row['price']?></p>

                        </p>
                       
                        <p class="mt-2">
                        <p style="font-size:18px"><i class="fa fa-map-marker mr-4" style="color: #f4813f ;" aria-hidden="true"></i><?php echo $row['from_place']?></p>
                        </p>

                        <p class="mt-2" style="font-size:18px">
                            <?php for($i=0;$i<$row['remark'];$i++){ ?>
                        <i class="fa fa-star mr-1" style="color: #f4813f ;" aria-hidden="true"></i>
                        <?php }?>
                        </p>
                    </div>
                    <br>

                    <div>
                        <h2>Information</h2>
                        <p id="tour-infomation-content-descript">
                        <?php echo $row['description']?>
                        </p>
                        <div class="tour-infomation-content-time-table">
                            <span>Date - start</span>
                            <p><?php echo date('d/m/Y',strtotime($row['date_start']))?></p>
                        </div>
                        <div class="tour-infomation-content-time-table">
                            <span>Date - comeback</span>
                            <p><?php echo date('d/m/Y',strtotime($row['date_end']))?></p>
                        </div>
                        <div class="tour-infomation-content-time-table">
                            <span>Place - from</span>
                            <p>Airport</p>
                        </div>
                        
                        <div class="tour-infomation-content-time-table">
                            <span>Clothes</span>
                            <p>Simple, gentle</p>
                        </div>
                        <div class="tour-infomation-content-time-table">
                            <span>Price include</span>
                            <p>Accommodation, Insurance, Breakfast, Travel Fee</p>
                        </div>

                    </div>
                    <div class="mt-4">
                        <a href="thanhtoan.php?id=<?php echo $row['id_tour']?>" class="main-button mt-4">
                              BOOK NOW
                            </a>
                        </div>
                    
                </div>
            </div>
            <?php
            }
            ?>

        </div>
    </section>

    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" placeholder="Full Name" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-Mail Address"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Your Message"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em>Lava</em></h2>
                        <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio.
                            Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                            <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                            for more detail.
                        </p>
                        <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>Copyright &copy; 2020 Lava Landing Page | Designed by <a rel="nofollow"
                                href="https://templatemo.com">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>