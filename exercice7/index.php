<?php
$isOk = false;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercice7 Part2</title>
  </head>
  <body>
    <p>
      <?php if ($isOk == false)
        echo ('C\'est pas bon !!!');
      else {
        echo ('C\'est Ok !!');
      } ?>
    </p>
  </body>
</html>
