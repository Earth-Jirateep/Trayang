jQuery(document).ready(function($) {
    const $images = $('.section-example-load-more-image');
    const $loadMoreButton = $('.section-example-load-more-image-button button');
    let currentlyVisible = 20; // จำนวน element ที่ต้องการโชว์เริ่มต้น

    // ซ่อน element ที่เกิน 20
    $images.each(function(index) {
        if (index < currentlyVisible) {
            $(this).show();
        }
    });

    // ฟังก์ชั่นการโหลดเพิ่มเติม
    $loadMoreButton.on('click', function() {
        const nextVisible = currentlyVisible + 4; // เพิ่มทีละ 4
        $images.each(function(index) {
            if (index >= currentlyVisible && index < nextVisible) {
                $(this).fadeIn();
            }
        });

        currentlyVisible = nextVisible;

        // ถ้าครบแล้วซ่อนปุ่ม
        if (currentlyVisible >= $images.length) {
            $loadMoreButton.hide();
        }
    });
});


jQuery(document).ready(function($) {
    $('.section-frequently-asked-questions-detail-box').on('click', function() {
        const $textElement = $(this).find('.section-frequently-asked-questions-detail-text');
        const $arrowElement = $(this).find('.section-frequently-asked-questions-detail-arrow');
        
        // เช็คว่ามี .active หรือไม่ในทั้งสองส่วน
        if ($textElement.hasClass('active')) {
            // ถ้ามีให้ทำการลบ class .active
            $textElement.removeClass('active');
            $arrowElement.removeClass('active');
        } else {
            // ถ้ายังไม่มี ให้เพิ่ม class .active
            $textElement.addClass('active');
            $arrowElement.addClass('active');
        }
    });
});


