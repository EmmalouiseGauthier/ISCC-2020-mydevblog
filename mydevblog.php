<!DOCTYPE html>
<html>
<head>
<title>DevBlog Emma-Louise GAUTHIER</title>
<link href="mep/presentation.css" rel="stylesheet">
<meta charset="utf-8"/>
</head>

<?php
include "header-blog.php"
?>

<body>
<h2>
La réalisation de ce DevBlog a eu lieu dans le cadre de l'ISCC 2020. Ce site regroupe plusieurs articles traitant de sujet différents, dans une optique marketing, communication et/ou digital. Il vous est aussi possible de vous deplacer sur ce site grace aux différents onglets.
</h2>

<h3>Voici les cinq derniers articles déposés sur le site :</h3>
<p>
<ul>
<li>Le marketing digital</li>
<li>Les start-up Lyonnaise</li> 
<li>l'écologie et le marketing</li>
<li>l'art et le digital</li>
<li>Lockdown's article</li>
</ul>
</p>
</body>

<?php
include "footer-blog.php"
?>
</html>



<footer>
<head><link href="mep/presentation.css" rel="stylesheet"></head>
<nav>
<a href="https://github.com/EmmalouiseGauthier/ISCC-2020-mydevblog.git">GitHub Personnel</a>
<a href="https://www.linkedin.com/in/emma-louise-gauthier-4b5220197/">Linkedin</a>
<a href="https://www.epitech.eu/fr/ecole-informatique-lyon/">Site Epitech</a>
</nav>
</footer>



<header>
<head><link href="mep/presentation.css" rel="stylesheet"></head>

<?php
include "navigation.php"
?>

<h1 id="titre">DEVBLOG ISEG SUMMER CODE CAMP</h1>
</header>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link href="mep/presentation.css" rel="stylesheet">
<title>Contact</title>
</head>
<?php
include "header-blog.php"
?>

<body>
<h2>CONTACT</h2>
<form method="post" action="traitement.php">
<fieldset id="Contact">
<label>Nom et Prénom</label>
<input type="text" name="Nom et Prénom" size="30" /><br />

<label>Adresse e-mail</label>
<input type="text" name="Adresse e-mail" size="30" /><br />

<p class="Message">Message</p>
<textarea name="comments" row="5" cols="40"></textarea>
</fieldset>

<p id="buttons">
<input type="submit" value="Envoyer" />
</p>
</form>
</body>

<?php
include "footer-blog.php"
?>
</html>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<link href="mep/presentation.css" rel="stylesheet">
<title>Articles</title>
</head>

<?php
include "header-blog.php"
?>

<body>
<h2> liste des articles présents sur le site :</h2>
<p>
<ul>
<li>Le marketing b to b</li>
<li>les start-up Lyonnaise</li> 
<li>l'écologie et le marketing</li>
<li>l'art et le digital</li>
<li>les techniques marketing en vogue</li>
<li>Présentation du métier de fashion editor</li>
</ul>
</p>
</body>

<?php
include "footer-blog.php"
?>

</html>


