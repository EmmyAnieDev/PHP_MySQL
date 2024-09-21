<?php

    session_start();

    // $_SESSION['name'] = 'yoshi';

    // Check if the query string in the URL is 'noname'
    if($_SERVER['QUERY_STRING'] == 'noname'){

        // Remove 'name' from the session
        unset($_SESSION['name']);

        // Unset all session variables (clear the session)
        session_unset();
    }


    // We can access $_SESSION['name'] anywhere because $_SESSION is a superglobal array
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';




?>



<head>
        <title> Ninja Pizzas </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <style type="text/css">
            .brand{
                background: #cbb09c !important;
            }
            .brand-text{
                color: #cbb09c !important; 
            }
            form{
                max-width: 460px;
                margin: 20px auto;
                padding: 20px;
            }
        </style>
</head>

    <body class="grey lighten-4">
        <nav class="white z-depth-0">
            <div class="container">
                <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
                <ul id="nav-mobile" class="right hand-on-small-and-down">
                    <li class="grey-text"> Hello <?php echo htmlspecialchars($name); ?></li>
                    <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
                </ul>
            </div>
        </nav>