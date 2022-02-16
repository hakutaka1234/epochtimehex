<?php


//CODE BY HAKU
//Epoch Using Php
//@hakutaka1234
//Tahun Bulan Hari
$R  = "\e[91m";  //red
$G  = "\e[92m";  //green
$B  = "\e[36m";  //blue
$Y  = "\e[93m"; //yellow
$W  = "\e[0m";  //White
echo "$R
#########################

       CODE BY HAKU

#########################
";
echo "\n $B Input Year : ";
$put=trim(fgets(STDIN));
if($put==true){
$Timex="$put"."-12-30 00:00:00";
	$show = strtotime($Timex);
	$dec = $show * 1000;
	$hex = dechex($dec);
echo "\n".$G." Your Dec : ".$Y."$dec \n ".$G."Your Hex : ".$Y."$hex \n ".$G."Your Code :\n ".$Y."const-wide v0, 0x".$hex."L \n";
}elseif($put!=true){
	$defaulttime ="2025-05-05 05:05:05";
	$show = strtotime($defaulttime);
	$dec = $show * 1000;
	$hex = dechex($dec);
echo "\n".$G." Your Dec : ".$Y."$dec \n ".$G."Your Hex : ".$Y."$hex \n ".$G."Your Code :\n ".$Y."const-wide v0, 0x".$hex."L \n";
   }
	?>
