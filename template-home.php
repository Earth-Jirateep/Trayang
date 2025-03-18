<?php
/**
 * Template Name: Home
 * Description: A custom home page template for the website.
 */

get_header(); 

// Section Header
$section_hero_h1 = get_post_meta(get_the_ID(), 'section_hero_h1', true);
$section_hero_span_text_1 = get_post_meta(get_the_ID(), 'section_hero_span_text_1', true);
$section_hero_span_text_2 = get_post_meta(get_the_ID(), 'section_hero_span_text_2', true);
$section_hero_p = get_post_meta(get_the_ID(), 'section_hero_p', true);
// Section Cheap Price
$cheap_price_header = get_post_meta(get_the_ID(), 'cheap_price_header', true);

// Section Our Service
$our_service_header = get_post_meta(get_the_ID(), 'our_service_header', true);
$our_service_button_image_1_url = get_post_meta( get_the_ID(), 'our_service_button_image_1', true );
$our_service_button_image_1_id = attachment_url_to_postid( $our_service_button_image_1_url );
$our_service_button_image_1_active_url = get_post_meta( get_the_ID(), 'our_service_button_image_1_active', true );
$our_service_button_image_1_active_id = attachment_url_to_postid( $our_service_button_image_1_active_url );
$our_service_button_image_2_url = get_post_meta( get_the_ID(), 'our_service_button_image_2', true );
$our_service_button_image_2_id = attachment_url_to_postid( $our_service_button_image_2_url );
$our_service_button_image_2_active_url = get_post_meta( get_the_ID(), 'our_service_button_image_2_active', true );
$our_service_button_image_2_active_id = attachment_url_to_postid( $our_service_button_image_2_active_url );
$our_service_button_image_3_url = get_post_meta( get_the_ID(), 'our_service_button_image_3', true );
$our_service_button_image_3_id = attachment_url_to_postid( $our_service_button_image_3_url );
$our_service_button_image_3_active_url = get_post_meta( get_the_ID(), 'our_service_button_image_3_active', true );
$our_service_button_image_3_active_id = attachment_url_to_postid( $our_service_button_image_3_active_url );
$our_service_button_image_4_url = get_post_meta( get_the_ID(), 'our_service_button_image_4', true );
$our_service_button_image_4_id = attachment_url_to_postid( $our_service_button_image_4_url );
$our_service_button_image_4_active_url = get_post_meta( get_the_ID(), 'our_service_button_image_4_active', true );
$our_service_button_image_4_active_id = attachment_url_to_postid( $our_service_button_image_4_active_url );
$our_service_button_image_5_url = get_post_meta( get_the_ID(), 'our_service_button_image_5', true );
$our_service_button_image_5_id = attachment_url_to_postid( $our_service_button_image_5_url );
$our_service_button_image_5_active_url = get_post_meta( get_the_ID(), 'our_service_button_image_5_active', true );
$our_service_button_image_5_active_id = attachment_url_to_postid( $our_service_button_image_5_active_url );
$our_service_button_image_6_url = get_post_meta( get_the_ID(), 'our_service_button_image_6', true );
$our_service_button_image_6_id = attachment_url_to_postid( $our_service_button_image_6_url );
$our_service_button_image_6_active_url = get_post_meta( get_the_ID(), 'our_service_button_image_6_active', true );
$our_service_button_image_6_active_id = attachment_url_to_postid( $our_service_button_image_6_active_url );
$our_service_button_box_image_d_1_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_d_1', true );
$our_service_button_box_image_d_1_id = attachment_url_to_postid( $our_service_button_box_image_d_1_url );
$our_service_button_box_image_m_1_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_m_1', true );
$our_service_button_box_image_m_1_id = attachment_url_to_postid( $our_service_button_box_image_m_1_url );
$our_service_text_h3_1 = get_post_meta(get_the_ID(), 'our_service_text_h3_1', true);
$our_service_text_p_1 = get_post_meta(get_the_ID(), 'our_service_text_p_1', true);
$our_service_button_box_image_d_2_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_d_2', true );
$our_service_button_box_image_d_2_id = attachment_url_to_postid( $our_service_button_box_image_d_2_url );
$our_service_button_box_image_m_2_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_m_2', true );
$our_service_button_box_image_m_2_id = attachment_url_to_postid( $our_service_button_box_image_m_2_url );
$our_service_text_h3_2 = get_post_meta(get_the_ID(), 'our_service_text_h3_2', true);
$our_service_text_p_2 = get_post_meta(get_the_ID(), 'our_service_text_p_2', true);
$our_service_button_box_image_d_3_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_d_3', true );
$our_service_button_box_image_d_3_id = attachment_url_to_postid( $our_service_button_box_image_d_3_url );
$our_service_button_box_image_m_3_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_m_3', true );
$our_service_button_box_image_m_3_id = attachment_url_to_postid( $our_service_button_box_image_m_3_url );
$our_service_text_h3_3 = get_post_meta(get_the_ID(), 'our_service_text_h3_3', true);
$our_service_text_p_3 = get_post_meta(get_the_ID(), 'our_service_text_p_3', true);
$our_service_button_box_image_d_4_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_d_4', true );
$our_service_button_box_image_d_4_id = attachment_url_to_postid( $our_service_button_box_image_d_4_url );
$our_service_button_box_image_m_4_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_m_4', true );
$our_service_button_box_image_m_4_id = attachment_url_to_postid( $our_service_button_box_image_m_4_url );
$our_service_text_h3_4 = get_post_meta(get_the_ID(), 'our_service_text_h3_4', true);
$our_service_text_p_4 = get_post_meta(get_the_ID(), 'our_service_text_p_4', true);
$our_service_button_box_image_d_5_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_d_5', true );
$our_service_button_box_image_d_5_id = attachment_url_to_postid( $our_service_button_box_image_d_5_url );
$our_service_button_box_image_m_5_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_m_5', true );
$our_service_button_box_image_m_5_id = attachment_url_to_postid( $our_service_button_box_image_m_5_url );
$our_service_text_h3_5 = get_post_meta(get_the_ID(), 'our_service_text_h3_5', true);
$our_service_text_p_5 = get_post_meta(get_the_ID(), 'our_service_text_p_5', true);
$our_service_button_box_image_d_6_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_d_6', true );
$our_service_button_box_image_d_6_id = attachment_url_to_postid( $our_service_button_box_image_d_6_url );
$our_service_button_box_image_m_6_url = get_post_meta( get_the_ID(), 'our_service_button_box_image_m_6', true );
$our_service_button_box_image_m_6_id = attachment_url_to_postid( $our_service_button_box_image_m_6_url );
$our_service_text_h3_6 = get_post_meta(get_the_ID(), 'our_service_text_h3_6', true);
$our_service_text_p_6 = get_post_meta(get_the_ID(), 'our_service_text_p_6', true);
$our_service_text_a = get_post_meta(get_the_ID(), 'our_service_text_a', true);
// Section Size And Price
$size_and_price_header = get_post_meta(get_the_ID(), 'size_and_price_header', true);
$size_and_price_btn_1 = get_post_meta(get_the_ID(), 'size_and_price_btn_1', true);
$size_and_price_btn_p = get_post_meta(get_the_ID(), 'size_and_price_btn_p', true);
$size_and_price_btn_2 = get_post_meta(get_the_ID(), 'size_and_price_btn_2', true);
$size_and_price_image_1_d_url = get_post_meta( get_the_ID(), 'size_and_price_image_1_d', true );
$size_and_price_image_1_d_id = attachment_url_to_postid( $size_and_price_image_1_d_url );
$size_and_price_image_1_m_url = get_post_meta( get_the_ID(), 'size_and_price_image_1_m', true );
$size_and_price_image_1_m_id = attachment_url_to_postid( $size_and_price_image_1_m_url );
$size_and_price_image_2_d_url = get_post_meta( get_the_ID(), 'size_and_price_image_2_d', true );
$size_and_price_image_2_d_id = attachment_url_to_postid( $size_and_price_image_2_d_url );
$size_and_price_image_2_m_url = get_post_meta( get_the_ID(), 'size_and_price_image_2_m', true );
$size_and_price_image_2_m_id = attachment_url_to_postid( $size_and_price_image_2_m_url );
// Section Order Home
$order_header_home = get_post_meta(get_the_ID(), 'order_header_home', true);
$order_step_datail_home_1 = get_post_meta(get_the_ID(), 'order_step_datail_home_1', true);
$order_step_datail_home_2 = get_post_meta(get_the_ID(), 'order_step_datail_home_2', true);
$order_step_datail_home_3 = get_post_meta(get_the_ID(), 'order_step_datail_home_3', true);
// Section Our Work
$our_work_header = get_post_meta(get_the_ID(), 'our_work_header', true);
$our_work_header_detail = get_post_meta(get_the_ID(), 'our_work_header_detail', true);
$our_work_text_header_home = get_post_meta(get_the_ID(), 'our_work_text_header_home', true);
$our_work_text_detail_home = get_post_meta(get_the_ID(), 'our_work_text_detail_home', true);
$our_work_text_header_second_home = get_post_meta(get_the_ID(), 'our_work_text_header_second_home', true);
$our_work_text_detail_second_home = get_post_meta(get_the_ID(), 'our_work_text_detail_second_home', true);

// Section Review
$review_header = get_post_meta(get_the_ID(), 'review_header', true);
$review_header_detail = get_post_meta(get_the_ID(), 'review_header_detail', true);

// Section Article
$article_header = get_post_meta(get_the_ID(), 'article_header', true);
$article_header_detail = get_post_meta(get_the_ID(), 'article_header_detail', true);
$post_id = get_the_ID(); // ดึง ID ของโพสต์ปัจจุบัน
$button_link_article = get_post_meta($post_id, 'button_link_article', true);
$button_image_article = get_post_meta($post_id, 'button_image_article', true);
$button_hover_image_article = get_post_meta($post_id, 'button_hover_image_article', true);


// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Stamp Order Button"
$stamp_order_button_id = get_page_by_title('Stamp Order Button', OBJECT, 'reusable_blocks')->ID;
$button_link = get_post_meta($stamp_order_button_id, 'button_link', true);
$button_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_image_id', true));
$button_hover_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_hover_image_id', true));

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Order Delivery"
$order_delivery_id = get_page_by_title('Order Delivery', OBJECT, 'reusable_blocks')->ID;
$order_delivery_icon_1_url = get_post_meta($order_delivery_id, 'order_delivery_icon_1', true);
$order_delivery_icon_1_id = attachment_url_to_postid($order_delivery_icon_1_url);
$order_delivery_icon_2_url = get_post_meta($order_delivery_id, 'order_delivery_icon_2', true);
$order_delivery_icon_2_id = attachment_url_to_postid($order_delivery_icon_2_url);
$order_delivery_icon_3_url = get_post_meta($order_delivery_id, 'order_delivery_icon_3', true);
$order_delivery_icon_3_id = attachment_url_to_postid($order_delivery_icon_3_url);
$order_step_number_1 = get_post_meta($order_delivery_id, 'order_step_number_1', true);
$order_step_number_2 = get_post_meta($order_delivery_id, 'order_step_number_2', true);
$order_step_number_3 = get_post_meta($order_delivery_id, 'order_step_number_3', true);
$order_link_line = get_post_meta($order_delivery_id, 'order_link_line', true);
$order_link_line_text = get_post_meta($order_delivery_id, 'order_link_line_text', true);
$order_delivery_icon_qr_url = get_post_meta($order_delivery_id, 'order_delivery_icon_qr', true);
$order_delivery_icon_qr_id = attachment_url_to_postid($order_delivery_icon_qr_url);
$order_step_delivery_image_desktop_url = get_post_meta($order_delivery_id, 'order_step_delivery_image_desktop', true);
$order_step_delivery_image_desktop_id = attachment_url_to_postid($order_step_delivery_image_desktop_url);
$order_step_delivery_image_mobile_1_url = get_post_meta($order_delivery_id, 'order_step_delivery_image_mobile_1', true);
$order_step_delivery_image_mobile_1_id = attachment_url_to_postid($order_step_delivery_image_mobile_1_url);
$order_step_delivery_image_mobile_2_url = get_post_meta($order_delivery_id, 'order_step_delivery_image_mobile_2', true);
$order_step_delivery_image_mobile_2_id = attachment_url_to_postid($order_step_delivery_image_mobile_2_url);
$button_branch_link_1 = get_post_meta($order_delivery_id, 'button_branch_link_1', true);
$order_step_text_1 = get_post_meta($order_delivery_id, 'order_step_text_1', true);
$button_branch_link_2 = get_post_meta($order_delivery_id, 'button_branch_link_2', true);
$order_step_text_2 = get_post_meta($order_delivery_id, 'order_step_text_2', true);

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Contact Us"
$contact_us_id = get_page_by_title('Contact Us', OBJECT, 'reusable_blocks')->ID;
$contact_us_header = get_post_meta($contact_us_id, 'contact_us_header', true);
$contact_us_detail = get_post_meta($contact_us_id, 'contact_us_detail', true);
$contact_us_channel_image_line_url = get_post_meta($contact_us_id, 'contact_us_channel_image_line', true);
$contact_us_channel_image_line_id = attachment_url_to_postid($contact_us_channel_image_line_url);
$contact_us_channel_text_header = get_post_meta($contact_us_id, 'contact_us_channel_text_header', true);
$contact_us_channel_text_detail = get_post_meta($contact_us_id, 'contact_us_channel_text_detail', true);
$contact_us_channel_image_email_url = get_post_meta($contact_us_id, 'contact_us_channel_image_email', true);
$contact_us_channel_image_email_id = attachment_url_to_postid($contact_us_channel_image_email_url);
$contact_us_channel_text_header_1 = get_post_meta($contact_us_id, 'contact_us_channel_text_header_1', true);
$contact_us_channel_text_detail_1 = get_post_meta($contact_us_id, 'contact_us_channel_text_detail_1', true);
$contact_us_image_order_d_url = get_post_meta($contact_us_id, 'contact_us_image_order_d', true);
$contact_us_image_order_d_id = attachment_url_to_postid($contact_us_image_order_d_url);
$contact_us_image_order_m_url = get_post_meta($contact_us_id, 'contact_us_image_order_m', true);
$contact_us_image_order_m_id = attachment_url_to_postid($contact_us_image_order_m_url);

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Cheap Price Span"
$cheap_price_span_id = get_page_by_title('Cheap Price Span', OBJECT, 'reusable_blocks')->ID;
$cheap_price_span_text_1 = get_post_meta($cheap_price_span_id, 'cheap_price_span_text_1', true);
$cheap_price_span_text_2 = get_post_meta($cheap_price_span_id, 'cheap_price_span_text_2', true);
$cheap_price_span_text_3 = get_post_meta($cheap_price_span_id, 'cheap_price_span_text_3', true);

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Cheap Price Image"
$cheap_price_image_id = get_page_by_title('Cheap Price Image', OBJECT, 'reusable_blocks')->ID;
$cheap_price_image_red_url = get_post_meta( $cheap_price_image_id, 'cheap_price_image_red', true );
$cheap_price_image_red_id = attachment_url_to_postid( $cheap_price_image_red_url ); // แปลง URL เป็น ID
$cheap_price_bottom_icon_1_url = get_post_meta( $cheap_price_image_id, 'cheap_price_bottom_icon_1', true );
$cheap_price_bottom_icon_1_id = attachment_url_to_postid( $cheap_price_bottom_icon_1_url ); // แปลง URL เป็น ID
$cheap_price_bottom_p_1 = get_post_meta($cheap_price_image_id, 'cheap_price_bottom_p_1', true);
$cheap_price_bottom_icon_2_url = get_post_meta( $cheap_price_image_id, 'cheap_price_bottom_icon_2', true );
$cheap_price_bottom_icon_2_id = attachment_url_to_postid( $cheap_price_bottom_icon_2_url ); 
$cheap_price_bottom_p_2 = get_post_meta($cheap_price_image_id, 'cheap_price_bottom_p_2', true);
$cheap_price_bottom_icon_3_url = get_post_meta( $cheap_price_image_id, 'cheap_price_bottom_icon_3', true );
$cheap_price_bottom_icon_3_id = attachment_url_to_postid( $cheap_price_bottom_icon_3_url ); 
$cheap_price_bottom_p_3 = get_post_meta($cheap_price_image_id, 'cheap_price_bottom_p_3', true);
$cheap_price_description = get_post_meta($cheap_price_image_id, 'cheap_price_description', true);

?>


<main id="main" class="site-main">
    <section class="section-hero">
        <div class="section-hero-wrapper">
            <h1><?php echo esc_html($section_hero_h1); ?>
                <div class="span-text-wrapper">
                    <span class="span-text-1"><?php echo esc_html($section_hero_span_text_1); ?></span><span class="span-text-2"><?php echo esc_html($section_hero_span_text_2); ?></span>
                </div>
                <p><?php echo esc_html($section_hero_p); ?></p>
                <?php if ($button_link && $button_image && $button_hover_image): ?>
                    <a href="<?php echo esc_url($button_link); ?>" 
                        class="buy-button" 
                        style="background-image: url('<?php echo esc_url($button_image); ?>');" 
                        data-hover-image="<?php echo esc_url($button_hover_image); ?>" 
                        data-normal-image="<?php echo esc_url($button_image); ?>">
                    </a>
                <?php endif; ?>
            </h1>
        </div>
    </section>

    <section class="section-cheap-price">
        <div class="section-cheap-price-wrapper">
            <div class="cheap-price-right-on-target">
                <div class="cheap-price-header adjust-width">
                    <h2><?php echo esc_html($cheap_price_header); ?>
                        <div class="cheap-price-span-text-wrapper">
                            <span class="cheap-price-span-text-1"><?php echo esc_html($cheap_price_span_text_1); ?></span><span class="cheap-price-span-text-2"><?php echo esc_html($cheap_price_span_text_2); ?></span><span class="cheap-price-span-text-3"><?php echo esc_html($cheap_price_span_text_3); ?></span>
                        </div>
                    </h2>
                    <div class="cheap-price-image">
                        <?php
                            if ( $cheap_price_image_red_id ) {
                                echo wp_get_attachment_image( $cheap_price_image_red_id, 'full', false, array( 'alt' => 'trayang-image' ) );
                            }
                        ?>
                    </div>
                </div>
                <div class="cheap-price-bottom">
                    <div class="cheap-price-bottom-box">
                        <div class="cheap-price-bottom-icon">
                            <?php
                                if ( $cheap_price_bottom_icon_1_id ) {
                                    echo wp_get_attachment_image( $cheap_price_bottom_icon_1_id, 'full', false, array( 'alt' => 'trayang-image' ) );
                                }
                            ?>
                        </div>
                        <p><?php echo esc_html($cheap_price_bottom_p_1); ?></p>
                    </div>
                    <div class="cheap-price-bottom-box">
                        <div class="cheap-price-bottom-icon">
                            <?php
                                if ( $cheap_price_bottom_icon_2_id ) {
                                    echo wp_get_attachment_image( $cheap_price_bottom_icon_2_id, 'full', false, array( 'alt' => 'trayang-image' ) );
                                }
                            ?>
                        </div>
                        <p><?php echo esc_html($cheap_price_bottom_p_2); ?></p>
                    </div>
                    <div class="cheap-price-bottom-box">
                        <div class="cheap-price-bottom-icon">
                            <?php
                                if ( $cheap_price_bottom_icon_3_id ) {
                                    echo wp_get_attachment_image( $cheap_price_bottom_icon_3_id, 'full', false, array( 'alt' => 'trayang-image' ) );
                                }
                            ?>
                        </div>
                        <p><?php echo esc_html($cheap_price_bottom_p_3); ?></p>
                    </div>
                </div>
            </div>

            <div class="cheap-price-description">
                <p><?php echo esc_html($cheap_price_description); ?></p>
            </div>

        </div>
    </section>

    <section class="section-our-service">
        <div class="section-our-service-wrapper">
            <div class="our-service-header-box">
                <h2><?php echo esc_html($our_service_header); ?></h2>
            </div>

            <div class="our-service-description-wrapper">
                <div class="our-service-button-wrapper-conatiner">
                    <div class="our-service-button-wrapper">
                        <div class="our-service-button-box active">
                            <img class="our-service-button-box-image" src="<?php echo $our_service_button_image_1_id ? wp_get_attachment_image_url( $our_service_button_image_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                            <img class="our-service-button-box-image-active active" src="<?php echo $our_service_button_image_1_active_id ? wp_get_attachment_image_url( $our_service_button_image_1_active_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        </div>
                        <div class="our-service-button-box">
                            <img class="our-service-button-box-image" src="<?php echo $our_service_button_image_2_id ? wp_get_attachment_image_url( $our_service_button_image_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                            <img class="our-service-button-box-image-active" src="<?php echo $our_service_button_image_2_active_id ? wp_get_attachment_image_url( $our_service_button_image_2_active_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        </div>
                        <div class="our-service-button-box">
                            <img class="our-service-button-box-image" src="<?php echo $our_service_button_image_3_id ? wp_get_attachment_image_url( $our_service_button_image_3_id, 'full' ) : ''; ?>" alt="trayang-icon">
                            <img class="our-service-button-box-image-active" src="<?php echo $our_service_button_image_3_active_id ? wp_get_attachment_image_url( $our_service_button_image_3_active_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        </div>
                        <div class="our-service-button-box">
                            <img class="our-service-button-box-image" src="<?php echo $our_service_button_image_4_id ? wp_get_attachment_image_url( $our_service_button_image_4_id, 'full' ) : ''; ?>" alt="trayang-icon">
                            <img class="our-service-button-box-image-active" src="<?php echo $our_service_button_image_4_active_id ? wp_get_attachment_image_url( $our_service_button_image_4_active_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        </div>
                        <div class="our-service-button-box">
                            <img class="our-service-button-box-image" src="<?php echo $our_service_button_image_5_id ? wp_get_attachment_image_url( $our_service_button_image_5_id, 'full' ) : ''; ?>" alt="trayang-icon">
                            <img class="our-service-button-box-image-active" src="<?php echo $our_service_button_image_5_active_id ? wp_get_attachment_image_url( $our_service_button_image_5_active_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        </div>
                        <div class="our-service-button-box">
                            <img class="our-service-button-box-image" src="<?php echo $our_service_button_image_6_id ? wp_get_attachment_image_url( $our_service_button_image_6_id, 'full' ) : ''; ?>" alt="trayang-icon">
                            <img class="our-service-button-box-image-active" src="<?php echo $our_service_button_image_6_active_id ? wp_get_attachment_image_url( $our_service_button_image_6_active_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        </div>
                    </div>
                </div>


                <div class="our-service-image-box active">
                    <img class="our-service-button-box-image d" src="<?php echo $our_service_button_box_image_d_1_id ? wp_get_attachment_image_url( $our_service_button_box_image_d_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="our-service-button-box-image m" src="<?php echo $our_service_button_box_image_m_1_id ? wp_get_attachment_image_url( $our_service_button_box_image_m_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <div class="our-service-text-box">
                        <h3><?php echo esc_html($our_service_text_h3_1); ?></h3>
                        <p><?php echo esc_html($our_service_text_p_1); ?></p>
                        <a href="<?php echo site_url('rubber-stamppre-inked-rubber-stamp'); ?>"><?php echo esc_html($our_service_text_a); ?></a>
                    </div>
                    <div class="our-service-image-curve">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-service/icon-our-service-curve.png" alt="trayang-icon">
                    </div>
                </div>

                <div class="our-service-image-box">
                    <img class="our-service-button-box-image d" src="<?php echo $our_service_button_box_image_d_2_id ? wp_get_attachment_image_url( $our_service_button_box_image_d_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="our-service-button-box-image m" src="<?php echo $our_service_button_box_image_m_2_id ? wp_get_attachment_image_url( $our_service_button_box_image_m_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <div class="our-service-text-box">
                        <h3><?php echo esc_html($our_service_text_h3_2); ?></h3>
                        <p><?php echo esc_html($our_service_text_p_2); ?></p>
                        <a href="<?php echo site_url('rubber-stamp'); ?>"><?php echo esc_html($our_service_text_a); ?></a>
                    </div>
                    <div class="our-service-image-curve">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-service/icon-our-service-curve.png" alt="trayang-icon">
                    </div>
                </div>

                <div class="our-service-image-box">
                    <img class="our-service-button-box-image d" src="<?php echo $our_service_button_box_image_d_3_id ? wp_get_attachment_image_url( $our_service_button_box_image_d_3_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="our-service-button-box-image m" src="<?php echo $our_service_button_box_image_m_3_id ? wp_get_attachment_image_url( $our_service_button_box_image_m_3_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <div class="our-service-text-box">
                        <h3><?php echo esc_html($our_service_text_h3_3); ?></h3>
                        <p><?php echo esc_html($our_service_text_p_3); ?></p>
                        <a href="<?php echo site_url('rubber-stamp/large-rubber-stamp'); ?>"><?php echo esc_html($our_service_text_a); ?></a>
                    </div>
                    <div class="our-service-image-curve">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-service/icon-our-service-curve.png" alt="trayang-icon">
                    </div>
                </div>

                <div class="our-service-image-box">
                    <img class="our-service-button-box-image d" src="<?php echo $our_service_button_box_image_d_4_id ? wp_get_attachment_image_url( $our_service_button_box_image_d_4_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="our-service-button-box-image m" src="<?php echo $our_service_button_box_image_m_4_id ? wp_get_attachment_image_url( $our_service_button_box_image_m_4_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <div class="our-service-text-box">
                        <h3><?php echo esc_html($our_service_text_h3_4); ?></h3>
                        <p><?php echo esc_html($our_service_text_p_4); ?></p>
                        <a href="<?php echo site_url('stamp-ink'); ?>"><?php echo esc_html($our_service_text_a); ?></a>
                    </div>
                    <div class="our-service-image-curve">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-service/icon-our-service-curve.png" alt="trayang-icon">
                    </div>
                </div>

                <div class="our-service-image-box">
                    <img class="our-service-button-box-image d" src="<?php echo $our_service_button_box_image_d_5_id ? wp_get_attachment_image_url( $our_service_button_box_image_d_5_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="our-service-button-box-image m" src="<?php echo $our_service_button_box_image_m_5_id ? wp_get_attachment_image_url( $our_service_button_box_image_m_5_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <div class="our-service-text-box">
                        <h3><?php echo esc_html($our_service_text_h3_5); ?></h3>
                        <p><?php echo esc_html($our_service_text_p_5); ?></p>
                        <a href="<?php echo site_url('design-company-logo'); ?>"><?php echo esc_html($our_service_text_a); ?></a>
                    </div>
                    <div class="our-service-image-curve">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-service/icon-our-service-curve.png" alt="trayang-icon">
                    </div>
                </div>

                <div class="our-service-image-box">
                    <img class="our-service-button-box-image d" src="<?php echo $our_service_button_box_image_d_6_id ? wp_get_attachment_image_url( $our_service_button_box_image_d_6_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="our-service-button-box-image m" src="<?php echo $our_service_button_box_image_m_6_id ? wp_get_attachment_image_url( $our_service_button_box_image_m_6_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <div class="our-service-text-box">
                        <h3><?php echo esc_html($our_service_text_h3_6); ?></h3>
                        <p><?php echo esc_html($our_service_text_p_6); ?></p>
                        <a href="<?php echo site_url('rubber-stamp/wholesale-rubber-stamps'); ?>"><?php echo esc_html($our_service_text_a); ?></a>
                    </div>
                    <div class="our-service-image-curve">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-service/icon-our-service-curve.png" alt="trayang-icon">
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="section-size-and-price">
        <div class="section-size-and-price-wrapper">
            <div class="section-size-and-price-header">
                <h2><?php echo esc_html($size_and_price_header); ?></h2>
            </div>
            <div class="section-size-and-price-description-wrapper">
                <div class="section-size-and-price-button-box">
                    <div class="section-size-and-price-button">
                        <button class="section-size-and-price-btn-1 active"><?php echo esc_html($size_and_price_btn_1); ?>
                            <p><?php echo esc_html($size_and_price_btn_p); ?></p>
                        </button>
                        <button class="section-size-and-price-btn-2"><?php echo esc_html($size_and_price_btn_2); ?></button>
                    </div>
                </div>
                <div class="section-size-and-price-image-box active">
                    <img class="section-size-and-price-image-1 d" src="<?php echo $size_and_price_image_1_d_id ? wp_get_attachment_image_url( $size_and_price_image_1_d_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="section-size-and-price-image-1 m" src="<?php echo $size_and_price_image_1_m_id ? wp_get_attachment_image_url( $size_and_price_image_1_m_id, 'full' ) : ''; ?>" alt="trayang-icon">
                </div>
                <div class="section-size-and-price-image-box">
                    <img class="section-size-and-price-image-1 d" src="<?php echo $size_and_price_image_2_d_id ? wp_get_attachment_image_url( $size_and_price_image_2_d_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    <img class="section-size-and-price-image-1 m" src="<?php echo $size_and_price_image_2_m_id ? wp_get_attachment_image_url( $size_and_price_image_2_m_id, 'full' ) : ''; ?>" alt="trayang-icon">
                </div>
            </div>
        </div>
    </section>

    <section class="section-order">
        <div class="section-order-wrapper">
            <div class="section-order-header">
                <h2><?php echo esc_html($order_header_home); ?></h2>
            </div>
            <div class="section-order-step-wrapper">
                <div class="section-order-step-box">
                    <div class="section-order-step-icon">
                        <img src="<?php echo $order_delivery_icon_1_id ? wp_get_attachment_image_url( $order_delivery_icon_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-order-step-description-box">
                        <p class="section-order-step-number"><?php echo esc_html($order_step_number_1); ?></p>
                        <p class="section-order-step-datail"><?php echo esc_html($order_step_datail_home_1); ?><br><u><a href="<?php echo esc_url($order_link_line); ?>"><?php echo esc_html($order_link_line_text); ?></a></u></p>
                        <div class="section-order-step-image-scan">
                            <img src="<?php echo $order_delivery_icon_qr_id ? wp_get_attachment_image_url( $order_delivery_icon_qr_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        </div>
                    </div>
                </div>
                <div class="section-order-step-box">
                    <div class="section-order-step-icon">
                        <img src="<?php echo $order_delivery_icon_2_id ? wp_get_attachment_image_url( $order_delivery_icon_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-order-step-description-box">
                        <p class="section-order-step-number"><?php echo esc_html($order_step_number_2); ?></p>
                        <p class="section-order-step-datail"><?php echo esc_html($order_step_datail_home_2); ?></p>
                    </div>
                </div>
                <div class="section-order-step-box">
                    <div class="section-order-step-icon">
                        <img src="<?php echo $order_delivery_icon_2_id ? wp_get_attachment_image_url( $order_delivery_icon_3_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-order-step-description-box">
                        <p class="section-order-step-number"><?php echo esc_html($order_step_number_3); ?></p>
                        <p class="section-order-step-datail"><?php echo esc_html($order_step_datail_home_3); ?></p>
                    </div>
                </div>
            </div>
            <!-- <div class="section-order-step-delivery">
                <img class="d" src="<?php echo $order_step_delivery_image_desktop_id ? wp_get_attachment_image_url( $order_step_delivery_image_desktop_id, 'full' ) : ''; ?>" alt="trayang-delivery">
                <div class="section-order-step-delivery-image-mobile-container">
                    <div class="section-order-step-delivery-image-mobile-wrapepr">
                        <div class="section-order-step-delivery-image-mobile-slide">
                            <img class="m" src="<?php echo $order_step_delivery_image_mobile_1_id ? wp_get_attachment_image_url( $order_step_delivery_image_mobile_1_id, 'full' ) : ''; ?>" alt="trayang-delivery">
                            <div class="section-order-step-text-box">
                                <a href="<?php echo esc_url($button_branch_link_1); ?>"><span>สาขา</span><?php echo esc_html($order_step_text_1); ?></a>
                                <a href="<?php echo esc_url($button_branch_link_2); ?>"><span>สาขา</span><?php echo esc_html($order_step_text_2); ?></a>
                            </div>
                        </div>
                        <div class="section-order-step-delivery-image-mobile-slide">
                            <img class="m" src="<?php echo $order_step_delivery_image_mobile_2_id ? wp_get_attachment_image_url( $order_step_delivery_image_mobile_2_id, 'full' ) : ''; ?>" alt="trayang-delivery">
                            <div class="section-order-step-text-box">
                                <a href="<?php echo esc_url($button_branch_link_1); ?>"><span>สาขา</span><?php echo esc_html($order_step_text_1); ?></a>
                                <a href="<?php echo esc_url($button_branch_link_2); ?>"><span>สาขา</span><?php echo esc_html($order_step_text_2); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="section-order-header add-on">
                <h2>บริการจัดส่งของเรา</h2>
            </div>
            <div class="section-order-step-delivery">
                <div class="section-order-step-delivery-box d">
                    <div class="section-order-step-delivery-row-1-wrapper">
                        <div class="section-order-step-delivery-row-1-text-box">
                            <div class="section-order-step-delivery-row-1-text-header-box">
                                <h3 class="section-order-step-delivery-row-1-text-header">บริการจัดส่งในกรุงเทพฯ</h3>
                            </div>
                            <div class="section-order-step-delivery-row-1-text-paragraph-box">
                                <p class="section-order-step-delivery-row-1-text-paragraph">หากเป็นการจัดส่งในพื้นที่กรุงเทพฯ ตรายางที่สั่งทำจะถูกจัดส่งผ่าน Grab / Lineman / Lalamove ภายใน 1 ชม. หรือ ส่งทางไปรษณีย์ไทย โดยค่าบริการจัดส่งจะขึ้นอยู่กับระยะทางตามจริง</p>
                            </div>
                        </div>
                        <div class="section-order-step-delivery-row-1-image-box">
                            <div class="section-order-step-delivery-row-1-image-header-box">
                                <p class="section-order-step-delivery-row-1-image-header">จัดส่งโดย</p>
                            </div>
                            <div class="section-order-step-delivery-row-1-image-wrapper">
                                <div class="section-order-step-delivery-row-1-image image-1">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-order-step-delivery-row-1-image image-2">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-order-step-delivery-row-1-image image-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-order-step-delivery-row-1-wrapper">
                        <div class="section-order-step-delivery-row-1-text-box">
                            <div class="section-order-step-delivery-row-1-text-header-box">
                                <h3 class="section-order-step-delivery-row-1-text-header">บริการจัดส่งทั่วประเทศ</h3>
                            </div>
                            <div class="section-order-step-delivery-row-1-text-paragraph-box">
                                <p class="section-order-step-delivery-row-1-text-paragraph">หากเป็นการจัดส่งข้ามจังหวัด ตรายางที่สั่งทำจะถูกจัดส่งผ่าน<br class="d"> EMS / Flash Express/ส่งทางไปรษณีย์ไทย โดยค่าบริการจะขึ้นอยู่<br class="d">กับน้ำหนักของพัสดุ</p>
                            </div>
                        </div>
                        <div class="section-order-step-delivery-row-1-image-box">
                            <div class="section-order-step-delivery-row-1-image-header-box">
                                <p class="section-order-step-delivery-row-1-image-header">จัดส่งโดย</p>
                            </div>
                            <div class="section-order-step-delivery-row-1-image-wrapper">
                                <div class="section-order-step-delivery-row-1-image image-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-order-step-delivery-row-1-image image-5">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-order-step-delivery-row-2-wrapper">
                        <div class="section-order-step-delivery-row-2-box-1">
                            <p class="section-order-step-delivery-row-2-box-paragraph">สาขาของเรา</p>
                        </div>
                        <div class="section-order-step-delivery-row-2-box-2">
                            <div class="section-order-step-delivery-row-2-box-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/explore_nearby.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <a href="section-order-step-delivery-row-2-box-2-paragraph-box">
                                <p class="section-order-step-delivery-row-2-box-2-paragraph">สาขาลาดกระบัง</p>
                            </a>
                        </div>
                        <div class="section-order-step-delivery-row-2-box-2">
                            <div class="section-order-step-delivery-row-2-box-2-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/explore_nearby.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            </div>
                            <a href="section-order-step-delivery-row-2-box-2-paragraph-box">
                                <p class="section-order-step-delivery-row-2-box-2-paragraph">สาขานครปฐม</p>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="section-order-step-delivery-image-mobile-container">
                    <div class="section-order-step-delivery-image-mobile-wrapepr">
                        <div class="section-order-step-delivery-image-mobile-slide">

                            <div class="section-order-step-delivery-box m">
                                <div class="section-order-step-delivery-row-1-wrapper">
                                    <div class="section-order-step-delivery-row-1-text-box">
                                        <div class="section-order-step-delivery-row-1-text-header-box">
                                            <h3 class="section-order-step-delivery-row-1-text-header">บริการจัดส่งในกรุงเทพฯ</h3>
                                        </div>
                                        <div class="section-order-step-delivery-row-1-text-paragraph-box">
                                            <p class="section-order-step-delivery-row-1-text-paragraph">หากเป็นการจัดส่งในพื้นที่กรุงเทพฯ ตรายางที่สั่งทำจะถูกจัดส่งผ่าน Grab / Lineman / Lalamove ภายใน 1 ชม. หรือ ส่งทางไปรษณีย์ไทย โดยค่าบริการจัดส่งจะขึ้นอยู่กับระยะทางตามจริง</p>
                                        </div>
                                    </div>
                                    <div class="section-order-step-delivery-row-1-image-box">
                                        <div class="section-order-step-delivery-row-1-image-header-box">
                                            <p class="section-order-step-delivery-row-1-image-header">จัดส่งโดย</p>
                                        </div>
                                        <div class="section-order-step-delivery-row-1-image-wrapper">
                                            <div class="section-order-step-delivery-row-1-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                            </div>
                                            <div class="section-order-step-delivery-row-1-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                            </div>
                                            <div class="section-order-step-delivery-row-1-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="section-order-step-delivery-row-2-wrapper">
                                    <div class="section-order-step-delivery-row-2-box-1">
                                        <p class="section-order-step-delivery-row-2-box-paragraph">สาขาของเรา</p>
                                    </div>
                                    <div class="section-order-step-delivery-row-2-box-2">
                                        <div class="section-order-step-delivery-row-2-box-2-image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/explore_nearby.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                        </div>
                                        <a href="section-order-step-delivery-row-2-box-2-paragraph-box">
                                            <p class="section-order-step-delivery-row-2-box-2-paragraph">สาขาลาดกระบัง</p>
                                        </a>
                                    </div>
                                    <div class="section-order-step-delivery-row-2-box-2">
                                        <div class="section-order-step-delivery-row-2-box-2-image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/explore_nearby.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                        </div>
                                        <a href="section-order-step-delivery-row-2-box-2-paragraph-box">
                                            <p class="section-order-step-delivery-row-2-box-2-paragraph">สาขานครปฐม</p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        <div class="section-order-step-delivery-image-mobile-slide">
                            <div class="section-order-step-delivery-box m">

                                <div class="section-order-step-delivery-row-1-wrapper">
                                    <div class="section-order-step-delivery-row-1-text-box">
                                        <div class="section-order-step-delivery-row-1-text-header-box">
                                            <h3 class="section-order-step-delivery-row-1-text-header">บริการจัดส่งทั่วประเทศ</h3>
                                        </div>
                                        <div class="section-order-step-delivery-row-1-text-paragraph-box">
                                            <p class="section-order-step-delivery-row-1-text-paragraph">หากเป็นการจัดส่งข้ามจังหวัด ตรายางที่สั่งทำจะถูกจัดส่งผ่าน<br class="d"> EMS / Flash Express/ส่งทางไปรษณีย์ไทย โดยค่าบริการจะขึ้นอยู่<br class="d">กับน้ำหนักของพัสดุ</p>
                                        </div>
                                    </div>
                                    <div class="section-order-step-delivery-row-1-image-box">
                                        <div class="section-order-step-delivery-row-1-image-header-box">
                                            <p class="section-order-step-delivery-row-1-image-header">จัดส่งโดย</p>
                                        </div>
                                        <div class="section-order-step-delivery-row-1-image-wrapper">
                                            <div class="section-order-step-delivery-row-1-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                            </div>
                                            <div class="section-order-step-delivery-row-1-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/icon-delivery-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="section-order-step-delivery-row-2-wrapper">
                                    <div class="section-order-step-delivery-row-2-box-1">
                                        <p class="section-order-step-delivery-row-2-box-paragraph">สาขาของเรา</p>
                                    </div>
                                    <div class="section-order-step-delivery-row-2-box-2">
                                        <div class="section-order-step-delivery-row-2-box-2-image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/explore_nearby.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                        </div>
                                        <a href="section-order-step-delivery-row-2-box-2-paragraph-box">
                                            <p class="section-order-step-delivery-row-2-box-2-paragraph">สาขาลาดกระบัง</p>
                                        </a>
                                    </div>
                                    <div class="section-order-step-delivery-row-2-box-2">
                                        <div class="section-order-step-delivery-row-2-box-2-image">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/order/explore_nearby.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                        </div>
                                        <a href="section-order-step-delivery-row-2-box-2-paragraph-box">
                                            <p class="section-order-step-delivery-row-2-box-2-paragraph">สาขานครปฐม</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
            </div>

            <a href="<?php echo esc_url($button_link); ?>" 
                class="buy-button" 
                style="background-image: url('<?php echo esc_url($button_image); ?>');" 
                data-hover-image="<?php echo esc_url($button_hover_image); ?>" 
                data-normal-image="<?php echo esc_url($button_image); ?>">
            </a>

        </div>
    </section>

    <section class="section-our-work">
        <div class="section-our-work-wrapper">
            <div class="section-our-work-header-wrapper">
                <div class="section-our-work-header">
                    <h2><?php echo esc_html($our_work_header); ?></h2>
                </div>
                <div class="section-our-work-header-detail">
                    <p><?php echo esc_html($our_work_header_detail); ?></p>
                </div>
            </div>
            
            <div class="section-our-work-description-wrapper">
                <div class="section-our-work-description-box-container">
                    <!-- <div class="slider-counter">
                        <span class="current-slide">1</span>/<span class="total-slides">6</span>
                    </div> -->

                    <?php
                    $slider_items = get_post_meta(get_the_ID(), 'slider_images', true);

                    if (!empty($slider_items)) :
                    ?>
                        <div class="section-our-work-description-box">
                            <?php foreach ($slider_items as $item) : 
                                // ดึง URL รูปภาพโดยตรง
                                $slide_image = isset($item['slide_image']) ? $item['slide_image'] : ''; 
                                ?>
                                <div class="section-our-work-description-image">
                                    <img class="section-size-and-price-image" src="<?php echo esc_url($slide_image); ?>" alt="Work Slider Image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="section-our-work-description-text-box">
                        <div class="section-our-work-description-text-header">
                            <h3><?php echo esc_html($our_work_text_header_home); ?></h3>
                        </div>
                        <div class="section-our-work-description-text-detail">
                            <p><?php echo esc_html($our_work_text_detail_home); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-our-work-description-wrapper-second">
                <div class="section-our-work-description-box-second-container">
                    <!-- <div class="slider-counter-second">
                        <span class="current-slide">1</span>/<span class="total-slides">6</span>
                    </div> -->

                    <?php
                    $slider_items_2 = get_post_meta(get_the_ID(), 'slider_images_2', true);

                    if (!empty($slider_items_2)) :
                    ?>
                        <div class="section-our-work-description-box-second">
                            <?php foreach ($slider_items_2 as $item) : 
                                // ดึง URL รูปภาพโดยตรง
                                $slide_image_2 = isset($item['slide_image_2']) ? $item['slide_image_2'] : ''; 
                                ?>
                                <div class="section-our-work-description-image-second">
                                    <img class="section-size-and-price-image-second" src="<?php echo esc_url($slide_image_2); ?>" alt="Work Slider Image">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="section-our-work-description-text-box-second">
                        <div class="section-our-work-description-text-header-second">
                            <h3><?php echo esc_html($our_work_text_header_second_home); ?></h3>
                        </div>
                        <div class="section-our-work-description-text-detail-second">
                            <p><?php echo esc_html($our_work_text_detail_second_home); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <a href="<?php echo esc_url($button_link); ?>" 
                class="buy-button" 
                style="background-image: url('<?php echo esc_url($button_image); ?>');" 
                data-hover-image="<?php echo esc_url($button_hover_image); ?>" 
                data-normal-image="<?php echo esc_url($button_image); ?>">
            </a>

        </div>
    </section>

    <section class="section-review">
        <div class="section-review-wrapper">
            <div class="section-review-header-wrapper">
                <div class="section-review-header">
                    <h2><?php echo esc_html($review_header); ?></h2>
                </div>
                <div class="section-review-header-detail">
                    <p><?php echo esc_html($review_header_detail); ?></p>
                </div>
            </div>

            <div class="section-review-description-wrapper-container">
                <?php $review_items = get_post_meta(get_the_ID(), 'review_group', true);
                if (!empty($review_items)) :
                ?>
                <div class="section-review-description-wrapper">
                    <?php foreach ($review_items as $item) :
                        $review_image = isset($item['review_image']) ? $item['review_image'] : '';
                        $review_header = isset($item['review_header']) ? $item['review_header'] : '';
                        $review_description = isset($item['review_description']) ? $item['review_description'] : '';
                        $avatar_image = isset($item['avatar_image']) ? $item['avatar_image'] : '';
                        $name = isset($item['name']) ? $item['name'] : '';
                        $detail = isset($item['detail']) ? $item['detail'] : '';
                    ?>
                    <div class="section-review-description-box">
                        <div class="section-review-description-image">
                            <img src="<?php echo esc_url($review_image); ?>" alt="Review Image">
                        </div>
                        <div class="section-review-description">
                            <h3><?php echo esc_html($review_header); ?></h3>
                            <p><?php echo esc_html($review_description); ?></p>
                            <div class="section-review-description-footer">
                                <div class="section-review-description-avatar">
                                    <img src="<?php echo esc_url($avatar_image); ?>" alt="Avatar Image">
                                </div>
                                <div class="section-review-description-name-box">
                                    <p class="section-review-description-name"><?php echo esc_html($name); ?></p>
                                    <p class="section-review-description-detail"><?php echo esc_html($detail); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>    

        </div>
    </section>

    <section class="section-article">
        <div class="section-article-wrapper">
            <div class="section-article-header-wrapper">
                <div class="section-article-header">
                    <h2><?php echo esc_html($article_header); ?></h2>
                </div>
                <div class="section-article-header-detail">
                    <p><?php echo esc_html($article_header_detail); ?></p>
                </div>
            </div>

            <div class="section-article-description-wrapper-container">
                <div class="section-article-description-wrapper">
                    <?php
                    // Loop ดึงบทความแนะนำหรือบทความที่เกี่ยวข้อง
                    $related_posts = new WP_Query(array(
                        'posts_per_page' => 4,
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'post__not_in' => array(get_the_ID())
                    ));

                    if ($related_posts->have_posts()) :
                        while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="section-article-description-box">
                                <div class="section-article-description-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.png" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="section-article-description">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="section-article-description-footer">
                                        <div class="section-article-description-footer-image">
                                            <img class="section-size-and-price-image-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/article/icon-date-range.png" alt="trayang-image">
                                        </div>
                                        <div class="section-article-description-footer-text">
                                            <p class="section-article-description-footer-text-date"><?php echo get_the_date('j F'); ?></p>
                                            <p class="section-article-description-footer-text-year"><?php echo get_the_date('Y'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>

            <a href="<?php echo esc_url($button_link_article); ?>"
                class="article-button"
                style="background-image: url('<?php echo esc_url($button_image_article); ?>');"
                data-hover-image="<?php echo esc_url($button_hover_image_article); ?>"
                data-normal-image="<?php echo esc_url($button_image_article); ?>">
            </a>
        </div>
    </section>

    <section class="section-contact-us">
        <div class="section-contact-us-wrapper">
            <div class="section-contact-us-header-wrapper">
                <div class="section-contact-us-header">
                    <h2><?php echo esc_html($contact_us_header); ?></h2>
                </div>
                <div class="section-contact-us-detail">
                    <p><?php echo esc_html($contact_us_detail); ?></p>
                </div>
            </div>
            <div class="section-contact-us-channel-wrapper">
                <div class="section-contact-us-channel-box">
                    <div class="section-contact-us-channel-image">
                        <img src="<?php echo $contact_us_channel_image_line_id ? wp_get_attachment_image_url( $contact_us_channel_image_line_id, 'full' ) : ''; ?>" alt="trayang-image">
                    </div>
                    <div class="section-contact-us-channel-text">
                        <p class="section-contact-us-channel-text-header"><?php echo esc_html($contact_us_channel_text_header); ?></p>
                        <p class="section-contact-us-channel-text-detail"><?php echo wp_kses_post($contact_us_channel_text_detail); ?></p>
                    </div>
                    <div class="section-contact-us-channel-image-scan">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-us/image-qr.png" alt="trayang-image">
                    </div>
                </div>
                <!-- <div class="section-contact-us-channel-box">
                    <div class="section-contact-us-channel-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-us/icon-phone.png" alt="trayang-image">
                    </div>
                    <div class="section-contact-us-channel-text">
                        <p class="section-contact-us-channel-text-header">โทรสั่งทำตรายาง</p>
                        <p class="section-contact-us-channel-text-detail"><u>00-000-0000</u><br>เวลา 08.30-22.30 น.</p>
                    </div>
                </div> -->
                <div class="section-contact-us-channel-box">
                    <div class="section-contact-us-channel-image">
                        <img src="<?php echo $contact_us_channel_image_email_id ? wp_get_attachment_image_url( $contact_us_channel_image_email_id, 'full' ) : ''; ?>" alt="trayang-image">
                    </div>
                    <div class="section-contact-us-channel-text">
                        <p class="section-contact-us-channel-text-header"><?php echo esc_html($contact_us_channel_text_header_1); ?></p>
                        <p class="section-contact-us-channel-text-detail"><?php echo wp_kses_post($contact_us_channel_text_detail_1); ?></p>
                    </div>
                </div>

            </div>

            <div class="section-contact-us-image-order">
                <img class="d" src="<?php echo $contact_us_image_order_d_id ? wp_get_attachment_image_url( $contact_us_image_order_d_id, 'full' ) : ''; ?>" alt="trayang-image">
                <img class="m" src="<?php echo $contact_us_image_order_m_id ? wp_get_attachment_image_url( $contact_us_image_order_m_id, 'full' ) : ''; ?>">
                <a href="<?php echo esc_url($button_link); ?>" 
                    class="buy-button" 
                    style="background-image: url('<?php echo esc_url($button_image); ?>');" 
                    data-hover-image="<?php echo esc_url($button_hover_image); ?>" 
                    data-normal-image="<?php echo esc_url($button_image); ?>">
                </a>
            </div>
            
        </div>
    </section>

</main>

<?php
get_footer(); 
?>
