<?php 
/* 
Template Name: Media Page 
*/ 

get_header(); ?>

<section id="contant-box">
<div class="container">
<div class="row">

<?php 
while(have_posts()):

the_post();

the_content();


endwhile;
 ?>
<div class="col-md-12 media">

<?php 

$args = array(
	'post_type'	=> 'media-files'
);

$query = new WP_Query($args);

$i = 0;
while($query->have_posts()):
if($i == 2)
	$i = 0;
if($i == 0)
	$class = 'col-md-3';
else
	$class = 'col-md-4';

$query->the_post();
?>
<div class="<?php print $class; ?>">
<?php the_post_thumbnail('full', array('style' => 'height:250px;')); ?>
<a style="cursor:pointer;" data-toggle="modal" data-target="#myModal<?php print get_the_ID(); ?>" class="cutting"><h3><?php print get_the_title(); ?></h3></a>
</div>

<div class="modal fade" id="myModal<?php print get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
      <?php the_post_thumbnail('full'); ?>
	  <center><h3 style="color: rgb(255, 255, 255);"><?php print get_the_title(); ?></h3></center>
  </div>
</div>

<?php 
$i++;
endwhile;
 ?>
</div>

</div>
</div>
</section>



<?php get_footer(); ?>