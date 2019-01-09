<!--user widgets-->
 
<!--admin widgets row-->
 <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-green">
                            <div class="panel-body">
                                <i class="fa fa-truck fa-5x"></i>
                                <h3><?php countrecords("buses"); ?></h3>
                            </div>
                            <div class="panel-footer back-footer-green">
                                <a href="buses_view.php" style="text-decoration: none;color: white"><strong>Halte Bus</strong></a>

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-red">
                            <div class="panel-body">
                                <i class="fa fa fa-check-circle fa-5x"></i>
                                <h3><?php countrecords("availability"); ?> </h3>
                            </div>
                            <div class="panel-footer back-footer-red">
                               <a href="availability_view.php" style="text-decoration: none;color: white"><strong>Ketersedian Bus</strong></a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-brown">
                            <div class="panel-body">
                                <i class="fa fa-road fa-5x"></i>
                                <h3><?php countrecords("routes"); ?> </h3>
                            </div>
                            <div class="panel-footer back-footer-brown">
                               <a href="routes_view.php" style="text-decoration: none;color: white"> <strong>Rute Bus</strong></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!--row ends here-->
                <?php 
                $currentuser=getLoggedMemberID();
                if ($currentuser=="admin") {
                    # code...
                    include("main-admin.php");
                }
                 ?>
                