<style>

.space
{
  width: 100%;
  padding: 5%;
}
textarea {
    resize: none;
}

</style>



<div class="space">


<form class="form-horizontal" method="post" action="admin_submit.php">
  <?php $row=placeholder($conn,'tbl_question'); ?>
  <div class="form-group">
    <label class=" col-sm-2" >WHAT IS LOVE</label>
    <div class="col-sm-10">   <textarea rows="5" class="form-control" name="b" ><?php  echo $row[1]; ?></textarea> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >WHAT IS FRIEND</label>
    <div class="col-sm-10">   <textarea rows="5" class="form-control" name="c" ><?php  echo $row[2]; ?></textarea> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >WHO IS YOUR CRUSH</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="d" <?php  echo "value='".$row[3]."' "; ?>> </div>
  </div>
   <div class="form-group">
    <label class=" col-sm-2" >WHO IS YOUR LOVE</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="e" <?php  echo "value='".$row[4]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >WHO IS YOUR BESTFRIEND</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="f" <?php  echo "value='".$row[5]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >WHO IS YOUR FRIEND</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="g" <?php  echo "value='".$row[6]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >WHO IS YOUR CLOSE FRIEND</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="h" <?php  echo "value='".$row[7]."' "; ?>> </div>
  </div>
   
 
  



  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button style="width:100%;" type="submit" name="save_question" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
  


  

</div> 