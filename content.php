<?php
if($cm != "" and $fn !=""){
	$cm = strtolower($cm);
	$fn = strtolower($fn);
	?>
	

<?php
	include("submenu/$cm/$fn.htm");
}else{
	include("$fn.php");

}
?>