<?php

// check if any has been sent/set via the GET/POST method

// if(isset($_GET['submit'])){       // Check if the form has been submitted by checking if the 'submit' button was clicked 
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }

if(isset($_POST['submit'])){    
    
    // Use htmlspecialchars to convert special characters in the input to HTML entities
    // This prevents XSS (Cross-Site Scripting) attacks by escaping characters like <, >, &, etc.
    // For example, if the user enters "<script>", it will be displayed as "&lt;script&gt;" instead of being executed as code

    echo htmlspecialchars($_POST['email']);   
    echo htmlspecialchars($_POST['title']);
    echo htmlspecialchars($_POST['ingredients']);
}



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