<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="./src/styles/style.css" /> -->
    <title><?php echo get_bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>
  <body>
  <header class="header" id="header">
    <button class="header__button-menu-mobile" onclick="sidebarOpen()"> меню</button>
    <a href="<?php echo site_url(); ?>" class="header__logo-link">
        <picture>
            <source srcset="/wp-content/uploads/2025/04/logo_360.png" media="(max-width: 767px)">
            <img
                    src="/wp-content/uploads/2025/04/logo_768.png"
                    alt="Логотип"
                    class="header__logo"
            />
        </picture>
    </a>
    <nav class="header__nav">
        <nav>
            <ul class="header__nav-list">
                <li class="header__nav-item">
                    <a href="<?php echo site_url('/celebrations'); ?>" class="header__nav-link"> Торжества </a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo site_url('/camp'); ?>" class="header__nav-link"> Tantana Camp </a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo site_url('/gamecenter'); ?>" class="header__nav-link"> Игровой центр </a>
                </li>
            </ul>
        </nav>
        <nav>
            <ul class="header__nav-list">
                <li class="header__nav-item">
                    <a href="<?php echo site_url('/news'); ?>" class="header__nav-link"> Новости </a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo site_url('/contact'); ?>" class="header__nav-link"> Контакты </a>
                </li>
                <li class="header__nav-item">
                    <a href="<?php echo site_url('/masterClasses'); ?>" class="header__nav-link"> Мастер-классы </a>
                </li>
            </ul>
        </nav>
    </nav>
    <ul class="header__contacts">
        <?php if (get_field('telegram', 'option')): ?>
        <li class="header__contacts-li">
            <a href="<?php echo get_field('telegram', 'option')['link']; ?>" class="header__contacts-link">
                <img
                        src="<?php echo get_field('telegram', 'option')['icon']; ?>"
                        alt="Телеграм"
                        class="header__contacts-icon"
                />
            </a>
        </li>
        <?php endif; ?>
        
        <?php if (get_field('whatsapp', 'option')): ?>
        <li class="header__contacts-li">
            <a href="<?php echo get_field('whatsapp', 'option')['link']; ?>" class="header__contacts-link">
                <img
                        src="<?php echo get_field('whatsapp', 'option')['icon']; ?>"
                        alt="WhatsApp"
                        class="header__contacts-icon"
                />
            </a>
        </li>
        <?php endif; ?>
        
        <?php if (get_field('vk', 'option')): ?>
        <li class="header__contacts-li">
            <a href="<?php echo get_field('vk', 'option')['link']; ?>" class="header__contacts-link">
                <img
                        src="<?php echo get_field('vk', 'option')['icon']; ?>"
                        alt="Вконтакте"
                        class="header__contacts-icon"
                />
            </a>
        </li>
        <?php endif; ?>
        
        <?php if (get_field('viber', 'option')): ?>
        <li class="header__contacts-li">
            <a href="<?php echo get_field('viber', 'option')['link']; ?>" class="header__contacts-link">
                <img
                        src="<?php echo get_field('viber', 'option')['icon']; ?>"
                        alt="Viber"
                        class="header__contacts-icon"
                />
            </a>
        </li>
        <?php endif; ?>
    </ul>
    <a class="header__button open-popup"><?php echo get_field('call_button_text', 'option') ?: 'заказать звонок'; ?></a>
    <a class="header__phone-icon open-popup">
        <img
                src="/wp-content/uploads/2025/04/phone.svg"
                alt="Иконка телефона"
                class="header__phone-icon-img"
        />
    </a>
</header>
<aside class="sidebar">
    <div class="sidebar__inner">
        <div class="sidebar__heading">
            <button class="sidebar__heading-cross" onclick="sidebarClose()">
                <img
                        src="/wp-content/uploads/2025/04/cross.svg"
                        alt="Иконка крестика"
                        class="sidebar__heading-cross-icon"
                />
            </button>
            <a href="#footer" class="header__button" onclick="sidebarClose()"><?php echo get_field('call_button_text', 'option') ?: 'заказать звонок'; ?></a>
            <a href="#footer" class="header__phone-icon" onclick="sidebarClose()">
                <img
                        src="/wp-content/uploads/2025/04/phone.svg"
                        alt="Иконка телефона"
                        class="header__phone-icon-img"
                />
            </a>
        </div>
        <div class="sidebar__content">
            <nav class="sidebar__nav">
                <ul class="sidebar__nav-list">
                    <li class="sidebar__nav-item">
                        <a href="<?php echo site_url('/celebrations'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">
                            ТОРЖЕСТВА
                        </a>
                    </li>
                    <li class="sidebar__nav-item">
                        <a href="<?php echo site_url('/camp'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">
                            TANTANA CAMP
                        </a>
                    </li>
                    <li class="sidebar__nav-item">
                        <a href=" <?php echo site_url('/gamecenter'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">
                            ИГРОВОЙ ЦЕНТР
                        </a>
                    </li>
                    <li class="sidebar__nav-item">
                        <a href="<?php echo site_url('/news'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">
                            НОВОСТИ
                        </a>
                    </li>
                    <li class="sidebar__nav-item">
                        <a href="<?php echo site_url('/contacts'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">
                            КОНТАКТЫ
                        </a>
                    </li>
                    <li class="sidebar__nav-item">
                        <a href="<?php echo site_url('/masterClasses'); ?>" class="sidebar__nav-link" onclick="sidebarClose()">
                            МАСТЕР-КЛАССЫ
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="sidebar__contacts">
            <?php if (get_field('telegram', 'option')): ?>
            <a href="<?php echo get_field('telegram', 'option')['link']; ?>" class="sidebar__contacts-link">
                <img src="<?php echo get_field('telegram', 'option')['icon']; ?>" alt="Телеграм" class="sidebar__contacts-icon">
            </a>
            <?php endif; ?>
            
            <?php if (get_field('whatsapp', 'option')): ?>
            <a href="<?php echo get_field('whatsapp', 'option')['link']; ?>" class="sidebar__contacts-link">
                <img src="<?php echo get_field('whatsapp', 'option')['icon']; ?>" alt="WhatsApp" class="sidebar__contacts-icon">
            </a>
            <?php endif; ?>
            
            <?php if (get_field('vk', 'option')): ?>
            <a href="<?php echo get_field('vk', 'option')['link']; ?>" class="sidebar__contacts-link">
                <img src="<?php echo get_field('vk', 'option')['icon']; ?>" alt="Вконтакте" class="sidebar__contacts-icon">
            </a>
            <?php endif; ?>
            
            <?php if (get_field('viber', 'option')): ?>
            <a href="<?php echo get_field('viber', 'option')['link']; ?>" class="sidebar__contacts-link">
                <img src="<?php echo get_field('viber', 'option')['icon']; ?>" alt="Viber" class="sidebar__contacts-icon">
            </a>
            <?php endif; ?>
        </div>
    </div>
</aside>