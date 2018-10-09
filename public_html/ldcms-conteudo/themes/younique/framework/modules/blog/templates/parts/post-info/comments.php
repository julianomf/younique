<?php if(comments_open()) { ?>
	<div class="qodef-post-info-comments-holder">
		<a itemprop="url" class="qodef-post-info-comments" href="<?php comments_link(); ?>" target="_self">
			<?php comments_number('<i class="icon-bubble icons"></i> 0', '<i class="icon-bubble icons"></i> 1', '<i class="icon-bubble icons"></i> %'); ?>
		</a>
	</div>
<?php } ?>