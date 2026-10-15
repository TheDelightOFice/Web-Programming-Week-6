<?php
// logout.php
session_start();
session_unset();     // Clear all session variables[cite: 30]
session_destroy();   // Destroy the session on the server[cite: 30]
header("Location: login.php");
exit;
?>