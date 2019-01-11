<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
<div class="container-fluid jumbotron_container" style="background-image: url('<?php echo $image[0]; ?>'); background-size:cover">
  <div class="jumbotron p-3 p-md-5 text-white rounded jumbotron_custom">
      <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic "><?php the_title();?></h1>
        <div class="text-muted font-italic"><?php the_time('d/m/Y'); ?></div>
        <div class="rounded jumbotron_content_container">
            <p class="lead my-3 jumbotron_content text-white">
                <?php  echo get_the_excerpt().'[...]'; ?>
            </p>
        </div>
        <p class="lead mb-0 h3 font-italic jumbotron_read_more"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
      </div>
    </div>
</div>