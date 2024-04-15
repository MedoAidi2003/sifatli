<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter du texte</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Ajouter du texte</h1>
        <form action="ajouter_texte.php" method="post">
            <label for="texte">Entrez votre texte :</label><br>
            <textarea id="texte" name="texte" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
        <h2>Textes ajoutés :</h2>
        <?php include 'afficher_texte.php'; ?>
    </div>
</body>
</html>
