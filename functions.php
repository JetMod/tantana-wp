<?php
/**
 * Функции и определения темы Тантана
 *
 * @package Tantana
 */

/**
 * Подключение стилей и скриптов
 * В production загружаются минифицированные версии (style.min.css, theme.min.js)
 */
function tantana_assets() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    $use_min = ! defined( 'WP_DEBUG' ) || ! WP_DEBUG;

    $css_file = ( $use_min && file_exists( $theme_dir . '/src/styles/style.min.css' ) )
        ? '/src/styles/style.min.css'
        : '/src/styles/style.css';
    wp_enqueue_style( 'maincss', $theme_uri . $css_file, array(), filemtime( $theme_dir . $css_file ) );

    $js_file = ( $use_min && file_exists( $theme_dir . '/src/script/theme.min.js' ) )
        ? '/src/script/theme.min.js'
        : '/src/script/theme.js';
    wp_enqueue_script(
        'tantana-theme',
        $theme_uri . $js_file,
        array(),
        filemtime( $theme_dir . $js_file ),
        true
    );

    // wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/src/styles/style.css.map' );
    // wp_enqueue_style( 'hamb', get_template_directory_uri() . '/src/styles/_main.scss' );
    // wp_enqueue_style( 'owl', get_template_directory_uri() . '/src/styles/_reset.scss' );
    // wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/src/fonts/icomoon/style.css' );
    // wp_enqueue_style( 'anim', get_template_directory_uri() . '/src/css/animsition.min.css' );
    // wp_enqueue_style( 'maincss', get_template_directory_uri() . '/src/css/style.css' );
    // wp_enqueue_script( 'script-all', get_template_directory_uri() . '/src/js/scripts-all.js', array(), '20151215', true );
    // wp_enqueue_script( 'main', get_template_directory_uri() . '/src/js/main.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'tantana_assets' );

add_filter( 'script_loader_tag', function( $tag, $handle ) {
    if ( 'tantana-theme' === $handle ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    return $tag;
}, 10, 2 );

// Включение поддержки миниатюр
add_theme_support( 'post-thumbnails' );

// Включение поддержки меню
add_theme_support( 'menus' );

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
  });
  

/**
 * ACF Options Page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Настройки Тантана',
        'menu_title' => 'Настройки Тантана',
        'menu_slug' => 'tantana-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/**
 * Регистрация группы ACF «Расписание занятий» из JSON
 */
add_action('acf/init', function () {
    if (!function_exists('acf_add_local_field_group')) return;
    $path = get_template_directory() . '/acf/acf-schedule.json';
    if (!is_readable($path)) return;
    $json = json_decode(file_get_contents($path), true);
    if (!empty($json) && is_array($json)) {
        foreach ($json as $group) {
            acf_add_local_field_group($group);
        }
    }
});

/**
 * Регистрация Custom Post Type "Отзывы"
 */
function tantana_register_reviews_post_type() {
    $labels = array(
        'name'               => 'Отзывы',
        'singular_name'      => 'Отзыв',
        'menu_name'          => 'Отзывы',
        'add_new'            => 'Добавить отзыв',
        'add_new_item'       => 'Добавить новый отзыв',
        'edit_item'          => 'Редактировать отзыв',
        'new_item'           => 'Новый отзыв',
        'view_item'          => 'Просмотреть отзыв',
        'search_items'       => 'Искать отзывы',
        'not_found'          => 'Отзывы не найдены',
        'not_found_in_trash' => 'В корзине нет отзывов',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'review'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array('title', 'editor', 'thumbnail'),
    );

    register_post_type('tantana_review', $args);
}
add_action('init', 'tantana_register_reviews_post_type');

/**
 * Функция для вывода заголовка с цветными буквами
 *
 * @param string $field_name Имя поля ACF с повторителем букв
 * @param string $tag HTML-тег для заголовка (h1, h2, h3, etc.)
 * @param string $class Дополнительные классы для заголовка
 */
function tantana_colored_title($field_name, $tag = 'h2', $class = '') {
    if (have_rows($field_name)) {
        echo "<{$tag} class=\"{$class}\">";
        while (have_rows($field_name)) {
            the_row();
            $letter = get_sub_field('letter');
            $color = get_sub_field('color');
            echo "<span class=\"{$color}\">{$letter}</span>";
        }
        echo "</{$tag}>";
    }
}

add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

function callback_mail() {
$name = $POST['name'];
$phone = $POST['phone'];
$consent = $POST['consent'];

$to = 'enver027@yandex.ru';
$subject = 'Тантана';
$message = 'тест';

remove_all_filters( 'wp_mail_from' );
remove_all_filters( 'wp_mail_from_name' );
	 
$headers = array(
	'From: Me Myself <me@example.net>',
	'content-type: text/html',
	'Cc: John Q Codex <jqc@wordpress.org>',
	'Cc: iluvwp@wordpress.org', // тут можно использовать только простой email адрес
	);

wp_mail( $to, $subject, $message, $headers );
wp_die();
}

// ===== SEO CONFIG (без ACF) =====
function tantana_seo_pages() {
    return [
        'front' => [
    'title' => 'Детский центр Tantana — Симферополь',
    'description' => 'Детский развлекательный центр Tantana в Симферополе: куда сходить с ребёнком — игровая комната и лабиринт, дни рождения, мастер-классы и лагерь.',
    'image' => 'https://tantana-crimea.ru/wp-content/uploads/2026/01/tantana-logo.webp',
],

'celebrations' => [
    'title' => 'День рождения ребёнка — Tantana, Симферополь',
    'description' => 'Где отметить день рождения ребёнка в Симферополе: праздник под ключ в Tantana — аниматоры, шоу, квесты, оформление, торт и кейтеринг.',
],

'gamecenter' => [
    'title' => 'Игровая комната и лабиринт — Tantana, Симферополь',
    'description' => 'Игровая комната Tantana в Симферополе: куда сходить с ребёнком — большой лабиринт, батуты, мягкая зона и активные игры в безопасном центре.',
],

'camp' => [
    'title' => 'Детский лагерь в Симферополе — Tantana Camp',
    'description' => 'Tantana Camp — городской детский лагерь в Симферополе на каникулах: игры, развитие, спорт, питание и присмотр. Отличный отдых для детей.',
],

'master-classes' => [
    'title' => 'Мастер-классы для детей — Tantana, Симферополь',
    'description' => 'Мастер-классы для детей в Симферополе: творческие и кулинарные занятия, развитие навыков и интересный досуг в детском центре Tantana.',
],

'news' => [
    'title' => 'Новости Tantana — акции и события в Симферополе',
    'description' => 'Новости детского центра Tantana в Симферополе: мероприятия, акции, расписание, новые программы и фотоотчёты. Следите за обновлениями!',
],

// Контакты (дублируем два популярных слага)
'contacts' => [
    'title' => 'Контакты Tantana — адрес и телефон, Симферополь',
    'description' => 'Контакты детского центра Tantana в Симферополе: адрес, телефон для брони, график работы и схема проезда. Напишите или позвоните — подскажем.',
],
'contact' => [
    'title' => 'Контакты Tantana — адрес и телефон, Симферополь',
    'description' => 'Контакты детского центра Tantana в Симферополе: адрес, телефон для брони, график работы и схема проезда. Напишите или позвоните — подскажем.',
],

'privacy' => [
    'title' => 'Политика обработки персональных данных — Tantana, Симферополь',
    'description' => 'Политика обработки персональных данных детского центра Tantana в Симферополе. Информация об операторе, целях и защите данных.',
],

// Мастер-классы (два слага на случай разной структуры)
'master-classes' => [
    'title' => 'Мастер-классы для детей — Tantana, Симферополь',
    'description' => 'Мастер-классы для детей в Симферополе: творческие и кулинарные занятия, развитие навыков и интересный досуг в детском центре Tantana.',
],
'master-klass' => [
    'title' => 'Мастер-классы для детей — Tantana, Симферополь',
    'description' => 'Мастер-классы для детей в Симферополе: творческие и кулинарные занятия, развитие навыков и интересный досуг в детском центре Tantana.',
],
'master-classes' => [
    'title' => 'Мастер-классы для детей — Tantana, Симферополь',
    'description' => 'Мастер-классы для детей в Симферополе: творческие и кулинарные занятия, развитие навыков и интересный досуг в детском центре Tantana.',
],
'master-class' => [
    'title' => 'Мастер-классы для детей — Tantana, Симферополь',
    'description' => 'Мастер-классы для детей в Симферополе: творческие и кулинарные занятия, развитие навыков и интересный досуг в детском центре Tantana.',
],
    ];
}

function tantana_logo_url() {
    return 'https://tantana-crimea.ru/wp-content/uploads/2026/01/tantana-logo.webp';
}

// Получаем h1 для single: сначала ACF hero, затем заголовок поста
function tantana_get_single_heading($post_id = null) {
    $post_id = $post_id ?: get_the_ID();
    if (!$post_id) return '';

    $hero = get_field('newsblog_hero', $post_id);
    if (!empty($hero['title'])) {
        return trim($hero['title']);
    }

    $title = get_the_title($post_id);
    return $title ? trim($title) : '';
}

add_filter('pre_get_document_title', function ($title) {
    $pages = tantana_seo_pages();

    if (is_front_page() && isset($pages['front'])) {
        return $pages['front']['title'];
    }

    if (is_single()) {
        $heading = tantana_get_single_heading();
        return $heading ? ($heading . ' — новости Tantana в Симферополе') : $title;
    }

    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        if (isset($pages[$slug]['title'])) {
            return $pages[$slug]['title'];
        }
    }

    return $title;
}, 20);

add_action('wp_head', function () {
    $pages = tantana_seo_pages();
    $data  = [];
    $og_type = 'website';

    // Определяем страницу
    if (is_front_page()) {
        $data = $pages['front'] ?? [];
    } elseif (is_single()) {
        $og_type = 'article';
        $post_id = get_the_ID();
        $heading = tantana_get_single_heading($post_id);
        $excerpt = get_the_excerpt($post_id);
        if (empty($excerpt)) {
            $excerpt = wp_trim_words(wp_strip_all_tags(get_post_field('post_content', $post_id)), 24, '...');
        }
        $thumb  = get_the_post_thumbnail_url($post_id, 'full');
        $data = [
            'title' => $heading ? ($heading . ' — новости Tantana в Симферополе') : '',
            'description' => $excerpt ?: '',
            'image' => $thumb ?: 'https://tantana-crimea.ru/wp-content/uploads/2026/01/tantana-logo.webp',
        ];
    } elseif (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        $data = $pages[$slug] ?? [];
    }

    $default_desc = get_bloginfo('description') ?: 'Детский развлекательный центр Tantana в Симферополе';
    $data = !empty($data) ? $data : [
        'title' => wp_get_document_title(),
        'description' => $default_desc,
        'image' => tantana_logo_url(),
    ];

    $title = $data['title'] ?? wp_get_document_title();
    $desc  = $data['description'] ?? $default_desc;
    $image = $data['image'] ?? tantana_logo_url();
    $url   = esc_url(is_front_page() ? home_url('/') : get_permalink());

    echo "\n";
    if (!empty($desc)) {
        echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
      }

    // Open Graph
    echo '<meta property="og:locale" content="ru_RU">' . "\n";
    echo '<meta property="og:type" content="' . esc_attr($og_type) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    
    echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";

    echo '<meta property="og:url" content="' . $url . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
    echo '<meta property="og:image:alt" content="' . esc_attr($title) . '">' . "\n";

    // Twitter
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:site" content="+79788884308">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
    echo "\n";
}, 20);

// Структурированные данные для главной страницы
add_action('wp_head', function () {
    if (!is_front_page()) {
        return;
    }

    $pages    = tantana_seo_pages();
    $front    = $pages['front'] ?? [];
    $site_url = esc_url(home_url('/'));
    $logo     = esc_url($front['image'] ?? tantana_logo_url());
    $name     = get_bloginfo('name');
    $desc     = $front['description'] ?? get_bloginfo('description');

    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'            => 'WebSite',
                '@id'              => $site_url . '#website',
                'url'              => $site_url,
                'name'             => $front['title'] ?? $name,
                'description'      => $desc,
                'publisher'        => ['@id' => $site_url . '#organization'],
                'inLanguage'       => 'ru-RU',
            ],
            [
                '@type'  => 'Organization',
                '@id'    => $site_url . '#organization',
                'name'   => $name ?: 'Tantana',
                'url'    => $site_url,
                'logo'   => [
                    '@type' => 'ImageObject',
                    'url'   => $logo,
                ],
            ],
        ],
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}, 30);

// Структурированные данные для отдельных новостей
add_action('wp_head', function () {
    if (!is_single()) {
        return;
    }

    $post_id = get_the_ID();
    $title   = tantana_get_single_heading($post_id);
    $desc    = get_the_excerpt($post_id);
    if (empty($desc)) {
        $desc = wp_trim_words(wp_strip_all_tags(get_post_field('post_content', $post_id)), 24, '...');
    }
    $image = get_the_post_thumbnail_url($post_id, 'full') ?: tantana_logo_url();
    $url   = esc_url(get_permalink($post_id));
    $site  = esc_url(home_url('/'));
    $name  = get_bloginfo('name') ?: 'Tantana';
    $date_published = get_the_date('c', $post_id);
    $date_modified  = get_the_modified_date('c', $post_id);
    $author_name    = get_the_author_meta('display_name', get_post_field('post_author', $post_id)) ?: $name;

    $schema = [
        '@context' => 'https://schema.org',
        '@type'    => 'NewsArticle',
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id'   => $url,
        ],
        'headline' => $title,
        'description' => $desc,
        'image' => [$image],
        'datePublished' => $date_published,
        'dateModified'  => $date_modified,
        'author' => [
            '@type' => 'Person',
            'name'  => $author_name,
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name'  => $name,
            'logo'  => [
                '@type' => 'ImageObject',
                'url'   => tantana_logo_url(),
            ],
        ],
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}, 30);

// LocalBusiness + Breadcrumbs
add_action('wp_head', function () {
    $site_url = esc_url(home_url('/'));
    $name     = get_bloginfo('name') ?: 'Tantana';
    $logo     = tantana_logo_url();

    // Breadcrumbs
    $breadcrumbs = [];
    $position = 1;
    $breadcrumbs[] = [
        '@type' => 'ListItem',
        'position' => $position++,
        'name' => 'Главная',
        'item' => $site_url,
    ];
    if (is_single()) {
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => 'Новости',
            'item' => esc_url(home_url('/news/')),
        ];
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => wp_strip_all_tags(tantana_get_single_heading()),
            'item' => esc_url(get_permalink()),
        ];
    } elseif (is_page()) {
        $breadcrumbs[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => wp_strip_all_tags(get_the_title()),
            'item' => esc_url(get_permalink()),
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type' => 'BreadcrumbList',
                'itemListElement' => $breadcrumbs,
            ],
            [
                '@type' => 'LocalBusiness',
                '@id'   => $site_url . '#local',
                'name'  => $name,
                'image' => $logo,
                'url'   => $site_url,
                'telephone' => '+7 978 888 43 08',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressCountry' => 'RU',
                    'addressRegion' => 'Республика Крым',
                    'addressLocality' => 'Симферополь',
                    'streetAddress' => 'ул. Генерала Васильева, 40а',
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 44.931603,
                    'longitude' => 34.073519,
                ],
                'openingHoursSpecification' => [
                    [
                        '@type' => 'OpeningHoursSpecification',
                        'dayOfWeek' => [
                            'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'
                        ],
                        'opens' => '10:00',
                        'closes' => '21:00',
                    ]
                ],
                // Условно средний ценовой уровень в рублях
                'priceRange' => '₽₽',
                'sameAs' => [
                    'https://vk.com/strana_tantana',
                ],
            ],
        ],
    ];

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";
}, 32);
