<?php
	$get = $_GET['x'];
    if(strpos($_GET['x'],'/language/') !== false) {
		$loadurl = file_get_contents("c");
		echo($loadurl);
		exit;
	}
	if($get == "/settings" || $get == "/language" ||  $get == "/" || $get == "")
	{
		$loadurl = file_get_contents("c");
		echo($loadurl);
		exit;
	}
	include("includes/functions.php");
	include("includes/dn.php");
    $loadurl = $get;
    $loadurl = "http://$domaintoproxy$loadurl";
    $loadurl = str_replace(" ", "+", $loadurl);
    $loadurl = get_data("$loadurl");
	$loadurl = remove_bloat("$loadurl");
	echo($loadurl);
	exit;
?>