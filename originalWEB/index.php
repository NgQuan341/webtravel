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
                            <li class="scroll-to-section" id="section-login"><a href="login.php" class="menu-item">login</a></li>
                            <li class="scroll-to-section" id="section-login"><a href="signup.php" class="menu-item">sign up</a></li>

                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <a href="signup.php" class="logo1">
                            sign up
                         </a>

                        <a href="login.php" class="logo1">
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

        <div class="welcome-area" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s" id="welcome">

            <!-- ***** Header Text Start ***** -->
            <div class="header-text">
                <div class="container">
                    <div class="row">
                        <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <h1>Your tour EASY to <em>BOOK</em></h1>
                            <p>Với xu thế ngày nay, nhu cầu đi chơi, du lịch ngày tăng cao, để đáp ứng được điều đó thì chúng Tôi đảm bảo rằng trong các tour của chúng tôi sẽ dày đủ những thứ khiến bạn có thể hưởng thụ buổi du lịch của mình một cách toàn vẹn nhất. </p>
                            <a href="#about" target="" class="main-button-slider">KNOW US BETTER</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ***** Header Text End ***** -->
        </div>
        <!-- ***** Welcome Area End ***** -->
        <div class="div__Homepage--content">





            <!-- ***** Features Big Item Start ***** -->
            <div class="special-tour__tittle" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <!-- section tittle -->
                <div class="section-tittle">
                    <h3>Sale</h3>
                    <div class="section-tittle__line-under"></div>
                    <p>Promotion Tours </p>
                </div>
                <p class="special-tour__sub-tittle"> </p>
            </div>
            <section class="section" id="about">
                <div class="container">
                    <div class="row">
                        <?php
                        include "connectDB.php";
                        $obj = new Tours();
                        $ketqua=$obj->action->display($obj->tablename);
                        while($row=$ketqua->fetch_assoc()){?>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-5" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <div class="features-item">
                                <div class="features-icon">
                                    <h2><?php echo $row['id_tour']?></h2>
                                    <img src="assets/images/slide1.jpg" alt="">
                                    <h4><?php echo $row['name_tour']?></h4>
                                    <p><?php echo $row['price']?></p>
                                    <a href="detailtour.php?id=<?php echo $row['id_tour']?>" class="main-button">
                                Read More
                            </a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>                      
                        
                    </div>
                </div>
            </section>
            <!-- ***** Features Big Item End ***** -->

            <!-- Category tours -->
            <div class="special-tour__tittle" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <!-- section tittle -->
                <div class="section-tittle">
                    <h3>Tours</h3>
                    <div class="section-tittle__line-under"></div>
                    <p>Categories </p>
                </div>
                <p class="special-tour__sub-tittle"> </p>
            </div>
            <hr class="my-3">
            <div class="container destination">

                <div class="row image" id="img-lg">
                <div class="right-image-decor"></div>

                    <div class="col-3" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="itemBox" id="itemBox1">
                            <div id="item1" class="item">
                            </div>
                            <p class="location">vietnam</p>
                            <p class="stat">(Tours)</p>
                            <div class="line"></div>
                            <div class="overlay"></div>
                        </div>

                    </div>

                    <div class="col-6" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="row">

                            <div class="col-4">
                                <div class="itemSmallBox" id="itemBox2">
                                    <div class="item" id="item2">
                                    </div>
                                    <p class="location">china</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                            <div class="col-8" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item3">
                                    </div>
                                    <p class="location">japan</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                            <div class="col-6" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item4">
                                    </div>
                                    <p class="location">french</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                            <div class="col-6" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item5">
                                    </div>
                                    <p class="location">thailand</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-3" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="itemBox">
                            <div class="item" id="item6">
                            </div>
                            <p class="location">dubai</p>
                            <p class="stat">(Tours)</p>
                            <div class="line"></div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>

                <div class="row image" id="img-md">

                    <div class="col-lg-4 col-md-4" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="row">

                            <div class="col-12">
                                <div class="itemBox">
                                    <div class="item" id="item1_1">
                                    </div>
                                    <p class="location">vietnam</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                            <div class="col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item2_1">
                                    </div>
                                    <p class="location">china</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="row">

                            <div class="col-12">
                                <div class="itemSmallBox">
                                    <div class="item" id="item3_1">
                                    </div>
                                    <p class="location">japan</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                            <div class="col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item7">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item4_1">
                                    </div>
                                    <p class="location">french</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="row">

                            <div class="col-12">
                                <div class="itemSmallBox">
                                    <div class="item" id="item5_1">
                                    </div>
                                    <p class="location">thailand</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                            <div class="col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemBox">
                                    <div class="item" id="item6_1">
                                    </div>
                                    <p class="location">dubai</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row image" id="img-sm" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="col-sm-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="itemBox">
                                    <div class="item" id="item1_2">
                                    </div>
                                    <p class="location">vietnam</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="row">
                            <div class="col-12">
                                <div class="itemSmallBox">
                                    <div class="item" id="item2_2">
                                    </div>
                                    <p class="location">china</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item3_2">
                                    </div>
                                    <p class="location">japan</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="row">
                            <div class="col-12">
                                <div class="itemSmallBox">
                                    <div class="item" id="item4_2">
                                    </div>
                                    <p class="location">french</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                            <div class="col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                <div class="itemSmallBox">
                                    <div class="item" id="item5_2">
                                    </div>
                                    <p class="location">thailand</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="row">
                            <div class="col-12">
                                <div class="itemBox">
                                    <div class="item" id="item6_2">
                                    </div>
                                    <p class="location">dubai</p>
                                    <p class="stat">(Tours)</p>
                                    <div class="line"></div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="left-image-decor"></div> -->
            <!-- ***** Category tours ***** -->

            <!-- ***** Features Big Item Start ***** -->
            <section class="section" id="promotion">
           
                <div class="container">
               
                    <div class="row">
                        <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <img src="assets/images/left_img.png" class="rounded img-fluid d-block mx-auto" alt="App">
                        </div>
                        
                        <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                     
                            <ul>
                                <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                                    <img src="assets/images/Hear_icon.PNG" alt="">
                                    <div class="text">
                                        <h4>Tận tâm chăm sóc</h4>
                                        <p>Chúng Tôi rất đề cao vè sự hài lòng và an toàn của khách hàng</p>
                                    </div>
                                </li>
                                <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                                    <img src="assets/images/Money_icon.png" alt="">
                                    <div class="text">
                                        <h4>Chi phí không đáng lo ngại</h4>
                                        <p>Nhu cầu đi du lịch của con người tăng một cách nhanh vọt và chúng tôi luôn đáp ứng được chuyến du lịch không lo ngại ngân sách</p>
                                    </div>
                                </li>
                                <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                                    <img src="assets/images/Medkit_icon.png" alt="">
                                    <div class="text">
                                        <h4>Hỗ trợ khách hàng</h4>
                                        <p>Chúng Tôi cam kết hỗ trợ khách hàng một cách toàn vẹn nhất mà chúng tôi có thể và không hề để khách hàng chịu bất trắc</p>
                                    </div>
                                </li>
                             
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Features Big Item End ***** -->

     

            <!-- ***** Testimonials Starts ***** -->
            <section class="section" id="testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="center-heading">
                                <h2>What They Think <em>About Us</em></h2>
                                <p>Suspendisse vitae laoreet mauris. Fusce a nisi dapibus, euismod purus non, convallis odio. Donec vitae magna ornare, pellentesque ex vitae, aliquet urna.</p>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                            <div class="owl-carousel owl-theme">
                                <div class="item service-item">
                                    <div class="author">
                                        <i><img src="assets/images/testimonial-author-1.png" alt="Author One"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h4>Jonathan Smart</h4>
                                        <p>“Nullam hendrerit, elit a semper pharetra, ipsum nibh tristique tortor, in tempus urna elit in mauris.”</p>
                                        <span>Besta CTO</span>
                                    </div>
                                </div>
                                <div class="item service-item">
                                    <div class="author">
                                        <i><img src="assets/images/testimonial-author-1.png" alt="Second Author"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h4>Martino Tino</h4>
                                        <p>“Morbi non mi luctus felis molestie scelerisque. In ac libero viverra, placerat est interdum, rhoncus leo.”</p>
                                        <span>Web Analyst</span>
                                    </div>
                                </div>
                                <div class="item service-item">
                                    <div class="author">
                                        <i><img src="assets/images/testimonial-author-1.png" alt="Author Third"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h4>George Tasa</h4>
                                        <p>“Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor, congue a fringilla sed, maximus et urna.”</p>
                                        <span>System Admin</span>
                                    </div>
                                </div>
                                <div class="item service-item">
                                    <div class="author">
                                        <i><img src="assets/images/testimonial-author-1.png" alt="Fourth Author"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <ul class="stars">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <h4>Sir James</h4>
                                        <p>"Fusce rutrum in dolor sit amet lobortis. Ut at vehicula justo. Donec quam dolor, congue a fringilla sed, maximus et urna."</p>
                                        <span>New Villager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Testimonials Ends ***** -->


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
                        <h2>More About <em>US</em></h2>
                        <p>If you need this contact form to send email to your inbox, you may follow our <a rel="nofollow" href="https://mail.google.com" target="_parent">contact</a> page for more detail.</p>
                        <ul class="social">
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://mail.google.com"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                          
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