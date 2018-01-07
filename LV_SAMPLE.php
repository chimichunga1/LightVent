<?PHP 

if(!isset($_POST['id']))
{
	$sample = $_SESSION["invoiceId_submit"];
}
else
{
$sample = $_POST['id'];
$_SESSION["invoiceId_submit"] = $sample;
}

echo $sample;

frm_add_itemsinvo();

?>