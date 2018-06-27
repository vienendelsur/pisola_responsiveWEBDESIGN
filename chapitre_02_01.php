<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Chapitre 1</title>
<link href="css/chapitre_02_01.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Liste / sélecteur enfant</h1>
<ul id="menu">
    <li>nav 01</li>
    <li>nav 02</li>
    <li>nav 03
    	<ul class="submenu">
            <li>nav 01</li>
            <li>nav 02</li>
    	</ul>
    </li>
</ul>
  <hr>
<div id="frangin"><h1>Paragraphes / élément frère / +</h1> 
  <p>1er paragraphe</p>
<p>2nd paragraphe</p>
<hr></div>
<h1>Images / sélecteur d'attribut / []</h1>
<p><img src="img/la-dolce-vita1.jpg" width="80" height="113"></p>
<p><img src="img/la-dolce-vita1.jpg" class="vignette" width="150">

<hr>
<h1>Paragraphe / :first-letter</h1>
<span class="lettrine">
<p>Longtemps, je me suis couché de bonne heure. Parfois, à peine ma bougie éteinte, mes yeux se fermaient si vite que je n'avais pas le temps de me dire : « Je m'endors. » Et, une demi-heure après, la pensée qu'il était temps de chercher le sommeil m'éveillait ;</p>
</span>
<hr>
<div id="child"><h1>liste / :first-child </h1>
<ul>
  <li>un élément de liste</li>
  <li>un second élément de liste</li>
  <li>encore un autre élément de liste</li>
</ul></div>
<div id="focus">
<form action="" method="get">
<input name="prenom" type="text"><br>
<input name="nom" type="text"><br>
<input name="courriel" type="text"><br>
<input name="Envoyer" type="button" value="Envoyer">
</form>

</div>
<footer>
  
  <p>Pied de page</p>
<hr>
</footer>
</body>
</html>
