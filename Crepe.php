<?php

class Crepe
{
  private int $sugar;  // Qantity "gr"
  private int $flour;  // Qantity "gr"

  public function __contruct(int $sugar, int $flour){
    $this->setSugar($sugar);
    $this->getSugar();
    $this->setFlour($flour);
    $this->getFlour();
  }

  private function getSugar(){
    return $this->sugar;
  }

  private function setSugar($sugar){
    $this->sugar = $sugar;
  }

  private function getFlour(){
    return $this->flour;
  }

  private function setFlour($flour){
    $this->flour = $flour;
  }

  public function displayRecipe(){
    $recipe = [
      "1" => "Mélanger le sucre et la farine",
      "2" => "Faire des crêpes"
    ];

    return $recipe;
  }
}
