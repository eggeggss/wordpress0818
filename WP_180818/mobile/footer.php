<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a> |
                <a href="?mobile=off">電腦版</a>
			</div><!-- #site-info -->
            
            


		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<script>
$(function(){
	var fSize, fColor;
	$(".tagcloud a").each(function() {
        fSize=Math.ceil(Math.random()*15+13);
		function hex(){
			fColor=Math.floor(Math.random()*210).toString(16);
			if(fColor.length < 2) fColor = 0 + fColor;
			return fColor;
		}
		$(this).attr("style", "font-size:" + fSize + "px; line-height:1.2em; color:#" + hex() + hex() + hex() );
    });
	
	var target;
	var $box=$('#content > div').eq(0);
	var $btn=$('.navigation');
	
	todo();

	function todo(){
		target=$(document).scrollTop()+$(window).height();
		target > $box.outerHeight(false)+$box.offset().top ? $btn.fadeIn(800) : $btn.fadeOut(800);
	}
	
	$(window).scroll(function(){ todo();});
	
	$(window).resize(function(){ todo();});
});
</script>
</body>
</html>
