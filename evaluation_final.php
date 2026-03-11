<?php



$annuaire = ["Maxime"];
$annuaire[] = "Jeanne";
$annuaire[] = "Pierre";

$motDePasseAdmin = "Tyroluim2026";
$ageMinimum = 18;

function afficherBadge($nom, $statut) {
    echo "badge généré" . $nom. "statut:" . $statut. "<br>";
}

if (isset($_POST["prenom"])) {
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $code = $_POST['code'];
    $statut = $_POST['statut'];
    
    if ($age >= $ageMinimum && $code == $motDePasseAdmin) {
        $annuaire[] = "Ibrahima";
        echo "Bienvenue, " . $prenom. "ajouter avec succés <br>";
    
        } elseif ($age < $ageMinimum || $statut == "stagiaire") {
        echo "Erreur: accés non autorisé pour ce profil. <br>";
    
        } else {
        echo"Erreur: Mot de passe administrateur incorrect pour";
    
    }
}
?>



<?php
foreach ($annuaire as $nomEmploye) {
    afficherBadge($nomEmploye, "employé");
}
for ($i=0; $i < 3; $i++) { 
    echo "Emplacement vide disponible pour " . $annuaire[$i] . "<br>";
}
$chargement = 0;
while ($chargement < 2) {
    echo "Synchronisation de la base de données pour" . $chargement. "<br>";
    $chargement++;
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Annuaire de l'entreprise</h3>
    <form action="evaluation_final.php" method="post">
        <input type="text" name="prenom" placeholder="prenom">
        <input type="password" name="code" placeholder="code">
        <input type="number" name="age" placeholder="Âge">
        <select name="statut">
            <option value="stagiaire">Stagiaire</option>
            <option value="employe">Employé</option>
        </select>
        <button type="submit">Ajouter au répertoire</button>
    </form>
</body>
</html>