<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">List borrower</h3>
                                </div>
                                <div class="box-body">
                                    <?php echo $this->session->flashdata('message');?>
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo lang('users_firstname');?></th>
                                                <th><?php echo lang('users_lastname');?></th>
                                                <th><?php echo lang('users_email');?></th>
                                                <th><?php echo lang('users_status');?></th>
                                                <th><?php echo lang('users_action');?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(!empty($users)):?>
<?php foreach ($users as $user):?>
                                            <tr>
                                                <td><?php echo $user['first_name']?></td>
                                                <td><?php echo $user['last_name']?></td>
                                                <td><?php echo $user['email']?></td>
                                                <td><?php echo $user['active'] == 1 ? 'Active' : 'Inactive'?></td>
                                                <td>
                                                    <a href="<?php echo site_url('admin/investers/edit/'.$user['id'])?>"><span class="badge bg-green">edit</span></a>
                                                    <a href="<?php echo site_url('admin/investers/delete/'.$user['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
                                                </td>
                                            </tr>
<?php endforeach;?>
<?php endif;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
