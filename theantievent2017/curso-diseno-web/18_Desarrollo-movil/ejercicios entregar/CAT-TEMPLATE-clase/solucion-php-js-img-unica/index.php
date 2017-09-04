<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<!--template by marija zaric
and distributed by http://freehtml5templates.com -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>cats</title>
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/gato.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>

<!--archivos necesarios en este orden:-->
<script src='assets/modernizr.custom.js'></script>
<?php include 'assets/imagenes.php'; ?>
</head>
<body>
<div class="gridContainer clearfix">

<header id="subcontentSup">
  <div id="titulo"><img src="images/logo.png" alt="logo" id="logo"><h1>Template for your cats</h1></div>
  <nav id="menu">
    <ul>
      <li><a class="menu" href="#">Home</a></li>
      <li><a class="menu" href="#">About</a></li>
      <li><a class="menu" href="#">Portfolio</a></li>
      <li><a class="menu" href="#">News</a></li>
      <li><a class="menu" href="#">Contact</a></li>
    </ul>
  </nav>

  <div id="imgGato"><img src="images/<? echo $_GET['carpeta'] ?>/gato.jpg" class="imagenesBorde" alt="gato"></div>

  <section id="entrada">
    <p class="welcome blanco">Welcome </p>
    <p class="welcome blanco"><em>Douglas Adams: One of the problems of taking things apart and seeing how they work - supposing you're trying to find out how a cat works--you take that cat apart to see how it works, what you've got in your hands is a non-working cat. The cat wasn't a sort of clunky mechanism that was susceptible to our available tools of analysis.</em></p>
  </section>
	<div class="clear"></div>
</header>

<section id="subcontentComent">
  <section id="coment1">
    <h2>I am watching...</h2>
    <p><img class="imagenesBorde" src="images/picture2.jpg" alt="gato"></p>
    <p>Cats don't like change without their consent. Cats can be cooperative when something feels good, which, to a cat, is the way everything is supposed to feel as much of the time as possible. The cat is a creature of most refined and subtle perceptions naturally.</p>
    <p><a href="#">Read more</a></p>
  </section>
  <section id="coment2">
    <h2>I am thinking...</h2>
    <p><img class="imagenesBorde" src="images/picture3.jpg" alt="gato"></p>
    <p>There are people who reshape the world by force or argument, but the cat just lies there, dozing; and the world quietly reshapes itself to suit his comfort and convenience.</p>
    <p><a href="#">Read more</a></p>
  </section>
  <section id="coment3">
    <h2>I am resting...</h2>
    <p><img class="imagenesBorde" src="images/picture1.jpg" alt="gato"></p>
    <p>The thing about cats, As you may find, Is that no one knows What they have in mind.</p>
    <p><a href="#">Read more</a></p>
  </section>
  <section id="coment4">
    <h2>And purr sleeping..</h2>
    <p><img class="imagenesBorde" src="images/picture4.jpg" alt="gato"></p>
    <p>Cats have always been associated with the Moon. Like the Moon, they come to life at night, escaping from humanity and wandering over housetops with their eyes beaming out through the darkness.</p>
    <p><a href="#">Read more</a></p>
  </section>
	<div class="clear"></div>
</section>


<article id="subcontentFernand">
  <div id="articulo">
    <h2>Fernand Mery quote</h2>
    <p><img class="imagenesBorde fernandmery" src="images/picture5.jpg" alt="gato">With the qualities of cleanliness, affection, patience, dignity, and courage that cats have, how many of us, I ask you, would be capable of becoming cats? God made the cat in order that man might have the pleasure of caressing the lion. Are cats lazy? Well, more power to them if they are. Which one of us has not entertained the dream of doing just as he likes, when and how he likes, and as much as he likes? The cat is magical and the bringer of good luck. - Indian</p>
  </div>
	<div class="clear"></div>
</article>

<section id="subcontentPrepie">
  <div id="abajo1" class="blanco">
    <h3>Behavior</h3>
    <p>Sociability, Grooming<br>
      Fighting, Hunting and feeding<br>
      Play, Vocalizations    </p>
  </div>
  <div id="abajo2"><img src="images/cat_paw_prints.png" alt="huellas" id="huellas"></div>
  <div id="abajo3" class="blanco">
    <h3>Biology</h3>
    <p>Taxonomy and evolution<br>
      Genetics, 
      Anatomy<br>
      Physiology, Senses</p>
  </div>
	<div class="clear"></div>
</section>

<footer id="subcontentPie" class="blanco">
  <div id="pie"><p>Design and code by <a href="http://www.marijazaric.com" onClick="window.open(this.href); return false;">marija zaric - creative simplicity</a> <span>© 2013 cats template</span></p></div>
	<div class="clear"></div>
</footer>

</div>
</body>
</html>
