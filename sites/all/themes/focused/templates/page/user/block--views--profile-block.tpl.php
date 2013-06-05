
<div id="profile-block">
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
  
  	<div class="block-header">
		<div class="block-line"></div>
		<div class="block-title-side"><?php print $block->subject ?></div>
	</div>
<?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</div>
</div>
















