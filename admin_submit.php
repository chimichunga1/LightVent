<?php 
include('functions.php'); 
include('connect.config.php');
session_start();


if (isset($_POST['Add Suppliers']))
{
//-----------------------------------------------
addSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k'],$_POST['Supplier_l']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>
<?php
}


?>