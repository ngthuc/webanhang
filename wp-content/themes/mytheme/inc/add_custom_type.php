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
            'title', 'excerpt', 'thumbnail', 'revisions',
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
        <?php if(isset($tpl_image)){ ?>
            <img id="show-tpl-imgurl" src="<?php echo $tpl_image; ?>" style="max-width: 810px; margin: 5px;" />
        <?php }else{ ?>
            <img id="show-tpl-imgurl" src="<?php echo get_template_directory_uri() ?>/images/ico/icon.png" style="" />
        <?php } ?>
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
                jQuery("#template-image-box").html(
                    '<img id="show-tpl-imgurl" src="'+imgurl+'" style="max-width: 810px; margin: 5px;" />'
                );
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
    if (isset($_POST['contact'])) {
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
        'post_status' => 'publish',
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


