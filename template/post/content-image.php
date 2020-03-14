<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
    echo '<div class="image">';
    the_content();
    echo '</div>';
?>
</article>