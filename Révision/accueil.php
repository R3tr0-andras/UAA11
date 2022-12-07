<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="accueil.css">
    <title>Andras</title>
</head>
<body class="main-color">
    <?php
        function azerty() {
            
        
            $nbr1 = 0;
            $nbr2 = 0;
            $reste = 0;
            $reste = $nbr2;
            while ($reste != 0) {
                $reste = $nbr1 % $nbr2;
                $nbr1 = $nbr2;
                $nbr2 = $reste;
            }
        }
    ?>

    <header class="header-color">
            <div class="UwU">
                <button class="custom-btn btn"><a href="1\accueil.php">Accueil</a></button>
                <button class="custom-btn btn"><a href="2\conexion.php">Contact</a></button>
                <button class="custom-btn btn"><a rel="3\contact.php">Conexion</a></button>
            </div>
    </header>
    <main class="main-color main-border">
        <h1 class="title">Animalerie Tom & Co</h1>
    
        <p class="bold">Je veux des belles fonctions php (séparer analyse et affichage dans votre fichier)</p>
            <? return azerty()?>
       
            <p class="bold">Montrer moi comment proprement afficher du code</p>
    
    </main>
</body>
</html>