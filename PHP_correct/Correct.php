<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulation avec PHP</title>
</head>
<body>
    <?php
    /* 0 */

    echo '<p>Hello World</p>' ;
    
    /* 1 */

    $a = 0;
    while ($a < 10) {
        $a++ ; 
        echo "<p>le nombre vaut " . $a . "</p>" ;  
       
    }

    /* 2 */

    $j = 0 ;
    while ($b < 10 ) {
        $b++ ; 

        if ($b != 3) {
        
        echo "<p>le nombre vaut " . $b . "</p>" ;  
       
        }
    }

    /* 3 */

    $c = 0 ;
    while ($c < 10 ) {
        $c++ ; 

        if ($c <= 3 && $c >= 8) {
        
        echo "<p>le nombre vaut " . $c . "</p>" ;  
       
        }
    }

    /* 4 */

    $i = 0;
    $j =0;

    while ($j < 10 && $i < 10 ) {
        $i-- ;
        $j++ ;

        if ($i = -5) {
        
            $j = $i * -1;

            echo "<p>la valeur absolue de " . $i . "vaut</p>" . $j ;  
       
        }
        if ($i = -10) {
            
            $j = $i * -1;

            echo "<p>la valeur absolue de " . $i . "vaut</p>" . $j ;
        }
    }
    ?>
</body>
</html>