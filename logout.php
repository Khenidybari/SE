<?php
// Start the session
require_once('logincode.php');

if (isset($_POST['logout'])) {
  // Unset all of the session variables
  $_SESSION = array();

  // Destroy the session
  session_destroy();

  // Redirect the user to the login page
  header("Location: login.php");
  exit();
}