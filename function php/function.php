<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    calcul de factorielle
<?php
  function factorielle($n){ 
    $f = 1; 
    for ($i = 1; $i <= $n; $i++){ 
      $f = $f * $i; 
    } 
    return $f; 
  } 
    
  $n = 7; 
  $f = fact($n); 
  echo "La factorielle de $n est $f"; 
?>
Je me suis tromper celui ci est un calculateur de mots
<?php
  $str = "bienvenue à litn";
  echo str_word_count($str); 
?>
Le calcul de lettre
<?php
  $st = "hello mister, and welcom to itn UwU.";
  echo strlen($st); 
?>

</body>
</html>