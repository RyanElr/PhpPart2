<?php
$age = 22;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice6 Part2</title>
  </head>
  <body>
    <p>
    <?php
    if ($age >= 18)
      echo ('Vous êtes majeur !');
    else {
      echo ('Vous êtes mineur !');
    } ?>
  </p>
  </body>
</html>
