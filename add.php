
<?php 
$title = $email = $ingredients = '';
$errors = array('email'=>'', 'title'=>'','ingredients'=>'');


    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['Ingredients'];
    // }

    if(isset($_POST['submit'])){
       // echo htmlspecialchars($_POST['email']);
       // echo htmlspecailchars($_POST['title']);
       // echo htmlspecialchars($_POST['ingredients']);

       //check email
      if(empty($_POST['email'])){
        echo 'An email is required <br/>';
      }else{
          echo htmlspecialchars($_POST['email']);
      }
      //check email
      if(empty($_POST['title'])){
        echo 'An title is required <br/>';
      }else{
          echo htmlspecialchars($_POST['title']);
      }
      //check ingredients
      if(empty($_POST['ingredients'])){
        echo 'An ingredients is required <br/>';
      }else{
          echo htmlspecialchars($_POST['ingredients']);
      }

       
    }

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email" value = "<?php echo htmlspecialchars($email); ?>" >
        <div class="red-text"><?php $errors['email']  ?></div>
        <label>Your Title:</label>
        <input type="text" name="title" value = "<?php echo htmlspecialchars($title); ?>">
        <div class="red-text"><?php $errors['title']  ?></div>
        <label>Ingredients(comma separated):</label>
        <input type="text" name="ingredients" value = "<?php echo htmlspecialchars($ingredients); ?>">
        <div class="red-text"><?php $errors['ingredients']  ?></div>
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php'); ?>


</html>