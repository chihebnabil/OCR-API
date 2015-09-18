<?php


// Constantes
define('TARGET', "http://vps197374.ovh.net/ocr/api.php");    // Repertoire cible
define('MAX_SIZE', 1500000);    // Taille max en octets du fichier
define('WIDTH_MAX', 3000);    // Largeur max de l'image en pixels
define('HEIGHT_MAX', 3000);  // Hauteur max de l'image en pixels
define('API_KEY', "1554383091442022");

?>

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
