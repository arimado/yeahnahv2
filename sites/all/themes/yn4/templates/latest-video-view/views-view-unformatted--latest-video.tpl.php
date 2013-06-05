<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div id="latest-video-view">

	<div id="latest-video-view-header">
    LATEST VID
    </div>
    <div id="latest-video-view-box">
    <?php if (!empty($title)): ?>
      <h3><?php print $title; ?></h3>
    <?php endif; ?>
    <?php foreach ($rows as $id => $row): ?>
      <div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
    </div>
</div>

