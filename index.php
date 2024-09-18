<?php

    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Use environment variables or external config for sensitive info
    $db_host = 'localhost';
    $db_user = 'emmy';
    $db_pass = 'test1234';
    $db_name = 'ninja_pizza';

    // connect to database using mysqli
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // check connection
    if(!$conn){
        // Log the error for debugging and show a generic message
        error_log("Connection error: $mysqli_connect_error() ");
        echo "Connection to database failed. Please try again later.";
    }

    // write query to select particular column from pizzas's table
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    // make query & get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as a multi-dimensional associate array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free results from memory
    mysqli_free_result($result);

    // end connection
    mysqli_close($conn);

    // print_r($pizzas);
?>



<!DOCTYPE html>
<html>
<?php include "templates/header.php"; ?>

<h4 class="center grey-text">Pizzas!</h4>

<div class="container">
    <div class="row">

        <?php foreach($pizzas as $pizza){ ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>

<?php include "templates/footer.php"; ?>
        

</html>