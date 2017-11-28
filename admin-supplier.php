<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | LightVend</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php include("admin-head-links.php"); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include("admin-header.php"); ?>
  <?php include("main-sidebar.php"); ?>

<div class="content-wrapper">


<div class="container">
<div class="row">
<div class="col-md-3">

<br><br>
             Filter By:    <!-- select -->
                <div class="form-group">
                
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                 <div class="form-group">

                  <input type="text" class="form-control" placeholder="Search ...">
                </div>       

                <br>

                  <a href="add-supplier.php"><button type="button" class="btn btn-block btn-primary">Add new Supplier</button>        
</a>

</div>
</div>


<br><br>

        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Supplier Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Supplier</th>
                  <th>Contact Person</th>
                  <th>Tel #</th>
                  <th>Fax #</th>
           
                  <th>Action</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td><button type="button" class="btn btn-block btn-success"><i class="fa fa-edit"></i></button></td>
                  <td><button type="button" class="btn btn-block btn-danger"><i class="fa fa-close"></i>  </button>  </td>



                </tr>



                </tbody>
                <tfoot>
                <tr>
                  <th>Supplier</th>
                  <th>Contact Person</th>
                  <th>Tel #</th>
                  <th>Fax #</th>
           
                  <th>Action</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
















        </div>




</div>

</div>



<?php include("admin-footer.php"); ?>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<?php include("admin-scripts.php"); ?>
</body>
</html>
