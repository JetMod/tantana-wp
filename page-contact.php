<?php
get_header();
?>

<?php
/* Template Name: contact */
?>

<main class="main">
      <section class="contact">
        <?php
        // Получаем данные ACF
        $contact = get_field('contact_title');
        $contact_social = get_field('contact_social');
        $contact_map = get_field('contact_map');

        // Устанавливаем значения по умолчанию
        $title = !empty($contact) ? $contact : get_the_title();
        ?>
        <div class="contact__title_container">
          <h1 class="contact__title"><?php echo $title; ?>
            <span style="position:absolute; width:1px; height:1px; padding:0; margin:-1px; overflow:hidden; clip:rect(0,0,0,0); white-space:nowrap; border:0;">
              Контакты детского центра «Тантана»
            </span>
          </h1>
          <span class="contact__title-shadow"><?php echo $title; ?> </span>
        </div>

		  <div class="contact__container">
			  <h2 class="contact__container_text">контактные данные</h2>
			  <ul class="contact__ul">
				  <li class="contact__li">
					  <?php the_field( 'address' ); ?>
					  <?php the_field( 'phone' ); ?>
					  <?php the_field( 'email' ); ?>
				  </li>

				  <li class="contact__li">
					  График работы:
					  <br />
					  <?php the_field( 'hours' ); ?>
				  </li>
			  </ul>
		  </div>

        <?php if ($contact_social && !empty($contact_social)): ?>
        <div class="contact__container">
          <h2 class="contact__container_text">соцсети</h2>
          <ul class="contact__ul">
            <?php foreach ($contact_social as $social): ?>
            <li class="contact__li<?php echo !empty($social['border']) && $social['border'] ? ' contact__li_border' : ''; ?>">
              <a
                href="<?php echo !empty($social['url']) ? $social['url'] : '#'; ?>"
                class="contact__li_a"
                target="_blank"
                rel="noopener noreferrer"
                ><?php echo !empty($social['name']) ? $social['name'] : 'Социальная сеть'; ?></a
              >
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
      </section>
      
      <iframe
        src="<?php echo !empty($contact_map) ? $contact_map : 'https://yandex.ru/map-widget/v1/?um=constructor%3Af071ac96eecb8dc2fdb59ab37c1c0db873bd2252993be2a11666bb8b38d416ba&amp;source=constructor'; ?>"
        width="1280"
        height="600"
        frameborder="0"
        class="contact__map"
      ></iframe>
    </main>

<?php
get_footer();
?>
