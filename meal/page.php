<?php 
get_header();
the_post();
echo "</hr>";
echo get_transient("reser_count" );

the_content();
get_footer();
?>