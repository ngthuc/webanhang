<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		This post is password protected. Enter the password to view comments.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h2>Bình luận</h2>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="next-posts"><?php previous_comments_link() ?></div>
		<div class="prev-posts"><?php next_comments_link() ?></div>
	</div>
	
 <?php else : ?>

	<?php if ( comments_open() ) : ?>
	 <?php else : ?>
		<p>Comments are closed.</p>
	<?php endif; ?>

<?php endif; ?>

<!----- comment form ------>

<?php if ( comments_open() ) : ?>

    <div class="gap"></div>
    <div id="respond">

        <h2><?php comment_form_title( 'Bình luận bài viết này', 'Trả lời' ); ?></h2>

        <div class="cancel-comment-reply">
            <?php cancel_comment_reply_link(); ?>
        </div>

        <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
            <p>Vui lòng <a href="<?php echo wp_login_url( get_permalink() ); ?>">đăng nhập</a> để bình luận.</p>
        <?php else : ?>

        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

            <?php if ( is_user_logged_in() ) : ?>

                <p>Tài khoản: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Đăng xuất">Đăng xuất &raquo;</a></p>

            <?php else : ?>
                <div class="comment-form">
                    <p class="muted">Vui lòng không để trống trường có dấu (*). Không cho phép mã HTML.</p>
                    <div class="row-fluid">
                        <div class="span4">
                            <input placeholder="Họ tên" type="text" name="author" id="author" class="input-block-level" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                        </div>
                        <div class="span4">
                            <input placeholder="Email" type="text" name="email" id="email" class="input-block-level" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
                        </div>
                        <div class="span4">
                            <input placeholder="Website" type="text" name="url" id="url" class="input-block-level" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <textarea placeholder="Nội dung bình luận" name="comment" id="comment" cols="58" rows="10" tabindex="4" class="input-block-level"></textarea>
            <input name="submit" type="submit" id="submit" tabindex="5" value="Gửi" class="btn btn-large btn-primary" />
            <?php comment_id_fields(); ?>
            <?php do_action('comment_form', $post->ID); ?>

        </form>

        <?php endif; ?>

    </div>

<?php endif; ?>
