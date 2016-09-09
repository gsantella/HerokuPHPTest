<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <h1>Data from Heroku Data Clip in JSON!</h1>
    <?php
      $url  = "https://dataclips.heroku.com/elbicfdblodrgkgwyompoodpdxae-JustFirstNames.json";
      $json = file_get_contents($url);
      $data = json_decode($json, TRUE);
      var_export $data;
    ?>
  </body>
</html>
