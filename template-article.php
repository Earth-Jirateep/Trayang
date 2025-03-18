<?php
/**
 * Template Name: Article
 * Description: A custom home page template for the website.
 */

get_header();

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

// ดึงข้อมูลจากฟิลด์ CMB2 ในโพสต์ "Stamp Order Button"
$stamp_order_button_id = get_page_by_title('Stamp Order Button', OBJECT, 'reusable_blocks')->ID;
$button_link = get_post_meta($stamp_order_button_id, 'button_link', true);
$button_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_image_id', true));
$button_hover_image = wp_get_attachment_url(get_post_meta($stamp_order_button_id, 'button_hover_image_id', true));
?>


<main id="main" class="site-main self-inking article">
    <section class="section-hero-article">
        <div class="section-hero-article-wrapper">
            <h1>บทความ</h1>
        </div>
    </section>

    <section class="section-each-stamp-first">
        <div class="section-each-stamp-first-wrapper">
            <div class="trayang-breadcrumb">
                <a href="<?php echo site_url('home'); ?>">หน้าหลัก /&nbsp;</a>
                <a href="<?php echo site_url('article'); ?>"> บทความ</a>
            </div>
            <div class="cheap-price-header">
                <h2>บทความดีๆ<br>จากตรายาง.com</h2>
                <div class="cheap-price-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trayang-image-red.png" alt="trayang-image">
                </div>      
            </div>
        </div>
    </section>

    <section class="section-all-article">
        <div class="section-all-article-wrapper">
            <div class="section-all-article-nav-container">

                <?php
                // เรียง categories ตามลำดับที่ต้องการ
                $order = array('all-article', 'self-inking-stamp', 'handle-stamp', 'stamp-ink', 'design-a-company-logo');

                // ดึง categories
                $categories = get_categories(array(
                    'taxonomy'   => 'category',
                    'hide_empty' => false,
                ));

                // เรียง categories ตามลำดับที่กำหนด
                usort($categories, function ($a, $b) use ($order) {
                    $pos_a = array_search($a->slug, $order);
                    $pos_b = array_search($b->slug, $order);
                    return $pos_a - $pos_b;
                });
                ?>

                <div class="section-all-article-nav-wrapper">
                <?php foreach ($categories as $category): ?>
                    <div class="section-all-article-nav-box" data-category="<?php echo esc_attr($category->slug); ?>">
                        <div class="section-all-article-nav-image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/article/article-icon-' . $category->slug . '.png'); ?>" alt="<?php echo esc_attr($category->name); ?>">
                        </div>
                        <div class="section-all-article-nav-text">
                            <h3><?php echo esc_html($category->name); ?></h3>
                            <p><?php echo esc_html($category->count); ?> บทความ</p>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>

            <div class="section-all-article-page-wrapper">
                <?php foreach ($categories as $category): ?>
                    <div class="section-all-article-page-grid-wrapper" data-category="<?php echo esc_attr($category->slug); ?>">
                        <?php
                        $args = array(
                            'post_type'      => 'post',
                            'posts_per_page' => -1,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                            'category_name'  => $category->slug,
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()):
                            while ($query->have_posts()): $query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>" class="section-article-description-box">
                                    <div class="section-article-description-image">
                                        <?php if (has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('large'); ?>
                                        <?php else: ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/default-image.png" alt="default-image">
                                        <?php endif; ?>
                                    </div>
                                    <div class="section-article-description">
                                        <h3><?php the_title(); ?></h3>
                                        <div class="section-article-description-footer">
                                            <div class="section-article-description-footer-image">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/icon-date-range.png" alt="date-range">
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
                        else: ?>
                            <p class="section-all-article-page-grid-wrapper-have-no-article">ไม่พบบทความ</p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>


        </div>
    </section>

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

    <section class="section-featured-articles">
        <div class="section-featured-articles-wrapper">
            <h2>บทความแนะนำ</h2>

            <div class="section-article-description-wrapper-container">
                <div class="section-article-description-wrapper">
                    <?php
                    // Query ดึงบทความแนะนำ
                    $featured_posts = new WP_Query(array(
                        'posts_per_page' => 4,
                        'post_type' => 'post',
                        'meta_query' => array(
                            array(
                                'key' => '_is_featured',
                                'value' => '1',
                                'compare' => '='
                            )
                        )
                    ));

                    if ($featured_posts->have_posts()) :
                        while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
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
                                            <img class="section-size-and-price-image-1" src="<?php echo get_template_directory_uri(); ?>/assets/images/article/icon-date-range.png" alt="date-range">
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
                    else :
                        echo '<p>ไม่มีบทความแนะนำ</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>


    





</main>

<?php
get_footer(); 
?>
