<?php
$file = 'contenu.txt';

// Afficher le contenu du fichier texte avec chaque texte ajouté séparément
if(file_exists($file)) {
    $contenu = file_get_contents($file);
    $textes = explode('@@', $contenu);
    foreach($textes as $texte) {
        echo "<p>" . htmlspecialchars($texte) . "</p>";
    }
} else {
    echo "<p>Aucun contenu à afficher pour le moment.</p>";
}
?>