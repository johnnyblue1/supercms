<?php echo anchor(site_url(), 'Strona głowna'); ?> 
<?php echo anchor(site_url(), 'Blog'); ?> 
<?php echo anchor(base_url() . 'gallery', 'Galeria'); ?> 

<?php if(!empty($pages)): ?>

	<?php foreach ($pages as $row): ?>
		<?php echo anchor('page/' . $row->alias, $row->title); ?> 
	<?php endforeach; ?>	

<?php endif; ?>