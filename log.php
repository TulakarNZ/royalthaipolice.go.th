<?php
// Get the user's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Create a log entry with the current date and time and the IP address
$log = date('Y-m-d H:i:s') . " - " . $ip . "\n";

// Append the log entry to the log file
file_put_contents('ip_log.txt', $log, FILE_APPEND);

// Redirect the user to a thank you page
header('Location: thank_you.html');
exit();
?>
