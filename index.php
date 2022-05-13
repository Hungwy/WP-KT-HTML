<?php get_header(); ?>


<main class="main-grid">
  
    <?php if ( have_posts() ) {
      while ( have_posts() ) {?>
        <?php> the_post(); ?>
        <article><h2><?php the_title(); ?></h2>
          <?php the_excerpt(); ?>
          <p style="font-size: 0.7em"> Postituse autor: <?php the_author(); ?> <br><br> Aeg: <?php the_time();?></p>
          <a href="<?php the_permalink(); ?>">Loe lähemalt</a>
        </article> 

        <?php
      }
    }

?>
</main>
<?php  get_footer();?>