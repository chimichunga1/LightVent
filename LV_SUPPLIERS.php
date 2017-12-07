<div class="wrapper" style="background-color:transparent;">

<div><p>MANAGE SUPPLIERS</p></div>

<style>
  .switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
  background-color:#3c8dbc;
  border-color:#367fa9;
  
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */

#panel {
    padding-top: 50px;
    padding-bottom: 50px;
    display: none;
 
}
.size-125px {
  width:125px;
  cursor:default;
}
.divider
{
  background:#222d32;
  width:100%;
  height:20px;
}
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
}

</style>
     
<script>
$(document).ready(function(){
    $('#ManageSupplier').DataTable();

    $("#addbtn").click(function(){
        $("#panel").slideToggle("slow");
    });


});

</script>



    

    <div class="rows">
            <div class="col-md-12" id="addbtn">
                <button type="button"  class="btn btn-block btn-success btn-flat">ADD</button>
            </div>
    </div>

<div id="panel">
<div class="divider"></div>
  <form  role="form" action="admin_submit.php" method="post"   enctype="multipart/form-data" >

  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Suppliers Name</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_a"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Contact Person</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_c"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Business Type</button>
                  </div>
                
              <select name="Supplier_b"  class="form-control" required>
                <option value="Arnold" Selected>Arnold</option>
                <option value="Miguel">Miguel</option>
                <option value="Kenneth">Kenneth</option>    
              </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="input-group margin">
            <div class="input-group-btn">
              <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Address</button>
            </div>
            <input type="text" class="form-control"  name="Supplier_d"  required>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Telephone No</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_e"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Fax No</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_f"  required>
      </div>
    </div>
    <div class="col-md-4">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Email</button>
                  </div>
                  <input type="email" class="form-control"  name="Supplier_g"  required>
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Approved By</button>
                  </div>
                  <input type="text" class="form-control"  name="Supplier_h"  required>
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date Approved</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_i"  required>

              
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
              <textarea  style="width:98%; resize: none;" rows="5" class="form-control"  name="Supplier_j"  required></textarea>
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control" required>
                <option value="Arnold" Selected>Arnold</option>
                <option value="Miguel">Miguel</option>
                <option value="Kenneth">Kenneth</option>    
              </select>
                  
      </div>
    </div>
    <div class="col-md-3">
    <div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat " style="width:100%;">isActive</button>
    </div>
    </div>
    <div class="col-md-3">
    <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l">
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div>
    </div>
  </div>


  <button type="button" class="btn  btn-success btn-flat"  style="float:right;" name="Add Suppliers">Submit</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
</div>


<br>
<br>

    <table id="ManageSupplier" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Suppliers Name</th>
                <th>Contact Person</th>
                <th>Telephone</th>
                <th>Action</th>
           
            </tr>
        </thead>
        <tbody>
          <?php  
       $xQx=getSupplier();
       $query=mysqli_query($conn,$xQx);
        while($row=mysqli_fetch_array($query))
          {
            $SeeModal="SeeModal".$row[0];
            $EditModal="EditModal".$row[0];
            $DeleteModal="DeleteModal".$row[0];
            echo" 
            <tr>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
            <td>
            <div class='row'>
            <div class='col-md-4'>
            ";
            ?>
          <?php
          echo '
          <button type="button" class="btn btn-block btn-info btn-flat" data-toggle="modal" data-target="#'.$SeeModal.'"><i class="fa fa-eye"></i></button></center>
          ';
           ?>
          <?php
            echo "
            </div>
            <div class='col-md-4'>
            ";
            ?>
          <?php
          echo '
          <button type="button" class="btn btn-block btn-warning btn-flat" data-toggle="modal" data-target="#'.$EditModal.'"><i class="fa fa-edit"></i></button></center>
          ';
           ?>
           <?php
            echo "
            </div>
            <div class='col-md-4'>";
            ?>
          <?php
          echo '
          <button type="button" class="btn btn-block btn-danger btn-flat" data-toggle="modal" data-target="#'.$DeleteModal.'"><i class="fa fa-remove"></i></button></center>
          ';
           ?>
           <?php
            echo "
            </div>
            </div>
            </td>
            </tr>";
echo "   
<div id='".$SeeModal."' class='modal fade'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title'>Delete ? </h4>
      </div>
      <div class='modal-body'>
        <form  role='form' action='#' method='post' id='partdelpost' enctype='multipart/form-data'>
        <div class='form-group'>
          <input type='text' class='form-control' id='SupId' name='SuptId'  style='opacity:0;' value='".$row[0]."'>
          <label ><center>Are you sure you want to See '".$row[2]."' ?</center></label>
        </div>
      </div>
      <div class='modal-footer'>
                        <button type='submit' name='submit' id='submit' class='btn btn-success'>Yes</button>
                        <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
      </form>
      </div>
    </div>
  </div>
</div>";

echo "   
<div id='".$EditModal."' class='modal fade'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title'>Delete ? </h4>
      </div>
      <div class='modal-body'>
        <form  role='form' action='#' method='post' id='partdelpost' enctype='multipart/form-data'>
        <div class='form-group'>
          <input type='text' class='form-control' id='SupId' name='SuptId'  style='opacity:0;' value='".$row[0]."'>
          <label ><center>Are you sure you want to Edit '".$row[2]."' ?</center></label>
        </div>
      </div>
      <div class='modal-footer'>
                        <button type='submit' name='submit' id='submit' class='btn btn-success'>Yes</button>
                        <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
      </form>
      </div>
    </div>
  </div>
</div>";


echo "   
<div id='".$DeleteModal."' class='modal fade'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title'>Delete ? </h4>
      </div>
      <div class='modal-body'>
        <form  role='form' action='#' method='post' id='partdelpost' enctype='multipart/form-data'>
        <div class='form-group'>
          <input type='text' class='form-control' id='SupId' name='SuptId'  style='opacity:0;' value='".$row[0]."'>
          <label ><center>Are you sure you want to delete '".$row[2]."' ?</center></label>
        </div>
      </div>
      <div class='modal-footer'>
                        <button type='submit' name='submit' id='submit' class='btn btn-success'>Yes</button>
                        <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
      </form>
      </div>
    </div>
  </div>
</div>";      
          }
          ?>
           
         
          </tbody>
        </table>



         <!-- Modal HTML -->


</div>




