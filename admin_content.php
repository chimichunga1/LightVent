  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     

     <style> 
   h3
{
  color:  white;
}
 </style>

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

<?php 




?>
    <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='Personal')
      {
       include('admin_personal.php');
      }
      elseif (($_GET['x']) =='Favorite')
      {
      include('admin_favorite.php');
      }
      elseif (($_GET['x']) =='Education')
      {
      include('admin_education.php');
      }
      elseif (($_GET['x']) =='Question')
      {
      include('admin_Question.php');
      }
      elseif (($_GET['x']) =='Contact')
      {
      include('admin_contact.php');
      }
      elseif (($_GET['x']) =='About')
      {
      include('admin_about.php');
      }
      elseif (($_GET['x']) =='Security')
      {
      include('admin_security.php');
      }
       elseif (($_GET['x']) =='People')
      {
      include('admin_people.php');
      }
   


      else
      {
            
      }
    }
    else
    {
      ?>


<?php 

$personal=mysqli_query($conn,"SELECT * FROM tbl_personal WHERE `u_id`='".$_SESSION['u_id']."'");
$epersonal=mysqli_fetch_array($personal);

?>




<div class=" row" >
            <b>
 <!-------------------------------------------------------------------------------------->             
        <h3 style="background-color: #222d32;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P E R S O N A L</h3> 
          <div class="row" style=" padding:0px 50px; " >
<!-------------------------------------------------------------------------------------->






<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>First Name &nbsp; </p>" ?>
            </div> 
            <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[1]."&nbsp; "; ?>
            </div>
</div>
<div class="row">            
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Middle Name &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[2]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Last Name &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[3]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Nickname &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[4]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Gender &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[5]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Age &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[6]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Birthday &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[7]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Birth Place &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[8]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Height &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[9]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Weight &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[10]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Nationality &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[11]."&nbsp; "; ?>
            </div>
</div>

<!-------------------------------------------------------------------------------------->
           </b>
          </div>
 



<?php 

$personal=mysqli_query($conn,"SELECT * FROM tbl_favorite WHERE `u_id`='".$_SESSION['u_id']."'");
$epersonal=mysqli_fetch_array($personal);

?>
            <b>
 <!-------------------------------------------------------------------------------------->             
         <h3 style="background-color: #222d32; " >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F A V O R I T E</h3> 
          <div class="row" style=" padding :0px 50px;" >
<!-------------------------------------------------------------------------------------->
  



<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Color &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[1]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Food &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[2]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Place &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[3]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Person &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[4]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Event &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[5]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Cartoon Character  &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[6]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Anime  Character&nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[7]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Drink  &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[8]."&nbsp; "; ?>
            </div>
</div>

<!-------------------------------------------------------------------------------------->
           </b>
          </div>



<?php 

$personal=mysqli_query($conn,"SELECT * FROM tbl_education WHERE `u_id`='".$_SESSION['u_id']."'");
$epersonal=mysqli_fetch_array($personal);

?>
            <b>
 <!-------------------------------------------------------------------------------------->             
         <h3 style="background-color: #222d32;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E D U C A T I O N</h3> 
          <div class="row" style=" padding :0px 50px;" >
<!-------------------------------------------------------------------------------------->

<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Elemetary School &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[1]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Year Graduated &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[2]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Highschool &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[3]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Year Graduated   &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[4]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>College &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs9" >
             <?php echo $epersonal[5]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Course &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[6]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
              <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Year Graduated  &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[7]."&nbsp; "; ?>
            </div>
</div>
        
<!-------------------------------------------------------------------------------------->
           </b>
          </div>




<?php 

$personal=mysqli_query($conn,"SELECT * FROM tbl_question WHERE `u_id`='".$_SESSION['u_id']."'");
$epersonal=mysqli_fetch_array($personal);

?>
            <b>
 <!-------------------------------------------------------------------------------------->             
         <h3 style="background-color: #222d32;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Q U E S T I O N</h3> 
          <div class="row" style=" padding :0px 50px;" >
<!-------------------------------------------------------------------------------------->

<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>What is love &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[1]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>What is friend &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[2]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Who is your crush &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[3]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Who is your love   &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[4]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Who is your bestfriend &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs9" >
             <?php echo $epersonal[5]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Who is your closed friend &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[6]."&nbsp; "; ?>
            </div>
</div>

        
<!-------------------------------------------------------------------------------------->
           </b>
          </div>


<?php 

$personal=mysqli_query($conn,"SELECT * FROM tbl_contact WHERE `u_id`='".$_SESSION['u_id']."'");
$epersonal=mysqli_fetch_array($personal);

?>
            <b>
 <!-------------------------------------------------------------------------------------->             
         <h3 style="background-color: #222d32;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C O N T A C T</h3> 
          <div class="row" style=" padding :0px 50px;" >
<!-------------------------------------------------------------------------------------->

<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Address &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[1]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Phone number &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[2]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Telephone number &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[3]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Facebook   &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[4]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Twitter &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs9" >
             <?php echo $epersonal[5]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Instagram &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[6]."&nbsp; "; ?>
            </div>
</div>

        
<!-------------------------------------------------------------------------------------->
           </b>
          </div>

<?php 

$personal=mysqli_query($conn,"SELECT * FROM tbl_about WHERE `u_id`='".$_SESSION['u_id']."'");
$epersonal=mysqli_fetch_array($personal);

?>
            <b>
 <!-------------------------------------------------------------------------------------->             
         <h3 style="background-color: #222d32;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A B O U T</h3> 
          <div class="row" style=" padding :0px 50px;" >
<!-------------------------------------------------------------------------------------->

<div class="row">
            <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Describe yourself &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[1]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Qoutes in Life &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[2]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Motto in life &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[3]."&nbsp; "; ?>
            </div>
</div>
<div class="row">
             <div class="col-md-3 col-xs-5">
            <?php echo "<p style='float:left;  '>Philosophy in Life   &nbsp; </p>" ?>
            </div> 
              <div class="col-md-9 col-xs-7" >
             <?php echo $epersonal[4]."&nbsp; "; ?>
            </div>
</div>

        
<!-------------------------------------------------------------------------------------->
           </b>
          </div>




</div>



<?php
    }
    ?>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

 