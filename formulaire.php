
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <a href="./index.html">Revenir à la page d'accueil</a>
    <form action="./result.php" method="post">
        <div class="block1 block padding">
            <div class="element">
                <p>Homme</p>
                <input type="radio" name="sexe" value="homme">
                <p>Femme</p>
                <input type="radio" name="sexe" value="femme">
            </div>
            <div class="element">
                <p>Poids :  </p>
                <input type="text" name="poids">
                <p>kg</p>
            </div>
            <div class="element">
                <p>Taille :  </p>
                <input type="text" name="taille">
                <p>cm</p>
            </div>
            <div class="element">
                <p>Age :  </p>
                <input type="text" name="age">
                <p>ans</p>
            </div>
        </div>

        <div class="center block padding">
            <div class="titleBlock">
                <h3>Activité Physique</h3>
            </div>
            <div class="blockRow">
                <p>Aucune</p>
                <input type="radio" name="activite" value="1.2">
                <p>Faible</p>
                <input type="radio" name="activite" value="1.4">
                <p>Moyenne</p>
                <input type="radio" name="activite" value="1.6">
                <p>Forte</p>
                <input type="radio" name="activite" value="1.8">
                <p>Intensive</p>
                <input type="radio" name="activite" value="2">
            </div>
        </div>

        <div class="block3 center block padding">
            <div class="titleBlock">
                <h3>Ton objectif</h3>
            </div>
            <div class="blockRow">
                <p>Perdre du poids</p>
                <input type="radio" name="objectif" value="perdre">
                <p>Prendre du poids</p>
                <input type="radio" name="objectif" value="prendre">
            </div>
            
        </div>
        <div class="block4 center block padding">
            <div class="titleBlock">
                <h3>Difficulté</h3>
            </div>
            <div class="blockRow">
              <p>Faible</p>
                <input type="radio" name="intensite" value="faible">
                <p>Forte</p>
                <input type="radio" name="intensite" value="forte">  
            </div>
            
        </div>
        <div class="center padding">
            <button type="submit" class="submit">Calculer</button>
        </div>
</form>
</body>
</html>
