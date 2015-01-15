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
                                    <i class="icon-user"></i> by <a href="<?php the_author_link() ?>"><?php the_author(); ?></a> | <i class="icon-folder-close"></i> Category <a href="#"><?php the_category(' ') ?></a> | <i class="icon-calendar"></i> <?php the_date() ?>
                                </p>
                                <p class="pull-right"><i class="icon-comment pull"></i> <?php echo get_comments_number() ?> Comments</p>
                            </div>
                            <div>
                                <?php the_content() ?>
                            </div>
                            <div class="tag">
                                Tags : <?php $tags = wp_get_post_tags(get_the_ID(), array());
                                foreach ($tags as $tag){?>
                                    <a href="<?php echo get_tag_link($tag->term_id) ?>"><span class="label label-success"><?php echo $tag->name ?></span></a>
                                <?php } ?>
                            </div>

                            <div id="comments" class="comments">
                                <h4>3 Comments</h4>
                                <?php comments_template(); ?>
                                <?php  ?>
                                <div class="comments-list">
                                    <div class="comment media">
                                        <div class="pull-left">
                                            <img class="avatar" src="images/sample/cAvatar1.jpg" alt="" />
                                        </div>

                                        <div class="media-body">
                                            <strong>Posted by <a href="#">Krikor</a></strong><br>
                                            <small>Thursday, 01 March 2012 15:26</small><br>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage</p>
                                        </div>
                                    </div>

                                    <div class="comment media">
                                        <div class="pull-left">
                                            <img class="avatar" src="images/sample/cAvatar2.jpg" alt="" />
                                        </div>

                                        <div class="media-body">
                                            <strong>Posted by <a href="#">Krikor</a></strong><br>
                                            <small>Thursday, 01 March 2012 15:26</small><br>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage</p>
                                        </div>
                                    </div>

                                </div>

                                <!-- Start Comment Form -->
                                <div class="comment-form">
                                    <h4>Leave a Comment</h4>
                                    <p class="muted">Make sure you enter the (*) required information where indicated. HTML code is not allowed.</p>
                                    <form name="comment-form" id="comment-form">
                                        <div class="row-fluid">
                                            <div class="span4">
                                                <input type="text" name="name" required="required" class="input-block-level" placeholder="Name" />
                                            </div>
                                            <div class="span4">
                                                <input type="email" name="email" required="required" class="input-block-level" placeholder="Email" />
                                            </div>
                                            <div class="span4">
                                                <input type="url" name="website" class="input-block-level" placeholder="Website" />
                                            </div>
                                        </div>
                                        <textarea rows="10" name="message" id="message" required="required" class="input-block-level" placeholder="Message"></textarea>
                                        <input type="submit" value="Submit Comment" class="btn btn-large btn-primary" />
                                    </form>
                                </div>
                                <!-- End Comment Form -->

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
                    <?php dynamic_sidebar('sidebar-2') ?>
                </ul>
            </aside>
        </div>
    </section>

<?php get_footer(); ?>