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
                    <h2>Need a loan</h2>
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
                    <form action="<?php echo site_url('borrower/loan'); ?>" method="post">
                        <div class="row">
                            <div class="col-xs-12">
                                <span>Full name</span>
                                <input type="text" placeholder="Full name" id="fullname" name="fullname">
                                <?php echo form_error('fullname', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>City</span>
                                <input type="text" placeholder="City" id="city" name="city">
                                <?php echo form_error('city', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Description</span>
                                <textarea class="contact-textarea" placeholder="Description" id="description" name="description"></textarea>
                                <?php echo form_error('description', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12" style="margin-bottom: 10px; margin-top: 10px">
                                <span><span id="amount" style="color: red">I need to borrow </span></span>
                                <div id="slider-range-min"></div>
                            </div>
                            <div class="col-xs-12">
                                <input type="checkbox" name="termsof" id="termsof" value="0" style="width: 20px;height: 20px"><span><a href="<?php echo site_url('/loan/rules'); ?>" style="color: red">Terms of</a> loan registration</span>
                            </div>
                            <div class="col-xs-12">
                                <button id="submit" class="cont-submit btn-contact btn-style" name="submit">Loan right away</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
