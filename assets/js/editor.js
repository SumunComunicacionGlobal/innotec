/* eslint-disable indent */
/* eslint-disable no-undef */
wp.domReady( () => {
	wp.blocks.registerBlockStyle( 'core/list', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'check-list',
			label: 'Check List',
		},
	] );
	wp.blocks.registerBlockStyle( 'core/heading', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'with-arrow',
			label: 'Con flecha',
		},
	] );
    wp.blocks.registerBlockStyle( 'core/button', [
		{
			name: 'with-icon',
			label: 'Icono',
		},
	] );
	wp.blocks.registerBlockStyle( 'core/columns', [
		{
			name: 'border-box-rigth',
			label: 'Separador',
		},
		{
			name: 'container-fluid',
			label: 'Ancho completo con márgenes',
		},
	] );
	wp.blocks.registerBlockStyle( 'core/cover', [
		{
			name: 'cover-move-up',
			label: 'Mover arriba',
		},
	] );
} );
