<?php get_header(); ?>

<?php
/* Template Name: masterClasses */
?>

<main class="main">
      <?php
      // Получаем данные ACF для секции Hero
      $master_hero = get_field('master_hero');
      // Устанавливаем значения по умолчанию
      $default_hero_title = 'Кулинарные';
      $default_hero_subtitle = 'классы';
      $default_hero_image = '/wp-content/uploads/2025/04/burger.png';
      $default_hero_button_text = 'заказать праздник';
      ?>
      <section class="master__section master-hero-animated">
        <h1 class="master__title"><?php echo ($master_hero && !empty($master_hero['title'])) ? $master_hero['title'] : $default_hero_title; ?>
          <span style="position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap; border:0;">
            Кулинарные мастер-классы «Тантана»: пицца, бургеры, лимонад
          </span>
        </h1>
        <h2 class="master__title_h2">
          мастер <span class="master__title_span"><?php echo ($master_hero && !empty($master_hero['subtitle'])) ? $master_hero['subtitle'] : $default_hero_subtitle; ?></span>
        </h2>
        <?php $master_hero_alt = ($master_hero && !empty($master_hero['image_alt'])) ? $master_hero['image_alt'] : 'Кулинарные мастер-классы «Тантана»'; ?>
        <img src="<?php echo ($master_hero && !empty($master_hero['image'])) ? $master_hero['image'] : $default_hero_image; ?>" alt="<?php echo $master_hero_alt; ?>" class="master__img" />
        <a class="cert__button master__button open-popup"><?php echo ($master_hero && !empty($master_hero['button_text'])) ? $master_hero['button_text'] : $default_hero_button_text; ?></a>
        <div>
          <?php if ($master_hero && !empty($master_hero['cards'])): ?>
            <?php foreach ($master_hero['cards'] as $card): ?>
              <div class="master__card">
                <div class="master__circle master__<?php echo !empty($card['color']) ? $card['color'] : 'orange'; ?>">
                  <span class="master__circle_title"><?php echo !empty($card['letter']) ? $card['letter'] : ''; ?></span>
                </div>
                <p class="master__circle_text"><?php echo !empty($card['text']) ? $card['text'] : ''; ?></p>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="master__card" onclick="document.getElementById('masters').scrollIntoView({ behavior: 'smooth' });">
              <div class="master__circle master__orange">
                <span class="master__circle_title">Л</span>
              </div>
              <p class="master__circle_text">лимонад</p>
            </div>
          <div class="master__card" onclick="document.getElementById('masters').scrollIntoView({ behavior: 'smooth' });">
              <div class="master__circle master__green">
                <span class="master__circle_title">Б</span>
              </div>
              <p class="master__circle_text">бургер</p>
            </div>
          <div class="master__card" onclick="document.getElementById('masters').scrollIntoView({ behavior: 'smooth' });">
              <div class="master__circle master__pink">
                <span class="master__circle_title">П</span>
              </div>
              <p class="master__circle_text">пицца</p>
            </div>
          <div class="master__card" onclick="document.getElementById('masters').scrollIntoView({ behavior: 'smooth' });">
              <div class="master__circle master__blue">
                <span class="master__circle_title">К</span>
              </div>
              <p class="master__circle_text">кондитерские изделия</p>
            </div>
          <?php endif; ?>
        </div>
      </section>

      <?php
      // Получаем данные ACF для секции о мастер-классах
      $master_about = get_field('master_about');
      // Устанавливаем значения по умолчанию
      $default_about_title = 'Добро пожаловать на <span class="about__title-span">вкуснейшие</span> и <span class="about__title-span">разнообразные</span> мастер-классы <span class="about__title-span">по готовке</span> для детей!';
      $default_about_description = 'Здесь каждый маленький шеф-повар сможет раскрыть свой талант и научиться готовить пиццу, бургеры, лимонад и многое другое под руководством опытных поваров.';
      ?>
      <section class="about__section masters__section_h">
        <div class="about__section-inner">
          <h2 class="about__title">
            <?php echo ($master_about && !empty($master_about['title'])) ? $master_about['title'] : $default_about_title; ?>
          </h2>
          <p class="about__description">
            <?php echo ($master_about && !empty($master_about['description'])) ? $master_about['description'] : $default_about_description; ?>
          </p>
        </div>
        
        <?php if ($master_about && !empty($master_about['images'])): ?>
          <?php foreach ($master_about['images'] as $index => $image): ?>
            <picture class="about__decoration">
              <?php if (!empty($image['image_mobile_small'])): ?>
                <source srcset="<?php echo $image['image_mobile_small']; ?>" media="(max-width: 767px)">
              <?php endif; ?>
              <?php if (!empty($image['image_mobile'])): ?>
                <source srcset="<?php echo $image['image_mobile']; ?>" media="(max-width: 1023px)">
              <?php endif; ?>
              <img src="<?php echo !empty($image['image']) ? $image['image'] : '/wp-content/uploads/2025/04/about-' . ($index + 1) . '.webp'; ?>" alt="Конструктор"/>
            </picture>
          <?php endforeach; ?>
        <?php else: ?>
          <picture class="about__decoration">
            <source srcset="/wp-content/uploads/2025/05/about-1-mobile.webp" media="(max-width: 1023px)">
            <img src="/wp-content/uploads/2025/04/about-1.webp" alt="Конструктор"/>
          </picture>
          <picture class="about__decoration">
            <source srcset="/wp-content/uploads/2025/05/about-2-mobile.webp" media="(max-width: 1023px)">
            <img src="/wp-content/uploads/2025/04/about-2.webp" alt="Конструктор"/>
          </picture>
          <picture class="about__decoration">
            <source srcset="/wp-content/uploads/2025/05/about-3-mobile-360.webp" media="(max-width: 767px)">
            <source srcset="/wp-content/uploads/2025/05/about-3-mobile.webp" media="(max-width: 1023px)">
            <img src="/wp-content/uploads/2025/04/about-3.webp" alt="Конструктор"/>
          </picture>
          <picture class="about__decoration">
            <source srcset="/wp-content/uploads/2025/05/about-4-mobile-360.webp" media="(max-width: 767px)">
            <source srcset="/wp-content/uploads/2025/05/about-4-mobile.webp" media="(max-width: 1023px)">
            <img src="/wp-content/uploads/2025/04/about-4.webp" alt="Конструктор"/>
          </picture>
        <?php endif; ?>
      </section>

      <?php
      // Получаем данные ACF для секции галереи
      $master_gallery = get_field('master_gallery');
      // Устанавливаем значения по умолчанию
      $default_gallery_title = 'Галерея';
      $default_gallery_mobile_title = 'галерея';
      ?>
      <section class="mastergallery">
        <h2 class="mastergallery__title"><?php echo ($master_gallery && !empty($master_gallery['title'])) ? $master_gallery['title'] : $default_gallery_title; ?></h2>
        <div>
          <?php if ($master_gallery && !empty($master_gallery['items'])): ?>
            <?php foreach ($master_gallery['items'] as $item): ?>
              <?php $gallery_alt = !empty($item['alt']) ? $item['alt'] : 'Галерея мастер-классов «Тантана»'; ?>
              <div class="mastergallery__card">
                <div class="mastergallery__circle<?php echo !empty($item['color']) && $item['color'] != 'default' ? ' mastergallery__' . $item['color'] : ''; ?>"></div>
                <img
                  src="<?php echo !empty($item['image']) ? $item['image'] : '/wp-content/uploads/2025/04/mastergallery1.png'; ?>"
                  alt="<?php echo $gallery_alt; ?>"
                  class="mastergallery__img"
                />
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="mastergallery__card">
              <div class="mastergallery__circle"></div>
              <img src="/wp-content/uploads/2025/04/mastergallery1.png" alt="Галерея мастер-классов «Тантана»" class="mastergallery__img" />
            </div>
            <div class="mastergallery__card">
              <div class="mastergallery__circle mastergallery__orange"></div>
              <img src="/wp-content/uploads/2025/04/mastergallery.png" alt="Галерея мастер-классов «Тантана»" class="mastergallery__img" />
            </div>
            <div class="mastergallery__card">
              <div class="mastergallery__circle mastergallery__blue"></div>
              <img src="/wp-content/uploads/2025/04/mastergallery.png" alt="Галерея мастер-классов «Тантана»" class="mastergallery__img" />
            </div>
            <div class="mastergallery__card">
              <div class="mastergallery__circle mastergallery__blue"></div>
              <img src="/wp-content/uploads/2025/04/mastergallery3.png" alt="Галерея мастер-классов «Тантана»" class="mastergallery__img" />
            </div>
            <div class="mastergallery__card">
              <div class="mastergallery__circle"></div>
              <img src="/wp-content/uploads/2025/04/mastergallery4.png" alt="Галерея мастер-классов «Тантана»" class="mastergallery__img" />
            </div>
          <?php endif; ?>
        </div>
      </section>

      <?php if ($master_gallery && !empty($master_gallery['mobile'])): ?>
      <section class="gamegallery mastergallery__mobile">
        <h2 class="gamegallery__title"><?php echo !empty($master_gallery['mobile']['title']) ? $master_gallery['mobile']['title'] : $default_gallery_mobile_title; ?></h2>

        <ul class="gamegallery__cards">
          <?php if ($master_gallery && !empty($master_gallery['mobile']['images'])): ?>
            <?php foreach ($master_gallery['mobile']['images'] as $image): ?>
              <li class="gamegallery__card">
                <img
                  src="<?php echo !empty($image['image']) ? $image['image'] : '/wp-content/uploads/2025/04/1camp-369.png'; ?>"
                  alt="<?php echo !empty($image['alt']) ? $image['alt'] : 'Галерея мастер-классов «Тантана»'; ?>"
                  class="gamegallery__img"
                />
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/1camp-369.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/2camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/3camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/4camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/5camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/3camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/1camp-369.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/2game.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
            </li>
          <?php endif; ?>
        </ul>
      </section>
      <?php else: ?>
      <section class="gamegallery mastergallery__mobile">
        <h2 class="gamegallery__title">галерея</h2>
        <ul class="gamegallery__cards">
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/1camp-369.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/2camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/3camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/4camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/5camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/3camp.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/1camp-369.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
          <li class="gamegallery__card">
            <img src="/wp-content/uploads/2025/04/2game.png" alt="Галерея мастер-классов «Тантана»" class="gamegallery__img" />
          </li>
        </ul>
      </section>
      <?php endif; ?>

      <?php include "reviews.php"; ?>

      <?php
      // Получаем данные ACF для секции прейскуранта
      $master_price = get_field('master_price');
      // Устанавливаем значения по умолчанию
      $default_price_title = 'Прейскурант на проведение мастер-классов';
      $default_price_description = 'Минимальное количество участников на групповой мастер-класс 5 деток<br /><br />Максимальное количество участников на групповой мастер-класс уточняйте у менеджеров.';
      $default_price_button_text = 'заказать праздник';
      ?>
      <section class="masters" id="masters">
        <div>
          <div class="masters__container">
            <h2 class="questions__title masters__title">
              <?php echo ($master_price && !empty($master_price['title'])) ? $master_price['title'] : $default_price_title; ?>
            </h2>
            <div class="masters__container_price">
              <p class="masters__price">
                <?php echo ($master_price && !empty($master_price['description'])) ? $master_price['description'] : $default_price_description; ?>
              </p>

              <ul class="masters__ul">
                <?php if ($master_price && !empty($master_price['items'])): ?>
                  <?php foreach ($master_price['items'] as $item): ?>
                    <li class="masters__drop">
                      <div class="masters__drops">
                        <p class="masters__drop_title"><?php echo !empty($item['title']) ? $item['title'] : ''; ?></p>
                        <p class="masters__price_text"><?php echo !empty($item['amount']) ? $item['amount'] : ''; ?></p>
                        <?php if (!empty($item['age'])): ?>
                        <div class="masters__container_svg">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44"
                            height="44"
                            viewBox="0 0 44 44"
                            fill="none"
                          >
                            <rect width="44" height="44" rx="22" fill="white" />
                            <path
                              d="M19.1596 21.62C19.1296 21.62 19.1096 21.62 19.0796 21.62C19.0296 21.61 18.9596 21.61 18.8996 21.62C15.9996 21.53 13.8096 19.25 13.8096 16.44C13.8096 13.58 16.1396 11.25 18.9996 11.25C21.8596 11.25 24.1896 13.58 24.1896 16.44C24.1796 19.25 21.9796 21.53 19.1896 21.62C19.1796 21.62 19.1696 21.62 19.1596 21.62ZM18.9996 12.75C16.9696 12.75 15.3096 14.41 15.3096 16.44C15.3096 18.44 16.8696 20.05 18.8596 20.12C18.9196 20.11 19.0496 20.11 19.1796 20.12C21.1396 20.03 22.6796 18.42 22.6896 16.44C22.6896 14.41 21.0296 12.75 18.9996 12.75Z"
                              fill="#232122"
                            />
                            <path
                              d="M26.5394 21.75C26.5094 21.75 26.4794 21.75 26.4494 21.74C26.0394 21.78 25.6194 21.49 25.5794 21.08C25.5394 20.67 25.7894 20.3 26.1994 20.25C26.3194 20.24 26.4494 20.24 26.5594 20.24C28.0194 20.16 29.1594 18.96 29.1594 17.49C29.1594 15.97 27.9294 14.74 26.4094 14.74C25.9994 14.75 25.6594 14.41 25.6594 14C25.6594 13.59 25.9994 13.25 26.4094 13.25C28.7494 13.25 30.6594 15.16 30.6594 17.5C30.6594 19.8 28.8594 21.66 26.5694 21.75C26.5594 21.75 26.5494 21.75 26.5394 21.75Z"
                              fill="#232122"
                            />
                            <path
                              d="M19.1696 32.55C17.2096 32.55 15.2396 32.05 13.7496 31.05C12.3596 30.13 11.5996 28.87 11.5996 27.5C11.5996 26.13 12.3596 24.86 13.7496 23.93C16.7496 21.94 21.6096 21.94 24.5896 23.93C25.9696 24.85 26.7396 26.11 26.7396 27.48C26.7396 28.85 25.9796 30.12 24.5896 31.05C23.0896 32.05 21.1296 32.55 19.1696 32.55ZM14.5796 25.19C13.6196 25.83 13.0996 26.65 13.0996 27.51C13.0996 28.36 13.6296 29.18 14.5796 29.81C17.0696 31.48 21.2696 31.48 23.7596 29.81C24.7196 29.17 25.2396 28.35 25.2396 27.49C25.2396 26.64 24.7096 25.82 23.7596 25.19C21.2696 23.53 17.0696 23.53 14.5796 25.19Z"
                              fill="#232122"
                            />
                            <path
                              d="M28.3392 30.75C27.9892 30.75 27.6792 30.51 27.6092 30.15C27.5292 29.74 27.7892 29.35 28.1892 29.26C28.8192 29.13 29.3992 28.88 29.8492 28.53C30.4192 28.1 30.7292 27.56 30.7292 26.99C30.7292 26.42 30.4192 25.88 29.8592 25.46C29.4192 25.12 28.8692 24.88 28.2192 24.73C27.8192 24.64 27.5592 24.24 27.6492 23.83C27.7392 23.43 28.1392 23.17 28.5492 23.26C29.4092 23.45 30.1592 23.79 30.7692 24.26C31.6992 24.96 32.2292 25.95 32.2292 26.99C32.2292 28.03 31.6892 29.02 30.7592 29.73C30.1392 30.21 29.3592 30.56 28.4992 30.73C28.4392 30.75 28.3892 30.75 28.3392 30.75Z"
                              fill="#232122"
                            />
                          </svg>

                          <div class="masters__circle"><?php echo $item['age']; ?></div>
                        </div>
                        <?php endif; ?>
                      </div>
                    </li>
                  <?php endforeach; ?>
                <?php else: ?>
                  <li class="masters__drop">
                    <div class="masters__drops">
                      <p class="masters__drop_title">Пицца</p>
                      <p class="masters__price_text">650 руб/чел</p>
                    </div>
                  </li>

                  <li class="masters__drop">
                    <div class="masters__drops">
                      <p class="masters__drop_title">Кондитерские изделия</p>
                      <p class="masters__price_text">600 руб/чел</p>
                    </div>
                  </li>

                  <li class="masters__drop">
                    <div class="masters__drops">
                      <p class="masters__drop_title">Пицца + лимонад</p>
                      <p class="masters__price_text">800 руб/чел</p>
                    </div>
                  </li>

                  <li class="masters__drop">
                    <div class="masters__drops">
                      <p class="masters__drop_title">
                        Кондитерские изделия <br />+ лимонад
                      </p>
                      <p class="masters__price_text">700 руб/чел</p>
                    </div>
                  </li>

                  <li class="masters__drop">
                    <div class="masters__drops">
                      <p class="masters__drop_title">Бургер + лимонад</p>
                      <p class="masters__price_text">850 руб/чел</p>
                    </div>
                  </li>
                  <li class="masters__drop">
                    <div class="masters__drops">
                      <p class="masters__drop_title">Бенто-торт</p>
                      <p class="masters__price_text">1000 руб/чел</p>
                    </div>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <a href="#footer" class="footer__button price__button">
            <?php echo ($master_price && !empty($master_price['button_text'])) ? $master_price['button_text'] : $default_price_button_text; ?>
          </a>
        </div>
      </section>
      <?php
      // Получаем данные ACF для секции творческих мастер-классов
      $master_creative = get_field('master_creative');
      // Устанавливаем значения по умолчанию
      $default_creative_title = 'творческие мастер-классы';
      $default_creative_text = 'АРТ мастер-классы по рисованию, лепке, витражной мозаике для детей и взрослых.';
      $default_creative_text2 = 'Подробную информацию уточняйте у менеджеров по телефону.';
      $default_creative_button_text = 'заказать звонок';
      $default_creative_image = '/wp-content/uploads/2025/04/creative__img.png';
      $default_creative_bg = '/wp-content/uploads/2025/04/masters__fon.png';
      ?>
      <section class="creative">
        <div class="creative__container">
          <h2 class="creative__title"><?php echo ($master_creative && !empty($master_creative['title'])) ? $master_creative['title'] : $default_creative_title; ?></h2>

          <div class="creative__slider">
            <?php $creative_alt = ($master_creative && !empty($master_creative['image_alt'])) ? $master_creative['image_alt'] : 'Творческие мастер-классы «Тантана»'; ?>
            <img src="<?php echo ($master_creative && !empty($master_creative['image'])) ? $master_creative['image'] : $default_creative_image; ?>" alt="<?php echo $creative_alt; ?>" />
          </div>

          <h3 class="creative__text">
            <?php echo ($master_creative && !empty($master_creative['text'])) ? $master_creative['text'] : $default_creative_text; ?>
          </h3>
          <p class="creative__text_p">
            <?php echo ($master_creative && !empty($master_creative['text2'])) ? $master_creative['text2'] : $default_creative_text2; ?>
          </p>
          <a href="#footer" class="cert__button master__button creative__button">
            <?php echo ($master_creative && !empty($master_creative['button_text'])) ? $master_creative['button_text'] : $default_creative_button_text; ?>
          </a>
        </div>
        <img
          src="<?php echo $default_creative_bg; ?>"
          alt="Фон блока творческих мастер-классов"
          class="creative__img"
        />
      </section>

      <?php include "activities.php"; ?>
    </main>

<?php get_footer(); ?>