




<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="project-info-content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);

        ?>
    <div class="backend-post-title">jobs@yeahnah.tv</div>
     <div class="project-info-tags"> <?php print render($content['field_backend_tags']);   ?></div>
     <div class="project-info-body"> <?php print render($content['body']); ?> </div>
  </div>




</div>
