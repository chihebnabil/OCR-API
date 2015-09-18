<?php
// Constantes
define('TARGET', "http://vps197374.ovh.net/ocr/api.php");    // Repertoire cible
define('MAX_SIZE', 1500000);    // Taille max en octets du fichier
define('WIDTH_MAX', 3000);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 3000);  // Hauteur max de l'image en pixels
define('API_KEY', "1554383091442022");
?>
<html>
<head>
	<meta charset="utf8">
	<title>Reconnaissance optique de caractères</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">OCR</a>
    </div>
  </div>
</nav>

<div class='container'>
<div class="container-fluid">

<div class="row">

	<h2>Reconnaissance optique de caractères</h2>
	<h4>OCR -- Image 2 Text</h4>
</div>
<div class="row">
	<p>
		OCR  ( Optical Character Recognition ) ,service gratuit en ligne , permet d'analyser le texte dans tout fichier d'image que vous téléchargez , puis convertir le texte de l'image dans le texte que vous pouvez facilement modifier sur votre ordinateur

	</p>
</div>

<form enctype="multipart/form-data" action="<?php echo TARGET; ?>" method="post">
 <fieldset>
     <legend>Formulaire</legend>
       <p>
         <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>
         <input type="hidden" name="API_KEY" value="<?php echo API_KEY; ?>" />
         <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MAX_SIZE; ?>" />
         <input name="fichier" type="file" id="fichier_a_uploader" />
         <select class="" name="lang">Langue
           <option value="eng">Anglais</option>
           <option value="ara">Arabe</option>
           <option value="fra">Francais</option>
           <option value="spa">Espagnol</option>

         </select>
         <input type="submit" name="submit" value="Uploader" />
       </p>
   </fieldset>
 </form>
 <footer class="footer">
         <div class="container">
           <p class="text-muted">2015 CNWEB. contact@cnweb.dz</p>
         </div>
       </footer>
   </body>
   </html>
 
