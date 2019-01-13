

<div class="col-lg-6 col-md-6 mb-6">
    <div class="card">
    <?php the_post_thumbnail(array(500,325), array('class' => 'card-img-top'));?>
    <div class="container-fluid card_custom_body" style="height:300px;">                
        <strong class="d-inline-block mb-2 text-primary category_tag"><?php the_category();?></strong>
        <h4 class="card-title h3"><?php the_title();?></h4>
        <div class="text-muted"><?php the_time('d/m/Y'); ?></div>
        <p class="card-text"><?php  echo get_the_excerpt(); ?></p>
    </div>
    <a href="<?php echo esc_url( get_permalink());?>" class="btn blog_post_more  blog_post_card" style="border-radius:0px;box-shadow:none;">Continue reading...</a>
    </div>
</div>

