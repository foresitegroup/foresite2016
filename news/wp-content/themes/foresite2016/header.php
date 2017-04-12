<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

if ( !is_single() ) :
  $HeaderClass = "blog-index";
  $PageTitle = "INSIGHTS";
  $Description = "";
  $Keywords = "";
else :
  $HeaderClass = "blog-single";
  $HeaderBackground = wp_get_attachment_url(get_post_thumbnail_id());
  $PageTitle = get_the_title();
  // $Menu = "light";

  the_post();
  $BlogInc = '
  <meta property="og:title" content="'.$PageTitle.'" />
  <meta property="og:image" content="'.$HeaderBackground.'" />
  <meta property="og:url" content="'.get_permalink().'" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@foresitegrp">
  <meta name="twitter:title" content="'.$PageTitle.'">
  <meta name="twitter:description" content="'.get_the_excerpt().'">
  <meta name="twitter:image" content="'.$HeaderBackground.'">
  ';
endif;

include "../header.php";

?>

<div class="<?php echo $HeaderClass; ?>"<?php if ($HeaderBackground != "") echo 'style="background-image: url(' . $HeaderBackground . ');"'; ?>>
	<div class="site-width">
		<?php echo $PageTitle; ?>
	</div>
</div>