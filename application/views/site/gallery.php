<?php include APPPATH . 'views/site/include/header.php'; ?>

<h2>Galeria</h2>

<?php foreach ($files as $file): ?>
	<a href="<?php echo base_url() . 'images/' . $file; ?>">
		<img src="<?php echo base_url() . 'images/thumbs/' . $file; ?>">
	</a>
<?php endforeach; ?>


<?php include APPPATH . 'views/site/include/footer.php'; ?>