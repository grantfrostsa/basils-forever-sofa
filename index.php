<?php get_header(); ?>

  <section class="banner">
    <div class="banner__heading-box">
      <h1 class="banner__main-heading">Blog Posts</h1>
      <h2 class="banner__sub-heading">Keep up to date with out latest news</h2>
    </div>
  </section>

  <section class="blog__archive">
    <div class="container">

    <?php while(have_posts()){
      the_post();?>
      <div class="blog__article">
          <a href="<?php the_permalink(); ?>"><h2 class="blog__heading"><?php the_title(); ?></h2></a>
          <p class="blog__excerpt"><?php the_excerpt(); ?></p>
          <div class="blog__btn-box">
            <a href="<?php the_permalink(); ?>" class="link blog__red-more-btn">Read More &rarr;</a>
          </div>
      </div>
    <?php } ?>
  </div>
  <div class="blog__pagination-box">
    <div class="blog__pagination">
      <?php echo paginate_links(); ?>
    </div>
  </div>
  </section>

<?php get_footer(); ?>