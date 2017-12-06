  <!-- Left side column. contains the logo and sidebar -->


  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
  


      <!-- Sidebar Menu -->

    <ul class="sidebar-menu" data-widget="tree">
   



  <a style="font-size:20px;color:#b8c7ce;" href="admin.php">  <div class="user-panel">
        <div class="pull-left image">
          <div style="background-color:white; background-size: 30px 30px;
    background-repeat: no-repeat;height:30px;width:30px;"  class="img-circle" alt="User Image">
 

          <center ><b><p style="font-size:20px;color:#b8c7ce;"><?php echo substr(user($conn,$_SESSION['u_id']),0,1); ?></p></b></center>
          </div>
        </div>
        <div class="pull-left info" style="left:30px;">
    
          <p style="font-size:20px;"><?php echo substr(user($conn,$_SESSION['u_id']),1); ?></p>
          <!-- Status -->
         
        </div>
      </div>
      </a>
     
</ul>

      <ul class="sidebar-menu" data-widget="tree">


 
        <li class="header">INFORMATION</li>
        <!-- Optionally, you can add icons to the links -->
        
    <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='Personal')
      {
        echo "<li class='active'>";
      }
      else
      {
            echo"<li>";
      }
    }
    else
    {
    echo"<li>";
    }
    ?>
       <a href="?x=Personal"><i class="fa  fa-user"></i> <span> Personals</span></a></li>
        
      <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='Favorite')
      {
        echo "<li class='active'>";
      }
        else
      {
            echo"<li>";
      }
    }
    else
    {
    echo"<li>";
    }
    ?><a href="?x=Favorite"><i class="fa fa-tag"></i> <span>Favorites</span></a></li>
        
     <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='Education')
      {
        echo "<li class='active'>";
      }
        else
      {
            echo"<li>";
      }
    }
    else
    {
    echo"<li>";
    }
    ?><a href="?x=Education"><i class="fa fa-graduation-cap"></i> <span>Educations</span></a></li>
        
        
       <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='Question')
      {
        echo "<li class='active'>";
      }
        else
      {
            echo"<li>";
      }
    }
    else
    {
    echo"<li>";
    }
    ?><a href="?x=Question"><i class="fa fa-user-secret"></i> <span>Questions</span></a></li>
        
      
        <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='Contact')
      {
        echo "<li class='active'>";
      }
        else
      {
            echo"<li>";
      }
    }
    else
    {
    echo"<li>";
    }
    ?><a href="?x=Contact"><i class="fa fa-phone-square"></i> <span>Contacts</span></a></li>
        
   
        <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='About')
      {
        echo "<li class='active'>";
      }
        else
      {
            echo"<li>";
      }
    }
    else
    {
    echo"<li>";
    }
    ?><a href="?x=About"><i class="fa fa-link"></i> <span>About Me</span></a></li>
    
        
      <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='Security')
      {
        echo "<li class='active'>";
      }
        else
      {
            echo"<li>";
      }
    }
    else
    {
    echo"<li>";
    }
    ?><a href="?x=Security"><i class="fa fa-gear"></i> <span>Security</span></a></li>
   
      </ul>

 
      
      

       <ul class="sidebar-menu" data-widget="tree">
        <li class="header">USERS</li>
        <!-- Optionally, you can add icons to the links -->
        
       
    
        
       <?php
    if(isset($_GET['x']))
    {
      if(($_GET['x']) =='People')
      {
        echo "<li class='active'>";
      }
      else
      {
        echo"<li>";
      }
    }
    else
    {
 echo"<li>";
    }
    ?><a href="?x=People"><i class="fa fa-group"></i> <span>Peoples</span></a></li>
   
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>