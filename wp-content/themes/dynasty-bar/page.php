<?php get_header(); ?>

<section id="contant-box">
<div class="container">
<div class="row">

<?php 
while(have_posts()):

the_post();

the_content();


endwhile;


 ?>

 </div>
</div>
</section>



<?php get_footer(); ?>