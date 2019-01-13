<div class="row">

    <!-- Blog Post -->
    <div class="card mb-4">

        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <a href="<?php echo esc_url( get_permalink());?>">
            <img class="card-img-top d-none d-lg-block" src="<?php echo $image[0]; ?>" style="height:40vh;object-fit: cover;">
        </a>
        
        <div class="container-fluid card_custom_body">                
            <!-- <div class="card-body"> -->
                <p class="d-inline-block mb-2 text-primary category_tag text-capitalize text-muted">
                    <?php echo "Related : " . allweltschmerz_get_terms($post->ID, 'field'); ?> 
                    || <?php echo "Used : " . allweltschmerz_get_terms($post->ID, 'software');?> 
                </p>

                <h1 class="card-title h2">
                    <a class="text-dark" href="<?php echo esc_url( get_permalink());?>"><?php the_title();?></a>
                </h1>
                <p class="card-text">
                    <?php  echo get_the_excerpt(); ?>
                </p>
            <!-- </div>             -->
        </div>
        <a href="<?php echo esc_url( get_permalink());?>" class="btn btn-dark text-warning font-weight-bold font-italic">Continue reading...</a>
        
        

        <div class="card-footer text-muted">
          Posted on <?php the_time('d/m/Y'); ?>
        </div>
      </div>  

</div>
<hr>