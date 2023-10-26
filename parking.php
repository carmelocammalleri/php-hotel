<?php

  $value = $_POST['contact'];

  var_dump($value)
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    bella fra
  </h1>
  <?php
    if($value === 'true'){
      echo 'ok';
    } else {
      echo 'non va bene';
    }

  ?>
    
    </table>
</body>
</html>