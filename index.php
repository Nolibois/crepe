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
  <?php
  $newCrepe = new Crepe(100, 250);
  var_dump($newCrepe);

  ?>
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