<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

    <div id="view-article">
    
    <div id="view-article-heading">
    	OUR FRESHEST GOODS
    </div>
    
    <?php if (!empty($title)): ?>
      <h3><?php print $title; ?></h3>
    <?php endif; ?>
    <?php foreach ($rows as $id => $row): ?>
      <div <?php if ($classes_array[$id]) { print 'class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
    </div>
    
    <div id="view-article-more"> <a href="http://yeahnah.tv/articles"> MO' SHIT </a></div>
