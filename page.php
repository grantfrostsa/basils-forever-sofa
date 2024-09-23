<?php get_header(); ?>
<section class="main-banner" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['sizes']['page-banner'] ?>)">
    <div class="main-banner__text-box">
      <h1 class="main-banner__main-heading"><?php the_title(); ?></h1>
      <h2 class="main-banner__sub-heading"><?php the_field('page_banner_subtitle');?></h2>
    </div>
  </section>
  <main class="main">
    <div class="container">
      <?php while(have_posts()){
        the_post();
        the_content();?>
    </div>
  </main>
      <?php }; ?>
      
<?php get_footer(); ?>