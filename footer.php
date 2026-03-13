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

<footer class="footer" id="footer">
      <div class="footer__contacts_mobile">
        <ul class="footer__contacts">
          <?php if (get_field('telegram', 'option')): ?>
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
          
          <?php if (get_field('whatsapp', 'option')): ?>
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
          
          <?php if (get_field('viber', 'option')): ?>
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
          <h4 class="footer__info_name">адрес:</h4>
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
      </div>

      <div class="footer__container_feedback">
        <h4 class="footer__text">
          оставьте заявку, и мы поможем организовать лучший праздник
        </h4>

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
            <?php if (get_field('telegram', 'option')): ?>
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
            
            <?php if (get_field('whatsapp', 'option')): ?>
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
            
            <?php if (get_field('viber', 'option')): ?>
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
  btn.addEventListener('click', () => { 
    popup.classList.add('popup_active');
  });
});




    closeBtn.addEventListener('click', () => {
      popup.classList.remove('popup_active');
    });

    overlay.addEventListener('click', () => {
      popup.classList.remove('popup_active');
    });
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

    function sidebarOpen() {
        sidebar.classList.add('sidebar-active');
    }

    function sidebarClose() {
        sidebar.classList.remove('sidebar-active');
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

//     document.querySelectorAll(".schedule__day").forEach((day) => {
//         day.addEventListener("click", function () {
//             document
//                 .querySelectorAll(".schedule__day.active")
//                 .forEach((activeDay) => {
//                     if (activeDay !== this) {
//                         activeDay.classList.remove("active");

//                         const scheduleCards = activeDay.querySelector(".schedule__cards");
//                         if (scheduleCards) {
//                             scheduleCards.style.maxHeight = "0";
//                             scheduleCards.style.opacity = "0";
//                             scheduleCards.style.visibility = "hidden";
//                         }
//                     }
//                 });

//             this.classList.toggle("active");

//             const scheduleCards = this.querySelector(".schedule__cards");
//             if (scheduleCards) {
//                 if (this.classList.contains("active")) {
//                     scheduleCards.style.maxHeight = scheduleCards.scrollHeight + "px";
//                     scheduleCards.style.opacity = "1";
//                     scheduleCards.style.visibility = "visible";
//                 } else {
//                     scheduleCards.style.maxHeight = "0";
//                     scheduleCards.style.opacity = "0";
//                     scheduleCards.style.visibility = "hidden";
//                 }
//             }
//         });
//     });
// });


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