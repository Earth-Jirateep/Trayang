jQuery(document).ready(function($) {
    const $images = $('.section-our-work-load-more-box');
    const $loadMoreButton = $('.section-our-work-load-more-button');
    let currentlyVisible = 11; // จำนวน element ที่ต้องการโชว์เริ่มต้น

    // ซ่อน element ที่เกิน 11
    $images.each(function(index) {
        if (index < currentlyVisible) {
            $(this).css('display', 'flex'); // แสดงเป็น flex แทน block
        }
    });

    // ฟังก์ชั่นการโหลดเพิ่มเติม
    $loadMoreButton.on('click', function() {
        const nextVisible = currentlyVisible + 2; // เพิ่มทีละ 2
        $images.each(function(index) {
            if (index >= currentlyVisible && index < nextVisible) {
                $(this).fadeIn().css('display', 'flex'); // ใช้ fadeIn และเปลี่ยนเป็น flex
            }
        });

        currentlyVisible = nextVisible;

        // ถ้าครบแล้วซ่อนปุ่ม
        if (currentlyVisible >= $images.length) {
            $loadMoreButton.hide();
        }
    });
});
