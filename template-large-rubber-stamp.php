<?php
/**
 * Template Name: Large Rubber Stamp
 * Description: A custom home page template for the website.
 */

get_header();

$hero_each_stamp_h1 = get_post_meta(get_the_ID(), 'hero_each_stamp_h1', true);
$trayang_breadcrumb_name_stamp_1 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_name_stamp_1', true);
$trayang_breadcrumb_name_stamp_2 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_name_stamp_2', true);
$trayang_breadcrumb_name_stamp_3 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_name_stamp_3', true);
$cheap_price_header_h2_head = get_post_meta(get_the_ID(), 'cheap_price_header_h2_head', true);
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
$our_work_header = get_post_meta(get_the_ID(), 'our_work_header', true);
$our_work_header_detail = get_post_meta(get_the_ID(), 'our_work_header_detail', true);

// Section Our Work
$our_work_header = get_post_meta(get_the_ID(), 'our_work_header', true);
$our_work_header_detail = get_post_meta(get_the_ID(), 'our_work_header_detail', true);
$our_work_text_header_home = get_post_meta(get_the_ID(), 'our_work_text_header_home', true);
$our_work_text_detail_home = get_post_meta(get_the_ID(), 'our_work_text_detail_home', true);
$our_work_text_header_second_home = get_post_meta(get_the_ID(), 'our_work_text_header_second_home', true);
$our_work_text_detail_second_home = get_post_meta(get_the_ID(), 'our_work_text_detail_second_home', true);

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Cheap Price Span"
$cheap_price_span_id = get_page_by_title('Cheap Price Span', OBJECT, 'reusable_blocks')->ID;
$cheap_price_span_text_1 = get_post_meta($cheap_price_span_id, 'cheap_price_span_text_1', true);
$cheap_price_span_text_2 = get_post_meta($cheap_price_span_id, 'cheap_price_span_text_2', true);
$cheap_price_span_text_3 = get_post_meta($cheap_price_span_id, 'cheap_price_span_text_3', true);

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Stamp Order Button"
$stamp_order_button_id = get_page_by_title('Stamp Order Button', OBJECT, 'reusable_blocks')->ID;
$button_link = get_post_meta($stamp_order_button_id, 'button_link', true);
$button_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_image_id', true));
$button_hover_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_hover_image_id', true));

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Cheap Price Image"
$cheap_price_image_id = get_page_by_title('Cheap Price Image', OBJECT, 'reusable_blocks')->ID;
$cheap_price_image_red_url = get_post_meta( $cheap_price_image_id, 'cheap_price_image_red', true );
$cheap_price_image_red_id = attachment_url_to_postid( $cheap_price_image_red_url ); // แปลง URL เป็น ID

?>


<main id="main" class="site-main date-stamp">
    <section class="section-hero-large-rubber-stamp">
        <div class="section-hero-large-rubber-stamp-wrapper">
            <h1><?php echo esc_html($hero_each_stamp_h1); ?></h1>
        </div>
    </section>

    <section class="section-each-stamp-first">
        <div class="section-each-stamp-first-wrapper">
            <div class="trayang-breadcrumb">
                <?php echo wp_kses_post($trayang_breadcrumb_name_stamp_1); ?>
                <?php echo wp_kses_post($trayang_breadcrumb_name_stamp_2); ?>
                <?php echo wp_kses_post($trayang_breadcrumb_name_stamp_3); ?>
            </div>
            <div class="cheap-price-header adjust-width">
                <h2><?php echo esc_html($cheap_price_header_h2_head); ?>
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
        </div>
    </section>


    <section class="section-date-stamp-second">
        <div class="section-dete-stamp-second-wrapper">
           <div class="section-dete-stamp-second-image-box large-rubber-stamp">
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
                    <p><?php echo wp_kses_post($name_stamp_second_detail_text); ?></p>
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
                    $slider_items = get_post_meta(get_the_ID(), 'slider_images_large_rubber', true);

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
                        <div class="section-our-work-description-text-header" style="display:none;">
                            <h3><?php echo esc_html($our_work_text_header_home); ?></h3>
                        </div>
                        <div class="section-our-work-description-text-detail">
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

    


</main>

<?php
get_footer(); 
?>
