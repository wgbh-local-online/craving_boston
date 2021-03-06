<?php
/**
 * @file
 * craving_boston_site.features.fe_block_boxes.inc
 */

/**
 * Implements hook_default_fe_block_boxes().
 */
function craving_boston_site_default_fe_block_boxes() {
  $export = array();

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'About Craving Boston';
  $fe_block_boxes->format = 'filtered_html';
  $fe_block_boxes->machine_name = 'block_about_craving_boston';
  $fe_block_boxes->body = '<p>WGBH and award-winning food editor Catherine Smart have come together to provide you thoughtful content you can use everyday, and to inspire you to explore the deep connection between our region and its cuisine.</p>

<p>Whether you want to learn more about how innovation is affecting our fare culture, read about a new local restaurant, or to look for a locally inspired recipe for dinner tonight, Craving Boston&nbsp;is your daily destination for food in Boston and New England.</p>
';

  $export['block_about_craving_boston'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Footer Logo';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_footer_logo';
  $fe_block_boxes->body = '<p><a href="/" title="Go home"><img alt="Craving Boston logo" src="/sites/all/themes/craving_boston/images/craving-boston-logo-footer.png" /></a></p>
';

  $export['block_footer_logo'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Newsletter sign-up';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_newsletter_signup';
  $fe_block_boxes->body = '<p><a>Sign up for our newsletter</a></p>

<p><input size="10" /><button class="btn sign-up">Feed Me</button></p>
';

  $export['block_newsletter_signup'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Support Banner';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'block_support_banner';
  $fe_block_boxes->body = '<div id="support-banner"><img alt="Support WGBH. We couldn\'t do it without you." src="/sites/all/themes/craving_boston/images/wgbh-support-banner.jpg" /></div>
';

  $export['block_support_banner'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Fake Ad Craft Beer Festival';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'craft_beer_ad';
  $fe_block_boxes->body = '<p><img alt="" src="/sites/default/files/Craft-Beer-Festival.jpg" style="height:264px; width:309px" /></p>
';

  $export['craft_beer_ad'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Food at WGBH';
  $fe_block_boxes->format = 'php_code';
  $fe_block_boxes->machine_name = 'food_at_wgbh';
  $fe_block_boxes->body = '<div class="headline">FOOD @ <img alt="WGBH" src="/sites/default/files/wgbh-blue-shadow.png" /></div>
<?php
  $menu = menu_navigation_links(\'menu-wgbh-food-links\'); 
  print theme(\'links__menu_wgbh_food_links\', array(\'links\' => $menu)); 
?>';

  $export['food_at_wgbh'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Fake Ad Food & Wine';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'food_wine_ad';
  $fe_block_boxes->body = '<p><img alt="" src="/sites/default/files/Food+Wine-ad.jpg" /></p>
';

  $export['food_wine_ad'] = $fe_block_boxes;

  $fe_block_boxes = new stdClass();
  $fe_block_boxes->info = 'Rail Newsletter Signup';
  $fe_block_boxes->format = 'full_html';
  $fe_block_boxes->machine_name = 'rail_newsletter_signup';
  $fe_block_boxes->body = '<p><a>Sign up for our newsletter</a></p>

<p><input size="10" /><button class="btn sign-up">Feed Me</button></p>
';

  $export['rail_newsletter_signup'] = $fe_block_boxes;

  return $export;
}
