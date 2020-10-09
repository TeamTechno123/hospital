<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header pt-0 pb-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-left mt-2">
            <h4> Symptoms Type</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-10 offset-md-1">
            <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title"> Setting </h3>
                <!-- <div class="card-tools">
                  <?php if(!isset($update)){
                    echo '<button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>';
                  } else{
                    echo '<a href="'.base_url().'Master/tax_rate" type="button" class="btn btn-sm btn-outline-info" >Cancel Update</a>';
                  } ?>
                </div> -->
              </div>
              <!--  -->
                <div class="card-body p-0 ">
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row p-4">

                      <div class="form-group col-md-12 ">
                        <label>Zoom Api Key</label>
                        <input type="text" class="form-control form-control-sm" name="purpose" id="purpose" value="" placeholder="Txt8ZWY0SZWVQk_CkXpXSg" required>
                      </div>

                       <div class="form-group col-md-12 ">
                        <label>Zoom API Secret</label>
                        <input type="text" class="form-control form-control-sm" name="purpose" id="purpose" value="" placeholder="JDXGLwor0CWDnLJlqqyrZVSr0L6PUpVZuQB5" required>
                      </div>

                      <div class="form-group col-md-12">
                        <label>Doctor Api Credential : &nbsp; &nbsp;&nbsp;</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Disabled</label>
                        </div>

                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Enabled</label>
                        </div>
                      </div>

                      <div class="form-group  col-md-12">
                        <label>Use Zoom Client App : &nbsp; &nbsp;&nbsp;</label>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Disabled</label>
                        </div>

                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="radio1">
                          <label class="form-check-label">Enabled</label>
                        </div>
                      </div>

                       <div class="form-group col-md-12 ">
                        <label>Default OPD Duration (In Minutes)</label>
                        <input type="text" class="form-control form-control-sm" name="purpose" id="purpose" value="" placeholder="10" required>
                      </div>

                      <div class="form-group col-md-12 ">
                        <label >Default IPD Duration (In Minutes)</label>
                        <input type="text" class="form-control form-control-sm" name="purpose" id="purpose" value="" placeholder="5" required>
                      </div>

                    </div>
                    <div class="card-footer clearfix" style="display: block;">
                      <div class="row">
                        
                        <div class="col-md-6 text-right">
                          <a href="<?php base_url(); ?>User/dashboard" class="btn btn-sm btn-default px-4 mx-4">Cancel</a>
                          <?php if(isset($update)){
                            echo '<button class="btn btn-sm btn-primary float-right px-4">Update</button>';
                          } else{
                            echo '<button class="btn btn-sm btn-success float-right px-4">Save</button>';
                          } ?>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>
