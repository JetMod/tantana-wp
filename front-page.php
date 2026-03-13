<?php

get_header();

?>
<main class="main">
    <section class="tantana hero-animated">
        <?php
        // Получаем секцию один раз
        $hero_section = get_field('home_hero_section');
        ?>
        <h1 class="tantana__title"><?php echo $hero_section['hero_title'] ?: 'детский центр развития и развлечения'; ?></h1>
        <p class="tantana__title_h">
            <!-- <?php  
            // if ($hero_section && !empty($hero_section['hero_colored_title'])) {
            //     foreach ($hero_section['hero_colored_title'] as $item) {
            //         $letter = $item['letter'];
            //         $color = $item['color'];
            //         echo "<span class=\"{$color}\"> {$letter} </span>";
            //     }
            // } else {
            //     // Значения по умолчанию
            //     echo '<span class="blue"> T </span>';
            //     echo '<span class="orange"> A </span>';
            //     echo '<span class="green"> N </span>';
            //     echo '<span class="yellow"> T </span>';
            //     echo '<span class="red"> A </span>';
            //     echo '<span class="green"> N </span>';
            //     echo '<span class="orange"> A </span>';
            // }
            ?> -->
             <span class="blue">
                <svg width="208" height="174" viewBox="0 0 208 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M206.044 1.5V60.4199H138.958V172.5H68.585V60.4199H1.5V1.5H206.044Z" fill="#5534F5" stroke="#232122" stroke-width="3" />
                  </svg>
            </span>
            <span class="orange">
                <svg width="237" height="174" viewBox="0 0 237 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M166.388 1.5L166.764 2.44336L233.85 170.443L234.67 172.5H160.894L160.52 171.549L155.424 158.58H82.0332L76.9365 171.549L76.5625 172.5H2.78613L3.60742 170.443L70.6924 2.44336L71.0693 1.5H166.388ZM100.206 113.58H137.527L118.737 66.8086L100.206 113.58Z" fill="#F2A531" stroke="#232122" stroke-width="3" />
                  </svg>
            </span>
            <span class="green green1">
                <svg width="208" height="174" viewBox="0 0 208 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M70.7812 1.5L71.2305 2.03125L135.958 78.583V1.5H206.044V172.5H136.763L136.312 171.969L71.585 95.416V172.5H1.5V1.5H70.7812Z" fill="#00B487" stroke="#232122" stroke-width="3" />
                  </svg>
            </span>
            <span class="yellow">
                <svg width="208" height="174" viewBox="0 0 208 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M206.044 1.5V60.4199H138.958V172.5H68.585V60.4199H1.5V1.5H206.044Z" fill="#FFC548" stroke="#232122" stroke-width="3" />
                  </svg>
            </span>
            <span class="red">
                <svg width="237" height="174" viewBox="0 0 237 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M166.388 1.5L166.764 2.44336L233.85 170.443L234.67 172.5H160.894L160.52 171.549L155.424 158.58H82.0332L76.9365 171.549L76.5625 172.5H2.78613L3.60742 170.443L70.6924 2.44336L71.0693 1.5H166.388ZM100.206 113.58H137.527L118.737 66.8086L100.206 113.58Z" fill="#C32824" stroke="#232122" stroke-width="3" />
                  </svg>
            </span>
            <span class="green">
                <svg width="208" height="174" viewBox="0 0 208 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M70.7812 1.5L71.2305 2.03125L135.958 78.583V1.5H206.044V172.5H136.763L136.312 171.969L71.585 95.416V172.5H1.5V1.5H70.7812Z" fill="#00B487" stroke="#232122" stroke-width="3" />
                  </svg>
            </span>
            <span class="orange1">
                <svg width="237" height="174" viewBox="0 0 237 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M166.388 1.5L166.764 2.44336L233.85 170.443L234.67 172.5H160.894L160.52 171.549L155.424 158.58H82.0332L76.9365 171.549L76.5625 172.5H2.78613L3.60742 170.443L70.6924 2.44336L71.0693 1.5H166.388ZM100.206 113.58H137.527L118.737 66.8086L100.206 113.58Z" fill="#F2A531" stroke="#232122" stroke-width="3" />
                  </svg>
            </span>
           
</p>
        <a class="tantana__button open-popup"> <?php echo $hero_section['hero_button_text'] ?: 'заказать праздник'; ?></a>
        <img
            src="<?php echo $hero_section['hero_mobile_image'] ?: '/wp-content/uploads/2025/04/heroTantanaMobile.png'; ?>"
            alt="<?php echo (isset($hero_section['hero_mobile_alt']) && $hero_section['hero_mobile_alt']) ? $hero_section['hero_mobile_alt'] : 'Детский центр «Тантана» — мобильный баннер'; ?>"
            class="tantana__mobile_fon" />
    </section>
    <nav class="nav" aria-label="Другие развлечения">
        <?php
        // Получаем секцию один раз
        $nav_section = get_field('home_nav_section');
        ?>
        <h2 class="nav__text"><?php echo $nav_section['nav_text'] ?: 'другие развлечения'; ?></h2>
        <ul class="nav__ul"></ul>
            <?php
            
            if ($nav_section && !empty($nav_section['nav_items'])) {
                foreach ($nav_section['nav_items'] as $nav_item) {
                    $title = $nav_item['title'];
                    $link = $nav_item['link'];
                    ?>
                    <li class="nav__li_s">
                        <a href="<?php echo $link; ?>" class="nav__li">
                            <?php echo $title; ?>

                            <span class="nav__icons left">
                                <img src="/wp-content/uploads/2025/04/nav1.svg" alt="Декоративный элемент навигации" class="nav__img_1" />
                                <img src="/wp-content/uploads/2025/04/nav2.svg" alt="Иконка раздела навигации" class="nav__img_2" />
                                <img src="/wp-content/uploads/2025/04/nav3.svg" alt="Стрелка навигации" class="nav__img_3" />
                            </span>
                            <span class="nav__icons right">
                                <img src="/wp-content/uploads/2025/04/nav4.svg" alt="Декоративная волна навигации" class="nav__img_4" />
                                <img src="/wp-content/uploads/2025/04/nav5.svg" alt="Украшение ссылки навигации" class="nav__img_5" />
                            </span>
                        </a>
                    </li>
                    <?php
                }
            }
            ?>

        </ul>
    </nav>
    <section class="description">
        <?php
        // Получаем секцию один раз
        $description_section = get_field('home_description_section');
        ?>
        <h2 class="description__title"><?php echo $description_section['description_title'] ?: 'О нас'; ?></h2>
        <div class="description__container">
            <?php
            if ($description_section && !empty($description_section['description_images'])) {
                $images = [];
                foreach ($description_section['description_images'] as $image_item) {
                    $images[] = [
                        'image' => $image_item['image'],
                        'class' => $image_item['class'],
                        'alt' => isset($image_item['alt']) ? $image_item['alt'] : ''
                    ];
                }
                $description_alt_defaults = [
                    'Фото детского центра «Тантана»',
                    'Дети на занятии в центре «Тантана»',
                    'Игровая зона центра «Тантана»',
                    'Мастер-класс в центре «Тантана»',
                    'Интерьер центра «Тантана»',
                    'Развлечения для детей в центре «Тантана»',
                    'Праздничное мероприятие в центре «Тантана»',
                ];
                
                // Если есть изображения, выводим их
                if (!empty($images)) {
                    ?>
                    <div class="description__container_1">
                        <img src="<?php echo $images[0]['image'] ?: '/wp-content/uploads/2025/04/1-1.png'; ?>" alt="<?php echo !empty($images[0]['alt']) ? $images[0]['alt'] : $description_alt_defaults[0]; ?>" class="description__img_1 <?php echo $images[0]['class']; ?>" />
                        <?php if (isset($images[1])): ?>
                        <img
                            src="<?php echo $images[1]['image'] ?: '/wp-content/uploads/2025/04/2.png'; ?>"
                            alt="<?php echo !empty($images[1]['alt']) ? $images[1]['alt'] : $description_alt_defaults[1]; ?>"
                            class="description__img_1 description__img_1_center <?php echo $images[1]['class']; ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="description__container_2">
                        <div class="description__container_3">
                            <?php if (isset($images[2])): ?>
                            <img
                                src="<?php echo $images[2]['image'] ?: '/wp-content/uploads/2025/04/3-1.png'; ?>"
                                alt="<?php echo !empty($images[2]['alt']) ? $images[2]['alt'] : $description_alt_defaults[2]; ?>"
                                class="description__img_1 description__img_1_none_2 <?php echo $images[2]['class']; ?>" />
                            <?php endif; ?>
                            <?php if (isset($images[3])): ?>
                            <img
                                src="<?php echo $images[3]['image'] ?: '/wp-content/uploads/2025/04/33-1.png'; ?>"
                                alt="<?php echo !empty($images[3]['alt']) ? $images[3]['alt'] : $description_alt_defaults[3]; ?>"
                                class="description__img_1 description__img_33 <?php echo $images[3]['class']; ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="description__container_4">
                            <div class="description__container_flex">
                                <?php if (isset($images[4])): ?>
                                <img
                                    src="<?php echo $images[4]['image'] ?: '/wp-content/uploads/2025/04/4-1.png'; ?>"
                                    alt="<?php echo !empty($images[4]['alt']) ? $images[4]['alt'] : $description_alt_defaults[4]; ?>"
                                    class="description__img_1 description__img_1_none_2 <?php echo $images[4]['class']; ?>" />
                                <?php endif; ?>
                                <?php if (isset($images[5])): ?>
                                <img
                                    src="<?php echo $images[5]['image'] ?: '/wp-content/uploads/2025/04/41-1.png'; ?>"
                                    alt="<?php echo !empty($images[5]['alt']) ? $images[5]['alt'] : $description_alt_defaults[5]; ?>"
                                    class="description__img_1 description__img_1_none <?php echo $images[5]['class']; ?>" />
                                <?php endif; ?>
                            </div>
                            <?php if (isset($images[6])): ?>
                            <img
                                src="<?php echo $images[6]['image'] ?: '/wp-content/uploads/2025/04/42-1.png'; ?>"
                                alt="<?php echo !empty($images[6]['alt']) ? $images[6]['alt'] : $description_alt_defaults[6]; ?>"
                                class="description__img_1 description__img_33 <?php echo $images[6]['class']; ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                } else {
                    // Значения по умолчанию
                    ?>
                    <div class="description__container_1">
                        <img src="/wp-content/uploads/2025/04/1-1.png" alt="Фото детского центра «Тантана»" class="description__img_1" />
                        <img
                            src="/wp-content/uploads/2025/04/2.png"
                            alt="Дети на занятии в центре «Тантана»"
                            class="description__img_1 description__img_1_center" />
                    </div>
                    <div class="description__container_2">
                        <div class="description__container_3">
                            <img
                                src="/wp-content/uploads/2025/04/3-1.png"
                                alt="Игровая зона центра «Тантана»"
                                class="description__img_1 description__img_1_none_2" />
                            <img
                                src="/wp-content/uploads/2025/04/33-1.png"
                                alt="Мастер-класс в центре «Тантана»"
                                class="description__img_1 description__img_33" />
                        </div>
                        <div class="description__container_4">
                            <div class="description__container_flex">
                                <img
                                    src="/wp-content/uploads/2025/04/4-1.png"
                                    alt="Интерьер центра «Тантана»"
                                    class="description__img_1 description__img_1_none_2" />
                                <img
                                    src="/wp-content/uploads/2025/04/41-1.png"
                                    alt="Развлечения для детей в центре «Тантана»"
                                    class="description__img_1 description__img_1_none" />
                            </div>

                            <img
                                src="/wp-content/uploads/2025/04/42-1.png"
                                alt="Праздничное мероприятие в центре «Тантана»"
                                class="description__img_1 description__img_33" />
                        </div>
                    </div>
                    <?php
                }
            } else {
                // Значения по умолчанию
                ?>
                <div class="description__container_1">
                    <img src="/wp-content/uploads/2025/04/1-1.png" alt="Фото детского центра «Тантана»" class="description__img_1" />
                    <img
                        src="/wp-content/uploads/2025/04/2.png"
                        alt="Дети на занятии в центре «Тантана»"
                        class="description__img_1 description__img_1_center" />
                </div>
                <div class="description__container_2">
                    <div class="description__container_3">
                        <img
                            src="/wp-content/uploads/2025/04/3-1.png"
                            alt="Игровая зона центра «Тантана»"
                            class="description__img_1 description__img_1_none_2" />
                        <img
                            src="/wp-content/uploads/2025/04/33-1.png"
                            alt="Мастер-класс в центре «Тантана»"
                            class="description__img_1 description__img_33" />
                    </div>
                    <div class="description__container_4">
                        <div class="description__container_flex">
                            <img
                                src="/wp-content/uploads/2025/04/4-1.png"
                                alt="Интерьер центра «Тантана»"
                                class="description__img_1 description__img_1_none_2" />
                            <img
                                src="/wp-content/uploads/2025/04/41-1.png"
                                alt="Развлечения для детей в центре «Тантана»"
                                class="description__img_1 description__img_1_none" />
                        </div>

                        <img
                            src="/wp-content/uploads/2025/04/42-1.png"
                            alt="Праздничное мероприятие в центре «Тантана»"
                            class="description__img_1 description__img_33" />
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <section class="about">
        <?php
        // Получаем секцию один раз
        $about_section = get_field('home_about_section');
        ?>
        <div class="about__container">
            <h2 class="about__container_text">
                <?php echo $about_section['about_text_1'] ?: 'Тантана — <span class="about__span">увлекательный мир</span> детских развлечений, это <span class="about__span">незабываемый,</span>'; ?>
            </h2>
            <h2 class="about__container_text_2">
                <?php echo $about_section['about_text_2'] ?: '<span class="about__span">яркий,</span> веселый и комфортный отдых <span class="about__span">всей семьей,</span> это развивающие мастер-классы, трехуровневый лабиринт и просторная <span class="about__span">игровая зона,</span> которые доставят малышам массу <span class="about__span">положительных эмоций!</span>'; ?>
            </h2>
            <p class="about__text">
                <?php echo $about_section['about_description'] ?: 'Приятный интерьер, специальное детское меню и внимательный персонал сделают посещение детского центра приятным и незабываемым. Подарите своим детям минуты радости и счастья! <br /><br />Получи консультацию прямо сейчас. Заполните форму и наш менеджер Вам перезвонит.'; ?>
            </p>
            <a class="about__button open-popup"> <?php echo $about_section['about_button_text'] ?: 'заказать праздник'; ?></a>
        </div>
    </section>
    <!-- <section class="video">
        <?php
        
        $video_section = get_field('home_video_section');
        $video_url = $video_section['video_url'];
        ?>
        <iframe src="<?php echo $video_url;?>" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture; screen-wake-lock;" frameborder="0" allowfullscreen></iframe>

       
    </section> -->
   <section class="cert__section">
    <div class="cert__slider">
        <?php
        $cert_section = get_field('home_cert_section');

        if ($cert_section && !empty($cert_section['cert_cards'])) {
            $card_count = 0;
            foreach ($cert_section['cert_cards'] as $index => $card) {
                $card_count++;
                $title = $card['title'];
                $color = $card['color'];
                $text = $card['text'];
                $image = $card['image'];
                $mobile_image = $card['mobile_image'];
                $button_text = $card['button_text'];
                $class = $card['class'];

                // Основной класс
                $card_class = 'cert cert__card';
                if ($card_count === 1) {
                    $card_class .= ' cert__card_1';
                } elseif ($card_count === 3) {
                    $card_class .= ' cert__card_2';
                }

                if (!empty($class)) {
                    $card_class .= ' ' . $class;
                }

                // Цвет заголовка
                $title_class = 'cert__title';
                if ($color === 'red') {
                    $title_class .= ' cert__red';
                } elseif ($color === 'blue') {
                    $title_class .= ' cert__blue';
                }
                $card_alt_text = $title ? 'Акция «' . $title . '»' : 'Акционное предложение центра «Тантана»';
                $mobile_alt_text = $title ? 'Мобильное изображение акции «' . $title . '»' : 'Мобильное изображение акции центра «Тантана»';
                ?>
                <div class="<?php echo $card_class; ?>" data-order="<?php echo $index; ?>">
                    <div class="cert__container_block">
                        <div class="cert__container">
                            <h2 class="<?php echo $title_class; ?>"><?php echo $title; ?></h2>
                            <img
                                src="<?php echo $mobile_image ?: '/wp-content/uploads/2025/04/2-1.png'; ?>"
                                alt="<?php echo $mobile_alt_text; ?>"
                                class="cert__img_mobile" />
                            <p class="cert__text"><?php echo $text; ?></p>
                        </div>
                        <a class="cert__button open-popup"><?php echo $button_text ?: 'заказать праздник'; ?></a>
                    </div>
                    <img src="<?php echo $image; ?>" alt="<?php echo $card_alt_text; ?>" class="cert__img" />
                </div>
                <?php
            }
        } else {
            // Базовые 3 карточки по умолчанию
            ?>
            <div class="cert cert__card cert__card_1" data-order="0">
                <div class="cert__container_block">
                    <div class="cert__container">
                        <h2 class="cert__title">счастливые часы</h2>
                        <img src="/wp-content/uploads/2025/04/2-1.png" alt="Мобильное изображение акции «счастливые часы»" class="cert__img_mobile" />
                        <p class="cert__text">3 часа развлечений по цене одного, в будние дни с 10:00 до 13:00</p>
                    </div>
                    <a class="cert__button open-popup">заказать праздник</a>
                </div>
                <img src="/wp-content/uploads/2025/04/cert.png" alt="Акция «счастливые часы»" class="cert__img" />
            </div>

            <div class="cert cert__card" data-order="1">
                <div class="cert__container_block">
                    <div class="cert__container">
                        <h2 class="cert__title cert__red">-30% на посещение игровой</h2>
                        <img src="/wp-content/uploads/2025/04/cert1.png" alt="Мобильное изображение акции «-30% на посещение игровой»" class="cert__img_mobile" />
                        <p class="cert__text">Многодетным семьям и детям с ограниченными возможностями -30% на
                            посещение игровой в будние дни (при предъявлении оригинала документа)</p>
                    </div>
                    <a class="cert__button open-popup">заказать праздник</a>
                </div>
                <img src="/wp-content/uploads/2025/04/cert1.png" alt="Акция «-30% на посещение игровой»" class="cert__img" />
            </div>

            <div class="cert cert__card cert__card_2" data-order="2">
                <div class="cert__container_block">
                    <div class="cert__container">
                        <h2 class="cert__title cert__blue">-50% именинникам</h2>
                        <img src="/wp-content/uploads/2025/04/2-1.png" alt="Мобильное изображение акции «-50% именинникам»" class="cert__img_mobile" />
                        <p class="cert__text">Именинникам -50% на посещение игровой (при предъявлении соответствующего
                            документа)</p>
                    </div>
                    <a class="cert__button open-popup">заказать праздник</a>
                </div>
                <img src="/wp-content/uploads/2025/04/cert2.png" alt="Акция «-50% именинникам»" class="cert__img" />
            </div>
            <?php
        }
        ?>
    </div>
</section>

    <section class="info" id="info">
        <?php
        // Получаем секцию один раз
        $info_section = get_field('home_info_section');
        ?>
        <h2 class="info__title"><?php echo $info_section['info_title'] ?: 'РАЗВИВАЮЩИЕ ЗАНЯТИЯ'; ?></h2>
        <div class="info__container">
            <h2 class="info__container_text">
                <?php echo $info_section['info_text_1'] ?: 'Детский центр развития <span class="info__span">«ТАНТАНА»</span> - это центр <span class="info__span">всестороннего</span> развития ребенка!'; ?>
            </h2>
            <h2 class="info__container_text_2">
                <?php echo $info_section['info_text_2'] ?: 'В нашей команде работают <span class="info__span">профессиональные</span> педагоги, которые горят своим делом, находят <span class="info__span">индивидуальный подход</span> к каждому ребенку и используют <span class="info__span">уникальные</span> авторские методики.'; ?>
            </h2>
            <p class="info__text">
                <?php echo $info_section['info_description'] ?: 'Цель работы «ТАНТАНА» раскрыть таланты Вашего ребенка, заинтересовать обучением и познанием окружающего мира, заложить фундамент личности, который позволит стать интересным и разносторонним человеком во взрослой жизни!'; ?>
            </p>
        </div>
    </section>
    <section class="directions__container">
        <div class="directions">
            <?php
            // Получаем секцию один раз
            $directions_section = get_field('home_directions_section');
            ?>
            <h2 class="directions__title"><?php echo $directions_section['directions_title'] ?: 'НАШИ НАПРАВЛЕНИЯ'; ?></h2>
            <div>
                <p class="directions__text">
                    <?php echo $directions_section['directions_text'] ?: 'Пробное групповое занятие - бесплатное! При покупке 2-х и более абонементов на разные виды занятий скидка -10% на ВСЕ АБОНЕМЕНТЫ!'; ?>
                </p>
                <div class="directions__container">
                    <?php
                    if ($directions_section && !empty($directions_section['directions_items'])) {
                        foreach ($directions_section['directions_items'] as $direction) {
                            $letter = $direction['letter'];
                            $name = $direction['name'];
                            $color = $direction['color'];
                            $white_text = $direction['white_text'];
                            
                            // Определяем класс круга
                            $circle_class = 'directions__circle';
                            if ($color && $color !== 'default') {
                                $circle_class .= ' directions__' . $color;
                            }
                            
                            // Определяем класс текста
                            $text_class = 'directions__circle_title';
                            if ($white_text) {
                                $text_class .= ' directions__white';
                            }
                            ?>
                            <div class="directions__container_card">
                                <div class="<?php echo $circle_class; ?>">
                                    <span class="<?php echo $text_class; ?>"><?php echo $letter; ?></span>
                                </div>
                                <p class="directions__circle_text"><?php echo $name; ?></p>
                            </div>
                            <?php
                        }
                    } else {
                        // Значения по умолчанию
                        ?>
                        <div class="directions__container_card">
                            <div class="directions__circle directions__blue">
                                <span class="directions__circle_title">А</span>
                            </div>
                            <p class="directions__circle_text">АНГЛИЙСКИЙ ЯЗЫК</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle">
                                <span class="directions__circle_title">А</span>
                            </div>
                            <p class="directions__circle_text">АРТ-МАСТЕРСКАЯ</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__violet">
                                <span class="directions__circle_title directions__white">К</span>
                            </div>
                            <p class="directions__circle_text">киокушин каратэ</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__orange">
                                <span class="directions__circle_title">К</span>
                            </div>
                            <p class="directions__circle_text">
                                КРЫМСКОТАТАРСКАЯ ХОРЕОГРАФИЯ
                            </p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__blue">
                                <span class="directions__circle_titlen">Л</span>
                            </div>
                            <p class="directions__circle_text">ЛОГОПЕДИЯ И ДЕФЕКТОЛОГИЯ</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__green">
                                <span class="directions__circle_title directions__white">М</span>
                            </div>
                            <p class="directions__circle_text">математика</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle">
                                <span class="directions__circle_title">М</span>
                            </div>
                            <p class="directions__circle_text">
                                мк по кондитерским изделиям
                            </p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__orange">
                                <span class="directions__circle_title">М</span>
                            </div>
                            <p class="directions__circle_text">мк по приготовлению пиццы</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__violet">
                                <span class="directions__circle_title directions__white">П</span>
                            </div>
                            <p class="directions__circle_text">подготовка к впр</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__green">
                                <span class="directions__circle_title directions__white">П</span>
                            </div>
                            <p class="directions__circle_text">подготовка к школе</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__blue">
                                <span class="directions__circle_title">Р</span>
                            </div>
                            <p class="directions__circle_text">русский язык</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__orange">
                                <span class="directions__circle_title directions__white">У</span>
                            </div>
                            <p class="directions__circle_text">«УМНИКИ-РАЗУМНИКИ»</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle">
                                <span class="directions__circle_title">Ш</span>
                            </div>
                            <p class="directions__circle_text">ШАХМАТНЫЙ КЛУБ</p>
                        </div>

                        <div class="directions__container_card">
                            <div class="directions__circle directions__blue">
                                <span class="directions__circle_title">Э</span>
                            </div>
                            <p class="directions__circle_text">эстрадно-вокальная студия</p>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="cost">
            <div class="cost__slider">
                <?php
                // Получаем секцию один раз
                $cost_section = get_field('home_cost_section');
                
                if ($cost_section && !empty($cost_section['cost_sliders'])) {
                    $slider_count = 0;
                    foreach ($cost_section['cost_sliders'] as $slider) {
                        $age = $slider['age'];
                        $title = $slider['title'];
                        $description = $slider['description'];
                        $prices = $slider['prices'];
                        
                        // Определяем активный слайд
                        $active_class = $slider_count === 0 ? ' active' : '';
                        ?>
                        <div class="cost__sliders<?php echo $active_class; ?>">
                            <div class="cost__container_img">
                                <img src="/wp-content/uploads/2025/04/cost.svg" alt="<?php echo $age ? 'Возраст: ' . strip_tags($age) : 'Декоративная карточка стоимости'; ?>" class="cost__card_img" />
                                <p class="cost__card_text"><?php echo $age; ?></p>
                            </div>
                            <h3 class="cost__title"><?php echo $title; ?></h3>

                            <ul class="cost__schedule">
                                <?php echo $description; ?>
                            </ul>

                            <div class="cost__price">
                                <?php
                                if (!empty($prices)) {
                                    foreach ($prices as $price) {
                                        $info = $price['info'];
                                        $sum = $price['sum'];
                                        ?>
                                        <div class="cost__price_container">
                                            <p class="cost__price_info"><?php echo $info; ?></p>
                                            <?php if (!empty($sum)): ?>
                                            <p class="cost__price_sum"><?php echo $sum; ?></p>
                                            <?php endif; ?>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        $slider_count++;
                    }
                } else {
                    // Значение по умолчанию для первого слайда
                    ?>
                    <div class="cost__sliders active">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для возраста от 1,5 лет" class="cost__card_img" />
                            <p class="cost__card_text">от 1,5 лет</p>
                        </div>
                        <h3 class="cost__title">«УМНИКИ-РАЗУМНИКИ»</h3>

                        <ul class="cost__schedule">
                            На занятиях ребенок развивает:

                            <li class="cost__schedule_list">связанную речь;</li>
                            <li class="cost__schedule_list">логическое мышление;</li>
                            <li class="cost__schedule_list">мелкую моторику;</li>
                            <li class="cost__schedule_list">творческие способности;</li>
                            <li class="cost__schedule_list">математическое мышление;</li>
                            <li class="cost__schedule_list">подготавливает руку к письму.</li>
                        </ul>

                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">600р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                        </div>
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для возраста от 1,5 лет" class="cost__card_img" />
                            <p class="cost__card_text">от 1,5 лет</p>
                        </div>
                        <h3 class="cost__title">«АНГЛИЙСКИЙ ЯЗЫК»</h3>

                        <ul class="cost__schedule">
                            Занятия проходят исключительно на английском языке и в игровой форме:
                            
                            <li class="cost__schedule_list">учимся говорить, слушать и слышать английскую речь;</li>
                            <li class="cost__schedule_list">читаем и пишем на английском языке;</li>
                            <li class="cost__schedule_list">развиваем память;</li>
                            <li class="cost__schedule_list">развиваем логическое мышление;</li>
                            <li class="cost__schedule_list">тренируем усидчивость;</li>
                            <li class="cost__schedule_list">формируем крепкую базу знаний для школы и повседневной жизни.</li>
                        </ul>


                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">600р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для возраста от 1,5 лет" class="cost__card_img" />
                            <p class="cost__card_text">от 1,5 лет</p>
                        </div>
                        <h3 class="cost__title">«Крымскотатарская хореография»</h3>

                        <ul class="cost__schedule">
                        Занятия хореографией помогают детям:

                            <li class="cost__schedule_list">снять психологические и мышечные зажимы;</li>
                            <li class="cost__schedule_list">выработать чувство ритма;</li>
                            <li class="cost__schedule_list">повысить уверенность в себе;</li>
                            <li class="cost__schedule_list">развить выразительность;</li>
                            <li class="cost__schedule_list">научиться двигаться в соответствии с музыкальными образами (для сценических выступлений);</li>
                            <li class="cost__schedule_list">воспитать выносливость и дисциплину;</li>
                            <li class="cost__schedule_list">скорректировать осанку, координацию и постановку корпуса;</li>
                            <li class="cost__schedule_list">укрепить здоровье в целом.</li>
                        </ul>

                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3000р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">700р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для логопеда" class="cost__card_img" />
                            <p class="cost__card_text">от 1,5 лет</p>
                        </div>
                        <h3 class="cost__title">«Логопедия и дефектология»</h3>

                        <ul class="cost__schedule">
                            Занятия проводит опытный логопед-дефектолог:
                            <li class="cost__schedule_list">с большим опытом работы;</li>
                            <li class="cost__schedule_list">работа с ребёнком начинается с консультации;</li>
                            <li class="cost__schedule_list">на консультации обсуждаются все важные моменты.</li>
                        </ul>


                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">Стоимость занятий рассчитывается индивидуально</p>
                                <!-- <p class="cost__price_sum">600р</p> -->
                            </div>
                            <div class="cost__price_container">
                                <!-- <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">2500р</p> -->
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">Стоимость первичной консультации </p>
                                <p class="cost__price_sum">1200р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для возраста 4+" class="cost__card_img" />
                            <p class="cost__card_text">от 4+ лет</p>
                        </div>
                        <h3 class="cost__title">«МК по кондитерским изделиям»</h3>

                        <ul class="cost__schedule">
                            Мастер-классы по кондитерским изделиям (возраст 4+):
                            <li class="cost__schedule_list">изделие выбирается кондитерской Shen;</li>
                            <li class="cost__schedule_list">проводятся каждое воскресенье в 11:00 — для всех желающих по предварительной записи;</li>
                            <li class="cost__schedule_list">возможны также в любой день до 15:00 — для групп от 5 детей, по предварительной записи.</li>
                        </ul>



                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">Кондитерские изделия </p>
                                <p class="cost__price_sum">600р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">Кондитерские изделия+лимонад </p>
                                <p class="cost__price_sum">700р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">Стоимость Бенто – торт  (7+) </p>
                                <p class="cost__price_sum">1000р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для возраста 4+" class="cost__card_img" />
                            <p class="cost__card_text">от 4+ лет</p>
                        </div>
                        <h3 class="cost__title">«МК по приготовлению пиццы»</h3>

                        <ul class="cost__schedule">
                            Мастер-классы по приготовлению пиццы (возраст 4+):

                            <li class="cost__schedule_list">проводятся каждую субботу в 11:00 — для всех желающих по предварительной записи;</li>
                            <li class="cost__schedule_list">возможны также в любой день до 15:00 — для групп от 5 детей, по предварительной записи.</li>
                        </ul>



                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">700р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для возраста от 7 лет" class="cost__card_img" />
                            <p class="cost__card_text">от 7 лет</p>
                        </div>
                        <h3 class="cost__title">«Подготовка к ВПР»</h3>

                        <ul class="cost__schedule">
                            Подготовка по школьной программе для 4 класса:

                            <li class="cost__schedule_list">математика;</li>
                            <li class="cost__schedule_list">русский язык;</li>
                            <li class="cost__schedule_list">окружающий мир;</li>
                            <li class="cost__schedule_list">занятия проводятся комплексно или по отдельным предметам — по договорённости с преподавателем.</li>
                        </ul>



                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для возраста от 7 лет" class="cost__card_img" />
                            <p class="cost__card_text">от 7 лет</p>
                        </div>
                        <h3 class="cost__title">«Подготовка к школе»</h3>

                        <ul class="cost__schedule">
                            Комплексные занятия для подготовки к школе включают направления:

                            <li class="cost__schedule_list">чтение;</li>
                            <li class="cost__schedule_list">математика;</li>
                            <li class="cost__schedule_list">письмо;</li>
                            <li class="cost__schedule_list">окружающий мир;</li>
                            <li class="cost__schedule_list">технология.</li>
                            
                            <!-- <li class="cost__schedule_list">Занятия формируют прочную базу для успешного старта в школе;</li>
                            <li class="cost__schedule_list">проводятся с учётом психо-физиологических особенностей дошкольников;</li>
                            <li class="cost__schedule_list">включают частую смену деятельности для лучшего усвоения материала.</li> -->
                        </ul>




                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">600р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для индивидуальных занятий" class="cost__card_img" />
                            <p class="cost__card_text">от 7 лет</p>
                        </div>
                        <h3 class="cost__title">«Индивидуальные занятия»</h3>

                        <ul class="cost__schedule">
                            Индивидуальные занятия по школьным предметам:

                            <li class="cost__schedule_list">русский язык и чтение;</li>
                            <li class="cost__schedule_list">математика;</li>
                            <li class="cost__schedule_list">окружающий мир.</li>

                            <li class="cost__schedule_list">помогают повысить уровень успеваемости по основным направлениям программы младшей школы.</li>
                        </ul>




                        <div class="cost__price">
                            <div class="cost__price_container">
                                <!-- <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">800р</p> -->
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                    <div class="cost__sliders">
                        <div class="cost__container_img">
                            <img src="/wp-content/uploads/2025/04/cost.svg" alt="Декоративная карточка стоимости для шахматного клуба" class="cost__card_img" />
                            <p class="cost__card_text">от 7 лет</p>
                        </div>
                        <h3 class="cost__title">«Шахматный клуб"</h3>

                        <ul class="cost__schedule">
                            Шахматный клуб:

                            <li class="cost__schedule_list">развивает память, усидчивость и аналитические способности;</li>
                            <li class="cost__schedule_list">формирует логическое, аналитическое и математическое мышление;</li>
                            <li class="cost__schedule_list">учит смотреть на ситуацию со стороны;</li>
                            <li class="cost__schedule_list">способствует интеллектуальному развитию ребёнка.</li>
                        </ul>




                        <div class="cost__price">
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое групповое посещение</p>
                                <p class="cost__price_sum">600р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">абонемент на 8 занятий</p>
                                <p class="cost__price_sum">3500р</p>
                            </div>
                            <div class="cost__price_container">
                                <p class="cost__price_info">разовое индивидуальное занятие</p>
                                <p class="cost__price_sum">800р</p>
                            </div>
                        </div>
                        <!-- <p class="cost__price_schedule">Расписание</p> -->
                    </div>

                <?php
                }
                ?>

                <div class="cost__button_container">
                    <a href="#footer" class="cost__button"><?php echo $cost_section['cost_button_text'] ?: 'записаться'; ?></a>
                    <div class="cost__button_flex">
                        <span class="cost__button_left" role="button" tabindex="0">
                            <img src="/wp-content/uploads/2025/04/costArrow-1.svg" alt="Предыдущий слайд стоимости" />
                        </span>
                        <span class="cost__button_right" role="button" tabindex="0">
                            <img src="/wp-content/uploads/2025/04/costArrow.svg" alt="Следующий слайд стоимости" />
                        </span>
                    </div>
                </div>
            </div>

            <div class="cost__img_container">
                <?php
                if ($cost_section && !empty($cost_section['cost_images'])) {
                    foreach ($cost_section['cost_images'] as $cost_image) {
                        $image = $cost_image['image'];
                        ?>
                        <img src="<?php echo $image ?: '/wp-content/uploads/2025/04/costImg1.png'; ?>" alt="Иллюстрация стоимости центра «Тантана»" class="cost__img" />
                        <?php
                    }
                } else {
                    // Значения по умолчанию
                    ?>
                    <img src="/wp-content/uploads/2025/04/costImg1.png" alt="Иллюстрация стоимости центра «Тантана»" class="cost__img" />
                    <img src="/wp-content/uploads/2025/04/costImg1.png" alt="Иллюстрация стоимости центра «Тантана»" class="cost__img" />
                    <?php
                }
                ?>
            </div>
        </div>
    </section>

    <?php include "schedule.php"; ?>
    <?php include "reviews.php"; ?>
    <?php include "questions.php"; ?>
    <?php include "news.php"; ?>
</main>



<?php

get_footer();

?>


<script>
    //слайдер

  document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".cost__sliders");
    const btnLeft = document.querySelector(".cost__button_left");
    const btnRight = document.querySelector(".cost__button_right");

    
    let currentSlide = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
      });
    }

    btnRight.addEventListener("click", () => {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    });

    btnLeft.addEventListener("click", () => {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    });

    showSlide(currentSlide);
  });


const cards = document.querySelectorAll('.cert__card');

cards.forEach((card) => {
  card.addEventListener('click', () => {
    const activeOrder = parseInt(card.dataset.order, 10);
    reorderCards(activeOrder); // удалили проверку
  });
});

function reorderCards(clickedOrder) {
  const total = 3;

  document.querySelectorAll('.cert__card').forEach((card) => {
    const currentOrder = parseInt(card.dataset.order, 10);
    const newOrder = (currentOrder - clickedOrder + total) % total;
    card.dataset.order = newOrder;
  });
}

 


</script>
