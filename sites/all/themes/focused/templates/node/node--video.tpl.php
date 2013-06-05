
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>



  <div class="content video-node"<?php print $content_attributes; ?>>
      
      <div class="video-node-video"><?php print render($content['field_video']); ?></div>
      <div class="video-node-title"> <?php print render($title);?> </div>
      <div class="video-node-body"><?php  print render($content['body']);?></div>
      	<div class="addthis_toolbox addthis_default_style " id="share-button-article">
 <a class="addthis_button_reddit"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
      	<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5124e2af293a58a0"></script>
      </div>
    	<div class="more-link more-streetstyle"><a href="#" >ALL VIDEO</a></div>
    
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>
  

</div>
