<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $paragrafolenght = strlen ($paragrafo);
      echo 'lunghezza paragrafo = ' . $paragrafolenght;
      echo "<br>";
      echo $paragrafo;
      $badword = $_GET['badword'];
      $newword = '***';
      echo "<br>";
      $nuovoparagrafo = str_replace($badword, $newword, $paragrafo);
      echo $nuovoparagrafo;

    ?>

  </body>
</html>
