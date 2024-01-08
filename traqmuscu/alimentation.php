<?php
   
    require("./view/header.php");
    require("./view/footer.php");
    
    session_start();

    if (!isset($_SESSION['dhdTbzzoP5654'])) {
        header("Location: login.php");
        exit();
    }
    
    if (empty($_SESSION['dhdTbzzoP5654'])) {
        header("Location:login.php");
        exit(); 
    }
    require("commandes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<h1>Besoin de coseil d'aliemtation ?</h1>


</body>
</html>