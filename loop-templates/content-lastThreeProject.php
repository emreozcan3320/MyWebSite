
<div class="col-md-4 flip-container" ontouchstart="this.classList.toggle('hover');">
    <div class="flipper">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="front" style="background-image: url('<?php echo $image[0];?>'); background-size:cover; ">
        </div>
        <div class="back container">
            <div class="row">
                <div class="col-md-12 back-frame"> 
                    <h5 style="color:#F74D4D;"><?php the_title();?></h5>                       
                    <p><?php  the_excerpt_max_charlength(140); ?></p>
                    <br>
                    <p>
                        <a class="project_read_more" href="<?php echo esc_url( get_permalink());?>">Read More <i class="fas fa-angle-right"></i></a>
                    </p>
                </div>
            </div>                    
        </div>
    </div>
</div>