<?php
$age = 0;
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
      if ($age <1) {
        echo('Ahahaha très drôle, vous n\'êtes pas encore né(e)');
        // code...
      }
      elseif ($age >=130) {
        echo('Comment peut-on se connecter à partir d\'une tombe?');
        // code...
      }
      elseif ($age >=110) {
        echo('Vous ne pouvez pas être encore en vie !! Vraiment tenace');
        // code...
      }

      elseif ($age >= 90) {
        echo('Vraiment capable de se servir d\'un ordinateur?');
        // code...
      }
      elseif ($age >= 18 && $genre == 'homme') {
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
      }
      ?>
    </p>
  </body>
</html>
