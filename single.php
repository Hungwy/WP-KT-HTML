
 <?php get_header(); ?>
 <main class="main-grid">
  
    <h1><?php the_title();  ?></h1>
  
  

  <!--sisu-->
  <?php the_content(); ?>
  
   

    <!--näitan lisaväljasid, saaks ka tsükliga kindlasti-->
    <article>
      <h2>Aine kood</h2>
      <p><?php echo get_post_meta(get_the_ID(), $key = 'ainekood', $single = true);?></p>
    </article>
    <article>
      <h2>Ainepunkte</h2>
      <p><?php echo get_post_meta(get_the_ID(), $key = 'ainepunktid', $single = true);?></p>
    </article>
    <article>
      <h2>Õppejõud</h2>
      <p><?php echo get_post_meta(get_the_ID(), $key = 'oppejoud', $single = true);?></p>
    </article>
    

    <div id="previous-next-posts">
      <?php previous_post_link(); next_post_link(); ?>
    </div>
</main>
<?php
    get_footer();
?>