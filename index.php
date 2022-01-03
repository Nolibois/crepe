<?php
 require_once "Crepe.php";

 $newCrepe = new Crepe(2, 250, 4, 50, 1, 50, ["nutella", "Sucre glace", "Noix de coco", "vermicelle de sucre"]);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./dist/output.css">
  <title>Faire des crêpes</title>
</head>
<body class="bg-amber-100">
  <div class="mx-auto my-8 p-8 w-3/4 rounded-lg bg-white shadow-md">

    <div class="ingredients m-8">
      <h1 class="text-3xl mb-4 mx-auto w-max font-bold">Recette des meilleures crêpes</h1>
      <hr>

      <h2 class="text-xl mb-4 font-600">Liste des ingrédients:</h2>
      <ul>
      <?php
      foreach ($newCrepe->displayIngredients() as $value){
        ?>
        <li><?= $value; ?></li>
        <?php
      }
      ?>
      </ul>
    </div>

    <div class="steps m-8">
      <h2 class="text-xl mb-4 font-600">Etapes:</h2>
      <ol class="list-decimal ml-6">
      <?php
      foreach ($newCrepe->displayRecipe() as $value){
        ?>
        <li><?= $value; ?></li>
        <?php
      }
      ?>
      </ol>
    </div>

  </div>
  
  <script src="script.js"></script>
</body>
</html>