<?php

/**
 * Card Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'card-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'card';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title = get_field('card_title');
$text = get_field('card_text');
$image = get_field('card_image');
$button = get_field('card_link');

if( $button ): 
    $link_url = $button['url'];
    $link_title = $button['title'];
    $link_target = $button['target'];
endif;

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="card-img">
        <?php echo wp_get_attachment_image( $image, 'full' ); ?>
    </div>
    <div class="card-content">
        <p class="text-h2"><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" title="<?php echo esc_html( $link_title ); ?>"><?php echo $title; ?></a></p>
        <div class="icon is-style-with-icon"><span class="wp-block-button__link"><?php echo esc_html( $link_title ); ?></span></div>
        <p class="card-excerpt"><?php echo $text; ?></p>
    </div>
</div>