
<?php
	$gallery = get_field('works');
	$count   = count($gallery);
	$max     = get_field('works-max');
 ?>

<?php
	// If gallery exist and if count of images > 1
	if( $gallery && $count > 1 ):
?>

	<?php
		// If all images < max images user choice, make loop with all images
		// If all images > max images user choice, make loop with user choice display
		if ( $count < $max ):
			$rand = array_rand($gallery, $count);
		else:
			$rand = array_rand($gallery, $max);
		endif;
	 ?>

	<?php foreach( $rand as $image ): ?>
		<a class="work" href="<?php echo $gallery[$image]['sizes']['large']; ?>" data-sub-html="
			<h2 class='title'><?php echo $gallery[$image]['title']; ?></h3>
			<div class='size'><?php echo $gallery[$image]['caption']; ?></div>
			<div class='description'><?php echo $gallery[$image]['description']; ?></div>
			">
			<img src="<?php echo $gallery[$image]['sizes']['thumbnail']; ?>" alt="<?php echo $gallery[$image]['title']; ?>">
		</a>
	<?php endforeach; ?>

<?php
	// If gallery exist and total image = 1, display this gallery is diferent
	elseif ( $gallery  && $count == 1 ):
?>
	<?php foreach( $gallery as $image ): ?>
		<a class="work" href="<?php echo $image['sizes']['large']; ?>" data-sub-html="
			<h2 class='title'><?php echo $image['title']; ?></h3>
			<div class='size'><?php echo $image['caption']; ?></div>
			<div class='description'><?php echo $image['description']; ?></div>
			">
			<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['title']; ?>">
		</a>
	<?php endforeach; ?>
<?php
	// If gallery no images
	else:
?>
	<h2>…COMING SOON…</h2>
<?php endif; ?>
