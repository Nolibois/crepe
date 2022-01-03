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
      // $this->hydrate($listIngredients);
      $this->set($listIngredients);
    }
  }

/*   private function hydrate(array $listIngredients){
    foreach ($listIngredients as $key => $value){
      $setter = 'set' .ucfirst($key);
      $this->$setter($value);
    }
  } */

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
   * Return the weight of sugar: int
   */
/*   public function getSugar(): int
  {
    return $this->sugar;
  } */

   /**
   * Update the weight of sugar :void
   */
/*   public function setSugar($sugar): void
  {
    $this->sugar = $sugar;
  } */

   /**
   * Return the weight of flour :int
   */
 /*  public function getFlour():int
  {
    return $this->flour;
  } */

  /**
   * Update the weight of flour :void
   */
/*   public function setFlour($flour):void
  {
    $this->flour = $flour;
  } */

  /**
   * Return the number of eggs :int
   */
/*   public function getEggs():int
  {
    return $this->eggs;
  } */

  /**
   * Update the numbur of egss :void
   */
/*   public function setEggs($egss):void
  {
    $this->eggs = $egss;
  } */

  /**
   * Return the quantity of milk :int
   */
/*   public function getMilk(): int
  {
    return $this->milk;
  } */

  /**
   * Update the quantity of milk :void
   */
/*   private function setMilk($milk): void
  {
    $this->milk = $milk;
  } */

  /**
   * Return the weight of salt :float
   */
/*   public function getSalt(): float
  {
    return $this->salt;
  } */

  /**
   * Update the weight of salt :void
   */
/*   public function setSalt($salt): void
  {
    $this->salt = $salt;
  } */

  /**
   * Return the weight of butter :int
   */
/*   public function getButter():int
  {
    return $this->butter;
  } */

  /**
   * Update the weight of butter :void
   */
/*   public function setButter($butter):void
  {
    $this->butter = $butter;
  } */

   /**
   * Return an list additional ingredients :array
   */
/*   public function getTopping():array
  {
    return $this->topping;
  } */

  /**
   * Update an list additional ingredients :void
   */
/*   public function setTopping($topping):void
  {
    $this->topping = $topping;
  } */

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
