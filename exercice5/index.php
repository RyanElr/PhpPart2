<?php
$gender = 'homme';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice5 Part2</title>
  </head>
  <body>
    <p>
      <?php
      if ($gender =='homme' )
        echo ('C\'est un développeur !!!');
      else {
        echo ('C\'est une développeuse !!!');
      }
       ?>
    </p>
  </body>
</html>
