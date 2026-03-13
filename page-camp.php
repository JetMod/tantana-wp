<?php 

get_header();

?>

<?php 

/* Template Name: camp */

?>

<main class="main">
      <section class="camp">
        <h2 class="camp__title">
          <?php
          $camp_hero = get_field('camp_hero_section');
          if ($camp_hero && !empty($camp_hero['camp_hero_colored_title'])) {
              foreach ($camp_hero['camp_hero_colored_title'] as $item) {
                  $letter = $item['letter'];
                  $color = $item['color'];
                  $class = $item['class'] ?: '';
                  
                  // Добавляем класс для буквы
                  $letter_class = $color;
                  if (!empty($class)) {
                      $letter_class .= ' ' . $class;
                  }
                  
                  echo "<span class=\"{$letter_class}\"> {$letter} </span>";
              }
          } else {
              // Значения по умолчанию
              ?>
              <span class="blue"> T </span>
              <span class="orange"> A </span>
              <span class="green"> N </span>
              <span class="yellow"> T </span>
              <span class="red"> A </span>
              <span class="green"> N </span>
              <span class="yellow"> A </span>
              <span class="camp__title_block"> </span>
              <span class="orange camp__title_margin"> c </span>
              <span class="blue"> A </span>
              <span class="red"> m </span>
              <span class="green"> p </span>
              <?php
          }
          ?>
        </h2>

        <div class="camp__container">
          <?php
          if ($camp_hero && !empty($camp_hero['camp_dates'])) {
              $date_count = 0;
              $dates = [];
              
              // Собираем все даты
              foreach ($camp_hero['camp_dates'] as $item) {
                  $dates[] = $item['date'];
              }
              
              // Выводим первую дату
              if (!empty($dates[0])) {
                  ?>
                  <div class="camp__container_one">
                    <p><?php echo $dates[0]; ?></p>
                  </div>
                  <?php
              }
              ?>

              <div class="camp__container_center">
                <img src="<?php echo $camp_hero['camp_hero_image'] ?: '/wp-content/uploads/2025/04/campTitle-1.png'; ?>" alt="" class="camp__img" />
                <div class="camp__container_text">
                  <p class="camp__container_text">
                    <?php echo $camp_hero['camp_hero_description'] ?: '5 дней свежих эмоций, новых знаний и ярких знакомств эксклюзивный культурно-познавательный проект для детей от 7 до 12 лет!'; ?>
                  </p>
                  <button class="camp__butto open-popupn"><?php echo $camp_hero['camp_hero_button_text'] ?: 'заказать праздник'; ?></button>
                </div>
              </div>

              <?php
              // Выводим вторую дату, если она есть
              if (!empty($dates[1])) {
                  ?>
                  <div class="camp__container_one">
                    <p><?php echo $dates[1]; ?></p>
                  </div>
                  <?php
              }
          } else {
              // Значения по умолчанию
              ?>
              <div class="camp__container_one">
                <p>с 2 - 6 июня 2025</p>
              </div>

              <div class="camp__container_center">
                <img src="/wp-content/uploads/2025/04/campTitle-1.png" alt="" class="camp__img" />
                <div class="camp__container_text">
                  <p class="camp__container_text">
                    5 дней свежих эмоций, новых знаний и ярких знакомств
                    эксклюзивный культурно-познавательный проект для детей от 7 до
                    12 лет!
                  </p>
                  <button class="camp__button open-popup">заказать праздник</button>
                </div>
              </div>

              <div class="camp__container_one">
                <p>с 16 - 20 июня 2025</p>
              </div>
              <?php
          }
          ?>
        </div>
      </section>

      <section class="gamegallery">
        <?php $camp_gallery = get_field('camp_gallery_section'); ?>
        <h2 class="gamegallery__title"><?php echo $camp_gallery['gallery_title'] ?: 'галлерия'; ?></h2>

        <ul class="gamegallery__cards">
          <?php
          if ($camp_gallery && !empty($camp_gallery['gallery_images'])) {
              foreach ($camp_gallery['gallery_images'] as $item) {
                  $image = $item['image'];
                  ?>
                  <li class="gamegallery__card">
                    <img
                      src="<?php echo $image; ?>"
                      alt=""
                      class="gamegallery__img"
                    />
                  </li>
                  <?php
              }
          } else {
              // Значения по умолчанию
              ?>
              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/1camp-369-1.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>

              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/2camp-1.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>

              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/3camp.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>

              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/4camp-1.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>

              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/5camp-1.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>

              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/3camp-1.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>
              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/1camp-369.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>

              <li class="gamegallery__card">
                <img
                  src="/wp-content/uploads/2025/04/2game.png"
                  alt=""
                  class="gamegallery__img"
                />
              </li>
              <?php
          }
          ?>
        </ul>
      </section>

      <?php include "reviews.php"; ?>



      <section class="price__section">
        <?php $camp_price = get_field('camp_price_section'); ?>
        <div class="price__container">
          <div class="price__container_title">
            <h4 class="price__title"><?php echo $camp_price['price_title'] ?: 'Стоимость посещения игровой'; ?></h4>
            <p class="price__text"><?php echo $camp_price['price_text'] ?: '*Для сопровождающих вход свободный'; ?></p>
          </div>
          <div class="price__cards_container">
            <div class="price__cards">
              <?php
              if ($camp_price && !empty($camp_price['price_cards'])) {
                  foreach ($camp_price['price_cards'] as $item) {
                      $image = $item['image'];
                      $icon = $item['icon'];
                      $duration = $item['duration'];
                      $price = $item['price'];
                      $class = $item['class'];
                      
                      // Определяем класс для текста
                      $text_class = 'price__container_text';
                      if (!empty($class)) {
                          $text_class .= ' ' . $class;
                      }
                      ?>
                      <div class="price__card">
                        <img
                          src="<?php echo $image; ?>"
                          alt=""
                          class="price__card_img"
                        />
                        <div class="price__card_container">
                          <div class="price__container_img">
                            <img
                              src="<?php echo $icon; ?>"
                              alt=""
                              class="price__img_icon"
                            />
                            <div class="<?php echo $text_class; ?>"><?php echo $duration; ?></div>
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
                      alt=""
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconO.svg"
                          alt=""
                          class="price__img_icon"
                        />
                        <div class="price__container_text">30 минут</div>
                      </div>
                      <p class="price__price">200 руб/час</p>
                    </div>
                  </div>

                  <div class="price__card">
                    <img
                      src="/wp-content/uploads/2025/04/priceB.webp"
                      alt=""
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconB.svg"
                          alt=""
                          class="price__img_icon"
                        />
                        <div class="price__container_text price__container_b">
                          60 минут
                        </div>
                      </div>
                      <p class="price__price">300 руб/час</p>
                    </div>
                  </div>

                  <div class="price__card">
                    <img
                      src="/wp-content/uploads/2025/04/priceF.webp"
                      alt=""
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="/wp-content/uploads/2025/04/priceIconF.svg"
                          alt=""
                          class="price__img_icon"
                        />
                        <div class="price__container_text price__container_f">
                          бизлимит
                        </div>
                      </div>
                      <p class="price__price">400 руб/час</p>
                    </div>
                  </div>
                  <?php
              }
              ?>
            </div>
            <a class="footer__button price__button open-popup">
              <?php echo $camp_price['price_button_text'] ?: 'заказать праздник'; ?>
            </a>
          </div>
        </div>
      </section>

      <?php include "activities.php"; ?>

     
    </main>



<?php 

get_footer();

?>