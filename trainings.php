<?php session_start();
 include("config/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Kongan academy, trainings, schedule">
    <meta name="description" content="schedules of trainings and seminar">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/konganfav.png">  
    <!-- Title -->
    <title>Trainings - Kongan Academy</title>


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
<!--===============================================================================================-->  
<script>
    $(document).ready(function(){  
  var flag = 0;     

            $.ajax({
                type: "GET",
                url: "all-training.php",
                data: {
                    'offset': flag,
                    'limit': 3
                },
                success: function(data) {
                    $('#post-data').append(data);
                    flag += 3;
                }
            });
      $(document).on('click', '#btnLoad', function(){  
            
           $('#btnLoad').html('Load More..');  
           $.ajax({
                type: "GET",
                url: "all-training.php",
                data: {
                    'offset': flag,
                    'limit': 3
                },
                success: function(data) {
                    $('#post-data').append(data);
                    flag += 3;


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
                    'limit': 3
                },
                success: function(data) {
                    $('#whole-day').append(data);
                    flag += 3;
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
                    'limit': 3
                },
                success: function(data) {
                    $('#half-day').append(data);
                    flag += 3;
                }
            });
     $(document).on('click', '#halfdaybtn', function(){  
        
       $('#halfdaybtn').html('Load More..');  
       $.ajax({
            type: "GET",
            url: "half-day.php",
            data: {
                'offset': flag,
                'limit': 3
            },
            success: function(data) {
                $('#half-day').append(data);
                flag += 3;

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
                url: "accouting-data.php",
                data: {
                    'offset': flag,
                    'limit': 3
                },
                success: function(data) {
                    $('#accounting-data').append(data);
                    flag += 3;
                }
            });  
 }); 
</script> 
</head>

<body>
    <!-- Preloader
    <div id="preloader">
        <div class="loader"></div>
    </div> -->


    <!-- Header Area Start -->
    <?php include ('header-nav.php')?>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/trainings.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Trainings</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->


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
                                            <a  href="file/kba-calendar.docx" download="" target="_blank" class="btn confer-gb-btn">Download Calendar Here <i class="zmdi zmdi-long-arrow-down"></i></a>
                                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Schedule Area End -->





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