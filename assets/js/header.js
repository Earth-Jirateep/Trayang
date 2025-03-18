jQuery(document).ready(function($) {
    // ตรวจจับคลิกที่พื้นที่ pseudo-element ของ .page-item-11 a
    $('.menu .page-item-11 a').on('click', function(event) {
        // ตรวจจับตำแหน่งของ .page-item-11 a
        var offset = $(this).offset();
        var x = event.pageX - offset.left;
        var y = event.pageY - offset.top;

        // ระบุตำแหน่งที่ต้องการสำหรับคลิก (ตามที่ pseudo-element แสดง)
        var elementWidth = $(this).outerWidth();

        // เช็คขนาดหน้าจอ
        if ($(window).width() <= 431) {
            // สำหรับหน้าจอที่ต่ำกว่า 431px
            var vw30 = vwTOpx(20); // คุณอาจปรับค่าที่แตกต่างสำหรับหน้าจอเล็ก
            var vw20 = vwTOpx(8);
        } else {
            // สำหรับหน้าจอที่กว้างกว่า 431px
            var vw30 = vwTOpx(3); // แปลง 3vw ให้เป็นพิกเซล
            var vw20 = vwTOpx(2); // แปลง 2vw ให้เป็นพิกเซล
        }

        // พื้นที่ที่คลิกได้ในขอบขวา (เหมือนตำแหน่ง pseudo-element :before)
        if (x > elementWidth - vw30 && x < elementWidth && y > 0 && y < vw20) {
            event.preventDefault(); // ป้องกันการทำงานของลิงก์
            $('.menu .children').toggleClass('active'); // เพิ่มหรือเอาออกคลาส active
            event.stopPropagation(); // หยุดการเผยแพร่เหตุการณ์ไปยังบรรพบุรุษ
        }
    });

    // เมื่อคลิกที่ .header-arrow
    $('.header-arrow').on('click', function(e) {
        e.preventDefault(); // ป้องกัน default action ของลิงก์
        $('.menu .children').toggleClass('active'); // เพิ่มหรือเอาออกคลาส active ที่ .children
        e.stopPropagation(); // หยุดการเผยแพร่เหตุการณ์ไปยังบรรพบุรุษ
    });

    // เมื่อคลิกที่เอกสาร
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.menu').length) { // ตรวจสอบว่าการคลิกอยู่นอก .menu หรือไม่
            $('.menu .children').removeClass('active'); // ลบคลาส active ถ้าอยู่นอก .menu
        }
    });

    // ป้องกันการคลิกภายใน .menu .children ไม่ให้ทำงานลบคลาส
    $('.menu .children').on('click', function(e) {
        e.stopPropagation();
    });

    // ฟังก์ชันแปลง vw เป็นพิกเซล
    function vwTOpx(vw) {
        return (vw / 100) * $(window).width();
    }

    // ฟังก์ชันแปลง vh เป็นพิกเซล
    function vhTOpx(vh) {
        return (vh / 100) * $(window).height();
    }
});

jQuery(document).ready(function($) {
    // เมื่อคลิกที่ hamburger-menu
    $('.hamburger-menu').on('click', function() {
        // Toggle คลาส .active ที่ .main-navigation
        $('.main-navigation').toggleClass('active');
        
        // Toggle คลาส .active ที่ .hamburger-menu เพื่อแปลงเป็น X
        $(this).toggleClass('active');
    });
});

