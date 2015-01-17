<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>Iziweb</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i> Địa chỉ: P1603, chung cư A2, ngõ 229 phố Vọng,
                        Hai Bà Trưng, Hà Nội
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        Email: iziweb@gmail.com
                    </li>
                    <li>
                        <i class="icon-phone-sign"></i>
                        Điện thoại: 01695.959.890
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        Hot line: 01695.959.890
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>Hỗ trợ</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="<?= home_url() ?>/?page_id=27">Giới thiệu</a></li>
                        <li><a href="<?= home_url() ?>/?page_id=7">Tính năng</a></li>
                        <li><a href="<?= home_url() ?>/?page_id=29">Hỗ trợ</a></li>
                        <li><a href="<?= home_url() ?>/?page_id=31">Điều khoản sử dụng</a></li>
                        <li><a href="<?= home_url() ?>/?cat=2">Tuyển dụng</a></li>
                        <li><a href="<?= home_url() ?>/?page_id=9">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <!--Important Links-->

            <!--Archives-->
            <div id="archives" class="span3">
                <h4>Cộng đồng</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="<?= home_url() ?>/?cat=3">Tin tức thị trường</a></li>
                        <li><a href="<?= home_url() ?>/?cat=4">Bí quyết kinh doanh</a></li>
                        <li><a href="<?= home_url() ?>/?cat=5">Chia sẻ kinh nghiệm</a></li>
                        <li><a href="<?= home_url() ?>/?page_id=33">Hướng dẫn sử dụng admin</a></li>
                        <li><a href="<?= home_url() ?>/?cat=6">Tìm hiểu marketing online</a></li>
                        <li><a href="<?= home_url() ?>">Báo chí nói về iziweb</a></li>
                    </ul>
                </div>
            </div>
            <!--End Archives-->

            <div class="span3">
                <h4>Về AllBlue</h4>
                <div class="row-fluid first">
                    <ul class="unstyled address">
                        <li>
                            <i class="icon-star"></i> Iziweb - Bán hàng online thật dễ là một sản phẩm của AllBlue. Tham khảo website của chúng tôi:
                            <a href="http://allblueviet.com">http://allblueviet.com</a>.
                        </li>
                        <li>
                            <i class="icon-shield"></i> "Giương buồm ra khơi tìm kiếm sự tự do và kho báu"
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2014 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">AllBlue</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->

<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <?php if(!is_user_logged_in()){ ?>
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="<?php echo home_url() ?>/wp-login.php" method="post" id="form-login">
            <input type="text" id="username" name="log" class="input-small" placeholder="Username">
            <input type="password" id="password" name="pwd" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" name="wp-submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <?php }else{ ?>
    <?php $curr_user = wp_get_current_user(); //echo '<pre>';print_r($curr_user->data->user_nicename); echo '</pre>'; ?>
    <!--/Modal Body-->
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Profile User</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="" method="post" id="form-login" style="position: relative">
            <?php echo get_avatar($curr_user->ID); ?>
            <label>Tài khoản: <?php echo $curr_user->data->user_nicename ?></label>
            <a style="position: absolute;top:0;right:0" href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-primary">Log out</a>
        </form>
        
    </div>
    <?php } ?>
</div>
<!--  /Login form -->

<script src="<?= bloginfo('template_directory') ?>/js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?= bloginfo('template_directory') ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?= bloginfo('template_directory') ?>/js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?= bloginfo('template_directory') ?>/js/jquery.ba-cond.min.js"></script>
<script src="<?= bloginfo('template_directory') ?>/js/jquery.countdown.js"></script>
<script src="<?= bloginfo('template_directory') ?>/js/slider.js"></script>
<!-- /Required javascript files for Slider -->

<!--- count down --->
<script>
    $(document).ready(function() {
        $("#clock").countdown("2015/02/18 12:00:00", function(event) {
            var $this = $(this).html(event.strftime(
                '<li class="day-wrapper"><p>%D</p><p>Ngày</p></li>'
                    + '<li class="hour-wrapper"><p>%H</p><p>Giờ</p></li>'
                    + '<li class="minute-wrapper"><p>%M</p><p>Phút</p></li>'
                    + '<li class="second-wrapper"><p>%S</p><p>Giây</p></li>'));
        });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>