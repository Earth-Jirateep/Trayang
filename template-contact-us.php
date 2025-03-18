<?php
/**
 * Template Name: Contact Us
 * Description: A custom home page template for the website.
 */

get_header();

$hero_each_stamp_h1 = get_post_meta(get_the_ID(), 'hero_each_stamp_h1', true);
$trayang_breadcrumb_each_type_1 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_each_type_1', true);
$trayang_breadcrumb_each_type_2 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_each_type_2', true);
$contact_us_page_header = get_post_meta(get_the_ID(), 'contact_us_page_header', true);
$contact_us_page_detail = get_post_meta(get_the_ID(), 'contact_us_page_detail', true);
$contact_us_maps_header = get_post_meta(get_the_ID(), 'contact_us_maps_header', true);
$contact_us_maps_location_text_image_url = get_post_meta( get_the_ID(), 'contact_us_maps_location_text_image', true );
$contact_us_maps_location_text_image_id = attachment_url_to_postid( $contact_us_maps_location_text_image_url );
$contact_us_maps_location_text_header_h3 = get_post_meta(get_the_ID(), 'contact_us_maps_location_text_header_h3', true);
$contact_us_maps_location_text_detail = get_post_meta(get_the_ID(), 'contact_us_maps_location_text_detail', true);
$contact_us_maps_location_text_header_h3_2 = get_post_meta(get_the_ID(), 'contact_us_maps_location_text_header_h3_2', true);
$contact_us_maps_location_text_detail_2 = get_post_meta(get_the_ID(), 'contact_us_maps_location_text_detail_2', true);
$google_maps_link_1 = get_post_meta(get_the_ID(), 'google_maps_link_1', true);
$contact_us_page_header_1 = get_post_meta(get_the_ID(), 'contact_us_page_header_1', true);
$contact_us_page_detail_span_1 = get_post_meta(get_the_ID(), 'contact_us_page_detail_span_1', true);
$contact_us_page_detail_1 = get_post_meta(get_the_ID(), 'contact_us_page_detail_1', true);
$contact_us_page_detail_span_2 = get_post_meta(get_the_ID(), 'contact_us_page_detail_span_2', true);
$contact_us_page_detail_2 = get_post_meta(get_the_ID(), 'contact_us_page_detail_2', true);
$google_maps_link_2 = get_post_meta(get_the_ID(), 'google_maps_link_2', true);
$contact_us_page_detail_span_3 = get_post_meta(get_the_ID(), 'contact_us_page_detail_span_3', true);
$contact_us_page_detail_3 = get_post_meta(get_the_ID(), 'contact_us_page_detail_3', true);



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

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Cheap Price Image"
$cheap_price_image_id = get_page_by_title('Cheap Price Image', OBJECT, 'reusable_blocks')->ID;
$cheap_price_image_red_url = get_post_meta( $cheap_price_image_id, 'cheap_price_image_red', true );
$cheap_price_image_red_id = attachment_url_to_postid( $cheap_price_image_red_url ); // แปลง URL เป็น ID

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Stamp Order Button"
$stamp_order_button_id = get_page_by_title('Stamp Order Button', OBJECT, 'reusable_blocks')->ID;
$button_link = get_post_meta($stamp_order_button_id, 'button_link', true);
$button_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_image_id', true));
$button_hover_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_hover_image_id', true));
?>


<main id="main" class="site-main contact-us">
    <section class="section-hero-contact-us-page">
        <div class="section-hero-contact-us-page-wrapper">
            <h1><?php echo esc_html($hero_each_stamp_h1); ?></h1>
        </div>
    </section>

    <section class="section-each-stamp-first">
        <div class="section-each-stamp-first-wrapper">
            <div class="trayang-breadcrumb">
                <?php echo wp_kses_post($trayang_breadcrumb_each_type_1); ?>
                <?php echo wp_kses_post($trayang_breadcrumb_each_type_2); ?>
            </div>
        </div>
        <div class="section-contact-us-curve">
            <img class="m" src="<?php echo get_template_directory_uri(); ?>/assets/images/section-cheap-price/background-our-cheap-price.png" alt="trayang-image">
        </div>
    </section>

    <section class="section-contact-us">
        <div class="section-contact-us-wrapper">
            <div class="section-contact-us-header-wrapper">
                <div class="section-contact-us-header">
                    <h2><?php echo esc_html($contact_us_page_header); ?></h2>
                </div>
                <div class="section-contact-us-detail">
                    <p><?php echo esc_html($contact_us_page_detail); ?></p>
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
            
        </div>
    </section>

    <section class="section-contact-us-maps">
        <div class="section-contact-us-maps-wrapper">
            <div class="section-contact-us-maps-header">
                <h2><?php echo wp_kses_post($contact_us_maps_header); ?></h2>
            </div>

            <div class="section-contact-us-maps-location-wrapper">
                <div class="section-contact-us-maps-location-text">
                    <div class="section-contact-us-maps-location-text-header">
                        <div class="section-contact-us-maps-location-text-image">
                            <img src="<?php echo $contact_us_maps_location_text_image_id ? wp_get_attachment_image_url( $contact_us_maps_location_text_image_id, 'full' ) : ''; ?>" alt="trayang-image">
                        </div>
                        <h3><?php echo wp_kses_post($contact_us_maps_location_text_header_h3); ?></h3>
                    </div>
                    <div class="section-contact-us-maps-location-detail">
                        <p><?php echo wp_kses_post($contact_us_maps_location_text_detail); ?></p>
                    </div>
                </div>

                <div class="section-contact-maps-container">
                    <iframe src="<?php echo esc_url($google_maps_link_1); ?>" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

            <div class="section-contact-us-maps-location-wrapper">
                <div class="section-contact-us-maps-location-text">
                    <div class="section-contact-us-maps-location-text-header">
                        <div class="section-contact-us-maps-location-text-image">
                            <img src="<?php echo $contact_us_maps_location_text_image_id ? wp_get_attachment_image_url( $contact_us_maps_location_text_image_id, 'full' ) : ''; ?>" alt="trayang-image">
                        </div>
                        <h3><?php echo wp_kses_post($contact_us_maps_location_text_header_h3_2); ?></h3>
                    </div>
                    <div class="section-contact-us-maps-location-detail">
                        <p><?php echo wp_kses_post($contact_us_maps_location_text_detail_2); ?></p>
                    </div>
                </div>

                <div class="section-contact-maps-container">
                    <iframe src="<?php echo esc_url($google_maps_link_2); ?>"
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>

        </div>
    
    </section>

    <section class="section-contact-us-page">
        <div class="section-contact-us-page-wrapper">
            <div class="section-contact-us-page-header">
                <h2><?php echo esc_html($contact_us_page_header_1); ?></h2>
            </div>
            <div class="section-contact-us-page-detail">
                <p><span><?php echo esc_html($contact_us_page_detail_span_1); ?></span><br class="m"> <?php echo esc_html($contact_us_page_detail_1); ?></p>
                <p><span><?php echo esc_html($contact_us_page_detail_span_2); ?></span><br class="m"> <?php echo esc_html($contact_us_page_detail_2); ?></p>
                <p><span><?php echo esc_html($contact_us_page_detail_span_3); ?></span><br class="m"> <?php echo esc_html($contact_us_page_detail_3); ?></p>
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
