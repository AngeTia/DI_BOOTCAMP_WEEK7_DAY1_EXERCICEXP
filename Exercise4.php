<?php
   /**
    * Ce code utilise une classe en PHP pour calculer la différence entre deux dates.
    * La classe Calculatrice définit une méthode difference qui prend en entrée deux dates 
    * sous forme de chaînes de caractères au format "YYYY-MM-DD". La fonction strtotime est 
    * utilisée pour convertir ces chaînes de caractères en timestamp, ce qui permet de les comparer.
    * La différence entre les deux timestamps est ensuite divisée par 86400 pour obtenir le nombre de 
    * jours entre les deux dates. Finalement, une instance de la classe est créée en utilisant la syntaxe new,
    * puis la méthode difference est appelée pour calculer la différence entre deux dates.
    * Le résultat est enregistré dans une variable, puis affiché sur la sortie standard à l'aide de la fonction echo.
    */
  // Définition de la classe Calculatrice
  class Calculatrice {
    // Méthode pour calculer la différence entre deux dates
    public function difference($date1, $date2) {
      $diff = strtotime($date2) - strtotime($date1);
      return $diff / 86400;
    }
  }

  // Instanciation de la classe Calculatrice
  $calculatrice = new Calculatrice();

  // Appel de la méthode difference pour calculer la différence entre deux dates
  $diff = $calculatrice->difference("2022-01-01", "2022-12-31");

  // Get date of the first day of the month
  function convert($sum) {
    $years = ($sum / 365) ;
    $years = floor($years); 
    $month = ($sum % 365) / 30.5; 
    $month = floor($month); 
    $days = ($sum % 365) % 30.5; // the rest of days
    // Echo all information set
    echo $years.' years - '.$month.' month - '.$days.' days';
  }

  echo "La différence entre les deux dates est : $diff jours"."</br></br>";
  convert( $diff);
  // Affichage du résultat
?>
