<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <aside class="main-sidebar">
                <section class="sidebar">
<?php if ($admin_prefs['user_panel'] == TRUE): ?>
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url($avatar_dir . '/m_001.png'); ?>" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $user_login['firstname'].$user_login['lastname']; ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> <?php echo lang('menu_online'); ?></a>
                        </div>
                    </div>

<?php endif; ?>
<?php if ($admin_prefs['sidebar_form'] == TRUE): ?>
                    <!-- Search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="<?php echo lang('menu_search'); ?>...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>

<?php endif; ?>
                    <!-- Sidebar menu -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('/'); ?>" target="_blank">
                                <i class="fa fa-home text-primary"></i> <span><?php echo lang('menu_access_website'); ?></span>
                            </a>
                        </li>

                        <li class="header text-uppercase"><?php echo lang('menu_main_navigation'); ?></li>
                        <li class="<?=active_link_controller('dashboard')?>">
                            <a href="<?php echo site_url('admin/dashboard'); ?>">
                                <i class="fa fa-dashboard"></i> <span><?php echo lang('menu_dashboard'); ?></span>
                            </a>
                        </li>


                        <li class="header text-uppercase"><?php echo lang('menu_administration'); ?></li>
                        <li class="treeview <?=active_link_controller('customers')?>">
                            <a href="#">
                                <i class="fa fa-users" style="color:#FF5400"></i>
                                <span>Customers</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?=active_link_function('interfaces')?>"><a href="<?php echo site_url('admin/borrowers'); ?>"><span>Borrowers</span></a></li>
                                <li class="<?=active_link_function('interfaces')?>"><a href="<?php echo site_url('admin/investers'); ?>"><span>Investers</span></a></li>
                            </ul>
                        </li>
                        <li class="treeview <?=active_link_controller('users')?>">
                            <a href="#">
                                <i class="fa fa-user" style="color:#125acd"></i>
                                <span><?php echo lang('menu_users'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?=active_link_function('users')?>">
                                    <a href="<?php echo site_url('admin/users'); ?>">
                                        <?php echo lang('menu_users'); ?>
                                    </a>
                                </li>
                                <li class="<?=active_link_function('adduser')?>">
                                    <a href="<?php echo site_url('admin/users/create'); ?>">
                                        Add user
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview <?=active_link_controller('groups')?>">
                            <a href="#">
                                <i class="fa fa-shield" style="color:#1b926c"></i>
                                <span><?php echo lang('menu_security_groups'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?=active_link_function('groups')?>">
                                    <a href="<?php echo site_url('admin/groups'); ?>">
                                        <?php echo lang('menu_security_groups'); ?>
                                    </a>
                                </li>
                                <li class="<?=active_link_function('addsecuritygroup')?>">
                                    <a href="<?php echo site_url('admin/groups/create'); ?>">
                                        Add security group
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview <?=active_link_controller('loans')?>">
                            <a href="#" class="has-ul legitRipple">
                                <i class="fa fa-money" style="color:#4EA216"></i>
                                <span>Loans</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo site_url('admin/loans'); ?>" class="legitRipple">
                                        <i class="fa fa-circle-o"></i> View All Loans
                                        <span class="pull-right-container">
                                            <span class="label label-info pull-right">4</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('admin/loans/create'); ?>" class="legitRipple">
                                        <i class="fa fa-circle-o"></i> Pending Approval
                                        <span class="pull-right-container">
                                        <span class="label label-warning pull-right">0</span>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Awaiting Disbursement
                                        <span class="pull-right-container">
                                        <span class="label label-success pull-right">2</span>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Loans Declined
                                        <span class="pull-right-container">
                                        <span class="label label-danger pull-right">0</span>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Loans Withdrawn
                                        <span class="pull-right-container">
                                        <span class="label label-danger pull-right">0</span>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Loans Written Off
                                        <span class="pull-right-container">
                                        <span class="label label-danger pull-right">0</span>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="d" class="legitRipple"><i class="fa fa-circle-o"></i> Loans Closed
                                        <span class="pull-right-container">
                                        <span class="label label-success pull-right">0</span>
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Add Loan</a>
                                </li>
                                <!--<li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Manage Loan Products</a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Manage  Charges</a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Manage Disbursed By</a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Manage Repayment Methods</a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> Manage Provision Rates</a>
                                </li>
                                <li>
                                    <a href="" class="legitRipple"><i class="fa fa-circle-o"></i> View Guarantors</a>
                                </li>-->
                            </ul>
                        </li>
                        <li class="<?=active_link_controller('messages')?>">
                            <a href="<?php echo site_url('admin/messages'); ?>">
                                <i class="fa fa-envelope" style="color:#4EA216"></i> <span>Messages</span>
                            </a>
                        </li>
                        <li class="<?=active_link_controller('menus')?>">
                            <a href="<?php echo site_url('admin/menus'); ?>">
                                <i class="fa fa-tasks" style="color:blue"></i> <span>Menus</span>
                            </a>
                        </li>
                        <li class="treeview <?=active_link_controller('prefs')?>">
                            <a href="#">
                                <i class="fa fa-cogs" style="color:violet"></i>
                                <span><?php echo lang('menu_preferences'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?=active_link_function('interfaces')?>"><a href="<?php echo site_url('admin/prefs/interfaces/admin'); ?>"><?php echo lang('menu_interfaces'); ?></a></li>
                            </ul>
                        </li>

                        <li class="<?=active_link_controller('database')?>">
                            <a href="<?php echo site_url('admin/database'); ?>">
                                <i class="fa fa-database" style="color:yellow"></i> <span><?php echo lang('menu_database_utility'); ?></span>
                            </a>
                        </li>
                        <li class="header text-uppercase"><?php echo $title; ?></li>
                        <li class="treeview <?=active_link_controller('resources')?>">
                            <a href="#">
                                <i class="fa fa-cogs" style="color:#2B9EC4"></i>
                                <span><?php echo lang('menu_resources'); ?></span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="<?=active_link_function('resources')?>">
                                    <a href="<?php echo site_url('admin/resources'); ?>">
                                        <?php echo lang('menu_resources'); ?>
                                    </a>
                                </li>
                                <li class="<?=active_link_function('addresource')?>">
                                    <a href="<?php echo site_url('admin/resources/add'); ?>">
                                        Add resource
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="<?=active_link_controller('files')?>">
                            <a href="<?php echo site_url('admin/files'); ?>">
                                <i class="fa fa-file" style="color:#1b926c"></i> <span><?php echo lang('menu_files'); ?></span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
