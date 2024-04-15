<?php
$texte = $_POST['texte'];
$file = 'contenu.txt';

if(!empty($texte)) {
    // Ajouter le texte au fichier avec "@@" à la fin
    file_put_contents($file, $texte . '@@' . PHP_EOL, FILE_APPEND);
}
header('Location: index.php'); // Redirection vers la page d'accueil
exit();
?>