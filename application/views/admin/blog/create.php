<?php include APPPATH . 'views/admin/include/header.php'; ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dodaj nowy wpis
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-fw fa-thumb-tack"></i> Dodaj nowy wpis
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if( !empty(validation_errors()) ): ?>
          <div class="alert-add alert-danger-add">
            <?php echo validation_errors(); ?>
          </div>
        <?php endif; ?>
    </div>
</div> 

<?php echo form_open(); ?>

<div class="form-horizontal">

	<div class="form-group">
      <div class="col-md-12">
      	<?php echo form_input('title', '', 'class="form-control input-lg" placeholder="Wprowadź tytuł"'); ?>
      </div>
  	</div>

  	<div class="form-group">
      <div class="col-md-12">
        <?php echo form_input('date', date('Y-m-d'), 'id="datepicker" class="form-control input-lg"'); ?>
      </div>
  	</div>

  	<div class="form-group">
      <div class="col-md-12">
      	<?php echo form_textarea('content', '', 'class="form-control input-lg" rows="4" placeholder="Treść artykułu"'); ?>
      </div>
  	</div>

  	<div class="form-group">
      <div class="col-md-12">
      	<select class="form-control input-lg">
		  <option>Bez kategorii</option>
		  <option>2</option>
		  <option>3</option>
		  <option>4</option>
		  <option>5</option>
		</select>
      </div>
  	</div>

  	<div class="form-group">
	    <div class="col-md-4">
	    	<?php echo form_submit('submit', 'Dodaj artykuł', 'class="btn btn-warning"'); ?>
	    </div>
  	</div>

</div>
		
<?php echo form_close(); ?>

<?php include APPPATH . 'views/admin/include/footer.php'; ?>