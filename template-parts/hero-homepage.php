<?php if( have_rows('slider_home') ): $i = 0; $a = 0; ?>
    <div id="slider--hero">
        <div id="slider-container">
            
            <?php while( have_rows('slider_home') ): the_row(); $i++; ?>
                <input id="slide-<?php echo $i ;?>" type="radio" name="slides">
            <?php endwhile; ?>

            <div id="slider-full">
                <?php while( have_rows('slider_home') ): the_row(); 
                    $image = get_sub_field('slide_image'); ?>
                    <div class="slide" style="background-image: url(<?php echo $image ?>);">
                        <div class="slide-content">
                            <?php the_sub_field('slide_content'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div><!-- #slider--full -->

            <div id="slider-thumb">
                <?php while( have_rows('slider_home') ): the_row(); $a++; ?>
                <label for="slide-<?php echo $a ;?>">
                    <div class="slide-title">
                        <div class="number">0<?php echo $a ;?>.</div>
                        <h3 class="text-h2"><?php the_sub_field('slide_title_thumb'); ?></h3>
                        <span class=""><?php the_sub_field('slide_description_thumb'); ?></span>
                        <div class="icon is-style-with-icon mt-2"><span class="wp-block-button__link"></span></div>
                    </div>
                </label>
                <?php endwhile; ?>
            </div><!-- #slider-thumb -->
            
        </div><!-- #slider-container -->    
    </div><!-- #slider--hero -->
<?php endif; ?>