

<html>

<body>
<form action="">
Search Movie By Category :
<input type="text" name="catField"/>
<input type="submit" name="searchBtn2" value="Search"/>
</form>
<?php 
if(isset($_GET['searchBtn2'])){
$cat = $_GET['catField'];
$query = "SELECT * FROM film join film_category on film_category.film_id=film.film_id 
join category on category.category_id=film_category.category_id where category.name='$cat' ;";

include 'MyDatabase.php';

echo '<a href="Pagination.php?query='.$query.'"><b> PAGINATION </a><br>';
echo '<table border="1">';
echo '<tr><td><b> CATEGORY </td><td><b> TITLE </td><td><b> DESCRIPTION </td></tr>';
while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo '<tr><td>'.$line['name'].'</td><td>' . $line['title'] .'</td><td>'.$line['description'].'</td></tr>';
   
}

mysqli_free_result($result);
mysqli_close($con);

}
?>
</body>
</html>