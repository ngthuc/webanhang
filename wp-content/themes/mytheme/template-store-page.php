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


        <!--Item 1-->
        <li>
            <div class="preview">
                <?php the_post_thumbnail() ?>
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-1" title="Xem giao diện"><i class="icon-eye-open"></i></a><a href="<?php echo home_url() ?>/?page_id=11&tpl_id=<?php echo get_the_ID() ?>" title="Đặt mua ngay"><i class="icon-shopping-cart"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-1" class="modal hide fade">
                <a class="close-modal" href="javascript:void(0);" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="<?php echo get_post_meta(get_the_ID(), 'template-image', true) ?>" alt="">
                </div>
            </div>
        </li>

        <?php endwhile;
        else: ?>

            <h2>None</h2>

        <?php endif; ?>        <!--/Item 1-->

        <!--Item 2-->
        <li>
            <div class="preview">
                <img alt=" " src="images/portfolio/thumb/item2.jpg">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-2" title="Xem giao diện"><i class="icon-eye-open"></i></a><a href="#" title="Đặt mua ngay"><i class="icon-shopping-cart"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-2" class="modal hide fade">
                <a class="close-modal" href="javascript:void(0);" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="images/portfolio/full/index.jpg" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 2-->

        <!--Item 3-->
        <li>
            <div class="preview">
                <img alt="" src="images/portfolio/thumb/item3.jpg">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-3" title="Xem giao diện"><i class="icon-eye-open"></i></a><a href="#" title="Đặt mua ngay"><i class="icon-shopping-cart"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-3" class="modal hide fade">
                <a class="close-modal" href="javascript:void(0);" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="images/portfolio/full/item3.jpg" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 3-->

        <!--Item 4-->
        <li>
            <div class="preview">
                <img alt=" " src="images/portfolio/thumb/item4.jpg">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-4" title="Xem giao diện"><i class="icon-eye-open"></i></a><a href="#" title="Đặt mua ngay"><i class="icon-shopping-cart"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-4" class="modal hide fade">
                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="images/portfolio/full/item4.jpg" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 4-->

        <!--Item 5-->
        <li>
            <div class="preview">
                <img alt=" " src="images/portfolio/thumb/item5.jpg">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-5"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-5" class="modal hide fade">
                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="images/portfolio/full/item5.jpg" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 5-->

        <!--Item 6-->
        <li>
            <div class="preview">
                <img alt=" " src="images/portfolio/thumb/item6.jpg">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-6"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-6" class="modal hide fade">
                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="images/portfolio/full/item6.jpg" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 6-->

        <!--Item 7-->
        <li>
            <div class="preview">
                <img alt=" " src="images/portfolio/thumb/item1.jpg">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-7"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-7" class="modal hide fade">
                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="images/portfolio/full/item1.jpg" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 7-->

        <!--Item 8-->
        <li>
            <div class="preview">
                <img alt=" " src="images/portfolio/thumb/item5.jpg">
                <div class="overlay">
                </div>
                <div class="links">
                    <a data-toggle="modal" href="#modal-8"><i class="icon-eye-open"></i></a><a href="#"><i class="icon-link"></i></a>
                </div>
            </div>
            <div class="desc">
                <h5>Lorem ipsum dolor sit amet</h5>
                <small>Portfolio item short description</small>
            </div>
            <div id="modal-8" class="modal hide fade">
                <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
                <div class="modal-body">
                    <img src="images/portfolio/full/item5.jpg" alt=" " width="100%" style="max-height:400px">
                </div>
            </div>
        </li>
        <!--/Item 8-->
    </ul>
</section>

<?php get_footer(); ?>
