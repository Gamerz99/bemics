<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> <?php echo $title; ?> </title> 
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="icon" href="<?php echo base_url(); ?>layout/dist/img/fevicon.png">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/dist/css/AdminLTE.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/dist/css/skins/_all-skins.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/bower_components/morris.js/morris.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/bower_components/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>layout/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>layout/datatables/datatables.css"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <style>
            table.dataTable tbody th, table.dataTable tbody td {
                padding: 1px 1px;
            }
        </style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <div class="wrapper">            
            <header class="main-header">
                <a href="<?php echo base_url(); ?>" class="logo">
                    <span class="logo-mini">bem</span>
                    <h1>BEMICS</h1>
                </a>
                <nav class="navbar navbar-static-top">
                    <?php if (isset($msg)) { ?>
                        <div>
                            <?php echo $msg; ?>
                        </div>
                    <?php } ?>
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url(); ?>layout/dist/img/<?php echo $userinf['image'] ?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $userinf['username']?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url(); ?>layout/dist/img/<?php echo $userinf['image'] ?>" class="img-circle" alt="User Image">
                                        <p>
                                            BEMICS.Com
                                            <small>Since 2019</small>
                                        </p>
                                    </li>                     
                                    <li class="user-footer">                              
                                        <div class="pull-right">
                                            <a href="<?php echo base_url(); ?>admin/user/logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url(); ?>layout/dist/img/<?php echo $userinf['image'] ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p> <?php echo $userinf['username']; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <?php echo $mainmenu; ?>
                </section>
            </aside>