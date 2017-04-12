<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="entry-header site-width">
	<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
	<h4><?php the_date(); ?><?php //if ( is_single() ) : echo " <span class=\"sep\">/</span> Posted by " . get_the_author(); endif; ?></h4>
</div><!-- .entry-header -->

<div class="entry-content site-width<?php if ( is_single() ) : echo " single"; endif; ?>">
	<?php
	  if ( is_single() ) :
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );

			the_tags( '<span class="tags-links"><strong>Tags:</strong> ', ', ', '</span>' );
			?>
      
      <div class="blog-sharing">
      	<a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>&picture=<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" target="new" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Share on Facebook</span></a>
				<a href="http://www.twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo str_replace(' ', '+', the_title('','',false)); ?>" target="new" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Share on Twitter</span></a>
				<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink(); ?>&title=<?php echo str_replace(' ', '%20', the_title('','',false)); ?>" target="new" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a href="http://pinterest.com/pin/create/link/?url=http://foresitegrp.com/news/5-phrases-you-are-probably-saying-incorrectly/&media=<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>&description=<?php echo str_replace(' ', '%20', the_title('','',false)); ?>" target="new" class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
				<a href="http://plus.google.com/share?url=<?php echo get_permalink(); ?>" target="new" class="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      </div>

      <?php
      echo "<div class=\"blog-author\">";
			$author_bio_avatar_size = apply_filters( 'twentysixteen_author_bio_avatar_size', 108 );
			echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
			echo "<div><h5>" . get_the_author() . "</h5>";
			echo the_author_meta( 'description' );
			echo "</div></div>";

			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'NEXT <i class="fa fa-play" aria-hidden="true"></i>', 'twentysixteen' ) . '</span> ',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '<i class="fa fa-play fa-flip-horizontal" aria-hidden="true"></i> PREVIOUS', 'twentysixteen' ) . '</span>',
			) );
		else :
			the_excerpt();
		  echo "<a href=\"" . get_permalink() . "\" class=\"readmore\">READ MORE <i class=\"fa fa-play\" aria-hidden=\"true\"></i></a>";
		endif;

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
	?>
</div><!-- .entry-content -->