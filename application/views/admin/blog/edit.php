<?php include APPPATH . 'views/admin/include/header.php'; ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Edycja artykułu
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-fw fa-thumb-tack"></i> Edycja artykułu
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
      	<?php echo form_input('title', set_value('title', $article->title), 'class="form-control input-lg"'); ?>
      </div>
  	</div>

  	<div class="form-group">
      <div class="col-md-12">
      	<?php echo form_input('date', set_value('date', $article->date), 'id="datepicker" class="form-control input-lg"'); ?>
      </div>
  	</div>

  	<div class="form-group">
      <div class="col-md-12">
      	<?php echo form_textarea('content', set_value('content', $article->content), 'class="form-control input-lg" rows="4"'); ?>
      </div>
  	</div>

  	<div class="form-group">
	    <div class="col-md-4">
	    	<?php echo form_submit('submit', 'Zapisz zmiany', 'class="btn btn-warning"'); ?>
	    </div>
  	</div>

</div>

<?php echo form_close(); ?>

<?php include APPPATH . 'views/admin/include/footer.php'; ?>