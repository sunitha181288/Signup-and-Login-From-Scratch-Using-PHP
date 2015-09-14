<?php

/**
 * User admin index - list all users
 */

// Initialisation
require_once('../../includes/init.php');

// Require the user to be logged in before they can see this page.
Auth::getInstance()->requireLogin();

// Require the user to be an administrator before they can see this page.
Auth::getInstance()->requireAdmin();


// Get the paginated data
$data = User::paginate(isset($_GET['page']) ? $_GET['page'] : 1);


// Show the page header, then the rest of the HTML
include('../../includes/header.php');

?>

<h1>Users</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>email</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['users'] as $user): ?>
      <tr>
        <td><?php echo htmlspecialchars($user['name']); ?></td>
        <td><?php echo htmlspecialchars($user['email']); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<ul>
  <li>
    <?php if ($data['previous'] === null): ?>
      Previous
    <?php else: ?>
      <a href="/admin/users/?page=<?php echo $data['previous']; ?>">Previous</a>
    <?php endif; ?>
  </li>
  <li>
    <?php if ($data['next'] === null): ?>
      Next
    <?php else: ?>
      <a href="/admin/users/?page=<?php echo $data['next']; ?>">Next</a>
    <?php endif; ?>
  </li>
</ul>

    
<?php include('../../includes/footer.php'); ?>
