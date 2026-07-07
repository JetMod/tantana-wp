/**
 * Tantana theme scripts — попапы, сайдбар, FAQ, расписание, Яндекс.Метрика (согласие), валидация
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
    initMetrikaConsent();
    initSlider();
    initSidebar();
    initQuestionsDrop();
    initSchedule();
    initQuestionsToggle();
    initReviewsControls();
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

  var METRIKA_ID = 106920222;
  var STORAGE_KEY = 'tantana_metrika_consent';

  function loadYandexMetrika() {
    if (window._tantanaMetrikaLoaded) return;
    window._tantanaMetrikaLoaded = true;
    (function(m, e, t, r, i, k, a) {
      m[i] = m[i] || function() { (m[i].a = m[i].a || []).push(arguments); };
      m[i].l = 1 * new Date();
      for (var j = 0; j < document.scripts.length; j++) {
        if (document.scripts[j].src === r) return;
      }
      k = e.createElement(t);
      a = e.getElementsByTagName(t)[0];
      k.async = 1;
      k.src = r;
      a.parentNode.insertBefore(k, a);
    })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js?id=' + METRIKA_ID, 'ym');
    if (typeof ym === 'function') {
      ym(METRIKA_ID, 'init', {
        ssr: true,
        webvisor: true,
        clickmap: true,
        ecommerce: 'dataLayer',
        referrer: document.referrer,
        url: location.href,
        accurateTrackBounce: true,
        trackLinks: true
      });
    }
  }

  function initMetrikaConsent() {
    var root = document.getElementById('metrikaConsent');
    if (!root) return;
    var acceptBtn = document.getElementById('metrikaConsentAccept');
    var declineBtn = document.getElementById('metrikaConsentDecline');
    var checkbox = document.getElementById('metrikaConsentCheckbox');
    function showBanner() {
      root.classList.add('metrika-consent_visible');
      root.setAttribute('aria-hidden', 'false');
    }

    function hideBanner() {
      root.classList.remove('metrika-consent_visible');
      root.setAttribute('aria-hidden', 'true');
    }

    if (localStorage.getItem(STORAGE_KEY) === 'accepted') {
      loadYandexMetrika();
      return;
    }
    if (localStorage.getItem('tantana_cookie_consent') === '1') {
      localStorage.setItem(STORAGE_KEY, 'accepted');
      loadYandexMetrika();
      return;
    }

    showBanner();

    if (checkbox && acceptBtn) {
      checkbox.addEventListener('change', function() {
        acceptBtn.disabled = !checkbox.checked;
      });
    }

    if (acceptBtn) {
      acceptBtn.addEventListener('click', function() {
        if (!checkbox || !checkbox.checked) return;
        localStorage.setItem(STORAGE_KEY, 'accepted');
        loadYandexMetrika();
        hideBanner();
      });
    }

    if (declineBtn) {
      declineBtn.addEventListener('click', function() {
        hideBanner();
      });
    }
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

  function initReviewsControls() {
    var container = document.querySelector('.reviews__container');
    var prevBtn = document.querySelector('.reviews__arrow_prev');
    var nextBtn = document.querySelector('.reviews__arrow_next');
    if (!container || !prevBtn || !nextBtn) return;

    function getStep() {
      var firstCard = container.querySelector('.reviews__card');
      if (!firstCard) return 320;
      var cardStyles = window.getComputedStyle(firstCard);
      var gap = parseFloat(cardStyles.marginRight) || 20;
      if (container.children.length > 1) {
        var containerStyles = window.getComputedStyle(container);
        gap = parseFloat(containerStyles.columnGap || containerStyles.gap) || gap;
      }
      return firstCard.getBoundingClientRect().width + gap;
    }

    function updateButtonsState() {
      var maxScroll = container.scrollWidth - container.clientWidth;
      prevBtn.disabled = container.scrollLeft <= 0;
      nextBtn.disabled = container.scrollLeft >= maxScroll - 2;
    }

    prevBtn.addEventListener('click', function() {
      container.scrollBy({ left: -getStep(), behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', function() {
      container.scrollBy({ left: getStep(), behavior: 'smooth' });
    });

    container.addEventListener('scroll', updateButtonsState);
    window.addEventListener('resize', updateButtonsState);
    updateButtonsState();
  }

  runWhenReady();
})();
