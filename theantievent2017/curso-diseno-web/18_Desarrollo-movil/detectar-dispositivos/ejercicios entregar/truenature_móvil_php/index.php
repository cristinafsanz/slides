<!DOCTYPE HTML>
<html>
<head>
<!--adaptar etiquetas HTML5 en IE7 y 8-->
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]--> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>True Nature</title>
<meta name="Keywords" content="">
<meta name="Description" content="">

<style>
/*hack IE 8*/
@media \0screen {
  nav#menu  {
margin-top:-13px;
}
}
</style>

<?php
//llamada a la clase Mobile_Detect:
include 'Mobile_Detect.php';

//se crea una instancia:
$detect = new Mobile_Detect();

if (!$detect->isMobile() && !$detect->isTablet()) {
echo('<link rel="stylesheet" href="css/styleScreen.css">');//pc
}

if ($detect->isMobile() && !$detect->isTablet()) {
echo('<link rel="stylesheet" href="css/styleMobile.css">');//movil
}

if ($detect->isTablet()) {
echo('<link rel="stylesheet" href="css/styleScreen.css">');//tablet
}
?>

<script>
	function abreCierra(){		
		if(document.getElementById("menuMovil").style.display == "block") {
			document.getElementById("menuMovil").style.display="none";	
		}
		else {
			document.getElementById("menuMovil").style.display="block";	
		}		
	}
	
	window.onload=function(){
		document.getElementById("boton").onclick=abreCierra;
	}
</script>
</head>
<body>
<div id="wrapper">
	<header id="titulo">
			<h1><a href="#">TrueNature</a></h1>
			<p>Template Design by CSS Templates</p>
	</header>
	<section id="foto">
	</section>
	<nav id="menu">
    	<a href="#" id="boton">Botón</a>
		<ul id="menuMovil">
			<li class="first"><a href="#" accesskey="1" title="">Services</a></li>
			<li><a href="#" accesskey="2" title="">Our Clients</a>
                <ol>
                    <li><a href="#" accesskey="6" title="">Clients 1</a></li>
                    <li><a href="#" accesskey="7" title="">Clients 2</a></li>
                    <li><a href="#" accesskey="8" title="">Clients 3</a></li>
                </ol>
			</li>
			<li><a href="#" accesskey="3" title="">About Us</a></li>
			<li><a href="#" accesskey="4" title="">Careers</a></li>
			<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		</ul>
        <div class="clearfix"></div>
	</nav>
	<div id="page">
		<section id="content">
			<article class="post">
				<header><h2 class="title"><a href="#">Welcome to TrueNature </a></h2></header>
				<footer class="meta">Posted by <a href="#">Someone</a> on February 10, 2011
					&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></footer>
				<section class="entry">
					<p><img src="images/img08.jpg" width="143" height="143" alt="" class="alignleft border">This is <strong>TrueNature </strong>, a free, fully standards-compliant CSS template designed by FreeCssTemplates<a href="http://www.nodethirtythree.com/"></a> for <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.  The picture in this template is from <a href="#">PDPhoto.org</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 2.5</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)					</p>
					<p class="clearfix">&nbsp;</p>
				</section>
			</article>
			<article class="post">
				<header><h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2></header>
				<footer class="meta">Posted by <a href="#">Someone</a> on February 8, 2011
					&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></footer>
				<section class="entry">
					<p><img src="images/img07.jpg" width="143" height="143" alt="" class="alignleft border">Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, consectetuer nisl felis ac diam. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. </p>
					<p class="clearfix">&nbsp;</p>
				</section>
			</article>
			<article class="post">
				<header><h2 class="title"><a href="#">Phasellus pellentesque turpis </a></h2></header>
				<footer class="meta">Posted by <a href="#">Someone</a> on February 8, 2011
					&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></footer>
				<section class="entry">
					<p><img src="images/img09.jpg" alt="" width="143" height="143" class="alignleft">Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. </p>
					<p class="clearfix">&nbsp;</p>
				</section>
			</article>
			<div class="clearfix"></div>
		</section>
		<!-- end #content -->
		<aside id="sidebar">
			<ul>
				<li>
					<h2>Aliquam tempus</h2>
					<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper  hendrerit.</p>
				</li>
				<li>
					<h2>Categories</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Blogroll</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Suspendisse iaculis mauris</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
				<li>
					<h2>Recent Post</h2>
					<ul>
						<li><a href="#">Aliquam libero</a></li>
						<li><a href="#">Consectetuer adipiscing elit</a></li>
						<li><a href="#">Metus aliquam pellentesque</a></li>
						<li><a href="#">Urnanet non molestie semper</a></li>
						<li><a href="#">Proin gravida orci porttitor</a></li>
					</ul>
				</li>
			</ul>
		</aside>
		<!-- end #sidebar -->
		<div class="clearfix"></div>
	</div>

<footer id="footer">
	<p>Copyright &copy; 2010 TemplateName. Designed by <a href="http://www.freecsstemplates.org/"><strong>CSS Templates</strong></a> | <a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">HTML</abbr></a></p>
</footer>
</div>
</body>
</html>
