<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Lava Landing Page HTML Template</title>
    <!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css"> -->


</head>

<body>
<?php
include "connectDB.php";
$obj = new Tours();
?>

    <!-- ***** Preloader Start ***** -->
    <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container col-11">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                           Quân
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">About</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="" class="menu-item">About Us</a></li>
                                    <li><a href="" class="menu-item">Features</a></li>
                                    <li><a href="" class="menu-item">FAQ's</a></li>
                                    <li><a href="" class="menu-item">Blog</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <a href="index.html" class="logo1">
                            sign up
                         </a>

                        <a href="login.html" class="logo1">
                            login
                         </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- ***** Header Area End ***** -->
    <div class="div__Homepage">
        <!-- ***** Welcome Area Start ***** -->

        <div class="welcome-area " data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" id="welcome">

            <!-- ***** Header Text Start ***** -->
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <h1>Simple App that we <em>CREATE</em></h1>
                            <p>Lava <a href="#">HTML landing page</a> template is provided by <a href="#">TemplateMo</a>. You can modify and use it for your commercial websites for free of charge. This template is last updated on 29 Oct 2019.</p>
                            <a href="#about" target="" class="main-button-slider">KNOW US BETTER</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Header Text End ***** -->
        </div>
        <!-- ***** Welcome Area End ***** -->
        <div class="div__Homepage--content mt-5">
        <div class="container" id="detailsTourPage">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12" id="inforofTour">
                <?php
                $ketqua=$obj->action->displayOne($obj->tablename,$obj->col_id,$_GET['id']);
                while($row=$ketqua->fetch_assoc()){
                
                ?>
                <div class="tour-infomation">
                    <h2 id="displaynameTour"><?php echo $row['name_tour']?></h2>

                    <p id="star_remark">
                        <span class="fa fa-star checked"></span>


                    </p>
                    <div class="tour-infomation-content">


                        <p id="day"> <img src="img/lasting.png" style="margin-right: 20px;"><label>5 Days 4 Nights</label></p>
                        <p id="people"><img src="img/address.png" style="margin-right: 20px;">Group: <label>5 - 10</label></p>
                        <p id="location"><img src="img/address.png" style="margin-right: 25px;"><label>Location</label></p>
                        <p id="age"><img src="img/range.png" style="margin-right: 20px;">Min Age: </p>

                    </div>
                </div>
                <br>
                <div>
                    <h2>Information</h2>
                    <p id="tour-infomation-content-descript">
                    </p>
                </div>
                <div class="tour-infomation-content-time-table">
                    <span>Giờ khởi hành</span>
                    <p></p>
                </div>
                <div class="tour-infomation-content-time-table">
                    <span>Khởi hành</span>
                    <p>Sân bay Quốc tế</p>
                </div>
                <div class="tour-infomation-content-time-table">
                    <span>Giờ trở lại</span>
                    <p>Khoảng 7.30PM</p>
                </div>
                <div class="tour-infomation-content-time-table">
                    <span>Trang phục</span>
                    <p>Đơn giản, nhẹ nhàng</p>
                </div>
                <div class="tour-infomation-content-time-table">
                    <span>Giá bao gồm</span>
                    <p>Chổ ở, Bảo hiểm, Bữa ăn sáng, Phí di chuyển</p>
                </div>
                <div class="tour-infomation-content-time-table">
                    <span>Giá không bao gồm</span>
                    <p>Phí chuyến bay, quà lưu niệm</p>
                </div>
                <button class="btn btn-outline-primary my-5 col-6" onclick="bookTour()">BOOK NOW </button>
                <?php
                }
                ?>
            </div>


            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="row col-12">
                    <div class="col-12">
                        <form class="row" id="signup_to_book">
                            <h3 class="col-12">Sign up to Book tour NOW</h3>
                            <div class="form-group col-6">
                                <label for="book_fname">FirstName</label>
                                <input type="text" class="form-control" id="book_fname" placeholder="First Name">
                            </div>
                            <div class="form-group col-6">
                                <label for="book_lname">LastName</label>
                                <input type="text" class="form-control" id="book_lname" placeholder="Last Name">
                            </div>

                            <div class="form-group col-12">
                                <label for="book_username">username</label>
                                <input type="text" class="form-control" id="book_username" placeholder="usename">

                            </div>
                            <div class="form-group col-12">
                                <label for="book_email">Email Address</label>
                                <input type="email" class="form-control" id="book_email" placeholder="Email">
                            </div>
                            <div class="form-group col-12">
                                <label for="book_pass1">password</label>
                                <input type="password" class="form-control" id="book_pass1" placeholder="password">

                            </div>
                            <div class="form-group col-12">
                                <label for="book_pass2">confirm password</label>
                                <input type="password" class="form-control" id="book_pass2" placeholder="confirm password">

                            </div>
                            <div class="form-group col-12">
                                <label for="book_address">Address</label>
                                <input type="text" class="form-control" id="book_address" placeholder="Address">

                            </div>
                            <div class="form-group col-12">
                                <label for="book_phone">Phone Number</label>
                                <input type="number" class="form-control" id="book_phone" placeholder="Phone Number">
                            </div>
                            <div class="col-8 mt-4">If you have account? <a href="./login.html">login</a></div>

                            <div class="col-4"><button type="submit" class="btn btn-outline-danger my-3 " onclick="signupToBook()">SIGN UP</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>

        </div>

    </div>

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
                                            <input name="name" type="text" id="name" placeholder="Full Name" required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="E-Mail Address" required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" placeholder="Your Message" required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
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
                        <p>Phasellus dapibus urna vel lacus accumsan, iaculis eleifend leo auctor. Duis at finibus odio. Vivamus ut pharetra arcu, in porta metus. Suspendisse blandit pulvinar ligula ut elementum.
                            <br><br>If you need this contact form to send email to your inbox, you may follow our <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page for more detail.</p>
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
                        <p>Copyright &copy; 2020 Lava Landing Page | Designed by <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
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