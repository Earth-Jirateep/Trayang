<?php
/**
 * Template Name: Design Company Logo
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
$work_step_header = get_post_meta(get_the_ID(), 'work_step_header', true);
$work_step_icon_1_url = get_post_meta( get_the_ID(), 'work_step_icon_1', true );
$work_step_icon_1_id = attachment_url_to_postid( $work_step_icon_1_url );
$work_step_number_1 = get_post_meta(get_the_ID(), 'work_step_number_1', true);
$work_step_detail_1 = get_post_meta(get_the_ID(), 'work_step_detail_1', true);
$work_step_icon_2_url = get_post_meta( get_the_ID(), 'work_step_icon_2', true );
$work_step_icon_2_id = attachment_url_to_postid( $work_step_icon_2_url );
$work_step_number_2 = get_post_meta(get_the_ID(), 'work_step_number_2', true);
$work_step_detail_2 = get_post_meta(get_the_ID(), 'work_step_detail_2', true);
$work_step_icon_3_url = get_post_meta( get_the_ID(), 'work_step_icon_3', true );
$work_step_icon_3_id = attachment_url_to_postid( $work_step_icon_3_url );
$work_step_number_3 = get_post_meta(get_the_ID(), 'work_step_number_3', true);
$work_step_detail_3 = get_post_meta(get_the_ID(), 'work_step_detail_3', true);
$example_design_logo_load_more_header = get_post_meta(get_the_ID(), 'example_design_logo_load_more_header', true);
$example_load_more_header = get_post_meta(get_the_ID(), 'example_load_more_header', true);
$example_load_more_image_button = get_post_meta(get_the_ID(), 'example_load_more_image_button', true);

$button_link_design_logo = get_post_meta(get_the_ID(), 'button_link_design_logo', true);
$button_image_design_logo = get_post_meta(get_the_ID(), 'button_image_design_logo', true);
$button_hover_image_design_logo = get_post_meta(get_the_ID(), 'button_hover_image_design_logo', true);


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


<main id="main" class="site-main self-inking stamp-ink design-logo">
    <section class="section-hero-design-company-logo">
        <div class="section-hero-design-company-logo-wrapper">
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
           </div>

        </div>
    </section>

    <section class="section-work-step">
        <div class="section-work-step-wrapper">
            <div class="section-work-step-header">
                <h2><?php echo esc_html($work_step_header); ?></h2>
            </div>
            <div class="section-work-step-step-wrapper">
                <div class="section-work-step-step-box">
                    <div class="section-work-step-step-icon">
                        <img src="<?php echo $work_step_icon_1_id ? wp_get_attachment_image_url( $work_step_icon_1_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-work-step-step-description-box">
                        <p class="section-work-step-step-number"><?php echo esc_html($work_step_number_1); ?></p>
                        <p class="section-work-step-step-datail"><?php echo esc_html($work_step_detail_1); ?></p>
                    </div>
                </div>
                <div class="section-work-step-step-box">
                    <div class="section-work-step-step-icon">
                        <img src="<?php echo $work_step_icon_2_id ? wp_get_attachment_image_url( $work_step_icon_2_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-work-step-step-description-box">
                        <p class="section-work-step-step-number"><?php echo esc_html($work_step_number_2); ?></p>
                        <p class="section-work-step-step-datail"><?php echo esc_html($work_step_detail_2); ?></p>
                    </div>
                </div>
                <div class="section-work-step-step-box">
                    <div class="section-work-step-step-icon">
                        <img src="<?php echo $work_step_icon_3_id ? wp_get_attachment_image_url( $work_step_icon_3_id, 'full' ) : ''; ?>" alt="trayang-icon">
                    </div>
                    <div class="section-work-step-step-description-box">
                        <p class="section-work-step-step-number"><?php echo esc_html($work_step_number_3); ?></p>
                        <p class="section-work-step-step-datail"><?php echo esc_html($work_step_detail_3); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php
        $load_more_images = get_post_meta(get_the_ID(), 'load_more_images', true);
        if (!empty($load_more_images)) : ?>
        <section class="section-example-design-logo-load-more">
            <div class="section-example-design-logo-load-more-wrapper">
                <div class="section-example-design-logo-load-more-header">
                    <h2><?php echo esc_html($example_design_logo_load_more_header); ?></h2>
                </div>
                <div class="section-example-design-logo-load-more-image-container">
                    <div class="section-example-design-logo-load-more-image-wrapper">
                        <?php foreach ($load_more_images as $image) : ?>
                            <div class="section-example-design-logo-load-more-image">
                                <?php if (!empty($image['image_link'])) : ?>
                                    <a href="<?php echo esc_url($image['image_link']); ?>">
                                        <img src="<?php echo esc_url($image['image']); ?>" alt="trayang-image">
                                    </a>
                                <?php else : ?>
                                    <img src="<?php echo esc_url($image['image']); ?>" alt="trayang-image">
                                <?php endif; ?>
                                <?php if (!empty($image['image_caption'])) : ?>
                                    <p class="image-caption"><?php echo esc_html($image['image_caption']); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="section-example-design-logo-load-more-image-button">
                        <button><?php echo esc_html($example_load_more_image_button); ?></button>
                    </div>
                    <a href="<?php echo esc_url($button_link_design_logo); ?>"
                        class="order-design-logo-button"
                        style="background-image: url('<?php echo esc_url($button_image_design_logo); ?>');"
                        data-hover-image="<?php echo esc_url($button_hover_image_design_logo); ?>"
                        data-normal-image="<?php echo esc_url($button_image_design_logo); ?>">
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
    

</main>

<?php
get_footer(); 
?>
