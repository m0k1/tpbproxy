<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pirati.rs - The Pirate Bay Proxy by Serbian pirates</title>
    <meta name="description" content="Download music, movies, games, software and much more. The Pirate Bay is the world's largest bittorrent tracker.">
    <meta name="keywords" content="mp3, avi, bittorrent, piratebay, pirate bay, proxy, torrent, torrents, movies, music, games, applications, apps, download, upload, share, kopimi, magnets, magnet">
    <link rel="search" type="application/opensearchdescription+xml" href="http://pirati.rs/static/opensearch.xml" title="Search The Pirate Bay">
	<!--[if lt IE 9]>
        <link rel="stylesheet" href="/static/css5/ie.css">
        <script src="/static/js/html5_for_ie.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/static/css5/main.css">
	<script>
function GetStatus()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("xdiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","down.php",true);
xmlhttp.send();
}
</script>
<style>
	.DownDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}

	.DownDialog:target {
		opacity:1;
		pointer-events: auto;
	}

	.DownDialog > div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #999);
		background: -webkit-linear-gradient(#fff, #999);
		background: -o-linear-gradient(#fff, #999);
	}

	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }
	</style>
</head>
<body>
<div id="fp">
     <h1><a href="/blog" title=""><span></span></a></h1>
    <nav id="navlinks">
        <strong>Search Torrents</strong> |
        <a href="/browse" title="Browse Torrents">Browse Torrents</a> |
        <a href="/recent" title="Recent Torrents">Recent Torrents</a> |
        <a href="/tv" title="TV shows">TV shows</a> | 
        <a href="/music" title="Music">Music</a> |
        <a href="/top" title="Top 100">Top 100</a>
    </nav>
    <form name="q" method="get" action="search.php">
        <p id="inp">
            <input name="q" type="search" title="Pirate Search" placeholder="Pirate Search" autofocus required>
        </p>
        <p id="chb">
            <label title="All" accesskey="a"><input id="all" onclick="setAll();" type="checkbox" checked>All</label>
            <label title="Audio" accesskey="q"><input name="audio" id="audio" onclick="rmAll();" type="checkbox">Audio</label>
            <label title="Video" accesskey="w"><input name="video" id="video" onclick="rmAll();" type="checkbox">Video</label>
            <label title="Applications" accesskey="e"><input name="apps" id="apps" onclick="rmAll();" type="checkbox">Applications</label>
            <label title="Games" accesskey="r"><input name="games" id="games" onclick="rmAll();" type="checkbox">Games</label>
            <label title="Other" accesskey="y"><input name="other" id="other" onclick="rmAll();" type="checkbox">Other</label>
        </p>
        <p id="subm">
            <input type="submit" title="Pirate Search" value="Pirate Search" accesskey="s">
            <input type="submit" title="I'm Feeling Lucky" name="lucky" value="I'm Feeling Lucky">
            <input type="hidden" name="page" value="0">
            <input type="hidden" name="orderby" value="99">
        </p>
    </form>
    <strong id="howdl"><a href="/help" title="How do I download?">How do I download?</a> | <a onclick="GetStatus()" href="#check">Slow loading ? Check if TPB.se is DOWN OR NOT !</a></strong>
<div id="check" class="DownDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>TPB DOWN CHECK</h2>
		<div id="xdiv"><p>x</p></div>
		<p><button type="button" onclick="GetStatus()">REFRESH</button><p>
	</div>
</div>
</div>

<footer>
    <nav>
	<a href="/about" rel="nofollow" title="About">About</a> | 
	<a href="/legal" rel="nofollow" title="Legal threats">Legal threats</a> | 
	<a href="/policy" rel="nofollow" title="Usage polic">Usage policy</a> | 
	<a href="/blog" title="Blog">Blog</a> | 
	<a href="http://www.piratskapartija.com/" rel="nofollow" target="_blank">Piratska Partija</a>
	<br>
	<a href="/doodles" rel="nofollow" title="Doodles">Doodles</a> | 
	<a href="/searchcloud" title="Search Cloud">Search Cloud</a> | 
	<a href="/tags" title="Tag Cloud">Tag Cloud</a> | 
	<a href="http://suprbay.org/" title="Forum" rel="nofollow" target="_blank">Forum</a> | 
	<a href="http://bayfiles.com" title="Bayfiles" rel="nofollow" target="_blank">Bayfiles</a>
	<br>
	<a href="http://bayimg.com" title="BayImg" rel="nofollow" target="_blank">BayImg</a> | 
	<a href="http://pastebay.com" title="PasteBay" rel="nofollow" target="_blank">PasteBay</a> | 
	<a href="https://www.ipredator.se" title="IPREDator" rel="nofollow" target="_blank">IPREDator</a> | 
	<a href="https://www.facebook.com/ThePirateBayWarMachine" rel="nofollow" title="Follow TPB on Facebook" target="_blank">Pratite TPB na Facebook-u</a>
    </nav>
    <div id="icons"><br/>
        <a href="http://www.kopimi.com/kopimi" rel="nofollow" target="_blank" title="Kopimi" class="sp kopimi"><span>Kopimi</span></a><br/><br/>
		<center>Powered by <a href="http://piratskapartija.com">PiratskaPartija.com</a>- <a href="https://www.assembla.com/code/tpbproxy/subversion/nodes">Get the Script</a></center><br>
		<a href="/rss" title="RSS" class="sp rss"><span>RSS</span></a>
	</div>
</footer>
</body>
</html>