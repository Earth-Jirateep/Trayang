$(document).ready(function() {
    function applyMargin() {
      const marginValue = window.innerWidth < 431 ? '4vw' : '1vw';
  
      $('.section-template-article-content-paragraph').each(function() {
        // ตรวจสอบว่าถัดไปเป็น ul หรือ ol
        if ($(this).next().is('ul, ol')) {
          $(this).css('margin-bottom', marginValue);
        }
      });
    }
  
    // เรียกใช้ครั้งแรกเมื่อโหลดหน้า
    applyMargin();
  
    // ตรวจจับการเปลี่ยนขนาดหน้าจอ
    $(window).resize(function() {
      applyMargin();
    });
});

document.addEventListener('DOMContentLoaded', function () {
  const navBoxes = document.querySelectorAll('.section-all-article-nav-box');
  const articleWrappers = document.querySelectorAll('.section-all-article-page-grid-wrapper');

  navBoxes.forEach(navBox => {
      navBox.addEventListener('click', function () {
          // ลบ class active ออกจากหมวดหมู่ปัจจุบัน
          document.querySelectorAll('.section-all-article-nav-box.active').forEach(activeBox => {
              activeBox.classList.remove('active');
          });

          // ใส่ class active ให้หมวดหมู่ที่เลือก
          this.classList.add('active');

          // ซ่อนโพสต์ของทุกหมวดหมู่
          articleWrappers.forEach(wrapper => {
              wrapper.classList.remove('active');
          });

          // แสดงโพสต์ของหมวดหมู่ที่เลือก
          const category = this.getAttribute('data-category');
          const activeWrapper = document.querySelector(`.section-all-article-page-grid-wrapper[data-category="${category}"]`);
          if (activeWrapper) {
              activeWrapper.classList.add('active');
          }
      });
  });

  // แสดงหมวดหมู่ทั้งหมดโดยค่าเริ่มต้น
  document.querySelector('.section-all-article-page-grid-wrapper').classList.add('active');
});
