<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ĐỊA CHỈ</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Địa chỉ:</strong> P1603 chung cư A2 ngõ 229<br> phố Vọng,
                        Hai Bà Trưng, Hà Nội
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> iziweb@gmail.com
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> www.webanhang.net
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Hot line: 01695.959.890</strong>
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
                        <li><a href="<?= home_url() ?>/?page_id=29">Hỗ trợ</a></li>
                        <li><a href="<?= home_url() ?>/?page_id=31">Điều khoản sử dụng</a></li>
                        <li><a href="<?= home_url() ?>/?cat=1">Tin tức</a></li>
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
                <h4>FLICKR GALLERY</h4>
                <div class="row-fluid first">
                    <ul class="thumbnails">
                        <li class="span3">

                        </li>
                        <li class="span3">

                        </li>
                        <li class="span3">

                        </li>
                        <li class="span3">

                        </li>
                    </ul>
                </div>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">

                        </li>
                        <li class="span3">

                        </li>
                        <li class="span3">

                        </li>
                        <li class="span3">

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
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
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

<?php wp_footer(); ?>
</body>
</html>