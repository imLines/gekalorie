<?php
@$sexe = $_POST['sexe'];
@$poids = $_POST['poids'];
@$taille = $_POST['taille'];
@$age = $_POST['age'];
@$activite = $_POST['activite'];
@$objectif = $_POST['objectif'];
@$intensite = $_POST['intensite'];
@$bmr;
@$validate;


if($sexe == null || $poids == null || $taille == null || $age == null || $activite == null || $objectif == null || $intensite == null){
    $err = "<div style='background-color: red; text-align:center; color:white; '>
                <p>Vous avez du oublier un/des champs. Cette erreur sera supprimé à la V 1.1</p>
                <a href='./formulaire.php' style='color:white;'>Revenir au formulaire</a>
            </div>";
        echo $err;
        exit();
}







if($sexe == "homme"){
    $bmr = (10 * $poids) + (6.25 * $taille) - (5 * $age) + 5;
}else if($sexe == "femme"){
    $bmr = (10 * $poids) + (6.25 * $taille) - (5 * $age) -161;
}

    $maintien = $bmr * $activite;
    
    if($objectif == 'perdre'){
        if($intensite == 'faible'){
            $step1 = ($maintien * 10);
            $step2 =  $step1 / 100;
            $calories = $maintien - $step2;
        }else if($intensite == 'forte'){
            $step1 = ($maintien * 20);
            $step2 =  $step1 / 100;
            $calories = $maintien - $step2;
        }
    }
    if($objectif == 'prendre'){
        if($intensite == 'faible'){
            $step1 = ($maintien * 10);
            $step2 =  $step1 / 100;
            $calories = $maintien + $step2;
        }else if($_intensite == 'forte'){
            $step1 = ($maintien * 20);
            $step2 =  $step1 / 100;
            $calories = $maintien + $step2;
        }
    }   

    $proteinG = 2 * $poids;
    $caloriesProtein = $proteinG * 4;
    
    
    $caloriesLipidesStep1 = $calories * 30; 
    $caloriesLipides = $caloriesLipidesStep1 / 100;
    $lipidesG = $caloriesLipides / 9; 
    
    $caloriesGlucides = $calories - $caloriesLipides - $caloriesProtein;
    $glucidesG = $caloriesGlucides / 4;
    
    

    if($glucidesG && $proteinG && $lipidesG){
        $validate = 1;
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css" defer>
    <title>Document</title>
</head>
<body>
    <div class="center block">
        <p>Votre Métabolisme à besoin de <?php echo $bmr ?> calories pour fonctionner.</p>
        <p>Votre Métabolisme à besoin de <?php echo $maintien ?> calories pour maintenir votre poids en fonction de votre activitée.</p>
        <p>Pour votre objectif, vous devriez manger <?php echo $calories ?> calories pour y parvenir</p>
    </div>
    <div class="center block">
        <p>Lipides : Vous devrez consommer <?php echo $caloriesProtein ?> calories soit <?php echo $proteinG ?> grammes</p>
        <p>Lipides : Vous devrez consommer <?php echo $caloriesLipides ?> calories soit <?php echo $lipidesG ?> grammes</p>
        <p>Glucides : Vous devrez consommer <?php echo $caloriesGlucides ?> calories soit <?php echo $glucidesG ?> grammes</p>
    </div>
    
    <?php
        if($validate == 1){
            $thanks = " <div class='center'>
                            <h2>Merci d'avoir utilisé Gekalorie</h2>
                            <div class='logo'>
                    
                            </div>
                            <p>N'hésite pas à partager</p>
                        </div>";
                        echo $thanks;
        }
    ?>

<footer class="center">
    <p>&copy; 2022 - ImLines alias Toon's ||  Avec ❤️</p>
</footer>

</body>
</html>