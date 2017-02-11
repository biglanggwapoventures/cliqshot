<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cliqshot | Admin</title>

    <!-- Bootstrap Core CSS -->


   <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('img/cliqshot_white.png') ?>" style="width:150px;height:35px;"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('admin_user') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo site_url('C_Main/logout');?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li  <?php     if($page_name == 'home') echo "class = 'active' "; ?>>
                        <a href="index"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>

                     <li <?php     if($page_name == 'services') echo "class = 'active' "; ?>>
                        <a href="<?php echo site_url('AdminController/read_photoservices');?>"><i class="fa fa-fw fa-camera"></i> Photo Services</a>
                    </li>
                    <li <?php     if($page_name == 'users') echo "class = 'active' "; ?>>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-users"></i> Users<i class="fa fa-fw fa-caret-down"></i></a>
                         
                         <ul id="users" class="collapse">
                            <li>
                                <a href="<?php echo site_url('AdminController/read_admin');?>">Administrator</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('AdminController/read_clerk');?>">Clerk</a>
                            </li>
                             <li>
                                <a href="<?php echo site_url('AdminController/read_photographer');?>">Photographer</a>
                            </li>
                             <li>
                                <a href="<?php echo site_url('AdminController/read_customer');?>">Client</a>
                            </li>
                        </ul>
                    </li>

                    

                </ul>
            </div>

            <!-- /.navbar-collapse -->
        </nav>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->









