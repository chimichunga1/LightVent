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





?>