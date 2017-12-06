<?php 
include('functions.php'); 
include('connect.config.php');
session_start();


if (isset($_POST['Login']))
{
//-----------------------------------------------
$x = login($conn,$_POST['user'],$_POST['pass']);
//-----------------------------------------------

  if(isset($x))
  {
      $_SESSION['u_id']=$x;

    ?>
    <script>   
    alert('Logged in Successful !');
    window.location.href="admin.php";
          
    </script>
<?php
  }
  else
  {
     echo'<script>
     
       alert("Logged in Failed !");
     </script>';
  }
}


if (isset($_POST['signup']))
{

    $queue=checkuser($conn,$_POST['b']);
    if($queue==0)
    {
            if($_POST['c']==$_POST['d'])
            {
        //-----------------------------------------------
        addreg($conn,$_POST['b'],$_POST['c']);
        //-----------------------------------------------
            ?>
            <script>   
            alert('Sign up Successful !');
     
            </script>
        <?php
        }
        else
        {
              ?>
            <script>   
            alert('Mismatch Password !');
      
            </script>
        <?php
        }
    }

    else
    {
             ?>
            <script>   
            alert('Username is taken !');
      
            </script>
        <?php
    }

}



if (isset($_POST['save_personal']))
{
//-----------------------------------------------
addpersonal($conn,$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g'],$_POST['h'],$_POST['i'],$_POST['j'],$_POST['k'],$_POST['l']);
//-----------------------------------------------
    ?>
    <script>   
    alert('Update personal !');
    window.location.href="admin.php?x=Personal";
    </script>
<?php
}

if (isset($_POST['save_favorite']))
{
//-----------------------------------------------
addfavorite($conn,$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g'],$_POST['h'],$_POST['i']);
//-----------------------------------------------
    ?>
    <script>   
    alert('Update favorite !');
    window.location.href="admin.php?x=Favorite";
    </script>
<?php
}


if (isset($_POST['save_education']))
{
//-----------------------------------------------
addeducation($conn,$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g'],$_POST['h']);
//-----------------------------------------------
    ?>
    <script>   
    alert('Update education !');
    window.location.href="admin.php?x=Education";
    </script>
<?php
}


if (isset($_POST['save_question']))
{
//-----------------------------------------------
addquestion($conn,stripslashes($_POST['b']),stripslashes($_POST['c']),$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g'],$_POST['h']);
//-----------------------------------------------
    ?>
    <script>   
    alert('Update question !');
    window.location.href="admin.php?x=Question";
    </script>
<?php
}
if (isset($_POST['save_contact']))
{
//-----------------------------------------------
addcontact($conn,$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f'],$_POST['g']);
//-----------------------------------------------
    ?>
    <script>   
    alert('Update contact !');
    window.location.href="admin.php?x=Contact";
    </script>
<?php
}

if (isset($_POST['save_about']))
{
//-----------------------------------------------
addabout($conn,stripslashes($_POST['b']),stripslashes($_POST['c']),stripslashes($_POST['d']),stripslashes($_POST['e']));
//-----------------------------------------------
    ?>
    <script>   
    alert('Update about me !');
    window.location.href="admin.php?x=About";
    </script>
<?php
}
if (isset($_POST['save_sec']))
{
//-----------------------------------------------
addsec($conn,stripslashes($_POST['b']),stripslashes($_POST['c']));
//-----------------------------------------------
    ?>
    <script>   
    alert('Update security !');
    window.location.href="admin.php?x=Security";
    </script>
<?php
}




?>