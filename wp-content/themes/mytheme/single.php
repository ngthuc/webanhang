<?php get_header(); ?>
<?php include_once 'inc/breadcrumb.php'; ?>

<section id="about-us" class="container">
    <div class="row-fluid">
        <div class="span8">
            <div class="blog">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog-item well">
                    <h2><?php the_title(); ?></h2>
                    <div class="blog-meta clearfix">
                        <p class="pull-left">
                            <i class="icon-user"></i> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <i class="icon-folder-close"></i> Category <a href="#"><?php the_category(' ') ?></a> | <i class="icon-calendar"></i> <?php the_date() ?>
                        </p>
                        <p class="pull-right"><i class="icon-comment pull"></i> <?php echo get_comments_number() ?> Comments</p>
                    </div>
                    <div class="gap">
                        <?php the_content() ?>
                    </div>
                    <div class="tag gap">
                        Tags : <?php $tags = wp_get_post_tags(get_the_ID(), array());
                        foreach ($tags as $tag){?>
                        <a href="<?php echo get_tag_link($tag->term_id) ?>"><span class="label label-success"><?php echo $tag->name ?></span></a>
                            <?php } ?>
                    </div>

                    <div id="comments" class="comments">
                        <?php comments_template(); ?>
                    </div>
                </div>
                <!-- End Blog Item -->
            <?php endwhile; ?>
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