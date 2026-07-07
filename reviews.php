<section class="reviews__section">
        <h2 class="reviews__title"><?php echo get_field('module_reviews_title', 'option') ?: 'Отзывы'; ?></h2>
        <div class="reviews__container">
            <?php
            // Получаем настройки модуля отзывов
            $reviews_count = get_field('module_reviews_count', 'option') ?: 5;
            $reviews_order = get_field('module_reviews_order', 'option') ?: 'date';
            $reviews_custom = get_field('module_reviews_custom', 'option');
            
            // Определяем параметры запроса
            $args = array(
                'post_type' => 'tantana_review',
                'posts_per_page' => $reviews_count,
                'post_status' => 'publish'
            );
            
            // Устанавливаем порядок сортировки
            if ($reviews_order == 'date') {
                $args['orderby'] = 'date';
                $args['order'] = 'DESC';
            } elseif ($reviews_order == 'date_asc') {
                $args['orderby'] = 'date';
                $args['order'] = 'ASC';
            } elseif ($reviews_order == 'random') {
                $args['orderby'] = 'rand';
            }
            
            // Если выбраны конкретные отзывы
            if ($reviews_custom && !empty(get_field('module_reviews_selected', 'option'))) {
                $args['post__in'] = get_field('module_reviews_selected', 'option');
                $args['orderby'] = 'post__in';
            }
            
            $reviews_query = new WP_Query($args);
            
            // Если отзывы не найдены, показываем демо-отзывы
            if (!$reviews_query->have_posts()) {
                // Демо-отзывы
                $demo_reviews = array(
                    array(
                        'text' => 'Мы ходим в Тантана на занятия по шахматам и мы в полном восторге! Сын с нетерпением ждёт каждое занятие и с удовольствием делает задания по рекомендованным преподавателем книгам дома! Теперь в шахматы играет вся наша семья!',
                        'author' => 'Лола',
                        'avatar' => '/wp-content/uploads/2025/04/reviewsAva.svg',
                        'color' => 'default',
                        'icon' => '/wp-content/uploads/2025/04/reviewsIcon.svg'
                    ),
                    array(
                        'text' => 'Мы ходим в Тантана на занятия по шахматам и мы в полном восторге! Сын с нетерпением ждёт каждое занятие и с удовольствием делает задания по рекомендованным преподавателем книгам дома! Теперь в шахматы играет вся наша семья!',
                        'author' => 'Татьяна',
                        'avatar' => '/wp-content/uploads/2025/04/reviewsAva2.svg',
                        'color' => 'white',
                        'icon' => '/wp-content/uploads/2025/04/reviewsIcon.svg'
                    ),
                    array(
                        'text' => 'Мы ходим в Тантана на занятия по шахматам и мы в полном восторге! Сын с нетерпением ждёт каждое занятие и с удовольствием делает задания по рекомендованным преподавателем книгам дома! Теперь в шахматы играет вся наша семья!',
                        'author' => 'Людмила',
                        'avatar' => '/wp-content/uploads/2025/04/reviewsAva.svg',
                        'color' => 'green',
                        'icon' => '/wp-content/uploads/2025/04/reviewsIconWhite.svg'
                    )
                );
                
                foreach ($demo_reviews as $review) {
                    $card_class = '';
                    $text_class = '';
                    $icon_class = '';
                    $name_class = '';
                    
                    if ($review['color'] == 'white') {
                        $card_class = ' reviews__white';
                    } elseif ($review['color'] == 'green') {
                        $card_class = ' reviews__green';
                        $text_class = ' reviews__white_text';
                        $icon_class = ' reviews__icon_white';
                        $name_class = ' reviews__white_text';
                    }
                    ?>
                    <div class="reviews__card<?php echo $card_class; ?>">
                        <img loading="lazy"
                                src="<?php echo $review['icon']; ?>"
                                alt="Иконка отзыва"
                                class="reviews__icon<?php echo $icon_class; ?>"
                        />
                        <p class="reviews__text<?php echo $text_class; ?>">
                            <?php echo $review['text']; ?>
                        </p>
                        <div class="reviews__card_container">
                            <img loading="lazy"
                                    src="<?php echo $review['avatar']; ?>"
                                    alt="Автор отзыва: <?php echo $review['author']; ?>"
                                    class="reviews__avatar"
                            />
                            <p class="reviews__name<?php echo $name_class; ?>"><?php echo $review['author']; ?></p>
                        </div>
                    </div>
                    <?php
                }
            } else {
                // Выводим отзывы из базы данных
                while ($reviews_query->have_posts()) {
                    $reviews_query->the_post();
                    
                    $review_text = get_field('review_text');
                    $review_author = get_field('review_author');
                    $review_avatar = get_field('review_avatar');
                    $review_color = get_field('review_card_color');
                    $review_icon = get_field('review_icon');
                    
                    $card_class = '';
                    $text_class = '';
                    $icon_class = '';
                    $name_class = '';
                    
                    if ($review_color == 'white') {
                        $card_class = ' reviews__white';
                    } elseif ($review_color == 'green') {
                        $card_class = ' reviews__green';
                        $text_class = ' reviews__white_text';
                        $icon_class = ' reviews__icon_white';
                        $name_class = ' reviews__white_text';
                    }
                    
                    // Если иконка не задана, используем стандартную
                    if (!$review_icon) {
                        if ($review_color == 'green') {
                            $review_icon = '/wp-content/uploads/2025/04/reviewsIconWhite.svg';
                        } else {
                            $review_icon = '/wp-content/uploads/2025/04/reviewsIcon.svg';
                        }
                    }
                    
                    // Если аватар не задан, используем стандартный
                    if (!$review_avatar) {
                        $review_avatar = '/wp-content/uploads/2025/04/reviewsAva.svg';
                    }
                    ?>
                    <div class="reviews__card<?php echo $card_class; ?>">
                        <img loading="lazy"
                                src="<?php echo $review_icon; ?>"
                                alt="Иконка отзыва"
                                class="reviews__icon<?php echo $icon_class; ?>"
                        />
                        <p class="reviews__text<?php echo $text_class; ?>">
                            <?php echo $review_text; ?>
                        </p>
                        <div class="reviews__card_container">
                            <img loading="lazy"
                                    src="<?php echo $review_avatar; ?>"
                                    alt="Автор отзыва: <?php echo $review_author ?: 'Гость'; ?>"
                                    class="reviews__avatar"
                            />
                            <p class="reviews__name<?php echo $name_class; ?>"><?php echo $review_author; ?></p>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            }
            ?>
        </div>
        <div class="reviews__controls" aria-label="Управление слайдером отзывов">
            <button class="reviews__arrow reviews__arrow_prev" type="button" aria-label="Предыдущий отзыв">
                <span aria-hidden="true">&#8592;</span>
            </button>
            <button class="reviews__arrow reviews__arrow_next" type="button" aria-label="Следующий отзыв">
                <span aria-hidden="true">&#8594;</span>
            </button>
        </div>
    </section>