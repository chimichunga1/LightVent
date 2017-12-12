<?php 
include('connect.config.php');


//-------------------------------- Supplier
function getSupplier()
{
  global $conn;
  $xQx = "SELECT supId,";
  $xQx .= "supName,";
  $xQx .= "contactPerson,";
  $xQx .= "telno,";
  $xQx .= "faxno,";
  $xQx .= "email,";
  $xQx .= "typeOfSup ";
  $xQx .= "FROM suppliers ";
  $xQx .= "WHERE isDeleted = 0 AND NOT supId = 0  ";
  $query=mysqli_query($conn,$xQx);
  return  $query;
}   


function addSupplier($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l)
{
    global $conn;
    $xQx = "INSERT INTO suppliers(";
    $xQx .= "supName,";
    $xQx .= "busTypeId,";
    $xQx .= "contactPerson,";
    $xQx .= "address,";
    $xQx .= "telno,";
    $xQx .= "faxno,";
    $xQx .= "email,";
    $xQx .= "approved_by,";
    $xQx .= "date_approved,";
    $xQx .= "remarks,";
    $xQx .= "typeOfSup,";
    $xQx .= "isActive) ";
    $xQx .=" VALUES (";
    $xQx .=" '$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l' ) ";
    $query=mysqli_query($conn,$xQx);
    return  $query;
}

function delSupplier($a)
{
  global $conn;
  $xQx = "UPDATE suppliers ";
  $xQx .= "SET isDeleted = 1 ";
  $xQx .=  "WHERE supId='$a' ";
  $query=mysqli_query($conn,$xQx);
  return  $query;
}

function getEdit_Supplier($a)
{
  global $conn;
  $xQx = "SELECT supName,";
  $xQx .= "contactPerson,";
  $xQx .= "telno,";
  $xQx .= "faxno,";
  $xQx .= "address,";
  $xQx .= "email,";
  $xQx .= "typeOfSup, ";
  $xQx .= "remarks, ";
  $xQx .= "isActive, ";
  $xQx .= "busTypeId, ";
  $xQx .= "approved_by, ";
  $xQx .= "date_approved, ";
  $xQx .= "supId ";
  $xQx .= "FROM suppliers ";
  $xQx .= "WHERE supId='$a'  ";
  $query=mysqli_query($conn,$xQx);
  return  $query;

}
function updSupplier($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m)
{
  global $conn;
  $xQx = "UPDATE suppliers ";
  $xQx .= "SET supName='$a', ";
  $xQx .= "busTypeId='$j', ";
  $xQx .= "contactPerson='$b', ";
  $xQx .= "address='$e', ";
  $xQx .= "telno='$c', ";
  $xQx .= "faxno='$d', ";
  $xQx .= "email='$f', ";
  $xQx .= "approved_by='$k', ";
  $xQx .= "date_approved='$l', ";
  $xQx .= "remarks='$h', ";
  $xQx .= "typeOfSup='$g', ";
  $xQx .= "isActive='$i' ";
  $xQx .= "WHERE supId = '$m'";
  $query=mysqli_query($conn,$xQx);
  return  $query;
}


function getallSup_BusType()
{
  global $conn;
  $xQx = "SELECT busTypeId,busTypeName ";
  $xQx .=  "FROM businesstypes WHERE NOT busTypeId = 0 ";
  $query=mysqli_query($conn,$xQx);
  return  $query;
}

function getSup_BusType($a)
{
  global $conn;
  $xQx = "SELECT busTypeId,busTypeName ";
  $xQx .=  "FROM businesstypes  ";
  $xQx .=  "WHERE busTypeId = '$a' ";
  $query=mysqli_query($conn,$xQx);
  return  $query;
}


?>