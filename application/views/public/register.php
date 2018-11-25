<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 22/09/2018
 * Time: 16:50
 */
?>
<!-- breadcumb-area start -->
<style>
    .error {
        color: red;
    }
</style>
<div class="breadcumb-area black-opacity bg-img-6">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>Register now</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                        <li>/</li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<div class="faq-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="faq-wrap">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Register infomation
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Sign up now to join start loan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="faq-form form-style">
                    <div class="cf-msg"></div>
                    <div class="box box-primary">
                        <?php /*echo $message;*/?>
                        <form action="<?php echo site_url('register/process');?>" method="post">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span>First name</span>
                                    <input type="text" placeholder="First name" id="first_name" name="first_name" value="<?php  set_value('first_name'); ?>" >
                                    <?php echo form_error('first_name', '<span class="error">', '</span>'); ?>
                                </div>
                                <div class="col-xs-12">
                                    <span>Last name</span>
                                    <input type="text" placeholder="Last name" id="last_name" name="last_name" value="<?php  set_value('last_name'); ?>" >
                                    <?php echo form_error('last_name', '<span class="error">', '</span>'); ?>
                                </div>
                                <div class="col-xs-12">
                                    <span>Email</span>
                                    <input type="text" placeholder="Email" id="email" name="email" value="<?php  set_value('email'); ?>">
                                    <?php echo form_error('email', '<span class="error">', '</span>'); ?>
                                </div>
                                <div class="col-xs-12">
                                    <span>Phone</span>
                                    <input type="text" placeholder="Phone" id="phone" name="phone" <?php  set_value('phone'); ?>">
                                    <?php echo form_error('email', '<span class="error">', '</span>'); ?>
                                </div>
                                <div class="col-xs-12">
                                    <span>Password</span>
                                    <input type="password" placeholder="Password" id="password" name="password" <?php  set_value('password'); ?>">
                                    <?php echo form_error('password', '<span class="error">', '</span>'); ?>
                                </div>
                                <div class="col-xs-12">
                                    <span>Password confirm</span>
                                    <input type="password" placeholder="Password confirm" id="password_confirm" name="password_confirm" <?php  set_value('password_confirm'); ?>">
                                    <?php echo form_error('password_confirm', '<span class="error">', '</span>'); ?>
                                </div>
                                <div class="col-xs-12">
                                    <span>Bạn cần:</span>
                                    <div class="col-xs-3">
                                        <span>Vay <input type="radio" name="usertype" id="usertype" value="0" style="width: 20px;height: 20px" <?php  set_value('usertype'); ?>"></span>
                                    </div>
                                    <div class="col-xs-3">
                                        <span>Cho vay <input type="radio" name="usertype" id="usertype" value="1" <?php  set_value('usertype'); ?>" style="width: 20px;height: 20px"></span>
                                    </div>
                                </div>

                                <div class="col-xs-12">
                                    <button type="submit" class="cont-submit btn-contact btn-style" name="submit">Questions</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
