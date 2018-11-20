<?php
/**
 * Created by PhpStorm.
 * User: quanghoa
 * Date: 10/11/2018
 * Time: 22:46
 */
?>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        text-align: center;
        font-family: arial;
    }

    button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    button:hover, a:hover {
        opacity: 0.7;
    }

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
    #img01{
        width: 400px;
    }

    @media only screen and (max-width : 540px)
    {
        .chat-sidebar
        {
            display: none !important;
        }

        .chat-popup
        {
            display: none !important;
        }
    }

    .popup-box
    {
        display: none;
        position: fixed;
        z-index: 9999;
        bottom: 0px;
        right: -200px;
        height: 285px;
        background-color: rgb(237, 239, 244);
        width: 300px;
        border: 1px solid rgba(29, 49, 91, .3);
    }

    .popup-box .popup-head
    {
        background-color: #296dc1;

        padding: 5px;
        color: white;
        font-weight: bold;
        font-size: 14px;
        clear: both;
    }

    .popup-box .popup-head .popup-head-left
    {
        float: left;
    }

    .popup-box .popup-head .popup-head-right
    {
        float: right;
        opacity: 0.5;
    }

    .popup-box .popup-head .popup-head-right a
    {
        text-decoration: none;
        color: inherit;
    }

    .popup-box .popup-messages
    {
        height: 100%;
        overflow-y: scroll;
    }
</style>

<div class="container" style="margin-bottom: 50px;margin-top: 50px ;margin-left: 80px;">
    <div class="row">
        <section class="about-area ptb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 col" >
                        <div class="portfolio-wrap" style="border: gray solid 3px; border-radius: 5px">
                            <!--<div class="overlay" style="opacity: 1">

                                <button class="btn btn-primary" onclick="">Contact</button>
                                <p>The majority have suffered alteration in some form</p>
                            </div>-->
                            <div class="portfolio-img">
                                <img id="myImg" src="<?php echo base_url($upload_path . '/avatar/m_005.png');?>" alt="" />
                            </div>
                        </div>
                        <button class="btn btn-primary" onclick="register_popup(<?php echo "'".$user_login['username']."'"; ?>, <?php echo "'".$user_login['username']."'"; ?>);">Contact</button>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInRight">
                        <div class="about-wrap">
                            <h2>Account information</h2>
                            <ul>
                                <li><span>Username :  </span><?php echo $user_login['firstname'].$user_login['lastname']; ?></li>
                                <li><span>Account type :  </span><?php echo $user_login['type']?></li>
                            </ul>
                        </div>
                        <div class="footer-widget quick-contact" style="color: black">
                            <form action="#">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Full Name" style="color: black !important;border: 1px solid gray;">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email"  style="color: black !important;border: 1px solid gray;">
                                </div>
                                <div class="col-md-12">
                                    <button type="button" name="button" class="btn-style">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<div style="">
            <div class="card col-md-5 col-sm-5 col-xs-12">
                <img id="myImg" src="<?php /*echo base_url($upload_path . '/avatar/m_005.png'); */?>" style="width:100%">
                <h1>John Doe</h1>
                <p class="title">CEO & Founder, Example</p>
                <p>Harvard University</p>
                <div style="margin: 24px 0;">
                    <a href="#" style="font-size: 22px;color: black;"><i class="fa fa-dribbble"></i></a>
                    <a href="#" style="font-size: 22px;color: black;"><i class="fa fa-twitter"></i></a>
                    <a href="#" style="font-size: 22px;color: black;"><i class="fa fa-linkedin"></i></a>
                    <a href="#" style="font-size: 22px;color: black;"><i class="fa fa-facebook"></i></a>
                </div>
                <p><button onclick="register_popup('narayan-prusty', 'Narayan Prusty')">Contact</button></p>
            </div>

            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="progress-wrap">
                    <p>Profile complete</p>
                    <div class="progress">
                        <div class="progress-bar wow slideInLeft" style="width: 90%;">
                            <span class="progress-persent"><span>90%</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal" style="z-index: 9999">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    function collapseMessage() {
        alert('a');
        $(".popup-messages").hide();
    }
</script>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    //this function can remove a array element.
    Array.remove = function(array, from, to) {
        var rest = array.slice((to || from) + 1 || array.length);
        array.length = from < 0 ? array.length + from : from;
        return array.push.apply(array, rest);
    };

    //this variable represents the total number of popups can be displayed according to the viewport width
    var total_popups = 0;

    //arrays of popups ids
    var popups = [];

    //this is used to close a popup
    function close_popup(id)
    {
        for(var iii = 0; iii < popups.length; iii++)
        {
            if(id == popups[iii])
            {
                Array.remove(popups, iii);

                document.getElementById(id).style.display = "none";

                calculate_popups();

                return;
            }
        }
    }

    //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
    function display_popups()
    {
        var right = 220;

        var iii = 0;
        for(iii; iii < total_popups; iii++)
        {
            if(popups[iii] != undefined)
            {
                var element = document.getElementById(popups[iii]);
                element.style.right = right + "px";
                right = right + 320;
                element.style.display = "block";
            }
        }

        for(var jjj = iii; jjj < popups.length; jjj++)
        {
            var element = document.getElementById(popups[jjj]);
            element.style.display = "none";
        }
    }

    //creates markup for a new popup. Adds the id to popups array.
    function register_popup(id, name)
    {
        console.log(id);
        for(var iii = 0; iii < popups.length; iii++)
        {
            //already registered. Bring it to front.
            if(id == popups[iii])
            {
                Array.remove(popups, iii);

                popups.unshift(id);

                calculate_popups();


                return;
            }
        }
        var element = '<div class="popup-box chat-popup panel-collapse collapse in" id="'+ id +'">';
        element = element + '<div class="popup-head">';
        element = element + '<div class="popup-head-left"><span id="hideMessageBox" onclick="collapseMessage()" style="cursor: pointer">'+ name +'</span></div>';
        element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\''+ id +'\');">&#10005;</a></div>';
        element = element + '<div style="clear: both"></div></div><div class="popup-messages">' +
            '<ul class="chat" style="min-height: 200px">' +
            '                    </ul>\n' +
            '                    <div class="chat-box">\n' +
            '                        <form>\n' +
            '                            <div class="input-group">\n' +
            '                                <span class="input-group-addon">\n' +
            '                                    <label class="btn btn-default btn-xs">\n' +
            '                                        <i class="fa fa-file-image-o"></i> <input type="file" id="fileinput" multiple style="display: none;">\n' +
            '                                    </label>\n' +
            '                                </span>\n' +
            '                                <input id="message" type="text" data-emojiable="true" class="form-control border no-shadow no-rounded" placeholder="Type your message here">\n' +
            '                                <span class="input-group-btn">\n' +
            '                                    <button class="btn btn-success no-rounded" id="send" type="submit">Send</button>\n' +
            '                                </span>\n' +
            '                            </div>\n' +
            '                        </form>\n' +
            '                        <div id="reviewImg"></div>\n' +
            '                    </div>' +
            '</div>';

        document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element;

        popups.unshift(id);

        calculate_popups();

    }

    //calculate the total number of popups suitable and then populate the toatal_popups variable.
    function calculate_popups()
    {
        var width = window.innerWidth;
        if(width < 540)
        {
            total_popups = 0;
        }
        else
        {
            width = width - 200;
            //320 is width of a single popup box
            total_popups = parseInt(width/320);
        }

        display_popups();

    }

    //recalculate when window is loaded and also when window is resized.
    window.addEventListener("resize", calculate_popups);
    window.addEventListener("load", calculate_popups);
</script>