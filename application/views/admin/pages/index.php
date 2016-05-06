<?php include APPPATH . 'views/admin/include/header.php'; ?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Lista stron
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-fw fa-files-o"></i> Lista stron
            </li>
        </ol>
    </div>
</div>

<table id="bootstrap-table" class="table table-striped">
	
<?php if(!empty($pages)): ?>
        <thead>
            <th>id</th>
            <th>Tytuł strony</th>
            <th>Alias</th>
            <th>Treść</th>
            <th></th>    
            <th></th>        
        </thead>
	<?php foreach($pages as $row): ?>
		<tr id="<?php echo $row->id; ?>">
			<td><?php echo $row->id; ?></td>
			<td><?php echo $row->title; ?></td>
			<td><?php echo $row->alias; ?></td>
			<td><?php echo excerpt(($row->content), 10); ?></td>
			<td><?php echo anchor('admin/pages/edit/' . $row->id, '<button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button>'); ?></td>
			<td><button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete<?php echo $row->id; ?>"><span class="glyphicon glyphicon-trash"></span></button></td>
		</tr>

		<!-- start modal -->
        <div class="modal fade bs-example-modal-sm" id="delete<?php echo $row->id; ?>" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
                  <div class="modal-body">
               
               <div class="alert alert-danger">Jesteś pewien, że chcesz usunąć</br><strong><?php echo ($row->title); ?></strong> ?</div>
               
              </div>
                <div class="modal-footer ">
                <?php echo anchor('admin/pages/delete/' . $row->id, '<button class="btn btn-success" >Tak</button>'); ?></td>
                <button type="button" class="btn btn-default" data-dismiss="modal">Nie</button>
              </div>
            </div>
          </div>
        </div>
        <!-- end modal -->


	<?php endforeach; ?>

	</table>

<?php else: ?>
<h2>Brak stron</h2>
<?php endif; ?>

<?php include APPPATH . 'views/admin/include/footer.php'; ?>

