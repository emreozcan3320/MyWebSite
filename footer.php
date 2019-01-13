<footer>
   <div class="container-fluid footer_cantainer">
      <div class="container">
         <div class="row footer_over_row">
            <div class="col-md-3 section footer_section_one">
               <h1 class="h5 text-light">Social Links</h1>
               <div class="progress" style="height: 1px;"></div>
               <p><a target="_blank" rel="noopener noreferrer" href="https://goo.gl/maps/1g7pnyYceYm" class="footer_section_one_link"><i class="fas fa-map-marker-alt"></i> Kadıköy / Istanbul</a></p>
               <p><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/kadir-emre-%C3%B6zcan/?locale=en_US" class="footer_section_one_link"><i class="fab fa-linkedin"></i> Linkedin</a></p>
               <p><a target="_blank" rel="noopener noreferrer" href="https://github.com/emreozcan3320" class="footer_section_one_link"><i class="fab fa-github-square"></i> Github</a></p>
            </div>
            <div class="col-md-3 section footer_section_two">
               <h1 class="h5 text-light">Tag Widget</h1>
               <div class="progress" style="height: 1px;"></div>
               <?php allweltschmerz_get_tags();?> 
            </div>
            <div class="col-md-3 section footer_section_three">
               <h1 class="h5 text-light">Important Links</h1>
               <div class="progress" style="height: 1px;"></div>
               <div class="menu_div">
               <?php wp_nav_menu(array('theme_location'=>'secondary'));?>
               </div>
            </div>
            <div class="col-md-3 section footer_section_four">
               <h1 class="h5 text-light">Latest Posts</h1>
               <div class="progress" style="height: 1px;"></div>
               <?php 
                  // WP_Query arguments
                  $args = array(
                     'post_type'              => array( 'post' ),
                     'posts_per_page'         => '2',
                  );

                  // The Query
                  $queryHomePageFromBlog = new WP_Query( $args );
               ?>

               <?php if($queryHomePageFromBlog->have_posts()): ?>
                     <?php while($queryHomePageFromBlog->have_posts()):  $queryHomePageFromBlog->the_post()?>
                        <div class="row post_row">
                           <div class="col-md-12">
                              <p>
                                 <a href=""><?php the_title();?></a>
                              </p>
                           </div>

                           <div class="col-md-12">
                              <p class="footer_post_date"><?php the_time('d/m/Y'); ?></p>
                           </div>
                        </div>
                     <?php endwhile;?>
               <?php endif; wp_reset_postdata();?>            
              
            </div>
         </div>
      </div>

      <div class="row">
         <div class="col-md-12 text-right">
              <!-- child of the body tag -->
            <span id="top-link-block" class="hidden">
               <a href="#top" class="well well-sm btn btn-secondary back_to_up" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
               <i class="fas fa-chevron-up"></i> Back to Top
               </a>
            </span>
            <!-- /top-link-block -->
         </div>
      </div>

      <div class="row copy_right">
         <div class="col-md-12">
            <p class="copy_right_p">All Rights Reserved by Kadir Emre ÖZCAN -(with all love)</p>
         </div>
      </div>

     

   </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(window).scroll(function(){
        if($(document).scrollTop() >50){
            $('.navbar_container').addClass('solidify');
        }else{
            $('.navbar_container').removeClass('solidify');
        }    
    });
    // Only enable if the document has a long scroll bar

   // Note the window height + offset
   if ( ($(window).height() + 100) < $(document).height() ) {
      $('#top-link-block').removeClass('hidden').affix({
         // how far to scroll down before link "slides" into view
         offset: {top:100}
      });
   }
</script>


<?php wp_footer(); ?>
</body>
</html>