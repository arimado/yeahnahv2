
<script>

</script> 

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>



  <div class="content-streetstyle-node"<?php print $content_attributes; ?>>
   
      <?php hide($content['comments']);
      hide($content['links']); ?>
      
      
       

	
	<div class="content-streetstyle-body">
			<div class="content-streetsyle-link-txt"> 
      <div class="prev"> <?php print focused_node($node, 'n'); ?> </div> 
    	<div class="next"><?php print focused_node($node, 'p'); ?> </div> 
	</div>
		
		<div class="content-streetstyle-node-main">
		<div class="content-streetstyle-img"> <?php print render($content['field_streestyle_photo']);  ?>
		
				 	<div class="addthis_toolbox addthis_default_style " id="share-button-article">
 <a class="addthis_button_reddit"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
      	<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5124e2af293a58a0"></script>
			
		</div>
			<div class="content-streetstyle-prevnext">
				<div class="content-streetstyle-prev"> 
					<span class="control-button"> < </span>
				</div>
			        <div class="content-streetstyle-next"> 
			        	<span class="control-button"> > </span> 
			        </div>
			</div>
		 </div>
		 <div class="content-streetstyle-node-header"><?php print render($content['field_streetstyle_nickname']); ?> </div>
		
		
		<div class="content-streetstyle-node-txt">
		
			<div class="content-streetstyle-node-info">
			<?php  print render($content['field_streetstyle_name']);   ?>
			<?php  print render($content['field_streetstyle_title_long']);   ?>
			<?php print render($content['field_streetstyle_location_long']);  ?> 
			
			</div> <!---CONTENT STREETSTYLE NODE INFO -->
			
			<div class="content-streetstyle"> 
			 	<div class="content-streetstyle-body-txt"><?php print render($content['body']); ?></div>
			 	<div class="content-streetstyle-created">by <?php print $name; ?></div>
        		</div>
		</div>	
				
				
				<div class="more-link more-streetstyle"><a href="#" >ALL STREETSTYLE</a></div>
			</div>
			
			
		</div>
		
	</div>
    
  </div>
  

  




</div>
</div>