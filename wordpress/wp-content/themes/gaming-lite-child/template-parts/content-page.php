<?php
  global $post;
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('page-single p-3 mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail(''); ?>
    </div>
  <?php }?>
  <h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-content">
    <div class="row">
      <?php
      $posts = get_posts(array(
         'numberposts' => -1,
        'post_type' => 'video-game'
      ));
      if ( $posts ) :

        foreach ($posts as $post)
        {
          echo get_field('title') . '<br>';
        }

      else:

        esc_html_e( 'Sorry, no post found on this archive.', 'gaming-lite' );

      endif;

      get_template_part( 'template-parts/pagination' );
      ?>
    </div>
  </div>
</div>