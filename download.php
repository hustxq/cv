<?php 
$filename=$_GET['fn'];
/*$kl=$_GET['kl'];
 if($kl!='123')
	echo "file code fail.";
else{
echo "file download successfully!"; */
header('content-disposition:attachment;filename='.basename($filename));
header('content-length:'.filesize($filename));
readfile($filename);
//}
?>