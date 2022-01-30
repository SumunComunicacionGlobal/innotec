<div id="mega-menu-wrapper" class="bg-primary-dark">

	<button class="toogle-mega-menu close"></button>

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-md-8">

				<?php
				wp_nav_menu(
					array(
						'theme_location' 	=> 'mega-menu',
						'container'			=> 'nav',
						'container_id'		=> 'mega-menu-primary-container',
						// 'container_class'	=> 'container',
						'depth'				=> 2,
					)
				);
				?>

			</div>

			<div class="col-xs-12 col-md-4 menu-widgets-wrapper">

				<?php get_template_part( 'template-parts/widgets-megamenu' ); ?>

			</div>

		</div>

	</div>

	<nav id="mega-menu-secondary-container" class="container">

		<?php if ( is_active_sidebar( 'mega-menu-social' ) ) {
			dynamic_sidebar( 'mega-menu-social' );
		} ?>

		<?php
		wp_nav_menu(
			array(
				'theme_location' 	=> 'mega-menu-secondary',
				'container'			=> false,
				'container_id' 		=> 'mega-menu-secondary-container',
				'container_class'	=> 'container',
				'depth'				=> 1,
			)
		);
		?>

	</nav>

</div>

<script>

	function isTouchScreendevice() {
	    return 'ontouchstart' in window || navigator.maxTouchPoints;      
	};

	jQuery(document).ready(function($) {

		$('.toogle-mega-menu').click(function(e) {
			$('#mega-menu-wrapper').slideToggle();
			$('body').toggleClass('menu-open');
		});

		if ( isTouchScreendevice() ) {
			$('#mega-menu-primary-container .menu-item-has-children > a').append('<span class="toggle-sub-menu"></span>');
		} else {
			$('#mega-menu-primary-container .menu-item-has-children > a').append('<span class="icon-sub-menu"></span>');
		}

		$('a[data-widget-id]').hover(function(e) {
			$('.menu-widget').removeClass('active');
			var widgetId = $(this).attr('data-widget-id');
			$( '#' + widgetId ).addClass('active');
		});

		$('.toggle-sub-menu').click(function(e) {
			e.preventDefault();
			$(this).parents('li').children('.sub-menu').toggleClass('active');
			$(this).toggleClass('active')
		});

		if ( !isTouchScreendevice() ) {
			$('#mega-menu-primary-container > ul > li > a').hover(function(e) {
				$('.sub-menu').removeClass('active');
				$(this).parent().children('.sub-menu').addClass('active');
			});
		}

	});

</script>