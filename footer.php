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

<!-- Согласие на Яндекс.Метрику: панель снизу справа, стеклянный фон -->
<div class="metrika-consent" id="metrikaConsent" aria-hidden="true" role="region" aria-labelledby="metrikaConsentTitle">
    <div class="metrika-consent__panel">
        <div class="metrika-consent__inner">
            <h2 id="metrikaConsentTitle" class="sr-only">Согласие на использование Яндекс.Метрики</h2>
            <p class="metrika-consent__text">
                Сайт использует cookies, Яндекс.Метрику для анализа посещаемости. Подробнее в
                <a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="metrika-consent__link">политике конфиденциальности</a>.
            </p>
            <label class="metrika-consent__label">
                <input type="checkbox" class="metrika-consent__checkbox" id="metrikaConsentCheckbox" />
                <span class="metrika-consent__checkbox-ui" aria-hidden="true"></span>
                <span class="metrika-consent__label-text">Я даю согласие на обработку персональных данных</span>
            </label>
            <div class="metrika-consent__actions">
                <button type="button" class="metrika-consent__btn metrika-consent__btn--primary" id="metrikaConsentAccept" disabled>Принять</button>
                <button type="button" class="metrika-consent__btn metrika-consent__btn--outline" id="metrikaConsentDecline">Отклонить</button>
            </div>
        </div>
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
          <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_field('phone', 'option') ?: '+79788884308')); ?>" class="footer__info_description footer__phone-link"><?php echo esc_html(get_field('phone', 'option') ?: '+7 (978) 888 43 08'); ?></a>
        </div>

          <div class="footer__info">
          <p class="footer__info_name">телефон пицерии:</p>
          <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_field('phone1', 'option') ?: '+79788884353')); ?>" class="footer__info_description footer__phone-link"><?php echo esc_html(get_field('phone1', 'option') ?: '+7 (978) 888 43 53'); ?></a>
        </div>

    
        <div class="footer__info footer__info_privacy">
          <a href="<?php echo esc_url(home_url('/privacy/')); ?>" class="footer__privacy-link">Политика персональных данных</a>
          <p class="footer__legal-note">
            Информация на сайте носит информационный характер и не является публичной офертой. Актуальные условия и стоимость услуг уточняйте у администратора.
          </p>
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

    <?php wp_footer(); ?>
  </body>
</html>