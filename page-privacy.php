<?php
/**
 * Template Name: Политика персональных данных
 * Description: Страница политики обработки персональных данных
 */

get_header();
?>

<?php
// Данные оператора (ООО «Шен» — юридическое лицо, владеющее сайтом Tantana)
$operator = [
    'full_name'    => 'Общество с ограниченной ответственностью «Шен»',
    'address'      => '295000, Республика Крым, г. Симферополь, ул. Генерала Васильева, д. 40а',
    'phone'        => '+7 (978) 888 43 08',
    'phone_href'   => '+79788884308',
    'email'        => 'tantana-crimea@yandex.ru',
    'inn'          => '9102157060',
    'kpp'          => '910201001',
    'ogrn'         => '1159102021187',
    'policy_date'  => '29 марта 2026 г.',
    'policy_ver'   => '2.0',
];
?>

<main class="main">
    <section class="privacy privacy-hero-animated">
        <div class="privacy__hero">
            <span class="privacy__badge">Документ</span>
            <h1 class="privacy__title">
                Политика обработки персональных данных
                <span class="sr-only">— детский центр Tantana, Симферополь</span>
            </h1>
            <p class="privacy__subtitle">Обработка и защита персональных данных на сайте tantana-crimea.ru</p>
            <p class="privacy__meta">Версия <?php echo esc_html($operator['policy_ver']); ?> &nbsp;·&nbsp; Принята <?php echo esc_html($operator['policy_date']); ?></p>
        </div>

        <div class="privacy__content">
            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">1</span> Общие положения</h2>
                <p class="privacy__text">
                    Настоящая Политика обработки персональных данных определяет порядок обработки и защиты персональных данных пользователей сайта tantana-crimea.ru (далее — Сайт).
                </p>
                <p class="privacy__text">
                    Оператором персональных данных является:
                </p>
                <ul class="privacy__operator-list">
                    <li><strong><?php echo esc_html($operator['full_name']); ?></strong></li>
                    <li><strong>ИНН:</strong> <?php echo esc_html($operator['inn']); ?></li>
                    <li><strong>КПП:</strong> <?php echo esc_html($operator['kpp']); ?></li>
                    <li><strong>ОГРН:</strong> <?php echo esc_html($operator['ogrn']); ?></li>
                    <li><strong>Адрес:</strong> <?php echo esc_html($operator['address']); ?></li>
                    <li><strong>Телефон:</strong> <a href="tel:<?php echo esc_attr($operator['phone_href']); ?>" class="privacy__link"><?php echo esc_html($operator['phone']); ?></a></li>
                    <li><strong>Email:</strong> <a href="mailto:<?php echo esc_attr($operator['email']); ?>" class="privacy__link"><?php echo esc_html($operator['email']); ?></a></li>
                </ul>
                <p class="privacy__text">
                    Оператор обрабатывает персональные данные пользователей в соответствии с требованиями законодательства Российской Федерации, включая Федеральный закон № 152-ФЗ «О персональных данных».
                </p>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">2</span> Персональные данные, которые обрабатываются</h2>
                <p class="privacy__text">Оператор может обрабатывать следующие персональные данные пользователей:</p>
                <ul class="privacy__list">
                    <li>имя и фамилия;</li>
                    <li>номер телефона;</li>
                    <li>адрес электронной почты;</li>
                    <li>информация, переданная пользователем через формы обратной связи на сайте;</li>
                    <li>технические данные (IP-адрес, информация о браузере, файлы cookies, данные о посещении сайта).</li>
                </ul>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">3</span> Цели обработки персональных данных</h2>
                <p class="privacy__text">Персональные данные обрабатываются в следующих целях:</p>
                <ul class="privacy__list">
                    <li>обработка заявок на бронирование праздников, мероприятий и услуг детского центра Tantana;</li>
                    <li>связь с пользователем для уточнения деталей заявки;</li>
                    <li>информирование о мероприятиях, акциях и предложениях (при наличии согласия пользователя);</li>
                    <li>анализ посещаемости сайта и улучшение его работы.</li>
                </ul>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">4</span> Правовые основания обработки</h2>
                <p class="privacy__text">
                    Обработка персональных данных осуществляется:
                </p>
                <ul class="privacy__list">
                    <li>на основании согласия пользователя на обработку персональных данных;</li>
                    <li>в случаях, предусмотренных законодательством Российской Федерации.</li>
                </ul>
                <p class="privacy__text">
                    Согласие на обработку персональных данных предоставляется пользователем путем заполнения форм на Сайте и отправки своих данных.
                </p>
                <p class="privacy__text">
                    Обработка персональных данных может осуществляться как с использованием средств автоматизации, так и без их использования.
                </p>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">5</span> Передача персональных данных третьим лицам</h2>
                <p class="privacy__text">
                    Оператор может передавать персональные данные третьим лицам только в следующих случаях:
                </p>
                <ul class="privacy__list">
                    <li>если это необходимо для функционирования сервисов сайта;</li>
                    <li>если передача предусмотрена законодательством Российской Федерации;</li>
                    <li>при наличии согласия пользователя.</li>
                </ul>
                <p class="privacy__text">
                    Для анализа посещаемости сайта может использоваться сервис веб-аналитики Яндекс.Метрика, который обрабатывает обезличенные данные пользователей.
                </p>
                <p class="privacy__text">
                    Трансграничная передача персональных данных Оператором не осуществляется.
                </p>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">6</span> Срок хранения персональных данных</h2>
                <p class="privacy__text">
                    Персональные данные хранятся в течение срока, необходимого для достижения целей их обработки, либо в течение срока, установленного законодательством Российской Федерации.
                </p>
                <p class="privacy__text">
                    После достижения целей обработки персональные данные подлежат удалению или обезличиванию.
                </p>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">7</span> Защита персональных данных</h2>
                <p class="privacy__text">
                    Оператор принимает необходимые организационные и технические меры для защиты персональных данных пользователей от неправомерного доступа, изменения, раскрытия, уничтожения или блокирования.
                </p>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">8</span> Права пользователя</h2>
                <p class="privacy__text">Пользователь имеет право:</p>
                <ul class="privacy__list">
                    <li>получать информацию о своих персональных данных и их обработке;</li>
                    <li>требовать уточнения, блокирования или уничтожения своих персональных данных;</li>
                    <li>отозвать согласие на обработку персональных данных.</li>
                </ul>
                <p class="privacy__text">
                    Для реализации своих прав пользователь может направить запрос на email: <a href="mailto:<?php echo esc_attr($operator['email']); ?>" class="privacy__link"><?php echo esc_html($operator['email']); ?></a>
                </p>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">9</span> Использование файлов cookies и сервиса Яндекс.Метрика</h2>
                <p class="privacy__text">
                    Сайт использует файлы cookies для обеспечения корректной работы, анализа посещаемости и улучшения пользовательского опыта.
                </p>
                <p class="privacy__text">
                    Для анализа посещаемости используется сервис веб-аналитики <strong>Яндекс.Метрика</strong> (оператор — ООО «Яндекс», г. Москва). Сервис подключается <strong>исключительно после получения явного согласия</strong> пользователя — путём активного подтверждения в уведомлении на сайте.
                </p>
                <p class="privacy__text">
                    Яндекс.Метрика собирает обезличенные данные о посещениях (IP-адрес в анонимизированном виде, информация о браузере, действия на странице). Данные передаются в Яндекс и обрабатываются в соответствии с <a href="https://yandex.ru/legal/confidential/" target="_blank" rel="noopener noreferrer" class="privacy__link">политикой конфиденциальности Яндекса</a>.
                </p>
                <p class="privacy__text">
                    Пользователь вправе в любой момент отозвать своё согласие, удалив cookies сайта в настройках браузера. При следующем посещении сайта уведомление о согласии будет показано повторно.
                </p>
            </div>

            <div class="privacy__card">
                <h2 class="privacy__section-title"><span class="privacy__num">10</span> Изменения политики</h2>
                <p class="privacy__text">
                    Оператор вправе вносить изменения в настоящую Политику обработки персональных данных.
                </p>
                <p class="privacy__text">
                    Актуальная версия Политики всегда доступна на данной странице сайта. Текущая версия: <strong><?php echo esc_html($operator['policy_ver']); ?></strong>, принята <strong><?php echo esc_html($operator['policy_date']); ?></strong>.
                </p>
            </div>

            <div class="privacy__card privacy__contact">
                <div class="privacy__contact-box">
                    <h2 class="privacy__contact-title">Контакты оператора</h2>
                    <p class="privacy__contact-desc">По всем вопросам, связанным с обработкой персональных данных, пользователь может обратиться:</p>
                    <div class="privacy__contact-grid">
                        <a href="tel:<?php echo esc_attr($operator['phone_href']); ?>" class="privacy__contact-item">
                            <span class="privacy__contact-label">Телефон</span>
                            <span class="privacy__contact-value"><?php echo esc_html($operator['phone']); ?></span>
                        </a>
                        <a href="mailto:<?php echo esc_attr($operator['email']); ?>" class="privacy__contact-item">
                            <span class="privacy__contact-label">Email</span>
                            <span class="privacy__contact-value"><?php echo esc_html($operator['email']); ?></span>
                        </a>
                        <div class="privacy__contact-item privacy__contact-item_address">
                            <span class="privacy__contact-label">Адрес</span>
                            <span class="privacy__contact-value"><?php echo esc_html($operator['address']); ?></span>
                        </div>
                        <div class="privacy__contact-item privacy__contact-item_address">
                            <span class="privacy__contact-label">ИНН / КПП / ОГРН</span>
                            <span class="privacy__contact-value"><?php echo esc_html($operator['inn']); ?> / <?php echo esc_html($operator['kpp']); ?> / <?php echo esc_html($operator['ogrn']); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
