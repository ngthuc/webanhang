<?php
//include_once 'inc/navwalker.php';
;

// Add RSS spannks to <head> section
//automatic_feed_spannks();
//add post thumbnail

add_theme_support('post-thumbnails');

// Load jQuery
if (!is_admin()) {
    //wp_deregister_script('jquery');
    //wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"), false);
    //wp_enqueue_script('jquery');
}

//register sidebar
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );

    register_sidebar( array(
        'name' => __( 'Page Sidebar', 'theme-slug' ),
        'id' => 'sidebar-2',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_title' => '<h1>',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );



// Clean up the <head>
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_spannk');
    remove_action('wp_head', 'wlwmanifest_spannk');
}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Declare sidebar widget zone
//if (function_exists('register_sidebar')) {
//    register_sidebar(array(
//        'name' => 'Sidebar Widgets',
//        'id' => 'sidebar-widgets',
//        'description' => 'These are widgets for the sidebar.',
//        'before_widget' => '<div id="%1$s" class="widget %2$s">',
//        'after_widget' => '</div>',
//        'before_title' => '<h2>',
//        'after_title' => '</h2>'
//    ));
//}


//query post
add_action('pre_get_posts', 'my_post_queries');

function my_post_queries($query) {
    // do not alter the query on wp-admin pages and only alter it if it's the main query
    if (!is_admin() && $query->is_main_query()) {
        // alter the query for the home and category pages 
        if (is_home()) {
            $query->set('posts_per_page', 1);
        }
        if (is_category()) {
            $query->set('posts_per_page', 1);
        }
        if (is_search()) {
            $query->set('posts_per_page', 1);
        }
    }
}

// breadcrumb
function the_breadcrumb() {
    global $post;


    if (!is_home()) {

        echo '<li><a href="'.home_url().'">Trang chủ</a> <span class="divider">/</span></li>';

        if (is_category()) {
            echo '<li>'.get_the_category(get_query_var('cat'))[0]->cat_name.'</li>';
        } elseif (is_single()) {
            echo '<li>'.get_the_category(get_the_ID())[0]->cat_name.'</li>';
        } elseif (is_page()) {
            echo '<li>'.get_the_title().'</li>';
        } elseif (is_tag()) {
            echo"<li>";
            single_tag_title();
            echo'</li>';
        } elseif (is_day()) {
            echo"<li>";
            the_time('F jS, Y');
            echo'</li>';
        } elseif (is_month()) {
            echo"<li>";
            the_time('F, Y');
            echo'</li>';
        } elseif (is_year()) {
            echo"<li>";
            the_time('Y');
            echo'</li>';
        } elseif (is_author()) {
            echo"<li>";
            echo'</li>';
        } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
            echo "<li>Blog Archives";
            echo'</li>';
        } elseif (is_search()) {
            echo"<li>Tìm kiếm";
            echo'</li>';
        }
    }
}

//add custom type
require_once 'inc/add_custom_type.php';
//

// num count menu pedding
function show_pending_number($menu) {    
    $types = array("post", "contact", "my_order");
    $status = "pending";
    foreach($types as $type) {
        $num_posts = wp_count_posts($type, 'readable');
        $pending_count = 0;
        if (!empty($num_posts->$status)) $pending_count = $num_posts->$status;

        if ($type == 'post') {
            $menu_str = 'edit.php';
        } else {
            $menu_str = 'edit.php?post_type=' . $type;
        }

        foreach( $menu as $menu_key => $menu_data ) {
            if( $menu_str != $menu_data[2] )
                continue;
            $menu[$menu_key][0] .= " <span class='update-plugins count-$pending_count'><span class='plugin-count'>" . number_format_i18n($pending_count) . '</span></span>';
            }
        }
    return $menu;
}
add_filter('add_menu_classes', 'show_pending_number');
?>
