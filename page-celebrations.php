<?php get_header(); ?>

<?php 
/* Template Name: celebrations */
?>

<main class="main">
      <section class="hero__section">
        <?php $hero_section = get_field('celebrations_hero_section'); ?>
        <?php $hero_bg_alt = !empty($hero_section['hero_bg_alt']) ? $hero_section['hero_bg_alt'] : 'Фон страницы «Торжества» детского центра «Тантана»'; ?>
        <img src="<?php echo $hero_section['hero_bg'] ?: '/wp-content/uploads/2025/04/hero-bg.webp'; ?>" alt="<?php echo $hero_bg_alt; ?>" class="hero__bg" />
        <div class="hero__heading">
          <?php
          // Длинный вариант для SEO/скринридеров, визуально скрыт
          $hero_title_visible = $hero_section['hero_title'] ?: 'Торжества';
          $hero_title_long = !empty($hero_section['hero_title_full'])
              ? $hero_section['hero_title_full']
              : 'Торжества в детском центре «Тантана»: праздники';
          ?>
          <h1 class="hero__title">
            <?php echo $hero_title_visible; ?>
            <span style="position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap; border:0;">
              <?php echo $hero_title_long; ?>
            </span>
          </h1>
          <span class="hero__title-shadow"><?php echo $hero_section['hero_title_shadow'] ?: 'Торжества'; ?></span>
        </div>
        <ul class="hero__images">
          <?php
          if ($hero_section && !empty($hero_section['hero_images'])) {
              foreach ($hero_section['hero_images'] as $item) {
                  $image = $item['image'];
                  $alt = $item['alt'] ?: 'Торжество Tantana';
                  ?>
                  <li class="hero__images-item">
                    <img
                      src="<?php echo $image; ?>"
                      alt="<?php echo $alt; ?>"
                      class="hero__images-img"
                    />
                  </li>
                  <?php
              }
          } else {
              // Значения по умолчанию
              ?>
              <li class="hero__images-item">
                <img
                  src="/wp-content/uploads/2025/04/hero-img-1.webp"
                  alt="Торжество Tantana"
                  class="hero__images-img"
                />
              </li>
              <li class="hero__images-item">
                <img
                  src="/wp-content/uploads/2025/04/hero-img-2.webp"
                  alt="Торжество Tantana"
                  class="hero__images-img"
                />
              </li>
              <li class="hero__images-item">
                <img
                  src="/wp-content/uploads/2025/04/hero-img-3.webp"
                  alt="Торжество Tantana"
                  class="hero__images-img"
                />
              </li>
              <li class="hero__images-item">
                <img
                  src="/wp-content/uploads/2025/04/hero-img-4.webp"
                  alt="Торжество Tantana"
                  class="hero__images-img"
                />
              </li>
              <li class="hero__images-item">
                <img
                  src="/wp-content/uploads/2025/04/hero-img-5.webp"
                  alt="Торжество Tantana"
                  class="hero__images-img"
                />
              </li>
              <?php
          }
          ?> 
        </ul>
        <a class="hero__button open-popup"><?php echo $hero_section['hero_button_text'] ?: 'заказать праздник'; ?></a>
      </section>
   

      <section class="about__section">
        <div class="about__section-inner">
            <?php $about_section = get_field('celebrations_about_section'); ?>
            <h2 class="about__title">
                <?php echo $about_section['about_title'] ?: '«TANTANA» - <span class="about__title-span">отличное</span> место для проведения любого детского <span class="about__title-span">праздника</span>, будь то День <span class="about__title-span">Рождения</span> или <span class="about__title-span">выпускной</span>!'; ?>
            </h2>
            <p class="about__description">
                <?php echo $about_section['about_description'] ?: 'В сокровищницах Детской Страны много интересных игр, активностей, веселых забав, многоуровневый лабиринт и развлечения на территории всего центра.'; ?>
            </p>
        </div>
        <?php
        if ($about_section && !empty($about_section['about_decorations'])) {
            foreach ($about_section['about_decorations'] as $item) {
                $image = $item['image'];
                $mobile_image = $item['mobile_image'];
                $mobile_image_360 = $item['mobile_image_360'];
                $alt = $item['alt'] ?: 'Конструктор';
                
                // Определяем, есть ли мобильное изображение для маленьких экранов
                $has_small_mobile = !empty($mobile_image_360);
                ?>
                <picture class="about__decoration">
                    <?php if ($has_small_mobile): ?>
                    <source srcset="<?php echo $mobile_image_360; ?>" media="(max-width: 767px)">
                    <?php endif; ?>
                    <?php if (!empty($mobile_image)): ?>
                    <source srcset="<?php echo $mobile_image; ?>" media="(max-width: 1023px)">
                    <?php endif; ?>
                    <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>"/>
                </picture>
                <?php
            }
        } else {
            // Значения по умолчанию
            ?>
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
            <?php
        }
        ?>
    </section>
      <section class="gallery__section">
        <?php $gallery_section = get_field('celebrations_gallery_section'); ?>
        <h2 class="gallery__title"><?php echo $gallery_section['gallery_title'] ?: 'Галерея'; ?></h2>
        <div class="gallery__slider">
          <div class="gallery__progress-bar">
            <div class="gallery__progress-fill"></div>
          </div>
          <div class="gallery__slider-main">
            <div class="gallery__slider-buttons">
              <span class="gallery__slider-button">
                <img
                  src="/wp-content/uploads/2025/04/arrow-left.svg"
                  alt="Стрелочка"
                  class="gallery__slider-icon"
                />
              </span>
              <span class="gallery__slider-button">
                <img
                  src="/wp-content/uploads/2025/04/arrow-left.svg"
                  alt="Стрелочка"
                  class="gallery__slider-icon"
                />
              </span>
            </div>
            <div class="gallery__slider-slide">
              <?php $gallery_main_alt = !empty($gallery_section['gallery_main_alt']) ? $gallery_section['gallery_main_alt'] : 'Главное фото галереи торжеств «Тантана»'; ?>
              <img
                src="<?php echo $gallery_section['gallery_main_image'] ?: '/wp-content/uploads/2025/04/Rectangle-70.png'; ?>"
                alt="<?php echo $gallery_main_alt; ?>"
                class="gallery__slider-image"
              />
            </div>
          </div>
          <div class="gallery__carousel">
            <?php
            if ($gallery_section && !empty($gallery_section['gallery_carousel'])) {
                foreach ($gallery_section['gallery_carousel'] as $item) {
                    $image = $item['image'];
                    $alt = $item['alt'] ?: 'Дета на торжестве';
                    $active = $item['active'] ? 'gallery__carousel-image-active' : '';
                    ?>
                    <img
                      src="<?php echo $image; ?>"
                      alt="<?php echo $alt; ?>"
                      class="gallery__carousel-image <?php echo $active; ?>"
                    />
                    <?php
                }
            } else {
                // Значения по умолчанию
                ?>
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-78.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-79.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-80.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-81.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-82.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image gallery__carousel-image-active"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-83.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-84.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-85.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-86.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <img
                  src="/wp-content/uploads/2025/04/Rectangle-87.png"
                  alt="Дета на торжестве"
                  class="gallery__carousel-image"
                />
                <?php
            }
            ?>
          </div>
        </div>
      </section>

      <section class="advantages__section">
        <?php $advantages_section = get_field('celebrations_advantages_section'); ?>
        <div class="advantages__container_title">
          <h2 class="advantages__title"><?php echo $advantages_section['advantages_title'] ?: 'преимущества'; ?></h2>
          <h2 class="advantages__title_text">
            <?php echo $advantages_section['advantages_subtitle'] ?: 'Преимущества проведения дня рождения в «Тантана»'; ?>
          </h2>
        </div>
        <div class="advantages__container">
          <?php
          if ($advantages_section && !empty($advantages_section['advantages_items'])) {
              foreach ($advantages_section['advantages_items'] as $item) {
                  $letter = $item['letter'];
                  $text = $item['text'];
                  $color = $item['color'];
                  $white_text = $item['white_text'];
                  
                  // Определяем класс круга
                  $circle_class = 'advantages__circle';
                  if ($color && $color !== 'default') {
                      $circle_class .= ' advantages__' . $color;
                  }
                  
                  // Определяем класс текста
                  $text_class = 'advantages__circle_title';
                  if ($white_text) {
                      $text_class .= ' advantages__white';
                  }
                  ?>
                  <div class="advantages__container_card">
                    <div class="<?php echo $circle_class; ?>">
                      <span class="<?php echo $text_class; ?>"><?php echo $letter; ?></span>
                    </div>
                    <p class="advantages__circle_text">
                      <?php echo $text; ?>
                    </p>
                  </div>
                  <?php
              }
          } else {
              // Значения по умолчанию
              ?>
              <div class="advantages__container_card">
                <div class="advantages__circle">
                  <span class="advantages__circle_title">Б</span>
                </div>
                <p class="advantages__circle_text">
                  большое пространство с развлечениями
                </p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__green">
                  <span class="advantages__circle_title advantages__white">В</span>
                </div>
                <p class="advantages__circle_text">
                  высококачественное обслуживание
                </p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__blue">
                  <span class="advantages__circle_title">В</span>
                </div>
                <p class="advantages__circle_text">
                  в рамках дня рождения проведение мастер-классов
                </p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__violet">
                  <span class="advantages__circle_title advantages__white">З</span>
                </div>
                <p class="advantages__circle_text">заботливые воспитатели</p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__green">
                  <span class="advantages__circle_titlen advantages__white">И</span>
                </div>
                <p class="advantages__circle_text">изготовление торта под заказ</p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__orange">
                  <span class="advantages__circle_title">М</span>
                </div>
                <p class="advantages__circle_text">модная площадка с фотозоной</p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__violet">
                  <span class="advantages__circle_title advantages__white">М</span>
                </div>
                <p class="advantages__circle_text">
                  музыкальное сопровождение и светомузыка
                </p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle">
                  <span class="advantages__circle_title">Н</span>
                </div>
                <p class="advantages__circle_text">наличие детского меню</p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__violet">
                  <span class="advantages__circle_title">П</span>
                </div>
                <p class="advantages__circle_text">пиццерия</p>
              </div>

              <div class="advantages__container_card">
                <div class="advantages__circle advantages__orange">
                  <span class="advantages__circle_title">Я</span>
                </div>
                <p class="advantages__circle_text">яркие анимационные программы</p>
              </div>
              <?php
          }
          ?>
        </div>
      </section>
      
      <?php include "reviews.php"; ?>



      <section class="price__section">
        <div class="price__container">
          <?php $price_section = get_field('celebrations_price_section'); ?>
          <div class="price__container_title">
            <h2 class="price__title"><?php echo $price_section['price_title'] ?: 'аренда зала'; ?></h2>
            <p class="price__text"><?php echo $price_section['price_text'] ?: '*меню в стоимость не входит'; ?></p>
          </div>
          <div class="price__cards_container">
            <div class="price__cards">
              <?php
              if ($price_section && !empty($price_section['price_cards'])) {
                  foreach ($price_section['price_cards'] as $item) {
                      $image = $item['image'];
                      $icon = $item['icon'];
                      $capacity = $item['capacity'];
                      $price = $item['price'];
                      $class = $item['class'];
                      $card_alt = !empty($capacity) ? 'Зал для ' . strip_tags($capacity) : 'Зал для праздника «Тантана»';
                      $icon_alt = !empty($capacity) ? 'Иконка вместимости: ' . strip_tags($capacity) : 'Иконка вместимости зала';
                      
                      // Определяем класс для текста
                      $text_class = 'price__container_text';
                      if (!empty($class)) {
                          $text_class .= ' ' . $class;
                      }
                      ?>
                      <div class="price__card">
                        <img
                          src="<?php echo $image; ?>"
                          alt="<?php echo $card_alt; ?>"
                          class="price__card_img"
                        />
                        <div class="price__card_container">
                          <div class="price__container_img">
                            <img
                              src="<?php echo $icon; ?>"
                              alt="<?php echo $icon_alt; ?>"
                              class="price__img_icon"
                            />
                            <div class="<?php echo $text_class; ?>"><?php echo $capacity; ?></div>
                          </div>
                          <p class="price__price"><?php echo $price; ?></p>
                        </div>
                      </div>
                      <?php
                  }
              } else {
                  // Значения по умолчанию
                  ?>
                  <div class="price__card">
                    <img
                      src="/wp-content/uploads/2025/04/priceO.webp"
                      alt="Зал для до 7 детей"
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconO.svg"
                          alt="Иконка вместимости: до 7 детей"
                          class="price__img_icon"
                        />
                        <div class="price__container_text">до 7 детей</div>
                      </div>
                      <p class="price__price">1800 руб/час</p>
                    </div>
                  </div>

                  <div class="price__card">
                    <img
                      src="/wp-content/uploads/2025/04/priceB.webp"
                      alt="Зал для 8–15 детей"
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconB.svg"
                          alt="Иконка вместимости: 8–15 детей"
                          class="price__img_icon"
                        />
                        <div class="price__container_text price__container_b">
                          от 8 до 15 детей
                        </div>
                      </div>
                      <p class="price__price">2500 руб/час</p>
                    </div>
                  </div>

                  <div class="price__card">
                    <img
                      src="/wp-content/uploads/2025/04/priceF.webp"
                      alt="Зал для 16–25 детей"
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconF.svg"
                          alt="Иконка вместимости: 16–25 детей"
                          class="price__img_icon"
                        />
                        <div class="price__container_text price__container_f">
                          от 16 до 25 детей
                        </div>
                      </div>
                      <p class="price__price">3800 руб/час</p>
                    </div>
                  </div>

                  <div class="price__card">
                    <img
                      src="/wp-content/uploads/2025/04/priceB.webp"
                      alt="Зал для 26–35 детей"
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconB.svg"
                          alt="Иконка вместимости: 26–35 детей"
                          class="price__img_icon"
                        />
                        <div class="price__container_text price__container_b">
                          от 26 до 35 детей
                        </div>
                      </div>
                      <p class="price__price">4800 руб/час</p>
                    </div>
                  </div>

                  <div class="price__card">
                    <img
                      src="/wp-content/uploads/2025/04/priceR.webp"
                      alt="Зал для более 36 детей"
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconR.svg"
                          alt="Иконка вместимости: более 36 детей"
                          class="price__img_icon"
                        />
                        <div class="price__container_text price__container_r">
                          от 36 детей
                        </div>
                      </div>
                      <p class="price__price">7800 руб/час</p>
                    </div>
                  </div>
                  <?php
              }
              ?>
            </div>
            <a class="footer__button price__button open-popup">
              <?php echo $price_section['price_button_text'] ?: 'заказать праздник'; ?>
            </a>
          </div>
        </div>
      </section>
 

      <section class="partners__section">
        <div class="partners__container">
          <div class="partners__title_container">
            <h2 class="partners__title">наши партнеры</h2>
            <p class="partners__subtitle">Мы сотрудничаем с лучшими компаниями города</p>
          </div>
          <div class="partners__cards">
            <div class="partners__card">
              <div class="partners__card_image">
                <img src="/wp-content/uploads/2025/10/mychef.png" alt="Пиццерия My Chef" class="partners__img">
              </div>
              <div class="partners__card_content">
                <h3 class="partners__card_title">Пиццерия "My Chef"</h3>
                <p class="partners__card_description">Вкусная пицца и итальянская кухня для ваших праздников</p>
                <a href="https://mychefpizza.ru/" target="_blank" class="partners__card_link">
                  <span>Перейти на сайт</span>
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3.33334 12.6667L12.6667 3.33337M12.6667 3.33337H6.00001M12.6667 3.33337V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
             
                          <div class="partners__card">
                <div class="partners__card_image">
                  <img src="/wp-content/uploads/2025/10/abc.jpg" alt="Детская игровая комната АВС-KIDS" class="partners__img">
                </div>
                <div class="partners__card_content">
                <h3 class="partners__card_title">Детская игровая комната "АВС-KIDS"</h3>
                  <p class="partners__card_description">Безопасная и увлекательная игровая зона для детей всех возрастов</p>
                  <a href="https://igrovaya-abc-kids.clients.site/?utm_referer=geoadv_search_yabs&utm_ya_campaign=212667537892&yabizcmpgn=51746768&utm_source=geoadv_search_yabs&utm_candidate=60935049874&utm_content=17311375997&ybaip=1&yclid=16516788817953816575" target="_blank" class="partners__card_link">
                  <span>Перейти на сайт</span>
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3.33334 12.6667L12.6667 3.33337M12.6667 3.33337H6.00001M12.6667 3.33337V10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </a>
              </div>
            </div>
            
            <div class="partners__card">
              <div class="partners__card_image">
                <img src="src/img/png/Rectangle 80.png" alt="Shen Кондитерская" class="partners__img">
              </div>
              <div class="partners__card_content">
                <h3 class="partners__card_title">Shen Кондитерская</h3>
                <div class="partners__card_features">
                  <p class="partners__feature">• Праздничные торты на заказ</p>
                  <p class="partners__feature">• Восточные лакомства</p>
                  <p class="partners__feature">• Свежая выпечка</p>
                </div>
               
              </div> 
            </div>
          </div>
        </div> 
      </section>
    
      <?php include "activities.php"; ?>
    </main>

<style>
.hero__section {
  position: relative;
  margin-top: 45px;
  padding-top: 111px;
  opacity: 0;
  animation: heroFadeIn 0.8s ease-out 0.2s forwards;
}
@media screen and (max-width: 1299px) {
  .hero__section {
    margin-top: 0;
    padding-top: 92px;
  }
}
@media screen and (max-width: 767px) {
  .hero__section {
    padding-top: 60px;
  }
}
.hero__bg {
  position: absolute;
  top: -12px;
  left: 0;
  z-index: 3;
  width: 100%;
  height: 666px;
  -o-object-fit: contain;
     object-fit: contain;
  pointer-events: none;
  transform: scale(0.8);
  opacity: 0;
  animation: heroBackgroundZoom 1.2s ease-out 0.5s forwards;
}
@media screen and (max-width: 1800px) {
  .hero__bg {
    height: 613px;
  }
}
@media screen and (max-width: 1599px) {
  .hero__bg {
    height: 598px;
  }
}
@media screen and (max-width: 1299px) {
  .hero__bg {
    top: 53px;
    height: 503px;
  }
}
@media screen and (max-width: 1199px) {
  .hero__bg {
    top: -12px;
  }
}
@media screen and (max-width: 800px) {
  .hero__bg {
    top: 30px;
    height: 345px;
  }
}
.hero__heading {
  position: relative;
  width: 1174px;
  margin: 0 auto;
}
@media screen and (max-width: 1299px) {
  .hero__heading {
    width: 657px;
  }
}
@media screen and (max-width: 767px) {
  .hero__heading {
    width: 292px;
  }
}
.hero__title {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  font-family: "RAYDIS", sans-serif;
  font-size: 160px;
  font-weight: 700;
  line-height: 105%;
  -webkit-text-stroke: 2px #C32824;
  color: #FFC548;
  text-transform: uppercase;
  overflow: hidden;
  white-space: nowrap;
  width: 0;
  animation: typewriter 2s steps(40) 1s forwards, titleGlow 0.5s ease-in-out 3s forwards;
  cursor: pointer;
  transition: all 0.3s ease;
}

.hero__title:hover {
  filter: drop-shadow(0 0 25px #FFC548) drop-shadow(0 0 50px #FFC548);
  transform: scale(1.02);
}
@media screen and (max-width: 768px) {
  .hero__title {
    font-size: 40px;
    font-weight: 700;
  }
}
@media screen and (max-width: 1299px) {
  .hero__title {
    font-size: 90px;
  }
}
@media screen and (max-width: 767px) {
  .hero__title {
    font-size: 40px;
  }
}
.hero__title-shadow {
  position: absolute;
  top: 7px;
  left: -7px;
  z-index: 1;
  font-family: "RAYDIS", sans-serif;
  font-size: 160px;
  font-weight: 700;
  line-height: 105%;
  color: #C32824;
  opacity: 0;
  transform: translateX(-20px);
  animation: shadowSlide 0.8s ease-out 2.5s forwards;
}
@media screen and (max-width: 768px) {
  .hero__title-shadow {
    font-size: 40px;
    font-weight: 700;
  }
}
@media screen and (max-width: 1299px) {
  .hero__title-shadow {
    top: 2px;
    left: -4px;
    font-size: 90px;
  }
}
@media screen and (max-width: 767px) {
  .hero__title-shadow {
    top: 0.5px;
    left: -1.5px;
    font-size: 40px;
  }
}
.hero__images {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 123px;
}
@media screen and (max-width: 1800px) {
  .hero__images {
    margin-top: 108px;
  }
}
@media screen and (max-width: 1299px) {
  .hero__images {
    margin-top: 63px;
  }
}
@media screen and (max-width: 767px) {
  .hero__images {
    margin-top: 30px;
  }
}
.hero__images-item {
  width: 275px;
  height: 305px;
  border-radius: 30px;
  box-shadow: 0 4px 0 0 #000000;
  overflow: hidden;
  opacity: 0;
  transform: translateY(50px) scale(0.8);
  transition: transform 0.3s ease;
  transform-origin: center center;
  will-change: transform, opacity;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.hero__images-item:nth-child(1) {
  animation: imagesBounceIn1 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 3.2s forwards;
}

.hero__images-item:nth-child(2) {
  animation: imagesBounceIn2 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 3.4s forwards;
}

.hero__images-item:nth-child(3) {
  animation: imagesBounceIn3 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 3.6s forwards;
}

.hero__images-item:nth-child(4) {
  animation: imagesBounceIn4 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 3.8s forwards;
}

.hero__images-item:nth-child(5) {
  animation: imagesBounceIn5 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 4s forwards;
}
@media screen and (max-width: 1800px) {
  .hero__images-item {
    width: 252px;
    height: 280px;
  }
}
@media screen and (max-width: 1599px) {
  .hero__images-item {
    width: 228px;
    height: 253px;
  }
}
.hero__images-item:nth-child(1) {
  transform: rotate(7deg);
  animation-fill-mode: forwards;
}

.hero__images-item:nth-child(1).animated {
  animation: imagesBounceIn1 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards,
             floating1 3s ease-in-out 4s infinite;
}

.hero__images-item:nth-child(1):hover {
  transform: rotate(7deg) scale(1.1) translateY(-10px);
  animation-play-state: paused;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}
@media screen and (max-width: 1299px) {
  .hero__images-item:nth-child(1) {
    display: none;
  }
}
.hero__images-item:nth-child(2) {
  transform: rotate(-7deg);
  animation-fill-mode: forwards;
}

.hero__images-item:nth-child(2).animated {
  animation: imagesBounceIn2 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.2s forwards,
             floating2 3.5s ease-in-out 4.2s infinite;
}

.hero__images-item:nth-child(2):hover {
  transform: rotate(-7deg) scale(1.1) translateY(-10px);
  animation-play-state: paused;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}
@media screen and (max-width: 767px) {
  .hero__images-item:nth-child(2) {
    display: none;
  }
}
.hero__images-item:nth-child(3) {
  width: 320px;
  height: 432px;
  animation-fill-mode: forwards;
  transform-origin: center center;
  will-change: transform, opacity;
  backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
}

.hero__images-item:nth-child(3).animated {
  animation: imagesBounceIn3 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.4s forwards,
             floating3 4s ease-in-out 4.4s infinite;
}

.hero__images-item:nth-child(3):hover {
  transform: scale(1.1) translateY(-10px);
  animation-play-state: paused;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}
@media screen and (max-width: 1800px) {
  .hero__images-item:nth-child(3) {
    width: 294px;
    height: 396px;
  }
}
@media screen and (max-width: 1599px) {
  .hero__images-item:nth-child(3) {
    width: 275px;
    height: 370px;
  }
}
@media screen and (max-width: 767px) {
  .hero__images-item:nth-child(3) {
    width: 204px;
    height: 274px;
    margin: 0 auto;
  }
}
.hero__images-item:nth-child(4) {
  transform: rotate(7deg);
  animation-fill-mode: forwards;
}

.hero__images-item:nth-child(4).animated {
  animation: imagesBounceIn4 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.6s forwards,
             floating4 3.2s ease-in-out 4.6s infinite;
}

.hero__images-item:nth-child(4):hover {
  transform: rotate(7deg) scale(1.1) translateY(-10px);
  animation-play-state: paused;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}
@media screen and (max-width: 767px) {
  .hero__images-item:nth-child(4) {
    display: none;
  }
}
.hero__images-item:nth-child(5) {
  transform: rotate(-7deg);
  animation-fill-mode: forwards;
}

.hero__images-item:nth-child(5).animated {
  animation: imagesBounceIn5 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 0.8s forwards,
             floating5 2.8s ease-in-out 4.8s infinite;
}

.hero__images-item:nth-child(5):hover {
  transform: rotate(-7deg) scale(1.1) translateY(-10px);
  animation-play-state: paused;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}
@media screen and (max-width: 1299px) {
  .hero__images-item:nth-child(5) {
    display: none;
  }
}
.hero__images-img {
  width: 100%;
  height: 100%;
  -o-object-fit: contain;
     object-fit: contain;
}
.hero__button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 405px;
  height: 52px;
  margin: 40px auto 0;
  border-radius: 30px;
  font-family: "Inter", sans-serif;
  font-size: 18px;
  line-height: 100%;
  font-weight: 600;
  line-height: 21.78px;
  background: #232122;
  color: #F6F6F6;
  box-shadow: 0 3px 0 0 #b7b7b7;
  transition: 0.3s, transform 0.3s;
  opacity: 0;
  transform: translateY(30px);
  animation: buttonPulseIn 1s ease-out 4.5s forwards;
}
@media screen and (max-width: 768px) {
  .hero__button {
    font-size: 14px;
    font-weight: 600;
  }
}
.hero__button:hover {
  transform: scale(1.05) translateY(-3px);
  box-shadow: 0 8px 20px rgba(35, 33, 34, 0.4);
}

.hero__button:active {
  transform: scale(0.98) translateY(0px);
  box-shadow: 0 2px 0 0 #b7b7b7;
}
@media screen and (max-width: 767px) {
  .hero__button {
    width: 340px;
    height: 45px;
    margin-top: 30px;
  }
}

/* Hero Section Animations */
@keyframes heroFadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes heroBackgroundZoom {
  from {
    opacity: 0;
    transform: scale(0.8);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}

@keyframes typewriter {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}

@keyframes titleGlow {
  0% {
    filter: drop-shadow(0 0 0 #FFC548);
  }
  50% {
    filter: drop-shadow(0 0 20px #FFC548);
  }
  100% {
    filter: drop-shadow(0 0 10px #FFC548);
  }
}

@keyframes shadowSlide {
  from {
    opacity: 0;
    transform: translateX(-20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@keyframes imagesBounceIn1 {
  0% {
    opacity: 0;
    transform: translateY(50px) scale(0.8) rotate(7deg);
  }
  60% {
    opacity: 1;
    transform: translateY(-10px) scale(1.05) rotate(7deg);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1) rotate(7deg);
  }
}

@keyframes imagesBounceIn2 {
  0% {
    opacity: 0;
    transform: translateY(50px) scale(0.8) rotate(-7deg);
  }
  60% {
    opacity: 1;
    transform: translateY(-10px) scale(1.05) rotate(-7deg);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1) rotate(-7deg);
  }
}

@keyframes imagesBounceIn3 {
  0% {
    opacity: 0;
    transform: translateY(50px) scale(0.8) translateZ(0);
  }
  60% {
    opacity: 1;
    transform: translateY(-10px) scale(1.05) translateZ(0);
  }
  100% {
    opacity: 1;
    transform: translateY(0px) scale(1) translateZ(0);
  }
}

@keyframes imagesBounceIn4 {
  0% {
    opacity: 0;
    transform: translateY(50px) scale(0.8) rotate(7deg);
  }
  60% {
    opacity: 1;
    transform: translateY(-10px) scale(1.05) rotate(7deg);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1) rotate(7deg);
  }
}

@keyframes imagesBounceIn5 {
  0% {
    opacity: 0;
    transform: translateY(50px) scale(0.8) rotate(-7deg);
  }
  60% {
    opacity: 1;
    transform: translateY(-10px) scale(1.05) rotate(-7deg);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1) rotate(-7deg);
  }
}

@keyframes buttonPulseIn {
  from {
    opacity: 0;
    transform: translateY(30px) scale(0.8);
  }
  to {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

/* Floating animations for each image */
@keyframes floating1 {
  0%, 100% {
    transform: translateY(0) rotate(7deg);
  }
  50% {
    transform: translateY(-15px) rotate(7deg);
  }
}

@keyframes floating2 {
  0%, 100% {
    transform: translateY(0) rotate(-7deg);
  }
  50% {
    transform: translateY(-12px) rotate(-7deg);
  }
}

@keyframes floating3 {
  0%, 100% {
    transform: translateY(0px) scale(1) translateZ(0);
  }
  50% {
    transform: translateY(-20px) scale(1) translateZ(0);
  }
}

@keyframes floating4 {
  0%, 100% {
    transform: translateY(0) rotate(7deg);
  }
  50% {
    transform: translateY(-18px) rotate(7deg);
  }
}

@keyframes floating5 {
  0%, 100% {
    transform: translateY(0) rotate(-7deg);
  }
  50% {
    transform: translateY(-14px) rotate(-7deg);
  }
}

/* Safari/WebKit оптимизации для стабильных анимаций */
@supports (-webkit-appearance: none) {
  .hero__images-item:nth-child(3) {
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
  }
  
  .hero__images-item:nth-child(3).animated {
    animation-timing-function: ease-in-out !important;
  }
}

/* Отключаем анимации для пользователей с предпочтением уменьшенного движения */
@media (prefers-reduced-motion: reduce) {
  .hero__section,
  .hero__bg,
  .hero__title,
  .hero__title-shadow,
  .hero__images-item,
  .hero__button {
    animation: none !important;
    opacity: 1 !important;
    transform: none !important;
  }
}

/* Мобильные адаптации для анимаций */
@media screen and (max-width: 767px) {
  .hero__title {
    animation: typewriter 1.5s steps(20) 1s forwards, titleGlow 0.5s ease-in-out 2.5s forwards;
  }
  
  .hero__title-shadow {
    animation: shadowSlide 0.6s ease-out 2s forwards;
  }
  
  .hero__images-item:nth-child(3).animated {
    animation: imagesBounceIn3 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) 2.8s forwards,
               floating3 4s ease-in-out 3.6s infinite;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
  }
  
  .hero__button {
    animation: buttonPulseIn 1s ease-out 3.5s forwards;
  }
}

.advantages__section {
    margin-top: -20px;
}

.gallery__section {
  position: relative;
}

.gallery__title {
  position: absolute;
  top: 0;
  left: 0;
  font-size: 18px;
  line-height: 100%;
  font-weight: 700;
  color: #000000;
  opacity: 0.5;
  text-transform: uppercase;
  transition: opacity 0.3s ease;
}

.gallery__title:hover {
  opacity: 0.8;
}

@media screen and (max-width: 768px) {
  .gallery__title {
    font-size: 14px;
    font-weight: 700;
  }
}

.gallery__slider {
  margin-top: 30px;
  position: relative;
}

/* Progress Bar */
.gallery__progress-bar {
  position: absolute;
  bottom: -8px;
  left: 0;
  width: 100%;
  height: 3px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 2px;
  overflow: hidden;
  z-index: 3;
}

.gallery__progress-fill {
  height: 100%;
  width: 0%;
  background: linear-gradient(90deg, #ff6b35, #ff8c42);
  border-radius: 2px;
  transition: width 0.1s linear;
  box-shadow: 0 0 10px rgba(255, 107, 53, 0.5);
}

.gallery__progress-bar.paused .gallery__progress-fill {
  opacity: 0.7;
  box-shadow: 0 0 8px rgba(255, 107, 53, 0.3);
}

@media screen and (max-width: 767px) {
  .gallery__progress-bar {
    height: 2px;
    bottom: -6px;
  }
}

.gallery__slider-main {
  display: grid;
  justify-content: space-between;
  gap: 10px;
  grid-template-columns: 29% 70%;
  transition: all 0.3s ease;
}

@media screen and (max-width: 1299px) {
  .gallery__slider-main {
    grid-template-columns: 100%;
  }
}

.gallery__slider-buttons {
  display: flex;
  justify-content: end;
  align-items: end;
  gap: 10px;
  margin-right: 37px;
  animation: slideInFromRight 0.6s ease-out;
}

@keyframes slideInFromRight {
  from {
    opacity: 0;
    transform: translateX(20px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

@media screen and (max-width: 1299px) {
  .gallery__slider-buttons {
    display: none;
  }
}

.gallery__slider-button {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  width: 52px;
  height: 52px;
  background: #232122;
  box-shadow: 0 3px 0 0 #b7b7b7;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
}

.gallery__slider-button::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(69, 36, 36, 0.2) 0%, transparent 70%);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.gallery__slider-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 0 0 #b7b7b7, 0 8px 20px rgba(35, 33, 34, 0.3);
  background: #2a2628;
}

.gallery__slider-button:hover::before {
  opacity: 1;
}

.gallery__slider-button:active {
  transform: translateY(0px);
  box-shadow: 0 2px 0 0 #b7b7b7;
  transition: all 0.1s ease;
}

.gallery__slider-button:nth-child(2) .gallery__slider-icon {
  transform: rotate(180deg);
}

.gallery__slider-icon {
  width: 24px;
  height: 24px;
  transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  filter: brightness(0) invert(1);
}

.gallery__slider-button:hover .gallery__slider-icon {
  transform: scale(1.1);
}

.gallery__slider-button:nth-child(2):hover .gallery__slider-icon {
  transform: rotate(180deg) scale(1.1);
}

.gallery__slider-slide {
  height: auto;
  aspect-ratio: 16/8;
  position: relative;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
}

.gallery__slider-slide:hover {
  box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

@media screen and (max-width: 1299px) {
  .gallery__slider-slide {
    height: auto;
    aspect-ratio: 16/8;
  }
}

@media screen and (max-width: 767px) {
  .gallery__slider-slide {
    height: auto;
    aspect-ratio: 4/3;
  }
}

.gallery__slider-image {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  transform: scale(1);
  opacity: 1;
}

.gallery__slider-image.loading {
  opacity: 0.3;
  transform: scale(1.01);
}

.gallery__slider-image.fade-in {
  opacity: 1;
  transform: scale(1);
}

.gallery__slider-slide:hover .gallery__slider-image {
  transform: scale(1.05);
}

.gallery__carousel {
  display: flex;
  align-items: start;
  justify-content: left;
  gap: 10px;
  height: auto;
  min-height: 170px; /* Высота активной карточки + отступ для анимации */
  margin-top: 20px;
  overflow: auto;
  scrollbar-width: none;
  padding: 5px 0;
  animation: slideInFromBottom 0.8s ease-out;
  transition: min-height 0.3s ease; /* Плавный переход высоты */
}

@keyframes slideInFromBottom {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.gallery__carousel-image {
  width: 167px;
  min-width: 167px;
  height: 120px;
  margin-top: 2px;
  margin-left: 2px;
  -o-object-fit: cover;
     object-fit: cover;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  border-radius: 6px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  position: relative;
  overflow: hidden;
}

.gallery__carousel-image::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
  transform: translateX(-100%);
  transition: transform 0.6s ease;
}

.gallery__carousel-image:hover::before {
  transform: translateX(100%);
}

.gallery__carousel-image:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
}

/* Tablet and medium screens */
@media screen and (max-width: 1024px) and (min-width: 768px) {
  .gallery__carousel {
    min-height: 170px;
  }
  
  .gallery__carousel-image {
    width: 140px;
    min-width: 140px;
    height: 100px;
  }
  
  .gallery__carousel-image-active {
    height: 140px;
  }
}

/* Mobile screens */
@media screen and (max-width: 767px) {
  .gallery__carousel {
    min-height: 125px; /* Высота активной карточки на мобильных + отступ */
    padding: 5px 0 10px 0; /* Дополнительный отступ снизу */
  }
  
  .gallery__carousel-image {
    min-width: 104px;
    width: 104px;
    height: 80px;
  }
}

.gallery__carousel-image-active {
  height: 160px;
  transform: translateY(-5px);
  border: 2px solid #ff6b35;
  position: relative;
}

.gallery__carousel-image-active::after {
  content: '';
  position: absolute;
  top: -3px;
  left: -3px;
  right: -3px;
  bottom: -3px;
  background: linear-gradient(135deg, 
    rgba(255, 107, 53, 0.3) 0%, 
    rgba(255, 140, 66, 0.2) 50%, 
    rgba(255, 107, 53, 0.3) 100%);
  border-radius: 9px;
  z-index: -1;
  animation: activeGlow 3s ease-in-out infinite alternate;
  filter: blur(1px);
}

@keyframes activeGlow {
  from {
    box-shadow: 
      0 0 15px rgba(255, 107, 53, 0.2),
      0 0 30px rgba(255, 107, 53, 0.1);
  }
  to {
    box-shadow: 
      0 0 25px rgba(255, 107, 53, 0.3),
      0 0 45px rgba(255, 107, 53, 0.15);
  }
}

.gallery__carousel-image-active:hover {
  transform: translateY(-8px) scale(1.02);
}

/* Small mobile screens */
@media screen and (max-width: 480px) {
  .gallery__carousel {
    min-height: 130px;
    gap: 8px;
  }
  
  .gallery__carousel-image {
    min-width: 90px;
    width: 90px;
    height: 70px;
  }
  
  .gallery__carousel-image-active {
    height: 105px;
  }
}

@media screen and (max-width: 767px) {
  .gallery__carousel-image-active {
    width: 104px;
    height: 115px;
  }
}

.gallery__carousel::-webkit-scrollbar {
  display: none;
}

/* Smooth scrolling for carousel */
.gallery__carousel {
  scroll-behavior: smooth;
}

/* Loading states */
.gallery__slider-slide.changing {
  position: relative;
}

.gallery__slider-slide.changing::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(45deg, 
    rgba(255, 255, 255, 0.1) 0%, 
    rgba(255, 255, 255, 0.3) 50%, 
    rgba(255, 255, 255, 0.1) 100%);
  z-index: 1;
  animation: gentleFade 0.8s ease-in-out;
  backdrop-filter: blur(2px);
}

@keyframes gentleFade {
  0% { 
    opacity: 0; 
    transform: scale(1);
  }
  30% { 
    opacity: 1; 
    transform: scale(1.005);
  }
  70% { 
    opacity: 1; 
    transform: scale(1.005);
  }
  100% { 
    opacity: 0; 
    transform: scale(1);
  }
}

/* Pulse animation for active carousel item */
@keyframes pulse {
  0% { transform: translateY(-5px) scale(1); }
  50% { transform: translateY(-5px) scale(1.02); }
  100% { transform: translateY(-5px) scale(1); }
}

.gallery__carousel-image-active {
  animation: pulse 3s ease-in-out infinite;
}

/* Smooth transitions for all interactive elements */
* {
  -webkit-tap-highlight-color: transparent;
}

.gallery__slider-button,
.gallery__carousel-image {
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

/* Enhanced mobile touch interactions */
@media screen and (max-width: 767px) {
  .gallery__carousel-image:active {
    transform: scale(0.98);
    transition: transform 0.1s ease;
  }
  
  .gallery__slider-slide {
    touch-action: pan-x;
  }
}

/* Partners Section Styles */
.partners__section {
  padding: 80px 0;
  background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
  position: relative;
}

.partners__container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.partners__title_container {
  text-align: center;
  margin-bottom: 60px;
}

.partners__title {
  font-family: "Raydis", sans-serif;
  font-size: 48px;
  font-weight: 700;
  color: #2D2D2D;
  text-transform: uppercase;
  margin-bottom: 16px;
  letter-spacing: 1px;
}

.partners__subtitle {
  font-family: "Inter", sans-serif;
  font-size: 18px;
  font-weight: 400;
  color: #666666;
  line-height: 1.5;
}

.partners__cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 40px;
  justify-items: center;
  max-width: 1200px;
  margin: 0 auto;
}

.partners__card {
  background: #ffffff;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  max-width: 400px;
  width: 100%;
}

.partners__card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #5534F5 0%, #F2A531 50%, #FFC548 100%);
  transform: scaleX(0);
  transition: transform 0.3s ease;
}

.partners__card:hover::before {
  transform: scaleX(1);
}

.partners__card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
}

.partners__card_image {
  width: 100%;
  height: 200px;
  border-radius: 12px;
  overflow: hidden;
  margin-bottom: 24px;
  position: relative;
}

.partners__img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.3s ease;
}

.partners__card:hover .partners__img {
  transform: scale(1.05);
}

.partners__card_content {
  text-align: center;
}

.partners__card_title {
  font-family: "Inter", sans-serif;
  font-size: 24px;
  font-weight: 600;
  color: #2D2D2D;
  margin-bottom: 12px;
  line-height: 1.3;
}

.partners__card_description {
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: 400;
  color: #666666;
  line-height: 1.5;
  margin-bottom: 24px;
}

.partners__card_features {
  margin-bottom: 24px;
}

.partners__feature {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  font-weight: 400;
  color: #666666;
  line-height: 1.6;
  margin-bottom: 8px;
  text-align: left;
}

.partners__feature:last-child {
  margin-bottom: 0;
}

.partners__card_link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: 500;
  color: #5534F5;
  text-decoration: none;
  padding: 12px 24px;
  border: 2px solid #5534F5;
  border-radius: 30px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.partners__card_link::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: #5534F5;
  transition: left 0.3s ease;
  z-index: -1;
}

.partners__card_link:hover::before {
  left: 0;
}

.partners__card_link:hover {
  color: #ffffff;
  transform: translateY(-2px);
}

.partners__card_link svg {
  transition: transform 0.3s ease;
}

.partners__card_link:hover svg {
  transform: translateX(4px);
}

/* Mobile Responsive */
@media screen and (max-width: 1024px) {
  .partners__cards {
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
  }
}

@media screen and (max-width: 768px) {
  .partners__section {
    padding: 60px 0;
  }
  
  .partners__container {
    padding: 0 16px;
  }
  
  .partners__title {
    font-size: 36px;
    margin-bottom: 12px;
  }
  
  .partners__subtitle {
    font-size: 16px;
  }
  
  .partners__title_container {
    margin-bottom: 40px;
  }
  
  .partners__cards {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .partners__card {
    padding: 24px;
    max-width: none;
  }
  
  .partners__card_image {
    height: 180px;
    margin-bottom: 20px;
  }
  
  .partners__card_title {
    font-size: 20px;
    margin-bottom: 10px;
  }
  
  .partners__card_description {
    font-size: 14px;
    margin-bottom: 20px;
  }
  
  .partners__card_link {
    font-size: 14px;
    padding: 10px 20px;
  }
  
  .partners__feature {
    font-size: 13px;
    margin-bottom: 6px;
  }
}

@media screen and (max-width: 480px) {
  .partners__section {
    padding: 40px 0;
  }
  
  .partners__title {
    font-size: 28px;
  }
  
  .partners__card {
    padding: 20px;
  }
  
  .partners__card_image {
    height: 160px;
  }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Slider Functionality
    const gallerySlider = {
        currentIndex: 0,
        images: [],
        mainImage: null,
        carouselImages: [],
        prevButton: null,
        nextButton: null,
        autoPlayInterval: null,
        autoPlayDelay: 5000,
        progressInterval: null,
        progressStartTime: null,
        isPaused: false,
        
        init: function() {
            this.mainImage = document.querySelector('.gallery__slider-image');
            this.carouselImages = document.querySelectorAll('.gallery__carousel-image');
            this.prevButton = document.querySelector('.gallery__slider-button:first-child');
            this.nextButton = document.querySelector('.gallery__slider-button:last-child');
            
            if (!this.mainImage || this.carouselImages.length === 0) {
                console.log('Gallery slider elements not found');
                return;
            }
            
            this.setupImages();
            this.bindEvents();
            this.setActiveImage(this.findActiveIndex());
            this.startAutoPlay();
            
            console.log('Gallery slider initialized with', this.images.length, 'images');
        },
        
        setupImages: function() {
            this.images = [];
            this.carouselImages.forEach((img, index) => {
                this.images.push({
                    src: img.src,
                    alt: img.alt || 'Gallery image ' + (index + 1)
                });
            });
        },
        
        findActiveIndex: function() {
            for (let i = 0; i < this.carouselImages.length; i++) {
                if (this.carouselImages[i].classList.contains('gallery__carousel-image-active')) {
                    return i;
                }
            }
            return 0;
        },
        
        bindEvents: function() {
            // Previous button
            this.prevButton.addEventListener('click', (e) => {
                e.preventDefault();
                this.addButtonClickEffect(this.prevButton);
                this.previousImage();
                // Перезапускаем прогресс-бар
                if (this.autoPlayInterval && !this.isPaused) {
                    this.startProgressBar();
                }
            });
            
            // Next button
            this.nextButton.addEventListener('click', (e) => {
                e.preventDefault();
                this.addButtonClickEffect(this.nextButton);
                this.nextImage();
                // Перезапускаем прогресс-бар
                if (this.autoPlayInterval && !this.isPaused) {
                    this.startProgressBar();
                }
            });
            
            // Carousel images click
            this.carouselImages.forEach((img, index) => {
                img.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.addCarouselClickEffect(img);
                    this.setActiveImage(index);
                    // Перезапускаем прогресс-бар
                    if (this.autoPlayInterval && !this.isPaused) {
                        this.startProgressBar();
                    }
                });
                
                // Add hover sound effect (visual feedback)
                img.addEventListener('mouseenter', () => {
                    if (!img.classList.contains('gallery__carousel-image-active')) {
                        img.style.transform = 'translateY(-3px) scale(1.02)';
                    }
                });
                
                img.addEventListener('mouseleave', () => {
                    if (!img.classList.contains('gallery__carousel-image-active')) {
                        img.style.transform = '';
                    }
                });
            });
            
            // Touch/swipe support for mobile
            let startX = 0;
            let startY = 0;
            let endX = 0;
            let endY = 0;
            
            this.mainImage.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                startY = e.touches[0].clientY;
            }, { passive: true });
            
            this.mainImage.addEventListener('touchend', (e) => {
                endX = e.changedTouches[0].clientX;
                endY = e.changedTouches[0].clientY;
                this.handleSwipe(startX, startY, endX, endY);
            }, { passive: true });
            
            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (this.isInViewport()) {
                    if (e.key === 'ArrowLeft') {
                        e.preventDefault();
                        this.previousImage();
                        // Перезапускаем прогресс-бар
                        if (this.autoPlayInterval && !this.isPaused) {
                            this.startProgressBar();
                        }
                    } else if (e.key === 'ArrowRight') {
                        e.preventDefault();
                        this.nextImage();
                        // Перезапускаем прогресс-бар
                        if (this.autoPlayInterval && !this.isPaused) {
                            this.startProgressBar();
                        }
                    }
                }
            });
            
            // Pause autoplay when hovering on slide
            const sliderSlide = document.querySelector('.gallery__slider-slide');
            if (sliderSlide) {
                sliderSlide.addEventListener('mouseenter', () => {
                    this.pauseAutoPlay();
                });
                
                sliderSlide.addEventListener('mouseleave', () => {
                    this.resumeAutoPlay();
                });
            }
        },
        
        handleSwipe: function(startX, startY, endX, endY) {
            const deltaX = endX - startX;
            const deltaY = endY - startY;
            const minSwipeDistance = 50;
            
            // Check if horizontal swipe is more significant than vertical
            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > minSwipeDistance) {
                if (deltaX > 0) {
                    this.previousImage(); // Swipe right - previous image
                } else {
                    this.nextImage(); // Swipe left - next image
                }
                // Перезапускаем прогресс-бар
                if (this.autoPlayInterval && !this.isPaused) {
                    this.startProgressBar();
                }
            }
        },
        
        isInViewport: function() {
            const element = document.querySelector('.gallery__section');
            if (!element) return false;
            
            const rect = element.getBoundingClientRect();
            return (
                rect.top < window.innerHeight &&
                rect.bottom > 0
            );
        },
        
        setActiveImage: function(index) {
            if (index < 0 || index >= this.images.length) return;
            
            this.currentIndex = index;
            
            // Add changing effect to slide container
            const slideContainer = document.querySelector('.gallery__slider-slide');
            slideContainer.classList.add('changing');
            
            // Start fade out
            this.mainImage.classList.add('loading');
            this.mainImage.classList.remove('fade-in');
            
            // Preload the new image for smoother transition
            const newImage = new Image();
            newImage.onload = () => {
                // Update main image source after fade out
                setTimeout(() => {
                    this.mainImage.src = this.images[index].src;
                    this.mainImage.alt = this.images[index].alt;
                    
                    // Start fade in
                    setTimeout(() => {
                        this.mainImage.classList.remove('loading');
                        this.mainImage.classList.add('fade-in');
                        slideContainer.classList.remove('changing');
                    }, 50);
                }, 300);
            };
            
            // Handle image load error
            newImage.onerror = () => {
                setTimeout(() => {
                    this.mainImage.src = this.images[index].src;
                    this.mainImage.alt = this.images[index].alt;
                    this.mainImage.classList.remove('loading');
                    this.mainImage.classList.add('fade-in');
                    slideContainer.classList.remove('changing');
                }, 300);
            };
            
            newImage.src = this.images[index].src;
            
            // Update active carousel image with smoother animation
            this.carouselImages.forEach((img, i) => {
                const wasActive = img.classList.contains('gallery__carousel-image-active');
                const willBeActive = i === index;
                
                if (wasActive && !willBeActive) {
                    // Smooth animate out
                    img.style.transition = 'all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                    setTimeout(() => {
                        img.classList.remove('gallery__carousel-image-active');
                    }, 100);
                } else if (!wasActive && willBeActive) {
                    // Smooth animate in
                    img.style.transition = 'all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                    setTimeout(() => {
                        img.classList.add('gallery__carousel-image-active');
                    }, 200);
                }
            });
            
            // Scroll carousel to show active image
            setTimeout(() => {
                this.scrollCarouselToActive();
            }, 250);
        },
        
        scrollCarouselToActive: function() {
            const activeImage = this.carouselImages[this.currentIndex];
            const carousel = document.querySelector('.gallery__carousel');
            
            if (activeImage && carousel) {
                const carouselRect = carousel.getBoundingClientRect();
                const imageRect = activeImage.getBoundingClientRect();
                
                if (imageRect.left < carouselRect.left || imageRect.right > carouselRect.right) {
                    activeImage.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest',
                        inline: 'center'
                    });
                }
            }
        },
        
        nextImage: function() {
            const nextIndex = (this.currentIndex + 1) % this.images.length;
            this.setActiveImage(nextIndex);
        },
        
        previousImage: function() {
            const prevIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            this.setActiveImage(prevIndex);
        },
        
        addButtonClickEffect: function(button) {
            button.style.transform = 'translateY(0px) scale(0.95)';
            button.style.boxShadow = '0 2px 0 0 #b7b7b7';
            
            setTimeout(() => {
                button.style.transform = '';
                button.style.boxShadow = '';
            }, 150);
        },
        
        addCarouselClickEffect: function(img) {
            const originalTransform = img.style.transform;
            img.style.transform = 'scale(0.95)';
            img.style.transition = 'transform 0.1s ease';
            
            setTimeout(() => {
                img.style.transform = originalTransform;
                img.style.transition = '';
            }, 150);
        },
        
        startAutoPlay: function() {
            this.stopAutoPlay();
            this.isPaused = false;
            
            // Запускаем прогресс-бар
            this.startProgressBar();
            
            this.autoPlayInterval = setInterval(() => {
                if (!this.isPaused) {
                    this.nextImage();
                    this.startProgressBar(); // Перезапускаем прогресс-бар
                }
            }, this.autoPlayDelay);
        },
        
        stopAutoPlay: function() {
            if (this.autoPlayInterval) {
                clearInterval(this.autoPlayInterval);
                this.autoPlayInterval = null;
            }
            if (this.progressInterval) {
                clearInterval(this.progressInterval);
                this.progressInterval = null;
            }
            
            this.isPaused = false;
            
            // Сбрасываем прогресс-бар
            const progressFill = document.querySelector('.gallery__progress-fill');
            if (progressFill) {
                progressFill.style.width = '0%';
            }
            
            // Убираем класс паузы
            const progressBar = document.querySelector('.gallery__progress-bar');
            if (progressBar) {
                progressBar.classList.remove('paused');
            }
        },
        
        startProgressBar: function() {
            // Очищаем предыдущий интервал
            if (this.progressInterval) {
                clearInterval(this.progressInterval);
                this.progressInterval = null;
            }
            
            const progressFill = document.querySelector('.gallery__progress-fill');
            if (!progressFill) return;
            
            // Сбрасываем прогресс-бар
            progressFill.style.width = '0%';
            this.progressStartTime = Date.now();
            
            // Запускаем новый интервал
            this.progressInterval = setInterval(() => {
                if (this.isPaused) return; // Останавливаем анимацию при паузе
                
                const elapsed = Date.now() - this.progressStartTime;
                const progress = Math.min((elapsed / this.autoPlayDelay) * 100, 100);
                
                if (progressFill) {
                    progressFill.style.width = progress + '%';
                }
                
                if (progress >= 100) {
                    clearInterval(this.progressInterval);
                    this.progressInterval = null;
                }
            }, 100);
        },
        
        pauseAutoPlay: function() {
            this.isPaused = true;
            
            // Добавляем визуальный класс паузы
            const progressBar = document.querySelector('.gallery__progress-bar');
            if (progressBar) {
                progressBar.classList.add('paused');
            }
        },
        
        resumeAutoPlay: function() {
            this.isPaused = false;
            
            // Убираем визуальный класс паузы
            const progressBar = document.querySelector('.gallery__progress-bar');
            if (progressBar) {
                progressBar.classList.remove('paused');
            }
        }
    };
    
    // Initialize the gallery slider
    gallerySlider.init();
    
    // Handle window resize
    window.addEventListener('resize', function() {
        gallerySlider.scrollCarouselToActive();
    });
    
    // Intersection Observer for performance optimization
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (!gallerySlider.autoPlayInterval) {
                    gallerySlider.startAutoPlay();
                }
            } else {
                gallerySlider.stopAutoPlay();
            }
        });
    });
    
    const gallerySection = document.querySelector('.gallery__section');
    if (gallerySection) {
        observer.observe(gallerySection);
    }
});

// Hero Section Interactive Animations
document.addEventListener('DOMContentLoaded', function() {
    // Safari fix for center image jittering
    const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);
    if (isSafari) {
        const centerImage = document.querySelector('.hero__images-item:nth-child(3)');
        if (centerImage) {
            // Force hardware acceleration and stable positioning
            centerImage.style.webkitTransform = 'translateZ(0)';
            centerImage.style.transform = 'translateZ(0)';
            centerImage.style.webkitBackfaceVisibility = 'hidden';
            centerImage.style.backfaceVisibility = 'hidden';
            
            // Add extra stability after animations complete
            setTimeout(() => {
                centerImage.style.webkitTransformStyle = 'preserve-3d';
                centerImage.style.transformStyle = 'preserve-3d';
            }, 6000);
        }
    }
    
    // Add animated classes to images after initial animations complete
    setTimeout(() => {
        const heroImages = document.querySelectorAll('.hero__images-item');
        heroImages.forEach(img => {
            img.classList.add('animated');
        });
    }, 4200); // After all bounce animations (last one starts at 4s + 0.8s duration)
    
    // Add click animation to title
    const heroTitle = document.querySelector('.hero__title');
    if (heroTitle) {
        heroTitle.addEventListener('click', function() {
            this.style.animation = 'none';
            setTimeout(() => {
                this.style.animation = 'typewriter 1s steps(40) forwards, titleGlow 0.5s ease-in-out 1s forwards';
            }, 10);
        });
    }
    
    // Add click effects to images
    const heroImagesItems = document.querySelectorAll('.hero__images-item');
    heroImagesItems.forEach((img, index) => {
        img.addEventListener('click', function() {
            // Pause floating animation
            this.style.animationPlayState = 'paused';
            
            // Add click animation
            this.style.transform += ' scale(0.95)';
            this.style.transition = 'all 0.1s ease';
            
            setTimeout(() => {
                this.style.transform = this.style.transform.replace(' scale(0.95)', '');
                setTimeout(() => {
                    this.style.animationPlayState = 'running';
                }, 200);
            }, 150);
        });
        
        // Add double-click effect for extra interaction
        let clickTimeout;
        img.addEventListener('dblclick', function() {
            clearTimeout(clickTimeout);
            
            // Create sparkle effect
            const sparkle = document.createElement('div');
            sparkle.style.cssText = `
                position: absolute;
                top: 50%;
                left: 50%;
                width: 20px;
                height: 20px;
                background: radial-gradient(circle, #FFC548, transparent);
                border-radius: 50%;
                transform: translate(-50%, -50%);
                animation: sparkleEffect 0.6s ease-out forwards;
                pointer-events: none;
                z-index: 10;
            `;
            
            this.style.position = 'relative';
            this.appendChild(sparkle);
            
            setTimeout(() => {
                if (sparkle && sparkle.parentNode) {
                    sparkle.parentNode.removeChild(sparkle);
                }
            }, 600);
        });
    });
});

// Add sparkle effect keyframe
const sparkleStyle = document.createElement('style');
sparkleStyle.textContent = `
    @keyframes sparkleEffect {
        0% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(0);
        }
        50% {
            opacity: 1;
            transform: translate(-50%, -50%) scale(2);
        }
        100% {
            opacity: 0;
            transform: translate(-50%, -50%) scale(4);
        }
    }
`;
document.head.appendChild(sparkleStyle);
</script>

<?php get_footer(); ?>