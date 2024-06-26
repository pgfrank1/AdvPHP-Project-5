<?php get_header(); ?>

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mt-5">
        <?php
          while ( have_posts() ) :

            the_post();
            get_template_part( 'template-parts/content', 'post-game');
            echo get_field('description');

            $query = array('post_type' => 'game', 'orderby' => 'title', 'order' => 'ASC');
            $games = new WP_Query($query);
            if ( $games -> have_posts() )
            {
              while ( $games -> have_posts() )
              {
                $games->the_post();
                echo '<br>' . get_the_title();
              }
            }


            wp_link_pages(
              array(
                'before' => '<div class="gaming-lite-pagination">',
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