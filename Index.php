<?php
 
Get_header();
 

 If (have_posts()):
   While (have_posts()) : the_post(); ?>
    

   <article class="post"> 
<h2><a href="<?php the_permalink()";><?php the_title();?><</a></h2>
      <?php the_content();?>
  </article>

 <?php End while:

  Else:
  Echo '<p> No content found </p>'
 
   End if;

Get_footer();
?>
