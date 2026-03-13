<section class="activities__section">
        <h2 class="activities__title"><?php echo get_field('module_activities_title', 'option') ?: 'Другие развлечения'; ?></h2>
        <div class="activities__container">
          <?php
          // Получаем список развлечений из ACF
          $activities_list = get_field('module_activities_list', 'option');
          $decorative_elements = get_field('module_activities_decorative', 'option');
          
          // Если развлечения не найдены, показываем демо-развлечения
          if (!$activities_list) {
              // Демо-развлечения
              $demo_activities = array(
                  array(
                      'activity_title' => 'Мастер-классы',
                      'activity_image' => '/wp-content/uploads/2025/04/activities1.webp',
                      'activity_link' => site_url('/master-classes'),
                      'activity_position' => 'top_left'
                  ),
                  array(
                      'activity_title' => 'Игровой центр',
                      'activity_image' => '/wp-content/uploads/2025/04/activities3.webp',
                      'activity_link' => site_url('/gamecenter'),
                      'activity_position' => 'top_center'
                  ),
                  array(
                      'activity_title' => 'Tantana Camp',
                      'activity_image' => '/wp-content/uploads/2025/04/activities4.webp',
                      'activity_link' => site_url('/camp'),
                      'activity_position' => 'top_right'
                  ),
                  array(
                      'activity_title' => 'Развивающие занятия',
                      'activity_image' => '/wp-content/uploads/2025/04/activities2.webp',
                      'activity_link' => site_url('/#info'),
                      'activity_position' => 'bottom_left'
                  ),
                  array(
                      'activity_title' => 'Tantana Camp',
                      'activity_image' => '/wp-content/uploads/2025/04/activities4.webp',
                      'activity_link' => site_url('/camp'),
                      'activity_position' => 'mobile_only'
                  )
              );
              
              $activities_list = $demo_activities;
          }
          
          // Если декоративные элементы не найдены, показываем демо-элементы
          if (!$decorative_elements) {
              // Демо-декоративные элементы
              $demo_decorative = array(
                  array(
                      'decorative_image' => '/wp-content/uploads/2025/04/cubуBlue.webp',
                      'decorative_class' => 'activities__mobile'
                  ),
                  array(
                      'decorative_image' => '/wp-content/uploads/2025/04/cubeRed.webp',
                      'decorative_class' => 'activities__mobile'
                  ),
                  array(
                      'decorative_image' => '/wp-content/uploads/2025/04/cubeOrange.webp',
                      'decorative_class' => 'activities__mobile_two'
                  )
              );
              
              $decorative_elements = $demo_decorative;
          }
          
          // Сортируем развлечения по позиции
          $top_left = null;
          $top_center = null;
          $top_right = null;
          $bottom_left = null;
          $bottom_right = null;
          $mobile_only = null;
          
          foreach ($activities_list as $activity) {
              $position = isset($activity['activity_position']) ? $activity['activity_position'] : '';
              
              if ($position == 'top_left') {
                  $top_left = $activity;
              } elseif ($position == 'top_center') {
                  $top_center = $activity;
              } elseif ($position == 'top_right') {
                  $top_right = $activity;
              } elseif ($position == 'bottom_left') {
                  $bottom_left = $activity;
              } elseif ($position == 'bottom_right') {
                  $bottom_right = $activity;
              } elseif ($position == 'mobile_only') {
                  $mobile_only = $activity;
              }
          }
          
          // Выводим верхний контейнер
          ?>
          <?php if ($top_left): ?>
          <div>
            <a href="<?php echo $top_left['activity_link']; ?>">
              <img
                src="<?php echo $top_left['activity_image']; ?>"
                alt="<?php echo $top_left['activity_title']; ?>"
                class="activities__img activities__img_hover"
              />
            </a>

            <p class="activities__text"><?php echo $top_left['activity_title']; ?></p>
          </div>
          <?php endif; ?>

          <div class="activities__center">
            <?php 
            // Выводим первый декоративный элемент
            $blue_cube = null;
            foreach ($decorative_elements as $element) {
                if (strpos($element['decorative_class'], 'activities__mobile') !== false && !$blue_cube) {
                    $blue_cube = $element;
                    break;
                }
            }
            
            if ($blue_cube):
            ?>
            <img
              src="<?php echo $blue_cube['decorative_image']; ?>"
              alt="Декоративный куб"
              class="activities__img <?php echo $blue_cube['decorative_class']; ?>"
            />
            <?php endif; ?>
            
            <div class="activities__center_flex">
              <?php 
              // Выводим второй декоративный элемент
              $red_cube = null;
              foreach ($decorative_elements as $element) {
                  if (strpos($element['decorative_class'], 'activities__mobile') !== false && $element != $blue_cube && !$red_cube) {
                      $red_cube = $element;
                      break;
                  }
              }
              
              if ($red_cube):
              ?>
              <img
                src="<?php echo $red_cube['decorative_image']; ?>"
              alt="Декоративный куб"
                class="activities__img <?php echo $red_cube['decorative_class']; ?>"
              />
              <?php endif; ?>
              
              <?php if ($top_center): ?>
              <div>
                <a href="<?php echo $top_center['activity_link']; ?>">
                  <img
                    src="<?php echo $top_center['activity_image']; ?>"
                    alt="<?php echo $top_center['activity_title']; ?>"
                    class="activities__img activities__img_hover"
                  />
                </a>

                <p class="activities__text"><?php echo $top_center['activity_title']; ?></p>
              </div>
              <?php endif; ?>
            </div>
          </div>
          
          <?php if ($top_right): ?>
          <div class="activities__mobile_none">
            <a href="<?php echo $top_right['activity_link']; ?>">
              <img
                src="<?php echo $top_right['activity_image']; ?>"
                alt="<?php echo $top_right['activity_title']; ?>"
                class="activities__img activities__img_hover"
              />
            </a>

            <p class="activities__text"><?php echo $top_right['activity_title']; ?></p>
          </div>
          <?php endif; ?>
        </div>
        
        <div class="activities__container_two">
          <?php if ($bottom_left): ?>
          <div>
            <a href="<?php echo $bottom_left['activity_link']; ?>">
              <img
                src="<?php echo $bottom_left['activity_image']; ?>"
                alt="<?php echo $bottom_left['activity_title']; ?>"
                class="activities__img activities__img_hover"
              />
            </a>

            <p class="activities__text"><?php echo $bottom_left['activity_title']; ?></p>
          </div>
          <?php endif; ?>
          
          <?php if ($mobile_only): ?>
          <div class="activities__mobile_active">
            <a href="<?php echo $mobile_only['activity_link']; ?>">
              <img
                src="<?php echo $mobile_only['activity_image']; ?>"
                alt="<?php echo $mobile_only['activity_title']; ?>"
                class="activities__img activities__img_hover"
              />
            </a>

            <p class="activities__text"><?php echo $mobile_only['activity_title']; ?></p>
          </div>
          <?php endif; ?>
          
          <?php 
          // Выводим третий декоративный элемент
          $orange_cube = null;
          foreach ($decorative_elements as $element) {
              if (strpos($element['decorative_class'], 'activities__mobile_two') !== false) {
                  $orange_cube = $element;
                  break;
              }
          }
          
          if ($orange_cube):
          ?>
          <img
            src="<?php echo $orange_cube['decorative_image']; ?>"
            alt="Декоративный куб"
            class="activities__img <?php echo $orange_cube['decorative_class']; ?>"
          />
          <?php endif; ?>
        </div>
      </section>