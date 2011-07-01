<!DOCTYPE html>   
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>ding.TING2: Structure of codebase (v0.1)</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<!-- !CSS -->
	<link rel="stylesheet" href="css/raphael.css?v=1">
	<link rel="stylesheet" href="css/d2structure.css?v=1">
</head>
<!-- !Body -->
<body class="clean">
  <div class="container">
    <header class="siteheader">
      <h1 class="pagetitle">ding.TING2: Structure for shared codebase</h1>
      <nav>
        <ul class="mainmenu">
          <li><a href="/">Diagram</a></li>
          <li><a href="/repos.html">Code</a></li>
          <li><a href="/about.html">About</a></li>
        </ul>
      </nav>
    </header>
    <article>
      <header>
        <h1 class="articletitle">Basic structure</h1>
      </header>
      <figure id="diagram" class="diagram">
      	<figcaption class="caption">explanatory caption</figcaption>
      </figure>
      <form method="post" action="/">
        <ul>
          <li><label><input type="checkbox" id="tooglelayer1" />Layer 1</label></li>
          <li><label><input type="checkbox" id="tooglelayer2" />Layer 2</label></li>
          <li><label><input type="checkbox" id="tooglelayer3" />Layer 3</label></li>
        </ul>
      </form>
    </article>
  </div>
  <!-- !Javascript - at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
 <script src="/script/raphael-min.js"></script>
 <script src="/script/g.raphael-min.js"></script>
 <script src="/script/jquery-1.6.2.min.js"></script>
 <script src="/script/d2structure.js"></script>
</body>
</html>