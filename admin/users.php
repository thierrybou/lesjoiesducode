<?php include_once 'partials/header.php'; 

$query = $dbb->query('SELECT * FROM user');
$usersTable = $query->fetchAll();

?>



	<table>
   		<caption>Users list registered</caption>

   		<tr>
   			<th>id</th>
       		<th>id</th>
       		<th>firstname</th>
       		<th>lastname</th>
          <th>gender</th>
          <th>email</th>
          <th>password</th>
          <th>newsletter</th>
          <th>creation_date</th>          
   		</tr>

   		<?php foreach ($usersTable as $user) { ?>
   			<tr>
       			<td><?= $user['id'] ?> </td>
       			<td><?= $user['firstname'] ?> </td>
       			<td><?= $user['lastname'] ?> </td>
       			<td><?= $user['gender'] ?> </td>
            <td><?= $user['email'] ?> </td>
            <td><?= $user['password'] ?> </td>
            <td><?= $user['newsletter'] ?> </td>
            <td><?= $user['creation_date'] ?> </td>
   			</tr>
   		<?php } ?>
   		
	
	</table>




<?php include_once 'partials/footer.php'; ?>