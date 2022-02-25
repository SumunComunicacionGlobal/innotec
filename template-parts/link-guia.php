<?php
$guia_id = get_field( 'guia_link_id' );

if ( !$guia_id ) return false;

if ( get_post_status( $guia_id ) != 'publish' ) return false;
?>

<div class="wp-block-group link-guia alignfull has-white-color has-secondary-background-color has-text-color has-background">

	<div class="wp-block-group__inner-container">

		<div class="wp-block-columns are-vertically-aligned-center">

			<div class="wp-block-column is-vertically-aligned-center">

				<p><?php _e( 'GUÍAS DE UTILIDAD', 'innotec' ); ?></p>

				<h2 id="ver-guia"><?php echo get_the_title( $guia_id ); ?></h2>

			</div>

			<div class="wp-block-column is-vertically-aligned-center">

				<div class="wp-block-buttons">

					<div class="wp-block-button is-style-outline"><a href="<?php echo get_post_type_archive_link( 'guias' ); ?>" class="wp-block-button__link" title="<?php _e( 'Ver todas las guías', 'innotec' ); ?>"><?php _e( 'Ver todas las guías', 'innotec' ); ?></a></div>

					<div class="wp-block-button"><a href="<?php echo get_permalink( $guia_id ); ?>" title="<?php get_the_title( $guia_id ); ?>" class="wp-block-button__link has-secondary-color has-white-background-color has-text-color has-background"><?php _e( 'Leer guía', 'innotec' ); ?></a></div>

				</div>

			</div>

		</div>

	</div>

</div>