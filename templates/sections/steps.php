<section class="layout steps">
  <div class="container">

    <div class="row">
      <div class="col-12 text-center title">
        <h5 class="sans-serif"><i>Zoveel smaken, zoveel soorten</i></h5>
        <h2>Soorten kaas</h2>
      </div>
    </div>

    <div class="row wrapper">
      <div class="col-10">

        <? if( have_rows('steps') ): ?>
          <? while( have_rows('steps') ): the_row(); ?>
            <? $image = get_sub_field('image'); ?>
            <div class="row item">
              <div class="col-3 text-center">
                <img class="img-fluid" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>">
              </div>
              <div class="col-9">
                <? the_sub_field('content'); ?>
              </div>
            </div>
          <? endwhile; ?>
        <? endif;?>

      </div>
    </div>
  </div>
</section>
