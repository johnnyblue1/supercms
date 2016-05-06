<!DOCTYPE html>
<html>

<head>

    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMART CMS</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>inc/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="<?php echo base_url(); ?>inc/css/jquery.bdt.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>inc/images/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo anchor(site_url(), '<img src="http://localhost/benefithomecms/inc/images/logocms.png">', 'class="navbar-brand"'); ?> 
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('name');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <?php if($loggedin == TRUE): ?>
                        <li>
                        	<?php echo anchor('admin/panel/logout', '<i class="fa fa-fw fa-power-off"></i> Wyloguj'); ?> 
                        </li>
                        <?php endif ?>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                	<?php if($loggedin == TRUE): ?>
                    <li>
                        <?php echo anchor('admin/panel', '<i class="fa fa-fw fa-dashboard"></i>  Dashboard'); ?> 
                    </li>
                    <li>
                        
                    </li>
                    <li>
                    	<a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa fa-users"></i> Użytkownicy <i class="fa fa-fw fa-caret-down"></i></a>
	                    <ul id="users" class="collapse">
	                        <li>
	                            <?php echo anchor('admin/users', '<i class="fa fa-list-ul" aria-hidden="true"></i> Lista użytkowników'); ?>
	                        </li>
	                        <li>
	                            <?php echo anchor('admin/users/create', '<i class="fa fa-plus-square" aria-hidden="true"></i> Dodaj użytkownika'); ?>
	                        </li>
	                    </ul>
	                </li>
                    <li>
                    	<a href="javascript:;" data-toggle="collapse" data-target="#pages"><i class="fa fa-fw fa-files-o"></i> Strony <i class="fa fa-fw fa-caret-down"></i></a>
                    	<ul id="pages" class="collapse">
	                        <li>
	                            <?php echo anchor('admin/pages', '<i class="fa fa-list-ul" aria-hidden="true"></i> Lista stron'); ?>
	                        </li>
	                        <li>
	                            <?php echo anchor('admin/pages/create', '<i class="fa fa-plus-square" aria-hidden="true"></i> Dodaj stronę'); ?>
	                        </li>
	                    </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#articles"><i class="fa fa-fw fa-thumb-tack"></i> Wpisy <i class="fa fa-fw fa-caret-down"></i></a>
                    	<ul id="articles" class="collapse">
                    		<li>
	                            <?php echo anchor('admin/blog', '<i class="fa fa-tag" aria-hidden="true"></i> Dodaj kategorię'); ?>
	                        </li>
                    		<li>
	                            <?php echo anchor('admin/blog', '<i class="fa fa-align-left" aria-hidden="true"></i> Lista kategorii'); ?>
	                        </li>
	                        <li>
	                            <?php echo anchor('admin/blog', '<i class="fa fa-list-ul" aria-hidden="true"></i> Lista artykułów'); ?>
	                        </li>
	                        <li>
	                            <?php echo anchor('admin/blog/create', '<i class="fa fa-plus-square" aria-hidden="true"></i> Dodaj artykuł'); ?>
	                        </li>
	                    </ul>
                    </li>
                    <li>
                        <?php echo anchor('admin/gallery', '<i class="fa fa-fw fa-picture-o"></i> Galeria'); ?>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-lock"></i> Uprawnienia</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php //echo $id; ?>
                 <?php echo $test; ?>
                  
               