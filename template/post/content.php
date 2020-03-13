<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
    echo '<div class="content">';
    echo "<h1>", the_title(), "</h1>";
    the_content();
    echo '</div>';
?>
</article>