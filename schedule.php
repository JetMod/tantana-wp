<?php
/**
 * Блок «Расписание занятий».
 * Данные из ACF: Настройки Тантана → Расписание занятий.
 * Если полей нет — выводится один день с примером.
 */
$schedule_title   = get_field('schedule_title', 'option') ?: 'Расписание занятий';
$schedule_col_1   = get_field('schedule_column_left', 'option') ?: 'день недели';
$schedule_col_2   = get_field('schedule_column_right', 'option') ?: 'время занятий';
$schedule_days    = get_field('schedule_days', 'option');

$schedule_icon_profile = '/wp-content/uploads/2025/04/scheduleProfile.svg';
$schedule_icon_time    = '/wp-content/uploads/2025/04/scheduleTime.svg';

if (!is_array($schedule_days) || count($schedule_days) === 0) {
    $schedule_days = [
        [
            'day_name'  => 'Понедельник',
            'day_cards' => [
                [
                    'card_title'       => '"Умники разумники"',
                    'card_title_color' => '',
                    'card_time'        => '9:00',
                    'card_age'         => '3-5 лет',
                    'card_duration'    => '45 минут',
                    'card_description' => 'На русском языке',
                ],
            ],
        ],
    ];
}
?>
<section class="schedule">
    <h2 class="schedule__title"><?php echo esc_html($schedule_title); ?></h2>
    <div class="schedule__line">
        <p class="schedule__time"><?php echo esc_html($schedule_col_1); ?></p>
        <p class="schedule__time"><?php echo esc_html($schedule_col_2); ?></p>
    </div>
    <ul class="schedule__container">
        <?php foreach ($schedule_days as $index => $day) :
            $day_name  = isset($day['day_name']) ? $day['day_name'] : '';
            $day_cards = isset($day['day_cards']) && is_array($day['day_cards']) ? $day['day_cards'] : [];
            $is_first  = ($index === 0);
            $day_class  = 'schedule__day' . ($is_first ? ' active' : '');
        ?>
            <li class="<?php echo esc_attr($day_class); ?>">
                <p class="schedule__p"><?php echo esc_html($day_name); ?></p>
                <div class="schedule__cards">
                    <?php foreach ($day_cards as $card) :
                        $title   = isset($card['card_title']) ? $card['card_title'] : '';
                        $color   = isset($card['card_title_color']) ? trim((string) $card['card_title_color']) : '';
                        $time    = isset($card['card_time']) ? $card['card_time'] : '';
                        $age     = isset($card['card_age']) ? $card['card_age'] : '';
                        $duration = isset($card['card_duration']) ? $card['card_duration'] : '45 минут';
                        $desc    = isset($card['card_description']) ? $card['card_description'] : '';
                        $title_class = 'schedule__card_title';
                        if ($color === 'pink') $title_class .= ' schedule__pink';
                        elseif ($color === 'blue') $title_class .= ' schedule__blue';
                        elseif ($color === 'green') $title_class .= ' schedule__green';
                    ?>
                        <div class="schedule__card">
                            <div>
                                <p class="<?php echo esc_attr($title_class); ?>"><?php echo esc_html($title); ?></p>
                            </div>
                            <div class="schedule__card_white">
                                <h3 class="schedule__card_time"><?php echo esc_html($time); ?></h3>
                                <div class="schedule__card_container">
                                    <img src="<?php echo esc_url($schedule_icon_profile); ?>" alt="Возраст группы" class="schedule__card_img" />
                                    <p class="schedule__card_text"><?php echo esc_html($age); ?></p>
                                    <img src="<?php echo esc_url($schedule_icon_time); ?>" alt="Длительность занятия" class="schedule__card_img" />
                                    <p class="schedule__card_text"><?php echo esc_html($duration); ?></p>
                                </div>
                                <?php if ($desc !== '') : ?>
                                    <p class="schedule__cards_text"><?php echo esc_html($desc); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <svg class="schedule__toggle" width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M33.75 23.9062H11.25C10.4812 23.9062 9.84375 23.2687 9.84375 22.5C9.84375 21.7312 10.4812 21.0938 11.25 21.0938H33.75C34.5187 21.0938 35.1562 21.7312 35.1562 22.5C35.1562 23.2687 34.5187 23.9062 33.75 23.9062Z" fill="#F6F6F6" />
                    <path d="M22.5 35.1562C21.7312 35.1562 21.0938 34.5187 21.0938 33.75V11.25C21.0938 10.4812 21.7312 9.84375 22.5 9.84375C23.2687 9.84375 23.9062 10.4812 23.9062 11.25V33.75C23.9062 34.5187 23.2687 35.1562 22.5 35.1562Z" fill="#F6F6F6" />
                </svg>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
