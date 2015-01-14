<?php get_header(); ?>
<?php include_once 'inc/breadcrumb.php'; ?>

<?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array('posts_per_page' => 8, 'paged' => $paged , 'cat' => $cat);
    query_posts($args);  
?>

<section id="about-us" class="container main">
    <div class="row-fluid">
        <div class="span8">
            <div class="blog">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="blog-item well">
                        <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                                <i class="icon-user"></i> by <a href="#"><?php the_author(); ?></a> | <i class="icon-folder-close"></i> Category <a href="#"></a> | <i class="icon-calendar"></i> <?php the_date() ?>
                            </p>
                            <p class="pull-right"><i class="icon-comment pull"></i> <a href="blog-item.html#comments">3 Comments</a></p>
                        </div>
                        <p><?php the_excerpt() ?></p>
                        <a class="btn btn-link" href="<?php the_permalink() ?>">Read More <i class="icon-angle-right"></i></a>
                    </div>
                    <!-- End Blog Item -->
                <?php endwhile; ?>

                <!-- Paginationa -->
                <div class="pagination">
                    <ul>
                        <?php
                            $big = 99999999;
                            echo paginate_links(array(
                                'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                            ));
                        ?>
                    </ul>
                </div>
            <?php else: ?>
                <h2>Nothing found</h2>
            <?php endif; ?>
            </div>
        </div>

        <aside class="span4">
            <?php dynamic_sidebar('sidebar-1') ?>
<!--            <div class="widget search">-->
<!--                <form>-->
<!--                    <input type="text" class="input-block-level" placeholder="Search">-->
<!--                </form>-->
<!--            </div>-->
<!--            <!-- /.search -->
<!---->
<!--            <div class="widget ads">-->
<!--                <div class="row-fluid">-->
<!--                    <div class="span6">-->
<!--                        <a href="#"><img src="images/ads/ad1.png" alt=""></a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="span6">-->
<!--                        <a href="#"><img src="images/ads/ad2.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <p> </p>-->
<!--                <div class="row-fluid">-->
<!--                    <div class="span6">-->
<!--                        <a href="#"><img src="images/ads/ad3.png" alt=""></a>-->
<!--                    </div>-->
<!---->
<!--                    <div class="span6">-->
<!--                        <a href="#"><img src="images/ads/ad4.png" alt=""></a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- /.ads -->
<!---->
<!--            <div class="widget widget-popular">-->
<!--                <h3>Popular Posts</h3>-->
<!--                <div class="widget-blog-items">-->
<!--                    <div class="widget-blog-item media">-->
<!--                        <div class="pull-left">-->
<!--                            <div class="date">-->
<!--                                <span class="month">Jun</span>-->
<!--                                <span class="day">24</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="widget-blog-item media">-->
<!--                        <div class="pull-left">-->
<!--                            <div class="date">-->
<!--                                <span class="month">Jun</span>-->
<!--                                <span class="day">24</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="widget-blog-item media">-->
<!--                        <div class="pull-left">-->
<!--                            <div class="date">-->
<!--                                <span class="month">Jun</span>-->
<!--                                <span class="day">24</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="media-body">-->
<!--                            <a href="#"><h5>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris</h5></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- End Popular Posts -->
<!---->
<!--            <div class="widget">-->
<!--                <h3>Blog Categories</h3>-->
<!--                <div>-->
<!--                    <div class="row-fluid">-->
<!--                        <div class="span6">-->
<!--                            <ul class="unstyled">-->
<!--                                <li><a href="#">Development</a></li>-->
<!--                                <li><a href="#">Design</a></li>-->
<!--                                <li><a href="#">Updates</a></li>-->
<!--                                <li><a href="#">Tutorial</a></li>-->
<!--                                <li><a href="#">News</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!---->
<!--                        <div class="span6">-->
<!--                            <ul class="unstyled">-->
<!--                                <li><a href="#">Joomla</a></li>-->
<!--                                <li><a href="#">Wordpress</a></li>-->
<!--                                <li><a href="#">Drupal</a></li>-->
<!--                                <li><a href="#">Magento</a></li>-->
<!--                                <li><a href="#">Bootstrap</a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- End Category Widget -->
<!---->
<!--            <div class="widget">-->
<!--                <h3>Tag Cloud</h3>-->
<!--                <ul class="tag-cloud unstyled">-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">CSS3</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">HTML5</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">WordPress</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">Joomla</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">Drupal</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">Bootstrap</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">jQuery</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">Tutorial</a></li>-->
<!--                    <li><a class="btn btn-mini btn-primary" href="#">Update</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <!-- End Tag Cloud Widget -->
<!---->
<!--            <div class="widget">-->
<!--                <h3>Archive</h3>-->
<!--                <ul class="archive arrow">-->
<!--                    <li><a href="#">May 2013</a></li>-->
<!--                    <li><a href="#">April 2013</a></li>-->
<!--                    <li><a href="#">March 2013</a></li>-->
<!--                    <li><a href="#">February 2013</a></li>-->
<!--                </ul>-->
<!--            </div>-->
            <!-- End Archive Widget -->

        </aside>
    </div>
</section>
<?php get_footer(); ?>