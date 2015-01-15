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
            <ul class="unstyled">
                <?php dynamic_sidebar('sidebar-1') ?>
            </ul>
        </aside>
    </div>
</section>
<?php get_footer(); ?>