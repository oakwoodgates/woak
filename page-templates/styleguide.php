<?php /* Template Name: Style Guide */ ?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php
    $components = array(
//      'alerts',
//      'badge',
//      'breadcrumb',
//      'buttons',
//      'button-group',
      //'card',
//      'carousel',
//      'collapse',
//      'dropdowns',
      //'forms',
      //'input-group',
//      'jumbotron',
//      'list-group',
//      'modal',
//      'navs',
//      'navs-js',
//      'navbar',
//      'pagination',
//      'popovers',
//      'progress',
      //'scrollspy',
//      'tooltips',
    );
    foreach ($components as $c) {
      get_template_part('/template-parts/styleguide/bootstrap/'.$c);
      echo '<hr />';
    }

    $standards = array(
//      'typography',
//      'tables'
    );
    foreach ($standards as $s) {
  //    get_template_part('/template-parts/styleguide/bootstrap/content/'.$s);
      echo '<hr />';
    }

    $sections = array(
      'fs-1',
    );
    foreach ($sections as $s) {
      get_template_part('/template-parts/styleguide/bootstrap/sections/'.$s);
      echo '<hr />';
    }
   ?>

<?php endwhile; ?>
<script style="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.js"></script>
<script type="text/javascript">
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
});
jQuery(function () {
  jQuery('[data-toggle="popover"]').popover()
})
</script>
<?php get_footer();
