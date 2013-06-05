
    <?php if ($page['navigation']): ?>
  	  <div id="navigation-bar-wrapper">
        <div id="navigation-bar" class="navigation-bar"><div class="section">
          <?php print render($page['navigation']); ?>
        </div></div> <!-- /.section, /#navigation -->
        </div>
      <?php endif; ?>
  

  <div id="page-wrapper"><div id="page">
  

    <div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      
      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?> 

      <?php print render($page['header']); ?>

    </div></div> <!-- /.section, /#header -->
    
   
   <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation"><div class="section">
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
        <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
      </div></div> <!-- /.section, /#navigation -->
    <?php endif; ?> 
	
    <!--<?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?> 
    <?php print $messages; ?>-->
    
    
    
    

    <div id="main-wrapper"><div id="main" class="clearfix">
      
       
    
        <div id="usercontent" class="column usercontent"><div class="section">
          <?php print render($page['content']); ?>
        </div></div> <!-- /.section, /#sidebar -->
      
      
  
 
          <?php if ($page['sidebarleft']): ?>
        <div id="sidebarleft" class="column sidebarleft"><div class="section">
          <?php print render($page['sidebarleft']); ?>
        </div></div> <!-- /.section, /#sidebar -->
      <?php endif; ?>
      
      
         </div></div> <!-- /#main, /#main-wrapper -->
         
         

  </div></div> <!-- /#page, /#page-wrapper -->

    <div id="footer"><div class="section">
      <?php print render($page['footer']); ?>
    </div></div> <!-- /.section, /#footer -->