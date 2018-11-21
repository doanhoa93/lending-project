<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 19/11/2018
 * Time: 22:32
 */
?>
<div class="breadcumb-area black-opacity bg-img-6" style="max-height: 200px">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap">
                    <h2>User profile</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- breadcumb-area end -->
<div class="faq-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="faq-wrap">
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <div class="faq-form form-style">
                    <div class="cf-msg"></div>
                    <form action="mail.php" method="post" id="cf">
                        <div class="row">
                            <div class="col-xs-12">
                                <span>Description</span>
                                <textarea class="contact-textarea" placeholder="Questions" id="msg" name="msg"></textarea>
                            </div>
                            <div class="col-xs-12">

                                <input type="text" placeholder="Subject" id="subject" name="subject">
                            </div>
                            <div class="col-xs-12" style="margin-bottom: 50px">
                                <span><span id="amount" style="color: red">I need to borrow </span></span>
                                <div id="slider-range-min"></div>
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
