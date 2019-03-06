
<?php 
$errors = array('email'=>'', 'title'=>'','Ingredients'=>'');


    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['Ingredients'];
    // }

    if(isset($_POST['submit'])){
       // echo htmlspecialchars($_POST['email']);
       // echo htmlspecailchars($_POST['title']);
       // echo htmlspecialchars($_POST['Ingredients']);

       //check email
       if(empty($_POST['email'])){
            echo 'An email is required <br/>';
       }else{
           $email = $_POST['email'];
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email must be a valid email address';
          }
       }

        //check title
        if(empty($_POST['title'])){
            echo 'An title is required <br/>';
       }else{
           $title = $_POST['title'];
           if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            echo 'Title must be letters and spaces only';
          }
       }

    
        //check Ingredients
        if(empty($_POST['Ingredients'])){
            echo 'An Ingredients is required <br/>';
       }else{
           $Ingredients = $_POST['Ingredients'];
           if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $Ingredients)){
            echo 'Ingredients must be letters and spaces only';
          }
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