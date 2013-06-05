
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>


  <div class="content-haiku-node"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content['body']);

    ?>
  </div>
  
  <div class="content-haiku-node-author"><?php 
  
  if ($content['field_haiku_author'] != NULL) {
  print 'submitted by  ' . '<div class="submitted-haiku">' . render($content['field_haiku_author']) . '</div>'; 
  }
  
  
  
  
  ?></div>
  
    
  <div class="share-box-haiku">	<div class="addthis_toolbox addthis_default_style " id="share-button-article">
 <a class="addthis_button_reddit"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
      	<script type="text/javascript"> var addthis_config = {"data_track_addressbar":false}; </script>
          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5124e2af293a58a0"></script></div>
          
        
  </div>
  
    <div class="prevnext">
    	<div class="prev prev-haiku"> <?php print focused_node($node, 'n'); ?> </div> 
    	<div class="next next-haiku"><?php print focused_node($node, 'p'); ?> </div> 
    </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
