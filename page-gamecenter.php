<?php get_header(); ?>

<?php
/* Template Name: gamecenter */
?>

<main class="main">
      <?php
      // Получаем данные ACF для секции Hero
      $game_hero = get_field('game_hero');
      ?>
      <section class="game">
        <div class="game__title_container">
          <h1 class="game__title"><?php echo !empty($game_hero['title']) ? $game_hero['title'] : 'игровой'; ?>

             <span class="game__title_span"><?php echo !empty($game_hero['title_2']) ? $game_hero['title_2'] : 'центр'; ?></span>
          </h1>
          <span class="game__title-shadow"
            > <?php echo !empty($game_hero['title']) ? $game_hero['title'] : 'игровой'; ?> 
            <span class="game__title-shadow_span"><?php echo !empty($game_hero['title_2']) ? $game_hero['title_2'] : 'центр'; ?></span></span
          >
        </div>

        <div class="game__container">
          <div class="game__container_one">
            <?php if (!empty($game_hero['images']['side'])): ?>
              <?php foreach (array_slice($game_hero['images']['side'], 0, 2) as $image): ?>
                <img src="<?php echo $image['image']; ?>" alt="" />
              <?php endforeach; ?>
            <?php else: ?>
              <img src="/wp-content/uploads/2025/04/ghosts1.webp" alt="" />
              <img src="/wp-content/uploads/2025/04/ghosts2.webp" alt="" />
            <?php endif; ?>
          </div>

          <div class="game__container_center">
            <img
              src="<?php echo !empty($game_hero['images']['center']) ? $game_hero['images']['center'] : '/wp-content/uploads/2025/04/ghostsCenter.png'; ?>"
              alt=""
              class="game__img"
            />
            <div class="game__container_text">
              <p class="game__container_text_p">
                <?php echo !empty($game_hero['description']) ? $game_hero['description'] : 'Tantana — это трендовый детский игровой центр. Здесь каждый шаг наполнен весельем, увлекательными приключениями и морем позитива. В нашем замечательном царстве детства каждый ребенок находит что-то особенное и увлекательное для себя!'; ?>
              </p>
              <a class="game__button open-popup"><?php echo !empty($game_hero['button_text']) ? $game_hero['button_text'] : 'заказать звонок'; ?></a>
            </div>
          </div>

          <div class="game__container_one">
            <?php if (!empty($game_hero['images']['side']) && count($game_hero['images']['side']) >= 4): ?>
              <?php foreach (array_slice($game_hero['images']['side'], 2, 2) as $image): ?>
                <img src="<?php echo $image['image']; ?>" alt="" />
              <?php endforeach; ?>
            <?php else: ?>
              <img src="/wp-content/uploads/2025/04/ghosts3.webp" alt="" />
              <img src="/wp-content/uploads/2025/04/ghosts4.webp" alt="" />
            <?php endif; ?>
          </div>
        </div>
      </section>

      <?php
      // Получаем данные ACF для секции галереи
      $game_gallery = get_field('game_gallery');
      ?>
      <section class="gamegallery">
        <h2 class="gamegallery__title"><?php echo !empty($game_gallery['title']) ? $game_gallery['title'] : 'галлерия'; ?></h2>

        <ul class="gamegallery__cards">
          <?php if (!empty($game_gallery['images'])): ?>
            <?php foreach ($game_gallery['images'] as $image): ?>
              <li class="gamegallery__card">
                <img
                  src="<?php echo $image['image']; ?>"
                  alt=""
                  class="gamegallery__img"
                />
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/1game.png" alt="" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/2game.png" alt="" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/3game.png" alt="" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/4game.png" alt="" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/5game.png" alt="" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/3game.png" alt="" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/1game.png" alt="" class="gamegallery__img" />
            </li>
            <li class="gamegallery__card">
              <img src="/wp-content/uploads/2025/04/2game.png" alt="" class="gamegallery__img" />
            </li>
          <?php endif; ?>
        </ul>
      </section>

      <?php
      // Получаем данные ACF для секции преимуществ
      $game_advantages = get_field('game_advantages');
      ?>
      <section class="advantages__section">
        <div class="advantages__container_title">
          <h4 class="advantages__title"><?php echo !empty($game_advantages['title']) ? $game_advantages['title'] : 'преимущества'; ?></h4>
          <h2 class="advantages__title_text">
            <?php echo !empty($game_advantages['subtitle']) ? $game_advantages['subtitle'] : 'Преимущества проведения дня рождения в «Тантана»'; ?>
          </h2>
        </div>
        <div class="advantages__container">
          <?php if (!empty($game_advantages['items'])): ?>
            <?php foreach ($game_advantages['items'] as $item): ?>
              <div class="advantages__container_card">
                <div class="advantages__circle<?php echo !empty($item['color']) && $item['color'] != 'default' ? ' advantages__' . $item['color'] : ''; ?>">
                  <span class="advantages__circle_title<?php echo !empty($item['white_text']) && $item['white_text'] ? ' advantages__white' : ''; ?>"><?php echo !empty($item['letter']) ? $item['letter'] : ''; ?></span>
                </div>
                <p class="advantages__circle_text">
                  <?php echo !empty($item['text']) ? $item['text'] : ''; ?>
                </p>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="advantages__container_card">
              <div class="advantages__circle">
                <span class="advantages__circle_title">Б</span>
              </div>
              <p class="advantages__circle_text">большое пространство с развлечениями</p>
            </div>
            <div class="advantages__container_card">
              <div class="advantages__circle advantages__green">
                <span class="advantages__circle_title advantages__white">В</span>
              </div>
              <p class="advantages__circle_text">высококачественное обслуживание</p>
            </div>
            <div class="advantages__container_card">
              <div class="advantages__circle advantages__blue">
                <span class="advantages__circle_title">В</span>
              </div>
              <p class="advantages__circle_text">в рамках дня рождения проведение мастер-классов</p>
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
          <?php endif; ?>
        </div>
      </section>

      <?php include "reviews.php"; ?>

      <?php
      // Получаем данные ACF для секции стоимости
      $game_price = get_field('game_price');
      ?>
      <section class="price__section">
        <div class="price__container">
          <div class="price__container_title">
            <h4 class="price__title"><?php echo !empty($game_price['title']) ? $game_price['title'] : 'Стоимость посещения игровой'; ?></h4>
            <p class="price__text"><?php echo !empty($game_price['note']) ? $game_price['note'] : '*Для сопровождающих вход свободный'; ?></p>
          </div>
          <div class="price__cards_container">
            <div class="price__cards">
              <?php if (!empty($game_price['items'])): ?>
                <?php foreach ($game_price['items'] as $item): ?>
                  <div class="price__card">
                    <img
                      src="<?php echo !empty($item['image']) ? $item['image'] : '/wp-content/uploads/2025/04/priceO.webp'; ?>"
                      alt=""
                      class="price__card_img"
                    />
                    <div class="price__card_container">
                      <div class="price__container_img">
                        <img
                          src="<?php echo !empty($item['icon']) ? $item['icon'] : '/wp-content/uploads/2025/04/priceIconO.svg'; ?>"
                          alt=""
                          class="price__img_icon"
                        />
                        <div class="price__container_text<?php echo !empty($item['color_class']) ? ' ' . $item['color_class'] : ''; ?>">
                          <?php echo !empty($item['duration']) ? $item['duration'] : '30 минут'; ?>
                        </div>
                      </div>
                      <p class="price__price"><?php echo !empty($item['amount']) ? $item['amount'] : '300 руб/час'; ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <div class="price__card">
                  <img src="/wp-content/uploads/2025/04/priceO.webp" alt="" class="price__card_img" />
                  <div class="price__card_container">
                    <div class="price__container_img">
                      <img src="/wp-content/uploads/2025/04/priceIconO.svg" alt="" class="price__img_icon" />
                      <div class="price__container_text">30 минут</div>
                    </div>
                    <p class="price__price">300 руб/час</p>
                  </div>
                </div>
                <div class="price__card">
                  <img src="/wp-content/uploads/2025/04/priceB.webp" alt="" class="price__card_img" />
                  <div class="price__card_container">
                    <div class="price__container_img">
                      <img src="/wp-content/uploads/2025/04/priceIconB.svg" alt="" class="price__img_icon" />
                      <div class="price__container_text price__container_b">60 минут</div>
                    </div>
                    <p class="price__price">400 руб/час</p>
                  </div>
                </div>
                <div class="price__card">
                  <img src="/wp-content/uploads/2025/04/priceF.webp" alt="" class="price__card_img" />
                  <div class="price__card_container">
                    <div class="price__container_img">
                      <img src="/wp-content/uploads/2025/04/priceIconF.svg" alt="" class="price__img_icon" />
                      <div class="price__container_text price__container_f">бизлимит</div>
                    </div>
                    <p class="price__price">500 руб/час</p>
                  </div>
                </div>
              <?php endif; ?>
            </div>
            <a class="footer__button price__button open-popup">
              <?php echo !empty($game_price['button_text']) ? $game_price['button_text'] : 'заказать праздник'; ?>
            </a>
          </div>
        </div>
      </section>

      <?php include "activities.php"; ?>
    </main>

<?php get_footer(); ?>