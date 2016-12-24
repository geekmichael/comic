<div class="col-md-2">
<div class="thumb-list-item" id="comic-<?php the_ID(); ?>">
<a href="<?php the_permalink(); ?>" class="pic-wrap" target="_blank" title="<?php the_title(); ?>">
<?php
	if (has_post_thumbnail())
		the_post_thumbnail();
	else
		echo '<img src="'.THEME_IMAGES_URI.'no-image.png" title="未设置漫画封面" />'; 
?>
</a>
<a href="<?php the_permalink(); ?>" class="title" target="_blank" title="<?php the_title(); ?>">
	<?php the_title(); ?>
</a>
<p class="des text-overflow">作者：<?php echo get_field('comic-author'); ?></p>
<p class="des text-overflow">最新：<?php echo last_chapter_title('comic-chapters'); ?></p>
</div>
</div>
