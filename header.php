<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title('|');?></title>
    <meta name="description" content="<?php bloginfo('description');?>">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>

</head>
<body>

<?php if(is_front_page()): ?>
   <div class="container navbar_container">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-transparent menu">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item nav-item-custom active">
                  <a class="nav-link" href="<?php echo get_site_url();?>/">HOME 
                     <span class="sr-only">(current)</span>
                  </a>
               </li>
               <li class="nav-item nav-item-custom">
                  <a class="nav-link" href="#">EXPERIENCE</a>
               </li>
               <li class="nav-item nav-item-custom">
                  <a class="nav-link" href="#">PROJECTS</a>
               </li>
               <li class="nav-item nav-item-custom">
                  <a class="nav-link" href="<?php echo get_site_url();?>/blog/">BLOG</a>
               </li>
               <li class="nav-item nav-item-custom">
                  <a class="nav-link" href="#">CONTACT</a>
               </li>
            </ul>
         </div>             
      </nav>
   </div>
<?php else : ?>
   <div class="container">
      <?php get_template_part( 'template-parts/blog/bp_navbar_section', 'none' ); ?>
   </div>   
<?php endif;  ?>




            
