<?php



$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$message = Trim(stripslashes($_POST['message']));


//eventually this code will write the info to a file on the server



header("Location: http://lizardrock.github.io/contactDone.html"); 


?>