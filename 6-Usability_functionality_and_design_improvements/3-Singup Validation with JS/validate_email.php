<?php 

/**
 * Validate that the email is available when signing up
 */

// Initialisation
require_once('includes/init.php');

$is_available = false;

// Make sure it's an Ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {

  $is_available = User::findByEmail($_POST['email']) === NULL;

}

// Return the result, formatted as JSON
echo json_encode($is_available);

?>
