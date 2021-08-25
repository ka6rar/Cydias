
<!DOCTYPE html>
<html lang="en">
<head>
	<title>karar's Repo</title>
	<noscript>
		<link rel="stylesheet" href="ios7.min.css?_=d" type="text/css" />
	</noscript>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
</head>
<script src="jquery-3.2.1.min.js"></script>
<script src="description.js?_=d"></script>
<body onload="loadPackages();">
	<main id="content">
		<h2 role="header">karar's Repo</h2>
		<ul>
			<li class="has-icon">
				<a href="cydia://url/https://cydia.saurik.com/api/share#?source=https://cydai.herokuapp.com" role="button">
					<img style = "border-radius: 20%;" href="cydia7.png" alt="" srcset="cydia7.png 2x, cydia7.png 3x" class="icon"/>
					<label>Open Cydia</label>
				</a>
			</li>
		</ul>

		<noscript>
			<h2></h2><ul style="background:#ff0000"><center><li><p>Error JavaScript Disabled.</p></li></center></ul>
		</noscript>
		<span id="updates_" hidden><h2 role="header">Last Updates</h2><ul id="updates"></ul></span>
		<span id="browser_" hidden><h2 role="header">Browse Packages</h2><ul id="browser"></ul></span>
		<h2 role="header">Social</h2>
		<ul>

			<li class="has-icon">
				<a href="https://twitter.com/karar_gibar" target="_blank" role="button">
					<img style = "border-radius: 20%;" href="twitter.png" alt="" srcset="twitter.png 2x, twitter.png 3x" class="icon"/>
					<label>Follow karar</label>
				</a>
			</li>

		</ul>
		<h2 role="header">Theme</h2>
		<ul>
			<li>
				<a onclick="toogleTheme();" role="button">
					<p>Change Theme</p>
				</a>
			</li>
		</ul>
	</main>
	<p style="text-align: center; font-size: 85%; margin-top: 10px;" role="footer" id="neo">karar © 2020</p>
</body>
</html>