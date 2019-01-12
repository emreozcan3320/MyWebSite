<div class="row">

    <!-- Blog Post -->
    <div class="card mb-4">
        <div class="card-header">
            <strong class="d-inline-block mb-2 text-primary category_tag">
                <?php echo allweltschmerz_get_terms($post->ID, 'field'); ?>
            </strong>
        </div>

        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <a href="<?php echo esc_url( get_permalink());?>">
            <img class="card-img-top d-none d-lg-block" src="<?php echo $image[0]; ?>" style="height:40vh;object-fit: cover;">
        </a>
        
        <div class="card-body">
            <h2 class="card-title">
                <a class="text-dark" href="<?php echo esc_url( get_permalink());?>"><?php the_title();?></a>
            </h2>
            <p class="card-text">
                <?php  echo get_the_excerpt(); ?>
            </p>
        </div>
        
        <a href="<?php echo esc_url( get_permalink());?>" class="btn btn-primary">Continue reading...</a>

        <div class="card-footer text-muted">
          Posted on <?php the_time('d/m/Y'); ?>
        </div>
      </div>  

</div>
<hr>