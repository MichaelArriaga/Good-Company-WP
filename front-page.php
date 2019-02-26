<?php get_header(); ?>
<div class="container">
    <div class="navbar">
      <label for="toggle">&#9776;</label>
      <input type="checkbox" id="toggle" />

    </div>
    <div class="hero--container">


      <div class="hero--container-left">

        <h1 class="hero--heading"><?php echo get_theme_mod('hero_heading', 'Professional Websites & Designs For Everyone.'); ?></h1>
        <p class="hero--subheading">
         <?php echo get_theme_mod('hero_subheading','We help businesses win with user-centered design,
          SEO expertise, and friendly service. We ensure that you
          get an elegant website at a reasonable
          price, every time.'); ?></p>
      </div>

      <div class="hero--container-right">
        <img class="hero--image" src="<?php echo get_theme_mod('hero_image', get_bloginfo('template_url'). '/assets/images/demo-hero-image.svg'); ?>" alt="">
      </div>

    </div>

    <div class="feature--container">

      <div class="feature--item">
        <img class="feature--item-image" src="<?php echo get_theme_mod('feature1_image', get_bloginfo('template_url'). '/assets/images/icons/demo-icon.svg'); ?>" alt="">
        <h1 class="feature--item-heading"><?php echo get_theme_mod('feature1_heading', 'Website Development'); ?></h1>
        <p class="feature--item-content"><?php echo get_theme_mod('feature1_content', 'Websites developed with custom and unique themes for any industry and project.'); ?></p>
      </div>


      <div class="feature--item">
        <img class="feature--item-image" src="<?php echo get_theme_mod('feature2_image', get_bloginfo('template_url'). '/assets/images/icons/demo-icon.svg'); ?>" alt="">
        <h1 class="feature--item-heading"><?php echo get_theme_mod('feature2_heading', 'Simplified Hosting & Domains'); ?></h1>
        <p class="feature--item-content"><?php echo get_theme_mod('feature2_content', 'You pick your own domain. We use our preferred hosting providers so
          you can get reliable, and secure hosting.'); ?></p>
      </div>


      <div class="feature--item">
        <img class="feature--item-image" src="<?php echo get_theme_mod('feature3_image', get_bloginfo('template_url'). '/assets/images/icons/demo-icon.svg'); ?>" alt="">
        <h1 class="feature--item-heading"><?php echo get_theme_mod('feature3_heading', 'Blog Posts & More'); ?></h1>
        <p class="feature--item-content"><?php echo get_theme_mod('feature3_content', 'Create your own blog posts, events, & more with an easy-to-use dashboard that
          we customize to fit your needs.'); ?></p>
      </div>
    </div>

    <div class="testimonial--container-outer">
      <h1 class="testimonial--heading">What Our Customers Have To Say</h1>

      <div class="testimonial--container">

        <div class="testimonial--item">
          <div class="testimonial--info">
            <h1 class="testimonial--name"><?php echo get_theme_mod('testimonial1_name', 'Frank'); ?></h1>
            <h2 class="testimonial--location"><?php echo get_theme_mod('testimonial1_location', 'Tacoma, WA'); ?></h2>
          </div>
          <div class="testimonial--avatar">
            <div class="avatar--circle">
              <img src="<?php echo get_theme_mod('testimonial1_image', get_theme_file_uri('/assets/images/avatar-1.png')); ?>" alt="">

            </div>
          </div>
          <p class="testimonial--content">"<?php echo get_theme_mod('testimonial1_content', 'Working with Mike, my one word is WOW! He has taken my photography business
            to the next level!!'); ?>" </p>
        </div>

        <div class="testimonial--item">
          <div class="testimonial--info">
            <h1 class="testimonial--name"><?php echo get_theme_mod('testimonial2_name', 'Alex'); ?></h1>
            <h2 class="testimonial--location"><?php echo get_theme_mod('testimonial2_location', 'Renton, WA'); ?></h2>
          </div>
          <div class="testimonial--avatar">
            <div class="avatar--circle">
              <img src="<?php echo get_theme_mod('testimonial2_image', get_theme_file_uri('/assets/images/avatar-2.png')); ?>" alt="">

            </div>
          </div>
          <p class="testimonial--content">"<?php echo get_theme_mod('testimonial2_content', 'Fast, Friendly, and knows his stuff. What else is there to say?'); ?>" </p>
        </div>

        <div class="testimonial--item">
          <div class="testimonial--info">
            <h1 class="testimonial--name"><?php echo get_theme_mod('testimonial3_name', 'Ryan'); ?></h1>
            <h2 class="testimonial--location"><?php echo get_theme_mod('testimonial3_location', 'Seattle, WA'); ?></h2>
          </div>
          <div class="testimonial--avatar">
            <div class="avatar--circle">
              <img src="<?php echo get_theme_mod('testimonial3_image', get_theme_file_uri('/assets/images/avatar-3.png')); ?>" alt="">

            </div>
          </div>
          <p class="testimonial--content">"<?php echo get_theme_mod('testimonial2_content', "I know who I'm going to recommend from now on...Mike of course!"); ?>" </p>
        </div>

      </div>

    </div>

    <div class="contact--header-container">
      <h1 class="contact--header"><?php echo get_theme_mod('exit_hero_heading', "Let's Talk!"); ?></h1>
      <p class="contact--content"><?php echo get_theme_mod('exit_hero_content', "Need a new website? Need help with your current site?
        No matter your needs, we can help! Fill out the contact form
        below and we will get back to you quickly!"); ?>
      </p>
    </div>


<?php get_footer(); ?>
