/* ============================================
   CLEANED PERU - SHARED COMPONENTS (accordion)
   El header y footer ahora se gestionan con PHP includes.
   ============================================ */
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.accordion__trigger').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item   = btn.closest('.accordion__item');
      var isOpen = item.classList.contains('open');
      btn.closest('.accordion').querySelectorAll('.accordion__item').forEach(function (i) {
        i.classList.remove('open');
      });
      if (!isOpen) item.classList.add('open');
    });
  });
});
