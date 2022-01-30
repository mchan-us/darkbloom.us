<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Codilight_Lite
 */
?>
		</div> <!--#content-inside-->
	</div><!-- #content -->
	<div class="footer-shadow container">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri().'/assets/images/footer-shadow.png' ?>" alt="" />
			</div>
		</div>
	</div>
	<div id="colophon" class="site-footer" >
		<div class="container">

			<?php if ( has_nav_menu( 'footer' ) ): ?>
			<div class="footer-navigation">
				<?php wp_nav_menu( array('theme_location' => 'footer', 'container' => 'footer-menu', 'fallback_cb' => false ) ); ?>
			</div>
			<?php endif; ?>
			<?php /*
			<div class="site-info">
				<p>
					<?php printf( esc_html__( '&copy; %1$s %2$s. All Rights Reserved.', 'codilight-lite' ), date('Y'), get_bloginfo( 'name' ) ); ?>
				</p>
			</div><!-- .site-info -->
			*/ ?>
		</div>
	</div><!-- #colophon -->
	<footer class="footerng">
		<div class="footerdivo">
			<div class="footerareang">
				<div class="footerimageng">
					<div class="footimg2">
						<img class="fooloo" src="//community.mchan.us/forfooter/musfamily.png">
					</div>
				</div>
				<div class="foolinks">
					<a href="https://www.mchan.us/" class="fooa" target="_blank">
						mchan.us@HP<br>
					</a>
					<a href="https://mcn.mchan.us/" class="fooa" target="_blank">
						mchan.us MC Network Home<br>
					</a>
					<a href="https://forum.mchan.us/" class="fooa" target="_blank">
						mchan.us Forum<br>
					</a>
					<a href="https://wiki.mchan.us/" class="fooa" target="_blank">
						mchan.us Wiki<br>
					</a>
					<a href="https://serviceteam.mchan.us/" class="fooa" target="_blank">
						mchan.us Service Team Home<br>
					</a>
					<a href="https://blog.mchan.us/" class="fooa" target="_blank">
						mchan.us Service Team Blog<br>
					</a>
				</div>
				<div class="foocopy">
					<span class="copytext">
						© 2020 mchan.us Service Team. All Rights Reserved.
					</span>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
