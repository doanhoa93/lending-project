<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 07/11/2018
 * Time: 21:00
 */
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Emoji Data -->
<link href="//onesignal.github.io/emoji-picker/lib/css/emoji.css" rel="stylesheet">
<!-- chat_realtime -->
<script src="<?php echo base_url($frameworks_dir . '/assets/css/chat_realtime.css'); ?>"></script>
<link href="" rel="stylesheet">
<div class="container">
    <div id="chat-realtime">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" id="login">
                <div class="login">
                    <form id="loginform">
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input class="form-control border no-shadow no-rounded" id="username" placeholder="username" >
                        </div>
                        <div class="input-group">
                            <input style="display: none" class="form-control border no-shadow no-rounded" id="avatar" placeholder="http://img.com/anu.jpg" value="http://3.bp.blogspot.com/-c8O1QI1Ty24/UikpRn-WYLI/AAAAAAAAJ0Y/hCd3SVMejGQ/s1600/1cc767a412f68bc6ff6f26b526c4ecfd.jpeg" required>
                            <button class="btn btn-primary no-rounded" type="submit">Login</button>
                        </div>
                    </form>
                    <div id="status">
                    </div>
                </div>
            </div>
            <!-- selected chat -->
            <div class="col-md-12" id="main">
                <h3><img id="avatarlogin" src=""/> <span id="userlogin"></span><a href="#" style="float: right" id="logout" class="btn btn-danger no-rounded">Logout</a></h3>
                <div class="col-md-4 bg-white">
                    <h4>Users</h4>
                    <!-- users list -->
                    <ul class="users-list">
                    </ul>
                    <h4>Rooms</h4>
                    <ul class="public-list">
                        <li id="public" class="user bounceInDown active" data-tipe="rooms">
                            <a href="#" class="clearfix">
                                <img src="" alt="" class="img-circle">
                                <div class="public-name">
                                    <strong></strong>
                                </div>
                                <div class="last-message msg">
                                    Write something..
                                </div>
                                <small class="time text-muted">Just now</small>
                                <small class="chat-alert label label-primary">0</small>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- rooms list -->
                <div class="col-md-8">
                    <ul class="chat">
                    </ul>
                    <div class="chat-box">
                        <form>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="btn btn-default btn-xs">
                                        <i class="fa fa-file-image-o"></i> <input type="file" id="fileinput" multiple style="display: none;">
                                    </label>
                                </span>
                                <input id="message" type="text" data-emojiable="true" class="form-control border no-shadow no-rounded" placeholder="Type your message here">
                                <span class="input-group-btn">
                                    <button class="btn btn-success no-rounded" id="send" type="submit">Send</button>
                                </span>
                            </div>
                        </form>
                        <div id="reviewImg"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <p align="center">
                    © <a href="http://bachors.com">Bachors.com</a> 2016-2017. Made with <span class="fa fa-heartbeat" style="color:#f66767"></span> in Garut, Indonesia.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Firebase -->
<script src="//www.gstatic.com/firebasejs/3.9.0/firebase.js"></script>
<script src="//www.gstatic.com/firebasejs/3.9.0/firebase-app.js"></script>
<script src="//www.gstatic.com/firebasejs/3.9.0/firebase-database.js"></script>
<!-- jQuerya -->
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!-- emoji-picker -->
<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/config.js"></script>
<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/util.js"></script>
<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/jquery.emojiarea.js"></script>
<script type="text/javascript" src="//onesignal.github.io/emoji-picker/lib/js/emoji-picker.js"></script>
<!-- chat_realtime -->
<script src="<?php echo base_url($frameworks_dir . '/assets/js/config.js'); ?>"></script>
<script src="<?php echo base_url($frameworks_dir . '/assets/js/chat_realtime.js'); ?>"></script>

<!--<script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url:url,
            type:'POST',
            data : {
                type : 'adsdgf'
            },
            dataType: 'json',
            success: function(reponse) {
                alert(reponse);
            },
            error: function() {
                console.log('Error!');
            }
        });
    })
</script>-->
<script>
    $(function(){
        var url = "chat/messages";
        var userlogin = false;
        $.ajax({
            url : url,
            data: {
                type : 'cek'
            },
            type: "post",
            crossDomain: true,
            dataType: 'json',
            success: function(a) {
                $('#login').hide();
                if (a.status == 'success') {
                    alert('status');
                }
            }
        });
        window.emojiPicker = new EmojiPicker({
            emojiable_selector: '[data-emojiable=true]',
            assetsPath: '//onesignal.github.io/emoji-picker/lib/img/',
            popupButtonClasses: 'fa fa-smile-o'
        });
        window.emojiPicker.discover();

    });
</script>
