<?php
session_start();


function resetGold()
{
	$_SESSION = array();
	session_destroy();
}

if(isset($_POST['action']))
{
	if($_POST['action'] == 'reset')
	{
		resetGold();
	}
	if($_POST['action'] == 'farm')
	{
		$_SESSION['place'] = 'farm';
		$_SESSION['gold'] = rand(10,20);
		$_SESSION['total'] += $_SESSION['gold'];
	}
	if($_POST['action'] == 'cave')
	{
		$_SESSION['place'] = 'cave';
		$_SESSION['gold'] = rand(5,10);
		$_SESSION['total'] += $_SESSION['gold'];

	}
	if($_POST['action'] == 'house')
	{
		$_SESSION['place'] = 'house';
		$_SESSION['gold'] = rand(2,5);
		$_SESSION['total'] += $_SESSION['gold'];

	}
	if($_POST['action'] == 'casino')
	{
		$_SESSION['place'] = 'casino';
		$_SESSION['gold'] = rand(-50,50);
		$_SESSION['total'] += $_SESSION['gold'];

	}

	$date = date('F jS Y i:s a');
		if(isset($_SESSION['gold']))
		{
			if($_SESSION['gold'] > 0)
			{
				
				$message = '<p style="color: green;">You entered a '. $_SESSION['place'] . 
							' and earned '. $_SESSION['gold'] . ' golds. ('. $date . ')</p>';
				$_SESSION['message'] .= $message . '<br>';
			}
			else
			{
				$message = '<p style="color: red;">You entered a '. $_SESSION['place'] . 
						   ' and earned'. $_SESSION['gold'] . ' golds. ('. $date . ')</p>';
				$_SESSION['message'] .= $message . '<br>';
			}
		}



}

header('Location: intermediate.php');
?>