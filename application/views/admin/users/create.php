<?php include APPPATH . 'views/admin/include/header.php'; ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Utwórz użytkownika
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-fw fa fa-users"></i> Utwórz użytkownika
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
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
      <div class="col-md-4">
        <?php echo form_input('name', '', 'class="form-control input-lg" placeholder="Imię"'); ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4">
        <?php echo form_input('email', '', 'class="form-control input-lg" placeholder="Email"'); ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4">
      	<?php echo form_password('password', '', 'class="form-control input-lg" placeholder="Hasło"'); ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4">
      	<?php echo form_password('passconf','', 'class="form-control input-lg" placeholder="Potwierdź hasło"'); ?>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4">
      	<?php echo form_submit('submit', 'Dodaj użytkownika', 'class="btn btn-warning"'); ?>
      </div>
    </div>
	
</div>

<?php echo form_close(); ?>

<?php include APPPATH . 'views/admin/include/footer.php'; ?>