<?php

    // check if any has been sent/set via the GET/POST method

    // if(isset($_GET['submit'])){       // Check if the form has been submitted by checking if the 'submit' button was clicked 
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    if(isset($_POST['submit'])){       
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['ingredients'];
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