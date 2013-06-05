
 <?php
 /* split the username and password from the submit button 
   so we can put in links above */

    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);

?> 
<div class="welcome">Welcome high priestess. Your carriage awaits.</div>


<div class="user-login-wrapper">


<div class="username"> <?php print drupal_render($form['name']);  ?> </div>
<div class="password"> <?php  print drupal_render($form['pass']);  ?> </div>
<div class="submit"> <?php print drupal_render($form['actions']); ?> </div>


</div>