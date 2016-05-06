<?php include APPPATH . 'views/admin/include/header.php'; ?>

<h2>Galeria</h2>

<?php echo form_open_multipart('admin/gallery');?>

<?php echo form_upload('userfile'); ?>
<br />
<input type="submit" name="upload" value="Załaduj zdjęcie" />
<?php echo form_close(); ?>

<hr>

<?php foreach ($files as $file): ?>
	<a href="<?php echo base_url() . 'images/' . $file; ?>">
		<img src="<?php echo base_url() . 'images/thumbs/' . $file; ?>">
	</a>
	<?php echo form_open('admin/gallery/del_image'); ?>
		<?php echo form_hidden('file_name', $file); ?>
		<button type="submit" name="button">X</button>
	<?php echo form_close(); ?>
	
<?php endforeach; ?>


<?php include APPPATH . 'views/admin/include/footer.php'; ?>