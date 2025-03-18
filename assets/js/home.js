jQuery(document).ready(function($) {
    $('.our-service-button-box').click(function() {
        // ลบ class active ออกจากทุกองค์ประกอบที่มี class active อยู่
        $('.our-service-button-box.active, .our-service-button-box-image-active.active, .our-service-image-box.active').removeClass('active');
        
        // เพิ่ม class active ไปที่ปุ่มที่คลิก
        $(this).addClass('active');
        
        // ค้นหาและเพิ่ม class active ไปที่รูปภาพที่สัมพันธ์กับปุ่มที่คลิก
        $(this).find('.our-service-button-box-image-active').addClass('active');

        // ค้นหาและเพิ่ม class active ไปที่ .our-service-image-box ที่สัมพันธ์กับปุ่มที่คลิก โดยใช้ index ของปุ่มที่คลิก
        var index = $(this).index();
        $('.our-service-image-box').eq(index).addClass('active');
    });
});

$(document).ready(function() {
    // ตรวจสอบการคลิกที่ปุ่ม
    $('.section-size-and-price-button button').on('click', function() {
        // ลบคลาส 'active' จากปุ่มทั้งหมด
        $('.section-size-and-price-button button').removeClass('active');
        // เพิ่มคลาส 'active' ให้กับปุ่มที่ถูกคลิก
        $(this).addClass('active');
        
        // ลบคลาส 'active' จากกล่องรูปภาพทั้งหมด
        $('.section-size-and-price-image-box').removeClass('active');
        // หาดัชนีของปุ่มที่ถูกคลิกแล้วใช้เพื่อแสดงรูปภาพที่สอดคล้องกัน
        $('.section-size-and-price-image-box').eq($(this).index()).addClass('active');
    });
});

jQuery(document).ready(function($) {
    $('.buy-button').hover(
        function() {
            // เมื่อ Hover ใช้รูปภาพที่กำหนดใน data-hover-image
            var hoverImage = $(this).data('hover-image');
            $(this).css('background-image', 'url(' + hoverImage + ')');
        },
        function() {
            // เมื่อเลิก Hover กลับมาใช้รูปภาพปกติที่กำหนดใน data-normal-image
            var normalImage = $(this).data('normal-image');
            $(this).css('background-image', 'url(' + normalImage + ')');
        }
    );
});

jQuery(document).ready(function($) {
    $('.article-button').hover(
        function() {
            // เมื่อ Hover ใช้รูปภาพที่กำหนดใน data-hover-image
            var hoverImage = $(this).data('hover-image');
            $(this).css('background-image', 'url(' + hoverImage + ')');
        },
        function() {
            // เมื่อเลิก Hover กลับมาใช้รูปภาพปกติที่กำหนดใน data-normal-image
            var normalImage = $(this).data('normal-image');
            $(this).css('background-image', 'url(' + normalImage + ')');
        }
    );
});

jQuery(document).ready(function($) {
    $('.buy-button.stamp-ink-button').hover(
        function() {
            // เมื่อ Hover ใช้รูปภาพที่กำหนดใน data-hover-image
            var hoverImage = $(this).data('hover-image');
            $(this).css('background-image', 'url(' + hoverImage + ')');
        },
        function() {
            // เมื่อเลิก Hover กลับมาใช้รูปภาพปกติที่กำหนดใน data-normal-image
            var normalImage = $(this).data('normal-image');
            $(this).css('background-image', 'url(' + normalImage + ')');
        }
    );
});

jQuery(document).ready(function($) {
    $('.buy-button.design-logo-button').hover(
        function() {
            // เมื่อ Hover ใช้รูปภาพที่กำหนดใน data-hover-image
            var hoverImage = $(this).data('hover-image');
            $(this).css('background-image', 'url(' + hoverImage + ')');
        },
        function() {
            // เมื่อเลิก Hover กลับมาใช้รูปภาพปกติที่กำหนดใน data-normal-image
            var normalImage = $(this).data('normal-image');
            $(this).css('background-image', 'url(' + normalImage + ')');
        }
    );
});

jQuery(document).ready(function($) {
    $('.order-design-logo-button').hover(
        function() {
            // เมื่อ Hover ใช้รูปภาพที่กำหนดใน data-hover-image
            var hoverImage = $(this).data('hover-image');
            $(this).css('background-image', 'url(' + hoverImage + ')');
        },
        function() {
            // เมื่อเลิก Hover กลับมาใช้รูปภาพปกติที่กำหนดใน data-normal-image
            var normalImage = $(this).data('normal-image');
            $(this).css('background-image', 'url(' + normalImage + ')');
        }
    );
});

