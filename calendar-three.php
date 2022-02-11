

<div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="three-tab">
     <div class="schedule-tab2">
    <!-- Nav Tabs -->
        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#show-all" role="tab" aria-controls="all" aria-expanded="true">All <br> <span>&nbsp;</span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="accounting-tab" data-toggle="tab" href="#accounting-show" role="tab" aria-controls="accounting-show" aria-expanded="true">Accounting and <br> <span>TAXATION</span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="business-tab" data-toggle="tab" href="#business-show" role="tab" aria-controls="business-show" aria-expanded="true">Business <br> <span>DEVELOPMENT</span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="businessprocess-tab" data-toggle="tab" href="#businessprocess-show" role="tab" aria-controls="businessprocess-show" aria-expanded="true">Business <br> <span>PROCESS</span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="communication-tab" data-toggle="tab" href="#communication-show" role="tab" aria-controls="communication-show" aria-expanded="true">Communication <br> <span><br></span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="digital-tab" data-toggle="tab" href="#digital-show" role="tab" aria-controls="digital-show" aria-expanded="true">Going <br> <span>DIGITAL</span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="hr-tab" data-toggle="tab" href="#hr-show" role="tab" aria-controls="hr-show" aria-expanded="true">HR <br> <span>MANAGEMENT</span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="leadership-tab" data-toggle="tab" href="#leadership-show" role="tab" aria-controls="leadership-show" aria-expanded="true">Leadership and <br> <span>MANAGEMENT</span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing-show" role="tab" aria-controls="marketing-show" aria-expanded="true">Marketing <br> <span><br></span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="property-tab" data-toggle="tab" href="#property-show" role="tab" aria-controls="property-show" aria-expanded="true">Property <br> <span><br></span></a>
            </li>
            <!-- Nav Item -->
            <li class="nav-item">
                <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales-show" role="tab" aria-controls="sales-show" aria-expanded="true">Sales <br> <span><br></span></a>
            </li>
        </ul>
</div>
    <!--- ALL SHOW -->    
    <div class="tab-content" id="fourhourcontent">
        <div class="tab-pane fade show active" id="show-all" role="tabpanel" aria-labelledby="all-tab">

             <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                      <div id="half-day">
                                      </div>
                                         <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            <a id="halfdaybtn" class="btn confer-gb">View More  </a>
                                        </div>
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
                 <!-- ACCOUNTING TAB -->
                        <div class="tab-pane fade" id="accounting-show" role="tabpanel" aria-labelledby="tuesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                            <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 1 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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
                    <!-- BUSINESS DEVELOPMENT -->
                        <div class="tab-pane fade" id="business-show" role="tabpanel" aria-labelledby="business-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                          <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 2 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
   
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

                         <!-- BUSINESS PROCESS -->
                        <div class="tab-pane fade" id="businessprocess-show" role="tabpanel" aria-labelledby="businessprocess-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 3 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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

                        <!--COMMUNICATION -->
                        <div class="tab-pane fade" id="communication-show" role="tabpanel" aria-labelledby="communication-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 4 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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

                         <!--GOING DIGITAL -->
                        <div class="tab-pane fade" id="digital-show" role="tabpanel" aria-labelledby="digital-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 5 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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

                        <!--HR MANAGEMENT -->
                        <div class="tab-pane fade" id="hr-show" role="tabpanel" aria-labelledby="hr-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 6 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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

                        <!-- Leadership and Management -->
                        <div class="tab-pane fade" id="leadership-show" role="tabpanel" aria-labelledby="leadership-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 7 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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

                         <!-- Marketing -->
                        <div class="tab-pane fade" id="marketing-show" role="tabpanel" aria-labelledby="marketing-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 8 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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

                        <!-- PROPERTY -->
                        <div class="tab-pane fade" id="property-show" role="tabpanel" aria-labelledby="property-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 9 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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

                         <!-- SALES -->
                        <div class="tab-pane fade" id="sales-show" role="tabpanel" aria-labelledby="sales-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                       <?php 
                            require('config/db_connection.php');
                            $sql = "SELECT * FROM trainings_tbl LEFT JOIN trainingtype_tbl ON trainingtype_tbl.id=trainings_tbl.TypeId WHERE trainings_tbl.CategoryId= 10 ORDER BY trainings_tbl.id ASC";
                            $result = $con->query($sql);

                        ?>
                                     <?php include ('show-data.php'); ?>
   
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
  
  
<!-- ALL SHOW END --->
      </div>
</div>