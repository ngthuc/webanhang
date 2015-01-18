<?php
/*
 * Template Name: Feature Demo Page
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrumb.php'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content() ?>
<?php endwhile; ?>
<?php endif; ?>

<section class="main-info">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <h4>CƠ HỘI DUY NHẤT ĐỂ TĂNG DOANH SỐ BÁN HÀNG DỊP TRƯỚC TẾT</h4>
                <p class="no-margin">Chỉ với 500k, có ngay website bán hàng chất lượng và đầy đủ chức năng. Đừng bỏ lỡ cơ hội này!</p>
            </div>
            <div class="span3">
                <a class="btn btn-success btn-large pull-right" href="<?= home_url() ?>/?page_id=11">Đăng ký ngay</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
