<?php

// Enable error reporting for all errors, warnings, and notices
error_reporting(E_ALL);
ini_set('display_errors', 1);


// check if submit is clicked or set.
if(isset($_POST['submit'])){    

    // check email
    if(empty($_POST['email'])){
        echo 'An email is required!';  
    }else{
        $email = $_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email must be a valid email address.";
        }
    }

    // check title
    if(empty($_POST['title'])){
        echo 'A title is required!';  
    }else{
        $title = $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
            echo "Title must be letters and space only.";
        }
    }

    // check ingredients
    if(empty($_POST['ingredients'])){
        echo 'At least one ingredient is required!';  
    }else{
        $ingredients = $_POST['ingredients'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
            echo "Ingredients must be a comma separated list..";
        }
    }
}  // end of post check



?>


<!DOCTYPE html>
<html>
<?php include "templates/header.php"; ?>

<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form class="white" action="add.php" method="POST">
        <label>Your Email:</label>
        <input type="text" name="email">
        <label>Pizza Title</label>
        <input type="text" name="title">
        <label>Ingredients (coma separated):</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>

<?php include "templates/footer.php"; ?>
    

</html>