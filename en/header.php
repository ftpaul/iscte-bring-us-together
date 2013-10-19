<?php
session_start();

if (!isset($_SESSION['url']) && !isset($_SESSION['images'])) {

	$text = file_get_contents("/sponsors/sponsors.js");

	$exploded = explode("\n",$text);

	$i = 0;
	foreach ($exploded as $key => $value) {
		if ($key % 2 == 0) {
			$_SESSION['images'][$i] = $value;
		} else {
			$_SESSION['url'][$i] = $value;
			$i++;
		}
		
	}

} 
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>ISCTE Brind Us Together</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS Files
	================================================== -->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.8.0/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<link type="text/css" rel="stylesheet" href="/css/shCoreDefault.css"/>
	<link rel="stylesheet" type="text/css" href="/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="../css/modal.css" />
	
	<!--<script src="js/less-1.4.0.min.js"></script>
	<link rel="stylesheet/less" type="text/css" href="typegrid.less" />-->
	
	<!--[if lt IE 8]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


	<!-- Typekit: Proxima Nova
	================================================== -->
	<!--<script type="text/javascript" src="//use.typekit.net/caa2rex.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->


	<script type="text/javascript" src="/js/shCore.js"></script>
	<script type="text/javascript" src="/js/shBrushJScript.js"></script>
	<script type="text/javascript" src="/js/shBrushPlain.js"></script>

	<script type="text/javascript">SyntaxHighlighter.all();</script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="http://iscte-iul.pt/ISCTE.ico">

</head>

<body>

	<!-- Header
	================================================== -->
	<section id="header">
		<div class="container">
				
			<div class="desktop-6 columns">
				<h1><a href="/"><strong>ISCTE</strong> Bring Us Together</a></h1>
			</div>

			<div class="desktop-6 hide-on-mobile columns">
				<ul class="social">
					<li><a href="/"><img src="../images/flag-pt.png" style="max-width: 25px;" ></a></li>
					<li><a href="../cn/"><img style="max-width: 25px;" src="../images/flag-cn.png" ></a></li>
				</ul><!-- // .social -->

				<div class="clear"></div>
			</div><!--  // .desktop-6 -->

			<div class="clear"></div>

		</div><!-- // .container -->
	</section><!-- // #header -->