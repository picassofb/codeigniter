
<body class="page-header-fixed page-horizontal-bar">
<div class="overlay"></div>

<form class="search-form" action="#" method="GET">
    <div class="input-group">
        <input type="text" name="search" class="form-control search-input" placeholder="Buscar...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
    </div><!-- Input Group -->
</form><!-- Search Form -->

<main class="page-content content-wrap">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="sidebar-pusher">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="logo-box">
                <a href="index.html" class="logo-text"><span>BalanzaMatic</span></a>
            </div><!-- Logo Box -->
            <div class="search-button">
                <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
            </div>
            <div class="topmenu-outer">
                <div class="top-menu">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <span class="user-name">David<i class="fa fa-angle-down"></i></span>
                                <img class="img-circle avatar" src="<?php echo base_url(); ?>assets/panel/assets/images/avatar1.png" width="40" height="40" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-list" role="menu">
                                <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Profile</a></li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
                                <li role="presentation"><a href="<?php echo site_url('auth/logout')?>"><i class="fa fa-sign-out m-r-xs"></i>Cerrar Sesi&oacute;n</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo site_url('auth/logout')?>" class="log-out waves-effect waves-button waves-classic">
                                <span><i class="fa fa-sign-out m-r-xs"></i>Cerrar Sesi&oacute;n</span>
                            </a>

                        </li>
                    </ul><!-- Nav -->
                </div><!-- Top Menu -->
            </div>
        </div>
    </div><!-- Navbar -->

    <div class="horizontal-bar sidebar">
        <div class="page-sidebar-inner slimscroll">
            <div class="sidebar-header">
                <div class="sidebar-profile">
                    <a href="javascript:void(0);" id="profile-menu-link">
                        <div class="sidebar-profile-image">
                            <img src="<?php echo base_url(); ?>assets/panel/assets/images/avatar1.png" class="img-circle img-responsive" alt="">
                        </div>
                        <div class="sidebar-profile-details">
                            <span>David Green<br><small>Art Director</small></span>
                        </div>
                    </a>
                </div>
            </div>
            <ul class="menu accordion-menu">

                <li><a href="<?php echo site_url('panel/index')?>" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Panel</p></a></li>

                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-th"></span><p>Almacen</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Categorias</a></li>
                    </ul>
                </li>

                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-shopping-cart"></span><p>Compras</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Compra</a></li>
                        <li><a href="<?php echo site_url('panel/proveedor')?>">Proveedor</a></li>
                    </ul>
                </li>

                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-credit-card"></span><p>Ventas</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Venta</a></li>
                        <li><a href="#">Cliente</a></li>
                    </ul>
                </li>

                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-stats"></span><p>Reporte Compras</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Por Fecha</a></li>
                        <li><a href="#">Por Proveedor</a></li>
                    </ul>
                </li>

                <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-stats"></span><p>Reporte Ventas</p><span class="arrow"></span></a>
                    <ul class="sub-menu">
                        <li><a href="#">Por Fecha</a></li>
                        <li><a href="#">Por Cliente</a></li>
                    </ul>
                </li>

                <li ><a href="<?php echo site_url('panel/empleado')?>" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-user"></span><p>Empleados</p><span class="arrow"></span></a>

                </li>

            </ul>
        </div><!-- Page Sidebar Inner -->
    </div><!-- Page Sidebar -->

    <div class="page-inner">
        <div class="page-title">
            <h3></h3>
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="active">Barra BreadCum</li>
                </ol>
            </div>
        </div>