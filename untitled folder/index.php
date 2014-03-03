<?php
session_start();
if(!isset($_SESSION['total']))
{

    $gold_earned = 0;
    $_SESSION['total'] = 0;
    $_SESSION['message'] = "";
    $message = "";

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interm</title>
</head>
<body>
    <?php

    if(isset($_SESSION['total']))
    {
        echo $_SESSION['total'];
    }
    ?>

    <h2>Farm</h2>
    <form action="process.php" method ="post">
        <input type="hidden" name="farm">
        <input type="submit" value="Find Gold">
    </form>
    <h2>Cave</h2>   
    <form action="process.php" method ="post">
        <input type="hidden" name="cave">
        <input type="submit" value="Find Gold">
    </form>
    <h2>House</h2>  
    <form action="process.php" method ="post">
        <input type="hidden" name="house">
        <input type="submit" value="Find Gold">
    </form>
    <h2>Casino</h2>
    <form action="process.php" method ="post">
        <input type="hidden" name="casino">
        <input type="submit" value="Find Gold">
    </form>
    <h2>Reset</h2>

    <form action="process.php" method ="post">
        <input type="hidden" name="reset">
        <input type="submit" value="Reset">
    </form>
<h1> activities </h2>
    <?php

    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
    }
    ?>

</body>
</html>




