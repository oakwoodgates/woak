<?php /* Template Name: Style Guide */ ?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php
    $templates = array(
      'alerts',
      'badge',
      'breadcrumb',
      'buttons',
      'button-group',
      //'card',
      //'carousel',
      'collapse',
      'dropdowns',
      //'forms',
      //'input-group',
      'list-group',
      'modal',
      'navs',
      'navs-js',
      'navbar',
      'pagination',
      //'popovers',
      'progress',
      //'scrollspy',
      //'tooltips',
    );
    foreach ($templates as $t) {
      get_template_part('/template-parts/styleguide/bootstrap/'.$t);
      echo '<hr />';
    }
   ?>

<?php endwhile; ?>
<?php get_footer();
