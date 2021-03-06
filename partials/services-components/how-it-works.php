<?php $root = get_template_directory_uri(); ?>
<section id="how-it-works">
  <div class="spacing spacing--md"></div>
  <div class="inner">
    <div class="has-max is-center content-block">
      <h2 class="spacing-btn"><?php the_field('how_it_works_title'); ?></h2>
    </div>
    <div class="four-column-icon-section on-light">
      <?php 
        $works = get_field('how_it_works_item');
        foreach($works as $theWorks) : 
      ?>
        <div class="icon-section-element">

          <div class="icon-section-element__inner">
            <div class="four-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="#000000" class="nc-icon-wrapper"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></g></svg>
            </div>
          </div>

          <div class="icon-section-element__inner general-content">
            <p><?php echo $theWorks['title']; ?></p>
            <p><?php echo $theWorks['blurb']; ?></p>
          </div>

        </div>
        <?php endforeach; ?>
    </div>
  </div>
  <div class="spacing spacing--lg"></div>
</section>