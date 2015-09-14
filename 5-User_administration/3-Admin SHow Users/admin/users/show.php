<?php

/**
 * User admin - show a user
 */

// Initialisation
require_once('../../includes/init.php');

// Require the user to be logged in before they can see this page.
Auth::getInstance()->requireLogin();

// Require the user to be an administrator before they can see this page.
Auth::getInstance()->requireAdmin();


// Get the user
if (isset($_GET['id'])) {
  $user = User::findByID($_GET['id']);
}

// Show 404 if user not found
if ( ! isset($user)) {
  header('HTTP/1.0 404 Not Found');
  echo '404 Not Found';
  exit;
}


// Show the page header, then the rest of the HTML
include('../../includes/header.php');

?>

<h1>User</h1>

<p><a href="/admin/users">&laquo; back to list of users</a></p>

<dl>
  <dt>Name</dt>
  <dd><?php echo htmlspecialchars($user->name); ?></dd>
  <dt>email address</dt>
  <dd><?php echo htmlspecialchars($user->email); ?></dd>
  <dt>Active</dt>
  <dd><?php echo $user->is_active ? '&#10004;' : '&#10008;'; ?></dd>
  <dt>Administrator</dt>
  <dd><?php echo $user->is_admin ? '&#10004;' : '&#10008;'; ?></dd>
</dl>
    
<?php include('../../includes/footer.php'); ?>
