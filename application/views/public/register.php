<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 22/09/2018
 * Time: 16:50
 */
?>
<!-- breadcumb-area start -->
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
                                        General Inquiries
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Keep away from people who try to belittle your ambitions. Small peol always do that. Keep away from ast people who try to belittle your ambitions. Small peol always do that. Keep away from people who try to ast belittle your ambitions. Small peol always do that.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="faq-form form-style">
                    <div class="cf-msg">dsdsd</div>
                    <form action="<?php echo site_url('register'); ?>" method="post" id="cf">
                        <div class="row">
                            <div class="col-xs-12">
                                <span>Name</span>
                                <input type="text" placeholder="Name" id="fname" name="fname">
                            </div>
                            <div class="col-xs-12">
                                <span>Email</span>
                                <input type="text" placeholder="Email" id="email1" name="email1" value="<?php echo $email1;?>">
                            </div>
                            <div class="col-xs-12">
                                <span>Password</span>
                                <input type="password" placeholder="Password" id="password" name="password">
                            </div>
                            <div class="col-xs-12">
                                <span>Re-Password</span>
                                <input type="password" placeholder="Re-Password" id="repassword" name="repassword">
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="cont-submit btn-contact btn-style" >Questions</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
