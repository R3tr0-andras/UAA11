<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body class="main-color">
    <header class="header-color">
        <div class="UwU">
            <button class="custom-btn btn"><a href="1\accueil.php">Accueil</a></button>
            <button class="custom-btn btn"><a href="2\conexion.php">Contact</a></button>
            <button class="custom-btn btn"><a rel="3\contact.php">Conexion</a></button>
        </div>
    </header>
    <main class="main-color main-border">
        <h1 class="title">Animalerie Tom&Co</h1>
        <form action="">
            <fieldset><legend class="h">Formulaire de Contact</legend>
                <div class="container">
                    <label for="" class="di">Nom</label>  <input type="text" required class="border-labe">
                </div>
                <div class="container">
                    <label for="" class="di">Prénom</label>  <input type="text" required class="border-labe">
                </div>
                <div class="container">
                    <label for="" class="di">Email</label>  <input type="text" required pattern=".+@globex\.com" class="border-labe">
                </div>
                <div class="container">
                    <label for="" class="di">Numéro de téléphone</label>  <input type="text" required class="border-labe">
                </div>
                <div class="container">
                    <label for="" class="di">Votre message</label> <TEXTAREA></TEXTAREA>
                </div>
                <div class="container">
                    <button class="btn-2">Soumettre</button>
                </div>
            </fieldset>
        </form>
    </main>
    
</body>
</html>