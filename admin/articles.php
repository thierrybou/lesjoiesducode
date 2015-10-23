<?php include_once 'partials/header.php'; 

$query = $dbb->query('SELECT * FROM articles');
$articlesTable = $query->fetchAll();

?>



	<table>
   		<caption>Articles list sent</caption>

   		<tr>
   			<th>id</th>
       		<th>name</th>
       		<th>content</th>
       		<th>creation date</th>
   		</tr>

   		<?php foreach ($articlesTable as $article) { ?>
   			<tr>
       			<td><?= $article['id'] ?> </td>
       			<td><?= $article['name'] ?> </td>
       			<td><?= $article['content'] ?> </td>
       			<td><?= $article['creation_date'] ?> </td>
   			</tr>
   		<?php } ?>
   		
	
	</table>




<?php include_once 'partials/footer.php'; ?>