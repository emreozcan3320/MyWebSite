<footer>
   <div class="container-fluid footer_cantainer">
      <div class="container">
         <div class="row footer_over_row">
            <div class="col-md-3 section footer_section_one">
               <h1 class="h5 text-light">Social Links</h1>
               <div class="progress" style="height: 1px;"></div>
               <p><a href="" class="footer_section_one_link"><i class="fas fa-map-marker-alt"></i> Kadıköy / Istanbul</a></p>
               <p><a href="" class="footer_section_one_link"><i class="fab fa-linkedin"></i> Linkedin</a></p>
               <p><a href="" class="footer_section_one_link"><i class="fab fa-github-square"></i> Github</a></p>
            </div>
            <div class="col-md-3 section footer_section_two">
               <h1 class="h5 text-light">Tag Widget</h1>
               <div class="progress" style="height: 1px;"></div>
               <a href=""><span class="tag">Java</span></a>
               <a href=""><span class="tag">JVM</span></a>
               <a href=""><span class="tag">Python</span></a>
               <a href=""><span class="tag">Artificial Intelligence</span></a>
               <a href=""><span class="tag">Neural Network</span></a>
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
               <div class="row post_row">
                  <div class="col-md-12">
                     <p>
                        <a href="">Title Title Title Title Title</a>
                     </p>
                  </div>
                  <div class="col-md-12">
                     <p class="footer_post_date">21/12/2018</p>
                  </div>
               </div>
               <div class="row post_row">
                  <div class="col-md-12">
                     <p>
                        <a href="">Title Title Title Title Title</a>
                     </p>
                  </div>
                  <div class="col-md-12">
                     <p class="footer_post_date">21/12/2018</p>
                  </div>
               </div>
            </div>
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
</script>

<?php wp_footer(); ?>
</body>
</html>