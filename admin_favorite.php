<style>

.space
{
	width: 100%;
	padding: 5%;
}


</style>



<div class="space">


<form class="form-horizontal" method="post" action="admin_submit.php">
  <?php $row=placeholder($conn,'tbl_favorite'); ?>
  <div class="form-group">
    <label class=" col-sm-2" >COLOR</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="b"  <?php  echo "value='".$row[1]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >FOOD</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="c" <?php  echo "value='".$row[2]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >PLACE</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="d" <?php  echo "value='".$row[3]."' "; ?>> </div>
  </div>
   <div class="form-group">
    <label class=" col-sm-2" >PERSON</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="e" <?php  echo "value='".$row[4]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >EVENT</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="f" <?php  echo "value='".$row[5]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >CARTOON CHARACTER</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="g" <?php  echo "value='".$row[6]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >ANIME CHARACTER</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="h" <?php  echo "value='".$row[7]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >DRINK</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="i" <?php  echo "value='".$row[8]."'"; ?>> </div>
  </div>
   
 
  



  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button style="width:100%;" type="submit" name="save_favorite" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
 	


  

</div> 