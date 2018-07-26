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
      if ($age <1 && $genre == 'homme' && $genre == 'femme') {
        echo('Ahahaha très drôle, vous n\'êtes pas encore né(e)');
        // code...
      }
      elseif ($age >=130 && $genre == 'homme' && $genre == 'femme') {
        echo('Comment peut-on se connecter à partir d\'une tombe?');
        // code...
      }
      elseif ($age >=110 && $genre == 'homme' && $genre == 'femme') {
        echo('Vous ne pouvez pas être encore en vie !! Vraiment tenace');
        // code...
      }
      elseif ($age >= 90 && $genre == 'homme' && $genre == 'femme') {
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
      else {
        echo ('Un ovni?');
      }
      ?>
    </p>
  </body>
</html>
