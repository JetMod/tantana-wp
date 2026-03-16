/**
 * Tantana theme scripts — попапы, сайдбар, FAQ, расписание, cookie, валидация
 */
(function() {
  function runWhenReady() {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', runWhenReady);
      return;
    }
    init();
  }

  function init() {
    initPopup();
    initSuccessPopup();
    initCookieBanner();
    initSlider();
    initSidebar();
    initQuestionsDrop();
    initSchedule();
    initQuestionsToggle();
    initPhoneInput();
  }

  function initPopup() {
    const popup = document.querySelector('.popup');
    if (!popup) return;
    const closeBtn = popup.querySelector('.popup__close');
    const overlay = popup.querySelector('.popup__overlay');
    const openButtons = document.querySelectorAll('.open-popup');

    openButtons.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        popup.classList.add('popup_active');
      });
    });
    if (closeBtn) closeBtn.addEventListener('click', function() { popup.classList.remove('popup_active'); });
    if (overlay) overlay.addEventListener('click', function() { popup.classList.remove('popup_active'); });
  }

  function initSuccessPopup() {
    const successPopup = document.getElementById('successPopup');
    if (!successPopup) return;
    const successOverlay = successPopup.querySelector('.success-popup__overlay');
    const successCloseBtn = successPopup.querySelector('.success-popup__close');
    const popup = document.querySelector('.popup');
    let successPopupTimer = null;

    function openSuccessPopup() {
      if (popup) popup.classList.remove('popup_active');
      successPopup.classList.add('success-popup_active');
      successPopup.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      if (successPopupTimer) clearTimeout(successPopupTimer);
      successPopupTimer = setTimeout(closeSuccessPopup, 3000);
    }

    function closeSuccessPopup() {
      if (successPopupTimer) {
        clearTimeout(successPopupTimer);
        successPopupTimer = null;
      }
      successPopup.classList.remove('success-popup_active');
      successPopup.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }

    document.addEventListener('wpcf7mailsent', function(event) {
      if (event.detail && event.detail.contactFormId) openSuccessPopup();
    }, false);

    if (successCloseBtn) successCloseBtn.addEventListener('click', closeSuccessPopup);
    if (successOverlay) successOverlay.addEventListener('click', closeSuccessPopup);
  }

  function initCookieBanner() {
    const cookieBanner = document.getElementById('cookieBanner');
    const cookieBannerBtn = document.querySelector('.cookie-banner__btn');
    if (!cookieBanner || !cookieBannerBtn) return;
    if (!localStorage.getItem('tantana_cookie_consent')) {
      cookieBanner.classList.add('cookie-banner_visible');
      cookieBanner.setAttribute('aria-hidden', 'false');
    }
    cookieBannerBtn.addEventListener('click', function() {
      localStorage.setItem('tantana_cookie_consent', '1');
      cookieBanner.classList.remove('cookie-banner_visible');
      cookieBanner.setAttribute('aria-hidden', 'true');
    });
  }

  function initSlider() {
    const slideImage = document.querySelector('.gallery__slider-slide img');
    function setNewSlideImage(elem) {
      if (!slideImage || !elem) return;
      const srcValue = elem.getAttribute('src');
      if (slideImage.getAttribute('src') !== srcValue) {
        slideImage.classList.add('gallery__slider-image-hidden');
        setTimeout(function() {
          slideImage.setAttribute('src', srcValue);
          slideImage.classList.remove('gallery__slider-image-hidden');
        }, 300);
      }
    }
    window.setNewSlideImage = setNewSlideImage;
  }

  function initSidebar() {
    const sidebar = document.querySelector('.sidebar');
    if (!sidebar) return;
    var sidebarScrollY = 0;
    function sidebarOpen() {
      sidebarScrollY = window.scrollY;
      document.body.style.top = '-' + sidebarScrollY + 'px';
      sidebar.classList.add('sidebar-active');
      document.body.classList.add('sidebar-open');
    }
    function sidebarClose() {
      sidebar.classList.remove('sidebar-active');
      document.body.classList.remove('sidebar-open');
      document.body.style.top = '';
      window.scrollTo(0, sidebarScrollY);
    }
    window.sidebarOpen = sidebarOpen;
    window.sidebarClose = sidebarClose;
  }

  function initQuestionsDrop() {
    const toggles = document.querySelectorAll('.questions__drop_container');
    toggles.forEach(function(toggle) {
      toggle.addEventListener('click', function() {
        const textBlock = this.querySelector('.questions__drop_text');
        toggles.forEach(function(item) {
          if (item !== toggle) {
            item.classList.remove('active');
            var tb = item.querySelector('.questions__drop_text');
            if (tb) tb.style.maxHeight = null;
          }
        });
        this.classList.toggle('active');
        if (textBlock) {
          textBlock.style.maxHeight = this.classList.contains('active') ? textBlock.scrollHeight + 'px' : null;
        }
      });
    });
  }

  function initSchedule() {
    document.querySelectorAll('.schedule__day').forEach(function(day) {
      day.addEventListener('click', function() {
        const scheduleCards = this.querySelector('.schedule__cards');
        this.classList.toggle('active');
        if (scheduleCards) {
          if (this.classList.contains('active')) {
            scheduleCards.style.maxHeight = scheduleCards.scrollHeight + 'px';
            scheduleCards.style.opacity = '1';
            scheduleCards.style.visibility = 'visible';
          } else {
            scheduleCards.style.maxHeight = '0';
            scheduleCards.style.opacity = '0';
            scheduleCards.style.visibility = 'hidden';
          }
        }
      });
    });
  }

  function initQuestionsToggle() {
    document.querySelectorAll('.questions__toggle').forEach(function(toggle) {
      toggle.addEventListener('click', function() {
        const questionItem = toggle.closest('.questions__drop');
        if (questionItem) questionItem.classList.toggle('active');
      });
    });
  }

  function initPhoneInput() {
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
      phoneInput.addEventListener('input', function() {
        phoneInput.value = phoneInput.value.replace(/[^0-9+]/g, '');
      });
    }
  }

  runWhenReady();
})();
