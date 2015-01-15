<?php
/*
 * Template Name: Template Store Page
 */
?>

<?php get_header() ?>
<?php include_once 'inc/breadcrumb.php'; ?>

<section id="portfolio" class="container main">
    <div class="gap center">
        <h4>HƠN 800 MẪU GIAO DIỆN MỚI ĐƯỢC CẬP NHẬT LIÊN TỤC</h4>
        <p class="no-margin">Chọn ngay website cho bạn, bán hàng thật là dễ!</p>
    </div>


    <ul class="gallery col-4">
        <?php query_posts(array('post_type' => 'template')); ?>
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <!--Item -->
        <li>
            <div class="preview">
                <?php the_post_thumbnail() ?>
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-1" title="Xem giao diện"><i class="icon-eye-open"></i></a><a href="<?php echo home_url() ?>/?page_id=11&tpl_id=THM-<?php echo get_the_ID() ?>" title="Đặt mua ngay"><i class="icon-shopping-cart"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5><?php the_title() ?></h5>
                <small>Mã số giao diện: THM-<?php echo get_the_ID() ?></small>
            </div>
            <div id="modal-1" class="modal hide fade">
                <a class="close-modal" href="javascript:void(0);" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'template-image', true) ?>" alt="">
                </div>
            </div>
        </li>
        <!--/Item -->
        <?php endwhile;
        else: ?>

            <h2>Nothing found</h2>

        <?php endif; ?>
    </ul>
</section>

<?php get_footer(); ?>
