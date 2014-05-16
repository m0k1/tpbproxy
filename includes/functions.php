<?php

function remove_bloat($page)
{
	//Remove ads
	$page = preg_replace("@<script[^>]*?>.*?</script>@si","",$page);
	$page = preg_replace('%<iframe.+?</iframe>%is', '', $page);
	$page = str_replace('lp.torchbrowser.com', '', $page);
	$page = str_replace('To download torrent files you need a BitTorrent client.', '', $page);
	$page = str_replace('Click here to download.', '', $page);
	$page = str_replace("document.onclick = displayTheWindow;", "DontdisplayTheWindow()", $page);
	$page = str_replace("displayTheWindow()", "DontdisplayTheWindow()", $page);
	$page = str_replace('/static/img/icon-https.gif', '', $page);
	$page = str_replace('privitize.com', '/blank.php', $page);
	$page = str_replace('http://cdn1.adexprt.com/lp/bar2.png', '', $page);
	$page = str_replace('http://cdn2.adexprt.com/lp/bar2.png', '', $page);
	$page = str_replace('&nbsp;Anonymous Download', '', $page);
	$page = str_replace('https://static.thepiratebay.se', '/static', $page);
	$page = str_replace("http://static.thepiratebay.org/img/bar.gif", "", $page);
	$page = str_replace('torrent client</a>!)</div>', '</a>', $page);
	$page = str_replace('<div>(Problems with magnets links are fixed by upgrading your', '', $page);
	//Designfix
	$page = str_replace("Get this torrent", "DOWNLOAD TORRENT", $page);
	$page = str_replace("<title>The Pirate Bay - The galaxy's most resilient bittorrent site</title>", "<title>TPB Proxy</title>", $page);
	//SearchFix
	$page = str_replace("/s/", "/search.php", $page);
	//CharFix
	$page = str_replace('<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>', '<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">', $page);
	$page = str_replace('amp;', '', $page);
	//Javascript Tweaks
	$page = str_replace('<body>', '<body>
					<script type="text/javascript" >
					if (top != self) top.location.href = location.href;
					function setAll()
					{
						t = document.forms.q.elements;
						t.audio.checked=false;
						t.video.checked=false;
						t.apps.checked=false;
						t.games.checked=false;
						t.other.checked=false;
					}
					function rmAll(){ document.forms.q.elements.all.checked=false; }
					</script>
					<script src="/static/js/tpb.js" type="text/javascript"></script>
					<script src="/static/js/prototype.js" type="text/javascript"></script>
					<script src="/static/js/scriptaculous.js" type="text/javascript"></script>
					<script src="/static/js/details.js" type="text/javascript"></script>
					<script language="javascript" type="text/javascript">if (top.location != self.location) {top.location.replace(self.location);}</script>', $page);
	//Fix static link
	$page = str_replace("http://static.thepiratebay.se", "static", $page);
	$page = str_replace("//static.thepiratebay.se", "static", $page);
	$page = str_replace("//static.thepiratebay.org", "static", $page);
	$page = str_replace("http://torrents.thepiratebay.se/", "gettorrent.php?torrent=", $page);
	$page = str_replace("//torrents.thepiratebay.se/", "gettorrent.php?torrent=", $page);
	$page = str_replace("https://thepiratebay.se", "htt://anonymous.rs", $page);
	$page = str_replace("http://thepiratebay.se", "http://anonymous.rs", $page);
	$page = str_replace("http://thepiratebay.org", "http://anonymous.rs", $page);
	$page = str_replace("https://thepiratebay.org", "http://anonymous.rs", $page);
	//Proxy the images
	//$page = str_replace("image.bayimg.com/","/img.php?i=", $page);
	//$page = str_replace("proxy.bayimg.com/","/img.php?i=", $page);
	//RSS Proxy fix
	$page = str_replace("http://rss.thepiratebay.se/", "/rss.php?id=", $page);
	$page = str_replace("//rss.194.71.107.81/", "/rss.php?id=", $page);
	//Remove links that is not needed
	$page = str_replace("var urlToShow", "var Nothing", $page);
	$page = str_replace("setCookie(name, value)", "setCookieGone(name, value)", $page);
	$page = str_replace("getCookie(name)", "getCookieGone(name)", $page);
	$page = str_replace("<a href=\"/login\" title=\"Login\">Login</a> | ", "", $page);
	$page = str_replace("<a href=\"/register\" title=\"Register\">Register</a> | ", "", $page);
	$page = str_replace("<a href=\"/language\" title=\"Select language\">Language / Select language</a> |", "", $page);
	$page = str_replace("Blog</a>\n			<br />", "Blog | </a>\n	", $page);
	$page = str_replace("<a href=\"/legal\" title=\"Legal threats\">Legal threats</a> |", "", $page);
	$page = str_replace("<a href=\"/contact\" title=\"Contact us\">Contact us</a> |", "", $page);
	$page = str_replace("<a href=\"/doodles\" title=\"Doodles\">Doodles</a> |", "", $page);
	$page = str_replace("<a href=\"http://www.pastebay.net\" title=\"PasteBay\" target=\"_blank\">PasteBay</a> |", "", $page);
	$page = str_replace("<a href=\"/downloads\" title=\"Downloads\">Downloads</a> |", "", $page);
	$page = str_replace("<a href=\"/promo\" title=\"Promo\">Promo</a> |", "", $page);
	$page = str_replace("<!-- <a href=\"http://www.pirateshops.com\" title=\"Pirate Shops\" target=\"_blank\">Pirate Shops</a> | -->", "", $page);
	$page = str_replace("href=\"http://bayimg.com", "href=\"http://bayimg.com\" rel=\"nofollow", $page);
	$page = str_replace("href=\"http://suprbay.org/", "href=\"http://suprbay.org/\" rel=\"nofollow", $page);
	$page = str_replace("href=\"http://www.bytelove.com", "href=\"http://www.bytelove.com\" rel=\"nofollow", $page);
	$page = str_replace("bayfiles.com", "bayfiles.com\" rel=\"nofollow", $page);
	$page = str_replace("href=\"/about", "href=\"/about\" rel=\"nofollow", $page);
	$page = str_replace("href=\"/legal", "href=\"/legal\" rel=\"nofollow", $page);
	$page = str_replace("href=\"/policy", "href=\"/policy\" rel=\"nofollow", $page);
	$page = str_replace("href=\"/downloads", "href=\"/downloads\" rel=\"nofollow", $page);
	$page = str_replace("href=\"/doodles", "href=\"/doodles\" rel=\"nofollow", $page);
	$page = str_replace("title=\"Twitter\" target=\"_blank\"", "title=\"Twitter\" target=\"_blank\" rel=\"nofollow\"", $page);
	$page = str_replace("title=\"Facebook\" target=\"_blank\"", "title=\"Facebook\" target=\"_blank\" rel=\"nofollow\"", $page);
	$page = str_replace("<b><a href=\"http", "<a href=\"http", $page);
	$page = str_replace("TPB T-shirts</a></b>", "TPB T-shirts</a>", $page);
	$page = str_replace("Bayfiles</a></b>", "Bayfiles</a>", $page);
	//Switch view not yet supported
	$page = str_replace("<a href=\"/switchview.php?view=s\">Single</a>", "<a href=\"#\" onClick=\"alert('This feature is not yet supported. I need to spend a long time adding support for cookies, if/when I do this feature will work.')\">Single</a>", $page);
	$page = str_replace("<div class=\"detailartist\"", "<div class=\"detailartist\" style=\"display:none; visibility:hidden;\"", $page);
	//Remove detailed artist info that doesnt work
	$page = str_replace("ajax_details_artinfo.php", "", $page);
	return $page;
}

function get_data($url)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_USERAGENT, 'TMB Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_MAXCONNECTS, 320);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

function search_curl($url)
{
	$ch = curl_init();
 	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
 	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 20);
 	curl_setopt ($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.11) Gecko/20071127 Firefox/2.0.0.11');// Only calling the head
 	curl_setopt($ch, CURLOPT_HEADER, true); // header will be at output
 	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'HEAD'); // HTTP request is 'HEAD'	
 	$data = curl_exec($ch);	
	curl_close($ch);	
 	return $data;
}

?>