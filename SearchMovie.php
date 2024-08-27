<html>
   
    <body>
     <form action="">
      Search Movie By Title: 
     <input type="text" name="titleField"/>
     <input type="submit" name="searchBtn" value="Search"/>
     </form>

<?php 

    echo '<a href="searchByCat.php"><b> Search By Category </a><br><br>';
    echo '<a href="saisir.php?display=true"><b> WISHLIST</a><br><br>';
 
    if (isset($_GET['searchBtn'])) {
    $MTitle = $_GET['titleField'];   

    $query = "SELECT * FROM film where title like '$MTitle%';" ;      

    include 'MyDatabase.php';
 
    echo '<a href="Pagination.php?query='.$query.'"><b> PAGINATION </a><br>';
    echo '<table border="1">';
    echo '<tr><td><b> TITLE </td><td><b> DESCRIPTION </td><td><b> RATING </td></tr>';
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo '<tr><td><a href="AddToWishlist.php?title='.$line['title'].'&description='.$line['description'].'&rating='.$line['rating'].'"> '.$line['title'].' </a></td><td>' . $line['description'] .'</td><td>'.$line['rating'].'</td></tr>';
        
     
    }
    echo "</table>";

    mysqli_free_result($result);
    mysqli_close($con);
}
?>
</body>
</html>
