
<?php 
//connect to database

$conn = mysqli_connect('localhost','jahid','host123','ninja_pizza');

//check connection
if(!$conn){
    echo 'connection error: ' . mysqli_connect_error() ;
}

//white query for all pizzas
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<?php include('templates/footer.php'); ?>


    <h1>hello</h1>
</html>