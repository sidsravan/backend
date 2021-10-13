<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Meme Feed Admin Panel</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">Meme Feed Admin Panel</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Meme Feed Admin Panel</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
					<?php if(!empty($this->session->id)){ ?>
						<div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo $this->session->name;?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo $this->session->name; ?>
                                        <small><?php echo date('Y-M-d');?></small>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url();?>user/logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
					<?php } ?>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php if(!empty($this->session->id)){ ?>
				<aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo site_url('resources/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $this->session->name; ?> </p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
							<a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> Users</a>
                        </li>
                        <li>
							<a href="<?php echo site_url('album_name/index');?>"><i class="fa fa-list-ul"></i>Album Name</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('album/index');?>"><i class="fa fa-list-ul"></i>Album</a>
                        </li>
						<li>
							<a href="<?php echo site_url('post_type/index');?>"><i class="fa fa-list-ul"></i> Post Types</a>
                        </li>
						<li>
							<a href="<?php echo site_url('post/index');?>"><i class="fa fa-list-ul"></i> Posts</a>
						</li>
						<li>
							<a href="<?php echo site_url('post/bulk_add_posts');?>"><i class="fa fa-list-ul"></i> Bulk Add posts</a>
						</li>
						<li>
							<a href="<?php echo site_url('comment/index');?>"><i class="fa fa-list-ul"></i> Comments</a>
						</li>
						<li>
							<a href="<?php echo site_url('country/index');?>"><i class="fa fa-list-ul"></i> Countries</a>
						</li>
						<li>
							<a href="<?php echo site_url('state/index');?>"><i class="fa fa-list-ul"></i> States</a>
						</li>
						<li>
							<a href="<?php echo site_url('city/index');?>"><i class="fa fa-list-ul"></i> Cities</a>
						</li>
						<li>
                            <a href="<?php echo site_url('vote_type/index');?>"><i class="fa fa-list-ul"></i> Action Types</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('vote/index');?>"><i class="fa fa-list-ul"></i> Actions</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('user/upassword');?>"><i class="fa fa-list-ul"></i> Invite Creator</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('hashtag/index');?>"><i class="fa fa-list-ul"></i>Hashtags</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('report_post/index');?>"><i class="fa fa-list-ul"></i>Report Post</a>
                        </li>
						<li>
                            <a href="<?php echo site_url('report_comment/index');?>"><i class="fa fa-list-ul"></i>Report Comment</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('user/upgrade_account_list');?>"><i class="fa fa-list-ul"></i> Upgrade Account</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('user/monetise');?>"><i class="fa fa-list-ul"></i> Monetise Request</a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
			<?php } ?>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
					<?php if($this->session->flashdata('success')){ ?>
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
						</div>

					<?php } else if($this->session->flashdata('error')){  ?>

						<div class="alert alert-danger">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
						</div>

					<?php } else if($this->session->flashdata('warning')){  ?>

						<div class="alert alert-warning">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
						</div>

					<?php } else if($this->session->flashdata('info')){  ?>

						<div class="alert alert-info">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
						</div>
					<?php } ?>
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Meme Feed <a href="https://memefeed.app">Meme Feed</a></strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>
        
        <script>
			var timeout = 3000; // in miliseconds (3*1000)
			$('.alert').delay(timeout).fadeOut(300);
        </script>
        
    </body>
</html>
