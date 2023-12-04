<?php 

require("CompteBancaire.php");
require("TitulaireUnique.php");

$personne1 = new TitulaireUnique();
echo  $personne1 -> afficherInfos("Saidi","Asma","13-06-2001","Strasbourg");