<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>

<?php if ($search_results): ?>
    <div class="search-results-all"><?php print $search_results; ?> </div>
 
  <?php print $pager; ?>
<?php else : ?>
  <div class="no-results-message"><?php print 'We couldn\'t find anything, try something less obscure.'?></div>
<?php endif; ?>
