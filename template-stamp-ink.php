<?php
/**
 * Template Name: Stamp Ink
 * Description: A custom home page template for the website.
 */

get_header();

$hero_each_stamp_h1 = get_post_meta(get_the_ID(), 'hero_each_stamp_h1', true);
$trayang_breadcrumb_each_type_1 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_each_type_1', true);
$trayang_breadcrumb_each_type_2 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_each_type_2', true);
$name_stamp_header_2 = get_post_meta(get_the_ID(), 'name_stamp_header_2', true);
$name_stamp_second_image_d_url = get_post_meta( get_the_ID(), 'name_stamp_second_image_d', true );
$name_stamp_second_image_d_id = attachment_url_to_postid( $name_stamp_second_image_d_url );
$name_stamp_second_image_m_url = get_post_meta( get_the_ID(), 'name_stamp_second_image_m', true );
$name_stamp_second_image_m_id = attachment_url_to_postid( $name_stamp_second_image_m_url );
$name_stamp_second_detail_header = get_post_meta(get_the_ID(), 'name_stamp_second_detail_header', true);
$name_stamp_second_detail_text = get_post_meta(get_the_ID(), 'name_stamp_second_detail_text', true);

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


<main id="main" class="site-main self-inking stamp-ink">
    <section class="section-hero-stamp-ink">
        <div class="section-hero-stamp-ink-wrapper">
            <h1><?php echo esc_html($hero_each_stamp_h1); ?></h1>
        </div>
    </section>

    <section class="section-each-stamp-first">
        <div class="section-each-stamp-first-wrapper">
            <div class="trayang-breadcrumb">
                <?php echo wp_kses_post($trayang_breadcrumb_each_type_1); ?>
                <?php echo wp_kses_post($trayang_breadcrumb_each_type_2); ?>
            </div>
            <div class="cheap-price-header adjust-width-3">
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
           <div class="section-dete-stamp-second-image-box">
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
