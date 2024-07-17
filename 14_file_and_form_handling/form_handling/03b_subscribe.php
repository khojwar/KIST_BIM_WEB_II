<!-- The following shows the code of the subscribe.php file: -->

<?php

// //---------------------------------------------
// // WARNING: this doesn't include sanitization
// // and validation
// //---------------------------------------------
// if (isset($_POST['name'], $_POST['email'])) {
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];

// 	// show the $name and $email
// 	echo "Thanks $name for your subscription.<br>";
// 	echo "Please confirm it in your inbox of the email $email.";
// } else {
// 	echo 'You need to provide your name and email address.';
// }





/*

The subscribe.php page directly displays the form data. If malicious hackers intentionally enter bad data, the page won’t work properly.

For example, if the following JavaScript code is entered in the name field and the form is submitted.

<script>alert('Hello');</script>
Code language: HTML, XML (xml)
…you’ll see that the page displays an alert.

Imagine that the script doesn’t just show an alert but loads the malicious code from another server to the user’s web browser, the risk is higher. This type of attack is called cross-site scripting (XSS) attack.

Therefore, before displaying user input on a webpage, you should always escape the data. To do that, you use the htmlspecialchars() function:

*/



//---------------------------------------------
// WARNING: this doesn't include sanitization
// and validation
//---------------------------------------------
if (isset($_POST['name'], $_POST['email'])) {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);

	// show the $name and $email
	echo "Thanks $name for your subscription.<br>";
	echo "Please confirm it in your inbox of the email $email.";
} else {
	echo 'You need to provide your name and email address.';
}
