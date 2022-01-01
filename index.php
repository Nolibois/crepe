<?php
 require_once "Crepe.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faire des crêpes</title>
</head>
<body>
  <h1>Recette des meilleures crêpes</h1>
  <?php
  $newCrepe = new Crepe(2, 250, 4, 50, 1, 50);

  ?>
  <h2>Liste des ingrédients:</h2>
  <ul>
  <?php
  foreach ($newCrepe->displayIngredients() as $value){
    ?>
    <li><?= $value; ?></li>
    <?php
  }
  ?>
  </ul>

  <h2>Etapes:</h2>
  <ul>
  <?php
  foreach ($newCrepe->displayRecipe() as $value){
    ?>
    <li><?= $value; ?></li>
    <?php
  }
  ?>
  </ul>

</body>
</html>