jQuery(document).ready(function($) {
    const $images = $('.section-example-design-logo-load-more-image');
    const $loadMoreButton = $('.section-example-design-logo-load-more-image-button button');
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
