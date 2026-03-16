<?php get_header(); ?>

<?php
/* Template Name: newsBlog */
?>

<main class="main">
      <?php
      // Получаем данные ACF для секции Hero
      $newsblog_hero = get_field('newsblog_hero');
      $newsblog_title = !empty($newsblog_hero['title']) ? $newsblog_hero['title'] : 'Летние развлечения в детском центре «Тантана»';
      ?>
      <section class="news-blog">
        <div class="news-blog__container">
          <div class="news-blog__left">
            <span class="news-blog__left_span"><?php echo !empty($newsblog_hero['date']) ? $newsblog_hero['date'] : '12 июня 2024'; ?></span>
            <h2 class="news-blog__left_title">
              <?php echo $newsblog_title; ?>
            </h2>
            <span class="news-blog__left_span"> <?php echo !empty($newsblog_hero['tag']) ? $newsblog_hero['tag'] : 'новое'; ?> </span>
          </div>

          <div class="news-blog__center">
            <img loading="lazy"
              src="<?php echo !empty($newsblog_hero['center_image']) ? $newsblog_hero['center_image'] : '/wp-content/uploads/2025/04/newsCenter.png'; ?>"
              alt="<?php echo $newsblog_title; ?>"
              class="news-blog__fon"
            />
            <div class="news-blog__center_container">
              <h1 class="news-blog__center_title">
                <?php echo $newsblog_title; ?>
              </h1>
              <img loading="lazy"
                src="<?php echo !empty($newsblog_hero['content_image']) ? $newsblog_hero['content_image'] : '/wp-content/uploads/2025/04/newsCenteriMG.png'; ?>"
                alt="<?php echo $newsblog_title; ?>"
                class="news-blog__center_img"
              />
            </div>
          </div>

          <div class="news-blog__left news-blog__right">
            <span class="news-blog__left_span"><?php echo !empty($newsblog_hero['date']) ? $newsblog_hero['date'] : '12 июня 2024'; ?></span>
            <h2 class="news-blog__left_title">
              <?php echo $newsblog_title; ?>
            </h2>
            <span class="news-blog__left_span"> <?php echo !empty($newsblog_hero['tag']) ? $newsblog_hero['tag'] : 'новое'; ?> </span>
          </div>
        </div>
      </section>

      <?php
      // Получаем данные ACF для текстовой секции
      $newsblog_text = get_field('newsblog_text');
      ?>
      <section class="news-blog__text">
        <p class="news-blog__data"><?php echo !empty($newsblog_text['date']) ? $newsblog_text['date'] : '12.06.24'; ?></p>
        <div class="news-blog__container_text">
          <?php if (!empty($newsblog_text['paragraphs'])): ?>
            <?php foreach ($newsblog_text['paragraphs'] as $index => $paragraph): ?>
              <p class="news-blog__container_text<?php echo $index + 1; ?>">
                <?php echo $paragraph['text']; ?>
              </p>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="news-blog__container_text1">
              Вот и наступило лето — время, когда дети получают вдвойне больше
              энергии и жажды новых впечатлений.
            </p>
            <p class="news-blog__container_text2">
              Детский центр развития и развлечения "Тантан" готов радовать своих
              маленьких гостей каждый день, наполняя их жизнь яркими и
              увлекательными событиями.
            </p>
            <p class="news-blog__container_text3">
              В "Тантан" каждый найдет что-то по душе — от увлекательных
              мастер-классов и занимательных игр до уникальных образовательных
              программ. У каждого ребенка возможность расти и развиваться в уютной
              и безопасной обстановке, окруженным заботой и вниманием опытных
              педагогов.
            </p>
          <?php endif; ?>
        </div>
      </section>

      <?php
      // Получаем данные ACF для секции изображений
      $newsblog_images = get_field('newsblog_images');
      ?>
      <section class="news-blog__img">
        <div class="news-blog__img_container">
          <?php if (!empty($newsblog_images['top'])): ?>
            <?php foreach ($newsblog_images['top'] as $image): ?>
              <img loading="lazy"
                src="<?php echo !empty($image['image']) ? $image['image'] : '/wp-content/uploads/2025/04/newsimg1.png'; ?>"
                alt="<?php echo !empty($image['alt']) ? $image['alt'] : $newsblog_title; ?>"
                class="news-blog__img_container_img"
              />
            <?php endforeach; ?>
          <?php else: ?>
            <img loading="lazy"
              src="/wp-content/uploads/2025/04/newsimg1.png"
              alt="<?php echo $newsblog_title; ?>"
              class="news-blog__img_container_img"
            />
            <img loading="lazy"
              src="/wp-content/uploads/2025/04/newsimg2.png"
              alt="<?php echo $newsblog_title; ?>"
              class="news-blog__img_container_img"
            />
          <?php endif; ?>
        </div>

        <div class="news-blog__img_container2">
          <?php if (!empty($newsblog_images['bottom'])): ?>
            <img loading="lazy"
              src="<?php echo !empty($newsblog_images['bottom']['image']) ? $newsblog_images['bottom']['image'] : '/wp-content/uploads/2025/04/newsimg3.png'; ?>"
              alt="<?php echo !empty($newsblog_images['bottom']['alt']) ? $newsblog_images['bottom']['alt'] : $newsblog_title; ?>"
              class="news-blog__img_container2_img"
            />
            <p class="news-blog__img_container2_text">
              <?php echo !empty($newsblog_images['bottom']['text']) ? $newsblog_images['bottom']['text'] : 'Новости центра развития и развлечения "Тантан" обещают быть насыщенными и захватывающими! Подпишитесь на нашу рассылку, чтобы быть в курсе самых интересных событий и акций. Приходите в "Тантан" — и вместе мы создадим незабываемые воспоминания для наших детей!'; ?>
            </p>
            <p class="news-blog__img_container2_text-bottom">
              <?php echo !empty($newsblog_images['bottom']['text_bottom']) ? $newsblog_images['bottom']['text_bottom'] : 'Запланируйте лето в "Тантан" — и пусть каждый день вашего ребенка будет наполнен радостью, улыбками и новыми открытиями!'; ?>
            </p>
          <?php else: ?>
            <img loading="lazy"
              src="/wp-content/uploads/2025/04/newsimg3.png"
              alt="<?php echo $newsblog_title; ?>"
              class="news-blog__img_container2_img"
            />
            <p class="news-blog__img_container2_text">
              Новости центра развития и развлечения "Тантан" обещают быть
              насыщенными и захватывающими! Подпишитесь на нашу рассылку, чтобы
              быть в курсе самых интересных событий и акций. Приходите в "Тантан"
              — и вместе мы создадим незабываемые воспоминания для наших детей!
            </p>
            <p class="news-blog__img_container2_text-bottom">
              Запланируйте лето в "Тантан" — и пусть каждый день вашего ребенка
              будет наполнен радостью, улыбками и новыми открытиями!
            </p>
          <?php endif; ?>
        </div>
      </section>
     
      <?php include "news.php"; ?>
    </main>

<?php get_footer(); ?>