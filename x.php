<?php
/*
  DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                   Version 2, December 2004

Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

Everyone is permitted to copy and distribute verbatim or modified
copies of this license document, and changing it is allowed as long
as the name is changed.

           DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
  TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

 0. You just DO WHAT THE FUCK YOU WANT TO.
*/
//THIS FILE IS FOR EXTERNAL SITE ! REMOVE THIS FILE IF YOU DON'T WANT TO GIVE BANDWICH TO OTHER SITES !
	$get = $_GET['u'];
    if(strpos($_GET['loadurl'],'/language/') !== false) {
		$loadurl = file_get_contents("homex_ex.m0k1");
		echo($loadurl);
		exit;
	}
	if($get == "/settings" || $get == "/language" ||  $get == "/" || $get == "")
	{
		$loadurl = file_get_contents("homex_ex.m0k1");
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
	$loadurl = str_replace('<body>','<body><base href="http://pirati.rs/" target="_blank">', $loadurl);
	echo($loadurl);
	exit;
?>