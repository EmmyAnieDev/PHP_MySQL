<?php

 // Sessions

// Check if the form was submitted (the 'submit' button was pressed)
 if(isset($_POST['submit'])){

    // Start a new session or resume the existing session
    session_start();

    // Store the value from the 'name' input field in the session with the key 'name'
    $_SESSION['name'] = $_POST['name'];

    // Redirect the user to 'index.php' after saving the name in the session
    header('Location: index.php');
 }


?>


<!DOCTYPE html>
    <html>
        <head>
            <title>Php tuts</title>
        </head>
        <body>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
                <input type="text" name="name">
                <input type="submit" name="submit" value="submit">
            </form>
        </body>
    
</html>