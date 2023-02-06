<?php
   /**
    * Ce code utilise une classe en PHP pour afficher une chaîne de caractères.
    * La classe Afficheur définit une propriété privée str qui contiendra la chaîne à afficher,
    * ainsi qu'un constructeur qui initialise cette propriété à partir d'un argument passé lors 
    * de l'instanciation de la classe. La classe définit également une méthode afficher qui est 
    * utilisée pour afficher la chaîne en utilisant la fonction echo. Finalement, une instance de 
    * la classe est créée en utilisant la syntaxe new, puis la méthode afficher est appelée pour afficher
    * la chaîne sur la sortie standard. Les commentaires dans ce code sont déclarés en utilisant le caractère //,
    *  qui indique à PHP que tout ce qui suit sur la même ligne est un commentaire et doit être ignoré lors de l'exécution du code.
    */
  // Définition de la classe Afficheur
  class Afficheur {
    // Propriété privée qui contiendra la chaîne à afficher
    private $str;

    // Constructeur qui initialise la propriété str
    public function __construct($str) {
      $this->str = $str;
    }

    // Méthode pour afficher la chaîne
    public function afficher() {
      echo $this->str;
    }
  }

  // Instanciation de la classe Afficheur
  $afficheur = new Afficheur("Bonjour, je suis une chaîne de caractères.");

  // Appel de la méthode afficher pour afficher la chaîne
  $afficheur->afficher();
?>
