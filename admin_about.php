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
  <?php $row=placeholder($conn,'tbl_about'); ?>
  <div class="form-group">
    <label class=" col-sm-2" >DESCRIBE YOURSELF</label>
    <div class="col-sm-10">   <textarea rows="5" class="form-control" name="b" ><?php  echo $row[1]; ?></textarea> </div>
    </div>
<div class="form-group">
    <label class=" col-sm-2" >QOUTES IN LIFE</label>
    <div class="col-sm-10">   <textarea rows="5" class="form-control" name="c" ><?php  echo $row[2]; ?></textarea> </div>
  </div>
  <div class="form-group">
    <label class=" col-sm-2" >MOTTO IN LIFE</label>
    <div class="col-sm-10">   <textarea rows="5" class="form-control" name="d" ><?php  echo $row[3]; ?></textarea> </div>
  </div>
  <div class="form-group">
    <label class=" col-sm-2" >PHILOSOPHY IN LIFE</label>
    <div class="col-sm-10">   <textarea rows="5" class="form-control" name="e" ><?php  echo $row[4]; ?></textarea> </div>
  </div>
 
  



  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button style="width:100%;" type="submit" name="save_about" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
  


  

</div> 