<?php

class Crepe
{
  private int $sugar;     // Qantity "Number of tablespoon"
  private int $flour;     // Qantity "gr"
  private int $eggs;      // Qantity "Piece"
  private int $milk;      // Qantity "cl"
  private float $salt;    // Qantity "Pinch"
  private int $butter;    // Qantity "gr"
  private array $topping; // Array contain additionnal ingredients

  public function __construct(int $sugar, int $flour, int $eggs, int $milk, float $salt, int $butter, array $topping = []){

    $listIngredients = [
      "sugar" => $sugar,
      "flour" => $flour,
      "eggs" => $eggs,
      "milk" => $milk,
      "salt" => $salt,
      "butter" => $butter,
      "topping" => $topping
    ];

    if (!empty($listIngredients)) {
      $this->set($listIngredients);
    }
  }

  /**
   * For each entry,get value for each attribut
   */
  public function get(string $attributs): string
  {
    $newAttributs = strtolower(trim("$attributs", " \n\r\t\v0"));
    $getAttribut = match($newAttributs){
      "sugar" => $this->sugar,
      "flour" => $this->flour,
      "eggs" => $this->eggs,
      "milk" => $this->milk,
      "salt" => $this->salt,
      "butter" => $this->butter,
      "topping" => $this->topping,
      default => NULL
    };
    
    return $getAttribut;

  }

  /**
   * For each entry,get value for each attribut
   */
  public function set(array $listIngredients): void
  {
    foreach ($listIngredients as $key => $value) {
      $lcIngredient = strtolower($key);
      $this->$lcIngredient = $value;
    }
  
  }

  /**
   * Retrun list of ingredients : array
   */
  public function displayIngredients(): array
  {
    $ingredients = [
      "1" => "Sucre: $this->sugar gr,",
      "2" => "Farine: $this->flour gr,",
      "3" => "Oeufs: $this->eggs,",
      "4" => "Lait: $this->milk cl,",
      "5" => " Sel: $this->salt pincée(s),",
      "6" => "Beurre fondu: $this->butter gr,"

    ];

    foreach ($this->topping as $key =>$value) {
      $i = $key + 7;
      $ingredients += [$i => $value];
    }

    return $ingredients;
  }

  /**
   * Return a list of instructions
   */
  public function displayRecipe():array
  {
    $recipe = [
      "1" => "Mettez la farine dans un saladier avec le sel et le sucre.",
      "2" => "Faites un puits au milieu et versez-y les œufs.",
      "3" => "Commencez à mélanger doucement. Quand le mélange devient épais, ajoutez le lait froid petit à petit.",
      "4" => "Quand tout le lait est mélangé, la pâte doit être assez fluide. Si elle vous paraît trop épaisse, rajoutez un peu de lait. Ajoutez ensuite le beurre fondu refroidi, mélangez bien.",
      "5" => "Faites cuire les crêpes dans une poêle chaude (par précaution légèrement huilée si votre poêle à crêpes n'est pas anti-adhésive). Versez une petite louche de pâte dans la poêle, faites un mouvement de rotation pour répartir la pâte sur toute la surface. Posez sur le feu et quand le tour de la crêpe se colore en roux clair, il est temps de la retourner.",
      "6" => "Faites cuire les crêpes dans une poêle chaude (par précaution légèrement huilée si votre poêle à crêpes n'est pas anti-adhésive). Versez une petite louche de pâte dans la poêle, faites un mouvement de rotation pour répartir la pâte sur toute la surface. Posez sur le feu et quand le tour de la crêpe se colore en roux clair, il est temps de la retourner.",
      "7" => "Laissez cuire environ une minute de ce côté et la crêpe est prête."

    ];

    return $recipe;
  }
}
