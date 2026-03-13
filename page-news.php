<?php get_header(); ?>

<?php
/* Template Name: news */
?>

<main class="main">
      <?php
      // Получаем данные ACF для секции Hero
      $news_hero = get_field('news_hero');
      ?>
      <section class="news-page">
        <header class="news-page__hero">
          <h1 class="news-page__title"><?php echo !empty($news_hero['title']) ? esc_html($news_hero['title']) : 'Новости'; ?></h1>
          <p class="news-page__subtitle"><?php echo !empty($news_hero['subtitle']) ? esc_html($news_hero['subtitle']) : 'Актуальные события и обновления детского центра «Тантана»'; ?></p>
        </header>
        <div class="news-page__grid">
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
              $demo_items = array(
                array('img' => '/wp-content/uploads/2025/04/new1.png', 'title' => 'Летние развлечения в детском центре TANTANA', 'url' => site_url('/newsBlog'), 'date' => date('d.m.Y')),
                array('img' => '/wp-content/uploads/2025/04/new2.png', 'title' => 'Новый мастер-класс по готовке', 'url' => site_url('/newsBlog'), 'date' => date('d.m.Y')),
                array('img' => '/wp-content/uploads/2025/04/new3.png', 'title' => 'Детский центр представляет новые развивающие программы', 'url' => site_url('/newsBlog'), 'date' => date('d.m.Y')),
                array('img' => '/wp-content/uploads/2025/04/new4.png', 'title' => 'Как сделать лето незабываемым', 'url' => site_url('/newsBlog'), 'date' => date('d.m.Y')),
                array('img' => '/wp-content/uploads/2025/04/new5.png', 'title' => 'Творческие мастер-классы: поделки вместе', 'url' => site_url('/newsBlog'), 'date' => date('d.m.Y')),
                array('img' => '/wp-content/uploads/2025/04/new6.png', 'title' => 'Развивайся с удовольствием: мир ярких открытий', 'url' => site_url('/newsBlog'), 'date' => date('d.m.Y')),
              );
              foreach ($demo_items as $item): ?>
              <a href="<?php echo esc_url($item['url']); ?>" class="news-card">
                <div class="news-card__image-wrap">
                  <img src="<?php echo esc_url($item['img']); ?>" alt="<?php echo esc_attr($item['title']); ?>" class="news-card__img" />
                  <span class="news-card__date"><?php echo esc_html($item['date']); ?></span>
                </div>
                <div class="news-card__content">
                  <h2 class="news-card__title"><?php echo esc_html($item['title']); ?></h2>
                </div>
              </a>
            <?php endforeach;
          } else {
            while ($news_query->have_posts()) {
              $news_query->the_post();
              $news_title = get_the_title();
              $news_excerpt = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 18, '...');
              $news_date = get_the_date('d.m.Y');
              $post_thumbnail_id = get_post_thumbnail_id();
              $news_image = $post_thumbnail_id ? wp_get_attachment_image_url($post_thumbnail_id, 'medium') : null;
              if (!$news_image) $news_image = '/wp-content/uploads/2025/04/new1.png';
              ?>
              <a href="<?php the_permalink(); ?>" class="news-card">
                <div class="news-card__image-wrap">
                  <img src="<?php echo esc_url($news_image); ?>" alt="<?php echo esc_attr($news_title ?: 'Новость'); ?>" class="news-card__img" />
                  <span class="news-card__date"><?php echo esc_html($news_date); ?></span>
                </div>
                <div class="news-card__content">
                  <h2 class="news-card__title"><?php echo esc_html($news_title); ?></h2>
                  <p class="news-card__excerpt"><?php echo esc_html($news_excerpt); ?></p>
                </div>
              </a>
              <?php
            }
          }
          wp_reset_postdata();
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