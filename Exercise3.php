<?php
/**
 * Ce code utilise une classe en PHP pour trier un tableau d'entiers.
 * La classe Trieur définit une propriété privée tableau qui contiendra le tableau à trier,
 * ainsi qu'un constructeur qui initialise cette propriété à partir d'un argument passé lors de
 *  l'instanciation de la classe. La classe définit également une méthode trier qui utilise la fonction
 *  sort pour trier le tableau en ordre croissant, ainsi qu'une méthode afficher qui utilise la fonction
 *  implode pour afficher le tableau sur la sortie standard. Finalement, une instance de la classe est créée
 *  en utilisant la syntaxe new, puis les méthodes trier et afficher sont appelées pour trier et afficher le
 *  tableau sur la sortie standard.
 */
  // Définition de la classe Trieur
  class Trieur {
    // Propriété privée qui contiendra le tableau à trier
    private $tableau;

    // Constructeur qui initialise la propriété tableau
    public function __construct(array $tableau) {
      $this->tableau = $tableau;
    }

    // Méthode pour trier le tableau en ordre croissant
    public function trier() {
      sort($this->tableau);
    }

    // Méthode pour afficher le tableau
    public function afficher() {
      echo implode(", ", $this->tableau);
    }
  }

  // Instanciation de la classe Trieur
  $trieur = new Trieur([8, 5, 9, 3, 1]);

  // Appel de la méthode trier pour trier le tableau
  $trieur->trier();

  // Appel de la méthode afficher pour afficher le tableau
  echo "Tableau trié : ";
  $trieur->afficher();
?>
