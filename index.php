<?php

    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include 'config/db_connect.php';

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

        <?php foreach($pizzas as $pizza): ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <ul>
                            <?php foreach(explode(',', $pizza['ingredients']) as $ingridient): ?>
                                <li><?php echo htmlspecialchars($ingridient); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

    </div>
</div>

<?php include "templates/footer.php"; ?>
        

</html>