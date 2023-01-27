<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <?php
    //vérifie si le formulaire est soumis
    if (isset($_GET["submit"]))
    {
        //récupérer les valeurs et les stocké dans des variable
        //grace a $_get et le name de notre input
        $nom = $_GET["nom"];
        $prenom = $_GET["prenom"];
        $mail = $_GET["email"];
        $tel = $_GET["tel"];
        $adresse = $_GET["adresse"];
        //stocké toute nos variable dans un tableaux
        $valuAll = [$nom,$prenom,$mail,$tel,$adresse];
        // si un champs du tableaux est vide alors il affiche le message d'érreurs
        if (empty($valuAll[0]) || empty($valuAll[1]) || empty($valuAll[2]) || empty($valuAll[3]) || empty($valuAll[4]))
        {
            echo "vous n'avais pas compléter tout les champs";
        }
        else {
        //afficher le résulta
        // echo " votre nom : $nom \n";
        // echo " votre prenom : $prenom \n";
        // echo " votre Mail : $mail \n";
        // echo " votre numéro : $tel \n";
        // echo " votre adresse : $adresse \n";
        echo "  <table class=\"table table-dark\">
                    <tbody>
                        <tr>
                            <td>votres Nom<td>
                            <td>$nom</td>
                        </tr>
                        <tr>
                            <td>votres Prenom<td>
                            <td>$prenom</td>
                        </tr>
                        <tr>
                            <td>votres Mail<td>
                            <td>$mail</td>
                        </tr>
                        <tr>
                            <td>votres Numéro<td>
                            <td>$tel</td>
                        </tr>
                        <tr>
                            <td>votres Adresse<td>
                            <td>$adresse</td>
                        </tr>
                    </tbody>
                </table>";
            }
    };
    // if (isset($_GET["cancel"]))
    // {
                        
    // } 
    ?>
</body>
</html>    