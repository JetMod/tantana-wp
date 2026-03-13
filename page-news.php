<?php get_header(); ?>

<?php
/* Template Name: news */
?>

<main class="main">
      <?php
      // Получаем данные ACF для секции Hero
      $news_hero = get_field('news_hero');
      ?>
      <section class="new">
        <div class="contact__title_container new__title">
          <h1 class="contact__title"><?php echo !empty($news_hero['title']) ? $news_hero['title'] : 'НОВОСТИ'; ?>
            <span style="position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap; border:0;">
              Новости детского центра «Тантана» и обновления мероприятий
            </span>
          </h1>
          <span class="contact__title-shadow"><?php echo !empty($news_hero['title']) ? $news_hero['title'] : 'НОВОСТИ'; ?> </span>
        </div>
        <div class="new__cards">
          <?php
            $news_order = get_field('module_news_order', 'option') ?: 'date';
            // Определяем параметры запроса
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 50,
              'post_status' => 'publish'
            );

            // Устанавливаем порядок сортировки
            if ($news_order == 'date') {
              $args['orderby'] = 'date';
              $args['order'] = 'DESC';
            } elseif ($news_order == 'date_asc') {
                $args['orderby'] = 'date';
                $args['order'] = 'ASC';
            } elseif ($news_order == 'random') {
                $args['orderby'] = 'rand';
            }
            $news_query = new WP_Query($args);
            // Если новости не найдены, показываем демо-новости
            if (!$news_query->have_posts()) {
              ?>
               <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card">
                  <img src="/wp-content/uploads/2025/04/new1.png" alt="Летние развлечения в детском центре развития и развлечения TANTANA" class="new__img" />
                  <h2 class="new__text">
                    Летние развлечения в детском центре развития и развлечения TANTANA
                  </h2>
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card new__none new__none_d2">
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card">
                  <img src="/wp-content/uploads/2025/04/new2.png" alt="Новый мастер-класс по готовке" class="new__img" />
                  <h2 class="new__text">Новый мастер-класс по готовке</h2>
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card">
                  <img src="/wp-content/uploads/2025/04/new3.png" alt="Детский центр представляет новые развивающие программы" class="new__img" />
                  <h2 class="new__text">
                    детский центр представляет новые развивающие программы
                  </h2>
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card new__none new__none_d">
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card new__none new__none_d2">
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card">
                  <img src="/wp-content/uploads/2025/04/new4.png" alt="Как сделать лето незабываемым: летние каникулы с пользой" class="new__img" />
                  <h2 class="new__text">
                    Как сделать лето незабываемым: летние каникулы с пользой
                  </h2>
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card new__none new__none_d">
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card">
                  <img src="/wp-content/uploads/2025/04/new5.png" alt="Творческие мастер-классы: учимся делать поделки вместе" class="new__img" />
                  <h2 class="new__text">
                    Творческие мастер-классы: учимся делать поделки вместе
                  </h2>
                </div>
              </a>
              <a href="<?php echo site_url('/newsBlog'); ?>" class="new__card-link">
                <div class="new__card">
                  <img src="/wp-content/uploads/2025/04/new6.png" alt="Развивайся с удовольствием: мир ярких открытий" class="new__img" />
                  <h2 class="new__text">
                    Развивайся с удовольствием: мир ярких открытий
                  </h2>
                </div>
              </a>
            <?php
          } else {
            // Выводим новости из базы данных
            while ($news_query->have_posts()) {
              $news_query->the_post();
                    
              $news_short_description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20, '...');
              $news_title = get_the_title();
              $post_thumbnail_id = get_post_thumbnail_id();
              $post_thumbnail = '';
              $news_image = null;
              
              if ($post_thumbnail_id) {
                  $post_thumbnail_url = wp_get_attachment_image_url($post_thumbnail_id, 'medium');
                  $news_image = esc_url($post_thumbnail_url);
              }
              
              $news_button = $news_button_text;
              
              // Если изображение не задано, используем стандартное
              if (!$news_image) {
                  $news_image = '/wp-content/uploads/2025/04/new1.png';
              }
              ?>
               <a href="<?php the_permalink(); ?>" class="new__card-link">
                <div class="new__card">
                  <img src="<?php echo $news_image; ?>" alt="<?php echo $news_title ?: 'Новость центра «Тантана»'; ?>" class="new__img" />
                  <h2 class="new__text">
                    <?php echo $news_short_description; ?>
                  </h2>
                </div>
              </a>
              <?php
            }
          }
          ?>
        </div>
      </section>
      <?php
      // Получаем данные ACF для секции категорий
      $news_category = get_field('news_category');
      ?>
      <section class="new-category">
        <h2 class="new__text_h2">
          <?php echo !empty($news_category['title']) ? $news_category['title'] : 'В <span class="new__span"> "TANTANA" </span> каждый найдет что-то <span class="new__span"> по душе </span>'; ?>
        </h2>

        <div class="new-category__container">
          <?php if (!empty($news_category['items'])): ?>
            <?php foreach ($news_category['items'] as $item): ?>
              <div class="new-category__card">
                <?php
                // Отображаем нужное количество кубиков
                $cubes_count = !empty($item['cubes']) ? intval($item['cubes']) : 2;
                for ($i = 0; $i < $cubes_count; $i++):
                ?>
                  <span class="new-category__card_cube_container">
                    <span class="new-category__card_cube"></span>
                  </span>
                <?php endfor; ?>
                
                <div class="new-category__card_inner">
                  <p class="new-category__title"><?php echo !empty($item['title']) ? $item['title'] : 'Новое'; ?></p>
                  <img
                    src="<?php echo !empty($item['image']) ? $item['image'] : '/wp-content/uploads/2025/04/news1.png'; ?>"
                    alt="<?php echo !empty($item['title']) ? $item['title'] : 'Новость центра «Тантана»'; ?>"
                    class="new-category__img"
                  />
                  <p class="new-category__text"><?php echo !empty($item['text']) ? $item['text'] : ''; ?></p>
                  <p class="new-category__data"><?php echo !empty($item['date']) ? $item['date'] : date('d.m.y'); ?></p>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else: ?>
            <div class="new-category__card">
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <div class="new-category__card_inner">
                <p class="new-category__title">Новое</p>
                <img
                  src="/wp-content/uploads/2025/04/news1.png"
                  alt="Шоу с участием сказочных героев"
                  class="new-category__img"
                />
                <p class="new-category__text">Шоу с участием сказочных героев</p>
                <p class="new-category__data">06.08.24</p>
              </div>
            </div>
            <div class="new-category__card">
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <div class="new-category__card_inner">
                <p class="new-category__title">Советы</p>
                <img
                  src="/wp-content/uploads/2025/04/news2.png"
                  alt="какие Конкурсы и игры будут интересны детям"
                  class="new-category__img"
                />
                <p class="new-category__text">
                  какие Конкурсы и игры будут интересны детям
                </p>
                <p class="new-category__data">28.07.24</p>
              </div>
            </div>
            <div class="new-category__card">
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <div class="new-category__card_inner">
                <p class="new-category__title">Новое</p>
                <img
                  src="/wp-content/uploads/2025/04/news3.png"
                  alt="День рождения в стиле мультфильма"
                  class="new-category__img"
                />
                <p class="new-category__text">
                  День рождения в стиле мультфильма
                </p>
                <p class="new-category__data">10.08.24</p>
              </div>
            </div>
            <div class="new-category__card">
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <span class="new-category__card_cube_container">
                <span class="new-category__card_cube"></span>
              </span>
              <div class="new-category__card_inner">
                <p class="new-category__title">Новое</p>
                <img
                  src="/wp-content/uploads/2025/04/news4.png"
                  alt="Новый аттракцион: веселые горки для самых маленьких"
                  class="new-category__img"
                />
                <p class="new-category__text">
                  Новый аттракцион: веселые горки для самых маленьких
                </p>
                <p class="new-category__data">11.09.24</p>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </section>
    </main>

<?php get_footer(); ?>