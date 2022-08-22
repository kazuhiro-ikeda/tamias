<footer>


</footer>

<a href="#" id="btn_top"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_top.png" alt="Top"></a>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight.js"></script>
<script>
	$(function() {
		$('.matchHeight').matchHeight();
	});
</script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
	$(function($) {
		window.sr = ScrollReveal({
			mobile: true
		});
		sr.reveal('.ani', {
			origin: 'bottom',
			distance: '20px',
			duration: 800,
			scale: 1.0,
			delay: 400,
			opacity: 0,
		});
	});
</script>


</body>

</html>
