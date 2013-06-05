<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5124e2af293a58a0"></script>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix node-article"<?php print $attributes; ?>>
  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content article-content"<?php print $content_attributes; ?>>
      <!--// We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);-->
    
    <div class="article-box">
    
    	<div class="article-img"><?php  print render($content['field_focused_cover']); ?></div>
    	<div class="article-txt">
    		<div class="article-short-title"> <span class="article-short-title-txt"><?php print $title; ?></span></div>
    		<div class="article-blurb-name-info">
    			<div class="article-blurb-name"> 
    				<div class="article-blurb"> <?php print render($content['field_blurb']); ?> </div>
    				<div class="article-name">by <?php print $name; ?></div>
    			</div>
    		</div> 
    			
    	</div>
    	<div class="article-info">
    				<div class="article-date"><?php print format_date($node->created, 'article'); ?> </div> 
    				<div class="article-tag"><?php print render($content['field_tags']); ?></div>
    			</div> 
    </div> 
    
   <div class="article-body-content"> 
    <div class="article-body-share-wrapper">
    	<div class="article-body-share">
	  <div class="article-body-wrapper">
	  <div class="article-body"><?php  print render($content['body']); ?> </div>
	  <div class="article-body-shadow"></div>
	  <div class="article-body-white-box"></div>
	  </div><!--article-body-wrapper-->
		<div class="share-box-article">
		<span class="share-box-article-txt">you can give this article social media points if you want</span>
		<div class="addthis_toolbox addthis_default_style " id="share-button-article">
 		<a class="addthis_button_reddit"></a>
		<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
		<a class="addthis_button_tweet"></a>
	</div>
</div>
      </div><!--article-body-share-->
   </div><!--article-body-share-wrapper-->
</div><!--article-body-content-->





  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
