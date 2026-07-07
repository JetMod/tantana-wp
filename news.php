<?php
// ============================================================
// НАСТРОЙКИ БЛОКА НОВОСТЕЙ
// Чтобы изменить новость — отредактируйте массив ниже.
// Чтобы добавить новость — скопируйте один блок и вставьте.
// ============================================================

$news_title = 'Новости';
$news_all_text = 'Все новости';
$news_all_link = '/news';

$news_items = [
    [
        'image' => '/wp-content/uploads/2025/04/news2.webp',
        'text' => 'Многодетным семьям и детям с ограниченными возможностями -30% на посещение игровой в будние дни',
        'link' => '/news/mnogodetnym-skidka',
        'button_text' => 'узнать больше',
        'text_white' => true,
    ],
    [
        'image' => '/wp-content/uploads/2025/04/news3.webp',
        'text' => 'Именинникам -50% на посещение игровой комнаты',
        'link' => '/news',
        'button_text' => 'узнать больше',
        'text_white' => true,
    ],
    [
        'image' => '/wp-content/uploads/2025/04/news4.webp',
        'text' => 'Летние развлечения в детском центре развития и развлечения TANTANA',
        'link' => '/news',
        'button_text' => 'узнать больше',
        'text_white' => true,
    ],
];
?>

<section class="news">
    <div class="news__container">
        <h2 class="news__title"><?php echo esc_html($news_title); ?></h2>
        <a href="<?php echo esc_url(site_url($news_all_link)); ?>" class="news__all"><?php echo esc_html($news_all_text); ?></a>
    </div>

    <ul class="news__cards">
        <?php foreach ($news_items as $item) : ?>
            <?php $text_class = !empty($item['text_white']) ? ' news__card_text-white' : ''; ?>
            <li class="news__card"
                role="link"
                tabindex="0"
                onclick="window.location.href='<?php echo esc_url(site_url($item['link'])); ?>';"
                onkeypress="if(event.key === 'Enter' || event.key === ' ') { window.location.href='<?php echo esc_url(site_url($item['link'])); ?>'; }"
            >
                <img loading="lazy"
                    src="<?php echo esc_url($item['image']); ?>"
                    alt="Торжество Tantana"
                    class="news__img"
                />
                <div class="news__container_card">
                    <p class="news__card_text<?php echo esc_attr($text_class); ?>">
                        <?php echo esc_html($item['text']); ?>
                    </p>
                    <a href="<?php echo esc_url(site_url($item['link'])); ?>" class="news__button">
                        <?php echo esc_html($item['button_text']); ?>
                    </a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
