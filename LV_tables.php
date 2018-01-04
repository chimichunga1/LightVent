<?php
function tbl_supplier()
{
  ?>
<!--   <table id="ManageSupplier" class="display" cellspacing="0" width="100%"> -->
  <table id="ManageSupplier" class="ui celled table" cellspacing="0" width="100%">
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

          while($row=mysqli_fetch_array($xQx))
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
              <div class='row'>
              ";
              $tag=array('','Supplier Name','Contact Person','Telephone No.','Fax No.','Email','Type Of Supplier');

              for ($i=1; $i <=6 ; $i++) { 
                  echo "
                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>".$tag[$i]."</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[$i]."'>
                  </div>
              ";
              }
            

              echo "      
              
              </div>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
                        
        </form>
        </div>
      </div>
    </div>
  </div>";

  echo "   
  <div id='".$EditModal."' class='modal fade'>
    <div class='modal-dialog modal-lg '>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
  ";
  $_SESSION['editsupid']=$row[0];
 
  frm_edit_supplier();

  echo "
        
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
          <form  role='form' action='LV_submit.php' method='post' id='partdelpost' enctype='multipart/form-data'>
          <div class='form-group'>
            <input type='text' class='form-control' id='SupId' name='supId'  style='opacity:0;' value='".$row[0]."'>
            <label ><center>Are you sure you want to delete '".$row[1]."' ?</center></label>
          </div>
        </div>
        <div class='modal-footer'>
                          <button type='submit' name='delSupplier'  class='btn btn-success'>Yes</button>
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
  <?php 
} 
?>

<?php
function tbl_client()
{
  ?>
<!--   <table id="ManageClients" class="display" cellspacing="0" width="100%"> -->
  <table id="ManageClients" class="ui celled table" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Company Name</th>
                  <th>Contact Person</th>
                  <th>Telephone No.</th>
                  <th>Action</th>
            
              </tr>
          </thead>
          <tbody>
            <?php  


        $xQx=getClient();

          while($row=mysqli_fetch_array($xQx))
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
              <div class='row'>
              ";
         

              $tag=array('','Client Name','Contact Person','Telephone No.','Mobile No.','Fax No.','Email');

              for ($i=1; $i <=6 ; $i++) { 
                  echo "
                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>".$tag[$i]."</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[$i]."'>
                  </div>
              ";
              }
            

              echo "      
              
              </div>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
                        
        </form>
        </div>
      </div>
    </div>
  </div>";

  echo "   
  <div id='".$EditModal."' class='modal fade'>
    <div class='modal-dialog modal-lg '>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
  ";

 

$_SESSION['editclientid']=$row[0];
  frm_edit_client();

  echo "
        
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
          <form  role='form' action='LV_submit.php' method='post' id='partdelpost' enctype='multipart/form-data'>
          <div class='form-group'>
            <input type='text' class='form-control' id='clientId' name='clientId'  style='opacity:0;' value='".$row[0]."'>
            <label ><center>Are you sure you want to delete '".$row[1]."' ?</center></label>
          </div>
        </div>
        <div class='modal-footer'>
                          <button type='submit' name='delClient'  class='btn btn-success'>Yes</button>
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
  <?php 
} 
?>


<?php
function tbl_stocks()
{
  ?>
<!--   <table id="ManageSupplier" class="display" cellspacing="0" width="100%"> -->
  <table id="ManageStocks" class="ui celled table" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Code</th>
                  <th>Item</th>
                  <th>Quantity</th>
           
                  <th>Unit Price</th>
                   <th>Sell Price</th>    
                  <th>Supplier</th>
                  <th>Actions</th>

              </tr>
          </thead>
          <tbody>
            <?php  


        $xQx=getStocks();

          while($row=mysqli_fetch_array($xQx))
            {
             $SeeModal="SeeModal".$row[0];
              $EditModal="EditModal".$row[0];
              $DeleteModal="DeleteModal".$row[0];
              echo" 
              <tr>
              <td>$row[1]</td>
              <td>$row[2]</td>
              <td>$row[12]</td>
              <td>$row[4]</td>
              <td>$row[5]</td>


";


?>
      <td>
<?php


 $supId = $row[6] ;

  global $conn;
  $xQx_supply = "SELECT supName FROM suppliers WHERE supId='$supId'";
  $query_supply=mysqli_query($conn,$xQx_supply);
   while($row_supply=mysqli_fetch_assoc($query_supply))
            {
          echo $row_supply["supName"];

        }
              ?>

            
</td>
<?php 


echo"



                          <td>


              <div class='row'>
     
              ";
              ?>
            <?php
                          echo "
        
              <div class='col-md-4'>
              ";
            echo '
            <button type="button" class="btn btn-block btn-info btn-flat" data-toggle="modal" data-target="#'.$SeeModal.'"><i class="fa fa-eye"></i></button></center> </div>
            ';
            ?>
            <?php
              echo "
        
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
              <div class='row'>
              ";
  
           
                  echo "
                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>Brand</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[7]."'>
                  </div>

                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>Model</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[8]."'>
                  </div>

                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>Description</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[9]."'>
                  </div>

                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>Unit Price</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[10]."'>
                  </div>

                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>Sell Price</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[11]."'>
                  </div>                         

         
                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>Date of Purchase</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[12]."'>
                  </div>                         
    

                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>End of Warranty</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[13]."'>
                  </div>    

                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>Delivery Date</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[14]."'>
                  </div>    

              ";
              
            

              echo "      
              
              </div>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
                        
        </form>
        </div>
      </div>
    </div>
  </div>";

  echo "   
  <div id='".$EditModal."' class='modal fade'>
    <div class='modal-dialog modal-lg '>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
  ";
  $_SESSION['editsupid']=$row[0];
 
  frm_edit_stocks();

  echo "
        
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
          <form  role='form' action='LV_submit.php' method='post' id='partdelpost' enctype='multipart/form-data'>
          <div class='form-group'>
            <input type='text' class='form-control' id='stockId' name='stockId'  style='opacity:0;' value='".$row[0]."'>
            <label ><center>Are you sure you want to delete '".$row[2]."' ?</center></label>
          </div>
        </div>
        <div class='modal-footer'>
                          <button type='submit' name='delStock'  class='btn btn-success'>Yes</button>
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
  <?php 
} 
?>




<?php
function tbl_groups()
{
  ?>
<!--   <table id="ManageSupplier" class="display" cellspacing="0" width="100%"> -->
  <table id="ManageStocks" class="ui celled table" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>GroupName</th>
                  <th>Actions</th>

              </tr>
          </thead>
          <tbody>
            <?php  


        $xQx=getGroup();

          while($row=mysqli_fetch_array($xQx))
            {
/*              $SeeModal="SeeModal".$row[0];*/
              $EditModal="EditModal".$row[0];
              $DeleteModal="DeleteModal".$row[0];
              echo" 
              <tr>
              <td>$row[1]</td>
<td>
                          
              <div class='row'>
     
              ";
              ?>
            <?php
/*            echo '
            <button type="button" class="btn btn-block btn-info btn-flat" data-toggle="modal" data-target="#'.$SeeModal.'"><i class="fa fa-eye"></i></button></center>
            ';*/
            ?>
            <?php
              echo "
        
              <div class='col-md-6'>
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
              <div class='col-md-6'>";
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
/*  echo "   
  <div id='".$SeeModal."' class='modal fade'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
              <div class='row'>
              ";
              $tag=array('','Supplier Name','Contact Person','Telephone No.','Fax No.','Email','Type Of Supplier');

              for ($i=1; $i <=6 ; $i++) { 
                  echo "
                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>".$tag[$i]."</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[$i]."'>
                  </div>
              ";
              }
            

              echo "      
              
              </div>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
                        
        </form>
        </div>
      </div>
    </div>
  </div>";
*/
  echo "   
  <div id='".$EditModal."' class='modal fade'>
    <div class='modal-dialog modal-lg '>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
  ";



  echo "
        
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
          <form  role='form' action='LV_submit.php' method='post' id='partdelpost' enctype='multipart/form-data'>
          <div class='form-group'>
            <input type='text' class='form-control' id='SupId' name='supId'  style='opacity:0;' value='".$row[0]."'>
            <label ><center>Are you sure you want to delete '".$row[1]."' ?</center></label>
          </div>
        </div>
        <div class='modal-footer'>
                          <button type='submit' name='delSupplier'  class='btn btn-success'>Yes</button>
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
  <?php 
} 





?>


<?php
function tbl_invoice()
{
  ?>
<!--   <table id="ManageClients" class="display" cellspacing="0" width="100%"> -->
  <table id="ManageClients" class="ui celled table" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Invoice No.</th>
                  <th>Client</th>
                  <th>Business Type</th>
                  <th>Date</th>
                  <th>Due Date</th>            
                   <th>Actions </th>     
              </tr>
          </thead>
          <tbody>
            <?php  


        $xQx=getInvoice();

          while($row=mysqli_fetch_array($xQx))
            {
/*              $SeeModal="SeeModal".$row[0];*/
              $EditModal="EditModal".$row[0];
              $DeleteModal="DeleteModal".$row[0];
              $AddItemModal="AddItemModal".$row[0];


              echo" 
              <tr>
              <td>$row[1]</td>
              <td>$row[2]</td>
              <td>$row[3]</td>
              <td></td>
              <td></td>

              <td>
              <div class='row'>
              <div class='col-md-3'>
              ";
              ?>
            <?php
/*            echo '
            <button type="button" class="btn btn-block btn-info btn-flat" data-toggle="modal" data-target="#'.$SeeModal.'"><i class="fa fa-eye"></i></button></center>
            ';*/
            ?>
            <?php
/*              echo "
              </div>
              <div class='col-md-4'>
              ";*/
              ?>
            <?php
            echo '
            <button type="button" class="btn btn-block btn-warning btn-flat" data-toggle="modal" data-target="#'.$EditModal.'"><i class="fa fa-edit"></i></button></center> </div>
<div class="col-md-3">
          
            <button type="button" class="btn btn-block btn-success btn-flat" data-toggle="modal" data-target="#'.$AddItemModal.'"><i class="fa fa-plus"></i></button></center> </div>
            

            ';


            ?>











            <?php
              echo "
             
              <div class='col-md-3'>";
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
/*  echo "   
  <div id='".$SeeModal."' class='modal fade'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
              <div class='row'>
              ";
         

              $tag=array('','Client Name','Contact Person','Telephone No.','Mobile No.','Fax No.','Email');

              for ($i=1; $i <=6 ; $i++) { 
                  echo "
                  <div class='input-group margin'>
                  <div class='input-group-btn'>
                  <button type='button' class='btn btn-block btn-primary btn-flat size-125px'>".$tag[$i]."</button>
                  </div>
                  <input type='text' class='form-control'   disabled style='' value='".$row[$i]."'>
                  </div>
              ";
              }
            

              echo "      
              
              </div>
        </div>
        <div class='modal-footer'>
        <button type='button' class='btn btn-primary' data-dismiss='modal'>OK</button>
                        
        </form>
        </div>
      </div>
    </div>
  </div>";*/
  echo "   
  <div id='".$AddItemModal."' class='modal fade'>
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
  ";

frm_add_itemsinvo();
  echo "
        
        </div>
      </div>
    </div>
  </div>";
  echo "   
  <div id='".$EditModal."' class='modal fade'>
    <div class='modal-dialog modal-lg '>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
  ";

 




  echo "
        
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
          <h4 class='modal-title'>INFORMATION </h4>
        </div>
        <div class='modal-body'>
          <form  role='form' action='LV_submit.php' method='post' id='partdelpost' enctype='multipart/form-data'>
          <div class='form-group'>
            <input type='text' class='form-control' id='clientId' name='clientId'  style='opacity:0;' value='".$row[0]."'>
            <label ><center>Are you sure you want to delete '".$row[1]."' ?</center></label>
          </div>
        </div>
        <div class='modal-footer'>
                          <button type='submit' name='delClient'  class='btn btn-success'>Yes</button>
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
  <?php 
} 
?>