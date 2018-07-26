<?php
$age = 22;
$genre = 'homme';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice3 Part2</title>
  </head>
  <body>
    <p>
      <?php
      if ($age >= 18 && $genre == 'homme') {
        echo ('Vous êtes un homme et vous êtes majeur');
      }
      elseif ($age < 18 && $genre == 'homme') {
        echo ('Vous êtes un homme et vous êtes mineur');
      }
      elseif ($age < 18 && $genre == 'femme') {
        echo ('Vous êtes une femme et vous êtes mineure');
      }
      elseif ($age >= 18 && $genre == 'femme') {
        echo ('Vous êtes une femme et vous êtes majeure');
      } ?>
    </p>
  </body>
</html>
