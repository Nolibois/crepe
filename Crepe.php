<?php

class Crepe
{
  private int $sugar;  // Qantity "Number of tablespoon"
  private int $flour;  // Qantity "gr"
  private int $eggs;  // Qantity "Piece"
  private int $milk;  // Qantity "cl"
  private float $salt;  // Qantity "Pinch"
  private int $butter;  // Qantity "gr"

  public function __construct(int $sugar, int $flour, int $eggs, int $milk, float $salt, int $butter){
    $this->setSugar($sugar);
    $this->getSugar();
    $this->setFlour($flour);
    $this->getFlour();
    $this->setEggs($eggs);
    $this->getEggs();
    $this->setMilk($milk);
    $this->getMilk();
    $this->setSalt($salt);
    $this->getSalt();
    $this->setButter($butter);
    $this->getButter();
  }

  /**
   * Return the weight of sugar: int
   */
  private function getSugar(): int
  {
    return $this->sugar;
  }

   /**
   * Update the weight of sugar :void
   */
  private function setSugar($sugar): void
  {
    $this->sugar = $sugar;
  }

   /**
   * Return the weight of flour :int
   */
  private function getFlour():int
  {
    return $this->flour;
  }

  /**
   * Update the weight of flour :void
   */
  private function setFlour($flour):void
  {
    $this->flour = $flour;
  }

  /**
   * Return the number of eggs :int
   */
  private function getEggs():int
  {
    return $this->eggs;
  }

  /**
   * Update the numbur of egss :void
   */
  private function setEggs($egss):void
  {
    $this->eggs = $egss;
  }

  /**
   * Return the quantity of milk :int
   */
  private function getMilk(): int
  {
    return $this->milk;
  }

  /**
   * Update the quantity of milk :void
   */
  private function setMilk($milk): void
  {
    $this->milk = $milk;
  }

  /**
   * Return the weight of salt :float
   */
  private function getSalt(): float
  {
    return $this->salt;
  }

  /**
   * Update the weight of salt :void
   */
  private function setSalt($salt): void
  {
    $this->salt = $salt;
  }

  /**
   * Return the weight of butter :int
   */
  private function getButter():int
  {
    return $this->butter;
  }

  /**
   * Update the weight of butter :void
   */
  private function setButter($butter):void
  {
    $this->butter = $butter;
  }


  /**
   * Retrun list of ingredients : array
   */
  public function displayIngredients(): array
  {
    $ingredients = [
      "1" =>"Sucre: $this->sugar gr",
     "2" => "Farinee: $this->flour gr",
      "3" => "Oeufs $this->eggs",
      "4" => "Lait: $this->milk cl",
      "5" => " Sel: $this->salt pinc??e(s)",
      "6" => "Beurre fondu: $this->butter gr"
    ];

    return $ingredients;
  }

  /**
   * Return a list of instructions
   */
  public function displayRecipe():array
  {
    $recipe = [
      "1" => "Mettez la farine dans un saladier avec le sel et le sucre.",
      "2" => "Faites un puits au milieu et versez-y les ??ufs.",
      "3" => "Commencez ?? m??langer doucement. Quand le m??lange devient ??pais, ajoutez le lait froid petit ?? petit.",
      "4" => "Quand tout le lait est m??lang??, la p??te doit ??tre assez fluide. Si elle vous para??t trop ??paisse, rajoutez un peu de lait. Ajoutez ensuite le beurre fondu refroidi, m??langez bien.",
      "5" => "Faites cuire les cr??pes dans une po??le chaude (par pr??caution l??g??rement huil??e si votre po??le ?? cr??pes n'est pas anti-adh??sive). Versez une petite louche de p??te dans la po??le, faites un mouvement de rotation pour r??partir la p??te sur toute la surface. Posez sur le feu et quand le tour de la cr??pe se colore en roux clair, il est temps de la retourner.",
      "6" => "Faites cuire les cr??pes dans une po??le chaude (par pr??caution l??g??rement huil??e si votre po??le ?? cr??pes n'est pas anti-adh??sive). Versez une petite louche de p??te dans la po??le, faites un mouvement de rotation pour r??partir la p??te sur toute la surface. Posez sur le feu et quand le tour de la cr??pe se colore en roux clair, il est temps de la retourner.",
      "7" => "Laissez cuire environ une minute de ce c??t?? et la cr??pe est pr??te."

    ];

    return $recipe;
  }
}
