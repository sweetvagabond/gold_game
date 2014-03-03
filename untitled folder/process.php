<?php
session_start();

if(!isset($_SESSION['total']))
{

    $gold_earned = 0;
    $_SESSION['total'] = 0;
    $_SESSION['message'] = "";
    $message = "";

}

    if(isset($_POST['farm']))
    {
        $gold_earned = rand(10,20);
        $_SESSION['total'] += $gold_earned;


        // foreach ($_POST as $message)
        // {
            $message = "You entered a farm and earned {$gold_earned} golds<br/>";
        // }
        $_SESSION['message'] .= $message;

    }

    if(isset($_POST['cave']))
    {
        $gold_earned = rand(5,10);
        $_SESSION['total'] += $gold_earned;

        // foreach ($_POST as $message)
        // {
            $message = "You entered a cave and earned {$gold_earned} golds<br/>";
        // }
        $_SESSION['message'] .= $message;

    }

    if(isset($_POST['house']))
    {
        $gold_earned = rand(2,5);
        $_SESSION['total'] += $gold_earned;

        // foreach ($_POST as $message)
        // {
            $message = "You entered a house and earned {$gold_earned} golds<br/>";
        // }
        $_SESSION['message'] .= $message;


    }

    if(isset($_POST['casino']))
    {
        $gold_earned = rand(-50,0);
        $_SESSION['total'] += $gold_earned;

        // foreach ($_POST as $message)
        // {
            $message = "You entered a casino and lost {$gold_earned} golds<br/>";
        // }
        $_SESSION['message'] .= $message;

    }


    if(isset($_POST['reset']))
    {
        $_SESSION = array();    
        session_destroy();
    }




header('location: index.php');
?>