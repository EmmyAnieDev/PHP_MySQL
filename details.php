<?php

    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include 'config/db_connect.php';

    // Check if the 'id' parameter is set in the GET request
    if(isset($_GET['id'])){

        // Sanitize the 'id' parameter to prevent SQL injection
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // Create SQL query to fetch pizza details based on the given 'id'
        $sql = "SELECT * FROM pizzas WHERE id = $id";

        //get the query result
        $result = mysqli_query($conn, $sql);

        // fetch result in associate array format
        $pizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        // print_r($pizza);
    }

?>



<!DOCTYPE html>
<html>
<?php include "templates/header.php"; ?>


<div class="container center">
    <?php if($pizza): ?>

        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p><?php echo htmlspecialchars($pizza['email']); ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients:</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
       
    <?php else: ?>
        <h5><?php echo 'No such pizza exits!'; ?></h5> 
    <?php endif; ?>
</div>




<?php include "templates/footer.php"; ?>
        

</html>