<?php
  // placeholder data
  $themeTitle = 'good-company-betawolf';
  // $sectionNote = 'NOTE: The page will automatially reload back to the default screen when entering content, this is normal. To see your content, first hit "publish" to save your changes, and then click on the section to view your content';
  $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae eum animi nam, repudiandae voluptatem in esse sint, dignissimos illo labore nobis ipsam id. Deserunt dolorum dolore quasi dicta ab voluptate?';
  $markupNote = 'NOTE: You can add HTML elements here';

  function setup_customizers($wp_customize) {
    global $themeTitle, $lorem, $markupNote;
    // HERO SECTION START

    $wp_customize->add_section('hero', array(
      'title' => __('Hero Section', $themeTitle),
      'description' => sprintf(__("Options for Hero Section", $themeTitle)),
      'priority' => 1
    ));

    $wp_customize->add_setting('hero_heading', array(
      'default' => "A Cool Heading That Wows!", $themeTitle,
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('hero_heading', array(
      'label' => __('Heading Text', $themeTitle),
      'section' => 'hero',
      'priority' => 2
    ));


    $wp_customize->add_setting('hero_subheading', array(
      'default' => "Here's an awesome subheading! It will reinforce the statement I made in the heading above, and entice the reader to scroll down to read more!", $themeTitle,
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control('hero_subheading', array(
      'type' => 'textarea',
      'label' => __('Sub-Heading Text', $themeTitle),
      'section' => 'hero',
      'priority' => 2
    ));

    // img
    $wp_customize->add_setting('hero_image', array(
      'default' => get_bloginfo('template_directory'). '/assets/images/demo-hero-image.svg',
      'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
      'label' => __('Hero Image', $themeTitle),
      'section' => 'hero',
      'settings' => 'hero_image',
      'priority' => 3
    )
  ));
    // HERO SECTION END


  // FEATURE SECTION START
  $wp_customize->add_section('features', array(
    'title' => __('Feature Section', $themeTitle),
    'description' => sprintf(__("Options for Feature Section", $themeTitle)),
    'priority' => 1
  ));
  // feature1
  $wp_customize->add_setting('feature1_image', array(
    'default' => get_bloginfo('template_directory'). '/assets/images/icons/demo-icon.svg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature1_image', array(
    'label' => __('Feature 1 Image', $themeTitle),
    'section' => 'features',
    'settings' => 'feature1_image',
    'priority' => 1
  )
  ));

  $wp_customize->add_setting('feature1_heading', array(
    'default' => "Feature 1 Heading", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('feature1_heading', array(
    'label' => __('Feature 1 Heading Text', $themeTitle),
    'section' => 'features',
    'priority' => 2
  ));

  $wp_customize->add_setting('feature1_content', array(
    'default' => "Feature one is awesome! It's better than all the other features, that's why it's the first one that you see!", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('feature1_content', array(
    'type' => 'textarea',
    'label' => __('Feature 1 Content', $themeTitle),
    'section' => 'features',
    'priority' => 4
  ));

  // feature2

  $wp_customize->add_setting('feature2_image', array(
    'default' => get_bloginfo('template_directory'). '/assets/images/icons/demo-icon.svg',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature2_image', array(
    'label' => __('Feature 2 Image', $themeTitle),
    'section' => 'features',
    'settings' => 'feature2_image',
    'priority' => 5
  )
  ));

  $wp_customize->add_setting('feature2_heading', array(
    'default' => "Feature 2 Heading", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('feature2_heading', array(
    'label' => __('Feature 2 Heading Text', $themeTitle),
    'section' => 'features',
    'priority' => 6
  ));

  $wp_customize->add_setting('feature2_content', array(
    'default' => "Feature 2 is cool, but it's less important that feature 1 and 3. So let's get it out of the way so that we can finish big with feature 3!", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('feature2_content', array(
    'type' => 'textarea',
    'label' => __('Feature 2 Content', $themeTitle),
    'section' => 'features',
    'priority' => 8
  ));

  // feature3
    $wp_customize->add_setting('feature3_image', array(
      'default' => get_bloginfo('template_directory'). '/assets/images/icons/demo-icon.svg',
      'type' => 'theme_mod'
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'feature3_image', array(
      'label' => __('Feature 3 Image', $themeTitle),
      'section' => 'features',
      'settings' => 'feature3_image',
      'priority' => 9
    )
    ));
  
    $wp_customize->add_setting('feature3_heading', array(
      'default' => "Feature 3 Heading", $themeTitle,
      'type' => 'theme_mod'
    ));
  
    $wp_customize->add_control('feature3_heading', array(
      'label' => __('Feature 3 Heading Text', $themeTitle),
      'section' => 'features',
      'priority' => 10
    ));

    $wp_customize->add_setting('feature3_content', array(
      'default' => "Feature 3 is here, and when they said 'save the best for last' they were right! Feature 3 is awesome!! and is sure to entice the reader to sign-up!", $themeTitle,
      'type' => 'theme_mod'
    ));
  
    $wp_customize->add_control('feature3_content', array(
      'type' => 'textarea',
      'label' => __('Feature 3 Content', $themeTitle),
      'section' => 'features',
      'priority' => 12
    ));
    // feature3
  // FEATURE SECTION END

  // TESTIMONIALS SECTION START
  $wp_customize->add_section('testimonials', array(
    'title' => __('Testimonials Section', $themeTitle),
    'description' => sprintf(__("Options for Testimonials Section", $themeTitle)),
    'priority' => 3
  ));
  // testimonial 1
  $wp_customize->add_setting('testimonial1_image', array(
    'default' => get_bloginfo('template_directory'). '/assets/images/avatar-1.png',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial1_image', array(
    'label' => __('Testimonial 1 Image', $themeTitle),
    'section' => 'testimonials',
    'settings' => 'testimonial1_image',
    'priority' => 1
  )
  ));

  $wp_customize->add_setting('testimonial1_name', array(
    'default' => "Name", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('testimonial1_name', array(
    'label' => __('Testimonial 1 Name', $themeTitle),
    'section' => 'testimonials',
    'priority' => 2
  ));

  $wp_customize->add_setting('testimonial1_location', array(
    'default' => "Seattle, WA", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('testimonial1_location', array(
    'label' => __('Testimonial 1 location', $themeTitle),
    'section' => 'testimonials',
    'priority' => 3
  ));

  $wp_customize->add_setting('testimonial1_content', array(
    'default' => "Here's a statement that says how happy of a customer I am!", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('testimonial1_content', array(
    'type' => 'textarea',
    'label' => __("Testimonial 1 Content", $themeTitle),
    'section' => 'testimonials',
    'priority' => 4
  ));
  // testominial 2
  $wp_customize->add_setting('testimonial2_image', array(
    'default' => get_bloginfo('template_directory'). '/assets/images/avatar-2.png',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial2_image', array(
    'label' => __('Testimonial 2 Image', $themeTitle),
    'section' => 'testimonials',
    'settings' => 'testimonial2_image',
    'priority' => 5
  )
  ));

  $wp_customize->add_setting('testimonial2_name', array(
    'default' => "Name", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('testimonial2_name', array(
    'label' => __('Testimonial 2 Name', $themeTitle),
    'section' => 'testimonials',
    'priority' => 6
  ));

  $wp_customize->add_setting('testimonial2_location', array(
    'default' => "Seattle, WA", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('testimonial2_location', array(
    'label' => __('Testimonial 2 location', $themeTitle),
    'section' => 'testimonials',
    'priority' => 7
  ));

  $wp_customize->add_setting('testimonial2_content', array(
    'default' => "Here's a statement that says how happy of a customer I am!", $themeTitle,
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('testimonial2_content', array(
    'type' => 'textarea',
    'label' => __('Testimonial 2 Content', $themeTitle),
    'section' => 'testimonials',
    'priority' => 8
  ));
    // testominial 3
    $wp_customize->add_setting('testimonial3_image', array(
      'default' => get_bloginfo('template_directory'). '/assets/images/avatar-3.png',
      'type' => 'theme_mod'
    ));
  
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'testimonial3_image', array(
      'label' => __('Testimonial 3 Image', $themeTitle),
      'section' => 'testimonials',
      'settings' => 'testimonial3_image',
      'priority' => 9
    )
    ));
  
    $wp_customize->add_setting('testimonial3_name', array(
      'default' => "Name", $themeTitle,
      'type' => 'theme_mod'
    ));
  
    $wp_customize->add_control('testimonial3_name', array(
      'label' => __('Testimonial 3 Name', $themeTitle),
      'section' => 'testimonials',
      'priority' => 10
    ));
  
    $wp_customize->add_setting('testimonial3_location', array(
      'default' => "Seattle, WA", $themeTitle,
      'type' => 'theme_mod'
    ));
  
    $wp_customize->add_control('testimonial3_location', array(
      'label' => __('Testimonial 3 location', $themeTitle),
      'section' => 'testimonials',
      'priority' => 11
    ));
  
    $wp_customize->add_setting('testimonial3_content', array(
      'default' => "Here's a statement that says how happy of a customer I am!", $themeTitle,
      'type' => 'theme_mod'
    ));
  
    $wp_customize->add_control('testimonial3_content', array(
      'type' => 'textarea',
      'label' => __('Testimonial 3 Content', $themeTitle),
      'section' => 'testimonials',
      'priority' => 12
    ));
  // TESTIMONIALS SECTION END
  
  // FAREWELL SECTION START
  $wp_customize->add_section('exit-hero', array(
    'title' => __('Exit Hero Section', $themeTitle),
    'description' => sprintf(__("Options for Exit Hero Section", $themeTitle)),
    'priority' => 4
  ));

  $wp_customize->add_setting('exit_hero_heading', array(
    'default' => "Let's Talk!", $themeTitle,
    'type' => 'theme_mod'
  ));


  $wp_customize->add_control('exit_hero_heading', array(
    'label' => __('Exit Hero heading', $themeTitle),
    'section' => 'exit-hero',
    'priority' => 1
  ));

  $wp_customize->add_setting('exit_hero_content', array(
    'default' => "Here's some text that brings it home! Any doubts and concerns should be settled here! Give us a try!", $themeTitle,
    'type' => 'theme_mod'
  ));


  $wp_customize->add_control('exit_hero_content', array(
    'type' => 'textarea',
    'label' => __('Exit Hero Content', $themeTitle),
    'section' => 'exit-hero',
    'priority' => 1
  ));
  // FAREWELL SECTION END

  // FOOTER SECTION START
  $wp_customize->add_section('footer', array(
    'title' => __('Footer Section', $themeTitle),
    'description' => sprintf(__("Options for Footer Section", $themeTitle)),
    'priority' => 5
  ));

  $wp_customize->add_setting('credits', array(
    'default' => "© Mike Arriaga", $themeTitle,
    'type' => 'theme_mod'
  ));


  $wp_customize->add_control('credits', array(
    'label' => __('Copyright Name', $themeTitle),
    'section' => 'footer',
    'priority' => 1
  ));
  // FOOTER SECTION END

  }