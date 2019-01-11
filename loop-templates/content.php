<div class="row shadow-sm">
	<div class="col-md-12 post_row"></div>
	<div class="col-md-3">
		<div class="image-container d-none d-lg-block">
			<a href="#">
			<?php the_post_thumbnail('thumbnail');?>
			</a>
		</div>
	</div>
	<div class="col-md-9 blog_post_col">
		<strong class="d-inline-block mb-2 text-primary category_tag"><?php the_category();?></strong>
		<h3 class="mb-0">
			<a class="text-dark" href="#"><?php the_title();?></a>
		</h3>
		<div class="text-muted"><?php the_time('d/m/Y'); ?></div>
		<p>
			<?php 
				$content = get_the_content();
				$pos = strpos($content,' ', 200);
				echo  substr($content,0, $pos );                               
				?>
		</p>
		<a class="btn btn-primary" href="#">View Project</a>
	</div>
	<div class="col-md-12 post_row"></div>
</div>
<hr>