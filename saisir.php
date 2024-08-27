<?php
include 'Metier.php';
include 'InitSession.php';
?>

<html>
    <body>

        <?php
        if (isset($_GET['display']))
            $UC = "DISPLAYWISH";
	
        if ($UC == "DISPLAYWISH") {
            if(!empty($wish->array)){
                echo '<table border="1">';
                echo '<tr><td><b> WISHLIST </td></tr>';
                foreach ($wish->array as $movie){
                    echo '<tr><td>'.$movie->title.'</td></tr>';}
            }
            else echo '<b>Wishlist is empty!';
        }
        

        ?>
    </body>
</html>

