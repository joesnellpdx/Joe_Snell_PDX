  <?php
// Our include
define('WP_USE_THEMES', false);
require_once('../../../wp-load.php');
// Our variables
$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
query_posts(array(
       'posts_per_page' => $numPosts,
       'paged'          => $page
));
// our loop

if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
      get_template_part( 'content', 'portfolio' );
   endwhile;
endif;
wp_reset_query();
?>