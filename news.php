<section class="news">
        <div class="news__container">
            <h2 class="news__title"><?php echo get_field('module_news_title', 'option') ?: 'Новости'; ?></h2>
            <a href="<?php echo site_url('/news'); ?>" class="news__all"><?php echo get_field('module_news_all_link_text', 'option') ?: 'Все новости'; ?></a>
        </div>

        <ul class="news__cards">
            <?php
            // Получаем настройки модуля новостей
            $news_count = get_field('module_news_count', 'option') ?: 6;
            $news_order = get_field('module_news_order', 'option') ?: 'date';
            $news_custom = get_field('module_news_custom', 'option');
            $news_button_text = get_field('module_news_button_text', 'option') ?: 'узнать больше';
            
            // Определяем параметры запроса
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $news_count,
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
            
            // Если выбраны конкретные новости
            if ($news_custom && !empty(get_field('module_news_selected', 'option'))) {
                $args['post__in'] = get_field('module_news_selected', 'option');
                $args['orderby'] = 'post__in';
            }
            
            $news_query = new WP_Query($args);
            
            // Если новости не найдены, показываем демо-новости
            if (!$news_query->have_posts()) {
                // Демо-новости
                $demo_news = array(
                    array(
                        'image' => '/wp-content/uploads/2025/04/news1.webp',
                        'text' => 'счастливые часы 3 часа развлечений по цене одного, в будние дни с 10:00 до 13:00',
                        'color' => 'default'
                    ),
                    array(
                        'image' => '/wp-content/uploads/2025/04/news2.webp',
                        'text' => 'Многодетным семьям и детям с ограниченными возможностями -30% на посещение игровой в будние дни',
                        'color' => 'white'
                    ),
                    array(
                        'image' => '/wp-content/uploads/2025/04/news3.webp',
                        'text' => 'Именинникам -50% на посещение игровой',
                        'color' => 'white'
                    ),
                    array(
                        'image' => '/wp-content/uploads/2025/04/news4.webp',
                        'text' => 'Летние развлечения в детском центре развития и развлечения TANTANA',
                        'color' => 'white'
                    ),
                    array(
                        'image' => '/wp-content/uploads/2025/04/news1.webp',
                        'text' => 'Именинникам -50% на посещение игровой',
                        'color' => 'white'
                    ),
                    array(
                        'image' => '/wp-content/uploads/2025/04/news2.webp',
                        'text' => 'Летние развлечения в детском центре развития и развлечения TANTANA',
                        'color' => 'white'
                    )
                );
                
                foreach ($demo_news as $news) {
                    $text_class = '';
                    if ($news['color'] == 'white') {
                        $text_class = ' news__card_text-white';
                    }
                    ?>
                    <li class="news__card">
                        <img
                                src="<?php echo $news['image']; ?>"
                                alt="Торжество Tantana"
                                class="news__img"
                        />
                        <div class="news__container_card">
                            <p class="news__card_text<?php echo $text_class; ?>">
                                <?php echo $news['text']; ?>
                            </p>
                            <a href="<?php echo site_url('/news'); ?>" class="news__button"><?php echo $news_button_text; ?></a>
                        </div>
                    </li>
                    <?php
                }
            } else {
                // Выводим новости из базы данных
                while ($news_query->have_posts()) {
                    $news_query->the_post();
                    
                    $news_short_description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 20, '...');
                    $post_thumbnail_id = get_post_thumbnail_id();
                    $post_thumbnail = '';
                    $news_image = get_field('news_image');
                    
                    $news_button = $news_button_text;
                    
                    
                    // Если изображение не задано, используем стандартное
                    if (!$news_image) {
                        $news_image = '/wp-content/uploads/2025/04/news1.webp';
                    }

                    ?>
                    <li class="news__card">
                        <img
                                src="<?php echo $news_image; ?>"
                                alt="<?php the_title(); ?>"
                                class="news__img"
                        />
                        <div class="news__container_card">
                            <p class="news__card_text<?php echo $text_class; ?>">
                                <?php echo $news_short_description; ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="news__button"><?php echo $news_button; ?></a>
                        </div>
                    </li>
                    <?php
                }
                wp_reset_postdata();
            }
            ?>
        </ul>
    </section>
