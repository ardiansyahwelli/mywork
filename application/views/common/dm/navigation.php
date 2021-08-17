<!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="<?php echo SITEURL; ?>" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                        </span>
                    </a>

                    <a href="<?php echo SITEURL; ?>" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="<?php echo get_second_site_logo();?>" alt="" height="20">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a <?php if(isset($activemenu) && $activemenu=='dm_dashboard') echo 'class="active-menu"';?> href="<?php echo SITEURL;?>">
                                    <i class="bx bx-home-circle"></i>
                                    <span><?php echo get_languageword('dashboard');?></span>
                                </a>
                            </li>

                            <li>
                                <a <?php if(isset($activemenu) && $activemenu==ACTIVE_ORDERS) echo 'class="active-menu"';?> href="<?php echo URL_DM_ORDERS;?>">
                                    <i class="bx bx-basket"></i>
                                    <span><?php echo get_languageword('orders');?></span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
<script src="<?php echo JS_ADMIN_SIDEBAR_MENU;?>"></script>
<script>
   $.sidebarMenu($('.sidebar-menu'))
</script>