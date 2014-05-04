<?php
include("includes/config.php");
include("includes/functions.php");
$fp = fsockopen($domaintoproxy, 80, $errno, $errstr, 2);
if (!$fp)
{
	echo "TPB is down ... This is the error:";
	echo "<b><font color='red'>$errstr ($errno)</font></b><br>";
	fclose($fp);
}
else
{
	fclose($fp);
	$downtext = "Could not connect to caching server 00 <!--  -->";
	$loadurl  = "http://$domaintoproxy/";
	$loadurl  = get_data("$loadurl");
	if (strcmp($downtext, $loadurl) == 0)
	{
		echo "<b>ThePirateBay.se is <font color='red'>down</font></b>";
	}
	else
	{
		echo "<b>ThePirateBay.se is <font color='green'>up</font></b>";
	}
}
exit;
?>