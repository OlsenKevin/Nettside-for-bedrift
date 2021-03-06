<?php

/*

* 	The template for displaying Footer.

*

* 	@package ThemeIsle

*/

?>

<footer class="cf">

	<div class="inner cf">


		<div class="about-us">

			<?php

			if ( get_theme_mod( 'ti_footer_aboutus_title',__('About us','constructzine-lite' )) ) {

				echo '<h3>' . get_theme_mod( 'ti_footer_aboutus_title' ) . '</h3>';

			}

			?>



			<?php

			if ( get_theme_mod( 'ti_footer_aboutus_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non.' ) ) {

				echo '<p>' . get_theme_mod( 'ti_footer_aboutus_content','Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non.' ) . '</p>';

			}

			?>

		</div>


		<div class="contact-us">

			<?php

			if ( get_theme_mod( 'ti_footer_contactus_title','Contact us' ) ) {

				echo '<h3>' . get_theme_mod( 'ti_footer_contactus_title','Contact us' ) . '</h3>';

			}

			

			if ( get_theme_mod( 'ti_footer_contactus_content','<p>Romania, Bucuresti<br>Str. Fainari, Nr. 24B</p><p>Tel: (+4) 0721000777<br>E-mail: contact@themeisle.com</p>' ) ) {

				echo '<p>' . get_theme_mod( 'ti_footer_contactus_content','<p>Romania, Bucuresti<br>Str. Fainari, Nr. 24B</p><p>Tel: (+4) 0721000777<br>E-mail: contact@themeisle.com</p>' ) . '</p>';

			}

			?>

		</div>

		<div class="directions">

			<?php

			if ( get_theme_mod( 'ti_footer_map_title','Map' ) ) {

				echo '<h3>' . get_theme_mod( 'ti_footer_map_title','Map' ) . '</h3>';

			}


			if ( get_theme_mod( 'ti_footer_map_iframe','<iframe src="https://www.google.com/maps/embed?q=Bucharest" width="600" height="450" frameborder="0" style="border:0"></iframe>' ) ) {

				echo get_theme_mod( 'ti_footer_map_iframe','<iframe src="https://www.google.com/maps/embed?q=Bucharest" width="600" height="450" frameborder="0" style="border:0"></iframe>' );
				
			} 
			
			?>
			

			

		</div>

	</div>

	<?php wp_footer(); ?>

</footer>

</body>

</html>