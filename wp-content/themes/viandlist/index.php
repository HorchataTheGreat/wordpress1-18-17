<?php get_header(); ?>
    
<?php
    if( have_posts() ):

        while ( have_posts() ) : the_post(); ?>
        
            <h2>
                <?php the_title(); ?>
            </h2>
            <div>
                <?php the_content(); ?>
            </div>
            <hr>
            
<?php  
        endwhile;
        
    //if there is no content, tell us
    else:
        echo "there is no post or content";
    
    endif;
    
    get_footer(); 
?>