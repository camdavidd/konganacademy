<?php session_start();
 include("config/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="kongan academy ,digital marketing, sales, entreprenuership, copywriting, customer service, hosting, communication, hr management, business process, accounting and taxation, business development, leadership and management, marketing, property">
    <meta name="description" content="Kongan Academy provides learning development for every individual who wants to improve their skills in various professional background and needs.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/konganfav.png">
    <!-- Title -->
    <title>Kongan Academy</title>


    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Facebook Pixel Code -->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '550754542456216');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=550754542456216&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){  
  var flag = 0;     

            $.ajax({
                type: "GET",
                url: "all-training.php",
                data: {
                    'offset': flag,
                    'limit': 5
                },
                success: function(data) {
                    $('#post-data').append(data);
                    flag += 5;
                }
            });
      $(document).on('click', '#btnLoad', function(){  
            
           $('#btnLoad').html('Load More..');  
           $.ajax({
                type: "GET",
                url: "all-training.php",
                data: {
                    'offset': flag,
                    'limit': 5
                },
                success: function(data) {
                    $('#post-data').append(data);
                    flag += 5;


                }
            });
      });  
 }); 
</script> 
<script>
    $(document).ready(function(){  
  var flag = 0;     

            $.ajax({
                type: "GET",
                url: "whole-day.php",
                data: {
                    'offset': flag,
                    'limit': 5
                },
                success: function(data) {
                    $('#whole-day').append(data);
                    flag += 5;
                }
            });
  
 }); 
</script> 
<script>
    $(document).ready(function(){  
  var flag = 0;     

            $.ajax({
                type: "GET",
                url: "half-day.php",
                data: {
                    'offset': flag,
                    'limit': 5
                },
                success: function(data) {
                    $('#half-day').append(data);
                    flag += 5;
                }
            });
     $(document).on('click', '#halfdaybtn', function(){  
        
       $('#halfdaybtn').html('Load More..');  
       $.ajax({
            type: "GET",
            url: "half-day.php",
            data: {
                'offset': flag,
                'limit': 5
            },
            success: function(data) {
                $('#half-day').append(data);
                flag += 5;

            }
        });
  });          
  
 }); 
</script> 
<script>
    $(document).ready(function(){  
  var flag = 0;     
            $.ajax({
                type: "GET",
                url: "accounting-data.php",
                data: {
                    'offset': flag,
                    'limit': 5
                },
                success: function(data) {
                    $('#accounting-data').append(data);
                    flag += 5;
                }
            });  
 }); 
</script> 
</head>

<body>
    <!-- Preloader
    <div id="preloader">
        <div class="loader"></div>
    </div>
    /Preloader -->

    <!-- Header Area Start -->
    <?php include ('header-nav.php')?>
    <!-- Header Area End -->




    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <br>
                        <img src="img/bg-img/banner3.jpg" alt="">
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <br><br>
                      <!-- <h6 class="wow fadeInUp" data-wow-delay="300ms">About Us</h6> -->
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">Kongan Academy</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">KONGAN BUSINESS ACADEMY (KBA), as the flagship brand of <a class="kevents" href="https://konganevents.com" target="_blank">Kongan Events Marketing Inc.</a>, provides quality training and development solutions, covering various industries, to help businesses and individuals improve personal competence and skills.<br><br>Contact us today to find out how KONGAN BUSINESS ACADEMY can support your business.
</p>
                        <a href="#" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">Contact us <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counter Up Area 
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                    
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6>Conference Date</h6>
                            <h4>Count Every Second Until the Event</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- About Us And Countdown Area End -->
    <!-- Blog Area Start -->
    <section class="confer-blog-details-area  ">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Details Area -->
                <div class="col-12 col-lg-8 col-xl-10">
                    <div class="pr-lg-4 mb-100">
                        <!-- Post Content -->
                        <div class="post-details-content">
                           <br><br><br><br><br><br>
                            <h4 class="post-title text-center">ANNOUNCEMENT</h4>
                            
                            
                        <div class="post-author-area d-flex align-items-center my-5">
                                
                            <div class="author-content">
                                <h6>Due to COVID-19, all trainings scheduled this year are on hold until further notice. The safety of Kongan Business Academy's employees, partner speakers, and participants always comes first.</br></br>

                                We sincerely apologize for any inconvenience this may cause and look forward to better days.</br></br> 

                                For any questions or concerns, please contact us at <a href="mailto:ingo@konganevents.com">info@konganevents.com</a></h6>
                               
                                
                            </div>
                        </div>
                        
                 
            </div>
        </div>
    </section>
    <!-- Blog Area End -->      
    <!-- Our Schedule Area Start -->
    <section class="our-schedule-area bg-white section-padding-100">
        <div class="container">
            <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Kongan Business Academy</p>
                        <h4>Calendar of Trainings</h4>
                    </div>
                </div>
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">All <br> <span>&nbsp;</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">One Day <br> <span>8 hours</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Half Day <br> <span>4 hours</span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <div  id="post-data">   
                                         </div>
                                    </div>
                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a id="btnLoad" class="btn confer-gb">View More  </a>
                                        </div>
                                    </div>

                                    <!-- More Schedule Btn 
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                     <div class="col-12">
                                        <div id="whole-day">   
                                         </div>
                                    </div>

                                    <!-- More Schedule Btn 
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- tab four -->
                        <?php include('calendar-three.php')?>
                        <!-- tab four end -->

                    </div>
                    <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a  href="file/kba-calendar2.docx" download="" target="_blank" class="btn confer-gb-btn">Download Calendar Here <i class="zmdi zmdi-long-arrow-down"></i></a>
                                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Schedule Area End -->


    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url(img/bg-img/b4.jpg);">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                    <!--    <p>Our Speakings</p> -->
                        <h4>Who’s speaking</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4 offset-md-2">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="img/bg-img/myron.jpg" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Myron Sta. Ana</h5>
                          <!--  <p>Position</p> -->
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4 offset-md-0">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="img/bg-img/speaker.jpg" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Denise Cabotage</h5>
                          <!--  <p>Position</p> -->
                        </div>
                    </div>
                </div>




             <!--   <div class="col-12">
                    <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                        <a class="btn confer-btn-white" href="#">view all Speaker <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Our Speakings Area End -->

     <!-- What We offer Area Start -->
    <section class="what-we-offer-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                       <!-- <p>Summit Meeting</p> -->
                        <h4>Our Focus</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/digital.png" alt="">
                        </div>
                        <h5>Digital Marketing</h5>
                    <!--    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque</p> -->
                    </div>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/sales.png" alt="">
                        </div>
                        <h5>Sales</h5>
                    <!--    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p> -->
                    </div>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/entreprenuership.png" alt="">
                        </div>
                        <h5>Entreprenuership</h5>
                     <!--   <p>On the other hand, we denounce with righteous indignation</p> -->
                    </div>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/marketing.png" alt="">
                        </div>
                        <h5>Marketing</h5>
                      <!--  <p>These cases are perfectly simple and easy to distinguish in a free hour</p>-->
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/customer.png" alt="">
                        </div>
                        <h5>Customer Service</h5>
                      <!--  <p>These cases are perfectly simple and easy to distinguish in a free hour</p>-->
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/property.png" alt="">
                        </div>
                        <h5>Property</h5>
                     <!--   <p>These cases are perfectly simple and easy to distinguish in a free hour</p> -->
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/communication.png" alt="">
                        </div>
                        <h5>Communication</h5>
                     <!--   <p>These cases are perfectly simple and easy to distinguish in a free hour</p> -->
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/hr.png" alt="">
                        </div>
                        <h5>HR Management</h5>
                     <!--   <p>These cases are perfectly simple and easy to distinguish in a free hour</p> -->
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/businessprocess.png" alt="">
                        </div>
                        <h5>Business Process</br></br></h5>
                     <!--   <p>These cases are perfectly simple and easy to distinguish in a free hour</p> -->
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/accounting.png" alt="">
                        </div>
                        <h5>Accounting and Taxation</h5>
                     <!--   <p>These cases are perfectly simple and easy to distinguish in a free hour</p> -->
                    </div>
                </div>
                 <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/businessdev.png" alt="">
                        </div>
                        <h5>Business Developement</h5>
                     <!--   <p>These cases are perfectly simple and easy to distinguish in a free hour</p> -->
                    </div>
                </div>
                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="offer-icon">
                            <img src="img/core-img/leadership.png" alt="">
                        </div>
                        <h5>Leadership and Management</h5>
                     <!--   <p>These cases are perfectly simple and easy to distinguish in a free hour</p> -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- What We offer Area End -->

    
    <!-- Contact Area Start -->
    <section class="contact-our-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Have Question?</p>
                        <h4>Contact us</h4>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-sm-3">
                    <div class="contact-information mb-100">
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Address:</p>
                            <h6>PBCOM Tower, V.A. Rufino St., Makati, Metro Manila,Philippines</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Mobile:</p>
                            <h6>0917-520-0093</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Phone:</p>
                            <h6>(02)-7-987-4644</h6>
                        </div>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Email:</p>
                            <h6>info@konganevents.com</h6>
                        </div>
                        <!-- Single Contact Info 
                        <div class="single-contact-info wow fadeInUp" data-wow-delay="300ms">
                            <p>Website:</p>
                            <h6>www.confer.com</h6>
                        </div> -->
                    </div>
                </div>

                <div class="col-12 col-sm-8">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms">
                        <div class="contact_form">
                            <form action="contactmailer.php" method="POST" id="main_contact_form">
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="number" id="number" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Your Message *"></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" value="submit" class="btn confer-btn">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->

    <!-- Footer Area Start -->
    <?php include('footer-home.php')?>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>