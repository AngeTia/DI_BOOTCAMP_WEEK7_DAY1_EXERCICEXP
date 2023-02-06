<?php
/**
 * Ce code utilise une classe en PHP pour calculer la factorielle d'un nombre.
 *  La classe Calculatrice définit une méthode factorielle qui prend un nombre en entrée et
 *  retourne sa factorielle en utilisant une boucle for. Finalement, une instance de la classe est créée
 *  en utilisant la syntaxe new, puis la méthode factorielle est appelée pour calculer la factorielle de 5.
 *  Le résultat est enregistré dans une variable, puis affiché sur la sortie standard à l'aide de la fonction echo.
 */
// Définition de la classe Calculatrice
class Calculatrice {
    // Méthode pour calculer la factorielle d'un nombre
    public function factorielle($n) {
      // Initialisation du résultat
      $resultat = 1;

      // Boucle pour multiplier les nombres de 1 à n
      for ($i = 1; $i <= $n; $i++) {
        $resultat *= $i;
      }

      // Renvoi du résultat
      return $resultat;
    }
  }

  // Instanciation de la classe Calculatrice
  $calculatrice = new Calculatrice();

  // Appel de la méthode factorielle pour calculer la factorielle de 5
  $fact = $calculatrice->factorielle(5);

  // Affichage du résultat
  echo "La factorielle de 5 est : $fact";