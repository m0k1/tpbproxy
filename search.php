<?php
include("includes/config.php");
include("includes/functions.php");
$scriptname = $_SERVER['SCRIPT_NAME'];
$loadurl    = $_SERVER["REQUEST_URI"];
$loadurl    = str_replace("$scriptname", "http://$domaintoproxy/s/", $loadurl);
$loadurl    = search_curl($loadurl);
$loadurl    = str_replace("/0/99/", "/0/7/", $loadurl);
@header("Location: $loadurl");
exit;
?>