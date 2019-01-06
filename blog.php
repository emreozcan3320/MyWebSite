<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Blog Template · Bootstrap</title>

    <?php include "includes/style.php"; ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  
      <?php include "includes/blog_page/bp_navbar_section.php";?>
      <?php include "includes/blog_page/bp_popular_post_section.php";?>
  

<div class="container">

      <div class="row">

      <?php include "includes/blog_page/bp_last_post_section.php";?>

      <?php include "includes/blog_page/bp_side_bar_section.php";?>

      </div>
      <!-- /.row -->

</div>



<?php include "includes/home_page/footer_section.php";?>

<?php include "includes/script.php"; ?>
    
    </body>
</html>
