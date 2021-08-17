<!DOCTYPE html>
<html lang="<?php echo get_language_code();?>" dir="<?php echo language_type();?>">

    <head>
        
        <meta charset="utf-8" />
        <title><?php if(isset($pagetitle)) echo $pagetitle;?> | <?php if(isset($this->config->item('site_settings')->site_title)) echo $this->config->item('site_settings')->site_title;?> |</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="keywords" content="<?php if(isset($this->config->item('seo_settings')->meta_keyword)) echo $this->config->item('seo_settings')->meta_keyword;?>">

        <meta name="description" content="<?php if(isset($this->config->item('seo_settings')->meta_description)) echo $this->config->item('seo_settings')->meta_description;?>">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo get_fevicon();?>">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>

    <body data-layout="horizontal" data-topbar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="<?php echo SITEURL.'menu';?>" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                                </span>
                            </a>

                            <a href="<?php echo SITEURL.'menu';?>" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                          
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                            </div>
                        </div>

                        <?php $languages = get_language_opts(); 
                          if(!empty($languages)) {
                            ?>
                        <div class="dropdown d-inline-block language-switch">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url() ?>public/images/translate.png" alt="Header Language" height="16">
                            </button>
                          
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <?php foreach ($languages as $key => $value) { ?>
                                <a class="dropdown-item" href="<?php echo URL_CHANGE_LANGUAGE.'/'.$key;?>">
                                  <span class="align-middle"><?php if($this->config->item('site_settings')->site_language == $key); ?> <?php echo $value;?></span>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <img src="<?= base_url() ?>public/images/full-screen.png" alt="Header Language" height="16">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="topnav">

                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">

                                      <?php
                                      $n=0;
                                      if (isset($menus) && !empty($menus)) {
                                        
                                        $element=array('type'=>'hidden',
                                                'id'=>'first_menu',
                                                'value'=>$menus[0]->menu_id.'='.$menus[0]->menu_name);
                                        echo form_input($element);  
                                        
                                      foreach ($menus as $menu) {
                                      $clas='';
                                      $n++;
                                      if ($n==1)
                                        $clas='active';
                                        
                                      ?>

                                       <li class="nav-item">
                                          <a href="javascript:void(0);" class="nav-link <?php echo $clas;?>" onclick="get_menu_items_block('<?php echo $menu->menu_id;?>','<?php echo $menu->menu_name;?>')" id="<?php echo $menu->menu_id;?>"><?php echo $menu->menu_name;?></a>
                                        </li>
                                      <?php } } ?>

                                      <li class="nav-item">
                                          <a href="javascript:void(0);" class="nav-link" onclick="get_offers_block()" id="offers"><?php echo get_languageword('offers');?></a>
                                      </li>

                                      <li class="nav-item">
                                          <a href="javascript:void(0);" class="nav-link" onclick="get_popular_items_block()" id="popular_items"><?php echo get_languageword('popular_items');?></a>
                                      </li>
    
                                </ul>
                            </div><!-- App Search-->

                            <form class="app-search d-none d-lg-block">
                              <div class="position-relative">
                                <input type="text" id="search-inp" name="search-inp" class="form-control" placeholder="<?php echo get_languageword('search');?>" onkeyup="search_item();"><i class="pe-7s-search"></i>
                                <span class="search-results"></span>
                            </div>
                          </form>
                        </nav>
                    </div>
                </div>
            </header>
    


            

        </div>
        <!-- END layout-wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
