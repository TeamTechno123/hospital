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
            <h4>Doctor OPD Charge</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-3">
            <?php include('charges_menu.php'); ?>
          </div>

          <div class="col-sm-9">
            <div class="row">
          <div class="col-md-12">
            <div class="card <?php if(!isset($update)){ echo 'collapsed-card'; } ?>">
              <div class="card-header">
                <h3 class="card-title"> Doctor OPD Charge</h3>
                <div class="card-tools">
                  <?php if(!isset($update)){
                    echo '<button type="button" class="btn btn-sm btn-primary" data-card-widget="collapse">Add New</button>';
                  } else{
                    echo '<a href="'.base_url().'Master/tax_rate" type="button" class="btn btn-sm btn-outline-info" >Cancel Update</a>';
                  } ?>
                </div>
              </div>
              <!--  -->
                <div class="card-body p-0 " <?php if(isset($update)){ echo 'style="display: block;"'; } else{ echo 'style="display: none;"'; } ?>>
                  <form class="input_form m-0" id="form_action" role="form" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="row p-4">

                      <div class="form-group col-md-6  select_sm">
                        <label>Doctor </label>
                          <select class="form-control select2" name="doctor_id" id="doctor_id" data-placeholder="Select" required>
                          <option value=""> Select </option>                         
                           </select>
                      </div>

                      <div class="form-group col-md-6 ">
                        <label>Standard Charge</label>
                        <input type="text" class="form-control form-control-sm" name="std_charges" id="std_charges" value="" placeholder="Standard Charge" required>
                      </div>

                     


                 <h4 class="mt-3">Scheduled Charges For TPA</h4> 
                  <div class="card col-md-12 ">
                    <div class="row">
                       <div class="form-group col-md-6 ">
                        <label>CGHS</label>
                        <input type="text" class="form-control form-control-sm" name="cghs" id="cghs" value="" placeholder="CGHS" required>
                      </div>
                      <div class="form-group col-md-6 ">
                        <label>IDBI Federal</label>
                        <input type="text" class="form-control form-control-sm" name="idbi_federal" id="idbi_federal" value="" placeholder="IDBI Federal" required>
                      </div>
                      <div class="form-group col-md-6 ">
                        <label>Star Health Insurance</label>
                        <input type="text" class="form-control form-control-sm" name="star_health" id="star_health" value="" placeholder="Star Health Insurance" required>
                      </div>
                    </div>
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


           <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Doctor OPD Charge List</h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>                    
                    <th>Doctor</th> 
                    <th>Standerd Charge </th>                                       
                    <th class="wt_50">Action</th>                
                  </tr>
                  </thead>
                 <!--  <tbody>
                    <tr>
                      <td class="d-none">1</td>
                      <td class="d-none">Visite </td>
                      <td class="d-none">1</td>
                    </tr>
                  </tbody> -->
                </table>
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
