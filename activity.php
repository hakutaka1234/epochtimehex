<?php


//CODE BY HAKU
//Epoch Using Php
//@hakutaka1234
//Tahun Bulan Hari
echo " input year : ";
$put=trim(fgets(STDIN));
if($put==true){
$Timex="$put"."-12-30 00:00:00";
$show = strtotime($Timex);
	$parshe = $show."000";
	$dectohex = dechex($parshe);
	//echo "\nYour Code Hex : $dectohex \n";
	echo "\nYour Code Hex : const-wide v0, 0x".$dectohex."L \n\n";
}elseif($put!=true){
	$defaulttime ="1970-12-30 00:00:00";
	$show = strtotime($defaulttime);
	$parshe = $show."000";
	$dectohex = dechex($parshe);
	//echo "\nYour Code Hex : $dectohex \n";
	echo "\nYour Code Hex : const-wide v0, 0x".$dectohex."L \n\n";
   }
	?>
