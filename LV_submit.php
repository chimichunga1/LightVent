<?php 
include('LV_queries.php'); 
include('connect.config.php');
session_start();


if (isset($_POST['addSuppliers']))
{
//-----------------------------------------------
    if(empty($_POST['Supplier_l']))
    {
        addSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k'],'0');
    }
    else
    {
        addSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k'],$_POST['Supplier_l']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>
<?php
}

if (isset($_POST['addInvoice']))
{
//-----------------------------------------------
    if(empty($_POST['invoice_a']))
    {

    }
    else
    {

$a = $_POST['invoice_a'];
$b = $_POST['invoice_b'];
$c = $_POST['invoice_c'];
$d = $_POST['invoice_d'];
$e = $_POST['invoice_e'];
$f = $_POST['invoice_f'];


$xQx = "INSERT INTO invoices(invoiceId,clientId,busTypeId,date_created,due_date,remarks,isDeleted)VALUES ('$a','$b','$c','$d','$e','$f','0')";
        $query=mysqli_query($conn,$xQx);
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=INVOICES";
    </script>
<?php
}




if (isset($_POST['delSupplier']))
{
//-----------------------------------------------
delSupplier($_POST['supId']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>
<?php
}


if (isset($_POST['editSuppliers']))
{
//-----------------------------------------------

    if(empty($_POST['Supplier_i']))
    {
        updSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],'0',$_POST['Supplier_j'],$_POST['Supplier_k'],$_POST['Supplier_l'],$_POST['supId']);
    }
    else
    {
        updSupplier($_POST['Supplier_a'],$_POST['Supplier_b'],$_POST['Supplier_c'],$_POST['Supplier_d'],$_POST['Supplier_e'],$_POST['Supplier_f'],$_POST['Supplier_g'],$_POST['Supplier_h'],$_POST['Supplier_i'],$_POST['Supplier_j'],$_POST['Supplier_k'],$_POST['Supplier_l'],$_POST['supId']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=SUPPLIERS";
    </script>
<?php
}

if (isset($_POST['addClient']))
{
//-----------------------------------------------
    if(empty($_POST['Client_o']))
    {
        addClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_i'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],'0',$_POST['clientId']);
    }
    else
    {
        addClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_i'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],$_POST['Client_o'],$_POST['clientId']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=CLIENTS";
    </script>
<?php
}

if (isset($_POST['delClient']))
{
//-----------------------------------------------
delClient($_POST['clientId']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=CLIENTS";
    </script>
<?php
}


if (isset($_POST['editClient']))
{
//-----------------------------------------------
    if(empty($_POST['Client_o']))
    {
        updClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],'0',$_POST['clientId']);
    }
    else
    {
        updClient($_POST['Client_a'],$_POST['Client_b'],$_POST['Client_c'],$_POST['Client_d'],$_POST['Client_e'],$_POST['Client_f'],$_POST['Client_g'],$_POST['Client_h'],$_POST['Client_j'],$_POST['Client_k'],$_POST['Client_l'],$_POST['Client_m'],$_POST['Client_n'],$_POST['Client_o'],$_POST['clientId']);    
    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=CLIENTS";
    </script>
<?php
}




if (isset($_POST['addGroups']))
{
//-----------------------------------------------
    if(empty($_POST['groupa']))
    {
    
    }
    else
    {
  
         echo $_POST['groupa'];
         addgroup($_POST['groupa'],'0');   

    }
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=GROUP";
    </script>
<?php
}




if (isset($_POST['addstocks']))
{
//-----------------------------------------------
    if(empty($_POST['stock_m']))
    {
    
    }
    else
    {
  
         addstocks($_POST['stock_a'],$_POST['stock_b'],$_POST['stock_c'],$_POST['stock_d'],$_POST['stock_e'],$_POST['stock_f'],$_POST['stock_g'],$_POST['stock_h'],$_POST['stock_i'],$_POST['stock_j'],$_POST['stock_k'],$_POST['stock_l'],$_POST['stock_m'],$_POST['stock_n'],$_POST['stock_q'],'0');   

    }
//-----------------------------------------------
    ?>
  <script>   
    window.location.href="admin.php?x=STOCKS";
    </script> 
<?php
}




if (isset($_POST['delStock']))
{
//-----------------------------------------------
delStock($_POST['stockId']);
//-----------------------------------------------
    ?>
    <script>   
    window.location.href="admin.php?x=STOCKS";
    </script>
<?php 

}



?>