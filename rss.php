<?php
include("includes/config.php");
include("includes/functions.php");

$id = $_GET["id"];
$loadurl = "https://thepiratebay.org/rss/$id";
$loadurl = get_data("$loadurl");
$loadurl = remove_bloat($loadurl);
echo ($loadurl);
?>
