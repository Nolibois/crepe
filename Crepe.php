<?php

class Crepe
{
  private $sugar;
  private $flour;

  function __contruct($sugar, $flour){
    $this->getSugar();
    $this->getFlour();
  }

  function getSugar(){
    return $this->sugar;
  }

  function setSugar( $ingredient1 ){
    $this->sugar = $ingredient1;
  }

  function getflour(){
    return $this->flour;
  }

  function setflour( $ingredient2 ){
    $this->flour = $ingredient2;
  }
}
