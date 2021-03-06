<section class="element featured-pages">
  <div class="container py-4">
    <div class="row justify-content-center">
      <? if( have_rows('featured_pages') ): ?>
        <? while( have_rows('featured_pages') ): the_row(); ?>

          <? $post_object = get_sub_field('featured_page'); ?>

          <? if( $post_object ): ?>

          	<? $post = $post_object; ?>
          	<? setup_postdata( $post ); ?>

            <div class="col-12 col-sm-6 col-md-4 mb-5 mb-lg-4">
              <a class="unstyled" href="<?= get_permalink($post->ID); ?>">
                <h4><? the_sub_field('featured_page_title'); ?></h4>
                <img class="img-fluid mb-2" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-page'); ?>" alt="<? the_sub_field('featured_page_title'); ?>">
                <p><? the_sub_field('featured_page_description'); ?></p>
              </a>
            </div>

            <?php wp_reset_postdata(); ?>
          <? endif; ?>

        <? endwhile;?>
      <? endif; ?>
    </div>
  </div>
</section>
