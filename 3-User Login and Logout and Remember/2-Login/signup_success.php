<?php

/**
 * Signup success page
 */

// Initialisation
require_once('includes/init.php');

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Sign Up';
include('includes/header.php');

?>

<h1>Sign Up</h1>

<p>Success! Thank you for signing up. You can now <a href="login.php">log in</a>.</p>

<?php include('includes/footer.php'); ?>
