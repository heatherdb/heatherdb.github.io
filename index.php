<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>877 Records | Home</title>
<script src="libs/modernizr-custom.js"></script>
<link rel="stylesheet" href="main.css" />
</head>

<body data-stellar-background-ratio="0.5" class="parallax">

<!--facebook-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!---->

<div id="container">
<!--<div id="logo-container"></div>-->
<div id="waypointsMarker"></div>
	<?php include "includes/nav.html"; ?>
    <div class="other1"></div>
    <main>
        <div id="featuredHome">
        </div>
        <div id="facebook">
        	<div class="fb-page" data-href="https://www.facebook.com/877records" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/877records"><a href="https://www.facebook.com/877records">877records</a></blockquote></div></div>
        </div>
        <div id="twitter">
        	<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/dom877" data-chrome="noheader transparent" data-widget-id="671430319250219008" data-tweet-limit="3">Tweets by @dom877</a>
        </div>
    </main>
<script src="libs/jquery-1.11.3.min.js"></script>
<script src="libs/jquery.waypoints.min.js"></script>
<script src="libs/jquery.stellar.min.js"></script>
<script>
	$.stellar();
</script>
<?php include "includes/waypoints.html"; ?>
<!--twitter-->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</body>
</html>
