<?php 
include('connect.config.php');


//-------------------------------- Supplier
function getSupplier()
{
  $xQx = "SELECT supId,supName,contactPerson,";
  $xQx .= "telno,faxno,email,typeOfSup ";
  $xQx .= "FROM suppliers ";
  $xQx .= "WHERE isDeleted = 0 AND NOT supId = 0  ";
  return  $xQx;
}   

function addSupplier($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l)
{
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
    $xQx .=" $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l ) ";

}


?>