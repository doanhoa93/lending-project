<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="<?php echo $charset; ?>">
    <title><?php echo $title; ?></title>
    <?php if ($mobile === FALSE): ?>
        <!--[if IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <?php endif; ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="google" content="notranslate">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAqElEQVRYR+2WYQ6AIAiF8W7cq7oXd6v5I2eYAw2nbfivYq+vtwcUgB1EPPNbRBR4Tby2qivErYRvaEnPAdyB5AAi7gCwvSUeAA4iis/TkcKl1csBHu3HQXg7KgBUegVA7UW9AJKeA6znQKULoDcDkt46bahdHtZ1Por/54B2xmuz0uwA3wFfd0Y3gDTjhzvgANMdkGb8yAyY/ro1d4H2y7R1DuAOTHfgAn2CtjCe07uwAAAAAElFTkSuQmCC">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,700italic">
    <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/adminlte/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/icheck/css/blue.css'); ?>">
    <?php if ($mobile === FALSE): ?>
        <!--[if lt IE 9]>
        <script src="<?php echo base_url($plugins_dir . '/html5shiv/html5shiv.min.js'); ?>"></script>
        <script src="<?php echo base_url($plugins_dir . '/respond/respond.min.js'); ?>"></script>
        <![endif]-->
    <?php endif; ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Admin</b><?php echo $title_lg; ?></a>
            </div>

            <div class="login-box-body">
                <p class="login-box-msg"><?php echo lang('auth_sign_session'); ?></p>
                <?php echo $message;?>

                <?php echo form_open('auth/login');?>
                    <div class="form-group has-feedback">
                        <?php echo form_input($identity);?>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <?php echo form_input($password);?>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?><?php echo lang('auth_remember_me'); ?>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <?php echo form_submit('submit', lang('auth_login'), array('class' => 'btn btn-primary btn-block btn-flat'));?>
                        </div>
                    </div>
                <?php echo form_close();?>

<?php if ($auth_social_network == TRUE): ?>
                <div class="social-auth-links text-center">
                    <p>- <?php echo lang('auth_or'); ?> -</p>
                    <?php echo anchor('#', '<i class="fa fa-facebook"></i>' . lang('auth_sign_facebook'), array('class' => 'btn btn-block btn-social btn-facebook btn-flat')); ?>
                    <?php echo anchor('#', '<i class="fa fa-google-plus"></i>' . lang('auth_sign_google'), array('class' => 'btn btn-block btn-social btn-google btn-flat')); ?>
                </div>
<?php endif; ?>
<?php if ($forgot_password == TRUE): ?>
                <?php echo anchor('#', lang('auth_forgot_password')); ?><br />
<?php endif; ?>
<?php if ($new_membership == TRUE): ?>
                <?php echo anchor('#', lang('auth_new_member')); ?><br />
<?php endif; ?>
            </div>
</div>

<script src="<?php echo base_url($frameworks_dir . '/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url($frameworks_dir . '/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url($plugins_dir . '/icheck/js/icheck.min.js'); ?>"></script>
<script>
    $(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
    });
</script>
</body>
</html>
