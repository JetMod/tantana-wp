<button class="call open-popup">
    <img
        src="<?php echo get_field('whatsapp', 'option')['icon']; ?>"
        alt="WhatsApp"
        class="header__contacts-icon"
    />
</button>

<div class="popup ">
    <div class="popup__overlay"></div>
    <div class="popup__content">
    <button class="popup__close">Закрыть</button>
    <?php echo do_shortcode('[contact-form-7 id="381dcf4" title="Форма в попапе"]') ?>
    </div>
</div>

<!-- Cookie consent banner -->
<div class="cookie-banner" id="cookieBanner" aria-hidden="true">
    <div class="cookie-banner__inner">
        <p class="cookie-banner__text">
            Сайт использует cookies для корректной работы и аналитики. Продолжая, вы соглашаетесь с
            <a href="<?php echo esc_url(home_url('/personal-data/')); ?>" class="cookie-banner__link">Политикой конфиденциальности</a>.
        </p>
        <button type="button" class="cookie-banner__btn" aria-label="Принять">Понятно</button>
    </div>
</div>

<!-- Попап успешной отправки заявки -->
<div class="success-popup" id="successPopup" aria-hidden="true">
    <div class="success-popup__overlay"></div>
    <div class="success-popup__content">
        <div class="success-popup__icon" aria-hidden="true">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="30" stroke="currentColor" stroke-width="3"/>
                <path d="M20 32l8 8 16-16" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <h3 class="success-popup__title">Ваша заявка принята!</h3>
        <p class="success-popup__text">Мы свяжемся с вами в ближайшее время для уточнения деталей.</p>
        <button type="button" class="success-popup__close">Отлично</button>
    </div>
</div>

<footer class="footer" id="footer">
      <div class="footer__contacts_mobile">
        <ul class="footer__contacts">
          <?php if (false && get_field('telegram', 'option')): ?>
          <li class="footer__contacts-li">
            <a href="<?php echo get_field('telegram', 'option')['link']; ?>" class="footer__contacts-link">
              <img
                src="<?php echo get_field('telegram', 'option')['icon']; ?>"
                alt="Телеграм"
                class="footer__contacts-icon"
              />
            </a>
          </li>
          <?php endif; ?>
          
          <?php if (false && get_field('whatsapp', 'option')): ?>
          <li class="footer__contacts-li">
            <a href="<?php echo get_field('whatsapp', 'option')['link']; ?>" class="footer__contacts-link">
              <img
                src="<?php echo get_field('whatsapp', 'option')['icon']; ?>"
                alt="WhatsApp"
                class="footer__contacts-icon"
              />
            </a>
          </li>
          <?php endif; ?>
          
          <?php if (get_field('vk', 'option')): ?>
          <li class="footer__contacts-li">
            <a href="<?php echo get_field('vk', 'option')['link']; ?>" class="footer__contacts-link">
              <img
                src="<?php echo get_field('vk', 'option')['icon']; ?>"
                alt="Вконтакте"
                class="footer__contacts-icon"
              />
            </a>
          </li>
          <?php endif; ?>
          
          <?php if (false && get_field('viber', 'option')): ?>
          <li class="footer__contacts-li">
            <a href="<?php echo get_field('viber', 'option')['link']; ?>" class="footer__contacts-link">
              <img
                src="<?php echo get_field('viber', 'option')['icon']; ?>"
                alt="Viber"
                class="footer__contacts-icon"
              />
            </a>
          </li>
          <?php endif; ?>
        </ul>
        <a class="footer__button_text" href="#header"> Вернуться наверх </a>
      </div>
      <div class="footer__container_info">
        <div class="footer__info">
          <h3 class="footer__info_name">адрес:</h3>
          <p class="footer__info_description">
            <?php echo get_field('address', 'option') ?: 'г. Симферополь, ул Генерала Васильева 40а'; ?>
          </p>
        </div>

        <div class="footer__info">
          <p class="footer__info_name">График работы:</p>
          <p class="footer__info_description"><?php echo get_field('working_hours', 'option') ?: 'с 10:00 до 21:00'; ?></p>
        </div>

        <div class="footer__info">
          <p class="footer__info_name">телефон:</p>
          <p class="footer__info_description"><?php echo get_field('phone', 'option') ?: '+7 (978) 888 43 08'; ?></p>
        </div>

          <div class="footer__info">
          <p class="footer__info_name">телефон пицерии:</p>
          <p class="footer__info_description"><?php echo get_field('phone1', 'option') ?: '+7 (978) 888 43 53'; ?></p>
        </div>

        <div class="footer__info">
          <p class="footer__info_name">email:</p>
          <p class="footer__info_description"><?php echo get_field('email', 'option') ?: 'info@tantana-kids.ru'; ?></p>
        </div>

        <div class="footer__info footer__info_privacy">
          <a href="<?php echo esc_url(home_url('/personal-data/')); ?>" class="footer__privacy-link">Политика персональных данных</a>
        </div>
      </div>

      <div class="footer__container_feedback">
        <h2 class="footer__text">
          оставьте заявку, и мы поможем организовать лучший праздник
        </h2>

        <!-- <form class="footer__form" action="" method="post">
  <label style="display: none" for="name"></label>
  <input id="name" name="name" type="text" class="footer__input" placeholder="Имя" required />

  <label style="display: none" for="phone"></label>
  <input
  id="phone"
  name="phone"
  type="tel"
  class="footer__input footer__input_margin"
  placeholder="Телефон"
  required
  maxlength="12"
/>
  <label for="checkbox" class="checkbox__label">
    <input class="checkbox__input" id="checkbox" name="consent" type="checkbox" required />
    <span class="checkbox__span"></span>
    <span class="checkbox__text">
      Я согласен на обработку персональных данных
    </span>
  </label>

  <button type="submit" class="footer__button"><?php echo get_field('order_button_text', 'option') ?: 'заказать праздник'; ?></button>


</form> -->

<?php echo do_shortcode('[contact-form-7 id="82eae84" title="Форма в футере"]') ?>
        <div class="footer__contacts_container">
          <ul class="footer__contacts">
            <?php if (false && get_field('telegram', 'option')): ?>
            <li class="footer__contacts-li">
              <a href="<?php echo get_field('telegram', 'option')['link']; ?>" class="footer__contacts-link">
                <img
                  src="<?php echo get_field('telegram', 'option')['icon']; ?>"
                  alt="Телеграм"
                  class="footer__contacts-icon"
                />
              </a>
            </li>
            <?php endif; ?>
            
            <?php if (false && get_field('whatsapp', 'option')): ?>
            <li class="footer__contacts-li">
              <a href="<?php echo get_field('whatsapp', 'option')['link']; ?>" class="footer__contacts-link">
                <img
                  src="<?php echo get_field('whatsapp', 'option')['icon']; ?>"
                  alt="WhatsApp"
                  class="footer__contacts-icon"
                />
              </a>
            </li>
            <?php endif; ?>
            
            <?php if (get_field('vk', 'option')): ?>
            <li class="footer__contacts-li">
              <a href="<?php echo get_field('vk', 'option')['link']; ?>" class="footer__contacts-link">
                <img
                  src="<?php echo get_field('vk', 'option')['icon']; ?>"
                  alt="Вконтакте"
                  class="footer__contacts-icon"
                />
              </a>
            </li>
            <?php endif; ?>
            
            <?php if (false && get_field('viber', 'option')): ?>
            <li class="footer__contacts-li">
              <a href="<?php echo get_field('viber', 'option')['link']; ?>" class="footer__contacts-link">
                <img
                  src="<?php echo get_field('viber', 'option')['icon']; ?>"
                  alt="Viber"
                  class="footer__contacts-icon"
                />
              </a>
            </li>
            <?php endif; ?>
          </ul>
          <a class="footer__button_text" href="#header"> Вернуться наверх </a>
        </div>
      </div>
    </footer>

    <?php 
    wp_footer();
    ?>
  </body>

 
    <script>
   document.addEventListener('DOMContentLoaded', function () {
    const popup = document.querySelector('.popup');
    const closeBtn = popup.querySelector('.popup__close');
    const overlay = popup.querySelector('.popup__overlay');
const openButtons = document.querySelectorAll('.open-popup');
openButtons.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    popup.classList.add('popup_active');
  });
});




    closeBtn.addEventListener('click', () => {
      popup.classList.remove('popup_active');
    });

    overlay.addEventListener('click', () => {
      popup.classList.remove('popup_active');
    });

    // Попап «Заявка принята» после успешной отправки CF7
    const successPopup = document.getElementById('successPopup');
    if (successPopup) {
      const successOverlay = successPopup.querySelector('.success-popup__overlay');
      const successCloseBtn = successPopup.querySelector('.success-popup__close');

      let successPopupTimer = null;

      function openSuccessPopup() {
        popup.classList.remove('popup_active');
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
        if (event.detail && event.detail.contactFormId) {
          openSuccessPopup();
        }
      }, false);

      if (successCloseBtn) successCloseBtn.addEventListener('click', closeSuccessPopup);
      if (successOverlay) successOverlay.addEventListener('click', closeSuccessPopup);
    }

    // Cookie banner
    const cookieBanner = document.getElementById('cookieBanner');
    const cookieBannerBtn = document.querySelector('.cookie-banner__btn');
    if (cookieBanner && cookieBannerBtn) {
      const cookieAccepted = localStorage.getItem('tantana_cookie_consent');
      if (!cookieAccepted) {
        cookieBanner.classList.add('cookie-banner_visible');
        cookieBanner.setAttribute('aria-hidden', 'false');
      }
      cookieBannerBtn.addEventListener('click', function() {
        localStorage.setItem('tantana_cookie_consent', '1');
        cookieBanner.classList.remove('cookie-banner_visible');
        cookieBanner.setAttribute('aria-hidden', 'true');
      });
    }
  });
</script>

<script>
    
    document.addEventListener('DOMContentLoaded', () => {
    // SLIDER

    const slideImage = document.querySelector('.gallery__slider-slide img');

    function setNewSlideImage(elem) {
        const srcValue = elem.getAttribute('src');

        if (slideImage.getAttribute('src') !== srcValue) {
            if (slideImage) {
                slideImage.classList.add('gallery__slider-image-hidden');
                setTimeout(() => {
                    slideImage.setAttribute('src', srcValue);
                    slideImage.classList.remove('gallery__slider-image-hidden');
                }, 300);
            } else {
                console.error('Элемент slideImage не найден.');
            }
        }
    }

    window.setNewSlideImage = setNewSlideImage;

    // SIDEBAR

    const sidebar = document.querySelector('.sidebar');

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

    // DROP DOWN

    const toggles = document.querySelectorAll(".questions__drop_container");

    toggles.forEach((toggle) => {
        toggle.addEventListener("click", function () {
            const textBlock = this.querySelector(".questions__drop_text");

            toggles.forEach((item) => {
                if (item !== this) {
                    item.classList.remove("active");
                    item.querySelector(".questions__drop_text").style.maxHeight = null;
                }
            });

            this.classList.toggle("active");

            if (this.classList.contains("active")) {
                textBlock.style.maxHeight = textBlock.scrollHeight + "px";
            } else {
                textBlock.style.maxHeight = null;
            }
        });
    });

document.querySelectorAll(".schedule__day").forEach((day) => {
    day.addEventListener("click", function () {
        const scheduleCards = this.querySelector(".schedule__cards");

        this.classList.toggle("active");

        if (scheduleCards) {
            if (this.classList.contains("active")) {
                scheduleCards.style.maxHeight = scheduleCards.scrollHeight + "px";
                scheduleCards.style.opacity = "1";
                scheduleCards.style.visibility = "visible";
            } else {
                scheduleCards.style.maxHeight = "0";
                scheduleCards.style.opacity = "0";
                scheduleCards.style.visibility = "hidden";
            }
        }
    });
});

    day.addEventListener("click", function () {
        this.classList.toggle("active");

        const scheduleCards = this.querySelector(".schedule__cards");
        if (scheduleCards) {
            if (this.classList.contains("active")) {
                scheduleCards.style.maxHeight = scheduleCards.scrollHeight + "px";
                scheduleCards.style.opacity = "1";
                scheduleCards.style.visibility = "visible";
            } else {
                scheduleCards.style.maxHeight = "0";
                scheduleCards.style.opacity = "0";
                scheduleCards.style.visibility = "hidden";
            }
        }
    });
});


document.querySelectorAll('.questions__toggle').forEach(toggle => {
    toggle.addEventListener('click', () => {
        const questionItem = toggle.closest('.questions__drop');
        questionItem.classList.toggle('active');
    });
});


//запрет ввода букв в инпут

document.addEventListener('DOMContentLoaded', () => {
  const phoneInput = document.getElementById('phone');

  if (phoneInput) {
    phoneInput.addEventListener('input', () => {
      phoneInput.value = phoneInput.value.replace(/[^0-9+]/g, '');
    });
  }
});


//   const phoneInput = document.getElementById('phone');

//   phoneInput.addEventListener('input', () => {
//     // Разрешаем только цифры и знак +
//     phoneInput.value = phoneInput.value.replace(/[^0-9+]/g, '');
//   });


  //форма отправки
  
//   $('.footer__form').on('submit', (e) => {
// 	e.preventDefault();

// 	let action = $(e.currentTarget).attr('action');
// 	let th = $(e.currentTarget);
	

// 	$.ajax({
// 		type: 'POST',
// 		url: action,
// 		data: th.serialize()
// 	}).done(function(){
// 		console.log('Отправлено!');
// 	});
// });






  </script>
</html>