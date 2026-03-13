<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="yandex-verification" content="d951b79c1c25beea" />
    <!-- <link rel="stylesheet" href="./src/styles/style.css" /> -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=106920222', 'ym');

        ym(106920222, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/106920222" style="position:absolute; left:-9999px;" alt="Счётчик Яндекс.Метрики" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>
  </head>
  <body>
  <header class="header" id="header">
    <div class="header__inner">
      <button class="header__burger" onclick="sidebarOpen()" aria-label="Открыть меню">
        <span class="header__burger-line"></span>
        <span class="header__burger-line"></span>
        <span class="header__burger-line"></span>
      </button>
      <a href="<?php echo site_url(); ?>" class="header__logo-link">
        <picture>
          <source srcset="/wp-content/uploads/2025/04/logo_360.png" media="(max-width: 767px)">
          <img src="/wp-content/uploads/2026/02/2026-02-19-23.54.23-2-e1771536229845.png" alt="Логотип Tantana" class="header__logo" />
        </picture>
      </a>
      <nav class="header__nav" aria-label="Основное меню">
        <ul class="header__nav-list">
          <li><a href="<?php echo site_url('/celebrations'); ?>" class="header__nav-link">Торжества</a></li>
          <li><a href="<?php echo site_url('/camp'); ?>" class="header__nav-link">Tantana Camp</a></li>
          <li><a href="<?php echo site_url('/gamecenter'); ?>" class="header__nav-link">Игровой центр</a></li>
          <li><a href="<?php echo site_url('/news'); ?>" class="header__nav-link">Новости</a></li>
          <li><a href="<?php echo site_url('/contact'); ?>" class="header__nav-link">Контакты</a></li>
          <li><a href="<?php echo site_url('/master-classes'); ?>" class="header__nav-link">Мастер-классы</a></li>
        </ul>
      </nav>
      <div class="header__actions">
        <?php if (get_field('vk', 'option')): ?>
        <a href="<?php echo get_field('vk', 'option')['link']; ?>" class="header__social" target="_blank" rel="noopener" aria-label="Вконтакте">
          <img src="<?php echo get_field('vk', 'option')['icon']; ?>" alt="" class="header__social-img" />
        </a>
        <?php endif; ?>
        <a href="#footer" class="header__cta open-popup"><?php echo get_field('call_button_text', 'option') ?: 'Заказать звонок'; ?></a>
        <a href="#footer" class="header__phone open-popup" aria-label="Позвонить">
          <svg class="header__phone-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </a>
      </div>
    </div>
  </header>
<aside class="sidebar" id="sidebar" aria-hidden="true">
    <div class="sidebar__overlay" onclick="sidebarClose()" aria-hidden="true"></div>
    <div class="sidebar__inner">
        <div class="sidebar__top">
            <button class="sidebar__close" onclick="sidebarClose()" aria-label="Закрыть меню">
                <span class="sidebar__close-line"></span>
                <span class="sidebar__close-line"></span>
            </button>
        </div>
        <nav class="sidebar__nav" aria-label="Мобильное меню">
            <ul class="sidebar__nav-list">
                <li><a href="<?php echo site_url(); ?>" class="sidebar__nav-link" onclick="sidebarClose()">Главная</a></li>
                <li><a href="<?php echo site_url('/celebrations'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">Торжества</a></li>
                <li><a href="<?php echo site_url('/camp'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">Tantana Camp</a></li>
                <li><a href="<?php echo site_url('/gamecenter'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">Игровой центр</a></li>
                <li><a href="<?php echo site_url('/news'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">Новости</a></li>
                <li><a href="<?php echo site_url('/contacts'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">Контакты</a></li>
                <li><a href="<?php echo site_url('/master-classes'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">Мастер-классы</a></li>
            </ul>
        </nav>
        <div class="sidebar__bottom">
            <?php if (get_field('vk', 'option')): ?>
            <a href="<?php echo get_field('vk', 'option')['link']; ?>" class="sidebar__social" target="_blank" rel="noopener" onclick="sidebarClose()">
                <img src="<?php echo get_field('vk', 'option')['icon']; ?>" alt="Вконтакте" class="sidebar__social-img" />
            </a>
            <?php endif; ?>
            <a href="#footer" class="sidebar__cta open-popup" onclick="sidebarClose()"><?php echo get_field('call_button_text', 'option') ?: 'Заказать звонок'; ?></a>
        </div>
    </div>
</aside>