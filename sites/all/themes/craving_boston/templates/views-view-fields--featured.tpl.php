<div class="featured-info">
  <div class="article-title">
    <?php print $headline; ?>
  </div>
  <div class="info">
    <?php if (array_key_exists('field_subhead', $fields) && $fields['field_subhead']->content): ?>
      <div class="article-subhead">
        <?php print $fields['field_subhead']->content; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<div class="image">
  <?php print $image; ?>
</div>
