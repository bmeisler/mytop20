<?php get_header(); ?>

<div class="row">
  <div class="span8">

	<?php 

	$context = Timber::get_context();
	$context['foo'] = 'Bar!';
	$context['post'] = new TimberPost();
	Timber::render('single.twig', $context);


	// $data = Timber::get_context();
	// $data['posts'] = Timber::get_posts();
	// $data['foo'] = 'bar';	
	// Timber::render('single.twig', $data);				
						
?>

  </div>
  <div class="span4">
  </div>
</div>

<?php get_footer(); ?>