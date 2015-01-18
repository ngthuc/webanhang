<?php
/* 
    Template Name: Contact Page
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrumb.php'; ?>

<!--script google map-->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var myLatlng = new google.maps.LatLng(20.99549,105.844354);
        var mapOptions = {
            zoom: 16,
            center: myLatlng
        };

        var map = new google.maps.Map(document.getElementById('footer-maps'), mapOptions);

        var contentString = '<p class="location">P1603 chung cư A2, ngõ 229 phố Vọng,<br /> Hai Bà Trưng, Hà Nội</p>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            width: 200
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Allblue Team'
        });
        infowindow.open(map, marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php wp_register(); ?>
<section class="no-margin" style="margin-top: 50px">
    <div class="container">
        <div style="width: 100%; height: 370px" id="footer-maps">

        </div>
    </div>
</section>

<section id="contact-page" class="container">
    <div class="row-fluid">

        <div class="span8">
            <h4>Gửi liên hệ cho chúng tôi</h4>
            <div class="status alert alert-success" style="display: none"></div>

            <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="">
                <div class="row-fluid">
                    <div class="span5">
                        <label>Họ tên</label>
                        <input name="contact-name" type="text" class="input-block-level" required="required" placeholder="Họ tên">
                        <label>SĐT</label>
                        <input name="contact-phone" type="text" class="input-block-level" required="required" placeholder="Số điện thoại">
                        <label>Địa chỉ</label>
                        <input name="contact-address" type="text" class="input-block-level" required="required" placeholder="Địa chỉ">
                        <label>Email</label>
                        <input name="contact-email" type="text" class="input-block-level" required="required" placeholder="Email">
                    </div>
                    <div class="span7">
                        <label>Nội dung liên hệ</label>
                        <textarea name="contact-content" id="message" required="required" class="input-block-level" rows="12"></textarea>
                        <p style="margin-top: 40px"><input name="contact-submit" type="submit" class="btn btn-primary btn-large pull-right" value="Gửi" /></p>
                    </div>
                </div>
                <p></p>
            </form>
        </div>

        <div class="span4">
            <h4>Iziweb</h4>
            <p>Iziweb là một sản phẩm của <a href="http://allblueviet.com">AllBlue</a></p>
            <p>AllBlue là đơn vị chuyên nghiệp về thiết kế website, thiết kế đồ họa, các dịch vụ SEO từ khóa,
            quản trị nội dung, marketing online. Với mong muốn đem đến các giải pháp bán hàng online
            dễ dàng nhất, tiết kiệm nhất, chúng tôi đang cố gắng từng ngày xây dựng và hoàn thiện Iziweb
            trở thành một dịch vụ chất lượng hơn nữa.</p>
            <p>
                <i class="icon-map-marker pull-left"></i> P1063 chung cư A2, ngõ 229<br>
                phố Vọng, Đồng Tâm, Hai Bà Trưng, Hà Nội
            </p>
            <p>
                <i class="icon-envelope"></i> contact.iziweb@gmail.com
            </p>
            <p>
                <i class="icon-phone"></i> 01695.959.890
            </p>
            <p>
                <i class="icon-globe"></i> <a href="http://allblueviet.com">http://allblueviet.com</a>
            </p>
        </div>

    </div>

</section>

<?php get_footer(); ?>