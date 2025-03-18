<?php

function add_featured_post_meta_box() {
    add_meta_box(
        'featured_post_meta_box', // ID
        'บทความแนะนำ', // ชื่อกล่อง
        'render_featured_post_meta_box', // ฟังก์ชันแสดงกล่อง
        'post', // ประเภทโพสต์
        'side', // ตำแหน่ง
        'high' // ความสำคัญ
    );
}
add_action('add_meta_boxes', 'add_featured_post_meta_box');

function render_featured_post_meta_box($post) {
    // รับค่าปัจจุบัน
    $is_featured = get_post_meta($post->ID, '_is_featured', true);

    // แสดง HTML ของ Meta Box
    ?>
    <label>
        <input type="checkbox" name="is_featured" value="1" <?php checked($is_featured, '1'); ?> />
        ตั้งเป็นบทความแนะนำ
    </label>
    <?php
}

function save_featured_post_meta($post_id) {
    // ตรวจสอบสิทธิ์
    if (!isset($_POST['is_featured'])) {
        delete_post_meta($post_id, '_is_featured'); // ลบถ้าไม่ได้เลือก
    } else {
        update_post_meta($post_id, '_is_featured', '1'); // บันทึกค่าถ้าเลือก
    }
}
add_action('save_post', 'save_featured_post_meta');


add_theme_support('post-thumbnails');

function mytheme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mytheme_setup');

function register_custom_template_meta_boxes() {
    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-home.php'
    $cmb_home = new_cmb2_box(array(
        'id'            => 'home_page_metabox',
        'title'         => __('Custom Fields for Home', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-home.php'), // แสดงเฉพาะเพจที่ใช้ template-home.php
    ));

    $cmb_home->add_field(array(
        'name' => __('Section Hero H1', 'trayang'),
        'id'   => 'section_hero_h1',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Section Hero Span Text 1', 'trayang'),
        'id'   => 'section_hero_span_text_1',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Section Hero Span Text 2', 'trayang'),
        'id'   => 'section_hero_span_text_2',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Section Hero P', 'trayang'),
        'id'   => 'section_hero_p',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Cheap Price Header', 'trayang'),
        'id'   => 'cheap_price_header',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Cheap Price Image', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'cheap_price_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));
    

    $cmb_home->add_field(array(
        'name' => __('Our Service Header', 'trayang'),
        'id'   => 'our_service_header',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 1 Active', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_1_active',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 2 Active', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_2_active',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 3 Active', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_3_active',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 4', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_4',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 4 Active', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_4_active',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 5', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_5',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 5 Active', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_5_active',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 6', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_6',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Image 6 Active', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_image_6_active',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image D 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_d_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image M 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_m_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text H3 1', 'trayang'),
        'id'   => 'our_service_text_h3_1',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text P 1', 'trayang'),
        'id'   => 'our_service_text_p_1',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image D 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_d_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image M 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_m_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text H3 2', 'trayang'),
        'id'   => 'our_service_text_h3_2',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text P 2', 'trayang'),
        'id'   => 'our_service_text_p_2',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image D 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_d_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image M 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_m_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text H3 3', 'trayang'),
        'id'   => 'our_service_text_h3_3',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text P 3', 'trayang'),
        'id'   => 'our_service_text_p_3',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image D 4', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_d_4',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image M 4', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_m_4',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text H3 4', 'trayang'),
        'id'   => 'our_service_text_h3_4',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text P 4', 'trayang'),
        'id'   => 'our_service_text_p_4',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image D 5', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_d_5',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image M 5', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_m_5',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text H3 5', 'trayang'),
        'id'   => 'our_service_text_h3_5',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text P 5', 'trayang'),
        'id'   => 'our_service_text_p_5',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image D 6', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_d_6',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Our Service Button Box Image M 6', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'our_service_button_box_image_m_6',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text H3 6', 'trayang'),
        'id'   => 'our_service_text_h3_6',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text P 6', 'trayang'),
        'id'   => 'our_service_text_p_6',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Service Text A', 'trayang'),
        'id'   => 'our_service_text_a',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Size And Price Header', 'trayang'),
        'id'   => 'size_and_price_header',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Size And Price Btn 1', 'trayang'),
        'id'   => 'size_and_price_btn_1',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Size And Price Btn P', 'trayang'),
        'id'   => 'size_and_price_btn_p',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Size And Price Btn 2', 'trayang'),
        'id'   => 'size_and_price_btn_2',
        'type' => 'text',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Size And Price Image 1 D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'size_and_price_image_1_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Size And Price Image 1 M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'size_and_price_image_1_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Size And Price Image 2 D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'size_and_price_image_2_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_home->add_field( array(
        'name' => __( 'Size And Price Image 2 M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'size_and_price_image_2_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_home->add_field(array(
        'name' => __('Order Header Home', 'trayang'),
        'id'   => 'order_header_home',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Order Step Datail Home 1', 'trayang'),
        'id'   => 'order_step_datail_home_1',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Order Step Datail Home 2', 'trayang'),
        'id'   => 'order_step_datail_home_2',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Order Step Datail Home 3', 'trayang'),
        'id'   => 'order_step_datail_home_3',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Work Header Detail', 'trayang'),
        'id'   => 'our_work_header_detail',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Work Text Header Home', 'trayang'),
        'id'   => 'our_work_text_header_home',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Work Text Detail Home', 'trayang'),
        'id'   => 'our_work_text_detail_home',
        'type' => 'text',
    ));


    $cmb_home->add_field(array(
        'name' => __('Our Work Text Header Second Home', 'trayang'),
        'id'   => 'our_work_text_header_second_home',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Our Work Text Detail Home', 'trayang'),
        'id'   => 'our_work_text_detail_second_home',
        'type' => 'text',
    ));
    


    $cmb_home->add_field(array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Review Header Detail', 'trayang'),
        'id'   => 'review_header_detail',
        'type' => 'text',
    ));


    $cmb_home->add_field(array(
        'name' => __('Article Header', 'trayang'),
        'id'   => 'article_header',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Article Header Detail', 'trayang'),
        'id'   => 'article_header_detail',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Article Header Detail', 'trayang'),
        'id'   => 'article_header_detail',
        'type' => 'text',
    ));

    $cmb_home->add_field(array(
        'name' => __('Button Link Article', 'trayang'),
        'id'   => 'button_link_article',
        'type' => 'text_url',
    ));

    $cmb_home->add_field(array(
        'name' => __('Button Image Article', 'trayang'),
        'id'   => 'button_image_article',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));

    $cmb_home->add_field(array(
        'name' => __('Button Hover Image Article', 'trayang'),
        'id'   => 'button_hover_image_article',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Hover Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));


    $cmb_our_work_slider = new_cmb2_box(array(
        'id'            => 'our_work_slider_metabox',
        'title'         => __('Our Work Slider', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-home.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group = $cmb_our_work_slider->add_field(array(
        'id'          => 'slider_images',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider->add_group_field($slider_group, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));


    $cmb_our_work_slider_2 = new_cmb2_box(array(
        'id'            => 'our_work_slider_2_metabox',
        'title'         => __('Our Work Slider 2', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-home.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group = $cmb_our_work_slider_2->add_field(array(
        'id'          => 'slider_images_2',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_2->add_group_field($slider_group, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));


    $cmb_review = new_cmb2_box(array(
        'id'            => 'review_metabox',
        'title'         => __('Reviews', 'trayang'),
        'object_types'  => array('page'), // หรือปรับตาม post type
        'show_on'       => array('key' => 'page-template', 'value' => 'template-home.php'), // ใช้กับ template เฉพาะ
    ));
    
    // สร้าง Group Field
    $review_group = $cmb_review->add_field(array(
        'id'          => 'review_group',
        'type'        => 'group',
        'description' => __('Add Reviews', 'trayang'),
        'options'     => array(
            'group_title'   => __('Review {#}', 'trayang'),
            'add_button'    => __('Add Review', 'trayang'),
            'remove_button' => __('Remove Review', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพหลัก
    $cmb_review->add_group_field($review_group, array(
        'name' => __('Review Image', 'trayang'),
        'id'   => 'review_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));
    
    // ฟิลด์สำหรับหัวข้อ
    $cmb_review->add_group_field($review_group, array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับคำอธิบาย
    $cmb_review->add_group_field($review_group, array(
        'name' => __('Review Description', 'trayang'),
        'id'   => 'review_description',
        'type' => 'textarea_small',
    ));
    
    // ฟิลด์สำหรับ Avatar
    $cmb_review->add_group_field($review_group, array(
        'name' => __('Avatar Image', 'trayang'),
        'id'   => 'avatar_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Avatar', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    // ฟิลด์สำหรับชื่อ
    $cmb_review->add_group_field($review_group, array(
        'name' => __('Name', 'trayang'),
        'id'   => 'name',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับรายละเอียด
    $cmb_review->add_group_field($review_group, array(
        'name' => __('Detail', 'trayang'),
        'id'   => 'detail',
        'type' => 'text',
    ));    


    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-each-type-of-stamp.php'
    $cmb_each_type_of_stamp = new_cmb2_box(array(
        'id'            => 'each_type_of_stamp_metabox',
        'title'         => __('Each Type Of Stamp', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'),
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_head',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Sub Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_sub_head',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Header', 'trayang'),
        'id'   => 'why_do_you_have_to_order_header',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Header', 'trayang'),
        'id'   => 'each_stamp_second_header',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Header 1', 'trayang'),
        'id'   => 'each_stamp_second_text_header_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_detail_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Detail Order Link', 'trayang'),
        'id'   => 'each_stamp_second_detail_order_link',
        'type' => 'text_url',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Detail Order P', 'trayang'),
        'id'   => 'each_stamp_second_detail_order_text_p',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Image D 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_image_d_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Third Header 1', 'trayang'),
        'id'   => 'each_stamp_third_header_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Header 1', 'trayang'),
        'id'   => 'each_stamp_fourth_text_header_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Detail 1', 'trayang'),
        'id'   => 'each_stamp_fourth_text_detail_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Detail Order Link', 'trayang'),
        'id'   => 'each_stamp_fourth_detail_order_link',
        'type' => 'text_url',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Detail Order P', 'trayang'),
        'id'   => 'each_stamp_fourth_detail_order_text_p',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_fourth_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_fourth_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_fourth_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Image D 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_image_d_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Image M 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_image_m_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));
    
    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fifth Header 1', 'trayang'),
        'id'   => 'each_stamp_fifth_header_1',
        'type' => 'text',
    ));
    

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Header 2', 'trayang'),
        'id'   => 'each_stamp_second_text_header_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_detail_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Detail Order Link', 'trayang'),
        'id'   => 'each_stamp_second_detail_order_link',
        'type' => 'text_url',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Detail Order P', 'trayang'),
        'id'   => 'each_stamp_second_detail_order_text_p',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Image D 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_image_d_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Third Header 2', 'trayang'),
        'id'   => 'each_stamp_third_header_2',
        'type' => 'text',
    ));


    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Header 2', 'trayang'),
        'id'   => 'each_stamp_fourth_text_header_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Detail 2', 'trayang'),
        'id'   => 'each_stamp_fourth_text_detail_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Image D 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_image_d_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Image M 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_image_m_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fifth Header 2', 'trayang'),
        'id'   => 'each_stamp_fifth_header_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Header 3', 'trayang'),
        'id'   => 'each_stamp_second_text_header_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_detail_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Image D 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_image_d_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Third Header 3', 'trayang'),
        'id'   => 'each_stamp_third_header_3',
        'type' => 'text',
    ));


    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Button Link Design Logo', 'trayang'),
        'id'   => 'button_link_stamp_ink',
        'type' => 'text_url',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Button Image Design Logo', 'trayang'),
        'id'   => 'button_image_stamp_ink',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Button Hover Image Design Logo', 'trayang'),
        'id'   => 'button_hover_image_stamp_ink',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Hover Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Header 3', 'trayang'),
        'id'   => 'each_stamp_fourth_text_header_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Fourth Text Detail 3', 'trayang'),
        'id'   => 'each_stamp_fourth_text_detail_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Image D 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_image_d_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Each Stamp Fourth Image M 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_fourth_image_m_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));


    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Each Stamp Third Header 4', 'trayang'),
        'id'   => 'each_stamp_third_header_4',
        'type' => 'text',
    ));



    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Button Link Design Logo', 'trayang'),
        'id'   => 'button_link_design_logo',
        'type' => 'text_url',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Button Image Design Logo', 'trayang'),
        'id'   => 'button_image_design_logo',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Button Hover Image Design Logo', 'trayang'),
        'id'   => 'button_hover_image_design_logo',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Hover Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('How Is It Better Header', 'trayang'),
        'id'   => 'how_is_it_better_header',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('How Is It Better Detail', 'trayang'),
        'id'   => 'how_is_it_better_detail',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Order Header Each Type Of Stamp', 'trayang'),
        'id'   => 'order_header_each_type_of_stamp',
        'type' => 'text',
    ));
    
    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 1', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_1',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('OOrder Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_2',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_3',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Review Header Detail', 'trayang'),
        'id'   => 'review_header_detail',
        'type' => 'text',
    ));


    $cmb_each_type_of_stamp->add_field(array(
        'name' => __('Examples Of Trusted Brands Header', 'trayang'),
        'id'   => 'examples_of_trusted_brands_header',
        'type' => 'text',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 4', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_4',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 5', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_5',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 6', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_6',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 7', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_7',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 8', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_8',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 9', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_9',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_type_of_stamp->add_field( array(
        'name' => __( 'Examples Of Trusted Brands Image 10', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'examples_of_trusted_brands_image_10',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_review_each_type = new_cmb2_box(array(
        'id'            => 'review_each_type_metabox',
        'title'         => __('Reviews Each Type', 'trayang'),
        'object_types'  => array('page'), // หรือปรับตาม post type
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'), // ใช้กับ template เฉพาะ
    ));
    
    // สร้าง Group Field
    $review_group_each_type = $cmb_review_each_type->add_field(array(
        'id'          => 'review_group_each_type',
        'type'        => 'group',
        'description' => __('Add Reviews', 'trayang'),
        'options'     => array(
            'group_title'   => __('Review {#}', 'trayang'),
            'add_button'    => __('Add Review', 'trayang'),
            'remove_button' => __('Remove Review', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพหลัก
    $cmb_review_each_type->add_group_field($review_group_each_type, array(
        'name' => __('Review Image', 'trayang'),
        'id'   => 'review_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));
    
    // ฟิลด์สำหรับหัวข้อ
    $cmb_review_each_type->add_group_field($review_group_each_type, array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับคำอธิบาย
    $cmb_review_each_type->add_group_field($review_group_each_type, array(
        'name' => __('Review Description', 'trayang'),
        'id'   => 'review_description',
        'type' => 'textarea_small',
    ));
    
    // ฟิลด์สำหรับ Avatar
    $cmb_review_each_type->add_group_field($review_group_each_type, array(
        'name' => __('Avatar Image', 'trayang'),
        'id'   => 'avatar_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Avatar', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    // ฟิลด์สำหรับชื่อ
    $cmb_review_each_type->add_group_field($review_group_each_type, array(
        'name' => __('Name', 'trayang'),
        'id'   => 'name',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับรายละเอียด
    $cmb_review_each_type->add_group_field($review_group_each_type, array(
        'name' => __('Detail', 'trayang'),
        'id'   => 'detail',
        'type' => 'text',
    ));


    $cmb_each_stamp_1 = new_cmb2_box(array(
        'id'            => 'each_stamp_1_metabox',
        'title'         => __('Self Inking Stamp Image', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'),
    ));
    
    // สร้าง Group Field
    $each_stamp_images = $cmb_each_stamp_1->add_field(array(
        'id'          => 'each_stamp_images_group_1',
        'type'        => 'group',
        'description' => __('Add images for each stamp.', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'),
            'add_button'    => __('Add Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพในกลุ่ม
    $cmb_each_stamp_1->add_group_field($each_stamp_images, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_stamp_2 = new_cmb2_box(array(
        'id'            => 'each_stamp_2_metabox',
        'title'         => __('Handle Stamp Image', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'),
    ));
    
    // สร้าง Group Field
    $each_stamp_images = $cmb_each_stamp_2->add_field(array(
        'id'          => 'each_stamp_images_group_2',
        'type'        => 'group',
        'description' => __('Add images for each stamp.', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'),
            'add_button'    => __('Add Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพในกลุ่ม
    $cmb_each_stamp_2->add_group_field($each_stamp_images, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_stamp_3 = new_cmb2_box(array(
        'id'            => 'each_stamp_3_metabox',
        'title'         => __('Large Rubber Stamp Image', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'),
    ));
    
    // สร้าง Group Field
    $each_stamp_images = $cmb_each_stamp_3->add_field(array(
        'id'          => 'each_stamp_images_group_3',
        'type'        => 'group',
        'description' => __('Add images for each stamp.', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'),
            'add_button'    => __('Add Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพในกลุ่ม
    $cmb_each_stamp_3->add_group_field($each_stamp_images, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));


    $cmb_each_stamp_4 = new_cmb2_box(array(
        'id'            => 'each_stamp_4_metabox',
        'title'         => __('Wholesale Rubber Stamps Image', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'),
    ));
    
    // สร้าง Group Field
    $each_stamp_images = $cmb_each_stamp_4->add_field(array(
        'id'          => 'each_stamp_images_group_4',
        'type'        => 'group',
        'description' => __('Add images for each stamp.', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'),
            'add_button'    => __('Add Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพในกลุ่ม
    $cmb_each_stamp_4->add_group_field($each_stamp_images, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));


    $cmb_each_stamp_5 = new_cmb2_box(array(
        'id'            => 'each_stamp_5_metabox',
        'title'         => __('Stamp Ink Image', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'),
    ));
    
    // สร้าง Group Field
    $each_stamp_images = $cmb_each_stamp_5->add_field(array(
        'id'          => 'each_stamp_images_group_5',
        'type'        => 'group',
        'description' => __('Add images for each stamp.', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'),
            'add_button'    => __('Add Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพในกลุ่ม
    $cmb_each_stamp_5->add_group_field($each_stamp_images, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_each_stamp_6 = new_cmb2_box(array(
        'id'            => 'each_stamp_6_metabox',
        'title'         => __('Design a Company Logo Image', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-each-type-of-stamp.php'),
    ));
    
    // สร้าง Group Field
    $each_stamp_images = $cmb_each_stamp_6->add_field(array(
        'id'          => 'each_stamp_images_group_6',
        'type'        => 'group',
        'description' => __('Add images for each stamp.', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'),
            'add_button'    => __('Add Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพในกลุ่ม
    $cmb_each_stamp_6->add_group_field($each_stamp_images, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));



    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-name-stamp.php'
    $cmb_name_stamp = new_cmb2_box(array(
        'id'            => 'name_stamp_metabox',
        'title'         => __('Name Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-name-stamp.php'),
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Hero Name Stamp H1', 'trayang'),
        'id'   => 'hero_name_stamp_h1',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 3', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_3',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Name Stamp Header 2', 'trayang'),
        'id'   => 'name_stamp_header_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_name_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    $cmb_name_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Header', 'trayang'),
        'id'   => 'why_do_you_have_to_order_header',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_1',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_1',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_3',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_3',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Header', 'trayang'),
        'id'   => 'types_of_stamps_produce_header',
        'type' => 'text',
    ));
    
    $cmb_name_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image D 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_d_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image M 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_m_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Header 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_header_1',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_1',
        'type' => 'text',
    ));
    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_1',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_2',
        'type' => 'text',
    ));
    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_3',
        'type' => 'text',
    ));
    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_3',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_4',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_4',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Bottom Link', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_bottom_link',
        'type' => 'text_url',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Bottom Text', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_bottom_text',
        'type' => 'text',
    ));
    
    $cmb_name_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image D 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_d_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_name_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image M 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_m_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Header 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_header_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_1',
        'type' => 'text',
    ));
    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_1',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_2',
        'type' => 'text',
    ));
    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_3',
        'type' => 'text',
    ));
    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_3',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_4',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_4',
        'type' => 'text',
    ));
    
    $cmb_name_stamp->add_field(array(
        'name' => __('Order Header Each Type Of Stamp', 'trayang'),
        'id'   => 'order_header_each_type_of_stamp',
        'type' => 'text',
    ));
    
    $cmb_name_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 1', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_1',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('OOrder Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_2',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_3',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('How Is It Better Header', 'trayang'),
        'id'   => 'how_is_it_better_header',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('How Is It Better Detail', 'trayang'),
        'id'   => 'how_is_it_better_detail',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Our Work Header Detail', 'trayang'),
        'id'   => 'our_work_header_detail',
        'type' => 'text',
    ));


    $cmb_name_stamp->add_field(array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));

    $cmb_name_stamp->add_field(array(
        'name' => __('Review Header Detail', 'trayang'),
        'id'   => 'review_header_detail',
        'type' => 'text',
    ));


    $cmb_our_work_slider_name_stamp = new_cmb2_box(array(
        'id'            => 'our_work_slider_name_stamp_metabox',
        'title'         => __('Our Work Slider Name Stamp', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-name-stamp.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group_name_stamp = $cmb_our_work_slider_name_stamp->add_field(array(
        'id'          => 'slider_images_name_stamp',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_name_stamp->add_group_field($slider_group_name_stamp, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));


    $cmb_review_name_stamp = new_cmb2_box(array(
        'id'            => 'review_name_stamp_metabox',
        'title'         => __('Reviews Name Stamp', 'trayang'),
        'object_types'  => array('page'), // หรือปรับตาม post type
        'show_on'       => array('key' => 'page-template', 'value' => 'template-name-stamp.php'), // ใช้กับ template เฉพาะ
    ));
    
    // สร้าง Group Field
    $review_group_name_stamp = $cmb_review_name_stamp->add_field(array(
        'id'          => 'review_group_name_stamp',
        'type'        => 'group',
        'description' => __('Add Reviews', 'trayang'),
        'options'     => array(
            'group_title'   => __('Review {#}', 'trayang'),
            'add_button'    => __('Add Review', 'trayang'),
            'remove_button' => __('Remove Review', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพหลัก
    $cmb_review_name_stamp->add_group_field($review_group_name_stamp, array(
        'name' => __('Review Image', 'trayang'),
        'id'   => 'review_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));
    
    // ฟิลด์สำหรับหัวข้อ
    $cmb_review_name_stamp->add_group_field($review_group_name_stamp, array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับคำอธิบาย
    $cmb_review_name_stamp->add_group_field($review_group_name_stamp, array(
        'name' => __('Review Description', 'trayang'),
        'id'   => 'review_description',
        'type' => 'textarea_small',
    ));
    
    // ฟิลด์สำหรับ Avatar
    $cmb_review_name_stamp->add_group_field($review_group_name_stamp, array(
        'name' => __('Avatar Image', 'trayang'),
        'id'   => 'avatar_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Avatar', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    // ฟิลด์สำหรับชื่อ
    $cmb_review_name_stamp->add_group_field($review_group_name_stamp, array(
        'name' => __('Name', 'trayang'),
        'id'   => 'name',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับรายละเอียด
    $cmb_review_name_stamp->add_group_field($review_group_name_stamp, array(
        'name' => __('Detail', 'trayang'),
        'id'   => 'detail',
        'type' => 'text',
    ));



    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-date-stamp.php'
    $cmb_date_stamp = new_cmb2_box(array(
        'id'            => 'date_stamp_metabox',
        'title'         => __('Date Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-date-stamp.php'),
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Hero Name Stamp H1', 'trayang'),
        'id'   => 'hero_name_stamp_h1',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 3', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_3',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Name Stamp Header 2', 'trayang'),
        'id'   => 'name_stamp_header_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_date_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    $cmb_date_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Header', 'trayang'),
        'id'   => 'why_do_you_have_to_order_header',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_1',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_1',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_3',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_3',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Header', 'trayang'),
        'id'   => 'types_of_stamps_produce_header',
        'type' => 'text',
    ));
    
    $cmb_date_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image D 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_d_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image M 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_m_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Header 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_header_1',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_1',
        'type' => 'text',
    ));
    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_1',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_2',
        'type' => 'text',
    ));
    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_3',
        'type' => 'text',
    ));
    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_3',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 1 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_1_4',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_4',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Bottom Link', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_bottom_link',
        'type' => 'text_url',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Bottom Text', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_bottom_text',
        'type' => 'text',
    ));
    
    $cmb_date_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image D 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_d_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_date_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image M 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_m_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Header 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_header_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_1',
        'type' => 'text',
    ));
    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_1',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_2',
        'type' => 'text',
    ));
    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_3',
        'type' => 'text',
    ));
    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 3', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_3',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle Span 2 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_span_2_4',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 4', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_4',
        'type' => 'text',
    ));
    
    $cmb_date_stamp->add_field(array(
        'name' => __('Order Header Each Type Of Stamp', 'trayang'),
        'id'   => 'order_header_each_type_of_stamp',
        'type' => 'text',
    ));
    
    $cmb_date_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 1', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_1',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_2',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_3',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('How Is It Better Header', 'trayang'),
        'id'   => 'how_is_it_better_header',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('How Is It Better Detail', 'trayang'),
        'id'   => 'how_is_it_better_detail',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));

    $cmb_date_stamp->add_field(array(
        'name' => __('Our Work Header Detail', 'trayang'),
        'id'   => 'our_work_header_detail',
        'type' => 'text',
    ));


    $cmb_our_work_slider_date_stamp = new_cmb2_box(array(
        'id'            => 'our_work_slider_date_stamp_metabox',
        'title'         => __('Our Work Slider Date Stamp', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-date-stamp.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group_date_stamp = $cmb_our_work_slider_date_stamp->add_field(array(
        'id'          => 'slider_images_date_stamp',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_date_stamp->add_group_field($slider_group_date_stamp, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_review_date_stamp = new_cmb2_box(array(
        'id'            => 'review_date_stamp_metabox',
        'title'         => __('Reviews Date Stamp', 'trayang'),
        'object_types'  => array('page'), // หรือปรับตาม post type
        'show_on'       => array('key' => 'page-template', 'value' => 'template-date-stamp.php'), // ใช้กับ template เฉพาะ
    ));
    
    // สร้าง Group Field
    $review_group_date_stamp = $cmb_review_date_stamp->add_field(array(
        'id'          => 'review_group_date_stamp',
        'type'        => 'group',
        'description' => __('Add Reviews', 'trayang'),
        'options'     => array(
            'group_title'   => __('Review {#}', 'trayang'),
            'add_button'    => __('Add Review', 'trayang'),
            'remove_button' => __('Remove Review', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพหลัก
    $cmb_review_date_stamp->add_group_field($review_group_date_stamp, array(
        'name' => __('Review Image', 'trayang'),
        'id'   => 'review_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));
    
    // ฟิลด์สำหรับหัวข้อ
    $cmb_review_date_stamp->add_group_field($review_group_date_stamp, array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับคำอธิบาย
    $cmb_review_date_stamp->add_group_field($review_group_date_stamp, array(
        'name' => __('Review Description', 'trayang'),
        'id'   => 'review_description',
        'type' => 'textarea_small',
    ));
    
    // ฟิลด์สำหรับ Avatar
    $cmb_review_date_stamp->add_group_field($review_group_date_stamp, array(
        'name' => __('Avatar Image', 'trayang'),
        'id'   => 'avatar_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Avatar', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    // ฟิลด์สำหรับชื่อ
    $cmb_review_date_stamp->add_group_field($review_group_date_stamp, array(
        'name' => __('Name', 'trayang'),
        'id'   => 'name',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับรายละเอียด
    $cmb_review_date_stamp->add_group_field($review_group_date_stamp, array(
        'name' => __('Detail', 'trayang'),
        'id'   => 'detail',
        'type' => 'text',
    ));


    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-company-stamp.php'
    $cmb_company_stamp = new_cmb2_box(array(
        'id'            => 'company_stamp_metabox',
        'title'         => __('Company Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-company-stamp.php'),
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 3', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_3',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_head',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Sub Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_sub_head',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_company_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_company_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));

    $cmb_company_stamp->add_field(array(
        'name' => __('Our Work Text Detail Home', 'trayang'),
        'id'   => 'our_work_text_detail_home',
        'type' => 'text',
    ));


    $cmb_our_work_slider_company_stamp = new_cmb2_box(array(
        'id'            => 'our_work_slider_company_stamp_metabox',
        'title'         => __('Our Work Slider Comapny Stamp', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-company-stamp.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group_company_stamp = $cmb_our_work_slider_company_stamp->add_field(array(
        'id'          => 'slider_images_company_stamp',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_company_stamp->add_group_field($slider_group_company_stamp, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));
    
    
    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-wholesale-stamp.php'
    $cmb_wholesale_stamp = new_cmb2_box(array(
        'id'            => 'wholesale_stamp_metabox',
        'title'         => __('Wholesale Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-wholesale-stamp.php'),
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 3', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_3',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_head',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Sub Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_sub_head',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_wholesale_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_wholesale_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));

    $cmb_wholesale_stamp->add_field(array(
        'name' => __('Our Work Text Detail Home', 'trayang'),
        'id'   => 'our_work_text_detail_home',
        'type' => 'text',
    ));


    $cmb_our_work_slider_wholesale_stamp = new_cmb2_box(array(
        'id'            => 'our_work_slider_wholesale_stamp_metabox',
        'title'         => __('Our Work Slider Wholesale Stamp', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-wholesale-stamp.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group_wholesale_stamp = $cmb_our_work_slider_wholesale_stamp->add_field(array(
        'id'          => 'slider_images_wholesale_stamp',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_wholesale_stamp->add_group_field($slider_group_wholesale_stamp, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));


    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-plastic-stamp.php'
    $cmb_plastic_stamp = new_cmb2_box(array(
        'id'            => 'plastic_stamp_metabox',
        'title'         => __('Plastic Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-plastic-stamp.php'),
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 3', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_3',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_head',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Sub Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_sub_head',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_plastic_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_plastic_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));

    $cmb_plastic_stamp->add_field(array(
        'name' => __('Our Work Text Detail Home', 'trayang'),
        'id'   => 'our_work_text_detail_home',
        'type' => 'text',
    ));


    $cmb_our_work_slider_plastic_stamp = new_cmb2_box(array(
        'id'            => 'our_work_slider_plastic_stamp_metabox',
        'title'         => __('Our Work Slider Plastic Stamp', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-plastic-stamp.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group_plastic_stamp = $cmb_our_work_slider_plastic_stamp->add_field(array(
        'id'          => 'slider_images_plastic_stamp',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_plastic_stamp->add_group_field($slider_group_plastic_stamp, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));


    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-large-rubber-stamp.php'
    $cmb_large_rubber_stamp = new_cmb2_box(array(
        'id'            => 'large_rubber_stamp_metabox',
        'title'         => __('Plastic Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-large-rubber-stamp.php'),
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 3', 'trayang'),
        'id'   => 'trayang_breadcrumb_name_stamp_3',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_head',
        'type' => 'text',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Cheap Price Header H2 Sub Head', 'trayang'),
        'id'   => 'cheap_price_header_h2_sub_head',
        'type' => 'text',
    ));

    $cmb_large_rubber_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_large_rubber_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_large_rubber_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_large_rubber_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_large_rubber_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_large_rubber_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));
    

    $cmb_large_rubber_stamp->add_field(array(
        'name' => __('Our Work Text Detail Home', 'trayang'),
        'id'   => 'our_work_text_detail_home',
        'type' => 'text',
    ));


    $cmb_our_work_slider_large_rubber = new_cmb2_box(array(
        'id'            => 'our_work_slider_large_rubber_metabox',
        'title'         => __('Our Work Slider Large Rubber Stamp', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-large-rubber-stamp.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group_large_rubber = $cmb_our_work_slider_large_rubber->add_field(array(
        'id'          => 'slider_images_large_rubber',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_large_rubber->add_group_field($slider_group_large_rubber, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));

    
    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-accepting-work-self-inking-stamp.php'
    $cmb_self_inking_stamp = new_cmb2_box(array(
        'id'            => 'self_inking_stamp_metabox',
        'title'         => __('Self Inking Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-accepting-work-self-inking-stamp.php'),
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Name Stamp Header 2', 'trayang'),
        'id'   => 'name_stamp_header_2',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Header', 'trayang'),
        'id'   => 'why_do_you_have_to_order_header',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_1',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_1',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_2',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_2',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_3',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_3',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Header', 'trayang'),
        'id'   => 'order_with_us_header',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Order With Us Detail Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_with_us_detail_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Order With Us Detail Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_with_us_detail_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Order With Us Detail Text Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_with_us_detail_text_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Header H3 1', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_header_h3_1',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Header P 1', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_header_p_1',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Order With Us Detail Text Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_with_us_detail_text_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Header H3 2', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_header_h3_2',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Header P 2', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_header_p_2',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field( array(
        'name' => __( 'Order With Us Detail Text Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_with_us_detail_text_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Header H3 3', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_header_h3_3',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Header P 3', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_header_p_3',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Bottom Link', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_bottom_link',
        'type' => 'text_url',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order With Us Detail Text Description Bottom Text', 'trayang'),
        'id'   => 'order_with_us_detail_text_description_bottom_text',
        'type' => 'text',
    ));

    
    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order Header Each Type Of Stamp', 'trayang'),
        'id'   => 'order_header_each_type_of_stamp',
        'type' => 'text',
    ));
    
    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 1', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_1',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('OOrder Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_2',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Order Step Datail Each Type Of Stamp 2', 'trayang'),
        'id'   => 'order_step_datail_each_type_of_stamp_3',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('How Is It Better Header', 'trayang'),
        'id'   => 'how_is_it_better_header',
        'type' => 'text',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('How Is It Better Detail', 'trayang'),
        'id'   => 'how_is_it_better_detail',
        'type' => 'text',
    ));
    
    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));

    
    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Frequently Asked Questions Header', 'trayang'),
        'id'   => 'frequently_asked_questions_header',
        'type' => 'text',
    ));

    // สร้าง Group Field สำหรับ FAQ
    $faq_group_field_id = $cmb_self_inking_stamp->add_field(array(
        'id'          => 'faq_group',
        'type'        => 'group',
        'description' => __('Add FAQ items', 'trayang'),
        'options'     => array(
            'group_title'   => __('FAQ {#}', 'trayang'), // หัวข้อของแต่ละกลุ่ม
            'add_button'    => __('Add FAQ', 'trayang'), // ปุ่มเพิ่มรายการ
            'remove_button' => __('Remove FAQ', 'trayang'), // ปุ่มลบรายการ
            'sortable'      => true, // อนุญาตให้ลากเรียงลำดับได้
        ),
    ));

    // คำถาม (Header)
    $cmb_self_inking_stamp->add_group_field($faq_group_field_id, array(
        'name' => __('Question', 'trayang'),
        'id'   => 'question',
        'type' => 'text',
    ));

    // คำตอบ (Text)
    $cmb_self_inking_stamp->add_group_field($faq_group_field_id, array(
        'name' => __('Answer', 'trayang'),
        'id'   => 'answer',
        'type' => 'textarea_small', // ช่องข้อความขนาดเล็ก
    ));
    
    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Example Load More Header', 'trayang'),
        'id'   => 'example_load_more_header',
        'type' => 'text',
    ));
    
    // สร้าง Group Field
    $group_field_id = $cmb_self_inking_stamp->add_field(array(
        'id'          => 'load_more_images',
        'type'        => 'group',
        'description' => __('Add Load More Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'), // หัวข้อของแต่ละกลุ่ม
            'add_button'    => __('Add Another Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true, // อนุญาตให้ลากเรียงลำดับได้
        ),
    ));

    // ฟิลด์สำหรับอัปโหลดรูปภาพ
    $cmb_self_inking_stamp->add_group_field($group_field_id, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false, // ซ่อนฟิลด์ URL
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail', // ขนาดตัวอย่าง
    ));

    // ฟิลด์สำหรับลิงก์ (ถ้ามี)
    $cmb_self_inking_stamp->add_group_field($group_field_id, array(
        'name' => __('Image Link', 'trayang'),
        'id'   => 'image_link',
        'type' => 'text_url',
    ));

    $cmb_self_inking_stamp->add_field(array(
        'name' => __('Example Load More Image Button', 'trayang'),
        'id'   => 'example_load_more_image_button',
        'type' => 'text',
    ));


    $cmb_review_self_inking = new_cmb2_box(array(
        'id'            => 'review_self_inking_metabox',
        'title'         => __('Reviews Self Inking', 'trayang'),
        'object_types'  => array('page'), // หรือปรับตาม post type
        'show_on'       => array('key' => 'page-template', 'value' => 'template-accepting-work-self-inking-stamp.php'), // ใช้กับ template เฉพาะ
    ));
    
    // สร้าง Group Field
    $review_group_self_inking = $cmb_review_self_inking->add_field(array(
        'id'          => 'review_group_self_inking',
        'type'        => 'group',
        'description' => __('Add Reviews', 'trayang'),
        'options'     => array(
            'group_title'   => __('Review {#}', 'trayang'),
            'add_button'    => __('Add Review', 'trayang'),
            'remove_button' => __('Remove Review', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพหลัก
    $cmb_review_self_inking->add_group_field($review_group_self_inking, array(
        'name' => __('Review Image', 'trayang'),
        'id'   => 'review_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));
    
    // ฟิลด์สำหรับหัวข้อ
    $cmb_review_self_inking->add_group_field($review_group_self_inking, array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับคำอธิบาย
    $cmb_review_self_inking->add_group_field($review_group_self_inking, array(
        'name' => __('Review Description', 'trayang'),
        'id'   => 'review_description',
        'type' => 'textarea_small',
    ));
    
    // ฟิลด์สำหรับ Avatar
    $cmb_review_self_inking->add_group_field($review_group_self_inking, array(
        'name' => __('Avatar Image', 'trayang'),
        'id'   => 'avatar_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Avatar', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    // ฟิลด์สำหรับชื่อ
    $cmb_review_self_inking->add_group_field($review_group_self_inking, array(
        'name' => __('Name', 'trayang'),
        'id'   => 'name',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับรายละเอียด
    $cmb_review_self_inking->add_group_field($review_group_self_inking, array(
        'name' => __('Detail', 'trayang'),
        'id'   => 'detail',
        'type' => 'text',
    ));


    

    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-urgent-rubber-stamp-making.php'
    $cmb_urgent_rubber_stamp = new_cmb2_box(array(
        'id'            => 'urgent_rubber_stamp_metabox',
        'title'         => __('Urgent Rubber Stamp Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-urgent-rubber-stamp-making.php'),
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Name Stamp Header 2', 'trayang'),
        'id'   => 'name_stamp_header_2',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 1', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_1',
        'type' => 'text',
    ));
    
    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 2', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_2',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Each Stamp Second Text Bottom Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'each_stamp_second_text_bottom_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Each Stamp Second Text Bottom Detail 3', 'trayang'),
        'id'   => 'each_stamp_second_text_bottom_detail_3',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Date Stamp Second Image Order Now', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'date_stamp_second_image_order_now',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Header', 'trayang'),
        'id'   => 'why_do_you_have_to_order_header',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_1',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 1', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_1',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_2',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 2', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_2',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Why Do You Have To Order Detail Image 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'why_do_you_have_to_order_detail_image_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Header 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_header_3',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Why Do You Have To Order Detail Text 3', 'trayang'),
        'id'   => 'why_do_you_have_to_order_detail_text_3',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Header', 'trayang'),
        'id'   => 'types_of_stamps_produce_header',
        'type' => 'text',
    ));
    
    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image D 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_d_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image M 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_m_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Header 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_header_1',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 1 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_1_1',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Bottom Link', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_bottom_link',
        'type' => 'text_url',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Bottom Text', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_bottom_text',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image D 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_d_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_urgent_rubber_stamp->add_field( array(
        'name' => __( 'Types Of Stamps Produce Detail Image M 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'types_of_stamps_produce_detail_image_m_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Header 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_header_2',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Middle 2 1', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_middle_2_1',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Types Of Stamps Produce Detail Text Bottom Link 2', 'trayang'),
        'id'   => 'types_of_stamps_produce_detail_text_bottom_link_2',
        'type' => 'text_url',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Price And Minimum Header', 'trayang'),
        'id'   => 'price_and_minimum_header',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Price And Minimum Detail Header H3', 'trayang'),
        'id'   => 'price_and_minimum_detail_header_h3',
        'type' => 'text',
    ));
    
    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Price And Minimum Detail Header P', 'trayang'),
        'id'   => 'price_and_minimum_detail_header_p',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Order Header Home', 'trayang'),
        'id'   => 'order_header_home',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Order Step Datail Home 1', 'trayang'),
        'id'   => 'order_step_datail_home_1',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Order Step Datail Home 2', 'trayang'),
        'id'   => 'order_step_datail_home_2',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Order Step Datail Home 3', 'trayang'),
        'id'   => 'order_step_datail_home_3',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Order Step Description Urgent', 'trayang'),
        'id'   => 'order_step_description_urgent',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('How Is It Better Header', 'trayang'),
        'id'   => 'how_is_it_better_header',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('How Is It Better Detail', 'trayang'),
        'id'   => 'how_is_it_better_detail',
        'type' => 'text',
    ));
    
    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Our Work Header', 'trayang'),
        'id'   => 'our_work_header',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Our Work Header Detail', 'trayang'),
        'id'   => 'our_work_header_detail',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Review Header Detail', 'trayang'),
        'id'   => 'review_header_detail',
        'type' => 'text',
    ));

    $cmb_urgent_rubber_stamp->add_field(array(
        'name' => __('Frequently Asked Questions Header', 'trayang'),
        'id'   => 'frequently_asked_questions_header',
        'type' => 'text',
    ));

    // สร้าง Group Field สำหรับ FAQ
    $faq_group_field_id = $cmb_urgent_rubber_stamp->add_field(array(
        'id'          => 'faq_group',
        'type'        => 'group',
        'description' => __('Add FAQ items', 'trayang'),
        'options'     => array(
            'group_title'   => __('FAQ {#}', 'trayang'), // หัวข้อของแต่ละกลุ่ม
            'add_button'    => __('Add FAQ', 'trayang'), // ปุ่มเพิ่มรายการ
            'remove_button' => __('Remove FAQ', 'trayang'), // ปุ่มลบรายการ
            'sortable'      => true, // อนุญาตให้ลากเรียงลำดับได้
        ),
    ));

    // คำถาม (Header)
    $cmb_urgent_rubber_stamp->add_group_field($faq_group_field_id, array(
        'name' => __('Question', 'trayang'),
        'id'   => 'question',
        'type' => 'text',
    ));

    // คำตอบ (Text)
    $cmb_urgent_rubber_stamp->add_group_field($faq_group_field_id, array(
        'name' => __('Answer', 'trayang'),
        'id'   => 'answer',
        'type' => 'textarea_small', // ช่องข้อความขนาดเล็ก
    ));


    $cmb_our_work_slider_urgent_stamp = new_cmb2_box(array(
        'id'            => 'our_work_slider_urgent_stamp_metabox',
        'title'         => __('Our Work Slider Urgent Stamp', 'trayang'),
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-urgent-rubber-stamp-making.php'), // ระบุเทมเพลตที่ต้องการ
    ));
    
    // สร้าง Group Field สำหรับ Repeater
    $slider_group_urgent_stamp = $cmb_our_work_slider_urgent_stamp->add_field(array(
        'id'          => 'slider_images_urgent_stamp',
        'type'        => 'group',
        'description' => __('Add Slider Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Slide {#}', 'trayang'), // ตั้งชื่อ Group
            'add_button'    => __('Add Slide', 'trayang'), // ปุ่มเพิ่ม
            'remove_button' => __('Remove Slide', 'trayang'), // ปุ่มลบ
            'sortable'      => true, // ลากเพื่อเรียงลำดับ
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work_slider_urgent_stamp->add_group_field($slider_group_urgent_stamp, array(
        'name' => __('Slide Image', 'trayang'),
        'id'   => 'slide_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));


    $cmb_review_urgent_stamp = new_cmb2_box(array(
        'id'            => 'review_urgent_stamp_metabox',
        'title'         => __('Reviews Each Type', 'trayang'),
        'object_types'  => array('page'), // หรือปรับตาม post type
        'show_on'       => array('key' => 'page-template', 'value' => 'template-urgent-rubber-stamp-making.php'), // ใช้กับ template เฉพาะ
    ));
    
    // สร้าง Group Field
    $review_group_urgent_stamp = $cmb_review_urgent_stamp->add_field(array(
        'id'          => 'review_group_urgent_stamp',
        'type'        => 'group',
        'description' => __('Add Reviews', 'trayang'),
        'options'     => array(
            'group_title'   => __('Review {#}', 'trayang'),
            'add_button'    => __('Add Review', 'trayang'),
            'remove_button' => __('Remove Review', 'trayang'),
            'sortable'      => true,
        ),
    ));
    
    // ฟิลด์สำหรับรูปภาพหลัก
    $cmb_review_urgent_stamp->add_group_field($review_group_urgent_stamp, array(
        'name' => __('Review Image', 'trayang'),
        'id'   => 'review_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));
    
    // ฟิลด์สำหรับหัวข้อ
    $cmb_review_urgent_stamp->add_group_field($review_group_urgent_stamp, array(
        'name' => __('Review Header', 'trayang'),
        'id'   => 'review_header',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับคำอธิบาย
    $cmb_review_urgent_stamp->add_group_field($review_group_urgent_stamp, array(
        'name' => __('Review Description', 'trayang'),
        'id'   => 'review_description',
        'type' => 'textarea_small',
    ));
    
    // ฟิลด์สำหรับ Avatar
    $cmb_review_urgent_stamp->add_group_field($review_group_urgent_stamp, array(
        'name' => __('Avatar Image', 'trayang'),
        'id'   => 'avatar_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Avatar', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));
    
    // ฟิลด์สำหรับชื่อ
    $cmb_review_urgent_stamp->add_group_field($review_group_urgent_stamp, array(
        'name' => __('Name', 'trayang'),
        'id'   => 'name',
        'type' => 'text',
    ));
    
    // ฟิลด์สำหรับรายละเอียด
    $cmb_review_urgent_stamp->add_group_field($review_group_urgent_stamp, array(
        'name' => __('Detail', 'trayang'),
        'id'   => 'detail',
        'type' => 'text',
    ));




    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-stamp-ink.php'
    $cmb_stamp_ink = new_cmb2_box(array(
        'id'            => 'stamp_ink_metabox',
        'title'         => __('Stamp Ink Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-stamp-ink.php'),
    ));

    $cmb_stamp_ink->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_stamp_ink->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_stamp_ink->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_stamp_ink->add_field(array(
        'name' => __('Name Stamp Header 2', 'trayang'),
        'id'   => 'name_stamp_header_2',
        'type' => 'text',
    ));

    $cmb_stamp_ink->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_stamp_ink->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_stamp_ink->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_stamp_ink->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-design-company-logo.php'
    $cmb_design_company_logo = new_cmb2_box(array(
        'id'            => 'design_company_logo_metabox',
        'title'         => __('Design Company Logo Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-design-company-logo.php'),
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Name Stamp Header 2', 'trayang'),
        'id'   => 'name_stamp_header_2',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field( array(
        'name' => __( 'Name Stamp Second Image D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_design_company_logo->add_field( array(
        'name' => __( 'Name Stamp Second Image M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'name_stamp_second_image_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Name Stamp Second Detail Header', 'trayang'),
        'id'   => 'name_stamp_second_detail_header',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Name Stamp Second Detail Text', 'trayang'),
        'id'   => 'name_stamp_second_detail_text',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Work Step Header', 'trayang'),
        'id'   => 'work_step_header',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field( array(
        'name' => __( 'Work Step Icon 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'work_step_icon_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Work Step Number 1', 'trayang'),
        'id'   => 'work_step_number_1',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Work Step Detail 1', 'trayang'),
        'id'   => 'work_step_detail_1',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field( array(
        'name' => __( 'Work Step Icon 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'work_step_icon_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Work Step Number 2', 'trayang'),
        'id'   => 'work_step_number_2',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Work Step Detail 2', 'trayang'),
        'id'   => 'work_step_detail_2',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field( array(
        'name' => __( 'Work Step Icon 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'work_step_icon_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Work Step Number 3', 'trayang'),
        'id'   => 'work_step_number_3',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Work Step Detail 3', 'trayang'),
        'id'   => 'work_step_detail_3',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Example Design Logo Load More Header', 'trayang'),
        'id'   => 'example_design_logo_load_more_header',
        'type' => 'text',
    ));
    
    // สร้าง Group Field
    $group_field_id = $cmb_design_company_logo->add_field(array(
        'id'          => 'load_more_images',
        'type'        => 'group',
        'description' => __('Add Load More Images', 'trayang'),
        'options'     => array(
            'group_title'   => __('Image {#}', 'trayang'), // หัวข้อของแต่ละกลุ่ม
            'add_button'    => __('Add Another Image', 'trayang'),
            'remove_button' => __('Remove Image', 'trayang'),
            'sortable'      => true, // อนุญาตให้ลากเรียงลำดับได้
        ),
    ));

    // ฟิลด์สำหรับอัปโหลดรูปภาพ
    $cmb_design_company_logo->add_group_field($group_field_id, array(
        'name' => __('Image', 'trayang'),
        'id'   => 'image',
        'type' => 'file',
        'options' => array(
            'url' => false, // ซ่อนฟิลด์ URL
        ),
        'text' => array(
            'add_upload_file_text' => __('Add Image', 'trayang'),
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail', // ขนาดตัวอย่าง
    ));

    // ฟิลด์สำหรับลิงก์ (ถ้ามี)
    $cmb_design_company_logo->add_group_field($group_field_id, array(
        'name' => __('Image Link', 'trayang'),
        'id'   => 'image_link',
        'type' => 'text_url',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Example Load More Image Button', 'trayang'),
        'id'   => 'example_load_more_image_button',
        'type' => 'text',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Button Link Design Logo', 'trayang'),
        'id'   => 'button_link_design_logo',
        'type' => 'text_url',
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Button Image Design Logo', 'trayang'),
        'id'   => 'button_image_design_logo',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));

    $cmb_design_company_logo->add_field(array(
        'name' => __('Button Hover Image Design Logo', 'trayang'),
        'id'   => 'button_hover_image_design_logo',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Hover Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));


    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-contact-us.php.php'
    $cmb_contact_us_page = new_cmb2_box(array(
        'id'            => 'contact_us_page_metabox',
        'title'         => __('Contact Us Setting', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-contact-us.php'),
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Header', 'trayang'),
        'id'   => 'contact_us_page_header',
        'type' => 'text',
    ));
    
    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Detail', 'trayang'),
        'id'   => 'contact_us_page_detail',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Maps Header', 'trayang'),
        'id'   => 'contact_us_maps_header',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field( array(
        'name' => __( 'Contact Us Maps Location Text Image', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'contact_us_maps_location_text_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Maps Location Text Header H3', 'trayang'),
        'id'   => 'contact_us_maps_location_text_header_h3',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Maps Location Text Detail', 'trayang'),
        'id'   => 'contact_us_maps_location_text_detail',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Google Maps Link 1', 'trayang'),
        'id'   => 'google_maps_link_1',
        'type' => 'text_url',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Maps Location Text Header H3 2', 'trayang'),
        'id'   => 'contact_us_maps_location_text_header_h3_2',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Maps Location Text Detail 2', 'trayang'),
        'id'   => 'contact_us_maps_location_text_detail_2',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Google Maps Link 2', 'trayang'),
        'id'   => 'google_maps_link_2',
        'type' => 'text_url',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Header 1', 'trayang'),
        'id'   => 'contact_us_page_header_1',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Detail Span 1', 'trayang'),
        'id'   => 'contact_us_page_detail_span_1',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Detail 1', 'trayang'),
        'id'   => 'contact_us_page_detail_1',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Detail Span 2', 'trayang'),
        'id'   => 'contact_us_page_detail_span_2',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Detail 2', 'trayang'),
        'id'   => 'contact_us_page_detail_2',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Detail Span 3', 'trayang'),
        'id'   => 'contact_us_page_detail_span_3',
        'type' => 'text',
    ));

    $cmb_contact_us_page->add_field(array(
        'name' => __('Contact Us Page Detail 3', 'trayang'),
        'id'   => 'contact_us_page_detail_3',
        'type' => 'text',
    ));


    // Custom Meta Box สำหรับเพจที่ใช้ Template 'template-our-work.php'
    $cmb_our_work = new_cmb2_box(array(
        'id'            => 'our_work_metabox',
        'title'         => __('Our Work', 'trayang'),
        'object_types'  => array('page'),
        'show_on'       => array('key' => 'page-template', 'value' => 'template-our-work.php'),
    ));

    $cmb_our_work->add_field(array(
        'name' => __('Hero Each Stamp H1', 'trayang'),
        'id'   => 'hero_each_stamp_h1',
        'type' => 'text',
    ));

    $cmb_our_work->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 1', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_our_work->add_field(array(
        'name' => __('Trayang Breadcrumb Each Type 2', 'trayang'),
        'id'   => 'trayang_breadcrumb_each_type_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_our_work->add_field(array(
        'name' => __('Name Stamp Header 2', 'trayang'),
        'id'   => 'name_stamp_header_2',
        'type' => 'text',
    ));

    // สร้าง Group Field
    $our_work_group = $cmb_our_work->add_field(array(
        'id'          => 'our_work_group',
        'type'        => 'group',
        'description' => __('Add Our Work Items', 'trayang'),
        'options'     => array(
            'group_title'   => __('Our Work {#}', 'trayang'),
            'add_button'    => __('Add Work Item', 'trayang'),
            'remove_button' => __('Remove Work Item', 'trayang'),
            'sortable'      => true,
        ),
    ));

    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work->add_group_field($our_work_group, array(
        'name' => __('Work Image', 'trayang'),
        'id'   => 'work_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));

    // ฟิลด์สำหรับหัวข้อ
    $cmb_our_work->add_group_field($our_work_group, array(
        'name' => __('Header', 'trayang'),
        'id'   => 'work_header',
        'type' => 'text',
    ));

    // ฟิลด์สำหรับรายละเอียด
    $cmb_our_work->add_group_field($our_work_group, array(
        'name' => __('Details', 'trayang'),
        'id'   => 'work_details',
        'type' => 'textarea_small',
    ));

    // ฟิลด์สำหรับรูปภาพบริษัท
    $cmb_our_work->add_group_field($our_work_group, array(
        'name' => __('Work Image Logo', 'trayang'),
        'id'   => 'work_image_logo',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));

    // ฟิลด์สำหรับชื่อบริษัท
    $cmb_our_work->add_group_field($our_work_group, array(
        'name' => __('Company Name', 'trayang'),
        'id'   => 'company_name',
        'type' => 'text',
    ));



    // สร้าง Group Field
    $our_work_group_bottom = $cmb_our_work->add_field(array(
        'id'          => 'our_work_group_bottom',
        'type'        => 'group',
        'description' => __('Add Our Work Items 2', 'trayang'),
        'options'     => array(
            'group_title'   => __('Our Work {#}', 'trayang'),
            'add_button'    => __('Add Work Item', 'trayang'),
            'remove_button' => __('Remove Work Item', 'trayang'),
            'sortable'      => true,
        ),
    ));

    // ฟิลด์สำหรับรูปภาพ
    $cmb_our_work->add_group_field($our_work_group_bottom, array(
        'name' => __('Work Image 2', 'trayang'),
        'id'   => 'work_image_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'medium',
    ));

    // ฟิลด์สำหรับหัวข้อ
    $cmb_our_work->add_group_field($our_work_group_bottom, array(
        'name' => __('Header 2', 'trayang'),
        'id'   => 'work_header_2',
        'type' => 'text',
    ));

    // ฟิลด์สำหรับรายละเอียด
    $cmb_our_work->add_group_field($our_work_group_bottom, array(
        'name' => __('Details 2', 'trayang'),
        'id'   => 'work_details_2',
        'type' => 'textarea_small',
    ));

    // ฟิลด์สำหรับรูปภาพบริษัท
    $cmb_our_work->add_group_field($our_work_group_bottom, array(
        'name' => __('Work Image Logo 2', 'trayang'),
        'id'   => 'work_image_logo_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Image',
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png', 'image/gif'),
        ),
        'preview_size' => 'thumbnail',
    ));

    // ฟิลด์สำหรับชื่อบริษัท
    $cmb_our_work->add_group_field($our_work_group_bottom, array(
        'name' => __('Company Name 2', 'trayang'),
        'id'   => 'company_name_2',
        'type' => 'text',
    ));


    

    
}
add_action('cmb2_admin_init', 'register_custom_template_meta_boxes');

// สร้าง Custom Post Type สำหรับ Reusable Blocks
function create_reusable_blocks_post_type() {
    $labels = array(
        'name'               => __('Reusable Blocks', 'textdomain'),
        'singular_name'      => __('Reusable Block', 'textdomain'),
        'menu_name'          => __('Reusable Blocks', 'textdomain'),
        'name_admin_bar'     => __('Reusable Block', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'supports'           => array('title', 'editor'),
        'menu_icon'          => 'dashicons-screenoptions', // ตั้งค่าไอคอน
    );

    register_post_type('reusable_blocks', $args);
}
add_action('init', 'create_reusable_blocks_post_type');


function register_stamp_order_button_meta_fields() {
    $cmb_button = new_cmb2_box(array(
        'id'            => 'stamp_order_button_meta_box',
        'title'         => __('Stamp Order Button Settings', 'trayang'),
        'object_types'  => array('reusable_blocks'), // ใช้กับ Custom Post Type 'reusable_blocks'
        'show_on'       => array('key' => 'id', 'value' => get_page_by_title('Stamp Order Button', OBJECT, 'reusable_blocks')->ID),
    ));

    // ฟิลด์สำหรับลิงก์ของปุ่ม
    $cmb_button->add_field(array(
        'name' => __('Button Link', 'trayang'),
        'id'   => 'button_link',
        'type' => 'text_url',
    ));

    // ฟิลด์สำหรับรูปภาพปุ่มปกติ
    $cmb_button->add_field(array(
        'name' => __('Button Image', 'trayang'),
        'id'   => 'button_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));

    // ฟิลด์สำหรับรูปภาพปุ่มเมื่อ Hover
    $cmb_button->add_field(array(
        'name' => __('Button Hover Image', 'trayang'),
        'id'   => 'button_hover_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text' => array(
            'add_upload_file_text' => 'Add Button Hover Image'
        ),
        'query_args' => array(
            'type' => array('image/jpeg', 'image/png'),
        ),
    ));
}
add_action('cmb2_admin_init', 'register_stamp_order_button_meta_fields');


function register_order_delivery_meta_fields() {
    $cmb_order_delivery = new_cmb2_box(array(
        'id'            => 'order_delivery_meta_box',
        'title'         => __('Order Delivery Setting', 'trayang'),
        'object_types'  => array('reusable_blocks'), // ใช้กับ Custom Post Type 'reusable_blocks'
        'show_on'       => array('key' => 'id', 'value' => get_page_by_title('Order Delivery', OBJECT, 'reusable_blocks')->ID),
    ));

    // ฟิลด์สำหรับลิงก์ของปุ่ม
    $cmb_order_delivery->add_field(array(
        'name' => __( 'Order Delivery Icon 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_delivery_icon_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __( 'Order Delivery Icon 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_delivery_icon_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __( 'Order Delivery Icon 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_delivery_icon_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Order Link Line', 'trayang'),
        'id'   => 'order_link_line',
        'type' => 'text_url',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Order Link Line Text', 'trayang'),
        'id'   => 'order_link_line_text',
        'type' => 'text',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __( 'Order Delivery Icon QR', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_delivery_icon_qr',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Order Step Number 1', 'trayang'),
        'id'   => 'order_step_number_1',
        'type' => 'text',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Order Step Number 2', 'trayang'),
        'id'   => 'order_step_number_2',
        'type' => 'text',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Order Step Number 3', 'trayang'),
        'id'   => 'order_step_number_3',
        'type' => 'text',
    ));
    
    $cmb_order_delivery->add_field(array(
        'name' => __( 'Order Step Delivery Image Desktop', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_step_delivery_image_desktop',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'large',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __( 'Order Step Delivery Image Mobile 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_step_delivery_image_mobile_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __( 'Order Step Delivery Image Mobile 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'order_step_delivery_image_mobile_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Button Branch 1', 'trayang'),
        'id'   => 'button_branch_link_1',
        'type' => 'text_url',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Order Step Text 1', 'trayang'),
        'id'   => 'order_step_text_1',
        'type' => 'text',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Button Branch 2', 'trayang'),
        'id'   => 'button_branch_link_2',
        'type' => 'text_url',
    ));

    $cmb_order_delivery->add_field(array(
        'name' => __('Order Step Text 2', 'trayang'),
        'id'   => 'order_step_text_2',
        'type' => 'text',
    ));

}
add_action('cmb2_admin_init', 'register_order_delivery_meta_fields');

function register_contact_us_meta_fields() {
    $cmb_contact_us = new_cmb2_box(array(
        'id'            => 'contact_us_meta_box',
        'title'         => __('Contact Us Settings', 'trayang'),
        'object_types'  => array('reusable_blocks'), // ใช้กับ Custom Post Type 'reusable_blocks'
        'show_on'       => array('key' => 'id', 'value' => get_page_by_title('Contact Us', OBJECT, 'reusable_blocks')->ID),
    ));

    $cmb_contact_us->add_field(array(
        'name' => __('Contact Us Header', 'trayang'),
        'id'   => 'contact_us_header',
        'type' => 'text',
    ));

    $cmb_contact_us->add_field(array(
        'name' => __('Contact Us Detail', 'trayang'),
        'id'   => 'contact_us_detail',
        'type' => 'text',
    ));

    $cmb_contact_us->add_field( array(
        'name' => __( 'Contact Us Channel Image Line', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'contact_us_channel_image_line',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_contact_us->add_field(array(
        'name' => __('Contact Us Channel Text Header', 'trayang'),
        'id'   => 'contact_us_channel_text_header',
        'type' => 'text',
    ));

    $cmb_contact_us->add_field(array(
        'name' => __('Contact Us Channel Text Detail', 'trayang'),
        'id'   => 'contact_us_channel_text_detail',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
            'media_buttons' => false,
        ),
    ));

    $cmb_contact_us->add_field( array(
        'name' => __( 'Contact Us Channel Image Email', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'contact_us_channel_image_email',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_contact_us->add_field(array(
        'name' => __('Contact Us Channel Text Header 1', 'trayang'),
        'id'   => 'contact_us_channel_text_header_1',
        'type' => 'text',
    ));

    $cmb_contact_us->add_field(array(
        'name' => __('Contact Us Channel Text Detail 1', 'trayang'),
        'id'   => 'contact_us_channel_text_detail_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
            'media_buttons' => false,
        ),
    ));

    $cmb_contact_us->add_field( array(
        'name' => __( 'Contact Us Image Order D', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'contact_us_image_order_d',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_contact_us->add_field( array(
        'name' => __( 'Contact Us Image Order M', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'contact_us_image_order_m',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));
    
}
add_action('cmb2_admin_init', 'register_contact_us_meta_fields');


function register_footer_meta_fields() {
    $cmb_footer = new_cmb2_box(array(
        'id'            => 'footer_meta_box',
        'title'         => __('Footer Settings', 'trayang'),
        'object_types'  => array('reusable_blocks'), // ใช้กับ Custom Post Type 'reusable_blocks'
        'show_on'       => array('key' => 'id', 'value' => get_page_by_title('Footer', OBJECT, 'reusable_blocks')->ID),
    ));

    $cmb_footer->add_field( array(
        'name' => __( 'Footer Image', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'footer_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Text Detail', 'trayang'),
        'id'   => 'footer_text_detail',
        'type' => 'text',
    ));

    $cmb_footer->add_field( array(
        'name' => __( 'Footer Image Bottom', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'footer_image_bottom',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 1', 'trayang'),
        'id'   => 'footer_box_link_1',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 2', 'trayang'),
        'id'   => 'footer_box_link_2',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 3', 'trayang'),
        'id'   => 'footer_box_link_3',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 4', 'trayang'),
        'id'   => 'footer_box_link_4',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 5', 'trayang'),
        'id'   => 'footer_box_link_5',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 6', 'trayang'),
        'id'   => 'footer_box_link_6',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 7', 'trayang'),
        'id'   => 'footer_box_link_7',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 8', 'trayang'),
        'id'   => 'footer_box_link_8',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 9', 'trayang'),
        'id'   => 'footer_box_link_9',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 10', 'trayang'),
        'id'   => 'footer_box_link_10',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 11', 'trayang'),
        'id'   => 'footer_box_link_11',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 12', 'trayang'),
        'id'   => 'footer_box_link_12',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 13', 'trayang'),
        'id'   => 'footer_box_link_13',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 14', 'trayang'),
        'id'   => 'footer_box_link_14',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 15', 'trayang'),
        'id'   => 'footer_box_link_15',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer Box Link 16', 'trayang'),
        'id'   => 'footer_box_link_16',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 3,
            'media_buttons' => false,
        ),
    ));

    $cmb_footer->add_field(array(
        'name' => __('Footer All Rights Reserved', 'trayang'),
        'id'   => 'footer_all_rights_reserved',
        'type' => 'text',
    ));

}
add_action('cmb2_admin_init', 'register_footer_meta_fields');


function register_cheap_price_span_meta_fields() {
    $cmb_cheap_price_span = new_cmb2_box(array(
        'id'            => 'cheap_price_span_meta_box',
        'title'         => __('Cheap Price Span Settings', 'trayang'),
        'object_types'  => array('reusable_blocks'), // ใช้กับ Custom Post Type 'reusable_blocks'
        'show_on'       => array('key' => 'id', 'value' => get_page_by_title('Cheap Price Span', OBJECT, 'reusable_blocks')->ID),
    ));

    $cmb_cheap_price_span->add_field(array(
        'name' => __('Cheap Price Span text 1', 'trayang'),
        'id'   => 'cheap_price_span_text_1',
        'type' => 'text',
    ));

    $cmb_cheap_price_span->add_field(array(
        'name' => __('Cheap Price Span text 2', 'trayang'),
        'id'   => 'cheap_price_span_text_2',
        'type' => 'text',
    ));

    $cmb_cheap_price_span->add_field(array(
        'name' => __('Cheap Price Span text 3', 'trayang'),
        'id'   => 'cheap_price_span_text_3',
        'type' => 'text',
    ));
}
add_action('cmb2_admin_init', 'register_cheap_price_span_meta_fields');


function register_cheap_price_image_meta_fields() {
    $cmb_cheap_price_image = new_cmb2_box(array(
        'id'            => 'cheap_price_image_meta_box',
        'title'         => __('Cheap Price Span Settings', 'trayang'),
        'object_types'  => array('reusable_blocks'), // ใช้กับ Custom Post Type 'reusable_blocks'
        'show_on'       => array('key' => 'id', 'value' => get_page_by_title('Cheap Price Image', OBJECT, 'reusable_blocks')->ID),
    ));

    $cmb_cheap_price_image->add_field( array(
        'name' => __( 'Cheap Price Image Red', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'cheap_price_image_red',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_cheap_price_image->add_field( array(
        'name' => __( 'Cheap Price Bottom Icon 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'cheap_price_bottom_icon_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_cheap_price_image->add_field(array(
        'name' => __('Cheap Price Bottom p 1', 'trayang'),
        'id'   => 'cheap_price_bottom_p_1',
        'type' => 'text',
    ));

    $cmb_cheap_price_image->add_field( array(
        'name' => __( 'Cheap Price Bottom Icon 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'cheap_price_bottom_icon_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_cheap_price_image->add_field(array(
        'name' => __('Cheap Price Bottom p 2', 'trayang'),
        'id'   => 'cheap_price_bottom_p_2',
        'type' => 'text',
    ));

    $cmb_cheap_price_image->add_field( array(
        'name' => __( 'Cheap Price Bottom Icon 3', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'cheap_price_bottom_icon_3',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'thumbnail',
    ));

    $cmb_cheap_price_image->add_field(array(
        'name' => __('Cheap Price Bottom p 3', 'trayang'),
        'id'   => 'cheap_price_bottom_p_3',
        'type' => 'text',
    ));

    $cmb_cheap_price_image->add_field(array(
        'name' => __('Cheap Price Description', 'trayang'),
        'id'   => 'cheap_price_description',
        'type' => 'text',
    ));

   
}
add_action('cmb2_admin_init', 'register_cheap_price_image_meta_fields');

function register_article_image_slide_meta_fields() {
    $cmb_article_image_slide = new_cmb2_box(array(
        'id'            => 'article_image_slide_meta_box',
        'title'         => __('Article Image Slide Settings', 'trayang'),
        'object_types'  => array('reusable_blocks'), // ใช้กับ Custom Post Type 'reusable_blocks'
        'show_on'       => array('key' => 'id', 'value' => get_page_by_title('Article Image Slide', OBJECT, 'reusable_blocks')->ID),
    ));

    $cmb_article_image_slide->add_field( array(
        'name' => __( 'Article Image Slide D 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'article_image_slide_d_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_article_image_slide->add_field( array(
        'name' => __( 'Article Image Slide M 1', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'article_image_slide_m_1',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_article_image_slide->add_field( array(
        'name' => __( 'Article Image Slide D 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'article_image_slide_d_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));

    $cmb_article_image_slide->add_field( array(
        'name' => __( 'Article Image Slide M 2', 'trayang' ),
        'desc' => __( 'Upload or select an image', 'trayang' ),
        'id'   => 'article_image_slide_m_2',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'text'    => array(
            'add_upload_file_text' => __( 'Add Image', 'trayang' )
        ),
        'query_args' => array(
            'type' => array( 'image/jpg', 'image/jpeg', 'image/png', 'image/gif' ),
        ),
        'preview_size' => 'medium',
    ));
    

    


   
}
add_action('cmb2_admin_init', 'register_article_image_slide_meta_fields');

function custom_cmb2_styles() {
    echo '<style>
        .cmb-row.cmb2-id-section-hero-span-text-1,
        .cmb-row.cmb2-id-section-hero-span-text-2 {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-cheap-price-span-text-1,
        .cmb-row.cmb2-id-cheap-price-span-text-2,
        .cmb-row.cmb2-id-cheap-price-span-text-3 {
            display: inline-block;
            width: 33%;
        }

        .cmb-row.cmb2-id-cheap-price-bottom-icon-1,
        .cmb-row.cmb2-id-cheap-price-bottom-p-1,
        .cmb-row.cmb2-id-cheap-price-bottom-icon-2,
        .cmb-row.cmb2-id-cheap-price-bottom-p-2,
        .cmb-row.cmb2-id-cheap-price-bottom-icon-3,
        .cmb-row.cmb2-id-cheap-price-bottom-p-3 {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-our-service-button-image-1,
        .cmb-row.cmb2-id-our-service-button-image-1-active,
        .cmb-row.cmb2-id-our-service-button-image-2,
        .cmb-row.cmb2-id-our-service-button-image-2-active,
        .cmb-row.cmb2-id-our-service-button-image-3,
        .cmb-row.cmb2-id-our-service-button-image-3-active,
        .cmb-row.cmb2-id-our-service-button-image-4,
        .cmb-row.cmb2-id-our-service-button-image-4-active,
        .cmb-row.cmb2-id-our-service-button-image-5,
        .cmb-row.cmb2-id-our-service-button-image-5-active,
        .cmb-row.cmb2-id-our-service-button-image-6,
        .cmb-row.cmb2-id-our-service-button-image-6-active {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-our-service-button-box-image-d-1,
        .cmb-row.cmb2-id-our-service-button-box-image-m-1,
        .cmb-row.cmb2-id-our-service-text-h3-1,
        .cmb-row.cmb2-id-our-service-text-p-1,
        .cmb-row.cmb2-id-our-service-button-box-image-d-2,
        .cmb-row.cmb2-id-our-service-button-box-image-m-2,
        .cmb-row.cmb2-id-our-service-text-h3-2,
        .cmb-row.cmb2-id-our-service-text-p-2,
        .cmb-row.cmb2-id-our-service-button-box-image-d-3,
        .cmb-row.cmb2-id-our-service-button-box-image-m-3,
        .cmb-row.cmb2-id-our-service-text-h3-3,
        .cmb-row.cmb2-id-our-service-text-p-3,
        .cmb-row.cmb2-id-our-service-button-box-image-d-4,
        .cmb-row.cmb2-id-our-service-button-box-image-m-4,
        .cmb-row.cmb2-id-our-service-text-h3-4,
        .cmb-row.cmb2-id-our-service-text-p-4,
        .cmb-row.cmb2-id-our-service-button-box-image-d-5,
        .cmb-row.cmb2-id-our-service-button-box-image-m-5,
        .cmb-row.cmb2-id-our-service-text-h3-5,
        .cmb-row.cmb2-id-our-service-text-p-5,
        .cmb-row.cmb2-id-our-service-button-box-image-d-6,
        .cmb-row.cmb2-id-our-service-button-box-image-m-6,
        .cmb-row.cmb2-id-our-service-text-h3-6,
        .cmb-row.cmb2-id-our-service-text-p-6  {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-size-and-price-btn-1,
        .cmb-row.cmb2-id-size-and-price-btn-p,
        .cmb-row.cmb2-id-size-and-price-image-1-d,
        .cmb-row.cmb2-id-size-and-price-image-1-m,
        .cmb-row.cmb2-id-size-and-price-image-2-d,
        .cmb-row.cmb2-id-size-and-price-image-2-m {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-order-delivery-icon-1,
        .cmb-row.cmb2-id-order-delivery-icon-2,
        .cmb-row.cmb2-id-order-delivery-icon-3,
        .cmb-row.cmb2-id-order-step-number-1,
        .cmb-row.cmb2-id-order-step-number-2,
        .cmb-row.cmb2-id-order-step-number-3,
        .cmb-row.cmb2-id-order-step-datail-home-1,
        .cmb-row.cmb2-id-order-step-datail-home-2,
        .cmb-row.cmb2-id-order-step-datail-home-3 {
            display: inline-block;
            width: 33%;
        }

        .cmb-row.cmb2-id-order-step-delivery-image-mobile-1,
        .cmb-row.cmb2-id-order-step-delivery-image-mobile-2 {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-button-branch-link-1,
        .cmb-row.cmb2-id-order-step-text-1,
        .cmb-row.cmb2-id-button-branch-link-2,
        .cmb-row.cmb2-id-order-step-text-2,
        .cmb-row.cmb2-id-order-link-line,
        .cmb-row.cmb2-id-order-link-line-text {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-our-work-header,
        .cmb-row.cmb2-id-our-work-header-detail,
        .cmb-row.cmb2-id-our-work-text-header-home,
        .cmb-row.cmb2-id-our-work-text-detail-home,
        .cmb-row.cmb2-id-our-work-text-header-second-home,
        .cmb-row.cmb2-id-our-work-text-detail-second-home {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-our-work-description-image-1,
        .cmb-row.cmb2-id-our-work-description-image-2,
        .cmb-row.cmb2-id-our-work-description-image-3,
        .cmb-row.cmb2-id-our-work-description-image-4,
        .cmb-row.cmb2-id-our-work-description-image-5,
        .cmb-row.cmb2-id-our-work-description-image-6,
        .cmb-row.cmb2-id-our-work-description-image-second-1,
        .cmb-row.cmb2-id-our-work-description-image-second-2,
        .cmb-row.cmb2-id-our-work-description-image-second-3,
        .cmb-row.cmb2-id-our-work-description-image-second-4,
        .cmb-row.cmb2-id-our-work-description-image-second-5,
        .cmb-row.cmb2-id-our-work-description-image-second-6 {
            display: inline-block;
            width: 33%;
        }

        .cmb-row.cmb2-id-review-header,
        .cmb-row.cmb2-id-review-header-detail {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-review-description-h3-1,
        .cmb-row.cmb2-id-review-description-p-1,
        .cmb-row.cmb2-id-review-description-name-1,
        .cmb-row.cmb2-id-review-description-detail-1,
        .cmb-row.cmb2-id-review-description-h3-2,
        .cmb-row.cmb2-id-review-description-p-2,
        .cmb-row.cmb2-id-review-description-name-2,
        .cmb-row.cmb2-id-review-description-detail-2,
        .cmb-row.cmb2-id-review-description-h3-3,
        .cmb-row.cmb2-id-review-description-p-3,
        .cmb-row.cmb2-id-review-description-name-3,
        .cmb-row.cmb2-id-review-description-detail-3,
        .cmb-row.cmb2-id-review-description-h3-4,
        .cmb-row.cmb2-id-review-description-p-4,
        .cmb-row.cmb2-id-review-description-name-4,
        .cmb-row.cmb2-id-review-description-detail-4,
        .cmb-row.cmb2-id-review-description-h3-5,
        .cmb-row.cmb2-id-review-description-p-5,
        .cmb-row.cmb2-id-review-description-name-5,
        .cmb-row.cmb2-id-review-description-detail-5,
        .cmb-row.cmb2-id-review-description-h3-6,
        .cmb-row.cmb2-id-review-description-p-6,
        .cmb-row.cmb2-id-review-description-name-6,
        .cmb-row.cmb2-id-review-description-detail-6 {
            display: inline-block;
            width: 50%;
        }
        .cmb-row.cmb2-id-article-header,
        .cmb-row.cmb2-id-article-header-detail {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-button-image-article, 
        .cmb-row.cmb2-id-button-hover-image-article {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-contact-us-header,
        .cmb-row.cmb2-id-contact-us-detail,
        .cmb-row.cmb2-id-contact-us-image-order-d,
        .cmb-row.cmb2-id-contact-us-image-order-m {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-contact-us-channel-image-line,
        .cmb-row.cmb2-id-contact-us-channel-text-header,
        .cmb-row.cmb2-id-contact-us-channel-text-detail,
        .cmb-row.cmb2-id-contact-us-channel-image-email,
        .cmb-row.cmb2-id-contact-us-channel-text-header-1,
        .cmb-row.cmb2-id-contact-us-channel-text-detail-1 {
            display: inline-block;
            width: 33%;
        }

        .cmb-row.cmb2-id-footer-image,
        .cmb-row.cmb2-id-footer-text-detail,
        .cmb-row.cmb2-id-footer-image-bottom {
            display: inline-block;
            width: 33%;
        }


        .cmb-row.cmb2-id-trayang-breadcrumb-each-type-1,
        .cmb-row.cmb2-id-trayang-breadcrumb-each-type-2,
        .cmb-row.cmb2-id-cheap-price-header-h2-head,
        .cmb-row.cmb2-id-cheap-price-header-h2-sub-head {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-image-1,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-header-1,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-text-1,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-image-2,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-header-2,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-text-2,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-image-3,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-header-3,
        .cmb-row.cmb2-id-why-do-you-have-to-order-detail-text-3 {
            display: inline-block;
            width: 33%;
        }

        .cmb-row.cmb2-id-each-stamp-second-text-header-1,
        .cmb-row.cmb2-id-each-stamp-second-text-detail-1,
        .cmb-row.cmb2-id-each-stamp-second-detail-order-link,
        .cmb-row.cmb2-id-each-stamp-second-detail-order-text-p,
        .cmb-row.cmb2-id-each-stamp-second-text-bottom-image-1,
        .cmb-row.cmb2-id-each-stamp-second-text-bottom-detail-1,
        .cmb-row.cmb2-id-each-stamp-second-text-bottom-image-2,
        .cmb-row.cmb2-id-each-stamp-second-text-bottom-detail-2,
        .cmb-row.cmb2-id-each-stamp-second-text-bottom-image-3,
        .cmb-row.cmb2-id-each-stamp-second-text-bottom-detail-3,
        .cmb-row.cmb2-id-each-stamp-second-image-d-1,
        .cmb-row.cmb2-id-each-stamp-fourth-text-header-1,
        .cmb-row.cmb2-id-each-stamp-fourth-text-detail-1,
        .cmb-row.cmb2-id-each-stamp-fourth-detail-order-link,
        .cmb-row.cmb2-id-each-stamp-fourth-detail-order-text-p,
        .cmb-row.cmb2-id-each-stamp-fourth-text-bottom-image-1,
        .cmb-row.cmb2-id-each-stamp-fourth-text-bottom-detail-1,
        .cmb-row.cmb2-id-each-stamp-fourth-text-bottom-image-2,
        .cmb-row.cmb2-id-each-stamp-fourth-text-bottom-detail-2,
        .cmb-row.cmb2-id-each-stamp-fourth-text-bottom-image-3,
        .cmb-row.cmb2-id-each-stamp-fourth-text-bottom-detail-3,
        .cmb-row.cmb2-id-each-stamp-fourth-image-d-1,
        .cmb-row.cmb2-id-each-stamp-fourth-image-m-1,
        .cmb-row.cmb2-id-each-stamp-second-text-header-2,
        .cmb-row.cmb2-id-each-stamp-second-text-detail-2,
        .cmb-row.cmb2-id-each-stamp-fourth-text-header-2,
        .cmb-row.cmb2-id-each-stamp-fourth-text-detail-2,
        .cmb-row.cmb2-id-each-stamp-fourth-detail-order-link,
        .cmb-row.cmb2-id-each-stamp-fourth-image-d-2,
        .cmb-row.cmb2-id-each-stamp-fourth-image-m-2,
        .cmb-row.cmb2-id-each-stamp-second-text-header-3,
        .cmb-row.cmb2-id-each-stamp-second-text-detail-3,
        .cmb-row.cmb2-id-each-stamp-fourth-text-header-3,
        .cmb-row.cmb2-id-each-stamp-fourth-text-detail-3,
        .cmb-row.cmb2-id-each-stamp-fourth-image-d-3,
        .cmb-row.cmb2-id-each-stamp-fourth-image-m-3,
        .cmb-row.cmb2-id-button-image-design-logo,
        .cmb-row.cmb2-id-button-hover-image-design-logo,
        .cmb-row.cmb2-id-button-image-stamp-ink,
        .cmb-row.cmb2-id-button-hover-image-stamp-ink,
        .cmb-row.cmb2-id-how-is-it-better-header,
        .cmb-row.cmb2-id-how-is-it-better-detail {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-each-stamp-third-image-1,
        .cmb-row.cmb2-id-each-stamp-third-image-2,
        .cmb-row.cmb2-id-each-stamp-third-image-3,
        .cmb-row.cmb2-id-each-stamp-third-image-4,
        .cmb-row.cmb2-id-each-stamp-third-image-5,
        .cmb-row.cmb2-id-each-stamp-third-image-6,
        .cmb-row.cmb2-id-each-stamp-third-image-7,
        .cmb-row.cmb2-id-each-stamp-third-image-8,
        .cmb-row.cmb2-id-each-stamp-fifth-image-1,
        .cmb-row.cmb2-id-each-stamp-fifth-image-2,
        .cmb-row.cmb2-id-each-stamp-fifth-image-3,
        .cmb-row.cmb2-id-each-stamp-fifth-image-4,
        .cmb-row.cmb2-id-each-stamp-fifth-image-5,
        .cmb-row.cmb2-id-each-stamp-fifth-image-6,
        .cmb-row.cmb2-id-each-stamp-fifth-image-7,
        .cmb-row.cmb2-id-each-stamp-fifth-image-8, 
        .cmb-row.cmb2-id-each-stamp-third-image-1-1,
        .cmb-row.cmb2-id-each-stamp-third-image-2-2,
        .cmb-row.cmb2-id-each-stamp-third-image-3-3,
        .cmb-row.cmb2-id-each-stamp-third-image-4-4,
        .cmb-row.cmb2-id-each-stamp-third-image-5-5,
        .cmb-row.cmb2-id-each-stamp-third-image-6-6,
        .cmb-row.cmb2-id-each-stamp-third-image-7-7,
        .cmb-row.cmb2-id-each-stamp-third-image-8-8,
        .cmb-row.cmb2-id-each-stamp-fifth-image-1-1,
        .cmb-row.cmb2-id-each-stamp-fifth-image-2-2,
        .cmb-row.cmb2-id-each-stamp-fifth-image-3-3,
        .cmb-row.cmb2-id-each-stamp-fifth-image-4-4,
        .cmb-row.cmb2-id-each-stamp-fifth-image-5-5,
        .cmb-row.cmb2-id-each-stamp-fifth-image-6-6,
        .cmb-row.cmb2-id-each-stamp-fifth-image-7-7,
        .cmb-row.cmb2-id-each-stamp-fifth-image-8-8,
        .cmb-row.cmb2-id-each-stamp-third-image-1-1-1,
        .cmb-row.cmb2-id-each-stamp-third-image-2-2-2,
        .cmb-row.cmb2-id-each-stamp-third-image-3-3-3,
        .cmb-row.cmb2-id-each-stamp-third-image-4-4-4,
        .cmb-row.cmb2-id-each-stamp-third-image-5-5-5,
        .cmb-row.cmb2-id-each-stamp-third-image-6-6-6,
        .cmb-row.cmb2-id-each-stamp-third-image-7-7-7,
        .cmb-row.cmb2-id-each-stamp-third-image-8-8-8,
        .cmb-row.cmb2-id-each-stamp-third-image-1-1-1-1,
        .cmb-row.cmb2-id-each-stamp-third-image-2-2-2-2,
        .cmb-row.cmb2-id-each-stamp-third-image-3-3-3-3,
        .cmb-row.cmb2-id-each-stamp-third-image-4-4-4-4,
        .cmb-row.cmb2-id-each-stamp-third-image-5-5-5-5,
        .cmb-row.cmb2-id-each-stamp-third-image-6-6-6-6,
        .cmb-row.cmb2-id-each-stamp-third-image-7-7-7-7,
        .cmb-row.cmb2-id-each-stamp-third-image-8-8-8-8,
        .cmb-row.cmb2-id-order-step-datail-each-type-of-stamp-1,
        .cmb-row.cmb2-id-order-step-datail-each-type-of-stamp-2,
        .cmb-row.cmb2-id-order-step-datail-each-type-of-stamp-3  {
            display: inline-block;
            width: 33%;
        }

        .cmb-row.cmb2-id-examples-of-trusted-brands-image-1,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-2,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-3,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-4,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-5,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-6,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-7,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-8,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-9,
        .cmb-row.cmb2-id-examples-of-trusted-brands-image-10 {
            display: inline-block;
            width: 25%;
        }

        .cmb-row.cmb2-id-trayang-breadcrumb-name-stamp-1,
        .cmb-row.cmb2-id-trayang-breadcrumb-name-stamp-2,
        .cmb-row.cmb2-id-trayang-breadcrumb-name-stamp-3 {
            display: inline-block;
            width: 33%;
        }

        .cmb-row.cmb2-id-name-stamp-second-image-d, 
        .cmb-row.cmb2-id-name-stamp-second-image-m,
        .cmb-row.cmb2-id-name-stamp-second-detail-header,
        .cmb-row.cmb2-id-name-stamp-second-detail-text,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-image-d-1,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-image-m-1,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-1-1,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-1-1,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-1-2,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-1-2,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-1-3,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-1-3,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-1-4,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-1-4,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-bottom-link,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-bottom-text,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-image-d-2,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-image-m-2,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-2-1,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-2-1,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-2-2,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-2-2,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-2-3,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-2-3,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-span-2-4,
        .cmb-row.cmb2-id-types-of-stamps-produce-detail-text-middle-2-4 {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-order-with-us-detail-image-d,
        .cmb-row.cmb2-id-order-with-us-detail-image-m,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-bottom-link,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-bottom-text,
        .cmb-row.cmb2-id-price-and-minimum-detail-header-h3,
        .cmb-row.cmb2-id-price-and-minimum-detail-header-p,
        .cmb-row.cmb2-id-contact-us-page-header,
        .cmb-row.cmb2-id-contact-us-page-detail,
        .cmb-row.cmb2-id-contact-us-maps-location-text-header-h3,
        .cmb-row.cmb2-id-contact-us-maps-location-text-detail,
        .cmb-row.cmb2-id-contact-us-maps-location-text-header-h3-2,
        .cmb-row.cmb2-id-contact-us-maps-location-text-detail-2,
        .cmb-row.cmb2-id-contact-us-page-detail-span-1,
        .cmb-row.cmb2-id-contact-us-page-detail-1,
        .cmb-row.cmb2-id-contact-us-page-detail-span-2,
        .cmb-row.cmb2-id-contact-us-page-detail-2,
        .cmb-row.cmb2-id-contact-us-page-detail-span-3,
        .cmb-row.cmb2-id-contact-us-page-detail-3,
        .cmb-row.cmb2-id-article-image-slide-d-1,
        .cmb-row.cmb2-id-article-image-slide-m-1,
        .cmb-row.cmb2-id-article-image-slide-d-2,
        .cmb-row.cmb2-id-article-image-slide-m-2  {
            display: inline-block;
            width: 50%;
        }

        .cmb-row.cmb2-id-order-with-us-detail-text-image-1,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-header-h3-1,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-header-p-1,
        .cmb-row.cmb2-id-order-with-us-detail-text-image-2,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-header-h3-2,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-header-p-2,
        .cmb-row.cmb2-id-order-with-us-detail-text-image-3,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-header-h3-3,
        .cmb-row.cmb2-id-order-with-us-detail-text-description-header-p-3,
        .cmb-row.cmb2-id-work-step-icon-1,
        .cmb-row.cmb2-id-work-step-number-1,
        .cmb-row.cmb2-id-work-step-detail-1,
        .cmb-row.cmb2-id-work-step-icon-2,
        .cmb-row.cmb2-id-work-step-number-2,
        .cmb-row.cmb2-id-work-step-detail-2,
        .cmb-row.cmb2-id-work-step-icon-3,
        .cmb-row.cmb2-id-work-step-number-3,
        .cmb-row.cmb2-id-work-step-detail-3 {
            display: inline-block;
            width: 33%;
        }
            


    </style>';
}
add_action('admin_head', 'custom_cmb2_styles');



?>

