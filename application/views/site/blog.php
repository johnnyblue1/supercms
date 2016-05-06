<?php include APPPATH . 'views/site/include/header.php'; ?>

<h1>Witaj na blogu</h1>

<?php if(!empty($blog)): ?>
	<?php foreach($blog as $row): ?>

		<?php echo anchor('article/' . $row->alias, $row->title); ?> 
		<?php echo ($row->date); ?>
		<?php echo excerpt(($row->content), 10); ?>  
		<br><br>

	<?php endforeach; ?>
<?php else: ?>
<h2>Brak artykułów</h2>
<?php endif; ?>

<?php echo $pagination; ?>


<?php include APPPATH . 'views/site/include/footer.php'; ?>