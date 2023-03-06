<?php
ob_start();
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom d'utilisateur</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($users as $user): ?>
    <tr>
      <th scope="row"><?php echo $user['id'] ?></th>
      <td><?php echo $user['login'] ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php
$title = "Liste des utilisateurs";
$content = ob_get_clean();
include '../template.php';
?>
