<?php get_header(); ?>

<section class="single-adoption-listing">
    <div class="container">
      <div class="single-adoption-listing__header-box">
        <div class="single-adoption-listing__image-box">
          <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="single-adoption-listing__details-box">
          <ul class="single-adoption-listing__details-list">
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Name: </span><span class="single-adoption-listing__detail-info"><?php the_title(); ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Breed: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_breed') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Sex: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_sex') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Location: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_location') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Age: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_age') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Temperament: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_temperament') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Size: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_size') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Requirements: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_requirements') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Weary of: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_weary_of') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Training: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_training') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Cat Friendly: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_cat_friendly') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Dog Friendly: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_friendly') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Neutered/Spaid: </span><span class="single-adoption-listing__detail-info"><?php the_field('neuteredspaid') ?></span></li>
            <li class="single-adoption-listing__detail"><span class="single-adoption-listing__detail-tag">Status: </span><span class="single-adoption-listing__detail-info"><?php the_field('dog_status') ?></span></li>
          </ul>
        </div>
      </div>
      <div class="single-adoption-listing__description-box">
        <h2 class="single-adoption-listing__description-box--heading">All about <?php the_title(); ?>:</h2>
        <?php the_content(); ?>
      </div>
      <div class="single-adoption-listing__btn-box">
        <a href="#" class="btn-green-white">Apply for Adoption</a>
        <a href="<?php echo get_post_type_archive_link('dog'); ?>" class="btn-green-white">Back to All Listings</a>
      </div>
    </div>
  </section>


<?php get_footer(); ?>