<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>

</head>
<body>
    <h1>
    <?php
        echo "GET: " $_GET['controller'];
        echo "<br/>POST:" . $_POST
    ?>

    <!-- <form action="index.php" method="get">
        <label for="">GET</label>
        <input type="text" name="controller" id="controller">
        <input type="submit" value="Submit">
    </form>

    <form action="index.php" method="post">
        <label for="">POST</label>
        <input type="text" name="controller" id="controller">
        <input type="submit" value="Submit">
    </form> -->

    <?php

    if($_GET['controller'] == "home"){
        include('views/wecome.php');
    } else if($_GET['controller'] == "dashboard") {
        include("views/dashboard.php");
    } else if($_GET['controller'] == "login") {
        include("views/login.php");
    } else if($_GET['controller'] == "logout") {
        include("views/logout.php");
    } else {
        include("views/404.php")
    }

    ?>

    <?php
    require_once 'controllers/controller.php';
    ?>

    </h1>
</body>
</html>