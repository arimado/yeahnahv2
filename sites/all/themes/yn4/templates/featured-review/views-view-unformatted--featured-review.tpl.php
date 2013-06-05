<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>


<div id="feat-rev-view">
	<?php if (!empty($title)): ?>
      <div id="feat-rev-header" style="border: 1px solid red;"><?php print $title; ?></div>
    <?php endif; ?>
    <?php foreach ($rows as $id => $row): ?>
      <div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
</div>


