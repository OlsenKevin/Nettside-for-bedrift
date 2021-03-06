<?php

/*

* 	The template for displaying Front Page.

*

* 	@package ThemeIsle

*/

$location = get_site_url() . "/hjem";
wp_redirect( $location, 301 );
exit; 

get_header();

?>

	<div id="main-content">

	<div class="inner cf">

	<section class="featured">


		<div class="box3">

			<h3 class="block-title">

				<?php

				if ( get_theme_mod( 'ti_frontpage_boxone_title','Phasellus tempus' ) ) {

					echo get_theme_mod( 'ti_frontpage_boxone_title','Phasellus tempus' );

				}

				?>

			</h3>

			<?php

			if ( get_theme_mod( 'ti_frontpage_boxone_content','Vestibulum vel dapibus lectus, eu vulputate risus. Sed egestas varius tellus, eget auctor lacus semper nec. Nam mi felis, pellentesque eget tincidunt accumsan.' ) ) {

				echo '<p>' . get_theme_mod( 'ti_frontpage_boxone_content','Vestibulum vel dapibus lectus, eu vulputate risus. Sed egestas varius tellus, eget auctor lacus semper nec. Nam mi felis, pellentesque eget tincidunt accumsan.' ) . '</p>';

			}

			?>

		</div>


		<div class="box3">

			<h3 class="block-title">

				<?php

				if ( get_theme_mod( 'ti_frontpage_boxtwo_title','Phasellus tempus' ) ) {

					echo get_theme_mod( 'ti_frontpage_boxtwo_title','Phasellus tempus' );

				}

				?>

			</h3>

			<?php

			if ( get_theme_mod( 'ti_frontpage_boxtwo_content','Vestibulum vel dapibus lectus, eu vulputate risus. Sed egestas varius tellus, eget auctor lacus semper nec. Nam mi felis, pellentesque eget tincidunt accumsan.' ) ) {

				echo '<p>' . get_theme_mod( 'ti_frontpage_boxtwo_content','Vestibulum vel dapibus lectus, eu vulputate risus. Sed egestas varius tellus, eget auctor lacus semper nec. Nam mi felis, pellentesque eget tincidunt accumsan.' ) . '</p>';

			}

			?>

		</div>


		<div class="box3">

			<h3 class="block-title">

				<?php

				if ( get_theme_mod( 'ti_frontpage_boxthree_title','Phasellus tempus' ) ) {

					echo get_theme_mod( 'ti_frontpage_boxthree_title','Phasellus tempus' );

				}

				?>

			</h3>

			<?php

			if ( get_theme_mod( 'ti_frontpage_boxthree_content','Vestibulum vel dapibus lectus, eu vulputate risus. Sed egestas varius tellus, eget auctor lacus semper nec. Nam mi felis, pellentesque eget tincidunt accumsan.' ) ) {

				echo '<p>' . get_theme_mod( 'ti_frontpage_boxthree_content','Vestibulum vel dapibus lectus, eu vulputate risus. Sed egestas varius tellus, eget auctor lacus semper nec. Nam mi felis, pellentesque eget tincidunt accumsan.' ) . '</p>';

			}
			?>

		</div>


	</section>

	<article class="front">

		<h2 class="first-title">

			<?php

			if ( get_theme_mod( 'ti_frontpage_article_title','About us' ) ) {

				echo get_theme_mod( 'ti_frontpage_article_title','About us' );

			}

			?>

		</h2>

		<?php

		if ( get_theme_mod( 'ti_frontpage_article_image',get_template_directory_uri().'/images/about_us.jpg' ) ) {
			?>

			<img src="<?php echo get_theme_mod( 'ti_frontpage_article_image',get_template_directory_uri().'/images/about_us.jpg' ); ?>"
			     alt="<?php echo get_theme_mod( 'ti_frontpage_article_title','About us' ); ?>"
			     title="<?php echo get_theme_mod( 'ti_frontpage_article_title','About us' ); ?>">

		<?php }

		?>



		<?php

		if ( get_theme_mod( 'ti_frontpage_article_content','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.' ) ) {

			echo '<p>' . get_theme_mod( 'ti_frontpage_article_content','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.' ) . '</p>';

		}

		?>

	</article>

	<aside class="sidebar sidebar-home">

		<?php get_sidebar("home"); ?>
	</aside>

	</div>

	</div>

<?php get_footer();
?>