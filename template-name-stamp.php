<?php
/**
 * Template Name: Name Stamp
 * Description: A custom home page template for the website.
 */

get_header();
$hero_name_stamp_h1 = get_post_meta(get_the_ID(), 'hero_name_stamp_h1', true);
$trayang_breadcrumb_name_stamp_1 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_name_stamp_1', true);
$trayang_breadcrumb_name_stamp_2 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_name_stamp_2', true);
$trayang_breadcrumb_name_stamp_3 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_name_stamp_3', true);
$name_stamp_header_2 = get_post_meta(get_the_ID(), 'name_stamp_header_2', true);
$name_stamp_second_image_d_url = get_post_meta( get_the_ID(), 'name_stamp_second_image_d', true );
$name_stamp_second_image_d_id = attachment_url_to_postid( $name_stamp_second_image_d_url );
$name_stamp_second_image_m_url = get_post_meta( get_the_ID(), 'name_stamp_second_image_m', true );
$name_stamp_second_image_m_id = attachment_url_to_postid( $name_stamp_second_image_m_url );
$name_stamp_second_detail_header = get_post_meta(get_the_ID(), 'name_stamp_second_detail_header', true);
$name_stamp_second_detail_text = get_post_meta(get_the_ID(), 'name_stamp_second_detail_text', true);
$each_stamp_second_text_bottom_image_1_url = get_post_meta( get_the_ID(), 'each_stamp_second_text_bottom_image_1', true );
$each_stamp_second_text_bottom_image_1_id = attachment_url_to_postid( $each_stamp_second_text_bottom_image_1_url );
$each_stamp_second_text_bottom_detail_1 = get_post_meta(get_the_ID(), 'each_stamp_second_text_bottom_detail_1', true);
$each_stamp_second_text_bottom_image_2_url = get_post_meta( get_the_ID(), 'each_stamp_second_text_bottom_image_2', true );
$each_stamp_second_text_bottom_image_2_id = attachment_url_to_postid( $each_stamp_second_text_bottom_image_2_url );
$each_stamp_second_text_bottom_detail_2 = get_post_meta(get_the_ID(), 'each_stamp_second_text_bottom_detail_2', true);
$each_stamp_second_text_bottom_image_3_url = get_post_meta( get_the_ID(), 'each_stamp_second_text_bottom_image_3', true );
$each_stamp_second_text_bottom_image_3_id = attachment_url_to_postid( $each_stamp_second_text_bottom_image_3_url );
$each_stamp_second_text_bottom_detail_3 = get_post_meta(get_the_ID(), 'each_stamp_second_text_bottom_detail_3', true);
$date_stamp_second_image_order_now_url = get_post_meta( get_the_ID(), 'date_stamp_second_image_order_now', true );
$date_stamp_second_image_order_now_id = attachment_url_to_postid( $date_stamp_second_image_order_now_url );
$why_do_you_have_to_order_header = get_post_meta(get_the_ID(), 'why_do_you_have_to_order_header', true);
$why_do_you_have_to_order_detail_image_1_url = get_post_meta( get_the_ID(), 'why_do_you_have_to_order_detail_image_1', true );
$why_do_you_have_to_order_detail_image_1_id = attachment_url_to_postid( $why_do_you_have_to_order_detail_image_1_url );
$why_do_you_have_to_order_detail_header_1 = get_post_meta(get_the_ID(), 'why_do_you_have_to_order_detail_header_1', true);
$why_do_you_have_to_order_detail_text_1 = get_post_meta(get_the_ID(), 'why_do_you_have_to_order_detail_text_1', true);
$why_do_you_have_to_order_detail_image_2_url = get_post_meta( get_the_ID(), 'why_do_you_have_to_order_detail_image_2', true );
$why_do_you_have_to_order_detail_image_2_id = attachment_url_to_postid( $why_do_you_have_to_order_detail_image_2_url );
$why_do_you_have_to_order_detail_header_2 = get_post_meta(get_the_ID(), 'why_do_you_have_to_order_detail_header_2', true);
$why_do_you_have_to_order_detail_text_2 = get_post_meta(get_the_ID(), 'why_do_you_have_to_order_detail_text_2', true);
$why_do_you_have_to_order_detail_image_3_url = get_post_meta( get_the_ID(), 'why_do_you_have_to_order_detail_image_3', true );
$why_do_you_have_to_order_detail_image_3_id = attachment_url_to_postid( $why_do_you_have_to_order_detail_image_3_url );
$why_do_you_have_to_order_detail_header_3 = get_post_meta(get_the_ID(), 'why_do_you_have_to_order_detail_header_3', true);
$why_do_you_have_to_order_detail_text_3 = get_post_meta(get_the_ID(), 'why_do_you_have_to_order_detail_text_3', true);
$types_of_stamps_produce_header = get_post_meta(get_the_ID(), 'types_of_stamps_produce_header', true);
$types_of_stamps_produce_detail_image_d_1_url = get_post_meta( get_the_ID(), 'types_of_stamps_produce_detail_image_d_1', true );
$types_of_stamps_produce_detail_image_d_1_id = attachment_url_to_postid( $types_of_stamps_produce_detail_image_d_1_url );
$types_of_stamps_produce_detail_image_m_1_url = get_post_meta( get_the_ID(), 'types_of_stamps_produce_detail_image_m_1', true );
$types_of_stamps_produce_detail_image_m_1_id = attachment_url_to_postid( $types_of_stamps_produce_detail_image_m_1_url );
$types_of_stamps_produce_detail_text_header_1 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_header_1', true);
$types_of_stamps_produce_detail_text_middle_span_1_1 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_1_1', true);
$types_of_stamps_produce_detail_text_middle_1_1 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_1_1', true);
$types_of_stamps_produce_detail_text_middle_span_1_2 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_1_2', true);
$types_of_stamps_produce_detail_text_middle_1_2 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_1_2', true);
$types_of_stamps_produce_detail_text_middle_span_1_3 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_1_3', true);
$types_of_stamps_produce_detail_text_middle_1_3 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_1_3', true);
$types_of_stamps_produce_detail_text_middle_span_1_4 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_1_4', true);
$types_of_stamps_produce_detail_text_middle_1_4 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_1_4', true);
$types_of_stamps_produce_detail_text_bottom_link = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_bottom_link', true);
$types_of_stamps_produce_detail_text_bottom_text = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_bottom_text', true);
$types_of_stamps_produce_detail_image_d_2_url = get_post_meta( get_the_ID(), 'types_of_stamps_produce_detail_image_d_2', true );
$types_of_stamps_produce_detail_image_d_2_id = attachment_url_to_postid( $types_of_stamps_produce_detail_image_d_2_url );
$types_of_stamps_produce_detail_image_m_2_url = get_post_meta( get_the_ID(), 'types_of_stamps_produce_detail_image_m_2', true );
$types_of_stamps_produce_detail_image_m_2_id = attachment_url_to_postid( $types_of_stamps_produce_detail_image_m_2_url );
$types_of_stamps_produce_detail_text_header_2 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_header_2', true);
$types_of_stamps_produce_detail_text_middle_span_2_1 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_2_1', true);
$types_of_stamps_produce_detail_text_middle_2_1 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_2_1', true);
$types_of_stamps_produce_detail_text_middle_span_2_2 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_2_2', true);
$types_of_stamps_produce_detail_text_middle_2_2 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_2_2', true);
$types_of_stamps_produce_detail_text_middle_span_2_3 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_2_3', true);
$types_of_stamps_produce_detail_text_middle_2_3 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_2_3', true);
$types_of_stamps_produce_detail_text_middle_span_2_4 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_span_2_4', true);
$types_of_stamps_produce_detail_text_middle_2_4 = get_post_meta(get_the_ID(), 'types_of_stamps_produce_detail_text_middle_2_4', true);
$order_header_each_type_of_stamp = get_post_meta(get_the_ID(), 'order_header_each_type_of_stamp', true);
$order_step_datail_each_type_of_stamp_1 = get_post_meta(get_the_ID(), 'order_step_datail_each_type_of_stamp_1', true);
$order_step_datail_each_type_of_stamp_2 = get_post_meta(get_the_ID(), 'order_step_datail_each_type_of_stamp_2', true);
$order_step_datail_each_type_of_stamp_3 = get_post_meta(get_the_ID(), 'order_step_datail_each_type_of_stamp_3', true);
$how_is_it_better_header = get_post_meta(get_the_ID(), 'how_is_it_better_header', true);
$how_is_it_better_detail = get_post_meta(get_the_ID(), 'how_is_it_better_detail', true);
$our_work_header = get_post_meta(get_the_ID(), 'our_work_header', true);
$our_work_header_detail = get_post_meta(get_the_ID(), 'our_work_header_detail', true);

// Section Review
$review_header = get_post_meta(get_the_ID(), 'review_header', true);
$review_header_detail = get_post_meta(get_the_ID(), 'review_header_detail', true);

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Cheap Price Image"
$cheap_price_image_id = get_page_by_title('Cheap Price Image', OBJECT, 'reusable_blocks')->ID;
$cheap_price_image_red_url = get_post_meta( $cheap_price_image_id, 'cheap_price_image_red', true );
$cheap_price_image_red_id = attachment_url_to_postid( $cheap_price_image_red_url ); // แปลง URL เป็น ID

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

?>


<main id="main" class="site-main each-stamp date-stamp">
    <section class="section-hero-name-stamp">
        <div class="section-hero-name-stamp-wrapper">
            <h1><?php echo esc_html($hero_name_stamp_h1); ?></h1>
        </div>
    </section>

    <section class="section-each-stamp-first">
        <div class="section-each-stamp-first-wrapper">
            <div class="trayang-breadcrumb">
                <?php echo wp_kses_post($trayang_breadcrumb_name_stamp_1); ?>
                <?php echo wp_kses_post($trayang_breadcrumb_name_stamp_2); ?>
                <?php echo wp_kses_post($trayang_breadcrumb_name_stamp_3); ?>
            </div>
            <div class="cheap-price-header adjust-width-2">
                <h2><?php echo esc_html($name_stamp_header_2); ?></h2>
                <div class="cheap-price-image">
                    <?php
                        if ( $cheap_price_image_red_id ) {
                            echo wp_get_attachment_image( $cheap_price_image_red_id, 'full', false, array( 'alt' => 'trayang-image' ) );
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <section class="section-date-stamp-second">
        <div class="section-dete-stamp-second-wrapper">
           <div class="section-dete-stamp-second-image-box name-stamp">
                <div class="section-dete-stamp-second-image">
                    <img class="d" src="<?php echo $name_stamp_second_image_d_id ? wp_get_attachment_image_url( $name_stamp_second_image_d_id, 'full' ) : ''; ?>" alt="trayang-image">
                    <img class="m" src="<?php echo $name_stamp_second_image_m_id ? wp_get_attachment_image_url( $name_stamp_second_image_m_id, 'full' ) : ''; ?>" alt="trayang-image">
                </div>
           </div>
           <div class="section-dete-stamp-second-detail-box">
                <div class="section-dete-stamp-second-detail-header">
                    <h2><?php echo esc_html($name_stamp_second_detail_header); ?></h2>
                </div>
                <div class="section-dete-stamp-second-detail-text">
                    <p><?php echo esc_html($name_stamp_second_detail_text); ?></p>
                </div>

                <div class="section-date-stamp-second-text-bottom">
                    <div class="section-date-stamp-second-text-bottom-box">
                        <div class="section-date-stamp-second-text-bottom-image-border">
                            <div class="section-date-stamp-second-text-bottom-image">
                                <img src="<?php echo $each_stamp_second_text_bottom_image_1_id ? wp_get_attachment_image_url( $each_stamp_second_text_bottom_image_1_id, 'full' ) : ''; ?>" alt="trayang-image">
                            </div>
                        </div>
                        <div class="section-date-stamp-second-text-bottom-detail">
                            <p><?php echo esc_html($each_stamp_second_text_bottom_detail_1); ?></p>
                        </div>
                    </div>
                    <div class="section-date-stamp-second-text-bottom-box">
                        <div class="section-date-stamp-second-text-bottom-image-border">
                            <div class="section-date-stamp-second-text-bottom-image">
                                <img src="<?php echo $each_stamp_second_text_bottom_image_2_id ? wp_get_attachment_image_url( $each_stamp_second_text_bottom_image_2_id, 'full' ) : ''; ?>" alt="trayang-image">
                            </div>
                        </div>
                        <div class="section-date-stamp-second-text-bottom-detail">
                            <p><?php echo esc_html($each_stamp_second_text_bottom_detail_2); ?></p>
                        </div>
                    </div>
                    <div class="section-date-stamp-second-text-bottom-box">
                        <div class="section-date-stamp-second-text-bottom-image-border">
                            <div class="section-date-stamp-second-text-bottom-image">
                                <img src="<?php echo $each_stamp_second_text_bottom_image_3_id ? wp_get_attachment_image_url( $each_stamp_second_text_bottom_image_3_id, 'full' ) : ''; ?>" alt="trayang-image">
                            </div>
                        </div>
                        <div class="section-date-stamp-second-text-bottom-detail">
                            <p><?php echo esc_html($each_stamp_second_text_bottom_detail_3); ?></p>
                        </div>
                    </div>
                </div>
                <div class="section-date-stamp-second-image-order-now">
                    <img src="<?php echo $date_stamp_second_image_order_now_id ? wp_get_attachment_image_url( $date_stamp_second_image_order_now_id, 'full' ) : ''; ?>" alt="trayang-image">
                </div>

           </div>

        </div>
    </section>

    <section class="section-why-do-you-have-to-order">
        <div class="section-why-do-you-have-to-order-wrapper">
            <div class="section-why-do-you-have-to-order-header">
                <h2><?php echo esc_html($why_do_you_have_to_order_header); ?></h2>
            </div>

            <div class="section-why-do-you-have-to-order-detail-wrapper">

                <div class="section-why-do-you-have-to-order-detail-box">
                    <div class="section-why-do-you-have-to-order-detail-image">
                        <img src="<?php echo $why_do_you_have_to_order_detail_image_1_id ? wp_get_attachment_image_url( $why_do_you_have_to_order_detail_image_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-why-do-you-have-to-order-detail-header">
                        <h3><?php echo esc_html($why_do_you_have_to_order_detail_header_1); ?></h3>
                    </div>
                    <div class="section-why-do-you-have-to-order-detail-text">
                        <p><?php echo esc_html($why_do_you_have_to_order_detail_text_1); ?></p>
                    </div>
                </div>

                <div class="section-why-do-you-have-to-order-detail-box">
                    <div class="section-why-do-you-have-to-order-detail-image">
                        <img src="<?php echo $why_do_you_have_to_order_detail_image_2_id ? wp_get_attachment_image_url( $why_do_you_have_to_order_detail_image_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-why-do-you-have-to-order-detail-header">
                        <h3><?php echo esc_html($why_do_you_have_to_order_detail_header_2); ?></h3>
                    </div>
                    <div class="section-why-do-you-have-to-order-detail-text">
                        <p><?php echo esc_html($why_do_you_have_to_order_detail_text_2); ?></p>
                    </div>
                </div>

                <div class="section-why-do-you-have-to-order-detail-box">
                    <div class="section-why-do-you-have-to-order-detail-image">
                        <img src="<?php echo $why_do_you_have_to_order_detail_image_3_id ? wp_get_attachment_image_url( $why_do_you_have_to_order_detail_image_3_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-why-do-you-have-to-order-detail-header">
                        <h3><?php echo esc_html($why_do_you_have_to_order_detail_header_3); ?></h3>
                    </div>
                    <div class="section-why-do-you-have-to-order-detail-text">
                        <p><?php echo esc_html($why_do_you_have_to_order_detail_text_3); ?></p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="section-types-of-stamps-produce">
        <div class="section-types-of-stamps-produce-wrapper">
            <div class="section-types-of-stamps-produce-header">
                <h2><?php echo esc_html($types_of_stamps_produce_header); ?></h2>
            </div>

            <div class="section-types-of-stamps-produce-detail-wrapper">
                <div class="section-types-of-stamps-produce-detail-box">
                    <div class="section-types-of-stamps-produce-detail-image">
                        <img class="d" src="<?php echo $types_of_stamps_produce_detail_image_d_1_id ? wp_get_attachment_image_url( $types_of_stamps_produce_detail_image_d_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        <img class="m" src="<?php echo $types_of_stamps_produce_detail_image_m_1_id ? wp_get_attachment_image_url( $types_of_stamps_produce_detail_image_m_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-types-of-stamps-produce-detail-text">
                        <div class="section-types-of-stamps-produce-detail-text-header">
                            <h3><?php echo esc_html($types_of_stamps_produce_detail_text_header_1); ?></h3>
                        </div>
                        <div class="section-types-of-stamps-produce-detail-text-middle">
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_1_1); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_1_1); ?></p>
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_1_2); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_1_2); ?></p>
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_1_3); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_1_3); ?></p>
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_1_4); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_1_4); ?></p>
                        </div>
                        <a href="<?php echo esc_url($types_of_stamps_produce_detail_text_bottom_link); ?>" class="section-types-of-stamps-produce-detail-text-bottom">
                            <p><u><?php echo esc_html($types_of_stamps_produce_detail_text_bottom_text); ?></u></p>
                            <div class="section-types-of-stamps-produce-detail-text-bottom-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/name-stamp/arrow_right_alt.png" alt="trayang-icon">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="section-types-of-stamps-produce-detail-box">
                    <div class="section-types-of-stamps-produce-detail-image">
                        <img class="d" src="<?php echo $types_of_stamps_produce_detail_image_d_2_id ? wp_get_attachment_image_url( $types_of_stamps_produce_detail_image_d_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                        <img class="m" src="<?php echo $types_of_stamps_produce_detail_image_m_2_id ? wp_get_attachment_image_url( $types_of_stamps_produce_detail_image_m_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-types-of-stamps-produce-detail-text">
                        <div class="section-types-of-stamps-produce-detail-text-header">
                            <h3><?php echo esc_html($types_of_stamps_produce_detail_text_header_2); ?></h3>
                        </div>
                        <div class="section-types-of-stamps-produce-detail-text-middle">
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_2_1); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_2_1); ?></p>
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_2_2); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_2_2); ?></p>
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_2_3); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_2_3); ?></p>
                            <p><span><?php echo esc_html($types_of_stamps_produce_detail_text_middle_span_2_4); ?></span>&nbsp;<?php echo esc_html($types_of_stamps_produce_detail_text_middle_2_4); ?></p>
                        </div>
                        <a href="<?php echo esc_url($types_of_stamps_produce_detail_text_bottom_link); ?>" class="section-types-of-stamps-produce-detail-text-bottom">
                            <p><u><?php echo esc_html($types_of_stamps_produce_detail_text_bottom_text); ?></u></p>
                            <div class="section-types-of-stamps-produce-detail-text-bottom-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/name-stamp/arrow_right_alt.png" alt="trayang-icon">
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="section-order">
        <div class="section-order-wrapper">
            <div class="section-order-header">
                <h2><?php echo esc_html($order_header_each_type_of_stamp); ?></h2>
            </div>
            <div class="section-order-step-wrapper">
                <div class="section-order-step-box">
                    <div class="section-order-step-icon">
                        <img src="<?php echo $order_delivery_icon_1_id ? wp_get_attachment_image_url( $order_delivery_icon_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-order-step-description-box">
                        <p class="section-order-step-number"><?php echo esc_html($order_step_number_1); ?></p>
                        <p class="section-order-step-datail"><?php echo esc_html($order_step_datail_each_type_of_stamp_1); ?><u><a href="<?php echo esc_url($order_link_line); ?>"><?php echo esc_html($order_link_line_text); ?></a></u></p>
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
                        <p class="section-order-step-datail"><?php echo esc_html($order_step_datail_each_type_of_stamp_2); ?></p>
                    </div>
                </div>
                <div class="section-order-step-box">
                    <div class="section-order-step-icon">
                        <img src="<?php echo $order_delivery_icon_2_id ? wp_get_attachment_image_url( $order_delivery_icon_3_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-order-step-description-box">
                        <p class="section-order-step-number"><?php echo esc_html($order_step_number_3); ?></p>
                        <p class="section-order-step-datail"><?php echo esc_html($order_step_datail_each_type_of_stamp_3); ?></p>
                    </div>
                </div>
            </div>


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

    <section class="section-how-is-it-better">
        <div class="section-how-is-it-better-wrapper">
            <div class="section-how-is-it-better-header">
                <h2><?php echo esc_html($how_is_it_better_header); ?></h2>
            </div>
            <div class="section-how-is-it-better-detail">
                <p><?php echo esc_html($how_is_it_better_detail); ?></p>
            </div>
        </div>
    </section>

    <section class="section-our-work">
        <div class="section-our-work-wrapper">
            <div class="section-our-work-header-wrapper">
                <div class="section-our-work-header">
                    <h2><?php echo esc_html($our_work_header); ?></h2>
                </div>
                <div class="section-our-work-header-detail" style="display:none;">
                    <p><?php echo esc_html($our_work_header_detail); ?></p>
                </div>
            </div>
            
            <div class="section-our-work-description-wrapper">
                <div class="section-our-work-description-box-container">
                    <!-- <div class="slider-counter">
                        <span class="current-slide">1</span>/<span class="total-slides">6</span>
                    </div> -->

                    <?php
                    $slider_items = get_post_meta(get_the_ID(), 'slider_images_name_stamp', true);

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

                    <div class="section-our-work-description-text-box" style="display:none;">
                        <div class="section-our-work-description-text-header">
                            <h3><?php echo esc_html($our_work_text_header_home); ?></h3>
                        </div>
                        <div class="section-our-work-description-text-detail" style="display:none;">
                            <p><?php echo esc_html($our_work_text_detail_home); ?></p>
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

                <?php $review_items = get_post_meta(get_the_ID(), 'review_group_name_stamp', true);
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
