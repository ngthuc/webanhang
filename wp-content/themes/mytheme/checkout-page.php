<?php
/*
 * Template Name: Checkout Page
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrumb.php'; ?>

<section id="checkout" class="container main">
    <form id="checkout-form" class="row-fluid">
        <div class="span6 offset1">
            <div class="gap">
                <h4>THÔNG TIN ĐƠN ĐẶT HÀNG</h4>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">
                    Đã chọn giao diện mã số: <?php echo $_GET['tpl_id'] ?>
                </div>
                <div class="span4"><a href="<?php echo home_url() ?>/?page_id=5" title="Đổi giao diện"><i class="icon-pencil"></i> Đổi giao diện</a></div>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">Trọn bộ website bán hàng đầy đủ tính năng</div>
                <div class="span4"><strong>500k / trọn đời</strong></div>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">Hosting băng thông không giới hạn</div>
                <div class="span4"><strong>50k / tháng</strong></div>
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
                <div class="span4"><strong>20k / năm</strong></div>
            </div>
            <div class="row-fluid">
                <div class="span7 offset1">
                    <input type="text" placeholder="Nhập tên miền">
                </div>
                <div class="span4"><a href="#"><i class="icon-search"></i> Kiểm tra tên miền</a></div>
            </div>
            <div class="row-fluid">
                <div class="span1"><i class="icon-check"></i></div>
                <div class="span7">Các dịch vụ khác</div>
                <div class="span4"><a href="#"><i class="icon-arrow-right"></i> Xem báo giá</a></div>
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
                <div class="span6 offset1"><h3>Tổng cộng đơn hàng</h3></div>
                <div class="span5"><h3>500k</h3></div>
            </div>
            <hr>
            <div class="row-fluid">
                <div class="span4 offset1">
                    <input class="btn btn-primary btn-large" type="submit" value="Gửi">
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="gap">
                <h4>THÔNG TIN KHÁCH HÀNG</h4>
            </div>
            <label>Họ tên</label>
            <input type="text" class="input-block-level" required="required" placeholder="Họ tên">
            <label>Số điện thoại</label>
            <input type="text" class="input-block-level" required="required" placeholder="Số điện thoại">
            <label>Địa chỉ</label>
            <input type="text" class="input-block-level" required="required" placeholder="Địa chỉ">
            <label>Email</label>
            <input type="text" class="input-block-level" required="required" placeholder="Email">
            <label>Nội dung</label>
            <textarea rows="10" class="input-block-level" placeholder="Các thông tin hoặc yêu cầu khác"></textarea>
        </div>
    </form>
</section>

<?php get_footer() ?>
