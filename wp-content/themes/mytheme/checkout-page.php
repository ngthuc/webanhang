<?php
/*
 * Template Name: Checkout Page
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrumb.php'; ?>

<section id="checkout" class="container main">
    <form id="checkout-form" method="post" action="" class="row-fluid">
        <div class="span7">
            <div class="gap">
                <h4>THÔNG TIN ĐƠN ĐẶT HÀNG</h4>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">
                    <?php if (isset($_GET['tpl_id'])): ?>
                        Đã chọn giao diện mã số:
                         <?= $_GET['tpl_id']; ?>
                        <input type="hidden" name="order-product-id" value="<?= $_GET['tpl_id']; ?>">
                    <?php else: ?>
                        Bạn chưa chọn giao diện nào
                        <a href="<?= home_url() ?>/?page_id=5">Chọn giao diện</a>
                    <?php endif; ?>
                </div>
                <div class="span3"><strong>Miễn phí</strong></div>
                <div class="span1"><a href="<?php echo home_url() ?>/?page_id=5" title="Đổi giao diện"><i class="icon-pencil"></i></a></div>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">Trọn bộ website bán hàng đầy đủ tính năng</div>
                <div class="span3"><strong>500k / trọn đời</strong></div>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">Hosting băng thông không giới hạn</div>
                <div class="span3"><strong>30k / tháng</strong></div>
                <div class="span1"><a href="<?= home_url() ?>/?page_id=15" title="Xem bảng giá"><i class="icon-list"></i></a></div>
            </div>
            <div class="row-fluid">
                <div class="span8 offset1">
                    <select>
                        <option>Không, cảm ơn!</option>
                        <option>Basic</option>
                        <option>Professional</option>
                    </select>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">Tên miền quốc tế</div>
                <div class="span3"><strong>20k / năm</strong></div>
                <div class="span1"><a href="<?= home_url() ?>/?page_id=17" title="Kiểm tra tên miền"><i class="icon-search"></i></a></div>
            </div>
            <div class="row-fluid">
                <div class="span7 offset1">
                    <input type="text" placeholder="Nhập tên miền mong muốn">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">Các dịch vụ khác</div>
                <div class="span3"><strong>Tùy yêu cầu</strong></div>
            </div>
            <div class="row-fluid">
                <div class="span8 offset1">
                    <p><input type="checkbox"> Thiết kế logo, banner, poster sự kiện</p>
                    <p><input type="checkbox"> Quản trị nội dung</p>
                    <p><input type="checkbox"> SEO từ khóa</p>
                    <p><input type="checkbox"> Quảng cáo Google Adwords</p>
                    <p><input type="checkbox"> Quảng cáo Facebook</p>
                </div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span7 offset1"><h4>Tổng cộng đơn hàng</h4></div>
                <div class="span3"><h4>500k</h4></div>
                <div class="span1" style="font-weight: bold; color: red">*</div>
            </div>
            <hr>
            <div class="row-fluid gap">
                <div class="span4 offset1">
                    <input name="order-submit" class="btn btn-primary btn-large" type="submit" value="Gửi">
                </div>
            </div>
            <div class="row-fluid">
                <div class="span11 offset1" style="font-size: 13px">
                    <span style="color: red">*</span> Các dịch vụ đi kèm là tùy chọn. Mặc định chỉ với <strong>500k</strong> bạn đã có ngay một website bán hàng
                    đầy đủ tính năng. Báo giá trên chưa bao gồm chi phí cho các dịch vụ Thiết kế đồ họa, Quản trị nội dung ... Nếu bạn
                    đăng ký các dịch vụ này vui lòng ghi rõ yêu cầu ở form liên hệ bên cạnh. Mức giá tùy theo số lượng và yêu cầu của bạn.
                    Iziweb cam kết chất lượng tốt và mức giá cực kỳ ưu đãi cho khách hàng.
                </div>
            </div>
        </div>
        <div class="span5">
            <div class="gap">
                <h4>THÔNG TIN KHÁCH HÀNG</h4>
            </div>
            <label>Họ tên</label>
            <input name="order-name" type="text" class="input-block-level" required="required" placeholder="Họ tên">
            <label>Số điện thoại</label>
            <input name="order-phone" type="text" class="input-block-level" required="required" placeholder="Số điện thoại">
            <label>Địa chỉ</label>
            <input name="order-address" type="text" class="input-block-level" required="required" placeholder="Địa chỉ">
            <label>Email</label>
            <input name="order-email" type="text" class="input-block-level" required="required" placeholder="Email">
            <label>Nội dung</label>
            <textarea name="order-content" id="message" rows="10" class="input-block-level" placeholder="Các thông tin hoặc yêu cầu khác"></textarea>
        </div>
    </form>
</section>

<?php get_footer() ?>
