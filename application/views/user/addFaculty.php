
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Faculty <small>Add New Faculty</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br>
                    <form method="POST" action="<?php echo base_url();?>index.php/user/create-faculty" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                      
                      <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea name="name" class="resizable_textarea form-control" placeholder="Enter The Name of Faculty"></textarea>
                    </div>
                  </div>
                      <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      
                      <textarea name="designation" class="resizable_textarea form-control" placeholder="Enter The Designation" style="white-space: pre-wrap"></textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Qualification</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      
                      <textarea name="qualification" class="resizable_textarea form-control" placeholder="Enter The Qualification" style="white-space: pre-wrap"></textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Area Of Interest</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      
                      <textarea name="area" class="resizable_textarea form-control" placeholder="Enter The Area Of Interest" style="white-space: pre-wrap"></textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone Number</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      
                      <textarea name="phoneno" class="resizable_textarea form-control" placeholder="Enter The Phone Number" style="white-space: pre-wrap"></textarea>

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      
                      <textarea name="email" class="resizable_textarea form-control" placeholder="Enter The Email id" style="white-space: pre-wrap"></textarea>

                    </div>
                  </div>
                  <div class="form-group form1">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Picture</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <button id="upld" class="btn btn-primary">Upload Picture</button>
                    <input type="file" style="display: none" id="user-image" name="faculty-image" accept=".jpg,.png,.tiff"/>
                  </div>
                  </div>
                    
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success" id="create_btn">Add Faculty</button>
                        </div>
                      </div>
                      <input type="submit" hidden style="" name="" id="sub_btn">
                    </form>
                  </div>
                </div>
              </div>
        </div>

        <!-- /page content -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/build/js/custom.min.js"></script>
	 <script type="text/javascript">
        $("#upld").click(function(event){
        event.preventDefault();
        $("#user-image").trigger("click");
    });
        
        
    </script>
  </body>

</html>
