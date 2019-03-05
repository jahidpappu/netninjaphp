
<?php 

    if(isset($_GET['submit'])){
        echo $_GET['email'];
        echo $_GET['title'];
        echo $_GET['Ingredients'];
    }

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="GET">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Your Title:</label>
        <input type="text" name="title">
        <label>Ingredients(comma separated):</label>
        <input type="text" name="Ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>


</html>