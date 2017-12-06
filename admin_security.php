<style>

.space
{
	width: 100%;
	padding: 5%;
}


</style>



<div class="space">

  


<form class="form-horizontal" method="post" action="admin_submit.php">
  <?php $row=placeholder($conn,'tbl_acc'); ?>
  <div class="form-group">
    <label class=" col-sm-2" >USERNAME</label>
    <div class="col-sm-10">   <input type="text" class="form-control" name="b"  <?php  echo "value='".$row[1]."' "; ?>> </div>
  </div>
    <div class="form-group">
    <label class=" col-sm-2" >PASSWORD</label>
    <div class="col-sm-10">    <input id="c" type="password" class="form-control" name="c"  <?php  echo "value='".$row[2]."' "; ?>>
    <button style="width:100%;" type="button" class="btn btn-info" id="eye">
    Show Password
</button> </div>
  </div>



  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button style="width:100%;" type="submit" name="save_sec" class="btn btn-success login">Submit</button>
    </div>
  </div>
</form>

  

</div> 
<script type="text/javascript">
  function show() {
    var p = document.getElementById('c');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('c');
    p.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);
</script>