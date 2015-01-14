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
            <?php dynamic_sidebar('sidebar-1') ?>
<!--            <div class="widget search">-->
<!--                <form>-->
<!--                    <input type="text" class="input-block-level" placeholder="Search">-->
<!--                </form>-->
<!--            </div>-->
<!--            <!-- /.search -->
<!---->
<!---->
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