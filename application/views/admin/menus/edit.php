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
                        <h3 class="box-title"><?php echo lang('users_edit_user'); ?></h3>
                    </div>
                    <div class="box-body">
                        <form role="form" action="<?php echo site_url('admin/menus/edit')?>" class="form-horizontal" method="post">
                            <?php echo form_hidden('id', $menu['id']) ?>
                            <div class="box-body">
                                <?php echo message_box(validation_errors(),'danger'); ?>
                                <div class="form-group">
                                    <label for="url" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                    <?php echo form_input(array('name' => 'name','class' => 'form-control', 'value' => set_value('name', isset($menu['name']) ? $menu['name'] : ''))); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="url" class="col-sm-2 control-label">URL</label>
                                    <div class="col-sm-10">
                                        <?php echo form_input(array('name' => 'url','id' => 'url','class' => 'form-control', 'value' => set_value('name', isset($menu['url']) ? $menu['url'] : ''))); ?>
                                    </div>
                                </div>
                                <?php
                                $no_parent_selected = '';
                                if (empty($menu['parent_id'])):
                                    $menu['parent_id'] = 0;
                                    $no_parent_selected = 'selected';
                                endif;

                                ?>
                                <div class="form-group">
                                    <label for="parent" class="col-sm-2 control-label">Parent</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="parent_id">
                                            <option value="" <?php echo $no_parent_selected;?>> -- Choose Parent -- </option>
                                            <?php echo $this->general->multilevel_select($menus,0,array(),$menu['parent_id']);?>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="password_confirm" class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                        <?php echo form_dropdown('status', $status, $menu['status'],array('class' => 'form-control')); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="btn-group">
                                            <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary btn-flat', 'content' => lang('actions_submit'))); ?>
                                            <?php echo form_button(array('type' => 'reset', 'class' => 'btn btn-warning btn-flat', 'content' => lang('actions_reset'))); ?>
                                            <?php echo anchor('admin/menus', lang('actions_cancel'), array('class' => 'btn btn-default btn-flat')); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>