<?php
require_once('../backend/bdd/bdd.php');

$bdd = Bdd::connexion();
$term = isset($_GET['query']) ? $_GET['query'] : '';

$sql = "SELECT * FROM posts WHERE title ILIKE :term OR content ILIKE :term ORDER BY date_create DESC";
$stmt = $bdd->prepare($sql);
$searchTerm = "%$term%";
$stmt->bindParam(':term', $searchTerm, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='post'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        echo "<p>" . htmlspecialchars(substr($row['content'], 0, 200)) . "...</p>";
        echo "<p>Date: " . htmlspecialchars($row['date_create']) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>Aucun résultat trouvé.</p>";
}
?>
