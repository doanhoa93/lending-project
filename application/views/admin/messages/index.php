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

                                <div class="box-body">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th><?php echo lang('user_sent');?></th>
                                            <th><?php echo lang('user_receive');?></th>
                                            <th><?php echo lang('avatar');?></th>
                                            <th><?php echo lang('message');?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(!empty($messages)):?>
                                            <?php foreach ($messages as $message):?>
                                                <tr>
                                                    <td><?php echo $message['user_sent']?></td>
                                                    <td><?php echo $message['user_receive']?></td>
                                                    <td><?php echo $message['avatar']?></td>
                                                    <td><?php echo $message['message']?></td>
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
