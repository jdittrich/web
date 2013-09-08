<!DOCTYPE html>
<html lang="en"><head>
  <title>Weimarnetz - Karte - Openwifimap</title>
    <?php include("./inc/_head.inc.php") ?>
</head>


<body onload="setIframeHeight('ifrm');" onresize="setIframeHeight('ifrm');">

  <?php include("./inc/navbar.inc.php") ?>

	 <div class="container">

                <h1>Geographische Karte (openwifimap)</h1>
                <div class="row">
                <div class="span6">Unsere neue Karte auf Basis von openwifimap.net</div>
                <div class="span1 offset5"><a class="btn" href="http://map.weimarnetz.de/#map?bbox=50.9484779952583,11.194210052490234,51.00651822828961,11.441402435302734" target="_blank">Neues&nbsp;Tab</a></div>
                </div>
                <div class="row">
                </div>
                <div>&nbsp;</div>
                <div style="text-align: center"><iframe id="ifrm" src="http://map.weimarnetz.de/map.html#bbox=50.9484779952583,11.194210052490234,51.00651822828961,11.441402435302734" width="98%" scrolling="yes" marginwidth="0"
marginheight="0" frameborder="0">test</iframe></div>

  <?php include("./inc/footer.inc.php") ?>

</div>

<?php include("./inc/_foot.inc.php") ?>

</body></html>
