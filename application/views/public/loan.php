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
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How to loan now
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Complete step by step to loan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <span>Email</span>
                                <input type="text" placeholder="Email" id="email" name="email">
                                <?php echo form_error('email', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Phone</span>
                                <input type="text" placeholder="Phone" id="phone" name="phone">
                                <?php echo form_error('phone', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>ID number</span>
                                <input type="text" placeholder="ID number" id="idnumber" name="idnumber">
                                <?php echo form_error('idnumber', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Job</span>
                                <input type="text" placeholder="City" id="city" name="city">
                                <?php echo form_error('city', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Sex</span>
                                <div class="col-xs-3">
                                    <span>Male <input type="radio" name="sex" id="sex" value="0" style="width: 20px;height: 20px" <?php  set_value('sex'); ?>"></span>
                                </div>
                                <div class="col-xs-3">
                                    <span>Female<input type="radio" name="sex" id="sex" value="1" <?php  set_value('sex'); ?>" style="width: 20px;height: 20px"></span>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <span>Job</span>
                                <input type="text" placeholder="Job" id="job" name="job">
                                <?php echo form_error('job', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Company name</span>
                                <input type="text" placeholder="Job" id="txtcompany" name="txtcompany">
                                <?php echo form_error('txtcompany', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Company address</span>
                                <input type="text" placeholder="Job" id="txtAddcompany" name="txtAddcompany">
                                <?php echo form_error('txtAddcompany', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Income</span>
                                <input type="text" placeholder="Income" id="income" name="income">
                                <?php echo form_error('income', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Account number / Card number</span>
                                <input type="text" placeholder="Bank Number" id="txtBankNumber" name="txtBankNumber">
                                <?php echo form_error('txtBankNumber', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12">
                                <span>Description</span>
                                <textarea class="contact-textarea" placeholder="Description" id="description" name="description"></textarea>
                                <?php echo form_error('description', '<span class="error">', '</span>'); ?>
                            </div>
                            <div class="col-xs-12" style="margin-bottom: 50px; margin-top: 10px">
                                <span><span id="amount" style="color: red">I need to borrow </span></span>
                                <div id="slider-range-min"></div>
                            </div>
                            <div class="col-xs-12">
                                <!--<input type="checkbox" name="termsof" id="termsof" value="0" style="width: 20px;height: 20px"><span><a href="<?php /*echo site_url('/loan/rules'); */?>" style="color: red">Terms of</a> loan registration</span>-->
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
