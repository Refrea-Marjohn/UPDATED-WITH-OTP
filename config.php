<?php
$host = "localhost";
$username = "root";
$password = "";  // Empty string since no password is set
$database = "lawfirm";

$conn = mysqli_connect("localhost", "root", "", "lawfirm");


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Email sender config for OTP/notifications
if (!defined('MAIL_HOST')) define('MAIL_HOST', 'smtp.gmail.com');
if (!defined('MAIL_USERNAME')) define('MAIL_USERNAME', 'refreamarjohn91@gmail.com'); // <-- Palitan ng Gmail mo
if (!defined('MAIL_PASSWORD')) define('MAIL_PASSWORD', 'twtg fvpi humi eplp');    // <-- Palitan ng App Password mo
if (!defined('MAIL_FROM')) define('MAIL_FROM', 'refreamarjohn91@gmail.com');         // <-- Palitan ng Gmail mo
if (!defined('MAIL_FROM_NAME')) define('MAIL_FROM_NAME', 'Opiña Law Office');
?>
