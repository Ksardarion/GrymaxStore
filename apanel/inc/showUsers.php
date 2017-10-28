<?php
$usersToShow = $user->getAllUsers();
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	while($users = $usersToShow->fetch()):
  	?>
    <tr>
      <th scope="row"><?=$users['id']?></th>
      <td><?=$users['firstName']?></td>
      <td><?=$users['lastName']?></td>
      <td>@<?=$users['login']?></td>
    </tr>
    <?php
	endwhile;
	?>
  </tbody>
</table>