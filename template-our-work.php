<?php
/**
 * Template Name: Our Work
 * Description: A custom home page template for the website.
 */

get_header();

$hero_each_stamp_h1 = get_post_meta(get_the_ID(), 'hero_each_stamp_h1', true);
$trayang_breadcrumb_each_type_1 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_each_type_1', true);
$trayang_breadcrumb_each_type_2 = get_post_meta(get_the_ID(), 'trayang_breadcrumb_each_type_2', true);
$name_stamp_header_2 = get_post_meta(get_the_ID(), 'name_stamp_header_2', true);

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Stamp Order Button"
$stamp_order_button_id = get_page_by_title('Stamp Order Button', OBJECT, 'reusable_blocks')->ID;
$button_link = get_post_meta($stamp_order_button_id, 'button_link', true);
$button_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_image_id', true));
$button_hover_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_hover_image_id', true));

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Cheap Price Image"
$cheap_price_image_id = get_page_by_title('Cheap Price Image', OBJECT, 'reusable_blocks')->ID;
$cheap_price_image_red_url = get_post_meta( $cheap_price_image_id, 'cheap_price_image_red', true );
$cheap_price_image_red_id = attachment_url_to_postid( $cheap_price_image_red_url ); 

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Article Image Slide"
$article_image_slide_id = get_page_by_title('Article Image Slide', OBJECT, 'reusable_blocks')->ID;
$article_image_slide_d_1_url = get_post_meta( $article_image_slide_id, 'article_image_slide_d_1', true );
$article_image_slide_d_1_id = attachment_url_to_postid( $article_image_slide_d_1_url ); 
$article_image_slide_m_1_url = get_post_meta( $article_image_slide_id, 'article_image_slide_m_1', true );
$article_image_slide_m_1_id = attachment_url_to_postid( $article_image_slide_m_1_url );
$article_image_slide_d_2_url = get_post_meta( $article_image_slide_id, 'article_image_slide_d_2', true );
$article_image_slide_d_2_id = attachment_url_to_postid( $article_image_slide_d_2_url ); 
$article_image_slide_m_2_url = get_post_meta( $article_image_slide_id, 'article_image_slide_m_2', true );
$article_image_slide_m_2_id = attachment_url_to_postid( $article_image_slide_m_2_url ); // แปลง URL เป็น ID

?>


<main id="main" class="site-main self-inking our-work">
    <section class="section-hero-our-work">
        <div class="section-hero-our-work-wrapper">
            <h1><?php echo esc_html($hero_each_stamp_h1); ?></h1>
        </div>
    </section>

    <section class="section-each-stamp-first">
        <div class="section-each-stamp-first-wrapper">
            <div class="trayang-breadcrumb">
                <?php echo wp_kses_post($trayang_breadcrumb_each_type_1); ?>
                <?php echo wp_kses_post($trayang_breadcrumb_each_type_2); ?>
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

    <section class="section-our-work-load-more">
        <div class="section-our-work-load-more-wrapper">
            <div class="section-our-work-load-more-grid">
                
                <?php
                $our_work_items = get_post_meta(get_the_ID(), 'our_work_group', true);

                if (!empty($our_work_items)) {
                    $counter = 0; // ตัวนับสำหรับจัดการ Layout

                    foreach ($our_work_items as $item) {
                        // ดึงข้อมูลจาก Group Field
                        $work_image = isset($item['work_image']) ? esc_url($item['work_image']) : '';
                        $work_header = isset($item['work_header']) ? esc_html($item['work_header']) : '';
                        $work_details = isset($item['work_details']) ? esc_html($item['work_details']) : '';
                        $work_image_logo = isset($item['work_image_logo']) ? esc_url($item['work_image_logo']) : '';
                        $company_name = isset($item['company_name']) ? esc_html($item['company_name']) : '';

                        echo '<div class="section-our-work-load-more-box">';
                        echo '    <div class="section-our-work-load-more-image">';
                        echo '        <img src="' . $work_image . '" alt="Work Image">';
                        echo '    </div>';
                        echo '    <div class="section-our-work-load-more-text">';
                        echo '        <div class="section-our-work-load-more-text-header">';
                        echo '            <p>' . $work_header . '</p>';
                        echo '        </div>';
                        echo '        <div class="section-our-work-load-more-text-detail">';
                        echo '            <p>' . $work_details . '</p>';
                        echo '        </div>';
                        echo '        <div class="section-our-work-load-more-text-footer">';
                        echo '            <div class="section-our-work-load-more-text-footer-image">';
                        echo '                <img src="' . $work_image_logo . '" alt="Company Logo">';
                        echo '            </div>';
                        echo '            <div class="section-our-work-load-more-text-footer-detail">';
                        echo '                <p>' . $company_name . '</p>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';

                    }
                }
                ?>

                <div class="section-our-work-load-more-box">
                    <section class="section-article-image-slide-container">
                        <div class="section-article-image-slide-wrapper">
                            <div class="section-article-image-slide">
                                <img class="d" src="<?php echo $article_image_slide_d_1_id ? wp_get_attachment_image_url( $article_image_slide_d_1_id, 'full' ) : ''; ?>" alt="trayang-image">
                                <img class="m" src="<?php echo $article_image_slide_m_1_id ? wp_get_attachment_image_url( $article_image_slide_m_1_id, 'full' ) : ''; ?>" alt="trayang-image">
                            </div>
                            <div class="section-article-image-slide">
                                <img class="d" src="<?php echo $article_image_slide_d_2_id ? wp_get_attachment_image_url( $article_image_slide_d_2_id, 'full' ) : ''; ?>" alt="trayang-image">
                                <img class="m" src="<?php echo $article_image_slide_m_2_id ? wp_get_attachment_image_url( $article_image_slide_m_2_id, 'full' ) : ''; ?>" alt="trayang-image">
                            </div>
                        </div>
                    </section>
                </div>

                <?php
                $our_work_items_2 = get_post_meta(get_the_ID(), 'our_work_group_bottom', true);

                if (!empty($our_work_items_2)) {
                    $counter_2 = 0; // ตัวนับสำหรับจัดการ Layout

                    foreach ($our_work_items_2 as $item_2) {
                        // ดึงข้อมูลจาก Group Field
                        $work_image_2 = isset($item_2['work_image_2']) ? esc_url($item_2['work_image_2']) : '';
                        $work_header_2 = isset($item_2['work_header_2']) ? esc_html($item_2['work_header_2']) : '';
                        $work_details_2 = isset($item_2['work_details_2']) ? esc_html($item_2['work_details_2']) : '';
                        $work_image_logo_2 = isset($item_2['work_image_logo_2']) ? esc_url($item_2['work_image_logo_2']) : '';
                        $company_name_2 = isset($item_2['company_name_2']) ? esc_html($item_2['company_name_2']) : '';

                        echo '<div class="section-our-work-load-more-box">';
                        echo '    <div class="section-our-work-load-more-image">';
                        echo '        <img src="' . $work_image_2 . '" alt="Work Image">';
                        echo '    </div>';
                        echo '    <div class="section-our-work-load-more-text">';
                        echo '        <div class="section-our-work-load-more-text-header">';
                        echo '            <p>' . $work_header_2 . '</p>';
                        echo '        </div>';
                        echo '        <div class="section-our-work-load-more-text-detail">';
                        echo '            <p>' . $work_details_2 . '</p>';
                        echo '        </div>';
                        echo '        <div class="section-our-work-load-more-text-footer">';
                        echo '            <div class="section-our-work-load-more-text-footer-image">';
                        echo '                <img src="' . $work_image_logo_2 . '" alt="Company Logo">';
                        echo '            </div>';
                        echo '            <div class="section-our-work-load-more-text-footer-detail">';
                        echo '                <p>' . $company_name_2 . '</p>';
                        echo '            </div>';
                        echo '        </div>';
                        echo '    </div>';
                        echo '</div>';

                    }
                }
                ?>

            </div>

            <div class="section-our-work-load-more-button">
                <button class="our-work-load-more-button">ดูเพิ่มเติม</button>
            </div>

        </div>



    </section>


    

</main>

<?php
get_footer(); 
?>
