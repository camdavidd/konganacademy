 <?php
                                while($post = $result->fetch_assoc()){
                                ?>                 <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <!--<img src="img/bg-img/myron.jpg" alt="">--->
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6><?php echo htmlentities($post['TrainingTitle']);?></h6>
                                                     <?php
                                            if (empty($post['Speaker'])){

                                            ?>
                                                    <p></p>
                                                    <?php } else { ?>
                                                        <p>  <span><?php echo htmlentities($post['Speaker'])?></span> </p>
                                                             <?php } ?>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">   
                                                <p><i class="zmdi zmdi-time"></i><?php echo htmlentities($post['Date'])?></p>
                                                <p><i class="zmdi zmdi-map"></i> <?php echo htmlentities($post['Address'])?></p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            <?php
                                            if ($post['Speaker'] == Null){

                                            ?>
                                            <a href="https://konganacademy.com/<?php echo htmlentities($post['Url'])?>" target="_blank" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>

                                        <?php } else { ?>
                                             <a href="#" class="btn confer-btn">View More <i class="zmdi zmdi-long-arrow-right"></i></a>
                                         <?php } ?>
                                        </div>

                                                    <?php } ?>

