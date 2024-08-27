<?php
include 'Metier.php';
include 'InitSession.php';

$t = $_GET['title'];
$desc = $_GET['description'];
$rate = $_GET['rating'];

$movie = new Movie($t, $desc, $rate);
if (in_array($movie, $wish->array)) {
    echo '<b>Already added!';
} else {
    echo "<b>Successfully added!";

    $wish->addToWishlist($movie);
}
echo '<table border="1">';
echo '<tr><td><b> WISHLIST </td></tr>';
foreach ($wish->array as $movie)
    echo '<tr><td>' . $movie->title . '</td></tr>';

echo '</table>';


?>