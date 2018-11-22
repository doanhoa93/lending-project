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
                    <form action="mail.php" method="post" id="cf">
                        <div class="row">
                            <div class="col-xs-12">
                                <span>First name</span>
                                <input type="text" placeholder="First name" id="fname" name="fname">
                            </div>
                            <div class="col-xs-12">
                                <span>Last name</span>
                                <input type="text" placeholder="Last name" id="lname" name="lname">
                            </div>
                            <div class="col-xs-12">
                                <span>Email</span>
                                <input type="text" placeholder="Email" id="email" name="email">
                            </div>
                            <div class="col-xs-12">
                                <span>Phone</span>
                                <input type="text" placeholder="Phone" id="phone" name="phone">
                            </div>
                            <div class="col-xs-12">
                                <span>Password</span>
                                <input type="password" placeholder="Password" id="password" name="password">
                            </div>
                            <div class="col-xs-12">
                                <span>Password confirm</span>
                                <input type="password" placeholder="Password confirm" id="passwordconfirm" name="passwordconfirm">
                            </div>
                            <div class="col-xs-12">
                                <span>Bạn cần:</span>
                                <div class="col-xs-3">
                                    <span>Vay <input type="radio" name="typeUser" style="width: 20px;height: 20px"></span>
                                </div>
                                <div class="col-xs-3">
                                     <span>Cho vay <input type="radio" name="typeUser" style="width: 20px;height: 20px"></span>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <button id="submit" class="cont-submit btn-contact btn-style" name="submit">Questions</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
