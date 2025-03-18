<?php

$footer_id = get_page_by_title('Footer', OBJECT, 'reusable_blocks')->ID;
$footer_image_url = get_post_meta($footer_id, 'footer_image', true);
$footer_image_id = attachment_url_to_postid($footer_image_url);
$footer_text_detail = get_post_meta($footer_id, 'footer_text_detail', true);
$footer_image_bottom_url = get_post_meta($footer_id, 'footer_image_bottom', true);
$footer_image_bottom_id = attachment_url_to_postid($footer_image_bottom_url);
$footer_box_link_1 = get_post_meta($footer_id, 'footer_box_link_1', true);
$footer_box_link_2 = get_post_meta($footer_id, 'footer_box_link_2', true);
$footer_box_link_3 = get_post_meta($footer_id, 'footer_box_link_3', true);
$footer_box_link_4 = get_post_meta($footer_id, 'footer_box_link_4', true);
$footer_box_link_5 = get_post_meta($footer_id, 'footer_box_link_5', true);
$footer_box_link_6 = get_post_meta($footer_id, 'footer_box_link_6', true);
$footer_box_link_7 = get_post_meta($footer_id, 'footer_box_link_7', true);
$footer_box_link_8 = get_post_meta($footer_id, 'footer_box_link_8', true);
$footer_box_link_9 = get_post_meta($footer_id, 'footer_box_link_9', true);
$footer_box_link_10 = get_post_meta($footer_id, 'footer_box_link_10', true);
$footer_box_link_11 = get_post_meta($footer_id, 'footer_box_link_11', true);
$footer_box_link_12 = get_post_meta($footer_id, 'footer_box_link_12', true);
$footer_box_link_13 = get_post_meta($footer_id, 'footer_box_link_13', true);
$footer_box_link_14 = get_post_meta($footer_id, 'footer_box_link_14', true);
$footer_box_link_15 = get_post_meta($footer_id, 'footer_box_link_15', true);
$footer_box_link_16 = get_post_meta($footer_id, 'footer_box_link_16', true);
$footer_all_rights_reserved = get_post_meta($footer_id, 'footer_all_rights_reserved', true);

?>

<footer class="site-footer">
        <div class="footer-wrapper">
            <div class="footer-box-first">
                <div class="footer-image">
                    <img src="<?php echo $footer_image_id ? wp_get_attachment_image_url( $footer_image_id, 'full' ) : ''; ?>" alt="trayang-image">
                </div>
                <div class="footer-text-detail">
                    <p><?php echo esc_html($footer_text_detail); ?></p>
                </div>
                <div class="footer-image-bottom">
                    <img src="<?php echo $footer_image_bottom_id ? wp_get_attachment_image_url( $footer_image_bottom_id, 'full' ) : ''; ?>" alt="trayang-image">
                </div>
            </div>
            <div class="footer-box-second">
                <?php echo wp_kses_post($footer_box_link_1); ?>
                <?php echo wp_kses_post($footer_box_link_2); ?>
                <?php echo wp_kses_post($footer_box_link_3); ?>
                <?php echo wp_kses_post($footer_box_link_4); ?>
                <?php echo wp_kses_post($footer_box_link_5); ?>
                <?php echo wp_kses_post($footer_box_link_6); ?>
                <?php echo wp_kses_post($footer_box_link_7); ?>
                <?php echo wp_kses_post($footer_box_link_8); ?>
            </div>
            <div class="footer-box-third">
                <?php echo wp_kses_post($footer_box_link_9); ?>
                <?php echo wp_kses_post($footer_box_link_10); ?>
                <?php echo wp_kses_post($footer_box_link_11); ?>
                <?php echo wp_kses_post($footer_box_link_12); ?>
                <?php echo wp_kses_post($footer_box_link_13); ?>
                <?php echo wp_kses_post($footer_box_link_14); ?>
                <?php echo wp_kses_post($footer_box_link_15); ?>
                <?php echo wp_kses_post($footer_box_link_16); ?>
            </div>
            
        </div>
        <div class="footer-all-rights-reserved">
            <p><?php echo esc_html($footer_all_rights_reserved); ?></p>
        </div>
        
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
