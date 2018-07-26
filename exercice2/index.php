<?php
$isEasy = true;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice2 Part2</title>
  </head>
  <body>
    <p>
      <?php if ($isEasy == true) {
        echo ('C\'est facile !'.'<br>');
      }
      else {
        echo ('C\'est difficile !'.'<br>');
      } ?>
    </p>
  </body>
</html>
