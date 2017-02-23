<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pharmatesis</title>
        <link rel="stylesheet" type="text/css" href="files/reset.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include 'views/topmenu.html';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Pharmatesis</h2>
                    <?php
                    require 'controller/MainController.php';
                    $control = new MainController();
                    $control->processRequest();
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
