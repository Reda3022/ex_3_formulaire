<?php


//verifier si les champs saisie est vide
var_dump(empty($_POST));

//redirige vers une autre page si $les champs de saisie sont vide
if(empty($_POST)){
    //header("location: https://jura.ch"); //redirige vers une page externe
    header("location: ./demo1.php"); //redirige vers une page du site
    exit();
}

// rediriger vers une autre page
echo "avant la redirection";
// ici on met que la page sera rediger dans 5 seconde
header('refresh:5; url=https://jura.ch'); //redirection tempori

echo "<p> aprés la redirection</p>";

?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>ex03.0</title>
</head>
<body>

<form action="" method="post">

    <ul>
        <li>
            <label for="courriel">Courriel*</label>
            <input type="text" name="courriel" required="obligatoire" >
        </li>
        <li>
            <label for="">Mot de passe</label>
            <input type="password" name="password" required="obligatoire">
        </li>
        <li>
            <label for="">Se connecter</label>
            <input type="submit" name="connect">
        </li>



    </ul>


</form>



</body>
</html>
