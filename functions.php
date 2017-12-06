<?php include('connect.config.php');

function login($x,$y,$z)
{
  $query = mysqli_query($x,"SELECT `u_id` FROM tbl_acc WHERE `username`='$y' and `password`='$z' ");
  $fetch = mysqli_fetch_assoc($query);
  $display=$fetch['u_id'];
  return $display;
}

function user($x,$y)
{
  $query = mysqli_query($x,"SELECT * FROM tbl_personal WHERE `u_id`='$y'  ");
  $fetch = mysqli_fetch_assoc($query);
  $display =  ucfirst($fetch['fname']);
  $display1 =  ucfirst(substr($fetch['mname'],0,1));
  $display2 =  ucfirst($fetch['lname']);
  $display3 =$display." ".$display1.". ".$display2;

  return $display3;
}

function placeholder($x,$y)
{
  $query1 = mysqli_query($x,"SELECT * FROM $y WHERE `u_id`='".$_SESSION['u_id']."' ");
  $fetch1 = mysqli_fetch_array($query1);
  return $fetch1;
}


function addpersonal($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l)
{

   mysqli_query($a,"UPDATE tbl_personal SET `fname`='".$b."',`mname`='".$c."',`lname`='".$d."',`nickname`='".$e."',`gender`='".$f."',`age`='".$g."',`bday`='".$h."',`bplace`='".$i."',`height`='".$j."',`weight`='".$k."',`nationality`='".$l."' WHERE `u_id`='".$_SESSION['u_id']."' ");
   
}




function addfavorite($a,$b,$c,$d,$e,$f,$g,$h,$i)
{

   mysqli_query($a,"UPDATE tbl_favorite SET `color`='".$b."',`food`='".$c."',`place`='".$d."',`person`='".$e."',`event`='".$f."',`cchar`='".$g."',`achar`='".$h."',`drink`='".$i."' WHERE `u_id`='".$_SESSION['u_id']."' ");
   
}

function addeducation($a,$b,$c,$d,$e,$f,$g,$h)
{

   mysqli_query($a,"UPDATE tbl_education SET `ename`='".$b."',`eyear`='".$c."',`hname`='".$d."',`hyear`='".$e."',`cname`='".$f."',`cyear`='".$g."',`ccourse`='".$h."' WHERE `u_id`='".$_SESSION['u_id']."' ");
   
}

function addquestion($a,$b,$c,$d,$e,$f,$g,$h)
{

   mysqli_query($a,"UPDATE tbl_question SET `dlove`='".$b."',`dfriend`='".$c."',`crush`='".$d."',`love`='".$e."',`bfriend`='".$f."',`friend`='".$g."',`cfriend`='".$h."' WHERE `u_id`='".$_SESSION['u_id']."' ");
   
}


function addabout($a,$b,$c,$d,$e)
{

   mysqli_query($a,"UPDATE tbl_about SET `qoutes`='".$b."',`yourself`='".$c."',`motto`='".$d."',`philosophy`='".$e."' WHERE `u_id`='".$_SESSION['u_id']."' ");
   
}

function addcontact($a,$b,$c,$d,$e,$f,$g)
{

   mysqli_query($a,"UPDATE tbl_contact SET `add`='".$b."',`phone`='".$c."',`tphone`='".$d."',`fb`='".$e."',`twitter`='".$f."',`instagram`='".$g."' WHERE `u_id`='".$_SESSION['u_id']."' ");
   
}

function addsec($a,$b,$c)
{

   mysqli_query($a,"UPDATE tbl_acc SET `username`='".$b."',`password`='".$c."' WHERE `u_id`='".$_SESSION['u_id']."' ");
   
}

function addreg($a,$b,$c)
{


    mysqli_query($a,"INSERT INTO tbl_acc (`username`,`password`) VALUES ('$b','$c')");

     $que=mysqli_fetch_assoc(mysqli_query($a,"SELECT MAX(u_id) FROM tbl_acc"));

   mysqli_query($a,"INSERT INTO tbl_personal (`u_id`,`fname`) VALUES ('".$que."','$b')");
    mysqli_query($a,"INSERT INTO tbl_favorite (`u_id`) VALUES ('".$que."')");
     mysqli_query($a,"INSERT INTO tbl_education (`u_id`) VALUES ('".$que."')");
      mysqli_query($a,"INSERT INTO tbl_question (`u_id`) VALUES ('".$que."')");
 mysqli_query($a,"INSERT INTO tbl_contact (`u_id`) VALUES ('".$que."')");
    mysqli_query($a,"INSERT INTO tbl_about (`u_id`) VALUES ('".$que."')");

}

function checkuser($a,$b)
{

   $que=mysqli_query($a,"SELECT * FROM tbl_acc WHERE `username`='$b' ");
   $fetch = mysqli_num_rows($que);
   return $fetch;
}



?>