<?php include APPPATH . 'views/admin/include/login-header.php'; ?>

  <div class="container">
    <div class="row">

      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-login">
          <div class="panel-heading text-center">
              <img src="<?php echo base_url(); ?>inc/images/logo.png" alt="DK Notus" />
          </div>
          <div class="panel-body">
            
          	<?php if( !empty(validation_errors()) ): ?>
	          	<div class="alert alert-danger">
      					<?php echo validation_errors(); ?>
      				</div>
      			<?php endif; ?>
			
            <!-- start form -->
            <?php echo form_open(); ?>
              <div class="form-horizontal">

                <div class="form-group">
                  <div class="col-md-12">
                    <?php echo form_input('email', '', 'class="form-control input-lg" placeholder="Adres e-mail"'); ?>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                    <?php echo form_password('password', '', 'class="form-control input-lg" placeholder="Hasło"'); ?>
                  </div>
                </div>

                <p>
                  <?php echo form_submit('submit', 'Zaloguj', 'class="btn btn-primary btn-block btn-lg"'); ?>
                </p>
              </div>
            <?php echo form_close(); ?>
            <!-- end form -->

          </div>
        </div>
      </div>

    </div>
  </div>

<?php include APPPATH . 'views/admin/include/login-footer.php'; ?>