<?php


// check if submit is clicked or set.
if(isset($_POST['submit'])){    

    // check email
    if(empty($_POST['email'])){
        echo 'An email is required!';  
    }else{
        echo htmlspecialchars($_POST['email']);
    }

    // check title
    if(empty($_POST['title'])){
        echo 'A title is required!';  
    }else{
        echo htmlspecialchars($_POST['title']);
    }

    // check ingredients
    if(empty($_POST['ingredients'])){
        echo 'At least one ingredient is required!';  
    }else{
        echo htmlspecialchars($_POST['ingredients']);
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