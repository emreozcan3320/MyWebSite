<div class="container shadow-sm">
   <div class="row">
      <!-- Post Content Column -->
      <div id="<?php the_ID();?>" class="col-lg-12">

        <article <?php the_ID();?> >
            <!-- Title -->
            <strong class="d-inline-block mb-2 text-primary category_tag">
                <?php the_category();?>
            </strong>
            
            <?php the_title('<h1 class="blog-post-title">', '</h1>');?>

            <p class="blog-post-meta project_date">
                <?php the_time('d/m/Y'); ?> by 
                <a class="project_author" href="<?php echo get_site_url();?>/">
                    <?php the_author(); ?> 
                </a>
            </p>


            <small>
                <?php echo "Related : " . allweltschmerz_get_terms($post->ID, 'field'); ?> 
                || <?php echo "Used : " . allweltschmerz_get_terms($post->ID, 'software');?> 
                 <?php 
                    if(current_user_can('manage_options')){
                        echo '|| '; edit_post_link();
                    }                 
                 ?>                
            </small>
            <hr>
            <!-- Preview Image -->
            <!-- <img class="img-fluid rounded" src="http://placehold.it/1200x300" alt=""> -->
            <div class="container center">
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail('large');?>           
                <hr>
            <?php endif; ?>
            </div>

            <div class="container project_container">                
                <!-- Post Content -->
                <?php the_content();?>
            </div>
        </article>

      </div>
   </div>
</div>

<?php //if(comments_open()){ comments_template();}?>