<? use IMAGA\Theme\Extras; ?>

<? get_template_part('templates/header'); ?>

<? get_template_part('templates/components/breadcrumbs'); ?>

<? if( have_rows('sections') ): ?>
  <? while( have_rows('sections') ): the_row(); ?>

    <? Extras\get_element( get_row_layout() ); ?>

  <? endwhile; ?>
<? endif; ?>
