<?php if( have_rows('accordion') ): ?>
    <div id="accordion-block" class="mt-6 mb-6">
        <?php while( have_rows('accordion') ): the_row(); 
            $image = get_sub_field('accordion_image');
            ?>
            <button class="accordion-btn"><div class=""><span><?php the_sub_field('accordion_title'); ?></span></div></button>
            <div class="container panel">
                <div class="row mt-4 mb-4">
                    <?php if( get_sub_field('accordion_image') ): ?>
                        <div class="col-xs-12 col-md-4">
                            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                        </div>
                    <?php endif; ?>    
                    <div class="col-xs-12 col-md">
                        <?php the_sub_field('accordion_content'); ?>
                    </div> 
                </div>       
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<script>
var acc = document.getElementsByClassName("accordion-btn");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>