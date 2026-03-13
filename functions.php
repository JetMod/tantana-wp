<?php
/**
 * Функции и определения темы Тантана
 *
 * @package Tantana
 */

/**
 * Подключение стилей и скриптов
 */
function tantana_assets() {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/src/styles/style.css' );
    wp_enqueue_style( 'css', get_template_directory_uri() . '/style.css' );

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

// Включение поддержки миниатюр
add_theme_support( 'post-thumbnails' );

// Включение поддержки меню
add_theme_support( 'menus' );

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