<h2 class="title<?php print $has_video ? ' has-video' : ''; ?><?php print $is_recipe ? ' recipe' : ''; ?>"><?php print $fields['title']->content; ?></h2>
<div class="info">
  <div class="deck">
    <?php print $deck; ?>
    <div class="byline">By <?php print $byline; ?></div>
  </div>
</div>
<div class="image">
  <?php print $image; ?>
</div>
