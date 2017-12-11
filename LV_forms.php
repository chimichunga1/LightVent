
<?php 


function frm_add_supplier()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >

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
                 <option value=" " Selected> </option>
                <option value="1" >1</option>
                <option value="2">2</option>
                <option value="3">3</option>    
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
                  <input type="text" class="form-control"  name="Supplier_h" >
      </div>
    </div>
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date Approved</button>
                  </div>
                  <input type="date" class="form-control"  name="Supplier_i"  >

              
      </div>
    </div>
  </div>
    

  <div class="row">
    <div class="col-md-12">
    <center>
              <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>
              <textarea  style="width:98%; resize: none;" rows="5" class="form-control"  name="Supplier_j"  ></textarea>
    </center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="input-group margin">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                  </div>
              <select name="Supplier_k"  class="form-control"  required>
                <option value=" " Selected> </option>
                <option value="Potential">Potential</option>
                <option value="Accredited">Accredited</option>
         
              </select>
                  
      </div>
    </div>
    <div class="col-md-3">
    <div style="margin:10px;">
                    <button type="button" class="btn btn-block btn-primary btn-flat size-125px">isActive</button>
    </div>
    </div>
    <div class="col-md-3">
    <div class="input-group margin">
      <center>
                  <label class="switch">
                    <input type="checkbox" name="Supplier_l" value="1"  >
                    <span class="slider"></span>
                  </label>
                 
      </center>
    </div>
    </div>
  </div>


  <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="addSuppliers">Submit</button>
  </form>  

  <br>
  <br>
  <div class="divider"></div>
<?php 
}

function frm_edit_supplier()
{
?>
<div class="divider"></div>
  <form  role="form" action="LV_submit.php" method="post"   enctype="multipart/form-data" >
    <?php 
     global  $editsupid;
    $xQx=getEdit_Supplier($editsupid);
    while($row=mysqli_fetch_array($xQx))
    {
        echo "<input type='text' class='form-control' id='SupId' name='supId'  style='position:absolute;z-index:-1;opacity:0;' value='".$row[12]."'>";
    ?>

    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >Suppliers Name</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_a'  value='".$row[0]."'>"; ?>

        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Contact Person</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_b'  value='".$row[1]."'>"; ?>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Business Type</button>
                    </div>
                    
                <select name="Supplier_j"  class="form-control" >
                    <?php echo "<option value='". $row[9]."' Selected>SELECTED -> ". $row[9]."</option>"; ?>
                    <option value="1">1</option>
                    <option value="2">2</option>    
                    <option value="3">3</option>    
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
                <?php echo " <input type='text' class='form-control'  name='Supplier_e'  value='".$row[4]."'>"; ?>
        </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Telephone No</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_c'  value='".$row[2]."'>"; ?>
        </div>
        </div>
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Fax No</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_d'  value='".$row[3]."'>"; ?>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Email</button>
                    </div>
                    <?php echo " <input type='text' class='form-control'  name='Supplier_f'  value='".$row[5]."'>"; ?>
        </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Approved By</button>
                    </div>
                    
                    <?php echo " <input type='text' class='form-control'  name='Supplier_k'  value='".$row[10]."'>"; ?>
        </div>
        </div>
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Date Approved</button>
                    </div>
                    
                    <?php echo " <input type='date' class='form-control'  name='Supplier_l'  value='".$row[11]."'>"; ?>

                
        </div>
        </div>
    </div>
        

    <div class="row">
        <div class="col-md-12">
        <center>
                <button type="button" class="btn btn-block btn-primary btn-flat" style="width:98%; ">Remarks</button>        
                <?php echo" <textarea  style='width:98%; resize: none;' rows='5' class='form-control'  name='Supplier_h'  >".$row[7]." </textarea>"; ?>
        </center>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <div class="input-group margin">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px">Suppliers Type</button>
                    </div>
                

                    <select name="Supplier_g"  class="form-control"  >
                    <?php echo " <option value='".$row[6]."' Selected>SELECTED -> ".$row[6]."</option>"?>
                        <option value=" "> </option>
                        <option value="Potential">Potential</option>
                        <option value="Accredited">Accredited</option>
                
                    </select>

                   
                    
        </div>
        </div>
        <div class="col-md-3">
        <div style="margin:10px;">
                        <button type="button" class="btn btn-block btn-primary btn-flat size-125px" >isActive</button>
        </div>
        </div>
        <div class="col-md-3">
        <div class="input-group margin">
        <center>
                     <label class="switch">
                    <?php 
                    if($row[8]=='1')
                    {
                        echo '<input type="checkbox" checked name="Supplier_i" value="1" >';
                    }
                    else
                    {
                        echo '<input type="checkbox" name="Supplier_i" value="1" >';
                    }
                    ?>
                        
                     <span class="slider"></span>
                    </label>
                    
        </center>
        </div>
        </div>
    </div>


    <button type="submit" class="btn  btn-success btn-flat"  style="float:right;" name="editSuppliers">Submit</button>
    </form>  

    <br>
    <br>
    <div class="divider"></div>
    <?php 
    }

}

?>