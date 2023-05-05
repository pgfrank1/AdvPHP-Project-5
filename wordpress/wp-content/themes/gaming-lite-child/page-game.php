<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-5">
        <?php
          $query = array('post_type' => 'game');
          $games = new WP_Query($query);

          while ( $games -> have_posts() ) :
            $games -> the_post();
            get_template_part( 'template-parts/content-page', 'game');

            wp_link_pages(
              array(
                'before' => '<div class="gaming-lite-child-pagination">',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>'
              )
            );
            comments_template();
          endwhile;
        ?>
      </div>
      <div class="col-lg-4 col-md-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>