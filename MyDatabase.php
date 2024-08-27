<html>
    <body>
        <?php
        $host = '127.0.0.1:3306';
        $user = 'root';
        $password = '* 159753 *';
        $dbname = 'sakila';

        $con = mysqli_connect($host, $user, $password, $dbname);
        $result = mysqli_query($con, $query);
        
        if (mysqli_connect_errno())
            die('Echec de connexion MySQL: ' . mysqli_connect_error());
            
        
        if (!$result)
            die('Échec de la requête ' . $query);
       
		
        ?>
    </body>
</html>