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
            <h4>Bed Status</h4>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-sm-3">
            <?php include('bed_menu.php'); ?>
          </div>

          <div class="col-sm-9">
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Bed Status </h3>
              </div>
              <div class="card-body p-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none">#</th>  
                    <th> Name </th>
                    <th>Bed Type</th> 
                    <th>Bed Group</th>                 
                    <th>Floor </th>   
                    <th class="wt_50">Action</th>                
                  </tr>
                  </thead>
                 <!--  <tbody>
                    <tr>
                      <td class="d-none">1</td>
                      <td class="d-none">Visite </td>
                      <td class="d-none">Visite </td>
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
