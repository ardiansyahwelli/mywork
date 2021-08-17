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
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bx-home-circle"></i>
                                    <span><?php echo get_languageword('dashboard');?></span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-basket"></i>
                                    <span><?php echo get_languageword('orders');?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo URL_ORDERS_INDEX.'new';?>"><?php echo get_languageword('new_orders');?></a></li>
                                    <li><a href="<?php echo URL_ORDERS_INDEX.'process';?>"><?php echo get_languageword('under_process_orders');?></a></li>
                                    <li><a href="<?php echo URL_ORDERS_INDEX.'out_to_deliver';?>"><?php echo get_languageword('out_to_deliver_orders');?></a></li>
                                    <li><a href="<?php echo URL_ORDERS_INDEX.'delivered';?>"><?php echo get_languageword('delivered_orders');?></a></li>
                                    <li><a href="<?php echo URL_ORDERS_INDEX.'cancelled';?>"><?php echo get_languageword('cancelled_orders');?></a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-printer"></i>
                                    <span><?php echo get_languageword('report');?></span>
                                </a>
                            </li>

                            <li class="menu-title">Accounting</li>

                             <li>
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-bank"></i>
                                    <span>Cash & Bank</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-bookmarks"></i>
                                    <span>Sales</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Sales Orders</a></li>
                                    <li><a href="email-inbox.html">Sales Delivery</a></li>
                                    <li><a href="email-inbox.html">Sales Qoute</a></li>
                                    <li><a href="email-inbox.html">Sales Invoices</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bxs-cart"></i>
                                    <span>Purchases</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="invoices-list.html">Purchases Orders</a></li>
                                    <li><a href="email-inbox.html">Purchases Delivery</a></li>
                                    <li><a href="email-inbox.html">Purchases Qoute</a></li>
                                    <li><a href="invoices-list.html">Purchases Invoices</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-bank"></i>
                                    <span><?php echo get_languageword('expenses');?></span>
                                </a>
                            </li>

                            <li class="menu-title">Inventory</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-user"></i>
                                    <span>Contacts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo URL_CUSTOMERS_INDEX;?>"><?php echo get_languageword('customers');?></a></li>
                                    <li><a href="auth-login.html">Supplier</a></li>
                                    <li><a href="auth-login.html">Employee</a></li>
                                    <li><a href="auth-login.html">Vendor</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-package"></i>
                                    <span>Products</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo URL_MENU_INDEX;?>"><?php echo get_languageword('menu');?></a></li>
                                    <li><a href="<?php echo URL_ITEMS_INDEX;?>"><?php echo get_languageword('items');?></a></li>
                                    <li><a href="<?php echo URL_ADDONS_INDEX;?>"><?php echo get_languageword('addons');?></a></li>
                                    <li><a href="<?php echo URL_OPTIONS_INDEX;?>"><?php echo get_languageword('options');?></a></li>
                                    <li><a href="<?php echo URL_ITEM_TYPES_INDEX;?>"><?php echo get_languageword('item_types');?></a></li>
                                    <li><a href="<?php echo URL_OFFERS_INDEX;?>"><?php echo get_languageword('offers');?></a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-archive"></i>
                                    <span>Assets Managements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="#">Pending Assets</a></li>
                                    <li><a href="#">Active Assets</a></li>
                                    <li><a href="#">Sold & Disposed</a></li>
                                    <li><a href="#">Depreciation</a></li>
                                </ul>
                            </li>

                             <li>
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-file"></i>
                                    <span><?php echo get_languageword('Chart of Accounts');?></span>
                                </a>
                            </li>

                            <li class="menu-title">Employees</li>

                            <li>
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bx-clipboard"></i>
                                    <span><?php echo get_languageword('Tax Managements');?></span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bxs-user-rectangle"></i>
                                    <span><?php echo get_languageword('Payroll');?></span>
                                </a>
                            </li>

                            <li class="menu-title">Website Settings</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-customize"></i>
                                    <span>Master Settings</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Site Settings</a></li>
                                    <li><a href="ui-alerts.html">Email Settings</a></li>
                                    <li><a href="ui-alerts.html">Email Templates</a></li>
                                    <li><a href="ui-alerts.html">Payments Settings</a></li>
                                    <li><a href="ui-alerts.html">Social Networks</a></li>
                                    <li><a href="ui-alerts.html">SEO Settings</a></li>
                                    <li><a href="ui-alerts.html">SMS Gateways</a></li>
                                    <li><a href="ui-alerts.html">SMS Templates</a></li>
                                    <li><a href="ui-alerts.html">Users Settings</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo SITEURL;?>">
                                    <i class="bx bx-brush"></i>
                                    <span><?php echo get_languageword('Page Settings');?></span>
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