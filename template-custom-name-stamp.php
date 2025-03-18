<?php
/**
 * Template Name: custom-name-stamp
 * Description: Custom name stamp template for the website.
 */

get_header(); 
?>

<main id="main" class="site-main">
<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content();  // Outputs the page content created in the editor
    endwhile;
endif;
?>
    <section class="section-hero-each-stamp">
        <div class="section-hero-each-stamp-wrapper">
            <h1>ตรายางชื่อ</h1>
        </div>
    </section>

    <section class="section-each-stamp-first">
        <div class="section-each-stamp-first-wrapper">
            <div class="trayang-breadcrumb">
                <p>หน้าหลัก /&nbsp;</p>
                <p> รับทำตรายาง /&nbsp;</p>
                <p> ตรายางชื่อ</p>
            </div>
            <div class="cheap-price-header">
                <h2>ตรายาง.com<br>ราคาถูก 
                    <div class="cheap-price-span-text-wrapper">
                        <span class="cheap-price-span-text-1">ตรงใจ</span><span class="cheap-price-span-text-2">ตรงเวลา</span><span class="cheap-price-span-text-3">ตรงราคา</span>
                    </div>
                </h2>
                <div class="cheap-price-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/trayang-image-red.png" alt="trayang-image">
                </div>      
            </div>
        </div>
    </section>
    
    <section class="section-each-stamp-fourth">
        <div class="section-each-stamp-fourth-wrapper">
            <div class="section-each-stamp-fourth-text-box">
                <div class="section-each-stamp-fourth-text-header">
                    <h2>ตรายางชื่อ</h2>
                </div>
                <div class="section-each-stamp-fourth-text-detail">
                    <p>โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล </p>
                </div>
                <div class="section-each-stamp-fourth-text-bottom">
                    <div class="section-each-stamp-fourth-text-bottom-box">
                        <div class="section-each-stamp-fourth-text-bottom-image-border">
                            <div class="section-each-stamp-fourth-text-bottom-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/currency_bitcoin.png" alt="trayang-image">
                            </div>
                        </div>
                        <div class="section-each-stamp-fourth-text-bottom-detail">
                            <p>ชื่อยาว หรือสั้น<br>ก็มีขนาดให้เลือก</p>
                        </div>
                    </div>
                    <div class="section-each-stamp-fourth-text-bottom-box">
                        <div class="section-each-stamp-fourth-text-bottom-image-border">
                            <div class="section-each-stamp-fourth-text-bottom-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/checklist.png" alt="trayang-image">
                            </div>
                        </div>
                        <div class="section-each-stamp-fourth-text-bottom-detail">
                            <p>พกพาสะดวก</p>
                        </div>
                    </div>
                    <div class="section-each-stamp-fourth-text-bottom-box">
                        <div class="section-each-stamp-fourth-text-bottom-image-border">
                            <div class="section-each-stamp-fourth-text-bottom-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/water_drop.png" alt="trayang-image">
                            </div>
                        </div>
                        <div class="section-each-stamp-fourth-text-bottom-detail">
                            <p>ดีไซน์สวยงาม<br>ทันสมัย</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-each-stamp-fourth-image-box">
                <div class="section-each-stamp-fourth-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-2.png" alt="trayang-image">
                </div>
            </div>

        </div>
    </section>

    <section class="section-each-stamp-fifth">
        <div class="section-each-stamp-fifth-wrapper">
            <div class="section-each-stamp-fifth-header">
                <h2>ตัวอย่าง<br class="m"></h2>
            </div>

            <div class="section-each-stamp-fifth-wrapper-container">
                <div class="section-each-stamp-fifth-wrapper-slide">
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-1.png" alt="trayang-image">
                    </div>
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-2.png" alt="trayang-image">
                    </div>
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-3.png" alt="trayang-image">
                    </div>
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-4.png" alt="trayang-image">
                    </div>
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-5.png" alt="trayang-image">
                    </div>
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-6.png" alt="trayang-image">
                    </div>
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-1.png" alt="trayang-image">
                    </div>
                    <div class="section-each-stamp-fifth-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/each-type-of-stamp/each-stamp-image-slide-2.png" alt="trayang-image">
                    </div>
                </div>
            </div>

            <a href="#" class="buy-button"></a>
        </div>
    </section>


</main>

<?php
get_footer(); 
?>
