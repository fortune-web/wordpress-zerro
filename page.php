<?php get_header();?>

<?php
    if ( have_posts() ) {
    the_post();
    echo '<div class="content">';
    the_title();
    the_content();
    echo '</div>';
    } else {
      echo "asd";
    }
?>

<?php get_footer();?>