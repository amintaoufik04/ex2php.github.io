<?php
   $nom = $_POST["nom"];
   $prenom = $_POST["prenom"];
   $age = $_POST["age"];
   $langue = $_POST['langue'];
  

   echo "Vous êtes $nom $prenom";
   echo "<br>";
   echo "Vous avez $age ans";
   echo "<br>";
   echo "Vous parlez :<ul>";

   foreach ($langue as $L) {
       echo "<li>$L</li>";
   }
   echo "</ul>";

   
   if (isset($_POST['competances'])) { 
    echo "Vous avez des compétences informatiques en :";
    $competances = $_POST['competances'];
   
    echo "<ul>";
    foreach ($competances as $competance) {
        echo "<li>$competance</li>";
    }
    echo "</ul>";
} else {
    echo "Vous n'avez sélectionné aucune compétence informatique.";
}

?>

