<?php get_header();?>

  <section class="banner">
    <div class="banner__heading-box">
      <h1 class="banner__main-heading">Adoption Listings</h1>
    </div>
  </section>
  <section class="adoptions__listings">
    <div class="container">
    <?php while(have_posts()){
      the_post();?>
        <div class="adoptions__listing">
          <div class="adoptions__listing--name-box">
            <a href="<?php the_permalink(); ?>" class="adoptions__listing--name link"><?php the_title(); ?></a>
          </div>
          <div class="adoptions__listing--breed-box">
            <p class="adoptions__listing--breed"><?php the_field('dog_breed') ?></p>
          </div>
          <div class="adoptions__listing--image-box">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          </div>
          <div class="adoptions__listing--nature-box">
            <p class="adoptions__listing--nature"><?php the_field('dog_temperament') ?></p>
          </div>
          <div class="adoptions__listing--excerpt-box">
            <p class="adoptions__listing--excerpt"><?php the_excerpt(); ?></p>
          </div>
          <div class="adoptions__listing--read-more-box">
            <a href="<?php the_permalink(); ?>" class="link">Read More &rarr;</a>
          </div>
      </div>
    <?php } ?>
      
    </div>
  </section>

<?php get_footer(); ?>