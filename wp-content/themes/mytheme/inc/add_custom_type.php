<?php

// post type template

function create_post_type_template() {
    register_post_type('template', array(
        'labels' => array(
            'name' => 'Giao diện',
            'singular_name' => 'Giao diện',
            'add_new' => 'Thêm Giao diện mới',
            'edit_item' => 'Chỉnh sửa Giao diện',
            'all_items' => 'Tất cả Giao diện',
            'new_item_name' => 'Giao diện mới',
            'view_item' => 'Xem Giao diện',
            'menu_name' => 'Giao diện',
            'add_new_item' => 'Thêm Giao diện mới',
        ),
        'description' => 'Kho giao diện',
        'supports' => array(
            'title', 'thumbnail', 'revisions',
        ),
        'taxonomies' => array('category'),
        'hierarchical' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-images-alt2',
        'capability_type' => 'post'
    ));
    register_taxonomy('template-category', 'template', array(
        'labels' => array(
            'name' => 'Loại Giao diện',
            'singular_name' => 'Loại Giao diện',
            'add_new' => 'Mục Giao diện mới',
            'new_item_name' => 'Mục Giao diện mới',
            'add_new_item' => 'Thêm mục Giao diện'
        ),
        'public' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewirte' => array('slug' => 'template-cat'),
        'query_var' => true
    ));
}

add_action('init', create_post_type_template());
//field image
add_action('add_meta_boxes', 'add_template_image');

function add_template_image() {
    add_meta_box('template-image', 'Ảnh Demo', 'set_template_image', 'template', 'normal', 'low', array());
}

function set_template_image() {
    global $post;
    $custom = get_post_custom($post->ID);
    $tpl_image = $custom['template-image'][0];
    add_thickbox();
    ?>

    <label>Ảnh Demo giao diện</label>

    <input type="hidden" name="template-image" id="imgurl" value="<?php if (isset($tpl_image)) echo $tpl_image; ?>" />
    <input onclick="upload_image('#imgurl')" type="submit" id="btn-upload" value="Upload Image" /> <br />
    <div id="template-image-box">
        <?php
        if (isset($tpl_image)) {
            $image = $tpl_image;
        } else {
            $image = get_template_directory_uri() . '/images/ico/icon.png';
        }
        ?>
        <img id="show-tpl-imgurl" src="<?php echo $image; ?>" style="max-width: 810px; margin: 5px;" />

    </div>
    <script>
        jQuery("#btn-upload").click(function () {
            return false;
        });
        function upload_image(imgid) {
            tb_show('', 'media-upload.php?type=image&height=550&width=1000&TB_iframe=true');

            window.send_to_editor = function (html) {
                imgurl = jQuery('img', html).attr('src');
                jQuery(imgid).val(imgurl);
                jQuery('#show-tpl-imgurl').attr('src', imgurl);
                tb_remove();
            };
        }
    </script>
    <?php
}

add_action('save_post', 'update_tpl_image');

function update_tpl_image($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_REQUEST['post_type']) && $_REQUEST['post_type'] == 'template') {
        if (!empty($_REQUEST['template-image'])) {
            update_post_meta($post_id, 'template-image', $_POST['template_image']);
        } else {
            delete_post_meta($post_id, 'template-image');
        }
        //image
        if (isset($_POST['template-image'])) {
            update_post_meta($post_id, 'template-image', esc_url_raw($_POST['template-image']));
        }
    }
}

// add post type contact
function create_post_type_contact() {
    register_post_type('contact', array(
        'labels' => array(
            'name' => 'Liên hệ',
            'singular_name' => 'Liên hệ',
            'add_new' => 'Liên hệ mới',
            'all_items' => 'Tất cả Liên hệ',
            'new_item_name' => 'Liên hệ mới',
            'view_item' => 'Xem Liên hệ',
            'menu_name' => 'Liên hệ',
            'add_new_item' => 'Liên hệ mới',
        ),
        'description' => 'Liên hệ khách hàng',
        'supports' => array(
            'title', 'excerpt', 'thumbnail', 'revisions',
        ),
        'hierarchical' => false,
        'has_archive' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-redo',
        'capability_type' => 'post'
    ));
}

add_action('init', create_post_type_contact());
add_action('add_meta_boxes', 'add_my_contact_field');

function add_my_contact_field() {
    add_meta_box('contact-box', 'Contact Information', 'show_contact_box', 'contact', 'normal', 'low', array());
}

function show_contact_box() {
    $contact_fields = array(
        array(
            'type' => 'text',
            'name' => 'contact-name',
            'lable' => 'Họ tên',
            'size' => '60'
        ),
        array(
            'type' => 'text',
            'name' => 'contact-phone',
            'lable' => 'Số ĐT',
            'size' => '60'
        ),
        array(
            'type' => 'text',
            'name' => 'contact-address',
            'lable' => 'Địa chỉ',
            'size' => '60'
        ),
        array(
            'type' => 'text',
            'name' => 'contact-email',
            'lable' => 'Email',
            'size' => '60'
        )
    );
    global $post;
    $contacts = get_post_custom($post->ID);
    ?>
    <table>
        <?php foreach ($contact_fields as $box) { ?>
            <?php
            switch ($box['type']) {
                case 'text':
                    ?>
                    <tr>
                        <td><label><?php echo $box['lable'] ?>: </label></td>
                        <td><input size="<?= $box['size'] ?>" type="text" name="<?php echo $box['name'] ?>" value="<?php if (isset($contacts)) echo $contacts[$box['name']][0] ?>" /></td>
                    </tr>
                    <?php
                    break;
                case 'textarea':
                    ?>
                    <tr>
                        <td><label><?php echo $box['lable'] ?>: </label></td>
                        <td><textarea name="<?php echo $box['name'] ?>" rows="4" cols="80"  placeholder="content"><?php if (isset($contacts)) echo $contacts[$box['name']][0] ?></textarea></td>
                    </tr>
                    <?php
                    break;
                default:
                    break;
            }
            ?>

    <?php } ?>
    </table>
    <?php
}

//save contact
add_action('save_post', 'update_my_contact');

function update_my_contact($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_REQUEST['post_type']) && $_REQUEST['post_type'] == 'contact') {
        update_post_meta($post_id, 'contact-name', $_POST['contact-name']);
        update_post_meta($post_id, 'contact-phone', $_POST['contact-phone']);
        update_post_meta($post_id, 'contact-address', $_POST['contact-address']);
        update_post_meta($post_id, 'contact-email', $_POST['contact-email']);
    } else {
        delete_post_meta($post_id, 'contact-name');
        delete_post_meta($post_id, 'contact-phone');
        delete_post_meta($post_id, 'contact-address');
        delete_post_meta($post_id, 'contact-email');
    }
    if (isset($_POST['contact-submit'])) {
        update_post_meta($post_id, 'contact-name', $_POST['contact-name']);
        update_post_meta($post_id, 'contact-phone', $_POST['contact-phone']);
        update_post_meta($post_id, 'contact-address', $_POST['contact-address']);
        update_post_meta($post_id, 'contact-email', $_POST['contact-email']);
    }
}

// add contact info from frontend
if (isset($_POST['contact-submit'])) {

    $order = array(
        'post_title' => 'contact_' . rand(100, 999),
        'post_excerpt' => $_POST['contact-content'],
        'post_status' => 'pending',
        'post_type' => 'contact',
    );

    $post_id = wp_insert_post($order);
    add_post_meta($post_id, 'contact-name', $_POST['contact-name'], true);
    add_post_meta($post_id, 'contact-email', $_POST['contact-email'], true);
    add_post_meta($post_id, 'contact-phone', $_POST['contact-phone'], true);
    add_post_meta($post_id, 'contact-address', $_POST['contact-address'], true);
//        require_once (ABSPATH.'wp-admin/includes/admin.php');
//        $thumb_id = media_handle_upload('thumbnail', $post_id);
//        add_post_meta($post_id, '_thumbnail_id', $thumb_id, true);
    wp_redirect(home_url());
    die();
}


// them truong cho taxonomy
add_action('template-category_add_form_fields', 'category_form_custom_field_add', 10);
add_action('template-category_edit_form_fields', 'category_form_custom_field_edit', 10, 2);

function category_form_custom_field_add($taxonomy) {
    ?>
    <div class="form-field">
        <label for="template-icon">Icon Taxonomy Template</label>
        <input name="template-icon" id="template-icon" type="text" value="" placeholder="fa-star" size="40" aria-required="true" />
        <p class="description">Enter a Icon value example "fa-star".</p>
    </div>
    <?php
}

function category_form_custom_field_edit($tag, $taxonomy) {

    $option_name = 'template-icon-' . $tag->term_id;
    $tpl_icon = get_option($option_name);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="template-icon">Icon Taxonomy Template</label></th>
        <td>
            <input type="text" name="template-icon" id="template-icon" value="<?php echo esc_attr($tpl_icon) ? esc_attr($tpl_icon) : ''; ?>" placeholder="fa-star" size="40" aria-required="true" />
            <p class="description">Enter a Icon value example "fa-star".</p>
        </td>
    </tr>
    <?php
}

// luu lai truong vua them 
add_action('created_template-category', 'category_form_custom_field_save', 10, 2);
add_action('edited_template-category', 'category_form_custom_field_save', 10, 2);

function category_form_custom_field_save($term_id, $tt_id) {

    if (isset($_POST['template-icon'])) {
        $option_name = 'template-icon-' . $term_id;
        update_option($option_name, $_POST['template-icon']);
    }
}

// create post type  order
function create_post_type_my_order() {
    register_post_type('my_order', array(
        'labels' => array(
            'name' => 'Đơn hàng',
            'singular_name' => 'Đơn hàng',
            'add_new' => 'Đơn hàng mới',
            'edit_item' => 'Cập nhật Đơn hàng',
            'all_items' => 'Tất cả đơn hàng',
            'new_item_name' => 'Đơn hàng mới',
            'view_item' => 'Xem đơn hàng',
            'menu_name' => 'Đơn hàng',
            'add_new_item' => 'Đơn hàng mới',
        ),
        'description' => 'Khách hàng đặt hàng template website',
        'supports' => array(
            'title', 'excerpt', 'revisions',
        ),
        'taxonomies' => array(''),
        'hierarchical' => false,
        'has_archive' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-cart',
        'capability_type' => 'post',
    ));
}

add_action('init', 'create_post_type_my_order');

add_action('add_meta_boxes', 'add_my_order_field');

function add_my_order_field() {
    add_meta_box('order-box', 'Order Information', 'show_order_box', 'my_order', 'normal', 'low', array());
    add_meta_box('order-product', 'Order Product', 'show_order_product', 'my_order', 'normal', 'low', array());
}

function show_order_box() {
    $order_fields = array(
        array(
            'type' => 'text',
            'name' => 'order-product-id',
            'lable' => 'Mã giao diện',
            'size' => '60'
        ),
        array(
            'type' => 'text',
            'name' => 'order-name',
            'lable' => 'Tên khách hàng',
            'size' => 60
        ),
        array(
            'type' => 'text',
            'name' => 'order-date',
            'lable' => 'Thời gian',
            'size' => '60'
        ),
        array(
            'type' => 'text',
            'name' => 'order-email',
            'lable' => 'Email đặt hàng',
            'size' => '60'
        ),
        array(
            'type' => 'text',
            'name' => 'order-phone',
            'lable' => 'Điện thoại',
            'size' => '60'
        ),
        array(
            'type' => 'select',
            'name' => 'order-status',
            'lable' => 'Trạng thái',
            'size' => '60'
        ),
        array(
            'type' => 'text',
            'name' => 'order-address',
            'lable' => 'Địa chỉ',
            'size' => '60'
        ),
    );
    global $post;
    $orders = get_post_custom($post->ID);
    ?>
    <table>
        <?php foreach ($order_fields as $box) { ?>
            <?php
            switch ($box['type']) {
                case 'text':
                    ?>
                    <tr>
                        <td><label><?php echo $box['lable'] ?>: </label></td>
                        <td><input type="text" name="<?php echo $box['name'] ?>" value="<?php if (isset($orders)) echo $orders[$box['name']][0] ?>" /></td>
                    </tr>
                    <?php
                    break;
                case 'textarea':
                    ?>
                    <tr>
                        <td><label><?php echo $box['lable'] ?>: </label></td>
                        <td><textarea name="<?php echo $box['name'] ?>"  placeholder="date"><?php if (isset($orders)) echo $orders[$box['name']][0] ?></textarea></td>
                    </tr>
                    <?php
                    break;
                case 'select':
                    ?>
                    <td><label><?php echo $box['lable'] ?>: </label></td>
                    <td><select name="<?php echo $box['name'] ?>">
                            <option value="pending">Pendding</option>
                            <option value="complete">Complele</option>
                        </select></td>
                <?php
                default:
                    break;
            }
            ?>

    <?php } ?>
    </table>
    <?php
}

function show_order_product() {
    $orders = get_post_custom($post->ID);
    $product_id_code = explode("-", $orders['order-product-id'][0]);
    $product = get_post($product_id_code[1]);
    ?>
    <table style="width: 100%;">
        <tr>
            <td><input type="checkbox" /></td>
            <td>Image</td>
            <td>Name</td>
            <td>Quantity</td>
            <td>Total</td>
        </tr>
        <tr>
            <td><input type="checkbox" /></td>
            <td><?php echo get_the_post_thumbnail($product->ID, array(70, 70)) ?></td>
            <td><?= $product->post_title; ?></td>
            <td>1</td>
            <td>1000000</td>
        </tr>
    </table>
    <?php
}

add_action('save_post', 'update_order_date');

function update_order_date($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_REQUEST['post_type']) && $_REQUEST['post_type'] == 'my_order') {
        update_post_meta($post_id, 'order-date', $_POST['order-date']);
        update_post_meta($post_id, 'order-name', $_POST['order-name']);
        update_post_meta($post_id, 'order-email', $_POST['order-email']);
        update_post_meta($post_id, 'order-phone', $_POST['order-phone']);
        update_post_meta($post_id, 'order-status', $_POST['order-status']);
        update_post_meta($post_id, 'order-product-id', $_POST['order-product-id']);
        update_post_meta($post_id, 'order-address', $_POST['order-address']);
    } else {
        delete_post_meta($post_id, 'order-date');
        delete_post_meta($post_id, 'order-name');
        delete_post_meta($post_id, 'order-email');
        delete_post_meta($post_id, 'order-phone');
        delete_post_meta($post_id, 'order-status');
        delete_post_meta($post_id, 'order-product-id');
        delete_post_meta($post_id, 'order-address');
    }
    if (isset($_POST['order-date'])) {
        update_post_meta($post_id, 'order-date', $_POST['order-date']);
        update_post_meta($post_id, 'order-name', $_POST['order-name']);
        update_post_meta($post_id, 'order-email', $_POST['order-email']);
        update_post_meta($post_id, 'order-phone', $_POST['order-phone']);
        update_post_meta($post_id, 'order-status', $_POST['order-status']);
        update_post_meta($post_id, 'order-product-id', $_POST['order-product-id']);
        update_post_meta($post_id, 'order-address', $_POST['order-address']);
    }
}

//insert from front end
if (isset($_POST['order-submit'])) {
    $order = array(
        'post_title' => 'order_' . rand(100, 999),
        'post_excerpt' => $_POST['order-content'],
        'post_status' => 'pending',
        'post_type' => 'my_order',
    );

    $post_id = wp_insert_post($order);
    var_dump($post_id);
    add_post_meta($post_id, 'order-date', date('m/d/Y h:i:s a', time()), true);
    add_post_meta($post_id, 'order-email', $_POST['order-email'], true);
    add_post_meta($post_id, 'order-name', $_POST['order-name'], true);
    add_post_meta($post_id, 'order-phone', $_POST['order-phone'], true);
    add_post_meta($post_id, 'order-product-id', $_POST['order-product-id'], true);
    add_post_meta($post_id, 'order-address', $_POST['order-address'], true);
//        require_once (ABSPATH.'wp-admin/includes/admin.php');
//        $thumb_id = media_handle_upload('thumbnail', $post_id);
//        add_post_meta($post_id, '_thumbnail_id', $thumb_id, true);
    wp_redirect(home_url());
    die();
}


//custom post Project
function create_post_type_project() {
    register_post_type('project', array(
        'labels' => array(
            'name' => 'Dự án',
            'singular_name' => 'Dự án',
            'add_new' => 'Dự án mới',
            'edit_item' => 'Chỉnh sửa Dự án',
            'all_items' => 'Tất cả Dự án',
            'new_item_name' => 'Dự án mới',
            'view_item' => 'Xem Dự án',
            'menu_name' => 'Dự án',
            'add_new_item' => 'Thêm Dự án',
        ),
        'description' => 'Dự án đã thực hiện',
        'supports' => array(
            'title', 'thumbnail', 'revisions',
        ),
        'taxonomies' => array('category'),
        'hierarchical' => false,
        'has_archive' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => false,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-portfolio',
        'capability_type' => 'post'
    ));
}

add_action('init', create_post_type_project());
//field image
add_action('add_meta_boxes', 'add_project_image');

function add_project_image() {
    add_meta_box('project-image', 'Ảnh Demo', 'set_project_image', 'project', 'normal', 'low', array());
}

function set_project_image() {
    global $post;
    $custom = get_post_custom($post->ID);
    $tpl_image = $custom['project-image'][0];
    add_thickbox();
    ?>

    <label>Ảnh Demo giao diện</label>

    <input type="hidden" name="project-image" id="imgurl" value="<?php if (isset($tpl_image)) echo $tpl_image; ?>" />
    <input onclick="upload_image('#imgurl')" type="submit" id="btn-upload" value="Upload Image" /> <br />
    <div id="template-image-box">
        <?php
        if (isset($tpl_image)) {
            $image = $tpl_image;
        } else {
            $image = get_template_directory_uri() . '/images/ico/icon.png';
        }
        ?>
        <img id="show-proj-imgurl" src="<?php echo $image; ?>" style="max-width: 810px; margin: 5px;" />

    </div>
    <script>
        jQuery("#btn-upload").click(function () {
            return false;
        });
        function upload_image(imgid) {
            tb_show('', 'media-upload.php?type=image&height=550&width=1000&TB_iframe=true');

            window.send_to_editor = function (html) {
                imgurl = jQuery('img', html).attr('src');
                jQuery(imgid).val(imgurl);
                jQuery('#show-proj-imgurl').attr('src', imgurl);
                tb_remove();
            };
        }
    </script>
    <?php
}

add_action('save_post', 'update_proj_image');

function update_proj_image($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_REQUEST['post_type']) && $_REQUEST['post_type'] == 'project') {
        if (!empty($_REQUEST['project-image'])) {
            update_post_meta($post_id, 'project-image', $_POST['project-image']);
        } else {
            delete_post_meta($post_id, 'project-image');
        }
        //image
        if (isset($_POST['project-image'])) {
            update_post_meta($post_id, 'project-image', esc_url_raw($_POST['project-image']));
        }
    }
}
