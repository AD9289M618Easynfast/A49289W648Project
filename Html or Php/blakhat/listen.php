<?php
session_start();
ob_start();
?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<meta name="apple-mobile-web-app-capable" content="yes"/>
<link rel="stylesheet" type="text/css" href="comments/css/stylesheet.css"/>
<style>
body{
	background-color:#000;
	color:#fff !important;
	font-size:100%;
	font-family: Courier, "Times New Roman", Times, serif;
	width:97%;
	max-width:100%;
}

h1{
	font-weight:normal;
	font-size:150%;
}

DIV#cmtx_perm_1.cmtx_comment_box_1{
	background-color:#000000;
	border:0;
}

</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46263336-1', 'blakhat.tv');
  ga('send', 'pageview');

</script>
</html>
<body>
<h1 style="text-align:center;">man is least himself when he talks in his own person. give him a mask and he will tell you the truth</h1>
<?php
$cmtx_identifier = '1';
$cmtx_reference = 'Page One';
$cmtx_path = 'comments/';
define('IN_COMMENTICS', 'true'); //no need to edit this line
require $cmtx_path . 'includes/commentics.php'; //no need to edit this line
?>
</body>
</html>