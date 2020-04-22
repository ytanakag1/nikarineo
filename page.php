<?php get_header(); ?>

<div class="container">

  <div class="contents">


    <?php if(have_posts()): while(have_posts()): 
            the_post(); 
    ?>
    <article <?php post_class(); ?>>
    <h1 class="post-title"> <i class="fa fa-thumb-tack trance" aria-hidden="true"></i> <?= the_title() ?> </h1>

      <?php the_content(); ?>

    </article>

    <?php endwhile; endif; ?>


  </div> <!-- contents -->

  <?php get_sidebar() ?>



</div> <!-- container -->

<?php get_footer(); 

?>