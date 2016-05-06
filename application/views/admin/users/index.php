<?php include APPPATH . 'views/admin/include/header.php'; ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista użytkowników
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-fw fa fa-users"></i> Lista użytkowników
            </li>
        </ol>
    </div>
</div>

<?php if(!empty($users)): ?>
    <table class="table table-striped" id="bootstrap-table">
        <thead>
            <th>Nazwa użytkownika</th>
            <th>Adres e-mail</th>
            <th></th>
            <th></th>    
        </thead>
	<?php foreach ($users as $row): ?>
        <tr>
        	<td><?php echo ($row->name); ?></td>
        	<td><?php echo ($row->email); ?></td>
        	<td><?php echo anchor('admin/users/edit/' . $row->id, '<button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>'); ?></td>
            <td><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?php echo $row->id; ?>"><span class="glyphicon glyphicon-trash"></span></button></td>
        </tr>

        <!-- start modal -->
        <div class="modal fade bs-example-modal-sm" id="delete<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
                  <div class="modal-body">
               
               <div class="alert alert-danger">Jesteś pewien, że chcesz usunąć</br><strong><?php echo ($row->name); ?></strong> ?</div>
               
              </div>
                <div class="modal-footer ">
                <?php echo anchor('admin/users/delete/' . $row->id, '<button class="btn btn-success" >Tak</button>'); ?></td>
                <button type="button" class="btn btn-default" data-dismiss="modal">Nie</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal -->

	<?php endforeach ?>	
    </table>
<?php else: ?>	
<h3>Brak użytkowników</h3>
<?php endif ?>	

<?php include APPPATH . 'views/admin/include/footer.php'; ?>