<?php include APPPATH . 'views/admin/include/header.php'; ?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Dashboard
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Dashboard
            </li>
        </ol>
    </div>
</div>

<div class="row">

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-users fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Nowych użytkowników</div>
                    </div>
                </div>
            </div>
            <?php echo anchor('admin/users', '
                <div class="panel-footer">
                    <span class="pull-left">Zobacz szczegóły</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            '); ?>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-files-o fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Nowych stron</div>
                    </div>
                </div>
            </div>
            <?php echo anchor('admin/pages', '
                <div class="panel-footer">
                    <span class="pull-left">Zobacz szczegóły</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            '); ?>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-thumb-tack fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">14</div>
                        <div>Nowych wpisów</div>
                    </div>
                </div>
            </div>
            <?php echo anchor('admin/blog', '
                <div class="panel-footer">
                    <span class="pull-left">Zobacz szczegóły</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            '); ?>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-picture-o fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Nowych zdjęć</div>
                    </div>
                </div>
            </div>
            <?php echo anchor('admin/gallery', '
                <div class="panel-footer">
                    <span class="pull-left">Zobacz szczegóły</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            '); ?>
        </div>
    </div>

</div>      
             

<?php include APPPATH . 'views/admin/include/footer.php'; ?>