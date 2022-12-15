<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>Inscription</title>
</head>
<body>
<header>
    <ul class="flex space-evenly">
        <li class="menu"><a href="index.html">Home</a></li>
        <li class="menu"><a href="profil.html">Page profil</a></li>
        <li class="imageMenu"><a href="index.html"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
        <li class="imageMenu"><a href="profil.html"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
        <li class="menu"><a href="connection.php">connexion</a></li>
        <li class="menu"><a href="inscription.php">inscription</a></li>
        <li class="imageMenu"><a href="connection.php"><img src="Images\connection.png" alt="icon-connect" class="img"></a></li>
        <li class="imageMenu"><a href="inscription.php"><img src="Images\inscription.png" alt="icon-inscription" class="img"></a></li>
    </ul>
</header>
<h1>Formulaire d'inscription</h1>
<main>
    <div id="form-outer">
		<form id="survey-form">
			<div class="rowTab"> 
				<div class="labels">
					<label id="name-label" for="name">Ton nom :</label>
				</div>
				<div class="rightTab">
					<input  type="text" name="name" id="name" class="input-field" required placeholder="Nom">
				</div>
			</div>
            <div class="rowTab"> 
				<div class="labels">
					<label id="name-label" for="name">Ton prénom :</label>
				</div>
				<div class="rightTab">
					<input  type="text" name="name" id="name" class="input-field" required placeholder="Prénom">
				</div>
			</div>
            <div class="rowTab">
				<div class="labels">
					<label id="number-label" for="age">Ton âge :</label>
				</div>
				<div class="rightTab">
					<input type="number" name="age" id="number" min="0" max="4000000" required class="input-field" placeholder="Ton âge">
				</div>
			</div>
            <div class="rowTab">
            <div class="labels">
                <label id="number-label" for="age">T'a date de naissance :</label>
            </div>
            <div class="rightTab">
                <input type="text" name="age" id="datedenaissance" class="input-field" required placeholder="JJ/MM/AAAA">
            </div>
        </div>
			<div class="rowTab">
				<div class="labels">
                <label id="email-label" for="email">Ton Email :</label>
				</div>
				<div class="rightTab">
					<input type="email" name="email" id="email" class="input-field" required placeholder="Ton Email">
				</div>
			</div>
            <div class="rowTab">
            <div class="labels">
                <label for="mdp">T'on mot de passe :</label>
            </div>
            <div class="rightTab">
                <input type="password" name="age" id="datedenaissance" class="input-field" required >
            </div>
        </div>
        <div class="ins">
			<button id="submit" type="submit">inscription</button>
        </div>
        </form>
	</div>
</main>
<footer>
    <div class="flex space-between align-item-center">
        <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
        <div>
            <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
            <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
            <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
        </div>
    </div>
</footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>