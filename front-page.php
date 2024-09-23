<?php get_header(); ?>
<section class="hero">
    <div class="container">
      <div class="hero__text-box">
        <h1 class="hero__main-heading">Helping Forgotten Dogs Find The Forever Homes They Deserve</h1>
        <p class="hero__main-heading-subtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure delectus odit illo expedita, tenetur, ea, natus itaque dolorem minus ipsum fuga modi doloribus? Doloribus sit, recusandae quam quis quidem deserunt.</p>
        <a href="<?php echo site_url('/about') ?>" class="btn-green-white hero__cta-btn">About Us</a>
        <a href="<?php echo site_url('/dogs') ?>" class="btn-green-white hero__cta-btn">View Adoptions</a>
      </div>
    </div>
  </section>
  <section class="posts">
    <div class="container">
      <div class="posts__adoptions">
        <div class="posts__adoptions--main-heading-box">
          <a href="<?php echo site_url('/dogs') ?>" class="link"><h2 class="posts__adoptions--main-heading">Our Latest Rescues</h2></a>
        </div>
          <div class="posts__adoptions--listing-box">
          <?php 
          $homepageListing = new WP_Query(array(
            'post_per_page' => 3,
            'post_type' => 'dog'
          ));
          
          while($homepageListing->have_posts()) {
            $homepageListing->the_post();?>
            <div class="posts__adoptions--listing">
              <div class="posts__adoptions--image-box">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
              </div>
                <div class="posts__adoptions--text-box">
                  <a href="<?php the_permalink(); ?>" class="link"><h3 class="posts__adoptions--name"><?php the_title() ?></h3></a>
                  <p class="posts__adoptions--breed"><?php the_field('dog_breed') ?></p>
                  <p class="posts__adoptions--excerpt"><?php if(has_excerpt()){
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 20);
                  };?></p>
                  <a href="<?php the_permalink(); ?>" class="link">Read More &rarr;</a>
                </div>
              </div>
          <?php } ?>
            
        </div>
        <div class="posts__adoptions--btn-box">
          <a href="<?php echo get_post_type_archive_link('dog'); ?>" class="btn-green-white posts__adoptions--cta-btn">View All Listings</a>
        </div>
      </div>
      <div class="posts__blog">
        <div class="posts__blog--main-heading-box">
          <a href="<?php echo site_url('/blog') ?>" class="link"><h2 class="posts__blog--main-heading">Read Our Blog</h2></a>
        </div>
        <div class="posts__blog--article-box">
        <?php 
        $homePagePosts = new WP_Query(array(
          'posts_per_page' => 3
        ));

        while($homePagePosts->have_posts()){
          $homePagePosts->the_post();?>
          <div class="posts__blog--article">
            <a href="<?php the_permalink(); ?>"><h3 class="link posts__blog--heading"><?php the_title() ?></h3></a>
            <p class="posts__blog--excerpt"><?php if(has_excerpt()){
              echo get_the_excerpt();
            } else {
              echo wp_trim_words(get_the_content(), 20);
            }; ?></p>
            <div class="posts__blog--link-box">
              <a href="<?php the_permalink(); ?>" class="link posts__blog-link">Read more &rarr;</a>
          </div>
        <?php } wp_reset_postdata() ?>
          </div>
        </div>
        <div class="posts__blog--btn-box">
          <a href="<?php echo site_url('/blog'); ?>" class="btn-green-white posts__blog--cta-btn">View All Posts</a>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="container">
      <div class="about__text-box">
        <h2 class="about__main-heading">About us</h2>
        <p class="about__excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia animi itaque omnis, vel nulla quo consequatur eligendi esse, dicta temporibus libero maxime possimus porro deleniti pariatur neque illum architecto totam.</p>
        <a href="<?php echo site_url('/about') ?>" class="btn-white-green about__cta-btn">Find out more</a>
      </div>
      <div class="about__image-box">
        <img src="<?php echo get_theme_file_uri('/assets/imgs/about-image.jpg'); ?>" alt="3 puppies looking lost" class="about__image">
      </div>
    </div>
  </section>
<?php get_footer(); ?>