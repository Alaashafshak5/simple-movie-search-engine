<?php
  
$query = $_GET['query'];

include 'MyDatabase.php';

if(!isset($_GET['pageIndex']))
    $pageIndex = 0;
else $pageIndex = $_GET['pageIndex'];

if (is_null($pageIndex))
    $pageIndex = 0;

$indexDebut = $pageIndex * 10;
$nbFilms = mysqli_num_rows($result);
$indexFin = $indexDebut + 9;

$indexFin = min($nbFilms - 1, $indexFin);

mysqli_data_seek($result, $indexDebut);
if (! $result)
    die('Échec de la requête ' . $query);

echo '<table border="1"><tr><td><b> TITLE</td></tr>';
for ($i = $indexDebut; $i <= $indexFin; $i ++) {
    $line = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // echo "<tr><td><a href=Pagination.php?actorID=" . $line['actor_id'] . ">";
    echo '<tr><td>' . $line['title'] . '</td></tr>';
}

echo "</table><br>";
$nbPages = (int) ($nbFilms / 10);
if ($nbFilms % 10 != 0)
    $nbPages ++;
echo '<br>Pages: ';
for ($i = 0; $i < $nbPages; $i ++) {
    echo '<a href="Pagination.php?query='.$query.'&pageIndex='. $i .'">'.($i+1).'</a> ';
}

// Libération des résultats
mysqli_free_result($result);
// Fermeture de la connexion
mysqli_close($con);
?>

